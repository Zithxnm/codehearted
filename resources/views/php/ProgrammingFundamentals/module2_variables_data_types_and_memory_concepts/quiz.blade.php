<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 2 Quiz | CodeHearted</title>
    <meta name="description" content="Lesson 2 Quiz - Variables, Data Types, and Memory Concepts">
    <link rel="stylesheet" href="../module2_variables_data_types_and_memory_concepts/quiz2.css?php echo time(); ?>">
</head>

<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 2: Quiz</h1>

            <!-- Question 1 -->
            <div class="lesson-section">
                <p class="question">1. What is a variable in programming?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q1"> A number that changes</label></li>
                    <li><label><input type="radio" name="q1"> A named location in memory that stores data</label></li>
                    <li><label><input type="radio" name="q1"> A type of computer program</label></li>
                    <li><label><input type="radio" name="q1"> A mathematical equation</label></li>
                </ul>
            </div>

            <!-- Question 2 -->
            <div class="lesson-section">
                <p class="question">2. Which data type would you use to store a person's age?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q2"> String</label></li>
                    <li><label><input type="radio" name="q2"> Boolean</label></li>
                    <li><label><input type="radio" name="q2"> Integer</label></li>
                    <li><label><input type="radio" name="q2"> Float</label></li>
                </ul>
            </div>

            <!-- Question 3 -->
            <div class="lesson-section">
                <p class="question">3. What is "snake_case"?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q3"> A type of error</label></li>
                    <li><label><input type="radio" name="q3"> A naming convention using underscores</label></li>
                    <li><label><input type="radio" name="q3"> A programming language</label></li>
                    <li><label><input type="radio" name="q3"> A debugging technique</label></li>
                </ul>
            </div>

            <!-- Question 4 -->
            <div class="lesson-section">
                <p class="question">4. What does "dynamically typed" mean?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q4"> Variables must declare their type</label></li>
                    <li><label><input type="radio" name="q4"> Variables cannot change type</label></li>
                    <li><label><input type="radio" name="q4"> Variables can change type during program execution</label></li>
                    <li><label><input type="radio" name="q4"> Variables don't have types</label></li>
                </ul>
            </div>

            <!-- Question 5 -->
            <div class="lesson-section">
                <p class="question">5. Which of these follows Python naming conventions?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q5"> studentName</label></li>
                    <li><label><input type="radio" name="q5"> student-name</label></li>
                    <li><label><input type="radio" name="q5"> student_name</label></li>
                    <li><label><input type="radio" name="q5"> 2student_name</label></li>
                </ul>
            </div>

            <!-- Question 6 -->
            <div class="lesson-section">
                <p class="question">6. What is "garbage collection"?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q6"> Deleting old programs</label></li>
                    <li><label><input type="radio" name="q6"> Automatic memory cleanup</label></li>
                    <li><label><input type="radio" name="q6"> Removing bugs from code</label></li>
                    <li><label><input type="radio" name="q6"> Organizing variable names</label></li>
                </ul>
            </div>

            <button class="submit-btn">Submit Answers</button>
        </section>
    </main>

    <script>
        document.querySelector('.submit-btn').addEventListener('click', () => {
            const totalQuestions = 6;
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
