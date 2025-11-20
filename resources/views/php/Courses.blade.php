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
            <a href="{{ route('courses.progfund') }}" class="subject-card-link">
            <div class="subject-card">
                <div class="subject-image">
                    <img src="{{ asset('imgs/Catalog_Programming.jpg') }}" alt="Programming Fundamentals">
                </div>
                <div class="subject-content">
                    <p class="tag">Self-paced</p>
                    <h2>Programming Fundamentals</h2>
                    <p class="description">
                        Programming Fundamentals is your first step into the world of coding—think like a creator,
                        solver, and geek. In this course, you’ll learn how to break big problems into smaller
                        ideas, design simple algorithms, and bring your ideas to life through code.
                    </p>
                </div>
            </div>
            </a>

            <a href="{{ route('courses.digilogic') }}" class="subject-card-link">
            <div class="subject-card">
                <div class="subject-image">
                    <img src="{{ asset('imgs/Catalog_Logic.jpg') }}" alt="Digital Logic">
                </div>
                <div class="subject-content">
                    <p class="tag">Self-paced</p>
                    <h2>Digital Logic</h2>
                    <p class="description">
                        Digital Logic explores truth tables, logic operations, and number systems—binary, octal,
                        decimal, and hexadecimal. Students learn how arithmetic and geometric operations form
                        the core of how computers calculate and “think.”
                    </p>
                </div>
            </div>
            </a>

            <a href="{{ route('courses.compfund') }}" class="subject-card-link">
            <div class="subject-card">
                <div class="subject-image">
                    <img src="{{ asset('imgs/Catalog_Computing.jpg') }}" alt="Fundamentals of Computing">
                </div>
                <div class="subject-content">
                    <p class="tag">Self-paced</p>
                    <h2>Fundamentals of Computing</h2>
                    <p class="description">
                        Fundamentals of Computing covers essential topics, including assembly, BIOS/ALU, and
                        microcontrollers. Students gain insight into hardware design, algorithms, and
                        knowledge-sharing materials through hands-on activities and quizzes.
                    </p>
                </div>
            </div>
            </a>

            <a href="{{ route('courses.diffcalc') }}" class="subject-card-link">
            <div class="subject-card">
                <div class="subject-image">
                    <img src="{{ asset('imgs/Catalog_Calculus.jpg') }}" alt="Differential Calculus">
                </div>
                <div class="subject-content">
                    <p class="tag">Self-paced</p>
                    <h2>Differential Calculus</h2>
                    <p class="description">
                        Differential Calculus develops how learners view change and rate of change. Students
                        will learn to handle derivatives, limits, and functions with applications in motion,
                        optimization, and modeling of real-world phenomena.
                    </p>
                </div>
            </div>
            </a>
        </div>
        <div class="right-panel">
        </div>
    </div>

    <?php $jsVersion = file_exists(__DIR__ . '/../js/Courses_Scripts.js') ? filemtime(__DIR__ . '/../js/Courses_Scripts.js') : time(); ?>
    @vite('resources/js/Courses_Scripts.js')
</body>

</html>
