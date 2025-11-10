<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 5 Review | CodeHearted</title>
    <meta name="description" content="Lesson 5: Iteration and Loops in Python">
    <link rel="stylesheet" href="../module5_loops_and_iterations/review5.css?php echo time(); ?>">
</head>

<body>
    <main class="lesson-content">
        <div class="review-container">
            <h1>Lesson 5: Iteration and Loops in Python</h1>

            <!-- Learning Objectives -->
            <section class="objectives">
                <h2>🎯 Learning Objectives</h2>
                <p>By the end of this lesson, you will be able to:</p>
                <ul>
                    <li>Explain what iteration means in programming.</li>
                    <li>Differentiate between <code>for</code> and <code>while</code> loops.</li>
                    <li>Use <code>break</code>, <code>continue</code>, and <code>pass</code> to control loop behavior.</li>
                    <li>Write nested loops and understand loop flow control.</li>
                    <li>Apply iteration to solve practical programming problems.</li>
                </ul>
            </section>

            <!-- Core Lesson -->
            <section class="core-lesson">
                <h2>📘 Learning Materials & Core Lesson</h2>

                <h3>What is Iteration?</h3>
                <p><strong>Iteration</strong> means repeating a block of code multiple times. Loops are structures that let programs repeat actions efficiently.</p>

                <h3>The <code>for</code> Loop</h3>
                <p>The <code>for</code> loop repeats a set of statements a specific number of times.</p>
                <div class="code-snippet">
                    <pre><code>for i in range(5):
    print("Hello, world!")</code></pre>
                </div>
                <p>This program prints “Hello, world!” five times. The variable <code>i</code> takes values from 0 to 4.</p>

                <h3>The <code>while</code> Loop</h3>
                <p>The <code>while</code> loop repeats as long as a condition remains <code>True</code>.</p>
                <div class="code-snippet">
                    <pre><code>count = 0
while count < 3:
    print("Looping...")
    count += 1</code></pre>
                </div>
                <p>This will print “Looping...” three times and then stop once <code>count</code> reaches 3.</p>

                <h3>Loop Control Statements</h3>
                <ul>
                    <li><strong>break</strong> — Ends the loop immediately.</li>
                    <li><strong>continue</strong> — Skips the rest of the current iteration and moves to the next.</li>
                    <li><strong>pass</strong> — Does nothing; serves as a placeholder.</li>
                </ul>

                <div class="code-snippet">
                    <pre><code>for num in range(5):
    if num == 3:
        break
    print(num)
# Output: 0 1 2</code></pre>
                </div>

                <h3>Nested Loops</h3>
                <p>A <strong>nested loop</strong> means placing one loop inside another. They are useful for working with grids or tables.</p>
                <div class="code-snippet">
                    <pre><code>for i in range(3):
    for j in range(2):
        print(f"i={i}, j={j}")</code></pre>
                </div>

                <h3>Common Loop Errors</h3>
                <ul>
                    <li><strong>Infinite Loops:</strong> Occur when the condition in a <code>while</code> loop never becomes False.</li>
                    <div class="code-snippet">
                        <pre><code># Be careful:
while True:
    print("This will run forever!")</code></pre>
                    </div>

                    <li><strong>Off-by-One Errors:</strong> Happen when the loop runs one too many or one too few times.</li>
                    <div class="code-snippet">
                        <pre><code># range(5) → runs 5 times (0–4)
for i in range(5):
    print(i)</code></pre>
                    </div>
                </ul>

                <h3>Using Loops with Conditionals</h3>
                <p>Loops often work together with conditionals for decision-making within iterations.</p>
                <div class="code-snippet">
                    <pre><code>for num in range(1, 6):
    if num % 2 == 0:
        print(f"{num} is even")
    else:
        print(f"{num} is odd")</code></pre>
                </div>

                <h3>Practical Example — Countdown</h3>
                <div class="code-snippet">
                    <pre><code>import time

for i in range(5, 0, -1):
    print(i)
    time.sleep(1)

print("Blast off!")</code></pre>
                </div>
            </section>

            <!-- References -->
            <section class="references">
                <h2>📚 References</h2>
                <ul>
                    <li>Lutz, M. (2013). <em>Learning Python</em> (5th ed.). O'Reilly Media. Chapter 13: Iterations and Comprehensions.</li>
                    <li>Matthes, E. (2019). <em>Python Crash Course</em> (2nd ed.). No Starch Press. Chapter 7: While Loops and Input.</li>
                    <li>PEP 8 – Style Guide for Python Code. Python Software Foundation. <a href="https://pep8.org/" target="_blank">https://pep8.org/</a></li>
                    <li>Wilson, G., et al. (2014). <em>Best Practices for Scientific Computing.</em> PLoS Biology, 12(1), e1001745.</li>
                </ul>
            </section>

            <!-- Navigation Buttons -->
            <div class="lesson-nav">
                <a href="practice.php?module=5" class="action-button">Go to Practice</a>
                <a href="quiz.php?module=5" class="action-button" style="margin-left:8px;">Take Quiz</a>
            </div>
        </div>
    </main>
</body>

</html>
