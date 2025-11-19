<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 3 Quiz | CodeHearted</title>
    <meta name="description" content="Lesson 3 - Limits & Continuity">
    @vite('resources/css/modules/diffcalc/mode/quiz3.css')
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async
        src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>

<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 3: Quiz</h1>

            <div class="lesson-section">
                <p class="question">1. \(\lim_{x \to 2} (x^2 + 3x) = \; ?\)</p>
                <ul class="options">
                    <li><label><input type="radio" name="q1"> 10</label></li>
                    <li><label><input type="radio" name="q1"> 7</label></li>
                    <li><label><input type="radio" name="q1"> 14</label></li>
                    <li><label><input type="radio" name="q1"> Undefined</label></li>
                </ul>
            </div>

            <div class="lesson-section">
                <p class="question">2. A function is continuous at \(x = a\) if:</p>
                <ul class="options">
                    <li><label><input type="radio" name="q2"> \(\lim_{x \to a} f(x)\) exists</label></li>
                    <li><label><input type="radio" name="q2"> \(f(a)\) exists</label></li>
                    <li><label><input type="radio" name="q2"> \(\lim_{x \to a} f(x) = f(a)\)</label></li>
                    <li><label><input type="radio" name="q2"> All of the above</label></li>
                </ul>
            </div>

            <div class="lesson-section">
                <p class="question">3. \(\lim_{x \to \infty} \frac{2x^2 + 1}{x^2 + 3} = \; ?\)</p>
                <ul class="options">
                    <li><label><input type="radio" name="q3"> 0</label></li>
                    <li><label><input type="radio" name="q3"> 1</label></li>
                    <li><label><input type="radio" name="q3"> 2</label></li>
                    <li><label><input type="radio" name="q3"> Infinity</label></li>
                </ul>
            </div>

            <div class="lesson-section">
                <p class="question">4. If \(\lim_{x \to 0} \frac{\sin x}{x} = 1\), then \(\lim_{x \to 0} \frac{\sin(3x)}{x} = \; ?\)</p>
                <ul class="options">
                    <li><label><input type="radio" name="q4"> 1</label></li>
                    <li><label><input type="radio" name="q4"> 0</label></li>
                    <li><label><input type="radio" name="q4"> 3</label></li>
                    <li><label><input type="radio" name="q4"> Undefined</label></li>
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
