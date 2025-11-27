<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeHearted</title>
    <meta name="description" content="Sharpen your logic, learn coding fundamentals, and grow with confidence. CodeHearted helps you build skills that last.">
    <?php $cssVersion = file_exists(__DIR__ . '/../css/ProgFund_Styles.css') ? filemtime(__DIR__ . '/../css/ProgFund_Styles.css') : time(); ?>
    @vite('resources/css/ProgFund_Styles.css')
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
                <h1>Programming Fundamentals</h1>
                <p>Programming Fundamentals is all about learning how change works. Instead of diving deep into technical math, this course helps non-STEM students see how limits and derivatives connect to real-life situations. It's designed to build intuition, not just memorize formulas or mechanical applications for both.</p>

                <div class="course-info">
                    <div class="info-item">5 lessons</div>
                    <div class="info-item">Self-paced</div>
                </div>
            </div>

            <div class="content-grid">
                <div class="module-section">
                    <h2 class="section-title">Course Modules</h2>
                    <?php
                    $modules = [
                        'Introduction To Programming and Basic Terminology',
                        'Variables, Data Types, and Memory Concepts',
                        'Input/Output and User Interaction',
                        'Decision Making with Conditionals',
                        'Loops and Iterations',
                    ];

                    foreach ($modules as $i => $title): ?>
                        <div class="module-item" data-module="<?php echo $i; ?>" onclick="selectModule(this, <?php echo $i; ?>)">
                            <span class="module-title"><?php echo htmlspecialchars($title); ?></span>
                            <span class="module-status">🔒</span>
                        </div>
                    <?php endforeach; ?>
                </div>


                <div class="lesson-section">
                    <h2 class="section-title">Lesson Details</h2>

                    <div class="lesson-objectives">
                        <h4>Objectives:</h4>
                        <p style="margin-bottom: 10px; font-size: 13px; color: #555;">By the end of this lesson, you will be able to:</p>
                        <ul>
                            <li>Define programming and explain what programmers do</li>
                            <li>Understand key programming terminology</li>
                            <li>Know what Python is and why it’s good for beginners</li>
                            <li>Create your first program</li>
                            <li>Apply learning strategies that make programming easier</li>
                        </ul>
                    </div>

                    <?php

                    $modules = [
                        'Introduction To Programming and Basic Terminology',
                        'Variables, Data Types, and Memory Concepts',
                        'Input/Output and User Interaction',
                        'Decision Making with Conditionals',
                        'Loops and Iterations',
                    ];

                    $moduleFolders = [
                        'module1',
                        'module2',
                        'module3',
                        'module4',
                        'module5',
                    ];

                    foreach ($modules as $i => $title) {
                    ?>
                        <div class="lesson-card" data-module-index="<?php echo $i; ?>">
                            <h3>
                                <span class="icon">📖</span>
                                <?php echo htmlspecialchars($title); ?>
                            </h3>

                            <a href="prog-fund/<?php echo $moduleFolders[$i]; ?>/review"
                                class="action-button review" data-action="review" data-module="<?php echo $i; ?>">Review</a>

                            <a href="prog-fund/<?php echo $moduleFolders[$i]; ?>/practice"
                                class="action-button" data-action="practice" data-module="<?php echo $i; ?>" style="margin-left:8px;">Practice</a>

                            <a href="prog-fund/<?php echo $moduleFolders[$i]; ?>/quiz"
                                class="action-button" data-action="quiz" data-module="<?php echo $i; ?>" style="margin-left:8px;">Quiz</a>

                            <div style="clear: both;"></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <section class="before-footer">
        <div class="hills">
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4 class="footer-title">Quick Links</h4>
                    <ul class="footer-links">
                        <li>
                            <a href="{{ route('courses.index') }}"footer-link">
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

    <?php $jsVersion = file_exists(__DIR__ . '/../js/ProgFund_Scripts.js') ? filemtime(__DIR__ . '/../js/ProgFund_Scripts.js') : time(); ?>
    @vite('resources/js/ProgFund_Scripts.js')
</body>

</html>
