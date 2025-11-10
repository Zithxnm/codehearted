<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 3 Quiz | CodeHearted</title>
    <meta name="description" content="Lesson 3 Quiz - Input, Output, and Type Conversion">
    <link rel="stylesheet" href="../module3_Geometric_Sequences/quiz3.css?php echo time(); ?>">
</head>
<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 3: Quiz</h1>

            <!-- Question 1 -->
            <div class="lesson-section">
                <p class="question">1. A geometric sequence has a<sub>0</sub> = 7 and r = 5.</p>
                <ul>
                    <li>Write the recursive and closed-form formulas.</li>
                    <li>Find a<sub>4</sub>.</li>
                </ul>
                <textarea name="q3" placeholder="Write your answer here..."><?php if(isset($_POST['q3'])) echo htmlspecialchars($_POST['q3']); ?></textarea>
            </div>

            <!-- Question 2 -->
            <div class="lesson-section">
                <p class="question">2. The sequence 160, 80, 40, 20, … is geometric.</p>
                <ul>
                    <li>Find r.</li>
                    <li>Write the closed-form formula.</li>
                    <li>Find a<sub>6</sub>.</li>
                </ul>
                <textarea name="q3" placeholder="Write your answer here..."><?php if(isset($_POST['q3'])) echo htmlspecialchars($_POST['q3']); ?></textarea>
            </div>

            <!-- Question 3 -->
            <div class="lesson-section">
                <p class="question">3. Compute the sum of the first 6 terms of a<sub>n</sub>= 3 ⋅ (0.5)<sup>n</sup></p>
                <textarea name="q3" placeholder="Write your answer here..."><?php if(isset($_POST['q3'])) echo htmlspecialchars($_POST['q3']); ?></textarea>
                
            </div>

            <!-- Question 4 -->
            <div class="lesson-section">
                <p class="question">4. A culture of bacteria doubles every hour. If it starts with 500 bacteria, how many are there after 8 hours?</p>
                <textarea name="q3" placeholder="Write your answer here..."><?php if(isset($_POST['q3'])) echo htmlspecialchars($_POST['q3']); ?></textarea>
            </div>

            <!-- Question 5 -->
            <div class="lesson-section">
                <p class="question">5.	Which formula would you use to compute the sum of a finite geometric sequence? (Write the general form.)</p>
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
