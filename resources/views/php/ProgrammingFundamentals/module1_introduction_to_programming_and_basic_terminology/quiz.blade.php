<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 1 Review | CodeHearted</title>
    <meta name="description" content="Lesson 1">
    <link rel="stylesheet" href="../module1_introduction_to_programming_and_basic_terminology/quiz1.css?php echo time(); ?>">
</head>

<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 1: Quiz</h1>

            <div class="lesson-section">
                <p class="question">1. What is an algorithm?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q1"> A programming language</label></li>
                    <li><label><input type="radio" name="q1"> A step-by-step problem solution</label></li>
                    <li><label><input type="radio" name="q1"> A type of computer</label></li>
                    <li><label><input type="radio" name="q1"> An error in code</label></li>
                </ul>
            </div>

            <div class="lesson-section">
                <p class="question">2. What does “debugging” mean?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q2"> Adding bugs to code</label></li>
                    <li><label><input type="radio" name="q2"> Writing a new code</label></li>
                    <li><label><input type="radio" name="q2"> Finding and fixing errors in code</label></li>
                    <li><label><input type="radio" name="q2"> Running a program</label></li>
                </ul>
            </div>

            <div class="lesson-section">
                <p class="question">3. What will this code display?</p>
                <pre><code>print("Learning Python")</code></pre>
                <ul class="options">
                    <li><label><input type="radio" name="q3"> Learning Python</label></li>
                    <li><label><input type="radio" name="q3"> print("Learning Python")</label></li>
                    <li><label><input type="radio" name="q3"> “Learning Python”</label></li>
                    <li><label><input type="radio" name="q3"> Nothing</label></li>
                </ul>
            </div>

            <div class="lesson-section">
                <p class="question">4. Why is Python good for beginners?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q4"> It’s the fastest language</label></li>
                    <li><label><input type="radio" name="q4"> It reads almost like English</label></li>
                    <li><label><input type="radio" name="q4"> It’s the newest language</label></li>
                    <li><label><input type="radio" name="q4"> It only works on one type of computer</label></li>
                </ul>
            </div>

            <div class="lesson-section">
                <p class="question">5. Fill in the blank: A ___________ is a complete set of instructions that performs a specific task.</p>
                <ul class="options">
                    <li><label><input type="radio" name="q5"> Bug</label></li>
                    <li><label><input type="radio" name="q5"> Algorithm</label></li>
                    <li><label><input type="radio" name="q5"> Program</label></li>
                    <li><label><input type="radio" name="q5"> Syntax</label></li>
                </ul>
            </div>

            <button class="submit-btn">Submit Answers</button>
        </section>
    </main>

    <script>
        // added validation for now
        document.querySelector('.submit-btn').addEventListener('click', () => {
            const totalQuestions = 5;
            let answered = 0;
            for (let i = 1; i <= totalQuestions; i++) {
                if (document.querySelector(`input[name="q${i}"]:checked`)) {
                    answered++;
                }
            }
            if (answered < totalQuestions) {
                alert("Please answer all questions before submitting!");
            } else {
                alert("Answers submitted! (Backend na bahala ditu)");
            }
        });
    </script>

</body>
</html>