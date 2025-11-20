<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 4 Quiz | CodeHearted</title>
    <meta name="description" content="Lesson 4 Quiz - Conditionals, Logical Operators, and Control Flow">
    @vite('resources/css/modules/compfund/mod4/quiz4.css')
</head>

<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 4: Quiz</h1>

            <!-- Question 1 -->
            <div class="lesson-section">
                <p class="question">1. What software manages hardware and programs?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q1"> OS</label></li>
                    <li><label><input type="radio" name="q1"> Driver</label></li>
                    <li><label><input type="radio" name="q1"> BIOS</label></li>
                    <li><label><input type="radio" name="q1"> TApplication</label></li>
                </ul>
            </div>

            <!-- Question 2 -->
            <div class="lesson-section">
                <p class="question">2. Which step comes first in OS installation?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q2"> Copying files</label></li>
                    <li><label><input type="radio" name="q2"> Preparing bootable media</label></li>
                    <li><label><input type="radio" name="q2"> Creating user account</label></li>
                    <li><label><input type="radio" name="q2"> Updating drivers</label></li>
                </ul>
            </div>

            <!-- Question 3 -->
            <div class="lesson-section">
                <p class="question">3. What must be changed in BIOS before OS installation?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q3"> Boot order</label></li>
                    <li><label><input type="radio" name="q3"> Fan speed</label></li>
                    <li><label><input type="radio" name="q3"> Date and time</label></li>
                    <li><label><input type="radio" name="q3"> System password</label></li>
                </ul>
            </div>

            <!-- Question 4 -->
            <div class="lesson-section">
                <p class="question">4. A driver allows:</p>
                <ul class="options">
                    <li><label><input type="radio" name="q4"> The OS to communicate with hardware</label></li>
                    <li><label><input type="radio" name="q4"> Faster internet</label></li>
                    <li><label><input type="radio" name="q4"> Virus protection</label></li>
                    <li><label><input type="radio" name="q4"> Data storage</label></li>
                </ul>
            </div>

            <!-- Question 5 -->
            <div class="lesson-section">
                <p class="question">5. Which is NOT an example of an OS?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q5"> Windows</label></li>
                    <li><label><input type="radio" name="q5"> Linux</label></li>
                    <li><label><input type="radio" name="q5"> Android</label></li>
                    <li><label><input type="radio" name="q5"> Photoshop</label></li>
                </ul>
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
