<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 5 Quiz | CodeHearted</title>
    <meta name="description" content="Lesson 5 Quiz - Octal Number System">
    <link rel="stylesheet" href="../../../../css/modules/digilogic/mod6/quiz6.css?php echo time(); ?>">
</head>
<style>
        textarea {
            width: 100%;
            height: 70px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 8px;
            resize: none;
        }
        </style>
<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 6: Quiz</h1>

            <!-- Question 1 -->
            <div class="lesson-section">
                <p class="question">1. 	Write the expanded form of 6,024.305.</p>
                <textarea name="q3" placeholder="Write your answer here..."><?php if(isset($_POST['q3'])) echo htmlspecialchars($_POST['q3']); ?></textarea>
            </div>

            <!-- Question 2 -->
            <div class="lesson-section">
                <p class="question">2. 	Which is greater: 14.07 or 14.007?</p>
                <textarea name="q3" placeholder="Write your answer here..."><?php if(isset($_POST['q3'])) echo htmlspecialchars($_POST['q3']); ?></textarea>
            </div>

            <!-- Question 3 -->
            <div class="lesson-section">
                <p class="question">3.  Round 8.3764 to two decimal places.</p>
                <textarea name="q3" placeholder="Write your answer here..."><?php if(isset($_POST['q3'])) echo htmlspecialchars($_POST['q3']); ?></textarea>
            </div>

            <!-- Question 4 -->
            <div class="lesson-section">
                <p class="question">4. Compute: 25.64 + 4.8 − 0.06</p>
                <textarea name="q3" placeholder="Write your answer here..."><?php if(isset($_POST['q3'])) echo htmlspecialchars($_POST['q3']); ?></textarea>
            </div>

            <!-- Question 5 -->
            <div class="lesson-section">
                <p class="question">5. 	Compute: 3.6 × 0.25 + 5.4 ÷ 0.9</p>
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
