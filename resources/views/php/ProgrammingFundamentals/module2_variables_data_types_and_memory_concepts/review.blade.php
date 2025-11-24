<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 2 Review | CodeHearted</title>
    <meta name="description" content="Lesson 2">
    @vite('resources/css/modules/progfund/mod2/review2.css')
</head>

<body>
    <main class="lesson-content">
        <div class="review-container">
            <h1>Lesson 2: Variables, Data Types, and Memory Concepts</h1>

            <section class="objectives">
                <h2>🎯 Learning Objectives</h2>
                <p>By the end of this lesson, you will be able to:</p>
                <ul>
                    <li>Define what a variable is and how it is used in programming.</li>
                    <li>Identify different data types in Python.</li>
                    <li>Apply correct naming conventions for variables.</li>
                    <li>Understand memory management concepts in Python.</li>
                    <li>Explain type checking and dynamic typing.</li>
                </ul>
            </section>

            <section class="core-lesson">
                <h2>📘 Learning Materials & Core Lesson</h2>

                <h3>What is a Variable?</h3>
                <p>A <strong>variable</strong> is a named location in the computer's memory where we can store data. Think of computer memory like a giant warehouse with numbered storage boxes. Variables give these boxes meaningful names instead of just numbers.</p>

                <p><strong>Technical Definition:</strong> A variable is a symbolic name associated with a memory location that contains data which can be modified during program execution.</p>

                <h3>Data Types — Different Kinds of Information</h3>
                <p>Computers need to know what type of data they’re working with. Here are Python’s basic data types:</p>

                <table class="data-table">
                    <tr>
                        <th>Data Type</th>
                        <th>Description</th>
                        <th>Example</th>
                    </tr>
                    <tr>
                        <td><strong>String (str)</strong></td>
                        <td>Text data enclosed in quotes</td>
                        <td>
                            <pre><code>name = "Alice"
message = "Hello there!"</code></pre>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Integer (int)</strong></td>
                        <td>Whole numbers</td>
                        <td>
                            <pre><code>age = 25
score = -10</code></pre>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Float</strong></td>
                        <td>Decimal numbers (also called “floating-point” numbers)</td>
                        <td>
                            <pre><code>price = 12.99
temperature = -5.5</code></pre>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Boolean (bool)</strong></td>
                        <td>True or False values (named after mathematician George Boole)</td>
                        <td>
                            <pre><code>is_student = True
is_raining = False</code></pre>
                        </td>
                    </tr>
                </table>

                <h3>Variable Naming Conventions</h3>
                <p>Professional programmers follow naming conventions to make code readable:</p>
                <ul>
                    <li>Use <strong>snake_case</strong> in Python: <code>student_name</code>, <code>total_score</code></li>
                    <li>Be descriptive: use <code>age</code> not <code>a</code>, or <code>student_count</code> not <code>sc</code></li>
                    <li>Start with letters or underscore, not numbers</li>
                    <li>Avoid reserved words (like <code>if</code>, <code>for</code>, <code>def</code>)</li>
                </ul>

                <h4>Good vs. Bad Variable Names</h4>
                <div class="code-comparison">
                    <div class="good">
                        <h5>✅ Good Variable Names</h5>
                        <pre><code>student_age = 20
total_price = 15.99
is_logged_in = True</code></pre>
                    </div>
                    <div class="bad">
                        <h5>❌ Bad Variable Names</h5>
                        <pre><code>a = 20
x = 15.99
flag = True</code></pre>
                    </div>
                </div>

                <h3>Important Programming Terms</h3>
                <ul>
                    <li><strong>Declaration:</strong> Creating a variable.</li>
                    <li><strong>Assignment:</strong> Giving a variable a value using an equal sign (<code>=</code>).</li>
                    <li><strong>Initialization:</strong> Declaration + assignment in one step.</li>
                    <li><strong>Identifier:</strong> The name of a variable.</li>
                    <li><strong>Literal:</strong> A fixed value in code (like <code>5</code> or <code>"hello"</code>).</li>
                    <li><strong>Expression:</strong> Code that evaluates to a value.</li>
                </ul>

                <h3>Memory Management Concepts</h3>
                <p>When you create a variable, Python:</p>
                <ul>
                    <li>Allocates memory space</li>
                    <li>Stores the value</li>
                    <li>Associates the name with that memory location</li>
                    <li>Handles cleanup automatically (called <strong>garbage collection</strong>)</li>
                </ul>

                <h3>Type Checking and Dynamic Typing</h3>
                <p>Python is <strong>dynamically typed</strong>, meaning variables can change types:</p>

                <div class="code-snippet">
                    <pre><code>data = "Hello"      # data is a string
data = 42           # now data is an integer
data = True         # now data is a boolean
</code></pre>
                </div>

                <p>Use <code>type()</code> to check a variable’s type:</p>
                <div class="code-snippet">
                    <pre><code>name = "Alice"
print(type(name))</code></pre>
                </div>

                <p><strong>Output:</strong></p>
                <div class="code-snippet">
                    <pre><code>&lt;class 'str'&gt;</code></pre>
                </div>
            </section>

            <section class="references">
                <h2>📚 References</h2>
                <ul>
                    <li>Lutz, M. (2013). <em>Learning Python</em> (5th ed.). O'Reilly Media. Chapter 4: Introducing Python Object Types.</li>
                    <li>Matthes, E. (2019). <em>Python Crash Course</em> (2nd ed.). No Starch Press. Chapter 2: Variables and Simple Data Types.</li>
                    <li>PEP 8 -- Style Guide for Python Code. Python Software Foundation. <a href="https://pep8.org/" target="_blank">https://pep8.org/</a></li>
                    <li>Boole, G. (1854). <em>An Investigation of the Laws of Thought.</em> Macmillan. (Historical reference for Boolean logic)</li>
                    <li>Wilson, G., et al. (2014). <em>Best Practices for Scientific Computing.</em> PLoS Biology, 12(1), e1001745.</li>
                </ul>
            </section>

            <div class="lesson-nav">
                <a href="{{ route('progfund.mod2.practice') }}" class="action-button">Go to Practice</a>
                <a href="{{ route('progfund.mod2.practice') }}" class="action-button" style="margin-left:8px;">Take Quiz</a>
            </div>
        </div>
    </main>
</body>

</body>

</html>
