<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 5 Quiz | CodeHearted</title>
    <meta name="description" content="Lesson 5 Quiz - Octal Number System">
    @vite('resources/css/modules/digilogic/mod5/quiz5.css')
</head>
<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 5: Quiz</h1>

            <!-- Question 1 -->
            <div class="lesson-section">
                <p class="question">1. 	Convert (476)<sub>8</sub> to decimal.</p>
                <textarea name="q3" placeholder="Write your answer here..."><?php if(isset($_POST['q3'])) echo htmlspecialchars($_POST['q3']); ?></textarea>
            </div>

            <!-- Question 2 -->
            <div class="lesson-section">
                <p class="question">2. 	Convert 200<sub>10</sub>  to octal.</p>
                <textarea name="q3" placeholder="Write your answer here..."><?php if(isset($_POST['q3'])) echo htmlspecialchars($_POST['q3']); ?></textarea>
            </div>

            <!-- Question 3 -->
            <div class="lesson-section">
                <p class="question">3. 	Convert (101101)<sub>2</sub> to octal.</p>
                <textarea name="q3" placeholder="Write your answer here..."><?php if(isset($_POST['q3'])) echo htmlspecialchars($_POST['q3']); ?></textarea>
            </div>

            <!-- Question 4 -->
            <div class="lesson-section">
                <p class="question">4. 	Convert (101101)<sub>2</sub> to octal.</p>
                <textarea name="q3" placeholder="Write your answer here..."><?php if(isset($_POST['q3'])) echo htmlspecialchars($_POST['q3']); ?></textarea>
            </div>

            <!-- Question 5 -->
            <div class="lesson-section">
                <p class="question">5. 	Convert (101101)<sub>2</sub> to octal.</p>
                <textarea name="q3" placeholder="Write your answer here..."><?php if(isset($_POST['q3'])) echo htmlspecialchars($_POST['q3']); ?></textarea>
            </div>

            <button class="submit-btn">Submit Answers</button>
        </section>
    </main>

    <script>
        document.querySelector('.submit-btn').addEventListener('click', () => {
            const totalQuestions = 3;
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
