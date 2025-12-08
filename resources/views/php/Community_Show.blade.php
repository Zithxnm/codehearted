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
    @vite('resources/css/Community_Show_Styles.css')

</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-php.min.js"></script>
<script>
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
<header class="header">
    <div class="container">
        <div class="header-content">
            <div class="logo">
                <a href="{{ route('dashboard') }}">
                    <img src="{{ asset('imgs/CodeHearted_Logo.png') }}" alt="Logo">
                </a>
            </div>

            <div class="search-container">
                <form action="{{ route('global.search') }}" method="GET" class="search-box">
                    <button class="search-icon-btn" type="submit">
                        <img class="search-icon" src="{{ asset('imgs/7.jpg') }}" alt="Search">
                    </button>
                    <input type="text" name="search" placeholder="Search..." class="search-input" value="{{ request('search') }}">
                </form>
            </div>

            <div class="header-actions">

                <div class="notification-wrapper">
                    <button class="notif-btn" onclick="toggleNotifications(event)">
                        <i class="fa-solid fa-bell"></i>
                        @if(auth()->user()->unreadNotifications->count() > 0)
                            <span class="notif-badge">
                                {{ auth()->user()->unreadNotifications->count() }}
                            </span>
                        @endif
                    </button>

                    <div id="notif-list" class="notif-dropdown">
                        <div class="notif-header">Notifications</div>
                        <div class="notif-items">
                            @forelse(auth()->user()->notifications->take(5) as $notification)
                                <a href="{{ $notification->data['link'] }}" class="notif-item {{ $notification->read_at ? 'read' : 'unread' }}">
                                    <span class="notif-message">{{ $notification->data['message'] }}</span>
                                    <span class="notif-time">{{ $notification->created_at->diffForHumans() }}</span>
                                </a>
                                {{ $notification->markAsRead() }}
                            @empty
                                <div class="notif-empty">No new notifications</div>
                            @endforelse
                        </div>
                    </div>
                </div>

                <div class="burger-menu">
                    <div class="burger-icon"></div>
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
    </div>
</header>

