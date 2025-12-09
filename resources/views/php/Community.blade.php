<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite('resources/css/Community_Styles.css')
    <title>CodeHearted - Community Forum</title>
</head>

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

    <!-- Main Container -->
    <div class="hero">
        <!-- Hero Section -->
        <div class="hero-content">
            <h1>Community Forum</h1>
            <p>Connect with fellow learners, ask questions, and share knowledge</p>
        </div>

        <!-- Search Bar -->
        <form action="{{ route('community.index') }}" method="GET" class="search-bar">
            <input type="text" name="search" class="search-input" placeholder="Search discussions..." value="{{ request('search') }}">
            <button type="button" onclick="document.getElementById('newPostModal').style.display='block'" class="new-discussion-btn">New Discussion</button>
        </form>

        <div class="content-grid">
            <div class="discussions-section">
                <div class="section-header">
                    <h2>{{ request('search') ? 'Search Results' : 'Recent Discussions' }}</h2>
                    <div class="filter-tabs">
                        <a href="{{ route('community.index') }}" class="filter-tab {{ !request('filter') ? 'active' : '' }}">Latest</a>
                        <a href="{{ route('community.index', ['filter' => 'popular']) }}" class="filter-tab {{ request('filter') == 'popular' ? 'active' : '' }}">Popular</a>
                    </div>
                </div>

                @foreach($posts as $post)
                <div class="discussion-card" onclick="window.location='{{ route('community.show', $post->Community_ID) }}'">
                    <div class="discussion-header">
                        <img
                            src="{{ $post->user->profile_picture_path ? asset($post->user->profile_picture_path) : asset('imgs/15.png') }}"
                            alt="Profile"
                            style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; margin-right: 10px; border: 2px solid #5a3100;">

                        <div>
                            <div class="discussion-title">{{ $post->Title }}</div>
                            <div style="color: #6b7280; font-size: 0.875rem;">
                                By {{ $post->user->name ?? 'Unknown' }} • {{ $post->created_at->diffForHumans() }}
                            </div>
                        </div>

                        <span class="discussion-badge" style="margin-left: auto;">{{ $post->Category }}</span>
                    </div>

                    <div class="discussion-meta" style="display: flex; align-items: center; gap: 15px;">

                        <span class="meta-item" style="display: flex; align-items: center;">
                            💬 {{ $post->replies_count }} replies
                        </span>

                        <button
                            class="like-btn"
                            data-id="{{ $post->Community_ID }}"
                            onclick="event.stopPropagation();"
                            style="display: flex; align-items: center; gap: 5px; background: none; border: none; cursor: pointer; color: {{ $post->is_liked ? '#e95e16' : '#9ca3af' }};">
                            <i class="{{ $post->is_liked ? 'fa-solid' : 'fa-regular' }} fa-thumbs-up"></i>
                            <span class="like-text">
                                <span class="like-count">{{ $post->Likes }}</span>
                            </span>
                        </button>

                        @if(Auth::id() === $post->user_id)
                        <a href="{{ route('community.edit', $post->Community_ID) }}" style="color: #2563eb; text-decoration: none; margin-right: 10px; font-size: 0.9rem;">
                            <i class="fa-solid fa-pen"></i> Edit
                        </a>
                        @endif
                        @if(Auth::check() && Auth::user()->isAdmin())
                        <form action="{{ route('community.destroy', $post->Community_ID) }}" method="POST" onclick="event.stopPropagation();" onsubmit="return confirm('Are you sure you want to delete this discussion?');" style="margin: 0;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="display: flex; align-items: center; justify-content: center; background:none; border:none; cursor:pointer; color: #ef4444; padding: 0;" title="Delete Discussion">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                        @endif
                    </div>
                </div>
                @endforeach

                <div style="margin-top: 2rem;">
                    {{ $posts->links() }}
                </div>
            </div>

            <!-- Sidebar -->
            <aside class="sidebar">
                <!-- Community Stats -->
                <div class="stats-card">
                    <div class="card-title">
                        👥 Community Stats
                    </div>

                    <div class="stat-item">
                        <span class="stat-value">{{ number_format($totalUsers) }}</span>
                        <span class="stat-label">Active Students</span>
                    </div>

                    <div class="stat-item">
                        <span class="stat-value">{{ number_format($totalDiscussions) }}</span>
                        <span class="stat-label">Discussions</span>
                    </div>

                    <div class="stat-item">
                        <span class="stat-value">{{ number_format($totalReplies) }}</span>
                        <span class="stat-label">Helpful Answers</span>
                    </div>
                </div>

                <!-- Guidelines -->
                <div class="guidelines-card">
                    <div class="card-title">
                        👥 Community Guidelines
                    </div>
                    <p style="font-size: 0.9rem; margin-bottom: 0.5rem;">Help us maintain a positive learning environment</p>
                    <ul class="guidelines-list">
                        <li>Be respectful and supportive</li>
                        <li>Stay on topic and helpful</li>
                        <li>Share knowledge generously</li>
                        <li>Give credit where due</li>
                    </ul>
                </div>
            </aside>

            <div id="newPostModal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5); z-index:2000;">
                <div style="background:white; width:90%; max-width:500px; margin:100px auto; padding:2rem; border-radius:10px;">
                    <h2 style="margin-bottom:1rem; font-family:Retro; color:#5a3100;">Start a Discussion</h2>
                    <form action="{{ route('community.store') }}" method="POST">
                        @csrf
                        <div style="margin-bottom:1rem;">
                            <label style="display:block; margin-bottom:0.5rem;">Title</label>
                            <input type="text" name="Title" required style="width:100%; padding:0.5rem; border:1px solid #ddd; border-radius:5px;">
                        </div>
                        <div style="margin-bottom:1rem;">
                            <label style="display:block; margin-bottom:0.5rem;">Category</label>
                            <select name="Category" style="width:100%; padding:0.5rem; border:1px solid #ddd; border-radius:5px;">
                                <option>General</option>
                                <option>Programming</option>
                                <option>Design</option>
                                <option>Networks</option>
                            </select>
                        </div>
                        <div style="margin-bottom:1rem;">
                            <label style="display:block; margin-bottom:0.5rem;">Content</label>
                            <textarea name="Content" rows="4" required style="width:100%; padding:0.5rem; border:1px solid #ddd; border-radius:5px;"></textarea>
                        </div>
                        <div style="display:flex; justify-content:flex-end; gap:1rem;">
                            <button type="button" onclick="document.getElementById('newPostModal').style.display='none'" class="new-discussion-btn" ">Cancel</button>
                            <button type=" submit" class="new-discussion-btn">Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @vite('resources/js/Community_Scripts.js')
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
                    <li><a href="{{ route('courses.index') }}" class="footer-link"><span>➤ Learning Catalog</span></a></li>
                    <li><a href="{{ route('profile') }}" class="footer-link"><span>➤ Profile</span></a></li>
                    <li><a href="{{ route('dashboard') }}" class="footer-link"><span>➤ Dashboard</span></a></li>
                    <li><a href="{{ route('about') }}" class="footer-link"><span>➤ About Us</span></a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h4 class="footer-title">Stay sharp as a fox — follow us for news and updates.</h4>
                <div class="social-links">
                    <a href="https://www.facebook.com/PampangaStateU" class="social-link" aria-label="PSU" target="_blank">
                        <img class="psu" src="{{ asset('imgs/WhiteLogo_PSU.png') }}" alt="PSU">
                    </a>
                    <a href="https://www.facebook.com/dhvsu.ccssc" class="social-link" aria-label="CCS" target="_blank">
                        <img class="ccs" src="{{ asset('imgs/WhiteLogo_CCSSC.png') }}" alt="PSU">
                    </a>
                    <a href="https://www.facebook.com/ComPressCCS" class="social-link" aria-label="ComPress" target="_blank">
                        <img class="compress" src="{{ asset('imgs/WhiteLogo_ComPress.png') }}" alt="PSU">
                    </a>
                </div>
            </div>
        </div>


        <div class="footer-bottom">
            <p>© 2025 CodeHearted. All rights reserved.</p>
        </div>
    </div>
</footer>
</body>

</html>