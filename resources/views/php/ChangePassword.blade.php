<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password - CodeHearted</title>
    @vite(['resources/css/Register_Styles.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
</header>

<div class="hero">
    <div class="left-panel"></div>

    <div class="middle-panel">
        <div class="form-container">
            <h2 class="form-title" style="font-size: 3rem; margin-bottom: 2rem;">Change Password</h2>

            @if (session('success'))
                <div style="color: #4ade80; margin-bottom: 15px; font-family: 'Glacial'; font-weight: bold;">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div style="color: #c41e3a; margin-bottom: 15px; font-family: 'Glacial'; font-weight: bold;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('password.change') }}">
                @csrf
                @method('PUT')

                <div class="form-grid" style="grid-template-columns: 1fr; gap: 1.5rem; margin-bottom: 1rem;">

                    <div class="form-group">
                        <label for="current_password">Current Password</label>
                        <div class="password-input-wrapper">
                            <input type="password" id="current_password" name="current_password" placeholder="Enter current password" required>
                            <button type="button" class="toggle-password" data-target="current_password">
                                <i class="fa fa-eye"></i>
                            </button>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password">New Password</label>
                        <div class="password-input-wrapper">
                            <input type="password" id="password" name="password" placeholder="Enter new password" required>
                            <button type="button" class="toggle-password" data-target="password">
                                <i class="fa fa-eye"></i>
                            </button>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm New Password</label>
                        <div class="password-input-wrapper">
                            <input type="password" id="confirmPassword" name="password_confirmation" placeholder="Confirm new password" required>
                            <button type="button" class="toggle-password" data-target="confirmPassword">
                                <i class="fa fa-eye"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="form-bottom-grid" style="grid-template-columns: 1fr; margin-bottom: 2rem;">
                    <div class="password-requirements">
                        <p class="requirements-title">New Password must:</p>
                        <ul id="passwordChecklist">
                            <li id="req-length">• Contain 8 to 30 characters</li>
                            <li id="req-case">• Contain both lower and uppercase letters</li>
                            <li id="req-number">• Contain 1 number</li>
                            <li id="req-special">• Contain 1 special character</li>
                        </ul>
                    </div>
                </div>

                <div class="button-container">
                    <button type="submit" class="retro-button" style="font-size: 24px; padding: 12px 30px;">Update Password</button>
                </div>
            </form>

            <div style="text-align: center; margin-top: 20px;">
                <a href="{{ route('profile') }}" style="color: white; font-family: 'Glacial'; text-decoration: underline;">Cancel</a>
            </div>
        </div>
    </div>

    <div class="right-panel"></div>
</div>

@vite('resources/js/ResetPassword_Scripts.js')
</body>
</html>
