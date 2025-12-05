<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeHearted - Profile</title>
    <meta name="description" content="Your CodeHearted Profile">
    @vite(['resources/css/Profile_Styles.css', 'resources/js/Profile_Scripts.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
<header class="header">
    <div class="container">
        <div class="header-content">
            <div class="logo">
                <a href="{{ route('home') }}"><img src="{{ asset('imgs/CodeHearted_Logo.png') }}" alt="Logo"></a>
            </div>

            <div class="search-container">
                <div class="search-box">
                    <button class="search-icon-btn" type="button" aria-label="Search">
                        <img class="search-icon" src="{{ asset('imgs/7.jpg') }}" alt="Search Icon">
                    </button>
                    <input type="text" placeholder="Search..." class="search-input">
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
                    <a href="{{ route('courses.index') }}" class="dropdown-link">Courses</a>
                    <a href="{{ route('show.community') }}" class="dropdown-link">Community</a>
                    <a href="{{ route('about') }}" class="dropdown-link">About</a>
                    <a href="{{ route('logout') }}" class="dropdown-link"
                       onclick="event.preventDefault(); this.closest('form').submit();">
                        Logout</a>
                </form>
            </div>
        </div>
    </div>
</header>

<div class="main-content">
    <div class="profile-container">
        @auth
            <img class="profile-picture"
                 src="{{ asset(Auth::user()->profile_picture_path ?? 'imgs/9.png') }}"
                 alt="Profile Picture"
                 id="profile_picture">

            <div class="profile-details">
                <h1 class="display-name">{{ Auth::user()->name }}</h1>

                <p class="username">{{ '@' . (Auth::user()->username ?? Str::slug(Auth::user()->name)) }}</p>

                <p class="user-bio">{{ Auth::user()->bio ?? 'Ready to learn!' }}</p>
            </div>
        @endauth
    </div>

    <div class="stats-header">
        <hr class="stats-separator">
        <h2 class="stats-title">STATS</h2>
        <hr class="stats-separator">
    </div>

    <div class="stats-container">
        <div class="perStat-container">
            <h3 class="stat-name">Achievements</h3>
            <p class="stat-value">{{ Auth::user()->stat->Achievements ?? 0 }}</p>
        </div>

        <div class="perStat-container">
            <h3 class="stat-name">Quizzes Finished</h3>
            <p class="stat-value">{{ Auth::user()->stat->Quizzes ?? 0 }}</p>
        </div>

        <div class="perStat-container">
            <h3 class="stat-name">Daily Streak</h3>
            <p class="stat-value">{{ Auth::user()->stat->Daily_Streak ?? 0 }}</p>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="bg-hill"></div>
</footer>
</body>

</html>
