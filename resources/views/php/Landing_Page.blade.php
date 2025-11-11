<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeHearted</title>
    <meta name="description" content="Sharpen your logic, learn coding fundamentals, and grow with confidence. CodeHearted helps you build skills that last.">
    <link rel="stylesheet" href="{{ asset('css/Landing_Styles.css') }}">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <img src="{{asset("imgs/CodeHearted_Logo.png") }}" alt="Logo">
                </div>

                <div class="search-container">
                    <div class="search-box">
                        <button class="search-icon-btn" type="button" aria-label="Search">
                            <img class="search-icon" src="{{asset('imgs/7.jpg')}}" alt="Search Icon">
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

    <section class="hero">
        <div class="hero-bg"></div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Your journey continues <span class="dash">—</span> let's code with heart.</h1>
                <p class="hero-description">
                    Sharpen your logic, learn coding fundamentals, and grow with confidence — with
                    CodeHearted, you build skills that don't just pass, they last.
                </p>
                <a href="/login-signup"><button data-text="Get Started" class="btn-primary">Get Started</button></a>
            </div>
        </div>
    </section>

    <section class="courses">
        <div class="container">
            <div class="courses-header">
                <h2 class="section-title">Gear up, clever foxes!</h2>
            </div>

            <div class="courses-list">
                <div class="course-card active">
                    <div class="course-header" onclick="toggleCourse(this)">
                        <div class="course-info">
                            <div class="prog-icon">
                            </div>
                            <h3 class="course-title">Programming Fundamentals</h3>
                        </div>
                        <div class="course-toggle">
                            <svg class="chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="6,9 12,15 18,9"></polyline>
                            </svg>
                        </div>
                    </div>
                    <div class="course-content">
                        <p>Learn the core concepts of programming including variables, functions, loops, and data structures. Build a solid foundation for your coding journey.</p>
                    </div>
                </div>

                <div class="course-card">
                    <div class="course-header" onclick="toggleCourse(this)">
                        <div class="course-info">
                            <div class="digi-icon">
                            </div>
                            <h3 class="course-title">Digital Logic</h3>
                        </div>
                        <div class="course-toggle">
                            <svg class="chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="6,9 12,15 18,9"></polyline>
                            </svg>
                        </div>
                    </div>
                    <div class="course-content">
                        <p>Understand how computers think at the hardware level. Explore boolean algebra, logic gates, and digital circuit design principles.</p>
                    </div>
                </div>

                <div class="course-card">
                    <div class="course-header" onclick="toggleCourse(this)">
                        <div class="course-info">
                            <div class="comp-icon">
                            </div>
                            <h3 class="course-title">Fundamentals of Computing</h3>
                        </div>
                        <div class="course-toggle">
                            <svg class="chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="6,9 12,15 18,9"></polyline>
                            </svg>
                        </div>
                    </div>
                    <div class="course-content">
                        <p>Dive into computer science theory, algorithms, and computational thinking. Learn how to solve complex problems efficiently.</p>
                    </div>
                </div>

                <div class="course-card">
                    <div class="course-header" onclick="toggleCourse(this)">
                        <div class="course-info">
                            <div class="calc-icon">
                            </div>
                            <h3 class="course-title">Differential Calculus</h3>
                        </div>
                        <div class="course-toggle">
                            <svg class="chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="6,9 12,15 18,9"></polyline>
                            </svg>
                        </div>
                    </div>
                    <div class="course-content">
                        <p>Master the mathematical foundations needed for advanced programming concepts, machine learning, and algorithm optimization.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mascot">
        <div class="mascot-container">
            <img src="{{asset('../imgs/Coding_Journey.png')}}" alt="Coding">
        </div>
    </section>

    <section class="before-footer">
        <div class="minecraft">
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4 class="footer-title">Quick Links</h4>
                    <ul class="footer-links">
                        <li>
                            <a href="#" class="footer-link">
                                <span>➤ Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">
                                <span>➤ Learning Catalog</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">
                                <span>➤ Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="footer-link">
                                <span>➤ About Us</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h4 class="footer-title">Stay sharp as a fox — follow us for news and updates.</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/PampangaStateU" class="social-link" aria-label="PSU" target="_blank">
                            <img class="psu" src="{{asset('/imgs/WhiteLogo_PSU.png')}}" alt="PSU">
                        </a>
                        <a href="https://www.facebook.com/dhvsu.ccssc" class="social-link" aria-label="CCS" target="_blank">
                            <img class="ccs" src="{{asset('/imgs/WhiteLogo_CCSSC.png')}}" alt="PSU">
                        </a>
                        <a href="https://www.facebook.com/ComPressCCS" class="social-link" aria-label="ComPress" target="_blank">
                            <img class="compress" src="{{asset('/imgs/WhiteLogo_ComPress.png')}}" alt="PSU">
                        </a>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>© 2025 CodeHearted. All rights reserved. Built with ♥ for clever foxes everywhere.</p>
            </div>
        </div>
    </footer>

    <script src="{{asset('/js/Landing_Scripts.js')}}"></script>
</body>
</html>
