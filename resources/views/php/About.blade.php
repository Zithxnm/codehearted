<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $cssVersion = file_exists(__DIR__ . '/../css/About_Styles.css') ? filemtime(__DIR__ . '/../css/About_Styles.css') : time(); ?>
    @vite(['resources/css/About_Styles.css'])
    <title>About Us</title>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="{{asset('/imgs/CodeHearted_Logo.png')}}" alt="Logo"></a>
                </div>

                <div class="search-container">
                    <div class="search-box">
                        <button class="search-icon-btn" type="button" aria-label="Search">
                            <img class="search-icon" src="{{asset('/imgs/7.jpg')}}" alt="Search Icon">
                        </button>
                        <input type="text" placeholder="Search..." class="search-input">
                    </div>
                </div>

                <div class="burger-menu">
                    <div class="burger-icon">
                    </div>
                    <form class="burger-dropdown">
                        <a href="{{ route('home') }}" class="dropdown-link">Home</a>
                        <a href="{{ route('courses.index') }}" class="dropdown-link">Courses</a>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <div class="hero">
        <h1>ABOUT US</h1>
        <div class="team-container">
            <div class="team-row">
                <a href="https://www.facebook.com/rinathan4" target="_blank" class="team-member-link">
                    <div class="team-member">
                        <div class="avatar has-image">
                            <div class="avatar-placeholder member-1"></div>
                        </div>
                        <div class="member-name">CABUSAO, Rine Nathan B.</div>
                    </div>
                </a>
                 <a href="https://www.facebook.com/juanmiguel.david1" target="_blank" class="team-member-link">
                    <div class="team-member">
                        <div class="avatar has-image">
                            <div class="avatar-placeholder member-2"></div>
                        </div>
                        <div class="member-name">DAVID, Juan Miguel V.</div>
                    </div>
                </a>
                 <a href="https://www.facebook.com/zzth.h" target="_blank" class="team-member-link">
                    <div class="team-member">
                        <div class="avatar has-image">
                            <div class="avatar-placeholder member-3"></div>
                        </div>
                        <div class="member-name">KABIGTING, Errol B.</div>
                    </div>
                </a>
            <div class="team-row">
                <a href="https://www.facebook.com/consiglierecassano1" target="_blank" class="team-member-link">
                    <div class="team-member">
                        <div class="avatar has-image">
                            <div class="avatar-placeholder member-4"></div>
                        </div>
                        <div class="member-name">LUPERA, Luigi S.</div>
                    </div>
                </a>
                  <a href="https://www.facebook.com/irishmcpgl" target="_blank" class="team-member-link">
                    <div class="team-member">
                        <div class="avatar has-image">
                            <div class="avatar-placeholder member-5"></div>
                        </div>
                        <div class="member-name">MACAPAGAL, Irish Dianne T.</div>
                    </div>
                </a>
            </div>

            <div class="team-row">
                 <a href="https://www.facebook.com/urizsoliman.1230" target="_blank" class="team-member-link">
                    <div class="team-member">
                        <div class="avatar has-image">
                            <div class="avatar-placeholder member-6"></div>
                        </div>
                        <div class="member-name">SOLIMAN, Uriz R.</div>
                    </div>
                </a>
                 <a href="https://www.facebook.com/kishaxc" target="_blank" class="team-member-link">
                    <div class="team-member">
                        <div class="avatar has-image">
                            <div class="avatar-placeholder member-7"></div>
                        </div>
                        <div class="member-name">URAGA, Quisha Jeyel S.</div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="grass-background">
        <div class="grass-layer"></div>
    </div>

    <?php $jsVersion = file_exists(__DIR__ . '/../js/About_Scripts.js') ? filemtime(__DIR__ . '/../js/About_Scripts.js') : time(); ?>
    @vite('resources/js/About_Scripts.js')
</body>
</html>
