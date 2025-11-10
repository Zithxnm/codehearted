<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 2 Review | CodeHearted</title>
    <meta name="description" content="Lesson 2">
    <link rel="stylesheet" href="review2.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async
        src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>

<body>
    <main class="lesson-content">
        <div class="review-container">
            <h1>Lesson 2: Basic Differentiation Rules</h1>

            <section class="objectives">
                <h2>🎯 Learning Objectives</h2>
                <p>By the end of this lesson, you should be able to:</p>
                <ul>
                    <li>Understand the concept of a derivative.</li>
                    <li>Apply the basic rules of differentiation.</li>
                    <li>Differentiate simple algebraic, trigonometric, exponential, and logarithmic functions.</li>
                </ul>
            </section>

            <section class="core-lesson">
                <h2>📘 Learning Materials & Core Lesson</h2>

                <h3>1. What Are Differentiation Rules?</h3>
                <p>
                    The concept of <strong>differentiation rules</strong> plays a key role in mathematics and is widely applicable to both real-life situations and exam scenarios.
                    Whether you are preparing for board exams, JEE, NEET, or Olympiads, understanding these rules helps you solve calculus and derivative-related
                    questions quickly and accurately.
                </p>
                <p>

                    A <strong>differentiation rule</strong> is a formula that tells us how to find the derivatives (or rates of change) of different types of functions.
                    You’ll find this concept applied in areas such as velocity calculation, graph slopes, and mathematical modeling.
                    Mastering differentiation rules is essential as it helps in solving various mathematical, scientific, and engineering problems efficiently.
                </p>

                <h3>2. Definition of a Derivative</h3>
                <p>
                    The derivative of a function \( f(x)f(x)f(x) \) is defined as:
                </p>

                <div class="code-snippet">
                    \( f′(x)=limh→0f(x+h)−f(x)hf'(x) = \lim_{h \to 0} \frac{f(x+h) - f(x)}{h}f′(x)=h→0limhf(x+h)−f(x) \)
                </div>

                <p>
                    It represents the <strong>instantaneous rate of change</strong> or the <strong>slope of the tangent line</strong> at a point.
                </p>

                <h3>4. Basic Differentiation Rules</h3>
                <ul>
                    <li><strong>Constant Rule:</strong> <br><br>
                        <div class="code-snippet">\( ddx[c]=0\frac{d}{dx}[c] = 0dxd[c]=0 \)
                        </div>
                        — the derivative of a constant is zero.
                    </li>

                    <li><strong>Power Rule:</strong> <br><br>
                        <div class="code-snippet">\( ddx[xn]=nxn−1,n∈R\frac{d}{dx}[x^n] = n x^{n-1}, \quad n \in \mathbb{R}dxd[xn]=nxn−1,n∈R = n xⁿ⁻¹ \).
                        </div>
                    </li>

                    <li><strong>Constant Multiple Rule:</strong> <br><br>
                        <div class="code-snippet">\( ddx[c⋅f(x)]=c⋅f′(x)\frac{d}{dx}[c \cdot f(x)] = c \cdot f'(x)dxd[c⋅f(x)]=c⋅f′(x) \).
                        </div>
                    </li>

                    <li><strong>Sum Rule:</strong> <br><br>
                        <div class="code-snippet">\( ddx[f(x)+g(x)]=f′(x)+g′(x)\frac{d}{dx}[f(x) + g(x)] = f'(x) + g'(x)dxd[f(x)+g(x)]=f′(x)+g′(x) \).
                        </div>
                    </li>

                    <li><strong>Difference Rule:</strong> <br><br>
                        <div class="code-snippet">\( ddx[f(x)−g(x)]=f′(x)−g′(x)\frac{d}{dx}[f(x) - g(x)] = f'(x) - g'(x)dxd[f(x)−g(x)]=f′(x)−g′(x) \).
                        </div>
                    </li>
                </ul>

                <section class="references">
                    <h2>📚 References</h2>
                    <ul>
                        <li>Khan Academy. (n.d.). <em>Basic Differentiation Rules.</em> <a href="https://www.khanacademy.org/math/calculus-1" target="_blank">https://www.khanacademy.org/math/calculus-1</a></li>
                        <li>Paul’s Online Notes. (n.d.). <em>Derivative Rules.</em> <a href="http://tutorial.math.lamar.edu" target="_blank">http://tutorial.math.lamar.edu</a></li>
                        <li>MIT OpenCourseWare. (n.d.). <em>Single Variable Calculus.</em> <a href="https://ocw.mit.edu" target="_blank">https://ocw.mit.edu</a></li>
                        <li>Vedantu. (n.d.). <em>Differentiation Rules.</em> <a href="https://www.vedantu.com" target="_blank">https://www.vedantu.com</a></li>
                    </ul>
                </section>

                <div class="lesson-nav">
                    <a href="practice.blade.php?module=2" class="action-button">Go to Practice</a>
                    <a href="quiz.blade.php?module=2" class="action-button" style="margin-left:8px;">Take Quiz</a>
                </div>
        </div>
    </main>
</body>

</html>
