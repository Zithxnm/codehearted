<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $cssVersion = file_exists(__DIR__ . '/../css/Community_Styles.css') ? filemtime(__DIR__ . '/../css/Community_Styles.css') : time(); ?>
    @vite('resources/css/Community_Styles.css')
    <title>CodeHearted - Community Forum</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <a href="../php/Login.php"><img src="../../../public/imgs/CodeHearted_Logo.png" alt="Logo"></a>
                </div>

                <div class="search-container">
                    <div class="search-box">
                        <button class="search-icon-btn" type="button" aria-label="Search">
                            <img class="search-icon" src="../../../public/imgs/7.jpg" alt="Search Icon">
                        </button>
                        <input type="text" placeholder="Search..." class="search-input">
                    </div>
                </div>

                <div class="burger-menu">
                    <div class="burger-icon">
                    </div>
                    <div class="burger-dropdown">
                        <a href="../../../WebSys_Project/php/Courses.php" class="dropdown-link">Courses</a>
                        <a href="../../../WebSys_Project/php/Profile.php" class="dropdown-link">Profile</a>
                        <a href="../../../WebSys_Project/php/Dashboard.php" class="dropdown-link">Dashboard</a>
                        <a href="About.blade.php" class="dropdown-link">About</a>
                        <a href="../php/Login.php" class="dropdown-link">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Container -->
    <div class="hero">
        <!-- Hero Section -->
        <div class="hero-content">
            <h1>Community Forum</h1>
            <p>Connect with fellow learners, ask questions, and share knowledge</p>
        </div>

        <!-- Search Bar -->
        <div class="search-bar">
            <input type="text" class="search-input" placeholder="Search discussions...">
            <button class="new-discussion-btn">New Discussion</button>
        </div>

        <!-- Content Grid -->
        <div class="content-grid">
            <!-- Discussions Section -->
            <div class="discussions-section">
                <div class="section-header">
                    <h2>Recent Discussions</h2>
                    <div class="filter-tabs">
                        <button class="filter-tab active">Latest</button>
                        <button class="filter-tab">Popular</button>
                        <button class="filter-tab">Unanswered</button>
                    </div>
                </div>

                <!-- Discussion Cards -->
                <div class="discussion-card">
                    <div class="discussion-header">
                        <div>
                            <div class="discussion-title">How to approach recursive algorithms?</div>
                            <div style="color: #6b7280; font-size: 0.875rem;">
                                By Sarah Chen • 2 hours ago
                            </div>
                        </div>
                        <span class="discussion-badge">Data Structures</span>
                    </div>
                    <div class="discussion-meta">
                        <span class="meta-item">💬 12 replies</span>
                        <span class="meta-item">👍 24 likes</span>
                    </div>
                </div>

                <div class="discussion-card">
                    <div class="discussion-header">
                        <div>
                            <div class="discussion-title">Best practices for variable naming</div>
                            <div style="color: #6b7280; font-size: 0.875rem;">
                                By Mike Johnson • 5 hours ago
                            </div>
                        </div>
                        <span class="discussion-badge">Programming Fundamentals</span>
                    </div>
                    <div class="discussion-meta">
                        <span class="meta-item">💬 8 replies</span>
                        <span class="meta-item">👍 15 likes</span>
                    </div>
                </div>

                <div class="discussion-card">
                    <div class="discussion-header">
                        <div>
                            <div class="discussion-title">Understanding network protocols - TCP vs UDP</div>
                            <div style="color: #6b7280; font-size: 0.875rem;">
                                By Emily Davis • 1 day ago
                            </div>
                        </div>
                        <span class="discussion-badge">Networks</span>
                    </div>
                    <div class="discussion-meta">
                        <span class="meta-item">💬 20 replies</span>
                        <span class="meta-item">👍 35 likes</span>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <aside class="sidebar">
                <!-- Community Stats -->
                <div class="stats-card">
                    <div class="card-title">
                        👥 Community Stats
                    </div>
                    <div class="stat-item">
                        <span class="stat-value">2,500+</span>
                        <span class="stat-label">Active Students</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value">850+</span>
                        <span class="stat-label">Discussions</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value">12k+</span>
                        <span class="stat-label">Helpful Answers</span>
                    </div>
                </div>

                <!-- Guidelines -->
                <div class="guidelines-card">
                    <div class="card-title">
                        👥 Community Guidelines
                    </div>
                    <p style="font-size: 0.9rem; margin-bottom: 0.5rem;">Help us maintain a positive learning environment</p>
                    <ul class="guidelines-list">
                        <li>Be respectful and supportive</li>
                        <li>Stay on topic and helpful</li>
                        <li>Share knowledge generously</li>
                        <li>Give credit where due</li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>

    <?php $jsVersion = file_exists(__DIR__ . '/../js/Community_Scripts.js') ? filemtime(__DIR__ . '/../js/Community_Scripts.js') : time(); ?>
    @vite('resources/js/Community_Scripts.js')
</body>
</html>
