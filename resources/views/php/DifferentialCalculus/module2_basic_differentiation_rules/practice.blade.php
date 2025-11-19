<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 2 Practice | CodeHearted</title>
    <meta name="description" content="Lesson 2 - Basic Differentiation Rules">
    @vite('resources/css/modules/diffcalc/mod2/practice2.css')
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async
        src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>

<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 2: Practice Problems</h1>

            <div class="lesson-section">
                <h2 class="section-heading">I. Apply Power Rule</h2>
                <p class="instruction">Differentiate the following functions:</p>

                <p>1. \( f(x) = x^4 \)</p>
                <input type="text" class="answer-input wide" placeholder="f'(x) = ">

                <p>2. \( g(x) = 5x^3 \)</p>
                <input type="text" class="answer-input wide" placeholder="g'(x) = ">

                <p>3. \( h(x) = 7x^2 + 4x - 6 \)</p>
                <input type="text" class="answer-input wide" placeholder="h'(x) = ">
            </div>

            <div class="lesson-section">
                <h2 class="section-heading">II. Trigonometric Derivatives</h2>
                <p class="instruction">Differentiate the following trigonometric functions:</p>

                <p>1. \( y = \sin x + \cos x \)</p>
                <input type="text" class="answer-input wide" placeholder="y' = ">

                <p>2. \( y = \tan x - \sec x \)</p>
                <input type="text" class="answer-input wide" placeholder="y' = ">
            </div>

            <div class="lesson-section">
                <h2 class="section-heading">III. Mixed Functions</h2>
                <p class="instruction">Differentiate the following:</p>

                <p>1. \( f(x) = e^x + x^5 \)</p>
                <input type="text" class="answer-input wide" placeholder="f'(x) = ">

                <p>2. \( g(x) = \ln(x) + 3x^2 \)</p>
                <input type="text" class="answer-input wide" placeholder="g'(x) = ">
            </div>

            <button class="submit-btn">Submit Answers</button>
        </section>
    </main>

</body>
</html>
