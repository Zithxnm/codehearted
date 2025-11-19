<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 2 Practice | CodeHearted</title>
    <meta name="description" content="Lesson 2 Practice Problems - Variables, Data Types, and Memory Concepts">
    @vite('resources/css/modules/progfund/mod2/practice2.css')
</head>

<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 2: Practice Problems</h1>

            <!-- Section I -->
            <div class="lesson-section">
                <h2 class="section-heading">I. Variable Creation and Terminology</h2>
                <p class="instruction">Create variables for a student record.</p>

                <div class="fill-lines">
                    <p>First name (String):</p>
                    <input type="text" class="answer-input wide">

                    <p>Last name (String):</p>
                    <input type="text" class="answer-input wide">

                    <p>Grade level (integer):</p>
                    <input type="text" class="answer-input wide">

                    <p>GWA (float):</p>
                    <input type="text" class="answer-input wide">

                    <p>Is enrolled (boolean):</p>
                    <input type="text" class="answer-input wide">
                </div>
            </div>

            <!-- Section II -->
            <div class="lesson-section">
                <h2 class="section-heading">II. Identifying Data Types</h2>
                <p class="instruction">What data type is each literal?</p>

                <div class="fill-lines">
                    <p>42</p>
                    <input type="text" class="answer-input wide">

                    <p>“Python”</p>
                    <input type="text" class="answer-input wide">

                    <p>3.14159</p>
                    <input type="text" class="answer-input wide">

                    <p>False</p>
                    <input type="text" class="answer-input wide">

                    <p>‘A’</p>
                    <input type="text" class="answer-input wide">
                </div>
            </div>

            <!-- Section III -->
            <div class="lesson-section">
                <h2 class="section-heading">III. Debugging Practice</h2>
                <p class="instruction">Find the bugs in this code (Hint: There are 3).</p>

                <div class="code-block">
                    <pre><code>2student_name = "John"
first name = "Alice"
age = "twenty" # This should be a number</code></pre>
                </div>
                <textarea class="answer-area" placeholder="Type your corrected version or explanation here..."></textarea>
            </div>

            <!-- Section IV -->
            <div class="lesson-section">
                <h2 class="section-heading">IV. Memory Concepts</h2>
                <p class="instruction">Explain what happens in computer memory when this code runs:</p>

                <div class="code-block">
                    <pre><code>x = 10
x = 20</code></pre>
                </div>
                <textarea class="answer-area" placeholder="Explain what happens in memory here..."></textarea>
            </div>

            <button class="submit-btn">Submit Answers</button>
        </section>
    </main>
</body>

</html>
