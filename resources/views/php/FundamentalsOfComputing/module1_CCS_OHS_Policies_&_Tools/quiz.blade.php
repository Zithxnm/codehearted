<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 1 Review | CodeHearted</title>
    <meta name="description" content="Lesson 1">
    @vite('resources/css/modules/compfund/mod1/quiz1.css')
</head>

<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 1: Quiz</h1>

            <div class="lesson-section">
                <p class="question">1. Which should you do first before opening a computer case?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q1"> Remove RAM</label></li>
                    <li><label><input type="radio" name="q1"> Turn off and unplug the unit</label></li>
                    <li><label><input type="radio" name="q1"> Touch the motherboard</label></li>
                    <li><label><input type="radio" name="q1"> Use compressed air</label></li>
                </ul>
            </div>

            <div class="lesson-section">
                <p class="question">2. What PPE prevents damage from static electricity?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q2"> Face mask</label></li>
                    <li><label><input type="radio" name="q2"> Gloves</label></li>
                    <li><label><input type="radio" name="q2"> Anti-static wrist strap</label></li>
                    <li><label><input type="radio" name="q2"> Apron</label></li>
                </ul>
            </div>

            <div class="lesson-section">
                <p class="question">3. What tool is used to test voltage and continuity?</p>
                <pre><code>print("Learning Python")</code></pre>
                <ul class="options">
                    <li><label><input type="radio" name="q3"> Cable tester</label></li>
                    <li><label><input type="radio" name="q3"> Multimeter</label></li>
                    <li><label><input type="radio" name="q3"> IC extractor</label></li>
                    <li><label><input type="radio" name="q3"> Screwdriver</label></li>
                </ul>
            </div>

            <div class="lesson-section">
                <p class="question">4. Which PPE protects your eyes during repair?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q4"> Goggles</label></li>
                    <li><label><input type="radio" name="q4"> Gloves</label></li>
                    <li><label><input type="radio" name="q4"> Face mask</label></li>
                    <li><label><input type="radio" name="q4"> Apron</label></li>
                </ul>
            </div>

            <div class="lesson-section">
                <p class="question">5. Which of the following helps prevent overheating during repair?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q5"> Proper ventilation</label></li>
                    <li><label><input type="radio" name="q5"> Thick gloves</label></li>
                    <li><label><input type="radio" name="q5"> Closed casing</label></li>
                    <li><label><input type="radio" name="q5"> Cleaning brush</label></li>
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
