<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 3 Quiz | CodeHearted</title>
    <meta name="description" content="Lesson 3 Quiz - Input, Output, and Type Conversion">
    @vite('resources/css/modules/progfund/mod3/quiz3.css')
</head>

<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 3: Quiz</h1>

            <!-- Question 1 -->
            <div class="lesson-section">
                <p class="question">1. What does I/O stand for?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q1"> Internet Operations</label></li>
                    <li><label><input type="radio" name="q1"> Input/Output</label></li>
                    <li><label><input type="radio" name="q1"> Internal Operations</label></li>
                    <li><label><input type="radio" name="q1"> Interface Options</label></li>
                </ul>
            </div>

            <!-- Question 2 -->
            <div class="lesson-section">
                <p class="question">2. What data type does <code>input()</code> always return?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q2"> Integer</label></li>
                    <li><label><input type="radio" name="q2"> Float</label></li>
                    <li><label><input type="radio" name="q2"> String</label></li>
                    <li><label><input type="radio" name="q2"> Boolean</label></li>
                </ul>
            </div>

            <!-- Question 3 -->
            <div class="lesson-section">
                <p class="question">3. What is "type conversion"?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q3"> Changing variable names</label></li>
                    <li><label><input type="radio" name="q3"> Converting data from one type to another</label></li>
                    <li><label><input type="radio" name="q3"> Converting programs to different languages</label></li>
                    <li><label><input type="radio" name="q3"> Converting files to different formats</label></li>
                </ul>
            </div>

            <!-- Question 4 -->
            <div class="lesson-section">
                <p class="question">4. What will this code display if the user types "25"?</p>
                <pre><code>age = input("Enter age: ")
print(type(age))</code></pre>
                <ul class="options">
                    <li><label><input type="radio" name="q4"> &lt;class 'int'&gt;</label></li>
                    <li><label><input type="radio" name="q4"> &lt;class 'str'&gt;</label></li>
                    <li><label><input type="radio" name="q4"> 25</label></li>
                    <li><label><input type="radio" name="q4"> age</label></li>
                </ul>
            </div>

            <!-- Question 5 -->
            <div class="lesson-section">
                <p class="question">5. What is string concatenation?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q5"> Making strings shorter</label></li>
                    <li><label><input type="radio" name="q5"> Converting strings to numbers</label></li>
                    <li><label><input type="radio" name="q5"> Joining strings together</label></li>
                    <li><label><input type="radio" name="q5"> Repeating strings</label></li>
                </ul>
            </div>

            <!-- Question 6 -->
            <div class="lesson-section">
                <p class="question">6. Which is the modern way to format strings in Python?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q6"> "Hello " + name</label></li>
                    <li><label><input type="radio" name="q6"> "Hello %s" % name</label></li>
                    <li><label><input type="radio" name="q6"> f"Hello {name}"</label></li>
                    <li><label><input type="radio" name="q6"> print("Hello", name)</label></li>
                </ul>
            </div>

            <!-- Question 7 -->
            <div class="lesson-section">
                <p class="question">7. What is a "prompt" in programming?</p>
                <ul class="options">
                    <li><label><input type="radio" name="q7"> A fast response</label></li>
                    <li><label><input type="radio" name="q7"> Text that asks the user for input</label></li>
                    <li><label><input type="radio" name="q7"> An error message</label></li>
                    <li><label><input type="radio" name="q7"> A function name</label></li>
                </ul>
            </div>

            <button class="submit-btn">Submit Answers</button>
        </section>
    </main>

    <script>
        document.querySelector('.submit-btn').addEventListener('click', () => {
            const totalQuestions = 7;
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
