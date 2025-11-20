<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 4 Practice | CodeHearted</title>
    <meta name="description" content="Lesson 4 Practice Problems - Conditionals, Logical Operators, and Debugging">
    @vite('resources/css/modules/progfund/mod4/practice4.css')
</head>

<body>
    <main class="lesson-container">
        <section class="lesson-card">
            <h1 class="lesson-title">Lesson 4: Practice Problems</h1>

            <!-- Section I -->
            <div class="lesson-section">
                <h2 class="section-heading">I. Basic Conditionals</h2>
                <p class="instruction">Write a program that asks for a number and tells the user if it’s positive, negative, or zero.</p>
                <textarea class="answer-area" placeholder="Write your program here..."></textarea>
            </div>

            <!-- Section II -->
            <div class="lesson-section">
                <h2 class="section-heading">II. Logical Operators Practice</h2>
                <p class="instruction">Create a program for a movie theater that checks the following conditions:</p>
                <ul class="task-list">
                    <li>Age (must be 13 or older for PG-13 movies)</li>
                    <li>Has a ticket (must be <code>True</code>)</li>
                </ul>
                <p class="instruction">If both conditions are met, print <strong>"Enjoy the movie"</strong>. Otherwise, print <strong>"Access denied."</strong></p>
                <textarea class="answer-area" placeholder="Write your program here..."></textarea>
            </div>

            <!-- Section III -->
            <div class="lesson-section">
                <h2 class="section-heading">III. Multiple Conditions</h2>
                <p class="instruction">Write a program that determines what to wear based on temperature:</p>

                <table class="data-table">
                    <tr>
                        <th>Temperature (°F)</th>
                        <th>Output</th>
                    </tr>
                    <tr>
                        <td>Above 80°F</td>
                        <td>"Wear shorts and t-shirt"</td>
                    </tr>
                    <tr>
                        <td>60–80°F</td>
                        <td>"Wear light jacket"</td>
                    </tr>
                    <tr>
                        <td>40–59°F</td>
                        <td>"Wear warm clothes"</td>
                    </tr>
                    <tr>
                        <td>Below 40°F</td>
                        <td>"Bundle up!"</td>
                    </tr>
                </table>

                <textarea class="answer-area" placeholder="Write your program here..."></textarea>
            </div>

            <!-- Section IV -->
            <div class="lesson-section">
                <h2 class="section-heading">IV. Debugging Challenge</h2>
                <p class="instruction">Find and fix the errors in the code below.</p>

                <div class="code-snippet">
                    <pre><code>temperature = input("Enter temperature: ")

if temperature = 32:
    print("Water freezes")

elif temperature >= 100
    print("Water boils")

else
    print("Water is liquid")</code></pre>
                </div>

                <p class="instruction">✅ Correct the code above and write your fixed version here:</p>
                <textarea class="answer-area" placeholder="Write your corrected code here..."></textarea>
            </div>

            <button class="submit-btn">Submit Answers</button>
        </section>
    </main>
</body>

</html>
