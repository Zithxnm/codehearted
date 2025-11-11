<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 4 Quiz | CodeHearted</title>
    <meta name="description" content="Lesson 4 Quiz - Conditionals, Logical Operators, and Control Flow">
    <link rel="stylesheet" href="{{asset('css/modules/progfund/mod4/quiz4.css')}}?v={{ time(); }}">
</head>

<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 4: Quiz</h1>

            <!-- Question 1 -->
            <div class="lesson-section">
                <p class="question">1. What is control flow?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q1"> The speed of program execution</label></li>
                    <li><label><input type="radio" name="q1"> The order in which program instructions are executed</label></li>
                    <li><label><input type="radio" name="q1"> The amount of data flowing through a program</label></li>
                    <li><label><input type="radio" name="q1"> The network connection speed</label></li>
                </ul>
            </div>

            <!-- Question 2 -->
            <div class="lesson-section">
                <p class="question">2. What does the <code>==</code> operator do?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q2"> Assigns a value to a variable</label></li>
                    <li><label><input type="radio" name="q2"> Checks if two values are equal</label></li>
                    <li><label><input type="radio" name="q2"> Adds two numbers</label></li>
                    <li><label><input type="radio" name="q2"> Compares which value is larger</label></li>
                </ul>
            </div>

            <!-- Question 3 -->
            <div class="lesson-section">
                <p class="question">3. What will this expression evaluate to: <code>True and False</code>?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q3"> True</label></li>
                    <li><label><input type="radio" name="q3"> False</label></li>
                    <li><label><input type="radio" name="q3"> Error</label></li>
                    <li><label><input type="radio" name="q3"> 1</label></li>
                </ul>
            </div>

            <!-- Question 4 -->
            <div class="lesson-section">
                <p class="question">4. How many spaces should you use for indentation in Python?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q4"> 2</label></li>
                    <li><label><input type="radio" name="q4"> 3</label></li>
                    <li><label><input type="radio" name="q4"> 4</label></li>
                    <li><label><input type="radio" name="q4"> 8</label></li>
                </ul>
            </div>

            <!-- Question 5 -->
            <div class="lesson-section">
                <p class="question">5. What is the difference between <code>if</code> and <code>elif</code>?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q5"> There is no difference</label></li>
                    <li><label><input type="radio" name="q5"> <code>elif</code> is used for the first condition, <code>if</code> for additional ones</label></li>
                    <li><label><input type="radio" name="q5"> <code>if</code> is used for the first condition, <code>elif</code> for additional ones</label></li>
                    <li><label><input type="radio" name="q5"> <code>elif</code> is only used with loops</label></li>
                </ul>
            </div>

            <!-- Question 6 -->
            <div class="lesson-section">
                <p class="question">6. What happens in short-circuit evaluation with <code>False and something</code>?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q6"> Both conditions are always checked</label></li>
                    <li><label><input type="radio" name="q6"> The evaluation stops at False without checking the second condition</label></li>
                    <li><label><input type="radio" name="q6"> An error occurs</label></li>
                    <li><label><input type="radio" name="q6"> The result is always True</label></li>
                </ul>
            </div>

            <!-- Question 7 -->
            <div class="lesson-section">
                <p class="question">7. Which values are “falsy” in Python?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q7"> Only False</label></li>
                    <li><label><input type="radio" name="q7"> False, 0, empty string</label></li>
                    <li><label><input type="radio" name="q7"> Only 0</label></li>
                    <li><label><input type="radio" name="q7"> Only empty string</label></li>
                </ul>
            </div>

            <button class="submit-btn">Submit Answers</button>
        </section>
    </main>

    <script>
        document.querySelector('.submit-btn').addEventListener('click', () => {
            const totalQuestions = 7;
            let answered = 0;
            for (let i = 1; i <= totalQuestions; i++) {
                if (document.querySelector(`input[name="q${i}"]:checked`)) {
                    answered++;
                }
            }
            if (answered < totalQuestions) {
                alert("Please answer all questions before submitting!");
            } else {
                alert("Answers submitted! (Backend na bahala ditu 😄)");
            }
        });
    </script>

</body>
</html>
