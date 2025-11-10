<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 1 Practice | CodeHearted</title>
    <meta name="description" content="Lesson 1">
    <link rel="stylesheet" href="../module1_introduction_to_programming_and_basic_terminology/practice1.css?php echo time(); ?>">
</head>

<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 1: Practice Problems</h1>

            <!-- Section I -->
            <div class="lesson-section">
                <h2 class="section-heading">I. Understanding Terminology</h2>
                <p class="instruction">Match the term with its definition.</p>

                <table class="match-table">
                    <tr>
                        <td><input type="text" onkeydown="return /[a-d]/i.test(event.key)" maxlength="1" class="answer-input small"> Algorithm</td>
                        <td>a) An error in code</td>
                    </tr>
                    <tr>
                        <td><input type="text" onkeydown="return /[a-d]/i.test(event.key)" maxlength="1" class="answer-input small"> Bug</td>
                        <td>b) Step-by-step solution to a problem</td>
                    </tr>
                    <tr>
                        <td><input type="text" onkeydown="return /[a-d]/i.test(event.key)" maxlength="1" class="answer-input small"> Debugging</td>
                        <td>c) Finding and fixing errors</td>
                    </tr>
                    <tr>
                        <td><input type="text" onkeydown="return /[a-d]/i.test(event.key)" maxlength="1" class="answer-input small"> Syntax</td>
                        <td>d) Rules for writing code correctly</td>
                    </tr>
                </table>
            </div>

            <!-- Section II -->
            <div class="lesson-section">
                <h2 class="section-heading">II. Your First Program</h2>
                <p class="instruction">Write a program that displays:</p>

                <div class="fill-lines">
                    <p>Your name:</p>
                    <input type="text" class="answer-input wide">

                    <p>Your favorite hobby:</p>
                    <input type="text" class="answer-input wide">

                    <p>“Programming is fun!”</p>
                    <input type="text" class="answer-input wide">
                </div>
            </div>

            <!-- Section III -->
            <div class="lesson-section">
                <h2 class="section-heading">III. Code Reading Practice</h2>
                <p class="instruction">What will each program display?</p>

                <div class="code-block">
                    <pre><code>print("Welcome to coding!")</code></pre>
                </div>
                <textarea class="answer-area" placeholder="Type your answer here..."></textarea>

                <div class="code-block">
                    <pre><code>print("Let’s learn together!")</code></pre>
                </div>
                <textarea class="answer-area" placeholder="Type your answer here..."></textarea>
            </div>

            <button class="submit-btn">Submit Answers</button>
        </section>
    </main>

</body>

<style>
.answer-input.small {
    width: 2rem;
    text-align: center;
    border: 1px solid #fbbf24;
    border-radius: 4px;
    margin-right: 0.5rem;
    font-weight: bold;
}
.match-table td {
    padding: 0.5rem 1rem;
}
</style>


</html>