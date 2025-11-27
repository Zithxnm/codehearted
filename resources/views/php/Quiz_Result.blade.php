<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz Results</title>
    @vite(['resources/css/app.css']) <style>
        body { display: flex; justify-content: center; align-items: center; height: 100vh; background: #f0f9ff; font-family: sans-serif; }
        .result-card { background: white; padding: 40px; border-radius: 12px; text-align: center; box-shadow: 0 4px 6px rgba(0,0,0,0.1); max-width: 400px; width: 100%; }
        h1 { color: #124559; }
        .score { font-size: 3rem; font-weight: bold; color: #198754; margin: 20px 0; }
        .btn { display: inline-block; padding: 10px 20px; background: #124559; color: white; text-decoration: none; border-radius: 5px; margin-top: 20px; }
    </style>
</head>
<body>
<div class="result-card">
    <h1>Quiz Completed!</h1>
    <p>You have completed <strong>{{ $quiz->title }}</strong>.</p>

    <div class="score">
        {{ $score }} / {{ $total }}
    </div>

    <p>Great job! Your progress has been saved.</p>

    <a href="{{ route('courses.show', $quiz->module->course_id) }}" class="btn">
        Back to Course
    </a>
</div>
</body>
</html>
