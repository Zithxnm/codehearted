<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 1 Review | CodeHearted</title>
    <meta name="description" content="Lesson 1 - Functions and Graphs">
    <link rel="stylesheet" href="{{asset('css/modules/diffcalc/mod1/review1.css')}}">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async
        src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>

<body>
    <main class="lesson-content">
        <div class="review-container">
            <h1>Lesson 1: Basic Functions and Graphs</h1>

            <section class="objectives">
                <h2>🎯 Learning Objectives</h2>
                <p>By the end of this lesson, students should be able to:</p>
                <ul>
                    <li>Define and identify functions.</li>
                    <li>Distinguish between domain and range.</li>
                    <li>Evaluate functions at specific values.</li>
                    <li>Recognize different types of functions and their graphs.</li>
                    <li>Apply transformations (shifts, stretches, reflections) to graphs.</li>
                </ul>
            </section>

            <section class="core-lesson">
                <h2>📘 Learning Materials & Core Lesson</h2>

                <h3>1. What is a Function?</h3>
                <p>
                    In mathematics, a <strong>function</strong> is a special type of relation that assigns to each input
                    value exactly one output value. Formally, a function \( f \) is a relation from a non-empty set
                    \( A \) (domain) to a non-empty set \( B \) (codomain) such that no two distinct ordered pairs
                    have the same first element.
                </p>

                <p style="margin-top: 1rem;">
                    In simpler terms, a function is a rule that assigns to each input \( x \) exactly one output \( y \).
                </p>
                <ul>
                    <li><strong>Notation:</strong> \( f(x) = y \)</li>
                    <li><strong>Example:</strong> \( f(x) = 2x + 3 \)</li>
                </ul>

                <h3>2. Domain and Range</h3>
                <p>
                    <strong>Domain:</strong> all possible input values (x-values). <br>
                    <strong>Range:</strong> all possible output values (y-values).
                </p>
                <p>Example: \( f(x) = \sqrt{x} \) → Domain: \( x \ge 0 \), Range: \( y \ge 0 \).</p>

                <h3>3. Common Types of Functions and Graphs</h3>
                <ul>
                    <li><strong>Linear:</strong> \( f(x) = mx + b \) → straight line</li>
                    <li><strong>Quadratic:</strong> \( f(x) = ax^2 + bx + c \) → parabola</li>
                    <li><strong>Cubic:</strong> \( f(x) = x^3 \) → S-shaped curve</li>
                    <li><strong>Square Root:</strong> \( f(x) = \sqrt{x} \)</li>
                    <li><strong>Reciprocal:</strong> \( f(x) = \frac{1}{x} \)</li>
                    <li><strong>Absolute Value:</strong> \( f(x) = |x| \)</li>
                </ul>

                <h3>4. Graph Transformations</h3>
                <ul>
                    <li>Vertical shift: \( f(x) + k \) → move up/down</li>
                    <li>Horizontal shift: \( f(x - h) \) → move left/right</li>
                    <li>Reflection:
                        <ul>
                            <li>Over x-axis: \( -f(x) \)</li>
                            <li>Over y-axis: \( f(-x) \)</li>
                        </ul>
                    </li>
                    <li>Stretch/Compression:
                        <ul>
                            <li>Vertical: \( a \cdot f(x) \)</li>
                            <li>Horizontal: \( f(bx) \)</li>
                        </ul>
                    </li>
                </ul>

                <h3>Example: Linear Functions and Slope</h3>
                <p>
                    Linear functions have the form \( f(x) = ax + b \), where \( a \) and \( b \) are constants.
                    <br><br>
                    - If \( a > 0 \), the graph of the line rises as \( x \) increases — \( f(x) = ax + b \)
                    is increasing on \( (-\infty, \infty) \). <br>
                    - If \( a < 0 \), the graph falls as \( x \) increases — the function is decreasing. <br>
                    - If \( a = 0 \), the line is horizontal.
                </p>

                <div class="image-center">
                    <img src="../../imgs/module1.png" alt="Graph example image">
                </div>
            </section>

            <section class="references">
                <h2>📚 References</h2>
                <ul>
                    <li>Khan Academy. (n.d.). <em>Functions and Graphs.</em>
                        <a href="https://www.khanacademy.org/math/algebra" target="_blank">
                            https://www.khanacademy.org/math/algebra</a>
                    </li>
                    <li>Paul’s Online Notes. (n.d.). <em>Graphing Functions.</em>
                        <a href="http://tutorial.math.lamar.edu" target="_blank">
                            http://tutorial.math.lamar.edu</a>
                    </li>
                    <li>Desmos Graphing Calculator. (n.d.).
                        <a href="https://www.desmos.com/calculator" target="_blank">
                            https://www.desmos.com/calculator</a>
                    </li>
                    <li>Byju’s. (n.d.). <em>Functions and Their Graphs.</em>
                        <a href="https://byjus.com" target="_blank">
                            https://byjus.com</a>
                    </li>
                </ul>
            </section>

            <div class="lesson-nav">
                <a href="practice.blade.php?module=1" class="action-button">Go to Practice</a>
                <a href="quiz.blade.php?module=1" class="action-button">Take Quiz</a>
            </div>
        </div>
    </main>
</body>

</html>
