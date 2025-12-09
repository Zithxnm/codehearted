<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $module->title }} | CodeHearted</title>
    @vite([$cssPath])
    @vite('resources/css/Module_Show_Toast_Styles.css')
</head>

<body>
<header class="header">
    <div class="container">
        <div class="header-content">
            <div class="user-actions">
                <a href="{{ route('courses.show', $module->course_id) }}" style="text-decoration: none; color: #71351a; font-weight: bold;">
                    &larr; Back to Modules
                </a>
            </div>
        </div>
    </div>
</header>

<main class="lesson-container">
    <section class="lesson-card">
        @if($section === 'quiz')
            @if($quiz)
                <h1 class="lesson-title">
                    {{ $module->title }}: {{ ucfirst($section) }}
                </h1>
                <form action="{{ route('quizzes.submit', $quiz->id) }}" method="POST" id="quizForm" onsubmit="return validateQuiz(event)">
                    @csrf
                    @foreach($quiz->questions as $index => $question)
                        <div class="lesson-section quiz-item">
                            <p class="section-heading">Question {{ $index + 1 }}</p>
                            <p class="instruction">{{ $question->question_text }}</p>

                            @if(in_array($question->type, ['multiple_choice', 'true_false']))
                                <ul class="options" style="list-style: none; padding: 0;">
                                    @foreach($question->options as $option)
                                        <li style="margin-bottom: 0.5rem;">
                                            <label style="display: block; padding: 10px; border: 1px solid #ccc; border-radius: 8px; cursor: pointer;">
                                                <input type="radio" name="answers[{{ $question->id }}]" value="{{ $option->id }}">
                                                {{ $option->option_text }}
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                            @elseif(in_array($question->type, ['identification', 'solving', 'trace_output', 'find_bug', 'fill_blank']))
                                <input type="text" name="answers[{{ $question->id }}]" class="answer-input wide" placeholder="Type answer..." autocomplete="off">
                            @endif
                        </div>
                    @endforeach
                    <button type="submit" class="submit-btn">Submit Quiz</button>
                </form>
            @else
                <p style="text-align: center; padding: 2rem;">No quiz available for this module yet.</p>
            @endif

        @else
            @if($section === 'review')
                <div class="review-container">
                    <h1 class="lesson-title">
                        {{ $module->title }}: {{ ucfirst($section) }}
                    </h1>
                <div class="lesson-section">
                    <div class="typography">
                        {!! $content !!}
                    </div>
                </div>
                </div>
                <div style="margin-top: 2rem; text-align: center;">
                    <a href="{{ request()->fullUrlWithQuery(['section' => 'practice']) }}" class="submit-btn" style="text-decoration: none; display: inline-block;">
                        <button style="width: 200px;height: 50px;background-color:chocolate;color:white;border-radius: 10px;font-family: Times New Roman; font-size: 20px; cursor: pointer;"><b>Go to Practice</b></button>
                    </a>
                </div>

            @elseif($section === 'practice')
                @if($module->practice->isNotEmpty()) <form id="practiceForm">
                    <h1 class="lesson-title">
                        {{ $module->title }}: {{ ucfirst($section) }}
                    </h1>
                    @foreach($module->practice as $practicePart)
                        <div class="practice-part-container" style="margin-bottom: 3rem;">


                            <div class="typography" style="margin-bottom: 1.5rem; border-bottom: 2px solid #eee; padding-bottom: 10px;">
                                <h2 style="color: #124559; font-size: 1.4rem;">{{ $practicePart->title }}</h2>
                                <div style="font-size: 0.95rem; color: #555;">{!! $practicePart->content !!}</div>
                            </div>

                            @foreach($practicePart->questions as $index => $question)
                                <div class="lesson-section practice-item" style="border-bottom: 1px solid #eee; padding-bottom: 2rem; margin-bottom: 2rem;">
                                    <p class="section-heading">{{ $index + 1 }}</p>
                                    <p class="instruction">{{ $question->question_text }}</p>

                                    {{-- 1. CODE SNIPPETS --}}
                                    @if(isset($question->details['code_snippet']))
                                        <div class="ide-container">
                                            <div class="ide-header">
                                                <span class="dot red"></span><span class="dot yellow"></span><span class="dot green"></span>
                                                <span style="margin-left: 10px; color: #ccc;">codehearted.py</span>
                                            </div>
                                            <textarea class="ide-input"
                                                      placeholder="# Write your code here..."
                                                      spellcheck="false"
                                                      onkeydown="handleTab(event)" readonly>{{ $question->details['code_snippet'] }}</textarea>
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
                                        @if(isset($question->details['explanation']))
                                            <div class="answer-reveal" style="display: none; margin-top: 10px; color: #124559; background: #e0f2f1; padding: 15px; border-radius: 8px;">
                                                <strong>Explanation:</strong> {{ $question->details['explanation'] }}
                                            </div>
                                        @endif

                                        {{-- 3. TEXT INPUTS --}}
                                    @elseif(in_array($question->type, ['identification', 'solving', 'trace_output', 'find_bug', 'fill_blank']))
                                        <input type="text" class="answer-input wide" placeholder="Type your answer..." autocomplete="off"
                                               data-correct="{{ $question->options->where('is_correct', true)->first()->option_text ?? '' }}">
                                        <div class="answer-reveal" style="display: none; margin-top: 10px; color: #124559; background: #e0f2f1; padding: 15px; border-radius: 8px;">
                                            <strong>Answer:</strong> {{ $question->options->where('is_correct', true)->first()->option_text ?? '' }}
                                        </div>

                                        {{-- 4. MATCHING --}}
                                    @elseif($question->type === 'matching')
                                        <table class="match-table">
                                            @foreach($question->details['pairs'] as $pair)
                                                <tr class="match-row">
                                                    <td style="width: 45%;">{{ $pair['left'] }}</td>
                                                    <td style="width: 10%; text-align: center;">&rarr;</td>
                                                    <td style="width: 45%;">
                                                        <select class="answer-input wide match-select" data-correct="{{ $pair['right'] }}">
                                                            <option value="" disabled selected>Select...</option>
                                                            @foreach(collect($question->details['pairs'])->pluck('right')->shuffle() as $opt)
                                                                <option value="{{ $opt }}">{{ $opt }}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="feedback-icon" style="display:none;"></span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                        <div class="answer-reveal" style="display: none; margin-top: 10px; color: #124559; background: #e0f2f1; padding: 15px; border-radius: 8px;">
                                            <strong>Matches:</strong>
                                            <ul style="margin-top: 5px; padding-left: 20px;">
                                                @foreach($question->details['pairs'] as $pair)
                                                    <li>{{ $pair['left'] }} &rarr; <strong>{{ $pair['right'] }}</strong></li>
                                                @endforeach
                                            </ul>
                                        </div>

                                        {{-- 5. TABLES --}}
                                    @elseif(in_array($question->type, ['table_making', 'truth_table', 'table_filling']))
                                        <div style="overflow-x: auto;">
                                            <table class="match-table" style="width: auto; margin: 0 auto;">
                                                <thead>
                                                <tr>
                                                    @foreach($question->details['headers'] as $header)
                                                        <th style="background: #f0f9ff; padding: 8px; border: 1px solid #ccc;">{!! $header !!}</th>
                                                    @endforeach
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($question->details['rows'] as $row)
                                                    <tr>
                                                        @foreach($row as $cell)
                                                            <td style="border: 1px solid #ccc; padding: 8px;">
                                                                @if(str_starts_with($cell, 'answer:'))
                                                                    <input type="text" class="answer-input small table-input {{ $question->type === 'truth_table' ? 'truth-answer' : '' }}"
                                                                           data-correct="{{ substr($cell, 7) }}"
                                                                        {{ $question->type === 'truth_table' ? 'maxlength=1 style=text-transform:uppercase;' : '' }}>
                                                                @else
                                                                    {{ $cell }}
                                                                @endif
                                                            </td>
                                                        @endforeach
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="answer-reveal" style="display: none; margin-top: 10px; color: #124559; background: #e0f2f1; padding: 15px; border-radius: 8px;">
                                            <strong>Solution:</strong> Check table above.
                                        </div>

                                    @elseif($question->type === 'code_writing')
                                        <div class="ide-container">
                                            <div class="ide-header">
                                                <span class="dot red"></span><span class="dot yellow"></span><span class="dot green"></span>
                                                <span style="margin-left: 10px; color: #ccc;">solution.py</span>
                                            </div>
                                            <textarea class="ide-input"
                                                      placeholder="# Write your code here..."
                                                      spellcheck="false"
                                                      onkeydown="handleTab(event)"></textarea>
                                        </div>

                                        <div class="answer-reveal" style="display: none; margin-top: 10px; color: #124559; background: #e0f2f1; padding: 15px; border-radius: 8px;">
                                            <strong>Answer:</strong>
                                            <pre style="background: #fff; padding: 10px; border-radius: 5px; font-family: monospace;">{{ $question->details['model_answer'] ?? '' }}</pre>
                                        </div>

                                        {{-- 6. ESSAY --}}
                                    @elseif(in_array($question->type, ['essay']))
                                        <textarea class="answer-area" placeholder="Write here..."></textarea>
                                        <div class="answer-reveal" style="display: none; margin-top: 10px; color: #124559; background: #e0f2f1; padding: 15px; border-radius: 8px;">
                                            <strong>Answer:</strong>
                                            <pre style="background: #fff; padding: 10px; border-radius: 5px;">{{ $question->details['model_answer'] ?? '' }}</pre>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    @endforeach

                    <div style="display: flex; gap: 10px; margin-top: 2rem; justify-content: center;">
                        <button type="button" class="submit-btn" onclick="checkPracticeAnswers()" style="background-color: #f58750ff; color: white">Check All Answers</button>
                        <button type="button" class="submit-btn" onclick="resetPractice()" style="background: #6b7280; display:none; color: white" id="retryBtn">Reset All</button>
                    </div>
                </form>

                <div style="margin-top: 2rem; text-align: center;">
                    <a href="{{ request()->fullUrlWithQuery(['section' => 'quiz']) }}" class="submit-btn" style="text-decoration: none; display: inline-block; background-color: #2a81a3ff; color: white">
                        Ready? Take Quiz &rarr;
                    </a>
                </div>

                @else
                    <p style="text-align: center; color: #666;">No practice questions available for this module.</p>
                @endif
            @endif
        @endif

    </section>
