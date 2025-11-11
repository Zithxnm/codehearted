<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 5 Quiz | CodeHearted</title>
    <meta name="description" content="Lesson 5 - Order of Rotation">
    <link rel="stylesheet" href="{{asset('css/modules/diffcalc/mod5/quiz5.css')}}?v={{ time(); }}">
</head>

<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 5: Quiz</h1>

            <div class="lesson-section">
                <p class="question">1. A figure that looks the same 4 times in a full turn has an order of rotation:</p>
                <ul class="options">
                    <li><label><input type="radio" name="q1" value="a"> 2</label></li>
                    <li><label><input type="radio" name="q1" value="b"> 3</label></li>
                    <li><label><input type="radio" name="q1" value="c"> 4</label></li>
                    <li><label><input type="radio" name="q1" value="d"> 5</label></li>
                </ul>
            </div>

            <div class="lesson-section">
                <p class="question">2. The angle of rotation of a regular pentagon is:</p>
                <ul class="options">
                    <li><label><input type="radio" name="q2" value="a"> 60°</label></li>
                    <li><label><input type="radio" name="q2" value="b"> 72°</label></li>
                    <li><label><input type="radio" name="q2" value="c"> 90°</label></li>
                    <li><label><input type="radio" name="q2" value="d"> 120°</label></li>
                </ul>
            </div>

            <div class="lesson-section">
                <p class="question">3. A circle has:</p>
                <ul class="options">
                    <li><label><input type="radio" name="q3" value="a"> Order 1</label></li>
                    <li><label><input type="radio" name="q3" value="b"> Order 2</label></li>
                    <li><label><input type="radio" name="q3" value="c"> Infinite order of rotation</label></li>
                    <li><label><input type="radio" name="q3" value="d"> No rotational symmetry</label></li>
                </ul>
            </div>

            <div class="lesson-section">
                <p class="question">4. Which letter has rotational symmetry of order 2?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q4" value="a"> N</label></li>
                    <li><label><input type="radio" name="q4" value="b"> H</label></li>
                    <li><label><input type="radio" name="q4" value="c"> S</label></li>
                    <li><label><input type="radio" name="q4" value="d"> Z</label></li>
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
