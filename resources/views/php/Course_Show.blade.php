<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $course->title }} - CodeHearted</title>
    @vite(['resources/css/' . $assets['css']])
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
                <form class="burger-dropdown" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('courses.index') }}" class="dropdown-link">Courses</a>
                    <a href="{{ route('profile') }}" class="dropdown-link">Profile</a>
                    <a href="{{ route('dashboard') }}" class="dropdown-link">Dashboard</a>
                    <a href="{{ route('show.community') }}" class="dropdown-link">Community</a>
                    <a href="{{ route('about') }}" class="dropdown-link">About</a>
                    <a href="{{ route('logout') }}"
                       class="dropdown-link"
                       onclick="event.preventDefault(); this.closest('form').submit();">
                        Logout
                    </a>
                </form>
            </div>
        </div>
    </div>
</header>

<div class="hero">
    <div class="lesson">
        <div class="lesson-title">
            <h1>{{ $course->title }}</h1>
            <p>{{ $course->description }}</p>
            <div class="course-info">
                <div class="info-item">{{ $course->modules->count() }} Lessons</div>
                <div class="info-item">Self-paced</div>
            </div>
        </div>

        <div class="content-grid">
            <div class="module-section">
                <h2 class="section-title">Course Modules</h2>

                @foreach($course->modules as $index => $module)
                    <div class="module-item {{ $index === 0 ? 'active' : '' }}"
                         data-module="{{ $index }}"
                         onclick="selectModule(this, {{ $index }})">
                        <span class="module-title">{{ $module->title }}</span>
                        <span class="module-status">🔒</span>
                    </div>
                @endforeach
            </div>

            <div class="lesson-section">
                <h2 class="section-title">Lesson Details</h2>

                <div class="lesson-objectives">
                    <h4>Objectives:</h4>
                    <p style="margin-bottom: 10px; font-size: 13px; color: #555;">In this module, you will learn:</p>
                    <ul>
                        @if($course->objectives)
                            @foreach($course->objectives as $objective)
                                <li>{{ $objective }}</li>
                            @endforeach
                        @else
                            <li>No specific objectives listed for this course.</li>
                        @endif
                    </ul>
                </div>

                @foreach($course->modules as $index => $module)
                    <div class="lesson-card {{ $index === 0 ? 'active' : '' }}"
                         data-module-index="{{ $index }}"
                         style="{{ $index === 0 ? 'display:block;' : 'display:none;' }}"> <h3><span class="icon">📖</span> {{ $module->title }}</h3>

                        <a href="{{ route('modules.show', ['course' => $course->id, 'module' => $module->id]) }}?section=review"
                           class="action-button review">Review</a>

                        <a href="{{ route('modules.show', ['course' => $course->id, 'module' => $module->id]) }}?section=practice"
                           class="action-button" style="margin-left:8px;">Practice</a>

                        <a href="{{ route('modules.show', ['course' => $course->id, 'module' => $module->id]) }}?section=quiz"
                           class="action-button" style="margin-left:8px;">Quiz</a>

                        <div style="clear: both;"></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h4 class="footer-title">Quick Links</h4>
                <ul class="footer-links">
                    <li>
                        <a href="{{ route('courses.index') }}" class="footer-link">
                            <span>➤ Learning Catalog</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('profile') }}" class="footer-link">
                            <span>➤ Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('dashboard') }}" class="footer-link">
                            <span>➤ Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="footer-link">
                            <span>➤ About Us</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="footer-section">
                <h4 class="footer-title">Stay sharp as a fox — follow us for news and updates.</h4>
                <div class="social-links">
                    <a href="https://www.facebook.com/PampangaStateU" class="social-link" aria-label="PSU" target="_blank">
                        <img class="psu" src="{{ asset('imgs/WhiteLogo_PSU.png') }}" alt="PSU">
                    </a>
                    <a href="https://www.facebook.com/dhvsu.ccssc" class="social-link" aria-label="CCS" target="_blank">
                        <img class="ccs" src="{{ asset('imgs/WhiteLogo_CCSSC.png') }}" alt="PSU">
                    </a>
                    <a href="https://www.facebook.com/ComPressCCS" class="social-link" aria-label="ComPress" target="_blank">
                        <img class="compress" src="{{ asset('imgs/WhiteLogo_ComPress.png') }}" alt="PSU">
                    </a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>© 2025 CodeHearted. All rights reserved. Built with ♥ for clever foxes everywhere.</p>
        </div>
    </div>
</footer>

@vite(['resources/js/' . $assets['js']])
</body>
</html>
