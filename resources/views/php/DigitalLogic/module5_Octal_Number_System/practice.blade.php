<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 5 Practice | CodeHearted</title>
    <meta name="description" content="Lesson 5 Practice Octal Number System">
    <link rel="stylesheet" href="{{asset('css/modules/digilogic/mod5/practice5.css')}}?v={{ time(); }}">
</head>
<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 5: Practice Problems</h1>

            <!-- Section I -->
            <div class="lesson-section">
                <h2 class="section-heading">I. Octal → Decimal Conversion</h2>
                <p class="instruction">Convert the following octal numbers to decimal:</p>
                <ul class="task-list">
                    <li>(235)<sub>8</sub></li>
                    <li>(701)<sub>8</sub></li>
                    <li>(45.3)<sub>8</sub></li>
                </ul>
                <textarea name="q3" placeholder="Write your answer here..."><?php if(isset($_POST['q3'])) echo htmlspecialchars($_POST['q3']); ?></textarea>
            </div>

            <!-- Section II -->
            <div class="lesson-section">
                <h2 class="section-heading">II. Decimal → Octal Conversion</h2>
                <p class="instruction">Convert the following decimal numbers to octal:</p>
                <ul class="task-list">
                    <li>73<sub>10</sub></li>
                    <li>150<sub>10</sub></li>
                    <li>300<sub>10</sub></li>
                </ul>
                <textarea name="q3" placeholder="Write your answer here..."><?php if(isset($_POST['q3'])) echo htmlspecialchars($_POST['q3']); ?></textarea>
            </div>

            <!-- Section III -->
            <div class="lesson-section">
                <h2 class="section-heading">III. Octal ↔ Binary Conversion</h2>
                <ul class="task-list">
                    <li>Convert (356)<sub>8</sub> to binary.</li>
                    <li>Convert (110101)<sub>2</sub> to octal.</li>
                    <li>Convert (24)<sub>8</sub> to binary.</li>
                </ul>
                    <textarea name="q3" placeholder="Write your answer here..."><?php if(isset($_POST['q3'])) echo htmlspecialchars($_POST['q3']); ?></textarea>
            </div>
            <button class="submit-btn">Submit Answers</button>
        </section>
    </main>
</body>
</html>
