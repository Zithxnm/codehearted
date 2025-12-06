<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Results | CodeHearted</title>
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
                <div class="search-box">
                    <button class="search-icon-btn" type="button" aria-label="Search">
                        <img class="search-icon" src="{{ asset('imgs/7.jpg') }}" alt="Search Icon">
                    </button>
                    <input type="text" placeholder="Search..." class="search-input">
                </div>
            </div>

            <div class="burger-menu">
                <div class="burger-icon"></div>
                <form class="burger-dropdown" method="POST" action="{{ route('logout') }}">
                    @csrf
                    @if(Auth::user()->isAdmin())
                        <a href="{{ route('admin.index') }}" class="dropdown-link">Admin Panel</a>
                    @endif
                    <a href="{{ route('dashboard') }}" class="dropdown-link">Dashboard</a>
                    <a href="{{ route('profile') }}" class="dropdown-link">Profile</a>
                    <a href="{{ route('courses.index') }}" class="dropdown-link">Courses</a>
                    <a href="{{ route('show.community') }}" class="dropdown-link">Community</a>
                    <a href="{{ route('about') }}" class="dropdown-link">About</a>
                    <a href="{{ route('logout') }}" class="dropdown-link"
                       onclick="event.preventDefault(); this.closest('form').submit();">
                        Logout</a>
                </form>
            </div>
        </div>
    </div>
</header>

<div class="hero">
    <div class="result-container">
        <h1 style="font-family: 'Retro'; color: #71351a; margin-bottom: 10px;">Quiz Results</h1>
        <p style="font-family: 'Glacial'; color: #555;">{{ $quiz->title }}</p>

        <div class="score-circle">
            <span class="score-big">{{ $score }}</span>
            <span class="score-label">out of {{ $total }}</span>
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

        <a href="{{ route('courses.show', $quiz->module->course_id) }}" class="action-btn">
            Return to Course
        </a>
    </div>
</div>

{{--<footer class="footer">--}}
{{--    <div class="container">--}}
{{--        <div class="footer-bottom">--}}
{{--            <p>© 2025 CodeHearted. All rights reserved.</p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</footer>--}}
@vite(['resources/js/Quiz_Result_Scripts.js'])
</body>
</html>
