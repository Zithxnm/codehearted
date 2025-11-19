<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 4 Practice | CodeHearted</title>
    <meta name="description" content="Lesson 4 Practice Problems - Conditionals, Logical Operators, and Debugging">
    @vite('resources/css/modules/digilogic/mod4/practice4.css')
</head>
<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 4: Practice Problems</h1>

            <!-- Section I -->
            <div class="lesson-section">
                <h2 class="section-heading">I. Binary → Decimal Conversion</h2>
                <p class="instruction">Convert the following binary numbers to decimal:</p>
                <ul>
                    <li>1010_2</li>
                    <li>1111_2</li>
                    <li>100110_2</li>
                </ul>
                <textarea name="q3" placeholder="Write your answer here..."><?php if(isset($_POST['q3'])) echo htmlspecialchars($_POST['q3']); ?></textarea>
            </div>

            <!-- Section II -->
            <div class="lesson-section">
                <h2 class="section-heading">II. Decimal → Binary Conversion</h2>
                <p class="instruction">Convert the following decimal numbers to binary:</p>
                <ul class="task-list">
                    <li>12<sub>10</sub></li>
                    <li>12<sub>10</sub></li>
                    <li>58<sub>10</sub></li>
                </ul>
                <textarea name="q3" placeholder="Write your answer here..."><?php if(isset($_POST['q3'])) echo htmlspecialchars($_POST['q3']); ?></textarea>
            </div>

            <!-- Section III -->
            <div class="lesson-section">
                <h2 class="section-heading">III. Binary Addition</h2>
                <p class="instruction">Perform binary addition:</p>
                <ul class="task-list">
                    <li>1011<sub>2</sub>  + 0110<sub>2</sub> </li>
                    <li>1110<sub>2</sub>  + 0001<sub>2</sub></li>
                </ul>

                <textarea name="q3" placeholder="Write your answer here..."><?php if(isset($_POST['q3'])) echo htmlspecialchars($_POST['q3']); ?></textarea>
            </div>
    </main>
</body>

</html>
