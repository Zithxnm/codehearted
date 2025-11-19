<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 1 Practice | CodeHearted</title>
    <meta name="description" content="Lesson 1 - Functions and Graphs">
    @vite('resources/css/modules/diffcalc/mod1/practice1.css')
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async
        src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js">
    </script>
</head>

<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 1: Practice Problems</h1>

            <div class="lesson-section">
                <h2 class="section-heading">I. Function or Not?</h2>
                <p class="instruction">Decide whether the relation is a function.</p>

                <p>1. \( (1,2), \; (2,3), \; (3,4) \)</p>
                <input type="text" class="answer-input wide">

                <p>2. \( (1,2), \; (1,3), \; (2,4) \)</p>
                <input type="text" class="answer-input wide">
            </div>

            <div class="lesson-section">
                <h2 class="section-heading">II. Domain & Range</h2>
                <p class="instruction">Find the domain and range of the following functions.</p>

                <p>1. \( f(x) = \sqrt{x - 2} \)</p>
                <input type="text" class="answer-input wide" placeholder="Domain: ">
                <input type="text" class="answer-input wide" placeholder="Range: ">

                <p>2. \( f(x) = \frac{1}{x + 3} \)</p>
                <input type="text" class="answer-input wide" placeholder="Domain: ">
                <input type="text" class="answer-input wide" placeholder="Range: ">
            </div>

            <div class="lesson-section">
                <h2 class="section-heading">III. Graphing Practice</h2>
                <p class="instruction">Describe how the following graphs look</p>

                <p>1. \( f(x) = |x - 2| \)</p>
                <textarea class="answer-area"></textarea>

                <p>2. \( f(x) = (x - 1)^2 + 3 \)</p>
                <textarea class="answer-area"></textarea>
            </div>

            <div class="lesson-section">
                <h2 class="section-heading">IV. Transformations</h2>
                <p class="instruction">Describe how the graph of \( f(x) = x^2 \) changes to:</p>

                <p>1. \( g(x) = (x - 2)^2 \)</p>
                <textarea class="answer-area"></textarea>

                <p>2. \( h(x) = -x^2 \)</p>
                <textarea class="answer-area"></textarea>

                <p>3. \( p(x) = 3x^2 \)</p>
                <textarea class="answer-area"></textarea>
            </div>

            <button class="submit-btn">Submit Answers</button>
        </section>
    </main>
</body>

</html>
