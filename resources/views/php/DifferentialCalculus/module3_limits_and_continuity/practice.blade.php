<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 3 Practice | CodeHearted</title>
    <meta name="description" content="Lesson 3 - Limits & Continuity">
    <link rel="stylesheet" href="{{asset('css/modules/diffcalc/mod3/practice3.css')}}?v={{ time(); }}">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async
        src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>

<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 3: Practice Problems</h1>

            <div class="lesson-section">
                <h2 class="section-heading">I. Basic Limits</h2>
                <p class="instruction">Evaluate the following limits:</p>

                <p>1. \(\lim_{x \to 3} (2x + 5)\)</p>
                <input type="text" class="answer-input wide">

                <p>2. \(\lim_{x \to -2} (x^2 + 4x + 4)\)</p>
                <input type="text" class="answer-input wide">

                <p>3. \(\lim_{x \to \infty} \frac{5x}{x + 1}\)</p>
                <input type="text" class="answer-input wide">
            </div>

            <div class="lesson-section">
                <h2 class="section-heading">II. Special Limits</h2>
                <p class="instruction">Evaluate the following special limits:</p>

                <p>1. \(\lim_{x \to 0} \frac{\sin(2x)}{x}\)</p>
                <input type="text" class="answer-input wide">

                <p>2. \(\lim_{x \to \infty} \frac{3x^2 + 4}{x^2 + 1}\)</p>
                <input type="text" class="answer-input wide">
            </div>

            <div class="lesson-section">
                <h2 class="section-heading">III. Continuity Check</h2>
                <p class="instruction">Check if the following functions are continuous at the given point:</p>

                <p>1. \( f(x) = \frac{x^2 - 1}{x - 1}, \; x = 1 \)</p>
                <textarea class="answer-area"></textarea>

                <p>2. \( g(x) = \begin{cases} x^2, & x \neq 2 \\ 5, & x = 2 \end{cases} \)</p>
                <textarea class="answer-area"></textarea>
            </div>

            <button class="submit-btn">Submit Answers</button>
        </section>
    </main>
</body>
</html>
