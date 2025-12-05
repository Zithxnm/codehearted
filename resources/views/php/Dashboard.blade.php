<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeHearted</title>
    <meta name="description" content="Sharpen your logic, learn coding fundamentals, and grow with confidence. CodeHearted helps you build skills that l
ast.">
    @vite('resources/css/Dashboard_Styles.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <a href="/"><img src="{{asset('imgs/CodeHearted_Logo.png')}}" alt="Logo"></a>
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
                    <div class="burger-icon">
                    </div>
                    <form class="burger-dropdown" method="POST" action="{{ route('logout') }}">
                        @csrf
                        @if(Auth::user()->isAdmin())
                            <a href="{{ route('admin.index') }}" class="dropdown-link">Admin Panel</a>
                        @endif
                        <a href="{{ route('profile') }}" class="dropdown-link">Profile</a>
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

    <div class="hero">
        <div class="left-panel">
            <div class="welcome-section">
                <h1>Welcome back, {{ $user->name }}!</h1>
                <p>Get college-ready by exploring our courses. Take the first step today toward building the skills for your dream career.</p>

                <a href="{{ route('courses.index') }}">
                    <button class="view-catalog"><b>View Catalog</b></button>
                </a>
            </div>
            @if($recentCourses->isEmpty())
                        <p class="course-description">You haven't started any courses yet.</p>
            @else
            @foreach($recentCourses as $course)
                <a href="{{ route('courses.show', $course->id) }}" class="course-card-link">
                <div class="course-card">
                    <img src="{{ asset($course->icon_path) }}" alt="{{ $course->title }}" class="course-image">

                    <div class="course-details">
                        <h2 class="course-title">{{ $course->title }}</h2>
                        {{-- Logic: Find the first module that is NOT complete --}}
                        @php
                            $nextModule = $course->modules->first(function($mod) use ($user) {
                                return ! $user->hasCompletedModule($mod->id);
                            });
                        @endphp

                        <p class="course-description">
                            @if($nextModule)
                                <strong>Next Up:</strong> {{ $nextModule->title }}
                            @else
                                <strong>Status:</strong> Course Completed! 🎉
                            @endif
                        </p>


                    </div>
                </div>
                </a>
            @endforeach
            @endif
        </div>

        <div class="right-panel">
            <h1>Achievements</h1>
            <a href="{{ route('profile') }}">Show All</a>

            <div class="achievement-card">
                @if($completedCourses->isNotEmpty())
                    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(60px, 1fr)); gap: 10px; padding: 10px; width: 100%;">
                        @foreach($completedCourses as $course)
                            <div class="badge-item" style="text-align: center;" title="{{ $course->title }}">
                                <img src="{{ asset('imgs/5.png') }}" alt="Badge"
                                     style="width: 50px; height: 50px; display: block; margin: 0 auto;">

                                <span style="font-size: 0.7rem; color: #124559; font-weight: bold; display: block; margin-top: 5px; line-height: 1.1;">
                            {{ Str::limit($course->title, 5, '..') }}
                        </span>
                            </div>
                        @endforeach
                    </div>

                    <p class="achievements" style="margin-top: 10px;">
                        You have earned <strong>{{ $completedCourses->count() }}</strong> badge(s)!
                    </p>
                @else
                    <div style="text-align: center; padding: 20px;">
                        <img src="{{ asset('imgs/5.png') }}" alt="Locked Badge"
                             style="width: 60px; height: 60px; filter: grayscale(100%); opacity: 0.5; margin-bottom: 10px;">
                        <p class="achievements">Complete a course to earn your first badge!</p>
                    </div>
                @endif
            </div>
            <h1>Stats</h1>
            <a href="{{ route('profile') }}">Show All</a>

            <div class="stat-container">
                <p><i class="fa-solid fa-fire"></i> Daily Streak: {{ $stats->Daily_Streak ?? 0 }} Days</p>
                <p><i class="fa-solid fa-sticky-note"></i> Quizzes Taken: {{ $stats->Quizzes ?? 0 }}</p>
            </div>
        </div>

        </div>
    </div>

    @vite('resources/js/Dashboard_Scripts.js')

</body>

</html>