<hr>
<main>
    <div style="margin-bottom: 20px;">
        <a href="{{ route('community.index') }}">&larr; Back to Discussions</a>
    </div>

    <article>
        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
            @if(Auth::id() === $post->user_id)
                <a href="{{ route('community.edit', $post->Community_ID) }}" style="font-size: 0.9rem;">
                    <i class="fa-solid fa-pen"></i> Edit
                </a>
            @endif
            @if(Auth::check() && Auth::user()->isAdmin())
                <form action="{{ route('community.destroy', $post->Community_ID) }}" method="POST" onsubmit="return confirm('Delete this entire thread?');" style="margin:0;">
                       @csrf @method('DELETE')
                       <button type="submit" style="background:none; border:none; cursor:pointer; color: #ef4444; font-size: 0.9rem;" title="Delete Thread">
                            <i class="fa-solid fa-trash"></i>
                       </button>
                </form>
            @endif
        </div>

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

        <div class="discussion-footer">
            <span class="discussion-badge">Category: {{ $post->Category }}</span>

            <button class="like-btn" data-id="{{ $post->Community_ID }}">
                <i class="{{ $post->is_liked ? 'fa-solid' : 'fa-regular' }} fa-thumbs-up"></i>
                <span class="like-count">{{ $post->Likes }}</span> Likes
            </button>
        </div>
    </article>
    <hr>

    <section>
        <h3 style="font-family: 'Retro'; color: #5a3100; margin-bottom: 1.5rem;">
            Replies ({{ $post->replies->count() }})
        </h3>

        @forelse($post->replies as $reply)
            @php
                $isSolution = $post->solved_by_reply_id == $reply->Community_ID;
            @endphp

            <div class="reply-item {{ $isSolution ? 'solution-card' : '' }}"
                 style="{{ $isSolution ? 'border: 2px solid #22c55e; background-color: #f0fdf4; padding: 1rem; border-radius: 8px;' : '' }}">

                @if($isSolution)
                    <div style="color: #166534; font-weight: bold; font-size: 0.9rem; margin-bottom: 10px; display: flex; align-items: center; gap: 5px;">
                        <i class="fa-solid fa-check-circle"></i> Best Answer
                    </div>
                @endif

                <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                    <div style="display: flex; align-items: center;">
                        <a href="{{ route('profile.show', $reply->user_id) }}">
                        <img
                            src="{{ $reply->user->profile_picture_path ? asset($reply->user->profile_picture_path) : asset('imgs/15.png') }}"
                            alt="Reply User Avatar"
                            width="35"
                            height="35"
                            style="border-radius: 50%; margin-right: 10px; border: 1px solid #71351a;">
                        </a>

                        <div>
                            <strong style="color: #3b2a1a;">{{ $reply->user->name ?? 'Unknown' }}</strong>
                            <div style="font-size: 0.8rem; color: #6b7280;">{{ $reply->created_at->diffForHumans() }}</div>
                        </div>
                    </div>

                    <div style="display: flex; align-items: center; gap: 8px;">
                        @if(Auth::id() === $post->user_id)
                            <form action="{{ route('community.solve', ['id' => $post->Community_ID, 'reply_id' => $reply->Community_ID]) }}" method="POST" style="margin: 0;">
                                @csrf
                                <button type="submit"
                                        style="background: none; border: 1px solid {{ $isSolution ? '#22c55e' : '#9ca3af' }}; color: {{ $isSolution ? '#22c55e' : '#9ca3af' }}; cursor: pointer; padding: 4px 8px; border-radius: 4px; font-size: 0.85rem;"
                                        title="{{ $isSolution ? 'Unmark Solution' : 'Mark as Solution' }}">
                                    <i class="fa-solid fa-check"></i>
                                </button>
                            </form>
                        @endif

                        <button class="like-btn" data-id="{{ $reply->Community_ID }}" style="font-size: 0.85rem; padding: 4px 8px;">
                            <i class="{{ $reply->is_liked ? 'fa-solid' : 'fa-regular' }} fa-thumbs-up"></i>
                            <span class="like-count">{{ $reply->Likes }}</span>
                        </button>

                        @if(Auth::id() === $reply->user_id)
                            <a href="{{ route('community.edit', $reply->Community_ID) }}" style="color: #e95e16; font-size: 0.9rem;" title="Edit Reply">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                        @endif

                        @if(Auth::check() && Auth::user()->isAdmin())
                            <form action="{{ route('community.destroy', $reply->Community_ID) }}" method="POST" onsubmit="return confirm('Delete this reply?');" style="margin:0;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background: none; border: none; cursor: pointer; color: #ef4444; font-size: 0.9rem;" title="Delete Reply">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        @endif
                    </div>
                </div>

                <div class="post-content" style="margin-top: 10px; font-size: 1rem; color: #374151; line-height: 1.6;">
                    {{ $reply->Content }}
                </div>
            </div>
            <hr style="border: 0; border-top: 1px solid #eee; margin: 1.5rem 0;">
        @empty
            <p style="text-align: center; color: #6b7280; font-style: italic;">No replies yet. Be the first to share your thoughts!</p>
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
                <button type="submit" class="reply-submit-btn">Post Reply</button>
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

<div class="grass-background">
    <div class="grass-layer"></div>
</div>

<section class="before-footer">
    <div class="minecraft">
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h4 class="footer-title">Quick Links</h4>
                <ul class="footer-links">
                    <li>
                        <a href="/about" class="footer-link">
                            <span>➤ About Us</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="footer-section">
                <h4 class="footer-title">Stay sharp as a fox — follow us for news and updates.</h4>
                <div class="social-links">
                    <a href="https://www.facebook.com/PampangaStateU" class="social-link" aria-label="PSU" target="_blank">
                        <img class="psu" src="{{asset('/imgs/WhiteLogo_PSU.png')}}" alt="PSU">
                    </a>
                    <a href="https://www.facebook.com/dhvsu.ccssc" class="social-link" aria-label="CCS" target="_blank">
                        <img class="ccs" src="{{asset('/imgs/WhiteLogo_CCSSC.png')}}" alt="PSU">
                    </a>
                    <a href="https://www.facebook.com/ComPressCCS" class="social-link" aria-label="ComPress" target="_blank">
                        <img class="compress" src="{{asset('/imgs/WhiteLogo_ComPress.png')}}" alt="PSU">
                    </a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>© 2025 CodeHearted. All rights reserved. Built with ♥ for clever foxes everywhere.</p>
        </div>
    </div>
</footer>


</body>

</html>
