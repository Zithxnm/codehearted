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
        <div style="background: #333; color: #fff; padding: 20px; margin-bottom: 20px; border-radius: 8px; font-family: monospace;">
            <h3>Debugging Data</h3>
            <p><strong>Current Section:</strong> {{ $section }}</p>
            <p><strong>Module ID:</strong> {{ $module->id }}</p>

            @if($module->practice)
                <p><strong>Practice Container:</strong> Found (ID: {{ $module->practice->id }})</p>
                <p><strong>Practice Question Count (Database):</strong> {{ \App\Models\PracticeQuestion::where('practice_id', $module->practice->id)->count() }}</p>
                <p><strong>Practice Question Count (Relation):</strong> {{ $module->practice->questions->count() }}</p>
                <p><strong>Quiz Question Count (Database):</strong> {{ \App\Models\Question::where('quiz_id', $module->quiz->id)->count() }}</p>
                <p><strong>Quiz Question Count (Relation):</strong> {{ $module->quiz->questions->count() }}</p>

            @else
                <p style="color: red;"><strong>Practice Container:</strong> NOT FOUND (This is the problem)</p>
            @endif
        </div>
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
                                <div class="lesson-section" style="border-bottom: 1px solid #eee; padding-bottom: 2rem; margin-bottom: 2rem;">
                                    <p class="section-heading">Question {{ $index + 1 }}</p>
                                    <p class="instruction">{{ $question->question_text }}</p>

                                    {{-- 1. CODE SNIPPET TYPES (Trace / Find Bug) --}}
                                    @if(isset($question->details['code_snippet']))
                                        <div class="code-block">
                                            <pre>{{ $question->details['code_snippet'] }}</pre>
                                        </div>
                                    @endif

                                    {{-- 2. MULTIPLE CHOICE / TRUE FALSE --}}
                                    @if(in_array($question->type, ['multiple_choice', 'true_false']))
                                        <ul class="options" style="list-style: none; padding: 0;">
                                            @foreach($question->options as $option)
                                                <li class="option-item" data-is-correct="{{ $option->is_correct ? 'true' : 'false' }}">
                                                    <label style="display: block; padding: 10px; border: 1px solid #ccc; border-radius: 8px; cursor: pointer;">
                                                        <input type="radio" name="q{{ $question->id }}" value="{{ $option->id }}">
                                                        {{ $option->option_text }}
                                                        <span class="correct-badge" style="display:none; float: right; color: #198754; font-weight: bold;">✔ Correct</span>
                                                    </label>
                                                </li>
                                            @endforeach
                                        </ul>

                                        {{-- 3. TEXT INPUT TYPES (Identification / Solving / Trace / Bug) --}}
                                    @elseif(in_array($question->type, ['identification', 'solving', 'trace_output', 'find_bug']))
                                        <input type="text" class="answer-input wide" placeholder="Type your answer..." autocomplete="off">

                                        <div class="answer-reveal" style="display: none; margin-top: 10px; color: #124559; background: #e0f2f1; padding: 15px; border-radius: 8px;">
                                            <strong>Correct Answer:</strong>
                                            {{ $question->options->where('is_correct', true)->first()->option_text ?? 'See solution' }}
                                        </div>

                                        {{-- 4. MATCHING TYPE --}}
                                    @elseif($question->type === 'matching')
                                        <table class="match-table">
                                            @foreach($question->details['pairs'] as $pair)
                                                <tr>
                                                    <td style="width: 45%; padding: 8px; border: 1px solid #ddd;">{{ $pair['left'] }}</td>
                                                    <td style="width: 10%; text-align: center;">&rarr;</td>
                                                    <td style="width: 45%;">
                                                        <input type="text" class="answer-input wide" placeholder="Match..." readonly>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                        <div class="answer-reveal" style="display: none; margin-top: 10px; color: #124559; background: #e0f2f1; padding: 15px; border-radius: 8px;">
                                            <strong>Matches:</strong>
                                            <ul style="margin-top: 5px; padding-left: 20px;">
                                                @foreach($question->details['pairs'] as $pair)
                                                    <li>{{ $pair['left'] }} = <strong>{{ $pair['right'] }}</strong></li>
                                                @endforeach
                                            </ul>
                                        </div>

                                        {{-- 5. TABLE MAKING --}}
                                    @elseif($question->type === 'table_making')
                                        <table class="match-table" style="width: auto;">
                                            <thead>
                                            <tr>
                                                @foreach($question->details['headers'] as $header)
                                                    <th style="background: #f0f9ff; padding: 8px; border: 1px solid #ccc;">{{ $header }}</th>
                                                @endforeach
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($question->details['rows'] as $row)
                                                <tr>
                                                    @foreach($row as $cell)
                                                        <td style="border: 1px solid #ccc; padding: 5px;">
                                                            @if(str_starts_with($cell, 'answer:'))
                                                                <input type="text" class="answer-input small">
                                                            @else
                                                                {{ $cell }}
                                                            @endif
                                                        </td>
                                                    @endforeach
                                                </tr>
                                            @endforeach
                                        </table>
                                        <div class="answer-reveal" style="display: none; margin-top: 10px; color: #124559; background: #e0f2f1; padding: 15px; border-radius: 8px;">
                                            <strong>Table Solution:</strong><br>
                                            (Check logic provided in Review section)
                                        </div>

                                        {{-- 6. ESSAY / PROGRAM WRITING --}}
                                    @elseif(in_array($question->type, ['essay', 'code_writing']))
                                        <textarea class="answer-area" placeholder="Write your code or explanation here..."></textarea>
                                        <div class="answer-reveal" style="display: none; margin-top: 10px; color: #124559; background: #e0f2f1; padding: 15px; border-radius: 8px;">
                                            <strong>Model Answer:</strong>
                                            <pre style="background: #fff; padding: 10px; border-radius: 5px; margin-top: 5px;">{{ $question->details['model_answer'] ?? '' }}</pre>
                                        </div>

                                    @endif
                                </div>
                            @endforeach

                            <div style="display: flex; gap: 10px; margin-top: 2rem;">
                                <button type="button" class="submit-btn" onclick="revealAnswers()">Show Answers</button>
                                <button type="button" class="submit-btn" onclick="resetPractice()" style="background: #6b7280; display:none;" id="retryBtn">Reset</button>
                            </div>
                        </form>
                    </div>

                @else
                    <p style="text-align: center; padding: 2rem;">No practice available.</p>
                @endif
            @endif
        @endif

    </section>
