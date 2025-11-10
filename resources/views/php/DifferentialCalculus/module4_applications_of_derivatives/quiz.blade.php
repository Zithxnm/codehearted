<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 4 Quiz | CodeHearted</title>
    <meta name="description" content="Lesson 4 - Applications of Derivatives">
    <link rel="stylesheet" href="quiz4.css?v=<?php echo time(); ?>">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async
        src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>

<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 4: Quiz</h1>

            <div class="lesson-section">
                <p class="question">1. If \( f(x) = x^3 - 3x \), find the critical points.</p>
                <ul class="options">
                    <li><label><input type="radio" name="q1"> \( x = 0, \pm \sqrt{3} \)</label></li>
                    <li><label><input type="radio" name="q1"> \( x = 0, \pm 1 \)</label></li>
                    <li><label><input type="radio" name="q1"> \( x = \pm 1 \)</label></li>
                    <li><label><input type="radio" name="q1"> \( x = 0 \)</label></li>
                </ul>
            </div>

            <div class="lesson-section">
                <p class="question">2. If \( f''(x) > 0 \), then the graph is:</p>
                <ul class="options">
                    <li><label><input type="radio" name="q2"> Increasing</label></li>
                    <li><label><input type="radio" name="q2"> Decreasing</label></li>
                    <li><label><input type="radio" name="q2"> Concave up</label></li>
                    <li><label><input type="radio" name="q2"> Concave down</label></li>
                </ul>
            </div>

            <div class="lesson-section">
                <p class="question">3. A ball’s position is \( s(t) = 5t^2 \). Its velocity is:</p>
                <ul class="options">
                    <li><label><input type="radio" name="q3"> \( 10t \)</label></li>
                    <li><label><input type="radio" name="q3"> \( 5t \)</label></li>
                    <li><label><input type="radio" name="q3"> \( 2t \)</label></li>
                    <li><label><input type="radio" name="q3"> \( t^2 \)</label></li>
                </ul>
            </div>

            <div class="lesson-section">
                <p class="question">4. The maximum of \( f(x) = -x^2 + 6x - 5 \) occurs at:</p>
                <ul class="options">
                    <li><label><input type="radio" name="q4"> \( x = 0 \)</label></li>
                    <li><label><input type="radio" name="q4"> \( x = 2 \)</label></li>
                    <li><label><input type="radio" name="q4"> \( x = 3 \)</label></li>
                    <li><label><input type="radio" name="q4"> \( x = 5 \)</label></li>
                </ul>
            </div>

            <button class="submit-btn">Submit Answers</button>
        </section>
    </main>

    <script>
        document.querySelector('.submit-btn').addEventListener('click', () => {
            const totalQuestions = 4;
            let answered = 0;
            for (let i = 1; i <= totalQuestions; i++) {
                if (document.querySelector(`input[name="q${i}"]:checked`)) {
                    answered++;
                }
            }
            if (answered < totalQuestions) {
                alert("Please answer all questions before submitting!");
            } else {
                alert("Answers submitted! (Backend na bahala ditu)");
            }
        });
    </script>
</body>
</html>
