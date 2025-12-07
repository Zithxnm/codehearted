<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - CodeHearted</title>
    @vite(['resources/css/Login_Styles.css'])
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
                    <button class="search-icon-btn"><img class="search-icon" src="{{ asset('imgs/7.jpg') }}"></button>
                    <input type="text" placeholder="Search..." class="search-input">
                </div>
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
            <h2 class="form-title" style="font-size: 3rem; margin-bottom: 2rem;">Forgot Password?</h2>

            <p style="color: white; font-family: 'Glacial'; font-size: 1.2rem; margin-bottom: 2rem;">
                Enter your email address and we will send you a link to reset your password.
            </p>

            @if (session('status'))
                <div style="color: #4ade80; margin-bottom: 15px; font-family: 'Glacial'; font-weight: bold;">
                    {{ session('status') }}
                </div>
            @endif
            @if ($errors->any())
                <div style="color: #ff6b6b; margin-bottom: 15px; font-family: 'Glacial'; font-weight: bold;">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-grid" style="grid-template-columns: 1fr; gap: 1rem; margin-bottom: 2rem;">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="codehearted@fox.com" required>
                    </div>
                </div>

                <div class="button-container">
                    <button type="submit" class="retro-button" style="font-size: 24px;">Send Reset Link</button>
                </div>
            </form>

            <div style="text-align: center; margin-top: 2rem;">
                <a href="{{ route('show.login') }}" class="no-account" style="text-decoration: none;">
                    &larr; Back to Login
                </a>
            </div>
        </div>
    </div>

    <div class="right-panel"></div>
</div>

@vite('resources/js/Login_Scripts.js')
</body>
</html>
