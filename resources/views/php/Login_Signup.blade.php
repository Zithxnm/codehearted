<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeHearted</title>
    <meta name="description" content="Sharpen your logic, learn coding fundamentals, and grow with confidence. CodeHearted helps you build skills that last.">
    @vite('resources/css/Login_Signup_Styles.css')
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <a href="/"><img src="{{asset("/imgs/CodeHearted_Logo.png") }}" alt="Logo"></a>
                </div>

                <div class="burger-menu">
                    <div class="burger-icon">
                    </div>
                    <div class="burger-dropdown">
                        <a href="{{ route('show.login') }}" class="dropdown-link">Login</a>
                        <a href="{{ route('show.register') }}" class="dropdown-link">Sign Up</a>
                        <a href="{{ route('about') }}" class="dropdown-link">About</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="hero">
        <div class="left-panel">
        </div>
        <div class="right-panel">
            <h1>CodeHearted</h1>
            <p>Where Clever Foxes Code with Heart</p>
            <div class="buttons">
                @guest
                    <a href="/login"><button class="login"><b>Login</b></button></a>
                    <a href="/register"><button class="signup"><b>Sign up</b></button></a>
                @endguest

                @auth
                    <a href="{{ route('profile') }}"><button class="profile">Profile</button></a>
                    <a href="{{ route('dashboard') }}"><button class="dashboard">Dashboard</button></a>
                @endauth
            </div>
        </div>
    </div>

    <footer class="footer">

    </footer>

    @vite('resources/js/Login_Signup_Scripts.js')
</body>

</html>
