<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 7 Practice | CodeHearted</title>
    <meta name="description" content="Lesson 7 - The Fibonacci Sequence">
    @vite('resources/css/modules/diffcalc/mod7/practice7.css')
</head>

<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 7: Practice Problems</h1>

            <div class="lesson-section">
                <h2 class="section-heading">I. Generate Fibonacci Numbers</h2>
                <p class="instruction">Write the next 6 terms of the sequence:</p>

                <p>0, 1, 1, 2, 3, 5, ___, ___, ___, ___, ___, ___</p>
                <div class="fill-lines">
                    <input type="text" class="answer-input small">
                    <input type="text" class="answer-input small">
                    <input type="text" class="answer-input small">
                    <input type="text" class="answer-input small">
                    <input type="text" class="answer-input small">
                    <input type="text" class="answer-input small">
                </div>
            </div>

            <div class="lesson-section">
                <h2 class="section-heading">II. Fibonacci in Nature</h2>
                <p class="instruction">List at least 3 examples of Fibonacci numbers in nature or art.</p>
                <textarea class="answer-area"></textarea>
                <textarea class="answer-area"></textarea>
                <textarea class="answer-area"></textarea>
            </div>

            <div class="lesson-section">
                <h2 class="section-heading">III. Golden Ratio Connection</h2>
                <p class="instruction">Compute the ratio of consecutive Fibonacci terms:</p>
                <p>
                    21/13, 34/21, 55/34
                </p>
                <p>What number do they approach?</p>
                <input type="text" class="answer-input wide">
            </div>

            <div class="lesson-section">
                <h2 class="section-heading">IV. Spiral Drawing (Optional)</h2>
                <p class="instruction">
                    Using graph paper, draw squares with side lengths equal to Fibonacci numbers and create a spiral by connecting opposite corners.
                </p>
            </div>

            <button class="submit-btn">Submit Answers</button>
        </section>
    </main>
</body>
</html>
