<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/Admin_Styles.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
                    <form action="{{ route('global.search') }}" method="GET" class="search-box">
                        <button class="search-icon-btn" type="submit">
                            <img class="search-icon" src="{{ asset('imgs/7.jpg') }}" alt="Search">
                        </button>
                        <input type="text" name="search" placeholder="Search..." class="search-input" value="{{ request('search') }}">
                    </form>
                </div>

                <div class="header-actions">

                    <div class="notification-wrapper">
                        <button class="notif-btn" onclick="toggleNotifications(event)">
                            <i class="fa-solid fa-bell"></i>
                            @if(auth()->user()->unreadNotifications->count() > 0)
                                <span class="notif-badge">
                        {{ auth()->user()->unreadNotifications->count() }}
                    </span>
                            @endif
                        </button>

                        <div id="notif-list" class="notif-dropdown">
                            <div class="notif-header">Notifications</div>
                            <div class="notif-items">
                                @forelse(auth()->user()->notifications->take(5) as $notification)
                                    <a href="{{ $notification->data['link'] }}" class="notif-item {{ $notification->read_at ? 'read' : 'unread' }}">
                                        <span class="notif-message">{{ $notification->data['message'] }}</span>
                                        <span class="notif-time">{{ $notification->created_at->diffForHumans() }}</span>
                                    </a>
                                    {{ $notification->markAsRead() }}
                                @empty
                                    <div class="notif-empty">No new notifications</div>
                                @endforelse
                            </div>
                        </div>
                    </div>

                    <div class="burger-menu">
                        <div class="burger-icon"></div>
                        <form class="burger-dropdown" method="POST" action="{{ route('logout') }}">
                            @csrf
                            @auth
                                <a href="{{ route('dashboard') }}" class="dropdown-link">Dashboard</a>
                                <a href="{{ route('courses.index') }}" class="dropdown-link">Courses</a>
                                <a href="{{ route('profile') }}" class="dropdown-link">Profile</a>
                                <a href="{{ route('community.index') }}" class="dropdown-link">Community</a>
                                <a href="{{ route('about') }}" class="dropdown-link">About</a>
                                <a href="{{ route('logout') }}" class="dropdown-link"
                                   onclick="event.preventDefault(); this.closest('form').submit();">
                                    Logout</a>
                            @endauth
                        </form>
                    </div>
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
                        <th style="width: 10%">User ID</th>
                        <th style="width: 20%">Username</th>
                        <th style="width: 30%">Timestamp</th>
                        <th style="width: 40%">Action</th>
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
                <div style="margin-top: 20px; text-align: center;">
                    {{ $auditLogs->links('pagination::simple-bootstrap-5') }}
                </div>
            </div>

{{--            User management--}}
            <div class="user-management hidden" id="userManagement">
                <h2 class="section-title">User Management</h2>

                <div class="table-container" style="background: #FFF8DC; border: 3px solid #8B4513; border-radius: 12px; padding: 20px;">
                    <table class="log-table" style="width: 100%;">
                        <thead>
                        <tr>
                            <th style="width: 10%">User ID</th>
                            <th style="width: 15%">Name</th>
                            <th style="width: 30%">Email</th>
                            <th style="width: 12%">Status</th>
                            <th style="width: 10%">Role</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($allUsers as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>

                                <td>
                                    @if($user->email_verified_at)
                                        <span style="color: #166534; font-weight: bold; background: #dcfce7; padding: 3px 8px; border-radius: 4px; font-size: 0.85em;">
                                        Verified
                                        </span>
                                    @else
                                       <span style="color: #991b1b; font-weight: bold; background: #fee2e2; padding: 3px 8px; border-radius: 4px; font-size: 0.85em;">
                                        Unverified
                                        </span>
                                     @endif
                                         </td>
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
        document.addEventListener("DOMContentLoaded", function() {
            const urlParams = new URLSearchParams(window.location.search);

            if (urlParams.has('page')) {
                // Hide Dashboard
                document.getElementById('dashboardContent').classList.add('hidden');
                document.querySelector('a[onclick="showDashboard(event)"]').classList.remove('active');

                // Show Audit Log
                document.getElementById('auditLog').classList.remove('hidden');
                document.querySelector('a[onclick="showAuditLog(event)"]').classList.add('active');
            }
        });

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
