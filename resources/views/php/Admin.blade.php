<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/Admin_Styles.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>CodeHearted - Admin Page</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <a href="/"><img src="{{asset('imgs/CodeHearted_Logo.png')}}" alt="Logo"></a>
                </div>

                <div class="search-container">
                    <div class="search-box">
                        <button class="search-icon-btn" type="button" aria-label="Search">
                            <img class="search-icon" src="{{asset("imgs/7.jpg")}}" alt="Search Icon">
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
                        <a href="{{ route('about') }}" class="dropdown-link">About</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="hero">
        <aside class="sidebar">
            <div class="admin-profile">
                <div class="admin-avatar">AD</div>
                <div class="admin-name">Admin</div>
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#" class="nav-link active" onclick="showDashboard(event)">
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="showAuditLog(event)">
                        Audit Log
                    </a>
                </li>
            </ul>
        </aside>

        <main class="main-content">
            <h1 class="welcome-title">Welcome Admin!</h1>

            <div class="dashboard-content" id="dashboardContent">
                <h2 class="section-title">Overview</h2>

                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-icon">📚</div>
                        <div class="stat-info">
                            <h3>4</h3>
                            <p>Total Subjects</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon"><i class="fa fa-eye"></i></div>
                        <div class="stat-info">
                            <h3>678</h3>
                            <p>Total Views</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon"><i class="fa fa-eye"></i></div>
                        <div class="stat-info">
                            <h3>67</h3>
                            <p>Unique Viewers</p>
                        </div>
                    </div>
                </div>

                <div class="charts-grid">
                    <div class="chart-container">
                        <canvas id="lineChart"></canvas>
                    </div>
                    <div class="chart-container">
                        <canvas id="pieChart"></canvas>
                    </div>
                </div>
            </div>

            <div class="audit-log" id="auditLog">
                <h2 class="section-title">Audit Log</h2>
                <table class="audit-table">
                    <thead>
                        <tr>
                            <th>Timestamp</th>
                            <th>User</th>
                            <th>Action</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2025-11-10 14:30:15</td>
                            <td>john_doe</td>
                            <td>User Login</td>
                            <td>Successful login from IP 192.168.1.1</td>
                        </tr>
                        <tr>
                            <td>2025-11-10 13:15:42</td>
                            <td>admin</td>
                            <td>Subject Created</td>
                            <td>Created new subject: Algorithms</td>
                        </tr>
                        <tr>
                            <td>2025-11-10 12:45:20</td>
                            <td>jane_smith</td>
                            <td>Content Updated</td>
                            <td>Updated lesson content in Programming Fundamentals</td>
                        </tr>
                        <tr>
                            <td>2025-11-10 11:20:05</td>
                            <td>new_user_123</td>
                            <td>User Registration</td>
                            <td>New user registered successfully</td>
                        </tr>
                        <tr>
                            <td>2025-11-10 10:00:30</td>
                            <td>admin</td>
                            <td>Settings Modified</td>
                            <td>Updated system configuration</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
    @vite('resources/js/Admin_Scripts.js')
</body>
</html>
