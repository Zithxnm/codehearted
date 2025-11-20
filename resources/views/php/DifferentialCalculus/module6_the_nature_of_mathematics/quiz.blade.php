<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 6 Quiz | CodeHearted</title>
    <meta name="description" content="Lesson 6 - The Nature of Mathematics">
    @vite('resources/css/modules/diffcalc/mod6/quiz6.css')
</head>

<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 6: Quiz</h1>

            <div class="lesson-section">
                <p class="question">1. Mathematics originated from the Greek word meaning?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q1"> Measure</label></li>
                    <li><label><input type="radio" name="q1"> Knowledge</label></li>
                    <li><label><input type="radio" name="q1"> Science</label></li>
                    <li><label><input type="radio" name="q1"> Pattern</label></li>
                </ul>
            </div>

            <div class="lesson-section">
                <p class="question">2. Which is NOT a characteristic of mathematics?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q2"> Abstract</label></li>
                    <li><label><input type="radio" name="q2"> Precise</label></li>
                    <li><label><input type="radio" name="q2"> Illogical</label></li>
                    <li><label><input type="radio" name="q2"> Universal</label></li>
                </ul>
            </div>

            <div class="lesson-section">
                <p class="question">3. Which of the following best describes mathematics as a “tool”?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q3"> Used to express emotions</label></li>
                    <li><label><input type="radio" name="q3"> Used in solving real-world problems</label></li>
                    <li><label><input type="radio" name="q3"> Used only by scientists</label></li>
                    <li><label><input type="radio" name="q3"> Used only for counting numbers</label></li>
                </ul>
            </div>

            <div class="lesson-section">
                <p class="question">4. Which of the following is NOT an application of mathematics?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q4"> Designing bridges</label></li>
                    <li><label><input type="radio" name="q4"> Analyzing business profits</label></li>
                    <li><label><input type="radio" name="q4"> Cooking recipes</label></li>
                    <li><label><input type="radio" name="q4"> Singing a song without rhythm</label></li>
                </ul>
            </div>

            <button class="submit-btn">Submit Answers</button>
        </section>
    </main>

    <script>
        document.querySelector('.submit-btn').addEventListener('click', () => {
            const totalQuestions = 4;
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
