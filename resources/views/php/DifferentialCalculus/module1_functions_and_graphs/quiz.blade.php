<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 1 Quiz | CodeHearted</title>
    <meta name="description" content="Lesson 1">
    @vite('resources/css/modules/diffcalc/mod1/quiz1.css')
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async
        src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>

<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 1: Quiz</h1>

            <div class="lesson-section">
                <p class="question">1. Which of the following is a function?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q1" value="a"> Circle: \( x^2 + y^2 = 1 \)</label></li>
                    <li><label><input type="radio" name="q1" value="b"> Line: \( y = 2x + 1 \)</label></li>
                    <li><label><input type="radio" name="q1" value="c"> Relation: \( (1,2), \; (1,3)(1,2), \; (1,3)(1,2), \; (1,3) \)</label></li>
                    <li><label><input type="radio" name="q1" value="d"> Both a and c</label></li>
                </ul>
            </div>

            <div class="lesson-section">
                <p class="question">2. The domain of \( f(x)=1x−4, \; f(x) = \frac{1}{x-4}, \; f(x)=x−41 \) is:</p>
                <ul class="options">
                    <li><label><input type="radio" name="q2" value="a"> All real numbers</label></li>
                    <li><label><input type="radio" name="q2" value="b"> All real numbers except \( x=4 \; | \; x=4 \; | \; x=4 \)</label></li>
                    <li><label><input type="radio" name="q2" value="c"> All positive numbers</label></li>
                    <li><label><input type="radio" name="q2" value="d"> \( (x>4x) > (4x>4) \)</label></li>
                </ul>
            </div>

            <div class="lesson-section">
                <p class="question">3. The range of \( f(x) = |x| \) is:</p>
                <ul class="options">
                    <li><label><input type="radio" name="q3" value="a"> All real numbers</label></li>
                    <li><label><input type="radio" name="q3" value="b"> \( y≥0y \geq 0y≥0 \)</label></li>
                    <li><label><input type="radio" name="q3" value="c"> \( y>0y > 0y>0 \)</label></li>
                    <li><label><input type="radio" name="q3" value="d"> \( y<0y < 0y<0 \)</label></li>
                </ul>
            </div>

            <div class="lesson-section">
                <p class="question">4. The graph of \( f(x) = (x+2)^2 - 3 \) is a parabola:</p>
                <ul class="options">
                    <li><label><input type="radio" name="q4" value="a"> Shifted 2 units left, 3 units up</label></li>
                    <li><label><input type="radio" name="q4" value="b"> Shifted 2 units right, 3 units down</label></li>
                    <li><label><input type="radio" name="q4" value="c"> Shifted 2 units left, 3 units down</label></li>
                    <li><label><input type="radio" name="q4" value="d"> Shifted 2 units right, 3 units up</label></li>
                </ul>
            </div>

            <button class="submit-btn" id="submitQuiz">Submit Answers</button>
        </section>
    </main>

    <script>
        document.getElementById('submitQuiz').addEventListener('click', function() {
            const total = 4;
            let answered = 0;

            for (let i = 1; i <= total; i++) {
                if (document.querySelector('input[name="q' + i + '"]:checked')) {
                    answered++;
                }
            }

            if (answered < total) {
                alert('Please answer all questions before submitting!');
                return;
            }

            alert('Answers submitted! (Backend na bahala ditu)');
        });
    </script>

</body>
</html>
