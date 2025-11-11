<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeHearted</title>
    <meta name="description" content="Sharpen your logic, learn coding fundamentals, and grow with confidence. CodeHearted helps you build skills that last.">
    <link rel="stylesheet" href="{{ asset('css/Login_Signup_Styles.css') }}">
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <a href="/"><img src="{{asset("/imgs/CodeHearted_Logo.png") }}" alt="Logo"></a>
                </div>

                <div class="search-container">
                    <div class="search-box">
                        <button class="search-icon-btn" type="button" aria-label="Search">
                            <img class="search-icon" src="{{asset('imgs/7.jpg')}}" alt="Search Icon">
                        </button>
                        <input type="text" placeholder="Search" class="search-input">
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
        <div class="right-panel">
            <h1>CodeHearted</h1>
            <p>Where Clever Foxes Code with Heart</p>
            <div class="buttons">
                <a href="/login"><button class="login"><b>Login</b></button></a>
                <a href="/register"><button class="signup"><b>Sign up</b></button></a>
            </div>
        </div>
    </div>

    <footer class="footer">

    </footer>

    <script src="{{asset('/js/Login_Signup_Scripts.js')}}"></script>
</body>

</html>
