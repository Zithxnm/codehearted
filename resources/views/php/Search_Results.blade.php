<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results - "{{ $query }}"</title>
    @vite(['resources/css/Search_Results_Styles.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        .results-section { margin-bottom: 3rem; text-align: left; }
        .section-heading {
            font-family: 'Retro';
            color: #5a3100;
            font-size: 1.5rem;
            margin-bottom: 1rem;
            border-bottom: 2px solid #ef8a34;
            padding-bottom: 5px;
            display: inline-block;
        }
        .empty-state { font-family: 'Glacial'; color: #666; font-style: italic; }

        .user-result {
            display: flex; align-items: center; gap: 15px;
            background: white; border: 2px solid #71351a;
            padding: 10px 20px; border-radius: 10px; margin-bottom: 10px;
            text-decoration: none; transition: transform 0.2s;
        }
        .user-result:hover { transform: translateY(-2px); box-shadow: 4px 4px 0 rgba(0,0,0,0.1); }
    </style>
</head>
<body>

<header class="header">
    <div class="container">
        <div class="header-content">
            <div class="logo">
                <a href="{{ route('dashboard') }}"><img src="{{ asset('imgs/CodeHearted_Logo.png') }}" alt="Logo"></a>
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
                                <a href="{{ $notification->data['link'] ?? '#' }}" class="notif-item {{ $notification->read_at ? 'read' : 'unread' }}">
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
                    <div class="burger-icon" onclick="toggleBurger(event)"></div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>

                    <div class="burger-dropdown" id="burgerDropdown">
                        @if(Auth::user()->isAdmin())
                            <a href="{{ route('admin.index') }}" class="dropdown-link">Admin Panel</a>
                        @endif
                        <a href="{{ route('dashboard') }}" class="dropdown-link">Dashboard</a>
                        <a href="{{ route('courses.index') }}" class="dropdown-link">Courses</a>
                        <a href="{{ route('profile') }}" class="dropdown-link">Profile</a>
                        <a href="{{ route('community.index') }}" class="dropdown-link">Community</a>
                        <a href="{{ route('about') }}" class="dropdown-link">About</a>
                        <a href="#" class="dropdown-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="hero" style="display: block; padding-top: 2rem;">
    <h1 style="font-family: 'Retro'; color: #5a3100; margin-bottom: 2rem;">Search Results for "{{ $query }}"</h1>

    <div class="container" style="max-width: 1000px; margin: 0 auto;">

        <div class="results-section">
            <h2 class="section-heading">📚 Courses ({{ $courses->count() }})</h2>
            @if($courses->count() > 0)
                <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 20px;">
                    @foreach($courses as $course)
                        <a href="{{ route('courses.show', $course->id) }}" style="text-decoration: none;">
                            <div class="course-card" style="margin: 0; height: 100%;">
                                <img src="{{ asset($course->icon_path) }}" alt="Icon" style="width: 50px; margin-bottom: 10px;">
                                <div class="course-details">
                                    <h3 class="course-title">{{ $course->title }}</h3>
                                    <p class="course-description" style="font-size: 0.9rem;">{{ Str::limit($course->description, 60) }}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            @else
                <p class="empty-state">No courses found.</p>
            @endif
        </div>

        <div class="results-section">
            <h2 class="section-heading">💬 Community Discussions ({{ $discussions->count() }})</h2>
            @if($discussions->count() > 0)
                @foreach($discussions as $post)
                    <div class="discussion-card" onclick="window.location='{{ route('community.show', $post->Community_ID) }}'" style="cursor: pointer;">
                        <div class="discussion-header">
                            <div style="display: flex; align-items: center;">
                                <img src="{{ asset($post->user->profile_picture_path ?? 'imgs/15.png') }}"
                                     style="width: 35px; height: 35px; border-radius: 50%; object-fit: cover; margin-right: 10px; border: 2px solid #5a3100;">
                                <div>
                                    <div class="discussion-title">{{ $post->Title }}</div>
                                    <div style="color: #6b7280; font-size: 0.85rem;">
                                        By {{ $post->user->name ?? 'Unknown' }} • {{ $post->created_at->diffForHumans() }}
                                    </div>
                                </div>
                            </div>
                            <span class="discussion-badge">{{ $post->Category }}</span>
                        </div>

                        <div style="margin: 10px 0; color: #4b5563; font-size: 0.95rem; line-height: 1.5;">
                            {{ Str::limit($post->Content, 120) }}
                        </div>

                        <div class="discussion-meta" style="display: flex; align-items: center; gap: 15px; border-top: 1px solid #eee; padding-top: 10px; margin-top: 10px;">
            <span class="meta-item" style="display: flex; align-items: center; color: #6b7280; font-size: 0.9rem;">
                💬 {{ $post->replies_count }} replies
            </span>

                            <button
                                class="like-btn"
                                data-id="{{ $post->Community_ID }}"
                                onclick="event.stopPropagation();"
                                style="display: flex; align-items: center; gap: 5px; background: none; border: none; cursor: pointer; color: {{ $post->is_liked ? '#e95e16' : '#9ca3af' }}; font-family: 'Glacial'; font-weight: bold;">

                                <i class="{{ $post->is_liked ? 'fa-solid' : 'fa-regular' }} fa-thumbs-up"></i>
                                <span class="like-text">
                    <span class="like-count">{{ $post->Likes }}</span>
                </span>
                            </button>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="empty-state">No discussions found.</p>
            @endif
        </div>

        <div class="results-section">
            <h2 class="section-heading">👥 Users ({{ $users->count() }})</h2>
            @if($users->count() > 0)
                <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 15px;">
                    @foreach($users as $user)
                        <a href="{{ route('profile.show', $user->id) }}" class="user-result">
                            <img src="{{ asset($user->profile_picture_path ?? 'imgs/15.png') }}"
                                 style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; border: 2px solid #5a3100;">
                            <div>
                                <div style="font-family: 'Retro'; color: #5a3100;">{{ $user->name }}</div>
                                <div style="font-family: 'Glacial'; color: #666; font-size: 0.8rem;">{{ '@'.$user->username }}</div>
                            </div>
                        </a>
                    @endforeach
                </div>
            @else
                <p class="empty-state">No users found.</p>
            @endif
        </div>

    </div>
</div>
@vite(['resources/js/Community_Scripts.js', 'resources/js/Search_Results_Scripts.js'])
<script>
    function toggleNotifications(e) {
        e.stopPropagation();
        const list = document.getElementById('notif-list');
        list.classList.toggle('show');
        // Close burger if open
        document.querySelector('.burger-menu').classList.remove('open');
    }

    function toggleBurger(e) {
        e.stopPropagation();
        const menu = document.querySelector('.burger-menu');
        menu.classList.toggle('open');
        // Close notifs if open
        document.getElementById('notif-list').classList.remove('show');
    }

    // Close dropdowns when clicking outside
    document.addEventListener('click', function(e) {
        const notifWrapper = document.querySelector('.notification-wrapper');
        const notifList = document.getElementById('notif-list');
        const burgerMenu = document.querySelector('.burger-menu');

        if (notifWrapper && !notifWrapper.contains(e.target)) {
            notifList.classList.remove('show');
        }
        if (burgerMenu && !burgerMenu.contains(e.target)) {
            burgerMenu.classList.remove('open');
        }
    });
</script>
</body>
</html>
