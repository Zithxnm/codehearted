<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Results | CodeHearted</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite(['resources/css/Dashboard_Styles.css'])
    @vite(['resources/css/Quiz_Result_Styles.css'])
</head>

<body>
<header class="header">
    <div class="container">
        <div class="header-content">
            <div class="logo">
                <a href="{{ route('home') }}"><img src="{{ asset('imgs/CodeHearted_Logo.png') }}" alt="Logo"></a>
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
                            @if(Auth::user()->isAdmin())
                                <a href="{{ route('admin.index') }}" class="dropdown-link">Admin Panel</a>
                            @endif
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
    <div class="result-container">
        <h1 style="font-family: 'Retro'; color: #71351a; margin-bottom: 10px;">Quiz Results</h1>
        <p style="font-family: 'Glacial'; color: #555;">{{ $quiz->title }}</p>

        <div class="score-circle" style="border: 5px solid {{ $passed ? '#22c55e' : '#ef4444' }};">
            <span class="score-big">{{ $score }}</span>
            <span class="score-label">out of {{ $total }}</span>
        </div>

        <div style="margin-top: 15px; margin-bottom: 25px;">
            @if($passed)
                <span style="background-color: #dcfce7; color: #166534; padding: 10px 20px; border-radius: 20px; font-weight: bold; border: 2px solid #22c55e; font-family: 'Retro'; font-size: 1.2rem;">
                    <i class="fa-solid fa-check-circle"></i> PASSED
                </span>
            @else
                <span style="background-color: #fee2e2; color: #991b1b; padding: 10px 20px; border-radius: 20px; font-weight: bold; border: 2px solid #ef4444; font-family: 'Retro'; font-size: 1.2rem;">
                    <i class="fa-solid fa-circle-xmark"></i> FAILED
                </span>
                <p style="margin-top: 10px; color: #ef4444; font-family: 'Glacial';">You need atleast 60% score to pass.</p>
            @endif
        </div>

        <div class="review-list">
            <h3 style="font-family: 'Retro'; color: #124559; border-bottom: 2px solid #eee; padding-bottom: 10px; margin-bottom: 20px;">
                Review Your Answers
            </h3>

            @foreach($quiz->questions as $index => $question)
                @php
                    // Get User's Answer
                    $myAnswerVal = $userAnswers[$question->id] ?? null;
                    $isCorrect = false;
                    $displayAnswer = "No Answer";

                    if ($question->type === 'multiple_choice') {
                        // Find the text of the option the user picked
                        $selectedOption = $question->options->firstWhere('id', $myAnswerVal);
                        $displayAnswer = $selectedOption ? $selectedOption->option_text : 'No Selection';

                        // Check correctness
                        if ($selectedOption && $selectedOption->is_correct) {
                            $isCorrect = true;
                        }
                    }
                    elseif ($question->type === 'identification') {
                        $displayAnswer = $myAnswerVal ?? 'No Answer';
                        $correctOption = $question->options->where('is_correct', true)->first();

                        // Check correctness
                        if ($correctOption && strcasecmp(trim($displayAnswer), trim($correctOption->option_text)) === 0) {
                            $isCorrect = true;
                        }
                    }
                @endphp

                <div class="review-item {{ $isCorrect ? 'correct' : 'wrong' }}">
                    <div class="q-header">
                            <span class="status-badge {{ $isCorrect ? 'bg-success' : 'bg-danger' }}">
                                {{ $isCorrect ? 'Correct' : 'Incorrect' }}
                            </span>
                        <p class="q-text">{{ $index + 1 }}. {{ $question->question_text }}</p>
                    </div>

                    <p class="user-answer">
                        <span class="answer-label">Your Answer:</span>
                        {{ $displayAnswer }}
                    </p>
                </div>
            @endforeach
        </div>

        <div style="display: flex; gap: 10px; justify-content: center; margin-top: 20px;">
            <a href="{{ route('courses.show', $quiz->module->course_id) }}" class="action-btn">
                Return to Course
            </a>
        </div>
    </div>
</div>
@vite(['resources/js/Quiz_Result_Scripts.js'])
</body>
</html>
