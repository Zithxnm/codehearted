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


        <!-- DEBUG DATA START -->
{{--        <div style="background: #333; color: #fff; padding: 20px; margin-bottom: 20px; border-radius: 8px; font-family: monospace;">--}}
{{--            <h3>Debugging Data</h3>--}}
{{--            <p><strong>Current Section:</strong> {{ $section }}</p>--}}
{{--            <p><strong>Module ID:</strong> {{ $module->id }}</p>--}}

{{--            @if($module->practice)--}}
{{--                <p><strong>Practice Container:</strong> Found (ID: {{ $module->practice->id }})</p>--}}
{{--                <p><strong>Practice Question Count (Database):</strong> {{ \App\Models\PracticeQuestion::where('practice_id', $module->practice->id)->count() }}</p>--}}
{{--                <p><strong>Practice Question Count (Relation):</strong> {{ $module->practice->questions->count() }}</p>--}}
{{--                <p><strong>Quiz Question Count (Database):</strong> {{ \App\Models\Question::where('quiz_id', $module->quiz->id)->count() }}</p>--}}
{{--                <p><strong>Quiz Question Count (Relation):</strong> {{ $module->quiz->questions->count() }}</p>--}}

{{--            @else--}}
{{--                <p style="color: red;"><strong>Practice Container:</strong> NOT FOUND (This is the problem)</p>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--        <!-- DEBUG DATA END -->--}}


        @if($section === 'quiz')
            @if($quiz)
                <form action="{{ route('quizzes.submit', $quiz->id) }}" method="POST" id="quizForm">
                    @csrf
                    @foreach($quiz->questions as $index => $question)
                        <div class="lesson-section">
                            <p class="question">{{ $index + 1 }}. {{ $question->question_text }}</p>

                            @if($question->type === 'multiple_choice')
                                <ul class="options">
                                    @foreach($question->options as $option)
                                        <li>
                                            <label>
                                                <input type="radio" name="answers[{{ $question->id }}]" value="{{ $option->id }}">
                                                {{ $option->option_text }}
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                            @elseif($question->type === 'identification')
                                <div class="options" style="padding-left: 1rem;">
                                    <input type="text" name="answers[{{ $question->id }}]" placeholder="Type your answer here..."
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
            @if($section === 'review')
                <div class="lesson-section">
                    <div class="typography">
                        {!! $content !!}
                    </div>
                </div>

                <div style="margin-top: 2rem; text-align: center; display: flex; gap: 10px; justify-content: center;">
                    <a href="{{ request()->fullUrlWithQuery(['section' => 'practice']) }}" class="submit-btn" style="text-decoration: none; display: inline-block;">
                        Go to Practice
                    </a>
                </div>

            @elseif($section === 'practice')
                @if($practice && $practice->questions->count() > 0)

                    <div class="lesson-section">
                        <div class="typography" style="margin-bottom: 2rem;">
                            {!! $practice->content !!}
                        </div>

                        <form id="practiceForm">
                            @foreach($practice->questions as $index => $question)
                                <div class="lesson-section" id="q-{{ $question->id }}">
                                    <p class="section-heading">Practice {{ $index + 1 }}</p>
                                    <p class="instruction">{{ $question->question_text }}</p>

                                    @if($question->type === 'multiple_choice')
                                        <ul class="options" style="list-style: none; padding: 0;">
                                            @foreach($question->options as $option)
                                                <li class="option-item" data-correct="{{ $option->is_correct ? 'true' : 'false' }}" style="margin-bottom: 0.5rem;">
                                                    <label style="display: block; padding: 10px; border: 1px solid #ccc; border-radius: 8px; cursor: pointer; transition: all 0.2s;">
                                                        <input type="radio" name="q{{ $question->id }}" value="{{ $option->id }}">
                                                        {{ $option->option_text }}
                                                        <span class="feedback-icon correct" style="display:none; color: green; float: right; font-weight: bold;">✔</span>
                                                        <span class="feedback-icon wrong" style="display:none; color: red; float: right; font-weight: bold;">✘</span>
                                                    </label>
                                                </li>
                                            @endforeach
                                        </ul>

                                    @elseif($question->type === 'identification')
                                            <?php
                                            $correctAnswer = $question->options()->where('is_correct', true)->first()->option_text ?? '';
                                            ?>
                                        <div class="text-answer-item" data-correct-answer="{{ $correctAnswer }}">
                                            <input type="text" class="answer-input wide" placeholder="Type your answer..." autocomplete="off">
                                            <div class="feedback-msg" style="display:none; margin-top: 5px; font-weight: bold;"></div>
                                        </div>
                                    @endif
                                </div>
                            @endforeach

                            <button type="button" class="submit-btn" onclick="checkPracticeAnswers()">Check Answers</button>
                            <button type="button" class="submit-btn" onclick="resetPractice()" style="background: #6b7280; margin-top: 10px; display:none;" id="retryBtn">Retry</button>
                        </form>

                        <div style="margin-top: 2rem; text-align: center;">
                            <a href="{{ request()->fullUrlWithQuery(['section' => 'quiz']) }}" class="submit-btn" style="text-decoration: none; display: inline-block; background-color: #124559;">
                                Ready? Take Quiz &rarr;
                            </a>
                        </div>
                    </div>
                @else
                    <p style="text-align: center; color: #666;">No practice questions available for this module.</p>
                @endif
            @endif
        @endif

    </section>
