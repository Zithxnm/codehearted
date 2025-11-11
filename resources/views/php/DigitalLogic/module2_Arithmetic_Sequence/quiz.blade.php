<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 2 Quiz | CodeHearted</title>
    <meta name="description" content="Lesson 2 Quiz - Variables, Data Types, and Memory Concepts">
    <link rel="stylesheet" href="{{asset('css/modules/digilogic/mod2/quiz2.css')}}?v={{ time(); }}">
</head>
<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 2: Quiz</h1>


            <div class="lesson-section">
                <p class="question">1. A sequence is 7, 10, 13, 16, …</p>
                <ul>
                    <li>Find d.</li>
                    <li>Write a<sub>n</sub>.</li>
                    <li>ind a<sub>25</sub>.</li>
                </ul>
                <textarea name="q1" placeholder="Write your answer here..."><?php if(isset($_POST['q1'])) echo htmlspecialchars($_POST['q1']); ?></textarea>
            </div>

            <!-- Question 2 -->
            <div class="lesson-section">
                <p class="question">2. A sequence has a<sub>1</sub> = -8, d = 5</p>
                <ul>
                    <li>Find a<sub>15</sub>.</li>
                </ul>
                <textarea name="q1" placeholder="Write your answer here..."><?php if(isset($_POST['q1'])) echo htmlspecialchars($_POST['q1']); ?></textarea>
            </div>

            <!-- Question 3 -->
            <div class="lesson-section">
                <p class="question">3. Which term of 12, 8, 4, 0, …?</p>
                <textarea name="q1" placeholder="Write your answer here..."><?php if(isset($_POST['q1'])) echo htmlspecialchars($_POST['q1']); ?></textarea>
            </div>

            <!-- Question 4 -->
            <div class="lesson-section">
                <p class="question">4.	Find the sum of the first 30 terms of 5, 10, 15, …</p>
                <textarea name="q1" placeholder="Write your answer here..."><?php if(isset($_POST['q1'])) echo htmlspecialchars($_POST['q1']); ?></textarea>
            </div>

            <!-- Question 5 -->
            <div class="lesson-section">
                <p class="question">5. If a<sub>1</sub> = 100 and a<sub>20</sub> = 10, find d and S<sub>20</sub>.</p>
                <textarea name="q1" placeholder="Write your answer here..."><?php if(isset($_POST['q1'])) echo htmlspecialchars($_POST['q1']); ?></textarea>
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
