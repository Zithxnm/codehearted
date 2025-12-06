<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->Title }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-okaidia.min.css" rel="stylesheet" />
    @vite("resources/css/Community_Show_Styles.css")

</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-php.min.js"></script> <script>
    document.addEventListener("DOMContentLoaded", function() {
        let contentDivs = document.querySelectorAll('.post-content');

        contentDivs.forEach(div => {
            let html = div.innerHTML;

            html = html.replace(/```([\s\S]*?)```/g, function(match, code) {
                return '<pre><code class="language-php">' + code.trim() + '</code></pre>';
            });

            div.innerHTML = html;
        });

        // Trigger Prism to highlight the new blocks
        Prism.highlightAll();
    });
</script>
<body>

<hr> <main>
    <div style="margin-bottom: 20px;">
        <a href="{{ route('community.index') }}">&larr; Back to Discussions</a>
    </div>

    <article>
        @if(Auth::id() === $post->user_id)
            <a href="{{ route('community.edit', $post->Community_ID) }}" style="font-size: 0.9rem;">
                <i class="fa-solid fa-pen"></i> Edit
            </a>
        @endif
        @if(Auth::check() && Auth::user()->isAdmin())
            <div style="margin-top: 10px;">
                <form action="{{ route('community.destroy', $post->Community_ID) }}" method="POST" onsubmit="return confirm('Delete this entire thread?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="color: red;">[Admin] Delete Thread</button>
                </form>
            </div>
        @endif
        <div>
            <a href="{{ route('profile.show', $post->user_id) }}" style="text-decoration:none; color:inherit; display:flex; align-items:center;">
                <img
                    src="{{ $post->user->profile_picture_path ? asset($post->user->profile_picture_path) : asset('imgs/15.png') }}"
                    alt="User Avatar"
                    width="50"
                    height="50">
                <strong>{{ $post->user->name ?? 'Unkown User'}}</strong>
            </a>

            <small>{{ $post->created_at->format('M d, Y') }}</small>
        </div>

        <h1>{{ $post->Title }}</h1>

        <div class="post-content">
            <p>{{ $post->Content }}</p>
        </div>

        <div>
            <span>Category: {{ $post->Category }}</span>

            <button class="like-btn" data-id="{{ $post->Community_ID }}">
                <i class="{{ $post->is_liked ? 'fa-solid' : 'fa-regular' }} fa-thumbs-up"></i>

                <span class="like-count">{{ $post->Likes }}</span> Likes
            </button>
        </div>
    </article>
    <hr>

    <section>
        <h3>Replies ({{ $post->replies->count() }})</h3>

        @forelse($post->replies as $reply)
            <div class="reply-item">


                <div>
                    <div class="reply-card" style="{{ $post->solved_by_reply_id == $reply->Community_ID ? 'border: 2px solid #22c55e; background: #f0fdf4;' : '' }}">

                        @if($post->solved_by_reply_id == $reply->Community_ID)
                            <div style="color: #22c55e; font-weight: bold; margin-bottom: 10px;">
                                <i class="fa-solid fa-check-circle"></i> Best Answer
                            </div>
                        @endif

                        @if(Auth::id() === $post->user_id)
                            <form action="{{ route('community.solve', ['id' => $post->Community_ID, 'reply_id' => $reply->Community_ID]) }}" method="POST" style="margin-top: 10px;">
                                @csrf
                                <button type="submit" style="cursor: pointer; background: none; border: 1px solid #22c55e; color: #22c55e; padding: 5px 10px; border-radius: 5px;">
                                    {{ $post->solved_by_reply_id == $reply->Community_ID ? 'Unmark Solution' : '✓ Mark as Solution' }}
                                </button>
                            </form>
                        @endif
                    </div>
                    <img
                        src="{{ $reply->user->profile_picture_path ? asset($reply->user->profile_picture_path) : asset('imgs/15.png') }}"
                        alt="Reply User Avatar"
                        width="30"
                        height="30">
                    <strong>{{ $reply->user->name ?? 'Unknown' }}</strong>
                    <small>{{ $reply->created_at->diffForHumans() }}</small>

                    <button class="like-btn" data-id="{{ $reply->Community_ID }}">
                        <i class="{{ $reply->is_liked ? 'fa-solid' : 'fa-regular' }} fa-thumbs-up"></i>
                        <span class="like-count">{{ $reply->Likes }}</span>
                    </button>
                    @if(Auth::id() === $reply->user_id)
                        <a href="{{ route('community.edit', $reply->Community_ID) }}" style="font-size: 0.85rem;">
                            <i class="fa-solid fa-pen"></i> Edit
                        </a>
                    @endif
                    @if(Auth::check() && Auth::user()->isAdmin())
                        <form action="{{ route('community.destroy', $reply->Community_ID) }}" method="POST" onsubmit="return confirm('Delete this reply?');" style="display:inline; margin-left: 10px;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="color: red; font-size: 0.8em;">[Delete]</button>
                        </form>
                    @endif
                </div>

                <p>{{ $reply->Content }}</p>
            </div>
            <hr> @empty
            <p>No replies yet. Be the first to share your thoughts!</p>
        @endforelse
    </section>
    <section>
        <h4>Leave a Reply</h4>
        <form action="{{ route('community.reply', $post->Community_ID) }}" method="POST">
            @csrf

            <div>
                <textarea name="Content" rows="5" placeholder="Type your response here..." required></textarea>
            </div>

            <div style="margin-top: 10px;">
                <button type="submit">Post Reply</button>
            </div>
        </form>
    </section>

</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

@vite('resources/js/Community_Show_Scripts.js')

<script>
    @if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}");
    @endif
</script>

</body>
</html>