</main>

<script>
    function checkPracticeAnswers() {
        // 1. Check Multiple Choice
        document.querySelectorAll('.option-item').forEach(item => {
            const isCorrect = item.getAttribute('data-correct') === 'true';
            const input = item.querySelector('input');
            const correctIcon = item.querySelector('.feedback-icon.correct');
            const wrongIcon = item.querySelector('.feedback-icon.wrong');
            const label = item.querySelector('label');

            // Reset
            label.style.backgroundColor = '';
            label.style.borderColor = '#ccc';
            correctIcon.style.display = 'none';
            wrongIcon.style.display = 'none';

            if (input.checked) {
                if (isCorrect) {
                    label.style.backgroundColor = '#d1e7dd';
                    label.style.borderColor = '#198754';
                    correctIcon.style.display = 'inline';
                } else {
                    label.style.backgroundColor = '#f8d7da';
                    label.style.borderColor = '#dc3545';
                    wrongIcon.style.display = 'inline';
                }
            }
            // Reveal correct answer
            if (isCorrect) {
                label.style.borderBottom = '3px solid #198754';
            }
        });

        // 2. Check Identification
        document.querySelectorAll('.text-answer-item').forEach(item => {
            const input = item.querySelector('input');
            const feedback = item.querySelector('.feedback-msg');
            const correctAnswer = item.getAttribute('data-correct-answer');
            const userAnswer = input.value.trim();

            input.style.borderColor = '#ccc';
            feedback.style.display = 'none';

            if (userAnswer !== "") {
                if (userAnswer.toLowerCase() === correctAnswer.toLowerCase()) {
                    input.style.borderColor = '#198754';
                    feedback.textContent = "✔ Correct!";
                    feedback.style.color = '#198754';
                    feedback.style.display = 'block';
                } else {
                    input.style.borderColor = '#dc3545';
                    feedback.textContent = "✘ Answer: " + correctAnswer;
                    feedback.style.color = '#dc3545';
                    feedback.style.display = 'block';
                }
            }
        });

        document.getElementById('retryBtn').style.display = 'inline-block';
    }

    function resetPractice() {
        document.getElementById('practiceForm').reset();
        document.querySelectorAll('.option-item label').forEach(l => {
            l.style.backgroundColor = '';
            l.style.border = '1px solid #ccc';
            l.style.borderBottom = 'none';
        });
        document.querySelectorAll('.feedback-icon').forEach(i => i.style.display = 'none');
        document.querySelectorAll('.text-answer-item input').forEach(i => i.style.borderColor = '#ccc');
        document.querySelectorAll('.feedback-msg').forEach(i => i.style.display = 'none');
        document.getElementById('retryBtn').style.display = 'none';
    }
</script>
</body>
</html>
