<?php

namespace App\Http\Controllers;

use App\Models\AuditLog;
use App\Models\Community;
use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\NewReply;

class CommunityController extends Controller
{
    public function index(Request $request)
    {
        $query = Community::whereNull('Parent_ID')
            ->with('user')
            ->withCount('replies')
            ->withExists(['likedByUsers as is_liked' => function ($q) {
                $q->where('user_id', auth()->id());
            }]);

        // Search Logic
        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where(function($q) use ($search) {
                $q->where('Title', 'like', "%{$search}%")
                    ->orWhere('Content', 'like', "%{$search}%");
            });
        }

        // Filter Logic
        if ($request->get('filter') == 'popular') {
            $query->orderBy('likes', 'desc');
        } else {
            $query->orderBy('created_at', 'desc');
        }

        $posts = $query->paginate(10);

        $totalUsers = User::count();
        $totalDiscussions = Community::whereNull('Parent_ID')->count();
        $totalReplies = Community::whereNotNull('Parent_ID')->where('Likes', '>=', 1)->count();

        return view('php.Community', compact('posts', 'totalUsers', 'totalDiscussions', 'totalReplies'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'Title' => 'required|string|max:255',
            'Content' => 'required|string',
            'Category' => 'required|string',
        ]);

        Community::create([
            'user_id' => auth()->id(),
            'Title' => $validated['Title'],
            'Content' => $validated['Content'],
            'Category' => $validated['Category'],
        ]);

        AuditLog::create([
            'Admin_ID' => auth()->id(),
            'Action' => "Created a thread",
        ]);

        return redirect()->route('community.index')->with('success', 'Discussion created!');
    }
    public function show($id)
    {
        $post = Community::with('user')
            ->withExists(['likedByUsers as is_liked' => function ($q) {
                $q->where('user_id', auth()->id());
            }])
            ->findOrFail($id);

        $post->load(['replies' => function($query) use ($post) {
            $query->with('user')
                ->withExists(['likedByUsers as is_liked' => function ($q) {
                    $q->where('user_id', auth()->id());
                }])
                ->orderByRaw("CASE WHEN Community_ID = ? THEN 0 ELSE 1 END", [$post->solved_by_reply_id])
                ->orderBy('created_at', 'asc');
        }]);

        return view('php.Community_Show', compact('post'));
    }

    public function reply(Request $request, $id)
    {
        $validated = $request->validate(['Content' => 'required|string']);

        $reply = Community::create([
            'user_id' => auth()->id(),
            'Parent_ID' => $id,
            'Content' => $validated['Content'],
            'Title' => null,
        ]);
        $parentPost = Community::findOrFail($id);
        if ($parentPost->user_id !== auth()->id()) {
            $parentPost->user->notify(new NewReply($reply, $id));
        }

        return back()->with('success', 'Reply posted!');
    }

    public function like($id)
    {
        $post = Community::findOrFail($id);
        $user = auth()->user();

        // Toggle the like in the tracking table
        $post->likedByUsers()->toggle($user->id);

        // Update the total count column for easy sorting
        $post->Likes = $post->likedByUsers()->count();
        $post->save();

        return response()->json([
            'likes' => $post->Likes,
            'liked' => $post->isLikedByAuthUser()
        ]);
    }

    public function destroy($id)
    {
        $post = Community::findOrFail($id);

        // Only Admins can delete
        if (!auth()->user()->isAdmin()) {
            abort(403, 'Unauthorized action.');
        }

        $isReply = !is_null($post->Parent_ID);
        $parentId = $post->Parent_ID;

        // Delete the post
        $post->delete();

        $isPostOrReply = $post->Parent_ID ? "reply" : "post";
        AuditLog::create([
            'Admin_ID' => auth()->id(),
            'Action' => "Deleted $isPostOrReply # $post->Community_ID",
        ]);

        if ($isReply) {
            return redirect()->route('community.show', $parentId)->with('success', 'Reply deleted.');
        }

        return redirect()->route('community.index')->with('success', 'Discussion deleted.');
    }

    // Show the edit form
    public function edit($id)
    {
        $post = Community::findOrFail($id);

        // Security: Only the author can edit
        if (auth()->id() !== $post->user_id) {
            abort(403, 'Unauthorized action.');
        }

        return view('php.Community_Edit', compact('post'));
    }

// Save the changes
    public function update(Request $request, $id)
    {
        $post = Community::findOrFail($id);

        if (auth()->id() !== $post->user_id) {
            abort(403, 'Unauthorized action.');
        }

        //  If it's a main thread, validate Title/Category. If reply, just Content.
        $rules = [
            'Content' => 'required|string',
        ];

        if ($post->Parent_ID === null) {
            $rules['Title'] = 'required|string|max:255';
            $rules['Category'] = 'required|string';
        }

        $validated = $request->validate($rules);

        $post->update($validated);

        $isPostOrReply = $post->Parent_ID ? "reply" : "post";
        AuditLog::create([
            'Admin_ID' => auth()->id(),
            'Action' => "Edited $isPostOrReply # $post->Community_ID",
        ]);
        // If it's a reply, go back to the parent thread.
        $redirectId = $post->Parent_ID ? $post->Parent_ID : $post->Community_ID;

        return redirect()->route('community.show', $redirectId)->with('success', 'Post updated successfully!');
    }

    public function markAsSolution($id, $reply_id)
    {
        $post = Community::findOrFail($id);

        // Only the thread author can mark a solution
        if (auth()->id() !== $post->user_id) {
            abort(403);
        }

        if ($post->solved_by_reply_id == $reply_id) {
            $post->solved_by_reply_id = null;
        } else {
            $post->solved_by_reply_id = $reply_id;
        }

        $post->save();

        return back()->with('success', 'Solution status updated!');
    }
}