</main>

<div id="toast-container"><div id="toast" class="toast"></div></div>

<script>
    function handleTab(e) {
        if (e.key === 'Tab') {
            e.preventDefault();
            const start = e.target.selectionStart;
            const end = e.target.selectionEnd;
            e.target.value = e.target.value.substring(0, start) + "\t" + e.target.value.substring(end);
            e.target.selectionStart = e.target.selectionEnd = start + 1;
        }
    }

    function showToast(message, type = 'error') {
        const toast = document.getElementById("toast");
        toast.textContent = message;
        toast.className = "toast show " + type;
        setTimeout(() => { toast.className = toast.className.replace("show", ""); }, 3000);
    }

    function validateQuiz(event) {
        const questions = document.querySelectorAll('.quiz-item');
        let allAnswered = true;
        questions.forEach((q) => {
            const radios = q.querySelectorAll('input[type="radio"]');
            const textInputs = q.querySelectorAll('input[type="text"], textarea, select');
            let isAnswered = false;
            if (radios.length > 0) {
                radios.forEach(r => { if (r.checked) isAnswered = true; });
            } else if (textInputs.length > 0) {
                textInputs.forEach(i => { if (i.value.trim() !== "") isAnswered = true; });
            }
            if (!isAnswered) {
                allAnswered = false;
                q.style.border = "1px solid red";
                q.style.padding = "10px";
                q.style.borderRadius = "5px";
            } else {
                q.style.border = "none";
            }
        });
        if (!allAnswered) {
            event.preventDefault();
            showToast("Please answer all questions before submitting!", "error");

            return false;
        }
        return true;
    }

    function checkPracticeAnswers() {
        const practiceItems = document.querySelectorAll('.practice-item');
        let allAnswered = true;

        // 1. VALIDATION STEP
        practiceItems.forEach(item => {
            let isAnswered = false;
            if (item.querySelector('input[type="radio"]')) {
                if (item.querySelector('input[type="radio"]:checked')) isAnswered = true;
            } else if (item.querySelector('input[type="text"]')) {
                const inputs = item.querySelectorAll('input[type="text"]');
                let inputsFilled = true;
                inputs.forEach(i => { if(i.value.trim() === "") inputsFilled = false; });
                if (inputsFilled) isAnswered = true;
            } else if (item.querySelector('select')) {
                const selects = item.querySelectorAll('select');
                let selectsFilled = true;
                selects.forEach(s => { if(s.value === "") selectsFilled = false; });
                if (selectsFilled) isAnswered = true;
            } else if (item.querySelector('textarea')) {
                if (item.querySelector('textarea').value.trim() !== "") isAnswered = true;
            }

            if (!isAnswered) {
                allAnswered = false;
                item.style.border = "1px solid red";
                item.style.borderRadius = "8px";
                item.style.padding = "15px";
            } else {
                item.style.border = "none";
                item.style.borderBottom = "1px solid #eee";
            }
        });

        if (!allAnswered) {
            showToast("Please answer all practice questions first!", "warning");
            return;
        }

        // 2. CHECK & REVEAL STEP
        document.querySelectorAll('.answer-reveal').forEach(el => el.style.display = 'block');

        // Multiple Choice
        document.querySelectorAll('.option-item[data-is-correct="true"]').forEach(el => {
            el.querySelector('label').style.backgroundColor = '#d1e7dd';
            el.querySelector('label').style.border = '2px solid #198754';
            el.querySelector('.correct-badge').style.display = 'inline';
        });

        // Tables & Truth Tables
        document.querySelectorAll('.table-input').forEach(input => {
            const correct = input.getAttribute('data-correct');
            if(input.value.trim().toUpperCase() === correct.toUpperCase()) {
                input.style.backgroundColor = '#d1e7dd';
                input.style.borderColor = '#198754';
            } else {
                input.style.backgroundColor = '#f8d7da';
                input.style.borderColor = '#dc3545';
            }
        });

        // Matching
        document.querySelectorAll('.match-select').forEach(select => {
            const correct = select.getAttribute('data-correct');
            const feedback = select.parentElement.querySelector('.feedback-icon');
            if(select.value === correct) {
                select.style.borderColor = '#198754';
                select.style.backgroundColor = '#d1e7dd';
                if(feedback) { feedback.textContent = '✔'; feedback.style.display='inline'; feedback.style.color='green'; }
            } else {
                select.style.borderColor = '#dc3545';
                select.style.backgroundColor = '#f8d7da';
                if(feedback) { feedback.textContent = '✘'; feedback.style.display='inline'; feedback.style.color='red'; }
            }
        });

        // Text Inputs
        document.querySelectorAll('input.answer-input:not(.table-input):not(.match-select)').forEach(input => {
            const correct = input.getAttribute('data-correct');
            if(correct) {
                if(input.value.trim().toLowerCase() === correct.toLowerCase()) {
                    input.style.borderColor = '#198754';
                    input.style.backgroundColor = '#d1e7dd';
                } else {
                    input.style.borderColor = '#dc3545';
                    input.style.backgroundColor = '#f8d7da';
                }
            }
        });

        // Disable inputs
        document.querySelectorAll('#practiceForm input, #practiceForm select, #practiceForm textarea').forEach(el => el.disabled = true);

        showToast("Great effort! Answers revealed.", "success");
        document.querySelector('button[onclick="checkPracticeAnswers()"]').style.display = 'none';
        document.getElementById('retryBtn').style.display = 'inline-block';
    }

    function resetPractice() {
        document.getElementById('practiceForm').reset();
        document.querySelectorAll('.answer-reveal').forEach(el => el.style.display = 'none');
        document.querySelectorAll('.practice-item').forEach(item => {
            item.style.border = "none";
            item.style.borderBottom = "1px solid #eee";
        });
        document.querySelectorAll('.option-item label').forEach(el => {
            el.style.backgroundColor = '';
            el.style.border = '1px solid #ccc';
        });
        document.querySelectorAll('.correct-badge, .feedback-icon').forEach(el => el.style.display = 'none');
        document.querySelectorAll('input, select, textarea').forEach(el => {
            el.disabled = false;
            el.style.backgroundColor = '';
            el.style.borderColor = '';
            if(el.classList.contains('answer-input')) el.style.borderColor = '#ccc';
        });
        document.querySelector('button[onclick="checkPracticeAnswers()"]').style.display = 'inline-block';
        document.getElementById('retryBtn').style.display = 'none';
    }
</script>
</body>
</html>
