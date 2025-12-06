<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite('resources/css/Community_Show_Styles.css')
    <title>{{ $post->Title }} - CodeHearted</title>
    <style>
        .thread-container {
            max-width: 900px;
            margin: 0 auto;
            text-align: left;
        }

        .main-post {
            background: white;
            border: 3px solid #5a3100;
            border-radius: 0.75rem;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 4px 4px 0px rgba(90, 49, 0, 0.1);
        }

        .post-title {
            font-family: Retro;
            font-size: 2rem;
            color: #5a3100;
            margin-bottom: 1rem;
        }

        .post-meta {
            font-family: Glacial;
            color: #6b7280;
            border-bottom: 1px solid #e5e7eb;
            padding-bottom: 1rem;
            margin-bottom: 1rem;
            display: flex;
            justify-content: space-between;
        }

        .post-content {
            font-family: Glacial;
            font-size: 1.1rem;
            line-height: 1.6;
            color: #374151;
            white-space: pre-wrap;
        }

        .replies-section {
            margin-top: 3rem;
        }

        .reply-card {
            background: rgba(255, 255, 255, 0.8);
            border: 1px solid #e5e7eb;
            border-left: 4px solid #ef8a34;
            border-radius: 0.5rem;
            padding: 1.5rem;
            margin-bottom: 1rem;
        }

        .reply-form {
            background: white;
            padding: 1.5rem;
            border-radius: 0.75rem;
            margin-top: 2rem;
            border: 1px solid #e5e7eb;
        }

        .back-btn {
            display: inline-flex;
            align-items: center;
            margin-bottom: 1rem;
            color: #5a3100;
            text-decoration: none;
            font-family: Glacial;
            font-weight: bold;
        }

        .back-btn:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header-content">
            <div class="logo">
                <a href="{{ route('dashboard') }}"><img src={{asset("imgs/CodeHearted_Logo.png")}} alt="Logo"></a>
            </div>
            <div class="burger-menu">
                <div class="burger-icon">
                </div>
                <form class="burger-dropdown" method="POST" action="{{ route('logout') }}">
                    @csrf
                    @if(Auth::user()->isAdmin())
                        <a href="{{ route('admin.index') }}" class="dropdown-link">Admin Panel</a>
                    @endif
                    <a href="{{ route('dashboard') }}" class="dropdown-link">Dashboard</a>
                    <a href="{{ route('profile') }}" class="dropdown-link">Profile</a>
                    <a href="{{ route('courses.index') }}" class="dropdown-link">Courses</a>
                    <a href="{{ route('about') }}" class="dropdown-link">About</a>
                    <a href="{{ route('logout') }}" class="dropdown-link"
                       onclick="event.preventDefault(); this.closest('form').submit();">
                        Logout</a>
                </form>
            </div>
        </div>
    </div>
</header>

