<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeHearted</title>
    <meta name="description" content="Sharpen your logic, learn coding fundamentals, and grow with confidence. CodeHearted helps you build skills that last.">
    <?php $cssVersion = file_exists(__DIR__ . '/../css/Register_Styles.css') ? filemtime(__DIR__ . '/../css/Register_Styles.css') : time(); ?>
    <link rel="stylesheet" href="{{ asset('css/Register_Styles.css') }}">
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
                    <div class="burger-dropdown">
                        <a href="/" class="dropdown-link">Home</a>
                        <a href="#" class="dropdown-link">About</a>
                        <a href="#" class="dropdown-link">Contact</a>
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
                <h2 class="form-title">Register Account</h2>

                <form id="registerForm" action="register.php" method="POST">
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="codehearted@fox.com"
                                required>
                            <span class="error-message" id="emailError"></span>
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
                                    <span class="eye-icon">👁️</span>
                                </button>
                            </div>
                            <span class="error-message" id="passwordError"></span>
                        </div>

                        <div class="form-group">
                            <label for="username">Username</label>
                            <input
                                type="text"
                                id="username"
                                name="username"
                                placeholder="foxycode"
                                required>
                            <span class="error-message" id="usernameError"></span>
                        </div>

                        <div class="form-group">
                            <label for="confirmPassword">Confirm Password</label>
                            <div class="password-input-wrapper">
                                <input
                                    type="password"
                                    id="confirmPassword"
                                    name="confirmPassword"
                                    placeholder="Enter password"
                                    required>
                                <button type="button" class="toggle-password" data-target="confirmPassword">
                                    <span class="eye-icon">👁️</span>
                                </button>
                            </div>
                            <span class="error-message" id="confirmPasswordError"></span>
                        </div>
                    </div>

                    <div class="form-bottom-grid">
                        <div class="checkboxes-container">
                            <div class="checkbox-group">
                                <input type="checkbox" id="terms" name="terms" required>
                                <label for="terms">
                                    By agreeing, you'll get access to Code Hearted's newest updates, tools, and resources to fuel your coding journey.
                                </label>
                            </div>

                            <div class="checkbox-group">
                                <input type="checkbox" id="stats" name="stats">
                                <label for="stats">
                                    By agreeing, you allow CodeHearted to use your data in anonymous statistics to improve our services and user experience.
                                </label>
                            </div>
                        </div>

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
                        <button type="submit" class="retro-button">Register</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="right-panel">
        </div>
    </div>

    <?php $jsVersion = file_exists(__DIR__ . '/../js/Register_Scripts.js') ? filemtime(__DIR__ . '/../js/Register_Scripts.js') : time(); ?>
    <script src="{{ asset('js/Register_Scripts.js') }}"></script>
</body>

</html>
