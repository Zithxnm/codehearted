<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 1 Review | CodeHearted</title>
    <meta name="description" content="Lesson 1">
    <link rel="stylesheet" href="../module1_Truth_Table/quiz1.css?php echo time(); ?>">
</head>

<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 1: Quiz</h1>

            <div class="lesson-section">
                <p class="question">1.	Construct the truth table for:</p>
                <p><strong>P → (Q ∨ ¬P)</strong></p>
              <textarea name="q1" placeholder="Write your answer here..."><?php if(isset($_POST['q1'])) echo htmlspecialchars($_POST['q1']); ?></textarea>
            </div>

            <div class="lesson-section">
                <p class="question">2. 2.	Determine the truth value of:</p>
                <p><strong>¬P ∨ (P ∧ Q) when P = T, Q = F</strong></p>
                <textarea name="q1" placeholder="Write your answer here..."><?php if(isset($_POST['q1'])) echo htmlspecialchars($_POST['q1']); ?></textarea>
            </div>

            <div class="lesson-section">
                <p class="question">3.	Build a truth table for:</p>
                <p><strong>(P ∧ Q) → (P ∨ R) (Use three variables: P, Q, R)</strong></p>

                <textarea name="q1" placeholder="Write your answer here..."><?php if(isset($_POST['q1'])) echo htmlspecialchars($_POST['q1']); ?></textarea>
            </div>

            <div class="lesson-section">
                <p class="question">4.	Evaluate:</p>
                <p><strong>¬(P → Q) ∧ (R ∨ P) when P = F, Q = F, R = T</strong></p>
                <textarea name="q1" placeholder="Write your answer here..."><?php if(isset($_POST['q1'])) echo htmlspecialchars($_POST['q1']); ?></textarea>
            </div>

            <div class="lesson-section">
                <p class="question">5.	Which connective is being described by:</p>
                <p><strong>¬(P → Q) ∧ (R ∨ P) with P = F, Q = F, R = T</strong></p>
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
                alert("Answers submitted! (Backend na bahala ditu)");
            }
        });
    </script>

</body>
</html>