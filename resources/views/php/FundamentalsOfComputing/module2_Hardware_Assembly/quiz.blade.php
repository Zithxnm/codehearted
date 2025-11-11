<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 2 Quiz | CodeHearted</title>
    <meta name="description" content="Lesson 2 Quiz - Variables, Data Types, and Memory Concepts">
    <link rel="stylesheet" href="{{asset('css/modules/compfund/mod2/quiz2.css')}}?v={{ time(); }}">
</head>

<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 2: Quiz</h1>

            <!-- Question 1 -->
            <div class="lesson-section">
                <p class="question">1. Which part is the “brain” of the computer?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q1"> RAM</label></li>
                    <li><label><input type="radio" name="q1"> CPU</label></li>
                    <li><label><input type="radio" name="q1"> GPU</label></li>
                    <li><label><input type="radio" name="q1"> PSU</label></li>
                </ul>
            </div>

            <!-- Question 2 -->
            <div class="lesson-section">
                <p class="question">2. Which component connects all other parts?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q2"> Motherboard</label></li>
                    <li><label><input type="radio" name="q2"> Hard drive</label></li>
                    <li><label><input type="radio" name="q2"> Power supply</label></li>
                    <li><label><input type="radio" name="q2"> CPU</label></li>
                </ul>
            </div>

            <!-- Question 3 -->
            <div class="lesson-section">
                <p class="question">3. What is the short-term memory of a computer?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q3"> SSD</label></li>
                    <li><label><input type="radio" name="q3"> RAM</label></li>
                    <li><label><input type="radio" name="q3"> PSU</label></li>
                    <li><label><input type="radio" name="q3"> GPU</label></li>
                </ul>
            </div>

            <!-- Question 4 -->
            <div class="lesson-section">
                <p class="question">4. What component powers all parts of the system?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q4"> SSD</label></li>
                    <li><label><input type="radio" name="q4"> RAM</label></li>
                    <li><label><input type="radio" name="q4"> PSU</label></li>
                    <li><label><input type="radio" name="q4"> GPU</label></li>
                </ul>
            </div>

            <!-- Question 5 -->
            <div class="lesson-section">
                <p class="question">5. Which device improves visual output?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q5"> Sound Card</label></li>
                    <li><label><input type="radio" name="q5"> GPU</label></li>
                    <li><label><input type="radio" name="q5"> RAM</label></li>
                    <li><label><input type="radio" name="q5"> PSU</label></li>
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
