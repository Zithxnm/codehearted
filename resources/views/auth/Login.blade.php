<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeHearted</title>
    <meta name="description" content="Sharpen your logic, learn coding fundamentals, and grow with confidence. CodeHearted helps you build skills that last.">
    <?php $cssVersion = file_exists(__DIR__ . '/../css/Login_Styles.css') ? filemtime(__DIR__ . '/../css/Login_Styles.css') : time(); ?>
    @vite('resources/css/Login_Styles.css')
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
                    <div class="burger-dropdown">
                        <a href="{{ route('show.register') }}" class="dropdown-link">Register</a>
                        <a href="{{ route('about') }}" class="dropdown-link">About</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="hero">
        <div class="left-panel">
        </div>
        <div class="middle-panel">
            <div class="form-container">
                <h2 class="form-title">Login</h2>

                <form id="loginForm" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="codehearted@fox.com"
                                value="{{ old('email') }}"
                                required>
                            <span class="error-message show" id="emailError">
                                @error('email')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="password-input-wrapper">
                                <input
                                    type="password"
                                    id="password"
                                    name="password"
                                    placeholder="Enter password"
                                    required>
                                <button type="button" class="toggle-password" data-target="password">
                                    <i class="fa fa-eye"></i>
                                </button>
                            </div>
                            <span class="error-message show" id="passwordError">
                                @error('password')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>

                    <div class="form-bottom-grid">
                        <div class="checkboxes-container">
                            <div class="checkbox-group">
                                <input type="checkbox" id="terms" name="terms" required>
                                <label for="terms">
                                    Remember me
                                </label>
                            </div>
                                <label class="no-account">No account yet? <a href="{{ route('show.register') }}">Register here.</a></label>
                        </div>
                    </div>

                    <div class="button-container">
                        <button type="submit" class="retro-button">Log In</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="right-panel">
        </div>
    </div>

    <?php $jsVersion = file_exists(__DIR__ . '/../js/Login_Scripts.js') ? filemtime(__DIR__ . '/../js/Login_Scripts.js') : time(); ?>
    @vite('resources/js/Login_Scripts.js')
</body>

</html>