<div class="hero">
    <div class="thread-container">
        <a href="{{ route('community.index') }}" class="back-btn">
            ← Back to Discussions
        </a>

        <div class="main-post" style="position: relative;">

            <div class="post-header" style="display: flex; align-items: center; gap: 15px; margin-bottom: 1.5rem;">
                <img
                    src="{{ $post->user->profile_picture_path ? asset($post->user->profile_picture_path) : asset('imgs/15.png') }}"
                    alt="Profile"
                    style="width: 55px; height: 55px; border-radius: 50%; object-fit: cover; border: 2px solid #5a3100; flex-shrink: 0;"
                >

                <div style="flex-grow: 1;">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                <span style="color: #5a3100; font-weight: 700; font-size: 1.1rem; font-family: 'Glacial';">
                    {{ $post->user->name ?? 'Unknown' }}
                </span>
                        <span style="color: #9ca3af; font-size: 0.9rem; font-family: 'Glacial';">
                    {{ $post->created_at->format('M d, Y') }}
                </span>
                    </div>
                    <h1 class="post-title" style="margin: 0.2rem 0 0 0; font-size: 1.8rem; line-height: 1.2;">
                        {{ $post->Title }}
                    </h1>
                </div>
            </div>

            <hr style="border: 0; border-top: 1px dashed #d1d5db; margin-bottom: 1.5rem;">

            <div class="post-content" style="font-size: 1.15rem; line-height: 1.8; color: #374151; margin-bottom: 2rem; min-height: 80px;">
                {{ $post->Content }}
            </div>

            <div class="post-footer" style="display: flex; justify-content: space-between; align-items: center; padding-top: 1rem; border-top: 2px solid #f3f4f6;">

        <span class="category" ">
            {{ $post->Category }}
        </span>

                <button
                    class="like-btn"
                    data-id="{{ $post->Community_ID }}"
                    style="background:none; border:none; padding:0; font-size: 0.85rem; cursor: pointer; color: {{ $post->is_liked ? '#e95e16' : '#9ca3af' }};">
                    <i class="{{ $post->is_liked ? 'fa-solid' : 'fa-regular' }} fa-thumbs-up"></i>
                    <span class="like-count">{{ $post->Likes }}</span>
                </button>
            </div>
        </div>

        <div class="replies-section">
            <h3 style="font-family: Retro; color: #5a3100; margin-bottom: 1.5rem;">
                Replies ({{ $post->replies->count() }})
            </h3>

            @forelse($post->replies as $reply)
                <div class="reply-card" style="padding: 1rem; margin-bottom: 0.5rem; background: rgba(255,255,255,0.6);">
                    <div style="display: flex; gap: 12px; align-items: flex-start;">

                        <img
                            src="{{ $reply->user->profile_picture_path ? asset($reply->user->profile_picture_path) : asset('imgs/15.png') }}"
                            alt="Profile"
                            style="width: 32px; height: 32px; border-radius: 50%; object-fit: cover; border: 1px solid #6b7280; flex-shrink: 0;"
                        >

                        <div style="flex-grow: 1;">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.25rem;">
                                <div>
                                    <strong style="color: #374151; font-size: 0.9rem;">{{ $reply->user->name ?? 'Unknown' }}</strong>
                                    <span style="color: #9ca3af; font-size: 0.8rem;">• {{ $reply->created_at->diffForHumans() }}</span>
                                </div>

                                <button
                                    class="like-btn"
                                    data-id="{{ $reply->Community_ID }}"
                                    style="background:none; border:none; padding:0; font-size: 0.85rem; cursor: pointer; color: {{ $reply->is_liked ? '#e95e16' : '#9ca3af' }};">
                                    <i class="{{ $reply->is_liked ? 'fa-solid' : 'fa-regular' }} fa-thumbs-up"></i>
                                    <span class="like-count">{{ $reply->Likes }}</span>
                                </button>
                            </div>

                            <div class="post-content" style="font-size: 0.95rem; line-height: 1.4; color: #4b5563;">
                                {{ $reply->Content }}
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p style="font-family: Glacial; color: #6b7280; font-style: italic; text-align:center; margin-top:1rem;">No replies yet. Be the first to share your thoughts!</p>
            @endforelse
        </div>

        <div class="reply-form">
            <h4 style="font-family: Retro; color: #5a3100; margin-bottom: 1rem;">Leave a Reply</h4>
            <form action="{{ route('community.reply', $post->Community_ID) }}" method="POST">
                @csrf
                <textarea
                    name="Content"
                    rows="4"
                    placeholder="Type your response here..."
                    required
                    style="width: 100%; padding: 1rem; border: 1px solid #d1d5db; border-radius: 0.5rem; font-family: Glacial; margin-bottom: 1rem;"></textarea>

                <div style="text-align: right;">
                    <button type="submit" class="new-discussion-btn">Post Reply</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

@vite('resources/js/Community_Show_Scripts.js')
<script>
    @if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}");
    @endif
</script>
</body>
</html>
