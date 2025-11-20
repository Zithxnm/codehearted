<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 3 Review | CodeHearted</title>
    <meta name="description" content="Lesson 3 - Limits & Continuity">
    @vite('resources/css/modules/diffcalc/mod3/review3.css')
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async
        src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>

<body>
    <main class="lesson-content">
        <div class="review-container">
            <h1>Lesson 3: Limits and Continuity</h1>

            <section class="objectives">
                <h2>🎯 Learning Objectives</h2>
                <p>By the end of this lesson, you should be able to:</p>
                <ul>
                    <li>Understand the concept of a limit.</li>
                    <li>Evaluate limits algebraically and graphically.</li>
                    <li>Identify points of continuity and discontinuity of a function.</li>
                </ul>
            </section>

            <section class="core-lesson">
                <h2>📘 Learning Materials & Core Lesson</h2>

                <h3>1. Definition of a Limit</h3>
                <p>
                    The concept of a Limit is fundamental to the study of calculus. In simple terms,
                    the limit of a function at a particular point refers to the value that the function approaches as the input
                    (or variable) approaches a specific value. It allows us to analyze how functions behave as they get close to
                    a certain point, even if they never actually reach that point.
                </p>
                <p>
                    Continuity, on the other hand, is a property of a function that ensures it behaves in a predictable manner.
                    A function is continuous if, roughly speaking, you can sketch its graph without lifting your pen.
                    More formally, a function is considered continuous at a point if the limit of the function exists as it
                    approaches that point is equal to the function’s value at that point.
                </p>
                <p>
                    If \( f(x) \) becomes arbitrarily close to \( L \) as \( x \) approaches \( a \), we write:
                </p>
                <p>$$ \lim_{x \to a} f(x) = L $$</p>

                <h3>2. Basic Limit Laws</h3>
                <ul>
                    <li><strong>Constant Rule:</strong>
                        <div class="code-snippet">\( \lim_{x \to a} c = c \)</div>
                    </li>

                    <li><strong>Identity Rule:</strong>
                        <div class="code-snippet">\( \lim_{x \to a} x = a \)</div>
                    </li>

                    <li><strong>Power Rule:</strong>
                        <div class="code-snippet">\( \lim_{x \to a} x^n = a^n \)</div>
                    </li>

                    <li><strong>Sum/Difference Rule:</strong>
                        <div class="code-snippet">\( \lim_{x \to a} [f(x) \pm g(x)] = \lim_{x \to a} f(x) \pm \lim_{x \to a} g(x) \)</div>
                    </li>

                    <li><strong>Product Rule:</strong>
                        <div class="code-snippet">\( \lim_{x \to a} [f(x)g(x)] = (\lim_{x \to a} f(x))(\lim_{x \to a} g(x)) \)</div>
                    </li>

                    <li><strong>Quotient Rule:</strong>
                        <div class="code-snippet">\( \lim_{x \to a} \frac{f(x)}{g(x)} = \frac{\lim_{x \to a} f(x)}{\lim_{x \to a} g(x)}, \ g(a) \neq 0 \)</div>
                    </li>
                </ul>

                <h3>3. Special Limits</h3>
                    <div class="code-snippet">\( \lim_{x \to 0} \frac{\sin x}{x} = 1 \)</div>
                    <div class="code-snippet">\( \lim_{x \to \infty} \frac{1}{x} = 0 \)</div>
                    <div class="code-snippet">\( \lim_{x \to \infty} (1 + \frac{1}{x})^x = e \)</div>


                <h3>4. Continuity</h3>
                <p>
                    A function \( f(x) \) is continuous at \( x = a \) if:
                </p>
                <ul>
                    <li>
                        \( f(a) \) is defined,
                    </li>
                    <li>
                        \( \lim_{x \to a} f(x) \) exists,
                    </li>
                    <li>
                        \( \lim_{x \to a} f(x) = f(a) \).
                    </li>
                </ul>

                <p>If any of these conditions fail, the function is <strong>discontinuous</strong> at \( a \).</p>
            </section>

            <section class="references">
                <h2>📚 References</h2>
                <ul>
                    <li>Khan Academy. (n.d.). <em>Limits and Continuity.</em> <a href="https://www.khanacademy.org/math/calculus-1/cs1-limits" target="_blank">https://www.khanacademy.org/math/calculus-1/cs1-limits</a></li>
                    <li>Paul’s Online Notes. (n.d.). <em>Limits.</em> <a href="http://tutorial.math.lamar.edu" target="_blank">http://tutorial.math.lamar.edu</a></li>
                    <li>MIT OpenCourseWare. (n.d.). <em>Single Variable Calculus.</em> <a href="https://ocw.mit.edu" target="_blank">https://ocw.mit.edu</a></li>
                    <li>Allen, G. (n.d.). <em>Limits and Continuity.</em> <a href="https://allen.in/jee/maths/limits-and-continuity" target="_blank">https://allen.in/jee/maths/limits-and-continuity</a></li>
                </ul>
            </section>

            <div class="lesson-nav">
                <a href="practice.php?module=2" class="action-button">Go to Practice</a>
                <a href="quiz.php?module=2" class="action-button" style="margin-left:8px;">Take Quiz</a>
            </div>
        </div>
    </main>
</body>
</html>
