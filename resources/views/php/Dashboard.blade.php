<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeHearted</title>
    <meta name="description" content="Sharpen your logic, learn coding fundamentals, and grow with confidence. CodeHearted helps you build skills that l
ast.">
    <link rel="stylesheet" href="{{ asset('css/Dashboard_Styles.css') }}">
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
                            <img class="search-icon" src="../imgs/7.jpg" alt="Search Icon">
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
                            <a href="{{ route('logout') }}"
                               class="dropdown-link"
                               onclick="event.preventDefault(); this.closest('form').submit();">
                                Logout
                            </a>
                        </form>
                </div>
            </div>
        </div>
    </header>

    <div class="hero">
        <div class="left-panel">
            <h1>My Learning</h1>
            <p>Get college-ready by exploring our courses. Tale the first step today toward building the skills for your dream career.</p>
            <a href="#"><button class="view-catalog"><b>View Catalog</b></button></a>
            <div class="course-card">
                <img src="{{ asset('imgs/Icon_Computing.png') }}" alt="Course Image" class="course-image">
                <div class="course-details">
                    <h2 class="course-title">Fundamentals of Computing</h2>
                    <p class="course-description">Lesson 2: Lesson Title</p>
                </div>
            </div>
        </div>
        <div class="right-panel">
            <h1>Achievemets</h1>
            <a href="#">Show All</a>
            <div class="achievement-card">
                <img src="{{ asset('imgs/5.png') }}" alt="Achievement Badge" class="achievement-badge">
                <p class="achievements">You currently don't have any badges or certificates available to show</p>
                <a href="#"><button class="view-catalog"><b>View Catalog</b></button></a>
            </div>
            <h1>Assignments</h1>
            <a href="#">Show All</a>
        </div>
    </div>

    <?php $jsVersion = file_exists(__DIR__ . '/../js/Dashboard_Scripts.js') ? filemtime(__DIR__ . '/../js/Dashboard_Scripts.js') : time(); ?>
    <script src="{{ asset('js/Dashboard_Scripts.js') }}"></script>

</body>

</html>
