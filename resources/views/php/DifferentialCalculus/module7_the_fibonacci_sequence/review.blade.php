<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 7 Review | CodeHearted</title>
    <meta name="description" content="Lesson 7 - The Fibonacci Sequence">
    <link rel="stylesheet" href="review7.css?v=<?php echo time(); ?>">

    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async 
        src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js">
    </script>
</head>

<body>
    <main class="lesson-content">
        <div class="review-container">
            <h1>Lesson 7: The Fibonacci Sequence</h1>

            <section class="objectives">
                <h2>🎯 Learning Objectives</h2>
                <p>By the end of this lesson, students should be able to:</p>
                <ul>
                    <li>Define the Fibonacci sequence.</li>
                    <li>Generate terms of the sequence using its recursive formula.</li>
                    <li>Explore patterns found in Fibonacci numbers.</li>
                    <li>Connect the Fibonacci sequence to the Golden Ratio and real-life examples.</li>
                </ul>
            </section>

            <section class="core-lesson">
                <h2>📘 Learning Materials & Core Lesson</h2>

                <h3>1. Definition</h3>
                <p>
                    The Fibonacci Sequence is a series of numbers where each term is obtained by adding its two preceding terms.
                    It starts with <strong>0</strong> and <strong>1</strong>.
                </p>
                <div class="code-snippet">
                    \(\displaystyle F_0 = 0, \; F_1 = 1, \; F_n = F_{n-1} + F_{n-2} \; (n \geq 2)\)
                </div>
                <p><strong>Sequence:</strong> 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, …</p>

                <h3>2. Properties and Patterns</h3>
                <ul>
                    <li>Each term is the sum of the two before it.</li>
                    <li>The ratio of consecutive terms approaches the <strong>Golden Ratio</strong> (\(\phi \approx 1.618\)).</li>
                    <li>Fibonacci numbers appear in nature in flower petals, spiral shells, pinecones, and sunflower seeds.</li>
                </ul>

                <h3>3. Formula for the n<sup>th</sup> Term (Binet’s Formula)</h3>
                <div class="code-snippet">
                    \(\displaystyle F_n = \frac{1}{\sqrt{5}} \left( \left(\frac{1+\sqrt{5}}{2}\right)^n - \left(\frac{1-\sqrt{5}}{2}\right)^n \right)\)
                </div>

                <h3>4. Applications</h3>
                <ul>
                    <li><strong>Nature:</strong> spirals in shells, flower arrangements, and branching patterns in trees.</li>
                    <li><strong>Computer Algorithms:</strong> used in sorting, searching, and recursive programming problems.</li>
                    <li><strong>Art and Architecture:</strong> connected to the Golden Ratio, used for aesthetic balance.</li>
                    <li><strong>Finance:</strong> applied in modeling growth and stock market patterns.</li>
                </ul>
            </section>

            <section class="references">
                <h2>📚 References</h2>
                <ul>
                    <li>Livio, M. (2002). <em>The Golden Ratio: The Story of Phi.</em> Broadway Books.</li>
                    <li>Math is Fun. (n.d.). <em>Fibonacci Sequence.</em> <a href="https://www.mathsisfun.com/numbers/fibonacci-sequence.html" target="_blank">https://www.mathsisfun.com/numbers/fibonacci-sequence.html</a></li>
                    <li>Nature of Code. (n.d.). <em>Fibonacci Spirals.</em> <a href="https://natureofcode.com/book/chapter-8-fractals/" target="_blank">https://natureofcode.com/book/chapter-8-fractals/</a></li>
                    <li>Math Monks. (n.d.). <em>Fibonacci Sequence.</em> <a href="https://mathmonks.com/fibonacci-sequence#Formula" target="_blank">https://mathmonks.com/fibonacci-sequence#Formula</a></li>
                </ul>
            </section>

            <div class="lesson-nav">
                <a href="practice.php?module=7" class="action-button">Go to Practice</a>
                <a href="quiz.php?module=7" class="action-button" style="margin-left:8px;">Take Quiz</a>
            </div>
        </div>
    </main>
</body>
</html>
