<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 3 Quiz | CodeHearted</title>
    <meta name="description" content="Lesson 3 Quiz - Input, Output, and Type Conversion">
    <link rel="stylesheet" href="{{asset('css/modules/compfund/mod3/quiz3.css')}}?v={{ time(); }}">
</head>

<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 3: Quiz</h1>

            <!-- Question 1 -->
            <div class="lesson-section">
                <p class="question">1. BIOS stands for:</p>
                <ul class="options">
                    <li><label><input type="radio" name="q1"> Basic Input/Output System</label></li>
                    <li><label><input type="radio" name="q1"> Binary Integrated Operation Setup</label></li>
                    <li><label><input type="radio" name="q1"> Boot Interface Operating System</label></li>
                    <li><label><input type="radio" name="q1"> Base Input Option Software</label></li>
                </ul>
            </div>

            <!-- Question 2 -->
            <div class="lesson-section">
                <p class="question">2. What is the modern replacement for BIOS?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q2"> CMOS</label></li>
                    <li><label><input type="radio" name="q2"> UEFI</label></li>
                    <li><label><input type="radio" name="q2"> GUI</label></li>
                    <li><label><input type="radio" name="q2"> POST</label></li>
                </ul>
            </div>

            <!-- Question 3 -->
            <div class="lesson-section">
                <p class="question">3. What does POST do?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q3"> Installs drivers</label></li>
                    <li><label><input type="radio" name="q3"> Checks hardware before booting</label></li>
                    <li><label><input type="radio" name="q3"> Loads OS</label></li>
                    <li><label><input type="radio" name="q3"> Tests applications</label></li>
                </ul>
            </div>

            <!-- Question 4 -->
            <div class="lesson-section">
                <p class="question">4. What allows you to choose where the OS loads from?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q2"> Boot order</label></li>
                    <li><label><input type="radio" name="q2"> CPU</label></li>
                    <li><label><input type="radio" name="q2"> GPU</label></li>
                    <li><label><input type="radio" name="q2"> BIOS chip</label></li>
                </ul>
            </div>

            <!-- Question 5 -->
            <div class="lesson-section">
                <p class="question">5. Which is NOT an example of bootable media?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q3"> USB</label></li>
                    <li><label><input type="radio" name="q3"> CD/DVD</label></li>
                    <li><label><input type="radio" name="q3"> RAM</label></li>
                    <li><label><input type="radio" name="q3"> Network boot</label></li>
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
