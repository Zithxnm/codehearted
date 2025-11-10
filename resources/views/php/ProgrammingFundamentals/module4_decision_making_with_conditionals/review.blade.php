<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 4 Review | CodeHearted</title>
    <meta name="description" content="Lesson 4: Control Flow and Conditional Logic">
    <link rel="stylesheet" href="../module4_decision_making_with_conditionals/review4.css?php echo time(); ?>">
</head>

<body>
    <main class="lesson-content">
        <div class="review-container">
            <h1>Lesson 4: Control Flow and Conditional Logic</h1>

            <!-- Learning Objectives -->
            <section class="objectives">
                <h2>🎯 Learning Objectives</h2>
                <p>By the end of this lesson, you will be able to:</p>
                <ul>
                    <li>Explain what control flow is and how it affects program execution.</li>
                    <li>Use <code>if</code>, <code>elif</code>, and <code>else</code> statements to make decisions in Python.</li>
                    <li>Understand Boolean values and logical operators (<code>and</code>, <code>or</code>, <code>not</code>).</li>
                    <li>Recognize common logical errors and how to debug them.</li>
                    <li>Apply nested conditionals and error handling in real-world scenarios.</li>
                </ul>
            </section>

            <!-- Core Lesson -->
            <section class="core-lesson">
                <h2>📘 Learning Materials & Core Lesson</h2>

                <h3>Control Flow and Conditional Logic</h3>
                <p><strong>Control flow</strong> refers to the order in which program instructions are executed. Conditional statements allow programs to make decisions and choose different paths based on conditions.</p>

                <h3>The Boolean Data Type — Foundation of Logic</h3>
                <p>Named after mathematician <strong>George Boole</strong> (1815–1864), Boolean logic uses only two values:</p>

                <ul>
                    <li><strong>True</strong> — equivalent to 1</li>
                    <li><strong>False</strong> — equivalent to 0</li>
                </ul>

                <div class="code-snippet">
                    <pre><code>is_sunny = True
is_raining = False
print(type(is_sunny))  # &lt;class 'bool'&gt;</code></pre>
                </div>

                <h3>Comparison Operators</h3>
                <p>Comparison (relational) operators compare values and return Boolean results:</p>

                <ul>
                    <li><code>==</code> — Equal to</li>
                    <li><code>!=</code> — Not equal to</li>
                    <li><code>&gt;</code> — Greater than</li>
                    <li><code>&lt;</code> — Less than</li>
                    <li><code>&gt;=</code> — Greater than or equal to</li>
                    <li><code>&lt;=</code> — Less than or equal to</li>
                </ul>

                <div class="code-snippet">
                    <pre><code>5 == 5      # True
5 != 3      # True
10 &gt; 5      # True
3 &lt; 7       # True
5 &gt;= 5      # True</code></pre>
                </div>

                <h3>Logical Operators</h3>
                <p>Logical operators combine Boolean values:</p>

                <h4>AND (<code>and</code>)</h4>
                <p>Both conditions must be True.</p>
                <div class="code-snippet">
                    <pre><code>True and True   # True
True and False  # False</code></pre>
                </div>

                <h4>OR (<code>or</code>)</h4>
                <p>At least one condition must be True.</p>
                <div class="code-snippet">
                    <pre><code>True or False   # True
False or False  # False</code></pre>
                </div>

                <h4>NOT (<code>not</code>)</h4>
                <p>Reverses the Boolean value.</p>
                <div class="code-snippet">
                    <pre><code>not True    # False
not False   # True</code></pre>
                </div>

                <h3>The <code>if</code> Statement — Basic Decision Making</h3>
                <p><strong>Syntax:</strong></p>
                <div class="code-snippet">
                    <pre><code>if condition:
    # This code runs if condition is True
    statement1
    statement2</code></pre>
                </div>

                <p><strong>Example:</strong></p>
                <div class="code-snippet">
                    <pre><code>age = int(input("Enter your age: "))
