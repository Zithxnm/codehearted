<!DOCTYPE html>
<html lang="en">
<script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeHearted</title>
    <meta name="description" content="Sharpen your logic, learn coding fundamentals, and grow with confidence. CodeHearted helps you build skills that last.">
    <?php $cssVersion = file_exists(__DIR__ . '/../css/DiffCall_Styles.css') ? filemtime(__DIR__ . '/../css/DiffCall_Styles.css') : time(); ?>
    <link rel="stylesheet" href="{{ asset('css/DiffCall_Styles.css') }}">
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
                        <a href="/courses" class="dropdown-link">Courses</a>
                        <a href="#" class="dropdown-link">About</a>
                        <a href="#" class="dropdown-link">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="hero">
        <div class="lesson">
            <div class="lesson-title">
                <h1>Differential Calculus</h1>
                <p>Differential Calculus is all about learning how change works. Instead of diving deep into technical math, this course helps non-STEM students see how limits and derivatives connect to real-life situations. It's designed to build intuition, not just memorize formulas or mechanical applications for both.</p>

                <div class="course-info">
                    <div class="info-item">7 lessons</div>
                    <div class="info-item">Self-paced</div>
                </div>

                <div class="progress-bar">
                    <div class="progress-fill" id="progressFill"></div>
                </div>

                <span class="badge">Continue Learning</span>
            </div>

            <div class="content-grid">
                <div class="module-section">
                    <h2 class="section-title">Course Modules</h2>
                    <?php
                    $modules = [
                        'Basic Functions & Graphs',
                        'Basic Differentiation',
                        'Limits & Continuity',
                        'Applications of Derivatives',
                        'Order of Rotation',
                        'The Nature of Mathematics',
                        'The Fibonacci Sequence'
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
                            <li>Apply the Constant Rule, Power Rule, Constant Multiple Rule, and Sum/Difference Rule for differentiation.</li>
                            <li>Find the derivative of functions involving polynomials, radicals, and negative exponents.</li>
                            <li>Use derivatives to find equations of tangent lines and solve problems involving rates of change.</li>
                        </ul>
                    </div>

                    <?php

                    $modules = [
                        'Basic Functions & Graphs',
                        'Basic Differentiation',
                        'Limits & Continuity',
                        'Applications of Derivatives',
                        'Order of Rotation',
                        'The Nature of Mathematics',
                        'The Fibonacci Sequence'
                    ];

                    $moduleFolders = [
                        'module1',
                        'module2',
                        'module3',
                        'module4',
                        'module5',
                        'module6',
                        'module7'
                    ];

                    foreach ($modules as $i => $title) {
                    ?>
                        <div class="lesson-card" data-module-index="<?php echo $i; ?>">
                            <h3>
                                <span class="icon">📖</span>
                                <?php echo htmlspecialchars($title); ?>
                            </h3>

                            <a href="diff-calc/<?php echo $moduleFolders[$i]; ?>/review"
                                class="action-button review" data-action="review" data-module="<?php echo $i; ?>">Review</a>

                            <a href="diff-calc/<?php echo $moduleFolders[$i]; ?>/practice"
                                class="action-button" data-action="practice" data-module="<?php echo $i; ?>" style="margin-left:8px;">Practice</a>

                            <a href="diff-calc/<?php echo $moduleFolders[$i]; ?>/quiz"
                                class="action-button" data-action="quiz" data-module="<?php echo $i; ?>" style="margin-left:8px;">Quiz</a>

                            <div style="clear: both;"></div>
                        </div>
                    <?php } ?>

                    <div class="references">
                        <h4>References</h4>
                        <ul>
                            <li>Livio, M. (2002). <i>The Golden Ratio: The Story of Phi.</i> Broadway Books.</li>
                            <li>Smith, D. E. (1958). <i>History of Mathematics.</i> Dover Publications.</li>
                            <li>Courant, R., & Robbins, H. (1996). <i>What is Mathematics?</i> Oxford University Press.</li>
                            <li>Singh, A. (2018). <i>Mathematics Class 9 – Symmetry.</i> NCERT.</li>
                            <li>Allen, G. (n.d.). <i>Limits and Continuity.</i> [Online Resource]</li>
                            <li>BBC Bitesize. (n.d.). <i>Rotational Symmetry.</i> <a href="https://www.bbc.co.uk/bitesize" target="_blank">https://www.bbc.co.uk/bitesize</a></li>
                            <li>Byju’s. (n.d.). <i>Functions and Their Graphs.</i> <a href="https://byjus.com" target="_blank">https://byjus.com</a></li>
                            <li>CK-12. (n.d.). <i>Nature of Mathematics.</i> <a href="https://www.ck12.org" target="_blank">https://www.ck12.org</a></li>
                            <li>Desmos. (n.d.). <i>Graphing Calculator.</i> <a href="https://www.desmos.com/calculator" target="_blank">https://www.desmos.com/calculator</a></li>
                            <li>Fiveable. (n.d.). <i>Order of Rotation.</i> <a href="https://www.fiveable.me" target="_blank">https://www.fiveable.me</a></li>
                            <li>Khan Academy. (n.d.). <i>Calculus, Symmetry, Limits, Differentiation, and Functions.</i> <a href="https://www.khanacademy.org" target="_blank">https://www.khanacademy.org</a></li>
                            <li>MIT OpenCourseWare. (n.d.). <i>Single Variable Calculus.</i> <a href="https://ocw.mit.edu" target="_blank">https://ocw.mit.edu</a></li>
                            <li>Paul’s Online Notes. (n.d.). <i>Calculus Notes: Limits, Derivatives, and Graphing Functions.</i> <a href="http://tutorial.math.lamar.edu" target="_blank">http://tutorial.math.lamar.edu</a></li>
                            <li>Vedantu. (n.d.). <i>Differentiation Rules.</i> <a href="https://www.vedantu.com" target="_blank">https://www.vedantu.com</a></li>
                            <li>Your Smart Class. (n.d.). <i>Nature of Mathematics.</i> <a href="https://www.yoursmartclass.com" target="_blank">https://www.yoursmartclass.com</a></li>
                        </ul>
                    </div>
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
                        <a href="#" class="social-link" aria-label="PSU">
                            <img class="psu" src="../imgs/WhiteLogo_PSU.png" alt="PSU">
                        </a>
                        <a href="#" class="social-link" aria-label="CCS">
                            <img class="ccs" src="../imgs/WhiteLogo_CCSSC.png" alt="PSU">
                        </a>
                        <a href="#" class="social-link" aria-label="ComPress">
                            <img class="compress" src="../imgs/WhiteLogo_ComPress.png" alt="PSU">
                        </a>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>© 2025 CodeHearted. All rights reserved. Built with ♥ for clever foxes everywhere.</p>
            </div>
        </div>
    </footer>

    <?php $jsVersion = file_exists(__DIR__ . '/../js/DiffCall_Scripts.js') ? filemtime(__DIR__ . '/../js/DiffCall_Scripts.js') : time(); ?>
    <script src="{{ asset('js/DiffCall_Scripts.js') }}"></script>
</body>

</html>
