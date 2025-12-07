<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - CodeHearted</title>
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

            <div class="burger-menu">
                <div class="burger-icon">
                </div>
                <div class="burger-dropdown">
                    <a href="{{ route('show.login') }}" class="dropdown-link">Login</a>
                    <a href="{{ route('show.register') }}" class="dropdown-link">Register</a>
                    <a href="{{ route('about') }}" class="dropdown-link">About</a>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="hero">
    <div class="left-panel"></div>

    <div class="middle-panel">
        <div class="form-container">
            <h2 class="form-title" style="font-size: 3rem; margin-bottom: 2rem;">Set Password</h2>

            @if ($errors->any())
                <div style="color: #c41e3a; margin-bottom: 15px; font-family: 'Glacial'; font-weight: bold;">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-grid" style="grid-template-columns: 1fr; gap: 1.5rem; margin-bottom: 1rem;">
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" value="{{ $email ?? old('email') }}" readonly style="opacity: 0.7; cursor: not-allowed;">
                    </div>

                    <div class="form-group">
                        <label for="password">New Password</label>
                        <div class="password-input-wrapper">
                            <input type="password" id="password" name="password" placeholder="New Password" required>
                            <button type="button" class="toggle-password" data-target="password">
                                <i class="fa fa-eye"></i>
                            </button>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <div class="password-input-wrapper">
                            <input type="password" id="confirmPassword" name="password_confirmation" placeholder="Confirm New Password" required>
                            <button type="button" class="toggle-password" data-target="confirmPassword">
                                <i class="fa fa-eye"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="form-bottom-grid" style="grid-template-columns: 1fr; margin-bottom: 2rem;">
                    <div class="password-requirements">
                        <p class="requirements-title">Password must:</p>
                        <ul id="passwordChecklist">
                            <li id="req-length">• Contain 8 to 30 characters</li>
                            <li id="req-case">• Contain both lower and uppercase letters</li>
                            <li id="req-number">• Contain 1 number</li>
                            <li id="req-special">• Contain 1 special character</li>
                        </ul>
                    </div>
                </div>

                <div class="button-container">
                    <button type="submit" class="retro-button" style="font-size: 24px; padding: 12px 30px;">Reset Password</button>
                </div>
            </form>
        </div>
    </div>

    <div class="right-panel"></div>
</div>

@vite('resources/js/ResetPassword_Scripts.js')
</body>
</html>
