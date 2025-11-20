<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 4 Quiz | CodeHearted</title>
    <meta name="description" content="Lesson 4 Quiz - Conditionals, Logical Operators, and Control Flow">
    @vite('resources/css/modules/digilogic/mod4/quiz4.css')
</head>
<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 4: Quiz</h1>

            <!-- Question 1 -->
            <div class="lesson-section">
                <p class="question">1. Convert 101101<sub>2</sub> to decimal.</p>
                <textarea name="q3" placeholder="Write your answer here..."><?php if(isset($_POST['q3'])) echo htmlspecialchars($_POST['q3']); ?></textarea>
            </div>

            <!-- Question 2 -->
            <div class="lesson-section">
                <p class="question">2. Convert 45<sub>10</sub> to binary.</p>
                <textarea name="q3" placeholder="Write your answer here..."><?php if(isset($_POST['q3'])) echo htmlspecialchars($_POST['q3']); ?></textarea>
            </div>

            <!-- Question 3 -->
            <div class="lesson-section">
                <p class="question">3. 	Add 1101<sub>2</sub>  + 1011<sub>2</sub></p>
                <textarea name="q3" placeholder="Write your answer here..."><?php if(isset($_POST['q3'])) echo htmlspecialchars($_POST['q3']); ?></textarea>
            </div>

            <!-- Question 4 -->
            <div class="lesson-section">
                <p class="question">4. Why do computers use binary instead of decimal?</p>
                <textarea name="q3" placeholder="Write your answer here..."><?php if(isset($_POST['q3'])) echo htmlspecialchars($_POST['q3']); ?></textarea>
            </div>

            <!-- Question 5 -->
            <div class="lesson-section">
                <p class="question">5. 	What is the decimal value of 11111111<sub>2</sub>?</p>
                <textarea name="q3" placeholder="Write your answer here..."><?php if(isset($_POST['q3'])) echo htmlspecialchars($_POST['q3']); ?></textarea>
            </div>


            <button class="submit-btn">Submit Answers</button>
        </section>
    </main>

    <script>
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
                alert("Answers submitted! (Backend na bahala ditu 😄)");
            }
        });
    </script>

</body>
</html>
