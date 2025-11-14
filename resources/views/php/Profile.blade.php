<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeHearted</title>
    <meta name="description" content="Sharpen your logic, learn coding fundamentals, and grow with confidence. CodeHearted helps you build skills that l
ast.">
    <?php $cssVersion = file_exists(__DIR__ . '/../css/Profile_Styles.css') ? filemtime(__DIR__ . '/../css/Login_Signup_Styles.css') : time(); ?>
    <link rel="stylesheet" href="{{ asset('css/Profile_Styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
                        <a href="/courses" class="dropdown-link">Courses</a>
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

    <div class="main-content">
        <div class="profile-container">
            <img class="profile-picture" src="../imgs/Profile_Pic.png" alt="Profile Picture">
            <div class="profile-details">
                <h1 class="display-name">Name</h1>
                <p class="username">@Foxycode</p>
                <p class="user-bio">Tell us about yourself.</p>
            </div>
        </div>

        <div class="stats-header">
            <hr class="stats-separator">
            <h2 class="stats-title">STATS</h2>
            <hr class="stats-separator">
        </div>

        <div class="stats-container">
            <div class="perStat-container">
                <h3 class="stat-name">Achievements</h3>
                <p class="stat-value">3</p>
            </div>
            <div class="perStat-container">
                <h3 class="stat-name">Quizzes</h3>
                <p class="stat-value">15</p>
            </div>
            <div class="perStat-container">
                <h3 class="stat-name">Course Badges</h3>
                <p class="stat-value">5</p>
            </div>
            <div class="perStat-container">
                <h3 class="stat-name">Daily Streak</h3>
                <p class="stat-value">7</p>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="bg-hill"></div>
    </footer>

    <?php $jsVersion = file_exists(__DIR__ . '/../js/Profile_Scripts.js') ? filemtime(__DIR__ . '/../js/Profile_Scripts.js') : time(); ?>
    <script src="{{ asset('js/Profile_Scripts.js') }}?v{{ time() }}"></script>
</body>

</html>
