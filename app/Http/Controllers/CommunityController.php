<?php

namespace App\Http\Controllers;

use App\Models\Community;
use Illuminate\Http\Request;
use App\Models\User;

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

        return redirect()->route('community.index')->with('success', 'Discussion created!');
    }
    public function show($id)
    {
        // Load the Main Post + Check if liked
        // Load the Replies + Check if EACH reply is liked + Load Reply Authors
        $post = Community::with([
            'user',
            'replies' => function($query) {
                $query->with('user')
                    ->withExists(['likedByUsers as is_liked' => function ($q) {
                        $q->where('user_id', auth()->id());
                    }]);
            }
        ])
            ->withExists(['likedByUsers as is_liked' => function ($q) {
                $q->where('user_id', auth()->id());
            }])
            ->findOrFail($id);

        return view('php.Community_Show', compact('post'));
    }

    public function reply(Request $request, $id)
    {
        $validated = $request->validate(['Content' => 'required|string']);

        Community::create([
            'user_id' => auth()->id(),
            'Parent_ID' => $id,
            'Content' => $validated['Content'],
            'Title' => null,
        ]);

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
}