if age >= 18:
    print("You are an adult.")
    print("You can vote.")</code></pre>
                </div>

                <h3>If–Else Statements — Two-way Decisions</h3>
                <div class="code-snippet">
                    <pre><code>weather = input("Is it sunny or rainy? ")

if weather == "sunny":
    print("Perfect day for a picnic!")
else:
    print("Good day to stay inside!")</code></pre>
                </div>

                <h3><code>elif</code> (Else If) — Multiple Conditions</h3>
                <div class="code-snippet">
                    <pre><code>grade = int(input("Enter your grade (0–100): "))

if grade >= 90:
    letter = "A"
elif grade >= 80:
    letter = "B"
elif grade >= 70:
    letter = "C"
elif grade >= 60:
    letter = "D"
else:
    letter = "F"

print(f"Your letter grade is: {letter}")</code></pre>
                </div>

                <h3>Nested Conditionals</h3>
                <p>You can place one conditional inside another for more specific logic.</p>
                <div class="code-snippet">
                    <pre><code>weather = input("What's the weather? ")

if weather == "sunny":
    temperature = int(input("What's the temperature? "))
    if temperature > 75:
        print("Perfect beach weather!")
    else:
        print("Nice, but a bit cool.")
else:
    print("Maybe stay inside today.")</code></pre>
                </div>

                <h3>Common Logical Errors and Debugging</h3>
                <ul>
                    <li><strong>Assignment vs Comparison:</strong> Using <code>=</code> instead of <code>==</code>.</li>
                    <div class="code-snippet">
                        <pre><code># Wrong
if age = 18:  # SyntaxError!

# Correct
if age == 18:</code></pre>
                    </div>

                    <li><strong>String vs Number Comparison:</strong> Remember, <code>input()</code> returns a string.</li>
                    <div class="code-snippet">
                        <pre><code># Wrong
age = input("Age: ")
if age > 18:  # Error

# Correct
age = int(input("Age: "))
if age > 18:</code></pre>
                    </div>
                </ul>

                <h3>Professional Programming Terms</h3>
                <ul>
                    <li><strong>Branch:</strong> A path of execution in conditional code.</li>
                    <li><strong>Boolean Expression:</strong> An expression that evaluates to True or False.</li>
                    <li><strong>Short-circuit Evaluation:</strong> Logical operators stop evaluating once the result is determined.</li>
                    <li><strong>Truthy/Falsy:</strong> Values that behave like True or False in Boolean contexts.</li>
                    <li><strong>Code Path:</strong> A possible route through the program.</li>
                    <li><strong>Edge Case:</strong> Unusual input that might cause unexpected behavior.</li>
                </ul>

                <h3>Error Handling for Input</h3>
                <p>Users don’t always enter valid data. Here’s a simple way to prevent errors:</p>
                <div class="code-snippet">
                    <pre><code>try:
    age = int(input("Enter your age: "))
    print(f"You are {age} years old.")
except ValueError:
    print("Please enter a valid number.")</code></pre>
                </div>
            </section>

            <!-- References -->
            <section class="references">
                <h2>📚 References</h2>
                <ul>
                    <li>Lutz, M. (2013). <em>Learning Python</em> (5th ed.). O'Reilly Media.</li>
                    <li>Matthes, E. (2019). <em>Python Crash Course</em> (2nd ed.). No Starch Press.</li>
                    <li>PEP 8 – Style Guide for Python Code. Python Software Foundation. <a href="https://pep8.org/" target="_blank">https://pep8.org/</a></li>
                    <li>Boole, G. (1854). <em>An Investigation of the Laws of Thought.</em> Macmillan.</li>
                    <li>Wilson, G., et al. (2014). <em>Best Practices for Scientific Computing.</em> PLoS Biology, 12(1), e1001745.</li>
                </ul>
            </section>

            <!-- Navigation Buttons -->
            <div class="lesson-nav">
                <a href="practice.php?module=4" class="action-button">Go to Practice</a>
                <a href="quiz.php?module=4" class="action-button" style="margin-left:8px;">Take Quiz</a>
            </div>
        </div>
    </main>
</body>

</html>
