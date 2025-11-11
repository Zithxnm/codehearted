<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 2 Quiz | CodeHearted</title>
    <meta name="description" content="Lesson 2 - Basic Differentiation Rules">
    <link rel="stylesheet" href="{{asset('css/modules/diffcalc/mod2/quiz2.css')}}?v={{ time(); }}">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async
        src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>

<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 2: Quiz</h1>

            <div class="lesson-section">
                <p class="question">1. If \( f(x) = 10 \), then \( f'(x) = \ ? \)</p>
                <ul class="options">
                    <li><label><input type="radio" name="q1" value="a"> \( 10 \)</label></li>
                    <li><label><input type="radio" name="q1" value="b"> \( 1 \)</label></li>
                    <li><label><input type="radio" name="q1" value="c"> \( 0 \)</label></li>
                    <li><label><input type="radio" name="q1" value="d"> Undefined</label></li>
                </ul>
            </div>

            <div class="lesson-section">
                <p class="question">2. If \( y = x^7 \), then \( y' = ? \)</p>
                <ul class="options">
                    <li><label><input type="radio" name="q2" value="a"> \( 7x^6 \)</label></li>
                    <li><label><input type="radio" name="q2" value="b"> \( x^6 \)</label></li>
                    <li><label><input type="radio" name="q2" value="c"> \( 6x^7 \)</label></li>
                    <li><label><input type="radio" name="q2" value="d"> \( 7x^7 \)</label></li>
                </ul>
            </div>

            <div class="lesson-section">
                <p class="question">3. If \( y = 3\sin x \), then \( y' = ? \)</p>
                <ul class="options">
                    <li><label><input type="radio" name="q3" value="a"> \( 3\cos x \)</label></li>
                    <li><label><input type="radio" name="q3" value="b"> \( -3\cos x \)</label></li>
                    <li><label><input type="radio" name="q3" value="c"> \( -3\sin x \)</label></li>
                    <li><label><input type="radio" name="q3" value="d"> \( 3\tan x \)</label></li>
                </ul>
            </div>

            <div class="lesson-section">
                <p class="question">4. If \( y = \ln(x) \), then \( y' = ? \)</p>
                <ul class="options">
                    <li><label><input type="radio" name="q4" value="a"> \( \frac{1}{x} \)</label></li>
                    <li><label><input type="radio" name="q4" value="b"> \( \ln(x - 1) \)</label></li>
                    <li><label><input type="radio" name="q4" value="c"> \( e^x \)</label></li>
                    <li><label><input type="radio" name="q4" value="d"> \( x\ln(x) \)</label></li>
                </ul>
            </div>

            <button class="submit-btn" id="submitQuiz">Submit Answers</button>
        </section>
    </main>

    <script>
        document.getElementById('submitQuiz').addEventListener('click', function() {
            const total = 4;
            let answered = 0;

            for (let i = 1; i <= total; i++) {
                if (document.querySelector('input[name="q' + i + '"]:checked')) {
                    answered++;
                }
            }

            if (answered < total) {
                alert('Please answer all questions before submitting!');
                return;
            }

            alert('Answers submitted! (Backend na bahala ditu)');
        });
    </script>

</body>
</html>
