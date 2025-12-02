<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Module;
use App\Models\Review;
use App\Models\Practice;
use App\Models\PracticeQuestion;
use App\Models\PracticeOption;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\QuizOption;
use PhpParser\Node\Expr\AssignOp\Mod;

/*
Main Issues:
- Quizzes need validation na required lahat sagutin (assuming again na dipa tapos and aware ka)
- Matching Table Practice Mod 1 - the formatting is off or iba, nag add ako ng few codes sa module_show to fix, wala naman nasira and nagshoshow naman sa page
*/

class ProgFundSeeder extends Seeder
{
    public function run(): void
    {
        $course = Course::create([
            'title' => 'Programming Fundamentals',
            'description' => 'Programming Fundamentals is all about learning how change works. Instead of diving deep into technical math,
                            this course helps non-STEM students see how limits and derivatives connect to real-life situations.
                            Its designed to build intuition, not just memorize formulas or mechanical applications for both.',
            'image_path' => 'imgs/Catalog_Programming.jpg',
            'objectives' => [
                'Understand core programming concepts including variables, functions, loops, and data structures.',
                'Learn how to break problems into smaller parts and design algorithms.',
                'Write functional code to solve real-world problems.'
            ]
        ]);

        $mod1 = Module::create([
            'course_id' => $course->id,
            'title' => 'Module 1: Introduction to Programming & Basic Terminology',
            'order' => 1,
        ]);

        $mod2 = Module::create([
            'course_id' => $course->id,
            'title' => 'Module 2: Variables, Data Types, and Memory Concepts',
            'order' => 2,
        ]);

        $mod3 = Module::create([
            'course_id' => $course->id,
            'title' => 'Module 3: Input, Output, and User Interaction',
            'order' => 3,
        ]);

        $mod4 = Module::create([
            'course_id' => $course->id,
            'title' => 'Module 4: Decision Making with Conditionals',
            'order' => 4,
        ]);

        $mod5 = Module::create([
            'course_id' => $course->id,
            'title' => 'Module 5: Loops and Iterations',
            'order' => 5,
        ]);

        // Review Modules
        // Module 1 Review
        // i assume alam mo siya, pero walang css ahaha
        Review::create([
            'module_id' => $mod1->id,
            'title' => 'Lesson 1: Introduction to Programming and Basic Terminology',
            'content' => '<h2>🎯 Learning Objectives</h2>
                        <p>By the end of this lesson, you will be able to:</p>
                        <ul>
                            <li>Define programming and explain what programmers do.</li>
                            <li>Understand key programming terminology.</li>
                            <li>Know what Python is and why it\'s good for beginners.</li>
                            <li>Create your first program.</li>
                            <li>Apply learning strategies that make programming easier.</li>
                        </ul>

                        <h2>📘 Learning Materials & Core Lesson</h2>

                        <h3>What is Programming?</h3>
                        <p>Programming (also called coding) is the process of creating instructions for computers to follow. A programmer (also called a developer or coder) writes these instructions in a special language that computers can understand.</p>

                        <p>Think of it like writing a recipe, but for computers:</p>
                        <ul>
                            <li>The recipe is called a <strong>program</strong> or <strong>software</strong>.</li>
                            <li>The instructions are written in a <strong>programming language</strong>.</li>
                            <li>The computer follows these instructions exactly.</li>
                        </ul>

                        <h3>Key Programming Terms You Should Know</h3>
                        <ul>
                            <li><strong>Algorithm:</strong> A step-by-step solution to a problem (like a recipe).</li>
                            <li><strong>Code:</strong> The instructions written in a programming language.</li>
                            <li><strong>Program:</strong> A complete set of instructions that performs a specific task.</li>
                            <li><strong>Syntax:</strong> The rules for writing code correctly (like grammar in English).</li>
                            <li><strong>Bug:</strong> An error in the code that causes problems.</li>
                            <li><strong>Debugging:</strong> The process of finding and fixing bugs.</li>
                            <li><strong>IDE:</strong> Integrated Development Environment — a tool used to write and test code.</li>
                        </ul>

                        <h3>What is Python?</h3>
                        <p>Python is a programming language created by <strong>Guido van Rossum</strong> in 199 It\'s named after the British comedy group "Monty Python\'s Flying Circus," not the snake!</p>

                        <p>Python is excellent for beginners because:</p>
                        <ul>
                            <li>It reads almost like English.</li>
                            <li>It has simple syntax rules.</li>
                            <li>It\'s used by major companies like Google, Netflix, and Instagram.</li>
                            <li>It has a large, helpful community.</li>
                        </ul>

                        <h3>Your First Program — Understanding "Hello, World!"</h3>
                        <p>Every programmer traditionally starts with a <strong>"Hello, World!"</strong> program. This began with the book <em>The C Programming Language</em> by Brian Kernighan and Dennis Ritchie in 1978.</p>

                        <div class="code-snippet">
                            <pre><code>print("Hello, World!")</code></pre>
                        </div>

                        <p><strong>Breaking it down:</strong></p>
                        <ul>
                            <li><strong>print</strong> — a function that performs a task.</li>
                            <li><strong>( )</strong> — tells Python to execute what\'s inside.</li>
                            <li><strong>" "</strong> — marks text or string data.</li>
                            <li>No semicolon is needed in Python!</li>
                        </ul>

                        <h3>Learning Strategies for Programming Success</h3>
                        <ul>
                            <li><strong>Practice Daily:</strong> Even 15–20 minutes a day helps more than long sessions once a week.</li>
                            <li><strong>Read Code Aloud:</strong> Helps you understand flow and catch errors.</li>
                            <li><strong>Start Small:</strong> Build simple programs before complex ones.</li>
                            <li><strong>Use Comments:</strong> Write notes in your code to remember its purpose.</li>
                            <li><strong>Don\'t Memorize — Understand:</strong> Focus on logic, not syntax.</li>
                            <li><strong>Make Mistakes:</strong> Errors are learning opportunities!</li>
                            <li><strong>Join Communities:</strong> Forums and groups can offer support and feedback.</li>
                        </ul>

                        <h2>📚 References</h2>
                        <ul>
                            <li>Kernighan, B. W., & Ritchie, D. M. (1978). <em>The C Programming Language</em>. Prentice Hall.</li>
                            <li>van Rossum, G. (1995). <em>Python Tutorial</em>. Python Software Foundation.</li>
                            <li>Wing, J. M. (2006). <em>Computational Thinking</em>. Communications of the ACM, 49(3), 33–35.</li>
                            <li>Pears, A., et al. (2007). <em>A Survey of Literature on the Teaching of Introductory Programming</em>. ACM SIGCSE Bulletin, 39(4), 204–223.</li>
                        </ul>',
        ]);

        // Module 2 Review
        Review::create([
            'module_id' => $mod2->id,
            'title' => 'Lesson 2: Variables, Data Types, and Memory Concepts',
            'content' => '<h2>🎯 Learning Objectives</h2>
                        <p>By the end of this lesson, you will be able to:</p>
                        <ul>
                            <li>Define what a variable is and how it is used in programming.</li>
                            <li>Identify different data types in Python.</li>
                            <li>Apply correct naming conventions for variables.</li>
                            <li>Understand memory management concepts in Python.</li>
                            <li>Explain type checking and dynamic typing.</li>
                        </ul>

                        <h2>📘 Learning Materials & Core Lesson</h2>

                        <h3>What is a Variable?</h3>
                        <p>A <strong>variable</strong> is a named location in the computer\'s memory where we can store data. Think of computer memory like a giant warehouse with numbered storage boxes. Variables give these boxes meaningful names instead of just numbers.</p>

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
                        data = True         # now data is a boolean</code></pre>
                        </div>

                        <p>Use <code>type()</code> to check a variable’s type:</p>

                        <div class="code-snippet">
                            <pre><code>name = "Alice"
                        print(type(name))</code></pre>
                        </div>

                        <p><strong>Output:</strong></p>

                        <div class="code-snippet">
                            <pre><code>&lt;class \'str\'&gt;</code></pre>
                        </div>

                        <h2>📚 References</h2>
                        <ul>
                            <li>Lutz, M. (2013). <em>Learning Python</em> (5th ed.). O\'Reilly Media. Chapter 4: Introducing Python Object Types.</li>
                            <li>Matthes, E. (2019). <em>Python Crash Course</em> (2nd ed.). No Starch Press. Chapter 2: Variables and Simple Data Types.</li>
                            <li>PEP 8 -- Style Guide for Python Code. Python Software Foundation. https://pep8.org/</li>
                            <li>Boole, G. (1854). <em>An Investigation of the Laws of Thought.</em> Macmillan.</li>
                            <li>Wilson, G., et al. (2014). <em>Best Practices for Scientific Computing.</em> PLoS Biology, 12(1), e1001745.</li>
                        </ul>'
        ]);

        // Module 3 Review
        Review::create([
            'module_id' => $mod3->id,
            'title' => 'Lesson 3: Input, Output, and User Interaction',
            'content' => '<h2>🎯 Learning Objectives</h2>
                        <p>By the end of this lesson, you will be able to:</p>
                        <ul>
                            <li>Define Input and Output (I/O) in programming.</li>
                            <li>Use the <code>print()</code> and <code>input()</code> functions in Python.</li>
                            <li>Understand the concept of type conversion (casting).</li>
                            <li>Apply string concatenation and formatted strings (f-strings).</li>
                            <li>Recognize key terms related to user interaction and error handling.</li>
                        </ul>

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
            print(type(age))   # &lt;class ’str’&gt; — it’s text, not a number!</code></pre>
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

                        <h2>📚 References</h2>
                        <ul>
                            <li>Lutz, M. (2013). <em>Learning Python</em> (5th ed.). O\'Reilly Media.</li>
                            <li>Matthes, E. (2019). <em>Python Crash Course</em> (2nd ed.). No Starch Press.</li>
                            <li>PEP 8 – Style Guide for Python Code. Python Software Foundation. https://pep8.org/</li>
                            <li>Wilson, G., et al. (2014). <em>Best Practices for Scientific Computing.</em> PLoS Biology, 12(1), e1001745.</li>
                        </ul>',
        ]);

        // Module 4 Review
        Review::create([
            'module_id' => $mod4->id,
            'title' => 'Lesson 4: Control Flow and Conditional Logic',
            'content' => '<h2>🎯 Learning Objectives</h2>
                        <p>By the end of this lesson, you will be able to:</p>
                        <ul>
                            <li>Explain what control flow is and how it affects program execution.</li>
                            <li>Use <code>if</code>, <code>elif</code>, and <code>else</code> statements to make decisions in Python.</li>
                            <li>Understand Boolean values and logical operators (<code>and</code>, <code>or</code>, <code>not</code>).</li>
                            <li>Recognize common logical errors and how to debug them.</li>
                            <li>Apply nested conditionals and error handling in real-world scenarios.</li>
                        </ul>

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
        print(type(is_sunny))  # &lt;class \'bool\'&gt;</code></pre>
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
        if age &gt;= 18:
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

        if grade &gt;= 90:
            letter = "A"
        elif grade &gt;= 80:
            letter = "B"
        elif grade &gt;= 70:
            letter = "C"
        elif grade &gt;= 60:
            letter = "D"
        else:
            letter = "F"

        print(f"Your letter grade is: {letter}")</code></pre>
                        </div>

                        <h3>Nested Conditionals</h3>
                        <p>You can place one conditional inside another for more specific logic.</p>
                        <div class="code-snippet">
                            <pre><code>weather = input("What\'s the weather? ")

        if weather == "sunny":
            temperature = int(input("What\'s the temperature? "))
            if temperature &gt; 75:
                print("Perfect beach weather!")
            else:
                print("Nice, but a bit cool.")
        else:
            print("Maybe stay inside today.")</code></pre>
                        </div>

                        <h3>Common Logical Errors and Debugging</h3>
                        <ul>
                            <li><strong>Assignment vs Comparison:</strong> Using <code>=</code> instead of <code>==</code>.</li>
                        </ul>

                        <div class="code-snippet">
                            <pre><code># Wrong
        if age = 18:  # SyntaxError!

        # Correct
        if age == 18:</code></pre>
                        </div>

                        <ul>
                            <li><strong>String vs Number Comparison:</strong> Remember, <code>input()</code> returns a string.</li>
                        </ul>

                        <div class="code-snippet">
                            <pre><code># Wrong
        age = input("Age: ")
        if age &gt; 18:  # Error

        # Correct
        age = int(input("Age: "))
        if age &gt; 18:</code></pre>
                        </div>

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

                        <h2>📚 References</h2>
                        <ul>
                            <li>Lutz, M. (2013). <em>Learning Python</em> (5th ed.). O\'Reilly Media.</li>
                            <li>Matthes, E. (2019). <em>Python Crash Course</em> (2nd ed.). No Starch Press.</li>
                            <li>PEP 8 – Style Guide for Python Code. Python Software Foundation. https://pep8.org/</li>
                            <li>Boole, G. (1854). <em>An Investigation of the Laws of Thought.</em> Macmillan.</li>
                            <li>Wilson, G., et al. (2014). <em>Best Practices for Scientific Computing.</em> PLoS Biology, 12(1), e1001745.</li>
                        </ul>',
        ]);

        // Module 5 Review
        Review::create([
            'module_id' => $mod5->id,
            'title' => 'Lesson 5: Loops and Iterations',
            'content' => '<h2>🎯 Learning Objectives</h2>
                        <p>By the end of this lesson, you will be able to:</p>
                        <ul>
                            <li>Explain what iteration means in programming.</li>
                            <li>Differentiate between <code>for</code> and <code>while</code> loops.</li>
                            <li>Use <code>break</code>, <code>continue</code>, and <code>pass</code> to control loop behavior.</li>
                            <li>Write nested loops and understand loop flow control.</li>
                            <li>Apply iteration to solve practical programming problems.</li>
                        </ul>

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
                        </ul>

                        <div class="code-snippet">
                        <pre><code># Be careful:
                        while True:
                            print("This will run forever!")</code></pre>
                        </div>

                        <ul>
                            <li><strong>Off-by-One Errors:</strong> Happen when the loop runs one too many or one too few times.</li>
                        </ul>

                        <div class="code-snippet">
                        <pre><code># range(5) → runs 5 times (0–4)
                        for i in range(5):
                            print(i)</code></pre>
                        </div>

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

                        <h2>📚 References</h2>
                        <ul>
                            <li>Lutz, M. (2013). <em>Learning Python</em> (5th ed.). O\'Reilly Media. Chapter 13: Iterations and Comprehensions.</li>
                            <li>Matthes, E. (2019). <em>Python Crash Course</em> (2nd ed.). No Starch Press. Chapter 7: While Loops and Input.</li>
                            <li>PEP 8 – Style Guide for Python Code. Python Software Foundation. https://pep8.org/</li>
                            <li>Wilson, G., et al. (2014). <em>Best Practices for Scientific Computing.</em> PLoS Biology, 12(1), e1001745.</li>
                        </ul>',
        ]);

        //Practice template
        // Lesson 1 Practices
        $prac1 = Practice::create([
            'module_id' => $mod1->id,
            'title' => 'Lesson 1 Practice: I. Understanding Terminology',
            'content' => '<p>Practice Questions</p>',
        ]);

        $pq1 = PracticeQuestion::create([
            'practice_id' => $prac1->id,
            'question_text' => "Match the term with its definition.",
            'type' => 'matching',
            'details' => [
                'pairs' => [
                    ['left' => 'Algorithm', 'right' => 'Step-by-step solution to a problem'],
                    ['left' => 'Bug', 'right' => 'An error in code'],
                    ['left' => 'Debugging', 'right' => 'Finding and fixing errors'],
                    ['left' => 'Syntax', 'right' => 'Rules for writing code correctly'],
                ]
            ]
        ]);

        $prac2 = Practice::create([
            'module_id' => $mod1->id,
            'title' => 'Lesson 1 Practice: II. Your First Program',
            'content' => '<p>Write a Program that Displays:</p>',
        ]);

        $pq2 = PracticeQuestion::create([
            'practice_id' => $prac2->id,
            'question_text' => "Your Name:",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'print("John Doe")',
            ]
        ]);

