<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 4 Review | CodeHearted</title>
    <meta name="description" content="Lesson 4 - Applications of Derivatives">
    @vite('resources/css/modules/diffcalc/mod4/review4.css')
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async
        src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js">
    </script>
</head>

<body>
    <main class="lesson-content">
        <div class="review-container">
            <h1>Lesson 4: Applications of Derivatives</h1>

            <section class="objectives">
                <h2>🎯 Learning Objectives</h2>
                <p>By the end of this lesson, you should be able to:</p>
                <ul>
                    <li>Apply derivatives to analyze the behavior of functions.</li>
                    <li>Identify increasing/decreasing intervals and local extrema.</li>
                    <li>Solve optimization problems using derivatives.</li>
                    <li>Use derivatives to study motion (velocity, acceleration).</li>
                    <li>Interpret real-life problems involving rates of change.</li>
                </ul>
            </section>

            <section class="core-lesson">
                <h2>📘 Learning Materials & Core Lesson</h2>

                <h3>1. Increasing and Decreasing Functions</h3>
                <p>
                    A function is <strong>increasing</strong> if \( f'(x) > 0 \), and
                    <strong>decreasing</strong> if \( f'(x) < 0 \).
                </p>

                <h3>2. Maxima and Minima (Critical Points)</h3>
                <p>Critical points occur when \( f'(x) = 0 \) or when \( f'(x) \) is undefined.</p>
                <p><strong>First Derivative Test:</strong></p>
                <ul>
                    <li>If \( f'(x) \) changes from positive to negative → local maximum.</li>
                    <li>If \( f'(x) \) changes from negative to positive → local minimum.</li>
                </ul>

                <h3>3. Concavity and Inflection Points</h3>
                <ul>
                    <li>If \( f''(x) > 0 \), the function is concave up (cup-shaped).</li>
                    <li>If \( f''(x) < 0 \), the function is concave down (cap-shaped).</li>
                    <li><strong>Inflection point:</strong> where concavity changes.</li>
                </ul>

                <h3>4. Optimization Problems</h3>
                <p><strong>Steps:</strong></p>
                <ol>
                    <li>Identify the quantity to optimize.</li>
                    <li>Write an equation relating the variables.</li>
                    <li>Differentiate the equation.</li>
                    <li>Solve for critical points.</li>
                    <li>Test and interpret the solution.</li>
                </ol>

                <h3>5. Motion Problems</h3>
                <ul>
                    <li>Position: \( s(t) \)</li>
                    <li>Velocity: \( v(t) = s'(t) \)</li>
                    <li>Acceleration: \( a(t) = v'(t) = s''(t) \)</li>
                </ul>
                <p>Velocity describes the rate of change of position; acceleration describes the rate of change of velocity.</p>
            </section>

            <section class="references">
                <h2>📚 References</h2>
                <ul>
                    <li>Khan Academy. (n.d.). <em>Applications of Derivatives.</em> <a href="https://www.khanacademy.org/math/calculus-1" target="_blank">https://www.khanacademy.org/math/calculus-1</a></li>
                    <li>Paul’s Online Notes. (n.d.). <em>Applications of Derivatives.</em> <a href="http://tutorial.math.lamar.edu" target="_blank">http://tutorial.math.lamar.edu</a></li>
                    <li>MIT OpenCourseWare. (n.d.). <em>Single Variable Calculus.</em></li>
                </ul>
            </section>

            <div class="lesson-nav">
                <a href="practice.php?module=4" class="action-button">Go to Practice</a>
                <a href="quiz.php?module=4" class="action-button" style="margin-left:8px;">Take Quiz</a>
            </div>
        </div>
    </main>
</body>
</html>
