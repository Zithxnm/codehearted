<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 5 Quiz | CodeHearted</title>
    <meta name="description" content="Lesson 5 Quiz - Iteration and Loops">
    <link rel="stylesheet" href="{{asset('css/modules/compfund/mod5/quiz5.css')}}?v={{ time(); }}">
</head>

<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 5: Quiz</h1>

            <!-- Question 1 -->
            <div class="lesson-section">
                <p class="question">1. What is the first step in installing an application?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q1"> Run the installer</label></li>
                    <li><label><input type="radio" name="q1"> Get the installer</label></li>
                    <li><label><input type="radio" name="q1"> Restart P</label></li>
                    <li><label><input type="radio" name="q1"> Delete files</label></li>
                </ul>
            </div>

            <!-- Question 2 -->
            <div class="lesson-section">
                <p class="question">2. Which file extension usually starts installation?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q2"> .exe</label></li>
                    <li><label><input type="radio" name="q2"> .docx</label></li>
                    <li><label><input type="radio" name="q2"> .jpg</label></li>
                    <li><label><input type="radio" name="q2"> .zip</label></li>
                </ul>
            </div>

            <!-- Question 3 -->
            <div class="lesson-section">
                <p class="question">3. What type of software is free but cannot be edited?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q3"> Open source</label></li>
                    <li><label><input type="radio" name="q3"> Freeware</label></li>
                    <li><label><input type="radio" name="q3"> Shareware</label></li>
                    <li><label><input type="radio" name="q3"> Subscription</label></li>
                </ul>
            </div>

            <!-- Question 4 -->
            <div class="lesson-section">
                <p class="question">4. Which license allows modification and sharing?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q4"> Freeware</label></li>
                    <li><label><input type="radio" name="q4"> Open source</label></li>
                    <li><label><input type="radio" name="q4"> Commercial</label></li>
                    <li><label><input type="radio" name="q4"> Subscription</label></li>
                </ul>
            </div>

            <!-- Question 5 -->
            <div class="lesson-section">
                <p class="question">5. What is shareware?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q5"> Free with time limits</label></li>
                    <li><label><input type="radio" name="q5"> Paid only</label></li>
                    <li><label><input type="radio" name="q5"> Pirated</label></li>
                    <li><label><input type="radio" name="q5"> Trial with no expiration</label></li>
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
