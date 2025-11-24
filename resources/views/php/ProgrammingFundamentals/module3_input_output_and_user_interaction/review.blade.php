<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 3 Review | CodeHearted</title>
    <meta name="description" content="Lesson 3: Input and Output Fundamentals">
    @vite('resources/css/modules/progfund/mod3/review3.css')
</head>

<body>
    <main class="lesson-content">
        <div class="review-container">
            <h1>Lesson 3: Input and Output (I/O) Fundamentals</h1>

            <!-- Learning Objectives -->
            <section class="objectives">
                <h2>🎯 Learning Objectives</h2>
                <p>By the end of this lesson, you will be able to:</p>
                <ul>
                    <li>Define Input and Output (I/O) in programming.</li>
                    <li>Use the <code>print()</code> and <code>input()</code> functions in Python.</li>
                    <li>Understand the concept of type conversion (casting).</li>
                    <li>Apply string concatenation and formatted strings (f-strings).</li>
                    <li>Recognize key terms related to user interaction and error handling.</li>
                </ul>
            </section>

            <!-- Core Lesson -->
            <section class="core-lesson">
                <h2>📘 Learning Materials & Core Lesson</h2>

                <h3>Input/Output (I/O) Fundamentals</h3>
                <p><strong>Input/Output (I/O)</strong> refers to the communication between a program and the outside world. This is fundamental to interactive programming.</p>

                <ul>
                    <li><strong>Input:</strong> Data that flows into a program (keyboard, files, sensors, etc.)</li>
                    <li><strong>Output:</strong> Data that flows out of a program (screen, files, speakers, etc.)</li>
                </ul>

                <p>Python provides two standard channels:</p>
                <ul>
                    <li><strong>Standard Input (stdin):</strong> Default input source, usually the keyboard.</li>
                    <li><strong>Standard Output (stdout):</strong> Default output destination, usually the screen.</li>
                </ul>

                <h3>The <code>print()</code> Function — Understanding Output</h3>
                <p>The <code>print()</code> function is a built-in Python function that sends data to standard output.</p>

                <div class="code-snippet">
                    <pre><code>print("Hello, World!")        # Basic output
print("Value:", 42)           # Multiple items
print("Line 1\nLine 2")       # Newline character
print("Text", end=" ")        # Custom ending
print("continues on same line")</code></pre>
                </div>

                <h3>Important Terms</h3>
                <ul>
                    <li><strong>Function:</strong> A reusable block of code that performs a specific task.</li>
                    <li><strong>Argument:</strong> Data passed to a function.</li>
                    <li><strong>Parameter:</strong> Variable that receives an argument.</li>
                    <li><strong>Built-in Function:</strong> A function provided by Python (like <code>print()</code> or <code>input()</code>).</li>
                </ul>

                <h3>Professional Programming Terms</h3>
                <ul>
                    <li><strong>User Interface (UI):</strong> How users interact with a program.</li>
                    <li><strong>User Experience (UX):</strong> How easy and pleasant the program is to use.</li>
                    <li><strong>Prompt:</strong> Text that asks the user for input.</li>
                    <li><strong>Validation:</strong> Checking if user input is correct or acceptable.</li>
                    <li><strong>Exception:</strong> An error that occurs during program execution.</li>
                    <li><strong>Exception Handling:</strong> Code that deals with errors gracefully.</li>
                </ul>

                <h3>The <code>input()</code> Function — Getting User Data</h3>
                <p>The <code>input()</code> function reads data from standard input and always returns a <strong>string</strong>.</p>

                <div class="code-snippet">
                    <pre><code>name = input("Enter your name: ")
print("Hello, " + name)</code></pre>
                </div>

                <p><strong>Critical Concept:</strong> The <code>input()</code> function <em>always</em> returns text — even if the user types a number!</p>

                <div class="code-snippet">
                    <pre><code>age = input("Enter your age: ")
print(type(age))   # &lt;class 'str'&gt; — it’s text, not a number!</code></pre>
                </div>

                <h3>Type Conversion (Casting)</h3>
                <p>Sometimes you need to convert between data types. This is called <strong>type conversion</strong> or <strong>casting</strong>.</p>

                <div class="code-snippet">
                    <pre><code># Converting string to integer
age_str = input("Enter your age: ")
age_int = int(age_str)

# Converting string to float
price_str = input("Enter price: ")
price_float = float(price_str)

# Converting number to string
number = 42
number_str = str(number)</code></pre>
                </div>

                <h3>String Concatenation and Formatting</h3>
                <p><strong>Concatenation</strong> means joining strings together:</p>

                <div class="code-snippet">
                    <pre><code>first_name = "Alice"
last_name = "Johnson"
full_name = first_name + " " + last_name</code></pre>
                </div>

                <p><strong>f-strings</strong> provide a modern way to format output:</p>
                <div class="code-snippet">
                    <pre><code>name = "Bob"
age = 25
print(f"My name is {name} and I am {age} years old.")</code></pre>
                </div>

                <h3>Error Handling for Input</h3>
                <ul>
                    <li><strong>Branch:</strong> A path of execution in conditional code.</li>
                    <li><strong>Boolean Expression:</strong> An expression that evaluates to True or False.</li>
                    <li><strong>Short-circuit Evaluation:</strong> Logical operators stop evaluating once the result is determined.</li>
                    <li><strong>Truthy/Falsy:</strong> Values that behave like True or False in Boolean contexts.</li>
                    <li><strong>Code Path:</strong> A possible route through the program.</li>
                    <li><strong>Edge Case:</strong> Unusual input that might cause unexpected behavior.</li>
                </ul>
            </section>

            <!-- References -->
            <section class="references">
                <h2>📚 References</h2>
                <ul>
                    <li>Lutz, M. (2013). <em>Learning Python</em> (5th ed.). O'Reilly Media.</li>
                    <li>Matthes, E. (2019). <em>Python Crash Course</em> (2nd ed.). No Starch Press.</li>
                    <li>PEP 8 – Style Guide for Python Code. Python Software Foundation. <a href="https://pep8.org/" target="_blank">https://pep8.org/</a></li>
                    <li>Wilson, G., et al. (2014). <em>Best Practices for Scientific Computing.</em> PLoS Biology, 12(1), e1001745.</li>
                </ul>
            </section>

            <!-- Navigation Buttons -->
            <div class="lesson-nav">
                <a href="{{ route('progfund.mod3.practice') }}" class="action-button">Go to Practice</a>
                <a href="{{ route('progfund.mod3.practice') }}" class="action-button" style="margin-left:8px;">Take Quiz</a>
            </div>
        </div>
    </main>
</body>

</html>