        $pq3 = PracticeQuestion::create([
            'practice_id' => $prac2->id,
            'question_text' => "Your Favorite Hobby:",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'print("Coding!")',
            ]
        ]);

        $pq4 = PracticeQuestion::create([
            'practice_id' => $prac2->id,
            'question_text' => "Programming Is Fun!",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'print("Programming Is Fun!")',
            ]
        ]);

        $prac3 = Practice::create([
            'module_id' => $mod1->id,
            'title' => 'Lesson 1 Practice: III. Code Reading',
            'content' => '<p>What Will Each Program Output?</p>',
        ]);

        $pq5 = PracticeQuestion::create([
            'practice_id' => $prac3->id,
            'question_text' => 'print("Welcome to Coding!")',
            'type' => 'trace_output',
            'details' => [
                'code_snippet' => 'Welcome to Coding!',
            ]
        ]);

        $pq6 = PracticeQuestion::create([
            'practice_id' => $prac3->id,
            'question_text' => 'print("Let`s Learn Together!")',
            'type' => 'trace_output',
            'details' => [
                'code_snippet' => 'Welcome to Coding!',
            ]
        ]);

        // Lesson 2 Practices
        $prac4 = Practice::create([
            'module_id' => $mod2->id,
            'title' => 'Lesson 2 Practice: I. Variable Creation',
            'content' => '<p>Create Variables for a Student Record</p>',
        ]);

        $pq7 = PracticeQuestion::create([
            'practice_id' => $prac4->id,
            'question_text' => "First Name: (String)",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'first_name = "Alice"',
            ]
        ]);

        $pq8 = PracticeQuestion::create([
            'practice_id' => $prac4->id,
            'question_text' => "Last name (String):",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'last_name = "Smith"',
            ]
        ]);

        $pq9 = PracticeQuestion::create([
            'practice_id' => $prac4->id,
            'question_text' => "Grade level (integer):",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'grade_level = 10',
            ]
        ]);

        $pq10 = PracticeQuestion::create([
            'practice_id' => $prac4->id,
            'question_text' => "GWA (float):",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'gwa = 75',
            ]
        ]);

        $pq11 = PracticeQuestion::create([
            'practice_id' => $prac4->id,
            'question_text' => "Is enrolled (boolean):",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'is_enrolled = True',
            ]
        ]);

        $prac5 = Practice::create([
            'module_id' => $mod2->id,
            'title' => 'Lesson 2 Practice: II. Identifying Data Types',
            'content' => '<p>What Data Type is Each Literal</p>',
        ]);

        $pq12 = PracticeQuestion::create([
            'practice_id' => $prac5->id,
            'question_text' => '42',
            'type' => 'identification',
        ]);

        PracticeOption::create([
            'practice_question_id' => $pq12->id,
            'option_text' => 'Integer',
            'is_correct' => true,
        ]);

        $pq13 = PracticeQuestion::create([
            'practice_id' => $prac5->id,
            'question_text' => '“Python”',
            'type' => 'identification',
        ]);

        PracticeOption::create([
            'practice_question_id' => $pq13->id,
            'option_text' => 'String',
            'is_correct' => true,
        ]);

        $pq14 = PracticeQuestion::create([
            'practice_id' => $prac5->id,
            'question_text' => '3.14159',
            'type' => 'identification',
        ]);

        PracticeOption::create([
            'practice_question_id' => $pq14->id,
            'option_text' => 'Float',
            'is_correct' => true,
        ]);

        $pq15 = PracticeQuestion::create([
            'practice_id' => $prac5->id,
            'question_text' => 'False',
            'type' => 'identification',
        ]);

        PracticeOption::create([
            'practice_question_id' => $pq15->id,
            'option_text' => 'Boolean',
            'is_correct' => true,
        ]);

        $pq16 = PracticeQuestion::create([
            'practice_id' => $prac5->id,
            'question_text' => '‘A’',
            'type' => 'identification',
        ]);

        PracticeOption::create([
            'practice_question_id' => $pq16->id,
            'option_text' => 'Character',
            'is_correct' => true,
        ]);

        $prac6 = Practice::create([
            'module_id' => $mod2->id,
            'title' => 'Lesson 2 Practice: III. Debugging Code',
            'content' => '<p>Find the bugs in this code:</p>',
        ]);

        $pq17 = PracticeQuestion::create([
            'practice_id' => $prac6->id,
            'question_text' => '2student_name = "John"',
            'type' => 'find_bug',
        ]);

        PracticeOption::create([
            'practice_question_id' => $pq17->id,
            'option_text' => 'Variable names cannot start with a number.',
            'is_correct' => true,
        ]);

        $pq18 = PracticeQuestion::create([
            'practice_id' => $prac6->id,
            'question_text' => 'first name = "Alice"',
            'type' => 'find_bug',
        ]);

        PracticeOption::create([
            'practice_question_id' => $pq18->id,
            'option_text' => 'Variables cannot have spaces',
            'is_correct' => true,
        ]);

        $pq19 = PracticeQuestion::create([
            'practice_id' => $prac6->id,
            'question_text' => 'age = "twenty"',
            'type' => 'find_bug',
        ]);

        PracticeOption::create([
            'practice_question_id' => $pq19->id,
            'option_text' => 'Age should be an integer, not a string.',
            'is_correct' => true,
        ]);

        // Lesson 3 Practices
        $prac7 = Practice::create([
        'module_id' => $mod3->id,
        'title' => 'Lesson 3 Practice: I. Basic Input and Output',
        'content' => '<p>Create a Program That:</p>',
        ]);

        $pq20 = PracticeQuestion::create([
            'practice_id' => $prac7->id,
            'question_text' => "Asks for the user's first name",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'name = input("Enter your name: ")',
            ]
        ]);

        $pq21 = PracticeQuestion::create([
            'practice_id' => $prac7->id,
            'question_text' => "Asks for their favorite color",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'color = input("Enter your favorite color: ")',
            ]
        ]);

        $pq22 = PracticeQuestion::create([
            'practice_id' => $prac7->id,
            'question_text' => "Displays: “Hi, [name]! [color] is a nice color!”",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'print(f"Hi, {name}! {color} is a nice color!.")',
            ]
        ]);

        $prac8 = Practice::create([
            'module_id' => $mod3->id,
            'title' => 'Lesson 3 Practice: II. Type Conversion',
            'content' => '<p>Write a Program That:</p>',
        ]);

        $pq23 = PracticeQuestion::create([
            'practice_id' => $prac8->id,
            'question_text' => "Asks for two numbers",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'num1 = input("Enter first number: ")
                                    num2 = input("Enter second number: ")',
            ]
        ]);

        $pq24 = PracticeQuestion::create([
            'practice_id' => $prac8->id,
            'question_text' => "Converts them to integers",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'int_num1 = int(num1)
                                    int_num2 = int(num2)',
            ]
        ]);

        $pq25 = PracticeQuestion::create([
            'practice_id' => $prac8->id,
            'question_text' => "Display their sum",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'sum = int_num1 + int_num2
                                    print("The sum is:", sum)',
            ]
        ]);

        $prac9 = Practice::create([
            'module_id' => $mod3->id,
            'title' => 'Lesson 3 Practice: III. String Formatting',
            'content' => '<p>Create a program that asks for:</p>',
        ]);

        $pq26 = PracticeQuestion::create([
            'practice_id' => $prac9->id,
            'question_text' => "Product Name
                                Price (Integer)
                                Quantity (Integer)",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'product = input("Enter product name: ")
                                    price = int(input("Enter price: "))
                                    quantity = int(input("Enter quantity: "))',
            ]
        ]);

        $pq27 = PracticeQuestion::create([
            'practice_id' => $prac9->id,
            'question_text' => "Then displays: “You want [quantity] [product] at ₱[price] each.",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'print(f"You want {quantity} {product} at {price} each.")',
            ]
        ]);

        $prac10 = Practice::create([
            'module_id' => $mod3->id,
            'title' => 'Lesson 3 Practice: IV. Terminology',
            'content' => '<p>Explain what each term means in your own words.</p>',
        ]);

        $pq28 = PracticeQuestion::create([
            'practice_id' => $prac10->id,
            'question_text' => "Standard Input",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'Standard input is the default way a program receives input from the user, usually through the keyboard.',
            ]
        ]);

        $pq29 = PracticeQuestion::create([
            'practice_id' => $prac10->id,
            'question_text' => "Type Conversion",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'Type conversion, or casting, is the process of changing a variable from one data type to another, like from a string to an integer.',
            ]
        ]);

        $pq30 = PracticeQuestion::create([
            'practice_id' => $prac10->id,
            'question_text' => "String Concatenation",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'String concatenation is the process of joining two or more strings together to form a single string.',
            ]
        ]);

        $pq31 = PracticeQuestion::create([
            'practice_id' => $prac10->id,
            'question_text' => "Exception Handling",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'Exception handling is a way to manage errors in a program, allowing it to continue running or fail gracefully instead of crashing.',
            ]
        ]);

        // Lesson 4 Practices
        $prac11 = Practice::create([
            'module_id' => $mod4->id,
            'title' => 'Lesson 4 Practice: I. I. Basic Conditionals',
            'content' => '<p>Create a Program For:</p>',
        ]);

        $pq32 = PracticeQuestion::create([
            'practice_id' => $prac11->id,
            'question_text' => "Write a program that asks for a number and tells the user if it’s positive, negative, or zero.",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'num = float(input("Enter a number: "))
                                    if num > 0:
                                        print("Positive")
                                    elif num < 0:
                                        print("Negative")
                                    else:
                                        print("Zero")',
            ]
        ]);

        $prac12 = Practice::create([
            'module_id' => $mod4->id,
            'title' => 'Lesson 4 Practice: II. Logical Operators Practice',
            'content' => '<p>Create a program for a movie theater that checks the following conditions:</p>',
        ]);

        $pq33 = PracticeQuestion::create([
            'practice_id' => $prac12->id,
            'question_text' => "Create a program that checks: age must be 13 or older, and has_ticket must be True. If both are met, print 'Enjoy the movie'. Otherwise, print 'Access denied.'",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'age = int(input("Enter your age: "))
                                    has_ticket = input("Do you have a ticket? (True/False): ") == "True"
                                    if age >= 13 and has_ticket:
                                        print("Enjoy the movie")
                                    else:
                                        print("Access denied.")',
            ]
        ]);

        $prac13 = Practice::create([
            'module_id' => $mod4->id,
            'title' => 'Lesson 4 Practice: III. Multiple Conditions',
            'content' => '<p>Write a program that determines what to wear based on temperature:</p>',
        ]);

        $pq35 = PracticeQuestion::create([
            'practice_id' => $prac13->id,
            'question_text' => "Write a program that checks the temperature and prints the correct clothing recommendation.",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'temp = int(input("Enter temperature in °F: "))
                                    if temp > 80:
                                        print("Wear shorts and t-shirt")
                                    elif temp >= 60:
                                        print("Wear light jacket")
                                    elif temp >= 40:
                                        print("Wear warm clothes")
                                    else:
                                        print("Bundle up!")',
            ]
        ]);

        $prac14 = Practice::create([
            'module_id' => $mod4->id,
            'title' => 'Lesson 4 Practice: IV. Debugging Challenge',
            'content' => '<p>Find and fix the errors in the code below:</p>
                            <pre><code>temperature = input("Enter temperature: ")

                            if temperature = 32:
                                print("Water freezes")

                            elif temperature >= 100
                                print("Water boils")

                            else
                                print("Water is liquid")</code></pre>
                            <p>Correct the code above and write your fixed version here:</p>',
        ]);

        $pq36 = PracticeQuestion::create([
            'practice_id' => $prac14->id,
            'question_text' => "Fix the errors in the given code and write the corrected version.",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'temperature = int(input("Enter temperature: "))
                                    if temperature == 32:
                                        print("Water freezes")
                                    elif temperature >= 100:
                                        print("Water boils")
                                    else:
                                        print("Water is liquid")',
            ]
        ]);

        // Lesson 5 Practice
        $prac15 = Practice::create([
            'module_id' => $mod5->id,
            'title' => 'Lesson 5 Practice: I. Loop Basics',
            'content' => '<p>Create a Program That:</p>',
        ]);

        $pq37 = PracticeQuestion::create([
            'practice_id' => $prac15->id,
            'question_text' => "Asks the user for a number:",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'num = int(input("Enter a number: "))',
            ]
        ]);

        $pq38 = PracticeQuestion::create([
            'practice_id' => $prac15->id,
            'question_text' => "Prints all numbers from 1 to that number",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'for i in range(1, num + 1):
                                        print(i)',
            ]
        ]);

        $pq39 = PracticeQuestion::create([
            'practice_id' => $prac15->id,
            'question_text' => "Calculates and displays the sum",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'total = 0
                                    for i in range(1, num + 1):
                                        total += i
                                    print("Sum is:", total)',
            ]
        ]);

        $prac16 = Practice::create([
            'module_id' => $mod5->id,
            'title' => 'Lesson 5 Practice: II. While Loop',
            'content' => '<p>Create a Number Guessing Game:</p>',
        ]);

        $pq40 = PracticeQuestion::create([
            'practice_id' => $prac16->id,
            'question_text' => "Computer picks a random number from 1–10",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'import random
                                    number_to_guess = random.randint(1, 10)',
            ]
        ]);

        $pq41 = PracticeQuestion::create([
            'practice_id' => $prac16->id,
            'question_text' => "User keeps guessing until correct",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'guess = None
                                    while guess != number_to_guess:
                                        guess = int(input("Guess the number (1-10): "))',
            ]
        ]);

        $pq42 = PracticeQuestion::create([
            'practice_id' => $prac16->id,
            'question_text' => " Display <strong>“Too high”</strong>, <strong>“Too low”</strong>, or <strong>“Correct!”</strong></li>",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'if guess < number_to_guess:
                                        print("Too low")
                                    elif guess > number_to_guess:
                                        print("Too high")
                                    else:
                                        print("Correct!")',
            ]
        ]);

        $pq43 = PracticeQuestion::create([
            'practice_id' => $prac16->id,
            'question_text' => "Count and display the number of guesses",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'guess_count = 0
                                    while guess != number_to_guess:
                                        guess = int(input("Guess the number (1-10): "))
                                        guess_count += 1
                                    print(f"Correct! You guessed it in {guess_count} tries.")',
            ]
        ]);

        $prac17 = Practice::create([
            'module_id' => $mod5->id,
            'title' => 'Lesson 5 Practice: III. Nested Loops',
            'content' => 'Write a program that prints this pattern:
                             <pre><code>*
                                        **
                                        ***
                                        ****
                                        *****</code></pre>'
        ]);

        $pq44 = PracticeQuestion::create([
            'practice_id' => $prac17->id,
            'question_text' => "Use nested loops to print the pattern.",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'for i in range(1, 6):
                                        for j in range(i):
                                            print("*", end="")
                                        print()',
            ]
        ]);

        $prac18 = Practice::create([
            'module_id' => $mod5->id,
            'title' => 'Lesson 5 Practice: IV. Loop Control',
            'content' => '<p>Write a program that:</p>
                            <ul>
                                <li>Asks for numbers until the user enters 0</li>
                                <li>Skips negative numbers using <code>continue</code></li>
                                <li>Stops if the user enters 999 using <code>break</code></li>
                                <li>Displays the sum of positive numbers</li>
                            </ul>',
        ]);

        $pq45 = PracticeQuestion::create([
            'practice_id' => $prac18->id,
            'question_text' => "Write a program that follows the loop control rules shown above.",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'total = 0
                                    num = int(input("Enter a number: "))
                                    while num != 0:
                                        if num == 999:
                                            break
                                        if num < 0:
                                            num = int(input("Enter a number: "))
                                            continue
                                        total += num
                                        num = int(input("Enter a number: "))
                                    print("Sum of positive numbers:", total)',
            ]
        ]);

        // Quiz template
        // Lesson 1 Quiz
        $quiz1 = Quiz::create([
            'module_id' => $mod1->id,
            'title' => "Quiz for $mod1->title",
        ]);

        $q1 = Question::create([
            'quiz_id' => $quiz1->id,
            'question_text' => ' What is an algorithm?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q1->id,
            'option_text' => 'A programming language',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q1->id,
            'option_text' => 'A step-by-step problem solution',
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q1->id,
            'option_text' => 'A type of computer',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q1->id,
            'option_text' => 'An error in code',
            'is_correct' => false,
        ]);

        $q2 = Question::create([
            'quiz_id' => $quiz1->id,
            'question_text' => 'What does “debugging” mean?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q2->id,
            'option_text' => 'Adding bugs to code',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q2->id,
            'option_text' => 'Writing a new code',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q2->id,
            'option_text' => 'Finding and fixing errors in code',
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q2->id,
            'option_text' => 'Running a program',
            'is_correct' => false,
        ]);


        $q3 = Question::create([
            'quiz_id' => $quiz1->id,
            'question_text' => 'What will this code display? print("Learning Python")',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q3->id,
            'option_text' => 'Learning Python',
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q3->id,
            'option_text' => 'print("Learning Python")',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q3->id,
            'option_text' => '“Learning Python”',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q3->id,
            'option_text' => 'Nothing',
            'is_correct' => false,
        ]);


        $q4 = Question::create([
            'quiz_id' => $quiz1->id,
            'question_text' => 'Why is Python good for beginners?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q4->id,
            'option_text' => 'It’s the fastest language',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q4->id,
            'option_text' => 'It reads almost like English',
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q4->id,
            'option_text' => 'It’s the newest language',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q4->id,
            'option_text' => 'It only works on one type of computer',
            'is_correct' => false,
        ]);


        $q5 = Question::create([
            'quiz_id' => $quiz1->id,
            'question_text' => 'Fill in the blank: A ___________ is a complete set of instructions that performs a specific task.',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q5->id,
            'option_text' => 'Bug',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q5->id,
            'option_text' => 'Algorithm',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q5->id,
            'option_text' => 'Program',
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q5->id,
            'option_text' => 'Syntax',
            'is_correct' => false,
        ]);

        $quiz2 = Quiz::create([
            'module_id' => $mod2->id,
            'title' => "Quiz for $mod2->title",
        ]);

        $q6 = Question::create([
            'quiz_id' => $quiz2->id,
            'question_text' => 'What is a variable in programming?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q6->id,
            'option_text' => 'A number that changes',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q6->id,
            'option_text' => 'A named location in memory that stores data',
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q6->id,
            'option_text' => 'A type of computer program',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q6->id,
            'option_text' => 'A mathematical equation',
            'is_correct' => false,
        ]);

        $q7 = Question::create([
            'quiz_id' => $quiz2->id,
            'question_text' => 'Which data type would you use to store a person\'s age?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q7->id,
            'option_text' => 'String',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q7->id,
            'option_text' => 'Boolean',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q7->id,
            'option_text' => 'Integer',
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q7->id,
            'option_text' => 'Float',
            'is_correct' => false,
        ]);


        $q8 = Question::create([
            'quiz_id' => $quiz2->id,
            'question_text' => 'What is "snake_case"?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q8->id,
            'option_text' => 'A type of error',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q8->id,
            'option_text' => 'A naming convention using underscores',
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q8->id,
            'option_text' => 'A programming language',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q8->id,
            'option_text' => 'A debugging technique',
            'is_correct' => false,
        ]);


        $q9 = Question::create([
            'quiz_id' => $quiz2->id,
            'question_text' => 'What does "dynamically typed" mean?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q9->id,
            'option_text' => 'Variables must declare their type',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q9->id,
            'option_text' => 'Variables cannot change type',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q9->id,
            'option_text' => 'Variables can change type during program execution',
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q9->id,
            'option_text' => 'Variables don\'t have types',
            'is_correct' => false,
        ]);


        $q10 = Question::create([
            'quiz_id' => $quiz2->id,
            'question_text' => 'Which of these follows Python naming conventions?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q10->id,
            'option_text' => 'studentName',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q10->id,
            'option_text' => 'student-name',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q10->id,
            'option_text' => 'student_name',
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q10->id,
            'option_text' => '2student_name',
            'is_correct' => false,
        ]);


        $q11 = Question::create([
            'quiz_id' => $quiz2->id,
            'question_text' => 'What is "garbage collection"?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q11->id,
            'option_text' => 'Deleting old programs',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q11->id,
            'option_text' => 'Automatic memory cleanup',
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q11->id,
            'option_text' => 'Removing bugs from code',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q11->id,
            'option_text' => 'Organizing variable names',
            'is_correct' => false,
        ]);

        $quiz3 = Quiz::create([
            'module_id' => $mod3->id,
            'title' => "Quiz for $mod3->title",
        ]);

        $q12 = Question::create([
            'quiz_id' => $quiz3->id,
            'question_text' => 'What does I/O stand for?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q12->id,
            'option_text' => 'Internet Operations',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q12->id,
            'option_text' => 'Input/Output',
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q12->id,
            'option_text' => 'Internal Operations',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q12->id,
            'option_text' => 'Interface Options',
            'is_correct' => false,
        ]);


        $q13 = Question::create([
            'quiz_id' => $quiz3->id,
            'question_text' => 'What data type does input() always return?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q13->id,
            'option_text' => 'Integer',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q13->id,
            'option_text' => 'Float',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q13->id,
            'option_text' => 'String',
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q13->id,
            'option_text' => 'Boolean',
            'is_correct' => false,
        ]);


        $q14 = Question::create([
            'quiz_id' => $quiz3->id,
            'question_text' => 'What is "type conversion"?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q14->id,
            'option_text' => 'Changing variable names',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q14->id,
            'option_text' => 'Converting data from one type to another',
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q14->id,
            'option_text' => 'Converting programs to different languages',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q14->id,
            'option_text' => 'Converting files to different formats',
            'is_correct' => false,
        ]);


        $q15 = Question::create([
            'quiz_id' => $quiz3->id,
            'question_text' => 'What will this code display if the user types "25"?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q15->id,
            'option_text' => "<class 'int'>",
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q15->id,
            'option_text' => "<class 'str'>",
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q15->id,
            'option_text' => '25',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q15->id,
            'option_text' => 'age',
            'is_correct' => false,
        ]);


        $q16 = Question::create([
            'quiz_id' => $quiz3->id,
            'question_text' => 'What is string concatenation?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q16->id,
            'option_text' => 'Making strings shorter',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q16->id,
            'option_text' => 'Converting strings to numbers',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q16->id,
            'option_text' => 'Joining strings together',
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q16->id,
            'option_text' => 'Repeating strings',
            'is_correct' => false,
        ]);


        $q17 = Question::create([
            'quiz_id' => $quiz3->id,
            'question_text' => 'Which is the modern way to format strings in Python?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q17->id,
            'option_text' => '"Hello " + name',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q17->id,
            'option_text' => '"Hello %s" % name',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q17->id,
            'option_text' => 'f"Hello {name}"',
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q17->id,
            'option_text' => 'print("Hello", name)',
            'is_correct' => false,
        ]);


        $q18 = Question::create([
            'quiz_id' => $quiz3->id,
            'question_text' => 'What is a "prompt" in programming?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q18->id,
            'option_text' => 'A fast response',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q18->id,
            'option_text' => 'Text that asks the user for input',
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q18->id,
            'option_text' => 'An error message',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q18->id,
            'option_text' => 'A function name',
            'is_correct' => false,
        ]);

        $quiz4 = Quiz::create([
            'module_id' => $mod4->id,
            'title' => "Quiz for $mod4->title",
        ]);

        $q19 = Question::create([
            'quiz_id' => $quiz4->id,
            'question_text' => ' What is control flow?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q19->id,
            'option_text' => 'The speed of program execution',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q19->id,
            'option_text' => 'The order in which program instructions are executed',
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q19->id,
            'option_text' => 'The amount of data flowing through a program',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q19->id,
            'option_text' => 'The network connection speed',
            'is_correct' => false,
        ]);

        $q20 = Question::create([
            'quiz_id' => $quiz4->id,
            'question_text' => 'What does the == operator do?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q20->id,
            'option_text' => 'Assigns a value to a variable',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q20->id,
            'option_text' => 'Checks if two values are equal',
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q20->id,
            'option_text' => 'Adds two numbers',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q20->id,
            'option_text' => 'Compares which value is larger',
            'is_correct' => false,
        ]);

        $q21 = Question::create([
            'quiz_id' => $quiz4->id,
            'question_text' => 'What will this expression evaluate to: True and False?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q21->id,
            'option_text' => 'True',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q21->id,
            'option_text' => 'False',
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q21->id,
            'option_text' => 'Error',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q21->id,
            'option_text' => '1',
            'is_correct' => false,
        ]);

        $q22 = Question::create([
            'quiz_id' => $quiz4->id,
            'question_text' => 'How many spaces should you use for indentation in Python?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q22->id,
            'option_text' => '2',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q22->id,
            'option_text' => '3',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q22->id,
            'option_text' => '4',
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q22->id,
            'option_text' => '8',
            'is_correct' => false,
        ]);

        $q23 = Question::create([
            'quiz_id' => $quiz4->id,
            'question_text' => 'What is the difference between if and elif?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q23->id,
            'option_text' => 'There is no difference',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q23->id,
            'option_text' => 'elif is used for the first condition, if for additional ones',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q23->id,
            'option_text' => 'if is used for the first condition, elif for additional ones',
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q23->id,
            'option_text' => 'elif is only used with loops',
            'is_correct' => false,
        ]);

        $q24 = Question::create([
            'quiz_id' => $quiz4->id,
            'question_text' => 'What happens in short-circuit evaluation with False and something?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q24->id,
            'option_text' => 'Both conditions are always checked',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q24->id,
            'option_text' => 'The evaluation stops at False without checking the second condition',
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q24->id,
            'option_text' => 'An error occurs',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q24->id,
            'option_text' => 'The result is always True',
            'is_correct' => false,
        ]);

        $q25 = Question::create([
            'quiz_id' => $quiz4->id,
            'question_text' => 'Which values are “falsy” in Python?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q25->id,
            'option_text' => 'Only False',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q25->id,
            'option_text' => 'False, 0, empty string',
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q25->id,
            'option_text' => 'Only 0',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q25->id,
            'option_text' => 'Only empty string',
            'is_correct' => false,
        ]);

        $quiz5 = Quiz::create([
            'module_id' => $mod5->id,
            'title' => "Quiz for $mod5->title",
        ]);

        $q26 = Question::create([
            'quiz_id' => $quiz5->id,
            'question_text' => ' What is iteration in programming?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q26->id,
            'option_text' => 'A type of variable',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q26->id,
            'option_text' => 'The repetition of a process or instructions',
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q26->id,
            'option_text' => 'A debugging technique',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q26->id,
            'option_text' => 'A way to store data',
            'is_correct' => false,
        ]);


        $q27 = Question::create([
            'quiz_id' => $quiz5->id,
            'question_text' => 'What does range(3, 8) generate?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q27->id,
            'option_text' => '3, 4, 5, 6, 7, 8',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q27->id,
            'option_text' => '3, 4, 5, 6, 7',
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q27->id,
            'option_text' => '4, 5, 6, 7, 8',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q27->id,
            'option_text' => '3, 8',
            'is_correct' => false,
        ]);


        $q28 = Question::create([
            'quiz_id' => $quiz5->id,
            'question_text' => 'What happens when you use break in a loop?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q28->id,
            'option_text' => 'The loop starts over',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q28->id,
            'option_text' => 'The loop skips the current iteration',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q28->id,
            'option_text' => 'The loop exits immediately',
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q28->id,
            'option_text' => 'The loop runs forever',
            'is_correct' => false,
        ]);


        $q29 = Question::create([
            'quiz_id' => $quiz5->id,
            'question_text' => 'What is an infinite loop?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q29->id,
            'option_text' => 'A loop that runs very fast',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q29->id,
            'option_text' => 'A loop that never stops executing',
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q29->id,
            'option_text' => 'A loop that runs exactly once',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q29->id,
            'option_text' => 'A loop that processes infinite data',
            'is_correct' => false,
        ]);


        $q30 = Question::create([
            'quiz_id' => $quiz5->id,
            'question_text' => 'In nested loops, which loop completes all its iterations first?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q30->id,
            'option_text' => 'The outer loop',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q30->id,
            'option_text' => 'The inner loop',
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q30->id,
            'option_text' => 'Both complete simultaneously',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q30->id,
            'option_text' => 'It depends on the condition',
            'is_correct' => false,
        ]);


        $q31 = Question::create([
            'quiz_id' => $quiz5->id,
            'question_text' => 'What is a "sentinel value"?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q31->id,
            'option_text' => 'A value that causes an error',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q31->id,
            'option_text' => 'A special value that signals the end of input',
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q31->id,
            'option_text' => 'The first value in a sequence',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q31->id,
            'option_text' => 'A value that starts a loop',
            'is_correct' => false,
        ]);


        $q32 = Question::create([
            'quiz_id' => $quiz5->id,
            'question_text' => 'What does continue do in a loop?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q32->id,
            'option_text' => 'Exits the loop',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q32->id,
            'option_text' => 'Restarts the loop from the beginning',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q32->id,
            'option_text' => 'Skips the rest of the current iteration',
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q32->id,
            'option_text' => 'Pauses the loop',
            'is_correct' => false,
        ]);
    }
}
