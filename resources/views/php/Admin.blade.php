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
                        <div class="stat-icon">👥</div>
                        <div class="stat-info">
                            <h3>{{ $totalUsers }}</h3>
                            <p>Total Users</p>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon">🟢</div>
                        <div class="stat-info">
                            <h3>{{ $activeSessions }}</h3>
                            <p>Active Sessions</p>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon">📚</div>
                        <div class="stat-info">
                            <h3>{{ $totalCourses }}</h3>
                            <p>Total Subjects</p>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon">📝</div>
                        <div class="stat-info">
                            <h3>{{ $totalQuizzes }}</h3>
                            <p>Total Quizzes</p>
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
                <table class="log-table">
                    <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Username</th>
                        <th>Timestamp</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($auditLogs as $log)
                        <tr>
                            <td>{{ $log->admin->id ?? '0' }}</td>
                            <td>{{ $log->admin->name ?? '0' }}</td>
                            <td>{{ $log->updated_at->format('M d, Y h:i A') }}</td>
                            <td>{{ $log->Action }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" style="text-align: center;">No activity logs found.</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </main>
    </div>
    @vite('resources/js/Admin_Scripts.js')
</body>
</html>
