<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

                <div class="header-actions">

                    <div class="notification-wrapper">
                        @auth
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
                        @endauth
                    </div>

                    <div class="burger-menu">
                        <div class="burger-icon"></div>
                        <form class="burger-dropdown" method="POST" action="{{ route('logout') }}">
                            @csrf
                            @guest
                                <a href="{{ route('home') }}" class="dropdown-link">Home</a>
                                <a href="{{ route('show.login') }}" class="dropdown-link">Login</a>
                                <a href="{{ route('show.register') }}" class="dropdown-link">Signup</a>
                            @endguest
                            @auth
                                @if(Auth::user()->isAdmin())
                                    <a href="{{ route('admin.index') }}" class="dropdown-link">Admin Panel</a>
                                @endif
                                <a href="{{ route('dashboard') }}" class="dropdown-link">Dashboard</a>
                                <a href="{{ route('courses.index') }}" class="dropdown-link">Courses</a>
                                <a href="{{ route('profile') }}" class="dropdown-link">Profile</a>
                                <a href="{{ route('community.index') }}" class="dropdown-link">Community</a>
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
