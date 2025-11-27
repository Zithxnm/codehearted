<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeHearted</title>
    <meta name="description" content="Sharpen your logic, learn coding fundamentals, and grow with confidence. CodeHearted helps you build skills that last.">
    <?php $cssVersion = file_exists(__DIR__ . '/../css/Courses_Styles.css') ? filemtime(__DIR__ . '/../css/Courses_Styles.css') : time(); ?>
    @vite('resources/css/Courses_Styles.css')
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <a href="/"><img src="{{ asset('imgs/CodeHearted_Logo.png') }}" alt="Logo"></a>
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
                        <a href="{{ route('profile') }}" class="dropdown-link">Profile</a>
                        <a href="{{ route('dashboard') }}" class="dropdown-link">Dashboard</a>
                        <a href="{{ route('show.community') }}" class="dropdown-link">Community</a>
                        <a href="{{ route('about') }}" class="dropdown-link">About</a>
                        <a href="{{ route('logout') }}" class="dropdown-link" onclick="event.preventDefault(); this.closest('form').submit()">Logout</a>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <div class="hero">
        <div class="left-panel">
        </div>
        <div class="middle-panel">
            <div class="courses">Courses</div>

            @if($courses->isEmpty())
                <p style="text-align: center; padding: 2rem;">No courses available yet.</p>
            @else
                @foreach($courses as $course)
                    <a href="{{ route('courses.show', $course->id) }}" class="subject-card-link">
                        <div class="subject-card">
                            <div class="subject-image">
                                <img src="{{ asset($course->image_path) }}" alt="{{ $course->title }}">
                            </div>
                            <div class="subject-content">
                                <p class="tag">Self-paced</p>
                                <h2>{{ $course->title }}</h2>
                                <p class="description">
                                    {{ $course->description }}
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            @endif
        </div>
        <div class="right-panel">
        </div>
    </div>

    <?php $jsVersion = file_exists(__DIR__ . '/../js/Courses_Scripts.js') ? filemtime(__DIR__ . '/../js/Courses_Scripts.js') : time(); ?>
    @vite('resources/js/Courses_Scripts.js')
</body>

</html>
