<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 7 Quiz | CodeHearted</title>
    <meta name="description" content="Lesson 7 - The Fibonacci Sequence">
    @vite('resources/css/modules/diffcalc/mod7/quiz7.css')

    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async
        src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js">
    </script>
</head>

<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 7: Quiz</h1>

            <div class="lesson-section">
                <p class="question">1. The 8th Fibonacci number is?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q1"> 13</label></li>
                    <li><label><input type="radio" name="q1"> 21</label></li>
                    <li><label><input type="radio" name="q1"> 34</label></li>
                    <li><label><input type="radio" name="q1"> 55</label></li>
                </ul>
            </div>

            <div class="lesson-section">
                <p class="question">2. Which formula defines the Fibonacci sequence?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q2"> \(\displaystyle F_n = F_{n-1} \cdot F_{n-2}\)</label></li>
                    <li><label><input type="radio" name="q2"> \(\displaystyle F_n = F_{n-1} + F_{n-2}\)</label></li>
                    <li><label><input type="radio" name="q2"> \(\displaystyle F_n = 2F_{n-1}\)</label></li>
                    <li><label><input type="radio" name="q2"> \(\displaystyle F_n = n^2\)</label></li>
                </ul>
            </div>

            <div class="lesson-section">
                <p class="question">3. The ratio of consecutive Fibonacci numbers approaches:</p>
                <ul class="options">
                    <li><label><input type="radio" name="q3"> \(\pi \; (3.14)\)</label></li>
                    <li><label><input type="radio" name="q3"> Golden Ratio (\(\phi \approx 1.618\))</label></li>
                    <li><label><input type="radio" name="q3"> \(e \; (2.71)\)</label></li>
                    <li><label><input type="radio" name="q3"> \(\sqrt{2} \; (1.41)\)</label></li>
                </ul>
            </div>

            <div class="lesson-section">
                <p class="question">4. Which of the following is a Fibonacci number?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q4"> 20</label></li>
                    <li><label><input type="radio" name="q4"> 22</label></li>
                    <li><label><input type="radio" name="q4"> 21</label></li>
                    <li><label><input type="radio" name="q4"> 2</label></li>
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
