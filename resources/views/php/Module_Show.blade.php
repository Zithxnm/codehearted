<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $module->title }} | CodeHearted</title>
    @vite([$cssPath])
</head>

<body>
<header class="header">
    <div class="container">
        <div class="header-content">
            <div class="user-actions">
                <a href="{{ route('courses.show', $module->course_id) }}" style="text-decoration: none; color: #124559; font-weight: bold;">
                    &larr; Back to Modules
                </a>
            </div>
        </div>
    </div>
</header>

<main class="lesson-container">
    <section class="lesson-card">

        <h1 class="lesson-title">
            {{ $module->title }}: {{ ucfirst($section) }}
        </h1>

        @if($section === 'quiz')
            @if($quiz)
                <form action="#" method="POST" id="quizForm"> @csrf

                    @foreach($quiz->questions as $index => $question)
                        <div class="lesson-section">
                            <p class="question">{{ $index + 1 }}. {{ $question->question_text }}</p>

                            @if($question->type === 'multiple_choice')
                                <ul class="options">
                                    @foreach($question->options as $option)
                                        <li>
                                            <label>
                                                <input type="radio"
                                                       name="answers[{{ $question->id }}]"
                                                       value="{{ $option->id }}">
                                                {{ $option->option_text }}
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>

                            @elseif($question->type === 'identification')
                                <div class="options" style="padding-left: 1rem;">
                                    <input type="text"
                                           name="answers[{{ $question->id }}]"
                                           placeholder="Type your answer here..."
                                           style="padding: 10px; border: 2px solid #ddd; border-radius: 8px; width: 100%; font-family: inherit;">
                                </div>
                            @endif
                        </div>
                    @endforeach

                    <button type="submit" class="submit-btn">Submit Answers</button>
                </form>
            @else
                <p style="text-align: center; padding: 2rem;">No quiz available for this module yet.</p>
            @endif

        @else
            <div class="lesson-section">
                <div class="typography">
                    {!! $content !!}
                </div>
            </div>

            <div style="margin-top: 2rem; text-align: center; display: flex; gap: 10px; justify-content: center;">
                @if($section === 'review')
                    <a href="{{ request()->fullUrlWithQuery(['section' => 'practice']) }}" class="submit-btn" style="text-decoration: none; display: inline-block;">
                        Go to Practice
                    </a>
                @elseif($section === 'practice')
                    <a href="{{ request()->fullUrlWithQuery(['section' => 'quiz']) }}" class="submit-btn" style="text-decoration: none; display: inline-block;">
                        Take Quiz
                    </a>
                @endif
            </div>
        @endif

    </section>
</main>

<script>
    document.querySelector('.submit-btn')?.addEventListener('click', (e) => {
    });
</script>
</body>
</html>
