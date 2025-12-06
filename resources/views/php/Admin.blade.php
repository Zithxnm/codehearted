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
                    <form class="burger-dropdown" method="POST" action="{{ route('logout') }}">
                        @csrf
                        @guest
                            <a href="{{ route('home') }}" class="dropdown-link">Home</a>
                            <a href="{{ route('show.login') }}" class="dropdown-link">Login</a>
                            <a href="{{ route('show.register') }}" class="dropdown-link">Signup</a>
                        @endguest
                        @auth
                            <a href="{{ route('dashboard') }}" class="dropdown-link">Dashboard</a>
                            <a href="{{ route('profile') }}" class="dropdown-link">Profile</a>
                            <a href="{{ route('courses.index') }}" class="dropdown-link">Courses</a>
                            <a href="{{ route('community.index') }}" class="dropdown-link">Community</a>
                            <a href="{{ route('logout') }}" class="dropdown-link"
                               onclick="event.preventDefault(); this.closest('form').submit();">
                                Logout</a>
                        @endauth
                    </form>
                </div>
            </div>
        </div>
    </header>

    <div class="hero">
        <aside class="sidebar">
            <div class="admin-profile">
                <img class="admin-avatar" src="{{ \Illuminate\Support\Facades\Auth::user()->profile_picture_path }}">
                <div class="admin-name">{{ \Illuminate\Support\Facades\Auth::user()->name }}</div>
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
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="showUsers(event)">
                        User Management
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

            <div class="audit-log hidden" id="auditLog">
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

{{--            User management--}}
            <div class="user-management hidden" id="userManagement">
                <h2 class="section-title">User Management</h2>

                <div class="table-container" style="background: #FFF8DC; border: 3px solid #8B4513; border-radius: 12px; padding: 20px;">
                    <table class="log-table" style="width: 100%;">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($allUsers as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                            <span style="font-weight: bold; color: {{ $user->role === 'admin' ? '#d97706' : '#124559' }};">
                                {{ ucfirst($user->role) }}
                            </span>
                                </td>
                                <td>
                                    <form action="{{ route('admin.users.toggle', $user->id) }}" method="POST" style="display:inline;">
                                        @csrf @method('PATCH')
                                        <button type="submit" class="btn-small" style="cursor:pointer; padding: 5px 10px; background: #124559; color: white; border: none; border-radius: 4px;" onclick="return validateAdminAction(event, {{ Auth::id() }}, {{ $user->id }}, 'demote/promote')">
                                            {{ $user->role === 'admin' ? 'Demote' : 'Promote' }}
                                        </button>
                                    </form>

                                    <form action="{{ route('admin.users.delete', $user->id) }}" method="POST" style="display:inline;">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn-small" style="cursor:pointer; padding: 5px 10px; background: #dc2626; color: white; border: none; border-radius: 4px;" onclick="return validateAdminAction(event, {{ Auth::id() }}, {{ $user->id }}, 'delete')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <div id="toast-container">
            <div id="toast" class="toast"></div>
        </div>
    </div>
    <script>
        //Passses chart data to js
        window.enrollmentData = {
            labels: @json($chartLabels),
            counts: @json($chartData)
        };

        //Passes line chart data to js
        window.trendData = {
            labels: @json($months),
            users: @json($userGrowth),
            activity: @json($activityLog)
        };

        document.addEventListener('DOMContentLoaded', function() {
            const checkAndShow = (msg, type) => {
                if (window.showToast) {
                    window.showToast(msg, type);
                } else {
                    // Fallback if script hasn't loaded yet
                    setTimeout(() => checkAndShow(msg, type), 100);
                }
            };

            @if(session('success'))
            checkAndShow("{{ session('success') }}", 'success');
            @endif

            @if(session('error'))
            checkAndShow("{{ session('error') }}", 'error');
            @endif
        });
    </script>
    @vite('resources/js/Admin_Scripts.js')
</body>
</html>