</main>

<script>
    function revealAnswers() {
        // Reveal text answers
        document.querySelectorAll('.answer-reveal').forEach(el => el.style.display = 'block');

        // Highlight radio buttons
        document.querySelectorAll('.option-item[data-is-correct="true"]').forEach(el => {
            el.querySelector('label').style.backgroundColor = '#d1e7dd';
            el.querySelector('label').style.border = '2px solid #198754';
            el.querySelector('.correct-badge').style.display = 'inline';
        });

        // Fill in Table Inputs
        // (Optional: You can make this fill in the correct values if stored in details)

        document.querySelector('button[onclick="revealAnswers()"]').style.display = 'none';
        document.getElementById('retryBtn').style.display = 'inline-block';
    }

    function resetPractice() {
        document.getElementById('practiceForm').reset();
        document.querySelectorAll('.answer-reveal').forEach(el => el.style.display = 'none');

        // Reset Styles
        document.querySelectorAll('.option-item label').forEach(el => {
            el.style.backgroundColor = '';
            el.style.border = '1px solid #ccc';
        });
        document.querySelectorAll('.correct-badge').forEach(el => el.style.display = 'none');

        document.querySelector('button[onclick="revealAnswers()"]').style.display = 'inline-block';
        document.getElementById('retryBtn').style.display = 'none';
    }
</script>
</body>
</html>
