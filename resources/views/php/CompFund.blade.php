<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeHearted</title>
    <meta name="description" content="Sharpen your logic, learn coding fundamentals, and grow with confidence. CodeHearted helps you build skills that last.">
    <?php $cssVersion = file_exists(__DIR__ . '/../css/CompFund_Styles.css') ? filemtime(__DIR__ . '/../css/CompFund_Styles.css') : time(); ?>
    <link rel="stylesheet" href="{{ asset('css/CompFund_Styles.css') }}">
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
                        <a href="courses" class="dropdown-link">Courses</a>
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
                <h1>Fundamentals of Computing</h1>
                <p>Fundamentals of Computing introduces students to the essential concepts of how computers work and interact with information. It emphasizes problem-solving, logical thinking, and the role of computing in everyday life, helping learners understand not just how to use technology, but how it fundamentally shapes the modern world.</p>

                <div class="course-info">
                    <div class="info-item">5 lessons</div>
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
                        'CCS, OHS Policies and Tools',
                        'Hardware Assembly',
                        'BIOS/UEFI & Bootable Media',
                        'Installing OS & Drivers',
                        'Installing Applications & Licensing',
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
                        'CCS, OHS Policies and Tools',
                        'Hardware Assembly',
                        'BIOS/UEFI & Bootable Media',
                        'Installing OS & Drivers',
                        'Installing Applications & Licensing',
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

                            <a href="comp-fund/<?php echo $moduleFolders[$i]; ?>/review"
                                class="action-button review" data-action="review" data-module="<?php echo $i; ?>">Review</a>

                            <a href="comp-fund/<?php echo $moduleFolders[$i]; ?>/practice"
                                class="action-button" data-action="practice" data-module="<?php echo $i; ?>" style="margin-left:8px;">Practice</a>

                            <a href="comp-fund/<?php echo $moduleFolders[$i]; ?>/quiz"
                                class="action-button" data-action="quiz" data-module="<?php echo $i; ?>" style="margin-left:8px;">Quiz</a>

                            <div style="clear: both;"></div>
                        </div>
                    <?php } ?>

                    <div class="references">
                        <h4>References</h4>
                        <ul>
                            <li>Technical Education and Skills Development Authority (TESDA). (2019). <i>Computer Systems Servicing NC II: Curriculum Guide.</i> Department of Education, Republic of the Philippines. </li>
                            <li>GCFGlobal. (n.d.). <i>Computer basics: Inside a computer.</i> GCFGlobal.</li>
                            <li>HP. (2025, February 13). <i>What is UEFI? Understanding Your PC’s Core Technology.</i> HP Tech Takes.</li>
                            <li>Microsoft. (2024, September 20). <i>Understanding Windows Update rules for driver distribution.</i> Microsoft Learn.</li>
                            <li>Revenera. (2025, August 8). <i>Software licensing models & types: Your complete guide.</i> Revenera. </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <section class="before-footer">
        <div class="hills"></div>
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

    <?php $jsVersion = file_exists(__DIR__ . '/../js/CompFund_Scripts.js') ? filemtime(__DIR__ . '/../js/CompFund_Scripts.js') : time(); ?>
    <script src="{{ asset('js/CompFund_Scripts.js?v=<?php echo $jsVersion; ?>') }}"></script>
</body>

</html>
