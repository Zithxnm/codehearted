<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite("resources/css/Community_Edit_Styles.css")
    <title>Edit Post</title>
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
                            @auth
                                @if(Auth::user()->isAdmin())
                                    <a href="{{ route('admin.index') }}" class="dropdown-link">Admin Panel</a>
                                @endif
                                <a href="{{ route('dashboard') }}" class="dropdown-link">Dashboard</a>
                                <a href="{{ route('courses.index') }}" class="dropdown-link">Courses</a>
                                <a href="{{ route('profile') }}" class="dropdown-link">Profile</a>
                                <a href="{{ route('community.index') }}" class="dropdown-link">Community</a>
                                <a href="{{ route('about') }}" class="dropdown-link">About</a>
                                <a href="{{ route('logout') }}" class="dropdown-link"
                                   onclick="event.preventDefault(); this.closest('form').submit();">
                                    Logout</a>
                            @endauth
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

<main>
    <h1>Edit your {{ $post->Parent_ID ? 'Reply' : 'Discussion' }}</h1>

    <form action="{{ route('community.update', $post->Community_ID) }}" method="POST">
        @csrf
        @method('PUT')

        @if($post->Parent_ID === null)
            <div style="margin-bottom: 15px;">
                <label>Title:</label><br>
                <input type="text" name="Title" value="{{ $post->Title }}" style="width: 100%; padding: 8px;" required>
            </div>

            <div style="margin-bottom: 15px;">
                <label>Category:</label><br>
                <select name="Category" style="padding: 8px;" required>
                    <option value="General" {{ $post->Category == 'General' ? 'selected' : '' }}>General</option>
                    <option value="Programming" {{ $post->Category == 'Programming' ? 'selected' : '' }}>Programming</option>
                    <option value="Design" {{ $post->Category == 'Design' ? 'selected' : '' }}>Design</option>
                    <option value="Networks" {{ $post->Category == 'Networks' ? 'selected' : '' }}>Networks</option>
                </select>
            </div>
        @endif

        <div style="margin-bottom: 15px;">
            <label>Content:</label><br>
            <textarea name="Content" rows="10" style="width: 100%; padding: 8px;" required>{{ $post->Content }}</textarea>
        </div>

        <div style="display: flex; gap: 15px; justify-content: center; align-items: center; margin-top: 30px;">
            <a href="{{ route('community.show', $post->Parent_ID ?? $post->Community_ID) }}" class="cancel-btn">
                Cancel
            </a>

            <button type="submit" class="edit-submit-btn">
                Save Changes
            </button>
        </div>
    </form>
</main>

@vite('resources/js/Community_Edit_Scripts.js')



</body>
</html>
