<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 5 Quiz | CodeHearted</title>
    <meta name="description" content="Lesson 5 Quiz - Iteration and Loops">
    <link rel="stylesheet" href="../module5_loops_and_iterations/quiz5.css?php echo time(); ?>">
</head>

<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 5: Quiz</h1>

            <!-- Question 1 -->
            <div class="lesson-section">
                <p class="question">1. What is iteration in programming?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q1"> A type of variable</label></li>
                    <li><label><input type="radio" name="q1"> The repetition of a process or instructions</label></li>
                    <li><label><input type="radio" name="q1"> A debugging technique</label></li>
                    <li><label><input type="radio" name="q1"> A way to store data</label></li>
                </ul>
            </div>

            <!-- Question 2 -->
            <div class="lesson-section">
                <p class="question">2. What does <code>range(3, 8)</code> generate?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q2"> 3, 4, 5, 6, 7, 8</label></li>
                    <li><label><input type="radio" name="q2"> 3, 4, 5, 6, 7</label></li>
                    <li><label><input type="radio" name="q2"> 4, 5, 6, 7, 8</label></li>
                    <li><label><input type="radio" name="q2"> 3, 8</label></li>
                </ul>
            </div>

            <!-- Question 3 -->
            <div class="lesson-section">
                <p class="question">3. What happens when you use <code>break</code> in a loop?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q3"> The loop starts over</label></li>
                    <li><label><input type="radio" name="q3"> The loop skips the current iteration</label></li>
                    <li><label><input type="radio" name="q3"> The loop exits immediately</label></li>
                    <li><label><input type="radio" name="q3"> The loop runs forever</label></li>
                </ul>
            </div>

            <!-- Question 4 -->
            <div class="lesson-section">
                <p class="question">4. What is an infinite loop?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q4"> A loop that runs very fast</label></li>
                    <li><label><input type="radio" name="q4"> A loop that never stops executing</label></li>
                    <li><label><input type="radio" name="q4"> A loop that runs exactly once</label></li>
                    <li><label><input type="radio" name="q4"> A loop that processes infinite data</label></li>
                </ul>
            </div>

            <!-- Question 5 -->
            <div class="lesson-section">
                <p class="question">5. In nested loops, which loop completes all its iterations first?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q5"> The outer loop</label></li>
                    <li><label><input type="radio" name="q5"> The inner loop</label></li>
                    <li><label><input type="radio" name="q5"> Both complete simultaneously</label></li>
                    <li><label><input type="radio" name="q5"> It depends on the condition</label></li>
                </ul>
            </div>

            <!-- Question 6 -->
            <div class="lesson-section">
                <p class="question">6. What is a "sentinel value"?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q6"> A value that causes an error</label></li>
                    <li><label><input type="radio" name="q6"> A special value that signals the end of input</label></li>
                    <li><label><input type="radio" name="q6"> The first value in a sequence</label></li>
                    <li><label><input type="radio" name="q6"> A value that starts a loop</label></li>
                </ul>
            </div>

            <!-- Question 7 -->
            <div class="lesson-section">
                <p class="question">7. What does <code>continue</code> do in a loop?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q7"> Exits the loop</label></li>
                    <li><label><input type="radio" name="q7"> Restarts the loop from the beginning</label></li>
                    <li><label><input type="radio" name="q7"> Skips the rest of the current iteration</label></li>
                    <li><label><input type="radio" name="q7"> Pauses the loop</label></li>
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
