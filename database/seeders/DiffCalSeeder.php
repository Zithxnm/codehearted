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

class DiffCalSeeder extends Seeder
{
    public function run(): void
    {
        $course = Course::create([
            'title' => 'Differential Calculus',
            'description' => 'Differential Calculus develops how learners view change and rate of change.
                              Students will learn to handle derivatives, limits, and functions with applications
                              in motion, optimization, and modeling of real-world phenomena.',
            'image_path' => 'imgs/Catalog_Calculus.jpg',
            'icon_path' => 'imgs/Icon_Calculus.png',
            'objectives' => [
                'Apply the Constant Rule, Power Rule, Constant Multiple Rule, and Sum/Difference Rule for differentiation.',
                'Find the derivative of functions involving polynomials, radicals, and negative exponents.',
                'Use derivatives to find equations of tangent lines and solve problems involving rates of change.'
            ]
        ]);

        $mod1 = Module::create([
            'course_id' => $course->id,
            'title' => 'Module 1: Basic Functions and Graphs',
            'order' => 1,
        ]);

        Review::create([
            'module_id' => $mod1->id,
            'title' => 'Lesson 1: Basic Functions and Graphs',
            'content' => '<h2>🎯 Learning Objectives</h2>
                            <p>By the end of this lesson, you should be able to:</p>
                            <ul>
                                <li>Define and identify functions.</li>
                                <li>Distinguish between domain and range.</li>
                                <li>Evaluate functions at specific values.</li>
                                <li>Recognize different types of functions and their graphs.</li>
                                <li>Apply transformations (shifts, stretches, reflections) to graphs.</li>
                            </ul>

                            <h2>📘 Learning Materials & Core Lesson</h2>

                            <h3>1. What Is a Function?</h3>
                            <p>
                                A <strong>function</strong> is a special type of relation in mathematics. It assigns each input value
                                <strong>x</strong> to exactly one output value <strong>y</strong>. In other words, a function follows
                                a rule that connects every element of the domain to one and only one element in the range.
                            </p>
                            <p>
                                In set notation, a function <strong>f</strong> maps a non-empty set <strong>A</strong> (domain) to a
                                non-empty set <strong>B</strong> (codomain). No two ordered pairs in a function have the same first
                                element.
                            </p>

                            <ul>
                                <li><strong>Notation:</strong> <code>f(x) = y</code></li>
                                <li><strong>Example:</strong> <code>f(x) = 2x + 3</code></li>
                            </ul>

                            <h3>2. Domain and Range</h3>
                            <p>
                                The <strong>domain</strong> of a function refers to all possible valid input values (x-values).  
                                The <strong>range</strong> refers to all possible output values (y-values).
                            </p>
                            <p>
                                Example: <code>f(x) = \sqrt{x}</code> → Domain: <code>x ≥ 0</code>, Range: <code>y ≥ 0</code>.
                            </p>

                            <h3>3. Common Types of Functions and Graphs</h3>
                            <ul>
                                <li><strong>Linear:</strong> <code>f(x) = mx + b</code> → straight line</li>
                                <li><strong>Quadratic:</strong> <code>f(x) = ax^2 + bx + c</code> → parabola</li>
                                <li><strong>Cubic:</strong> <code>f(x) = x^3</code> → S-shaped curve</li>
                                <li><strong>Square Root:</strong> <code>f(x) = \sqrt{x}</code></li>
                                <li><strong>Reciprocal:</strong> <code>f(x) = 1/x</code></li>
                                <li><strong>Absolute Value:</strong> <code>f(x) = |x|</code></li>
                            </ul>

                            <h3>4. Graph Transformations</h3>
                            <ul>
                                <li><strong>Vertical Shift:</strong> <code>f(x) + k</code> → moves graph up/down</li>
                                <li><strong>Horizontal Shift:</strong> <code>f(x - h)</code> → moves graph left/right</li>
                                <li><strong>Reflections:</strong>
                                    <ul>
                                        <li>Over x-axis: <code>-f(x)</code></li>
                                        <li>Over y-axis: <code>f(-x)</code></li>
                                    </ul>
                                </li>
                                <li><strong>Stretch/Compression:</strong> <code>a·f(x)</code> (vertical), <code>f(bx)</code> (horizontal)</li>
                            </ul>

                            <h3>Example: Linear Functions and Slope</h3>
                            <p>
                                Linear functions have the form <code>f(x) = ax + b</code>, where <code>a</code> and <code>b</code> are constants.
                                When <code>a > 0</code>, the graph rises as <code>x</code> increases, meaning the function is increasing on
                                <code>(-∞, ∞)</code>. When <code>a < 0</code>, the graph falls, making the function decreasing on the same interval.
                                If <code>a = 0</code>, the function becomes a horizontal line.
                            </p>

                            <div style="text-align:center; margin-top: 1.5rem;">
                                <img src="../../imgs/module1.png" alt="Graph example image"
                                    style="max-width:100%; border-radius:10px;">
                            </div>

                            <section class="references">
                                <h2>📚 References</h2>
                                <ul>
                                    <li>Khan Academy. (n.d.). <em>Functions and Graphs.</em> <a href="https://www.khanacademy.org/math/algebra" target="_blank">https://www.khanacademy.org/math/algebra</a></li>
                                    <li>Paul’s Online Notes. (n.d.). <em>Graphing Functions.</em> <a href="http://tutorial.math.lamar.edu" target="_blank">http://tutorial.math.lamar.edu</a></li>
                                    <li>Desmos Graphing Calculator. (n.d.). <a href="https://www.desmos.com/calculator" target="_blank">https://www.desmos.com/calculator</a></li>
                                    <li>Byju’s. (n.d.). <em>Functions and Their Graphs.</em> <a href="https://byjus.com" target="_blank">https://byjus.com</a></li>
                                </ul>
                            </section>',
        ]);

        //Practice template
        $prac1 = Practice::create([
            'module_id' => $mod1->id,
            'title' => 'Lesson 1 Practice: Basic Functions and Graphs',
            'content' => '<p>Practice Problems</p>',

              ]);

         // Practice 1 – Construct a Truth Table
        $pq1 = PracticeQuestion::create([
            'practice_id' => $prac1->id,
            'question_text' => "Decide whether the relation is a function.
                                1. (1,2),(2,3),(3,4)
                                2. (1,2),(1,3),(2,4)",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => ' 1. Yes, it is a function because each input has exactly one output.
                                    2. No, it is not a function because the input 1 has two different outputs (2 and 3).'
                ]
            ]);

        $pq2 = PracticeQuestion::create([
            'practice_id' => $prac1->id,
            'question_text' => "Find the domain and range of the following functions.
                                1. f(x)=x−2
                                2. f(x)=1x+3",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => ' 1. Domain: x≥2, Range: y≥0
                                    2. Domain: x≠−3, Range: y≠0'
                ]
            ]);


        $pq3 = PracticeQuestion::create([
            'practice_id' => $prac1->id,
            'question_text' => "Describe how the following graphs look.
                                1. f(x)=∣x−2∣
                                2. f(x)=(x−1)2+3",
            'type' => 'code_writing',
            'details' => [
            'model_answer' => '<p>1. The graph of f(x)=∣x−2∣ is a V-shaped graph that opens upwards with its vertex at the point (2,0). It is symmetric about the vertical line x=2.</p>
                                <p>2. The graph of f(x)=(x−1)2+3 is a parabola that opens upwards with its vertex at the point (1,3). The graph is shifted 1 unit to the right and 3 units up from the standard position of the parabola y=x2y = x^2y=x2.</p>'
            ]
        ]);


        $pq4 = PracticeQuestion::create([
        'practice_id' => $prac1->id,
        'question_text' => 'Describe how the graph of f(x) = x^2 changes to:
                            1. g(x) = (x - 2)^2
                            2. h(x) = -x^2
                            3. p(x) = 3x^2.',
        'type' => 'code_writing',

        'details' => [
            'model_answer' => '<p>1. The graph of g(x) = (x - 2)^2 is the graph of x2f(x) = x^2 shifted 2 units to the right.</p>
                                <p>2. The graph of h(x) = -x^2 is the graph of f(x) = x^2 reflected over the x-axis.</p>
                                <p>3. The graph of p(x) = 3x^2 is the graph of f(x) = x^2 vertically stretched by a factor of 3.</p>'
            ]
        ]);

        //Quiz template
        $quiz1 = Quiz::create([
            'module_id' => $mod1->id,
            'title' => "Quiz for $mod1->title",
        ]);

        $q1 = Question::create([
            'quiz_id' => $quiz1->id,
            'question_text' => 'Which of the following is a function?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q1->id,
            'option_text' => 'Circle: x² + y² = 1',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q1->id,
            'option_text' => 'Line: y = 2x + 1',
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q1->id,
            'option_text' => 'Relation: (1,2), (1,3)',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q1->id,
            'option_text' => 'Both a and c',
            'is_correct' => false,
        ]);


         $q2 = Question::create([
                'quiz_id' => $quiz1->id,
                'question_text' => 'The domain of f(x) = 1/(x-4) is:',
                'type' => 'multiple_choice',
                'points' => 1,
            ]);

        QuizOption::create([
                'question_id' => $q2->id,
                'option_text' => "All real numbers",
                'is_correct' => false,
            ]);

        QuizOption::create([
                'question_id' => $q2->id,
                'option_text' => "All real numbers except x = 4",
                'is_correct' => true,
            ]);

        QuizOption::create([
                'question_id' => $q2->id,
                'option_text' => "All positive numbers",
                'is_correct' => false,
            ]);

        QuizOption::create([
                'question_id' => $q2->id,
                'option_text' => "x > 4",
                'is_correct' => false,
            ]);


        $q3 = Question::create([
                'quiz_id' => $quiz1->id,
                'question_text' => 'The range of f(x) = |x| is:',
                'type' => 'multiple_choice',
                'points' => 1,
            ]);

        QuizOption::create([
                'question_id' => $q3->id,
                'option_text' => "All real numbers",
                'is_correct' => false,
            ]);

        QuizOption::create([
                'question_id' => $q3->id,
                'option_text' => "y ≥ 0",
                'is_correct' => true,
            ]);

        QuizOption::create([
                'question_id' => $q3->id,
                'option_text' => "y > 0",
                'is_correct' => false,
            ]);

        QuizOption::create([
                'question_id' => $q3->id,
                'option_text' => "y < 0",
                'is_correct' => false,
            ]);



        $q4 = Question::create([
                'quiz_id' => $quiz1->id,
                'question_text' => 'The graph of f(x) = (x+2)² - 3 is a parabola:',
                'type' => 'multiple_choice',
                'points' => 1,
            ]);

        QuizOption::create([
                'question_id' => $q4->id,
                'option_text' => "Shifted 2 units left, 3 units up",
                'is_correct' => false,
            ]);

        QuizOption::create([
                'question_id' => $q4->id,
                'option_text' => "Shifted 2 units right, 3 units down",
                'is_correct' => true,
            ]);

        QuizOption::create([
                'question_id' => $q4->id,
                'option_text' => "Shifted 2 units left, 3 units down",
                'is_correct' => false,
            ]);

        QuizOption::create([
                'question_id' => $q4->id,
                'option_text' => "Shifted 2 units right, 3 units up",
                'is_correct' => false,
            ]);


       //lessson 2

        $mod2 = Module::create([
            'course_id' => $course->id,
            'title' => 'Module 2:Basic Differentiation Rules',
            'order' => 2,
        ]);

        Review::create([
            'module_id' => $mod2->id,
            'title' => 'Lesson 2: Basic Differentiation Rules',
            'content' => '<h2>🎯 Learning Objectives</h2>
                            <p>By the end of this lesson, you should be able to:</p>
                            <ul>
                                <li>Understand the concept of a derivative.</li>
                                <li>Apply the basic rules of differentiation.</li>
                                <li>Differentiate simple algebraic, trigonometric, exponential, and logarithmic functions.</li>
                            </ul>

                            <h2>📘 Learning Materials & Core Lesson</h2>

                            <h3>1. What Are Differentiation Rules?</h3>
                            <p>
                                The concept of <strong>differentiation rules</strong> plays a key role in mathematics and is widely applicable to both real-life situations and exam scenarios.
                                Whether you are preparing for board exams or STEM entrance tests, understanding these rules helps you solve calculus and derivative-related
                                questions quickly and accurately.
                            </p>
                            <p>
                                A <strong>differentiation rule</strong> is a formula that tells us how to find the derivative (rate of change) of different types of functions.
                                You’ll find this concept applied in areas such as velocity calculation, graph slopes, and mathematical modeling.
                                Mastering differentiation rules is essential for solving mathematical, scientific, and engineering problems efficiently.
                            </p>

                            <h3>2. Definition of a Derivative</h3>
                            <p>
                                The derivative of a function $f(x)$ is defined as:
                            </p>

                            <p>
                                It represents the <strong>instantaneous rate of change</strong> or the <strong>slope of the tangent line</strong> at a point.
                            </p>

                            <h3>4. Basic Differentiation Rules</h3>
                            <ul>
                                <li><strong>Constant Rule:</strong>
                                    <code> \(\frac{d}{dx}[c] = 0\) </code>
                                </li>

                                <li><strong>Power Rule:</strong>
                                    <code> \(\frac{d}{dx}[x^n] = n x^{n-1}, \; n \in \mathbb{R}\) </code>
                                </li>

                                <li><strong>Constant Multiple Rule:</strong>
                                    <code> \(\frac{d}{dx}[c \cdot f(x)] = c \cdot f\'(x)\) </code>
                                </li>

                                <li><strong>Sum Rule:</strong>
                                    <code> \(\frac{d}{dx}[f(x) + g(x)] = f\'(x) + g\'(x)\) </code>
                                </li>

                                <li><strong>Difference Rule:</strong>
                                    <code> \(\frac{d}{dx}[f(x) - g(x)] = f\'(x) - g\'(x)\) </code>
                                </li>
                            </ul>

                            <section class="references">
                                <h2>📚 References</h2>
                                <ul>
                                    <li>Khan Academy. (n.d.). <em>Basic Differentiation Rules.</em> <a href="https://www.khanacademy.org/math/calculus-1" target="_blank">https://www.khanacademy.org/math/calculus-1</a></li>
                                    <li>Paul’s Online Notes. (n.d.). <em>Derivative Rules.</em> <a href="http://tutorial.math.lamar.edu" target="_blank">http://tutorial.math.lamar.edu</a></li>
                                    <li>MIT OpenCourseWare. (n.d.). <em>Single Variable Calculus.</em> <a href="https://ocw.mit.edu" target="_blank">https://ocw.mit.edu</a></li>
                                    <li>Vedantu. (n.d.). <em>Differentiation Rules.</em> <a href="https://www.vedantu.com" target="_blank">https://www.vedantu.com</a></li>
                                </ul>
                            </section>',
        ]);

                     $prac2 = Practice::create([
                     'module_id' => $mod2->id, // replace with your Lesson 2 module variable
                     'title' => 'Lesson 2 Practice: Basic Differentiation Rules',
                     'content' => '🎯 Learning Objectives',
                        ]);

                        $pq5 = PracticeQuestion::create([
                        'practice_id' => $prac2->id,
                        'question_text' => "Differentiate the following functions:
                                            1. f(x) = x^4
                                            2. g(x) = 5x^3
                                            3. h(x) = 7x^2 + 4x - 6",
                        'type' => 'code_writing',
                        'details' => [
                        'model_answer' => '<p>1. f\'(x) = 4x^3</p>
                                          <p>2. g\'(x) = 15x^2</p>
                                          <p>3. h\'(x) = 14x + 4</p>'
                            ]
                        ]);

                        $pq6 = PracticeQuestion::create([
                        'practice_id' => $prac2->id,
                        'question_text' => "Differentiate the following trigonometric functions:
                                            1. y=sinx+cosxy = \sin x + \cos xy=sinx+cosx
                                            2. y=tanx−secxy = \tan x - \sec xy=tanx−secx",
                        'type' => 'code_writing',
                        'details' => [
                            'model_answer' => '1. y′=cosx−sinxy\' = \cos x - \sin xy′=cosx−sinx
                                              2. y′=sec2x+secxtanxy\' = \sec^2 x + \sec x \tan xy′=sec2x+secxtanx'
                        ]
                    ]);


                       $pq7 = PracticeQuestion::create([
                        'practice_id'=> $prac2->id,
                        'question_text' =>"Differentiate the following:
                                            1. f(x) = e^x + x^5
                                            2. g(x) = \ln(x) + 3x^2",
                        'type' => 'code_writing',
                        'details' => [
                        'model_answer' => '<p>1. f\'(x) = e^x + 5x^4</p>
                                          <p>2. g\'(x) = \frac{1}{x} + 6x</p>'
                            ]
                        ]);


        //Quiz template
        $quiz2 = Quiz::create([
            'module_id' => $mod2->id,
            'title' => "Quiz for Basic Differentiation Rules",
        ]);

        $q5 = Question::create([
            'quiz_id' => $quiz2->id,
            'question_text' => "If f(x) = 10, what is f′(x)?",
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q5->id,
            'option_text' => '10',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q5->id,
            'option_text' => '1',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q5->id,
            'option_text' => '0',
            'is_correct' => true,
        ]);

        QuizOption::create([
            'question_id' => $q5->id,
            'option_text' => 'Undefined',
            'is_correct' => false,
        ]);

        $q6 = Question::create([
            'quiz_id' => $quiz2->id,
            'question_text' => "If y = x^7, what is y′?",
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q6->id,
            'option_text' => '7x^6',
            'is_correct' => true,
        ]);

        QuizOption::create([
            'question_id' => $q6->id,
            'option_text' => 'x^6',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q6->id,
            'option_text' => '6x^7',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q6->id,
            'option_text' => '7x^7',
            'is_correct' => false,
        ]);

        $q7 = Question::create([
            'quiz_id' => $quiz2->id,
            'question_text' => "If y = 3 sin(x), what is y′?",
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q7->id,
            'option_text' => '3cos(x)',
            'is_correct' => true,
        ]);

        QuizOption::create([
            'question_id' => $q7->id,
            'option_text' => '-3cos(x)',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q7->id,
            'option_text' => '-3sin(x)',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q7->id,
            'option_text' => '3tan(x)',
            'is_correct' => false,
        ]);

        $q8 = Question::create([
            'quiz_id' => $quiz2->id,
            'question_text' => "If y = ln(x), what is y′?",
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q8->id,
            'option_text' => '1/x',
            'is_correct' => true,
        ]);

        QuizOption::create([
            'question_id' => $q8->id,
            'option_text' => 'ln(x - 1)',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q8->id,
            'option_text' => 'e^x',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q8->id,
            'option_text' => 'x ln(x)',
            'is_correct' => false,
        ]);



        //lesson 3
        $mod3 = Module::create([
            'course_id' => $course->id,
            'title' => 'Module 3: Limits and Continuity',
            'order' => 3,
        ]);


        Review::create([
        'module_id' => $mod3->id,
        'title' => 'Lesson 3: Limits and Continuity',
        'content' => '
                    <h2>🎯 Learning Objectives</h2>

        <p>By the end of this lesson, you should be able to:</p>
            <ul>
                <li>Understand the concept of a limit.</li>
                <li>Evaluate limits algebraically and graphically.</li>
                <li>Identify points of continuity and discontinuity of a function.</li>
            </ul>


            <h2>📘 Learning Materials & Core Lesson</h2>

            <h3>1. Definition of a Limit</h3>
            <p>
                The concept of a Limit is fundamental to the study of calculus. In simple terms,
                the limit of a function at a particular point refers to the value that the function approaches as the input
                (or variable) approaches a specific value. It allows us to analyze how functions behave as they get close to
                a certain point, even if they never actually reach that point.<br>
            </p>
            <p>
                Continuity, on the other hand, is a property of a function that ensures it behaves in a predictable manner.
                A function is continuous if, roughly speaking, you can sketch its graph without lifting your pen.
                More formally, a function is considered continuous at a point if the limit of the function exists as it
                approaches that point is equal to the function’s value at that point.
            </p>
            <p>
                If <code>f(x)f(x)f(x)</code> becomes arbitrarily close to <strong>LLL</strong> as <strong>xxx</strong> approaches
                <strong>aaa</strong>, we write:
            </p>

            <h3>2. Basic Limit Laws</h3>
            <ul>
                <li><strong>Constant Rule:</strong> limx→ac=c\lim_{x \to a} c = climx→ac=c</li>
                <li><strong>Identity Rule:</strong> limx→ax=a\lim_{x \to a} x = alimx→ax=a</li>
                <li><strong>Power Rule:</strong> limx→axn=an\lim_{x \to a} x^n = a^nlimx→axn=an</li>
                <li><strong>Sum/Difference Rule:</strong> limx→a[f(x)±g(x)]=lif(x)±limg(x)\lim_{x \to a} [f(x) \pm g(x)] = \lim f(x) \pm \lim g(x)limx→a[f(x)±g(x)]=limf(x)±limg(x)</li>
                <li><strong>Product Rule:</strong> limx→a[f(x)g(x)]=limf(x)⋅limg(x)\lim_{x \to a} [f(x)g(x)] = \lim f(x) \cdot \lim g(x)limx→a[f(x)g(x)]=limf(x)⋅limg(x)</li>
                <li><strong>Quotient Rule:</strong> limx→af(x)g(x)=limf(x)limg(x), g(a)≠0\lim_{x \to a} \frac{f(x)}{g(x)} = \frac{\lim f(x)}{\lim g(x)}, \ g(a) \neq 0limx→ag(x)f(x)=limg(x)limf(x), g(a)=0</li>
            </ul>

            <h3>3. Special Limits</h3>
            <ul>
                <li>limx→0sinxx=1\lim_{x \to 0} \frac{\sin x}{x} = 1limx→0xsinx=1</li>
                <li>limx→∞1x=0\lim_{x \to \infty} \frac{1}{x} = 0limx→∞x1=0</li>
                <li>limx→∞(1+1x)x=e\lim_{x \to \infty} (1 + \tfrac{1}{x})^x = elimx→∞(1+x1)x=e</li>
            </ul>

            <h3>4. Continuity</h3>
            <p>
                A function f(x)f(x)f(x) is continuous at x=ax = ax=a if:
            </p>

            <p>A function <code>f(x)</code> is continuous at <code>x = a</code> if:</p>
            <ul>
                <li>f(a) is defined,</li>
                <li>\lim_{x \to a} f(x) exists.</li>
                <li>\lim_{x \to a} f(x) = f(a).</li>
            </ul>

            <p>If any of these conditions fail, the function is <strong>discontinuous</strong> at a.</p>


            <h2>📚 References</h2>
            <ul>
                <li>Khan Academy. (n.d.). <em>Limits and Continuity.</em> <a href="https://www.khanacademy.org/math/calculus-1/cs1-limits" target="_blank">https://www.khanacademy.org/math/calculus-1/cs1-limits</a></li>
                <li>Paul’s Online Notes. (n.d.). <em>Limits.</em> <a href="http://tutorial.math.lamar.edu" target="_blank">http://tutorial.math.lamar.edu</a></li>
                <li>MIT OpenCourseWare. (n.d.). <em>Single Variable Calculus.</em> <a href="https://ocw.mit.edu" target="_blank">https://ocw.mit.edu</a></li>
                <li>Allen, G. (n.d.). <em>Limits and Continuity.</em> <a href="https://allen.in/jee/maths/limits-and-continuity" target="_blank">https://allen.in/jee/maths/limits-and-continuity</a></li>
            </ul>',
        ]);


        // Practice container
        $prac3 = Practice::create([
            'module_id' => $mod3->id,
            'title' => 'Lesson 3 Limits and Continuity',
            'content' => '<p>Practice Problems</p>',
        ]);

        $pq8 = PracticeQuestion::create([
            'practice_id' => $prac3->id,
            'question_text' => "Evaluate the following limits:,
                                <p>1. \( \lim_{x \to 3} (2x + 5) \)</p>'
                                <p>2. \( \lim_{x \to -2} (x^2 + 4x + 4) \)</p>
                                <p>3. \( \lim_{x \to \infty} \frac{5x}{x+1} \)</p>",
            'type' => 'code_writing',
            'details' => [
                'model_answers' => [ '11,
                                        0,
                                        5'
                ]
            ]
        ]);

        $pq9 = PracticeQuestion::create([
            'practice_id' => $prac3->id,
            'question_text' => "Evaluate the following special limits:
                                <p>1. \( \lim_{x \to 0} \frac{\sin(2x)}{x}</p>
                                <p>2. \( \lim_{x \to \infty} \frac{3x^2 + 4}{x^2 + 1} \)</p>",
            'type' => 'code_writing',
            'details' => [
                'model_answers' => [
                    '2',
                    '3',
                ]
            ]
        ]);

        $pq10 = PracticeQuestion::create([
            'practice_id' => $prac3->id,
            'question_text' => 'Check if the following functions are continuous at the given point:
                                <p>1. \( f(x) = \frac{x^2 - 1}{x - 1},\ x = 1 \)</p>,
                                <p>2. \( g(x) = \begin{cases} x^2 & x \neq 2 \\ 5 & x = 2 \end{cases},\ x = 2 \)</p>',
            'type' => 'code_writing',
            'details' => [
                'model_answers' => [
                    '1. Discontinuous',
                    '2. Discontinuous',
                ]
            ]
        ]);

        //Quiz template
        $quiz3 = Quiz::create([
            'module_id' => $mod3->id,
            'title' => 'Quiz for Limits & Continuity',
        ]);

        $q9 = Question::create([
            'quiz_id' => $quiz3->id,
            'question_text' => 'lim_{x→2}(x^2+3x) = ?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q9->id,
            'option_text' => '10',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q9->id,
            'option_text' => '7',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q9->id,
            'option_text' => '14',
            'is_correct' => true,
        ]);

        QuizOption::create([
            'question_id' => $q9->id,
            'option_text' => 'Undefined',
            'is_correct' => false,
        ]);

        $q10 = Question::create([
            'quiz_id' => $quiz3->id,
            'question_text' => 'A function is continuous at x = a if:',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q10->id,
            'option_text' => 'lim(x→a) f(x) exists',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q10->id,
            'option_text' => 'f(a) exists',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q10->id,
            'option_text' => 'lim(x→a) f(x) = f(a)',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q10->id,
            'option_text' => 'All of the above',
            'is_correct' => true,
        ]);

        $q11 = Question::create([
            'quiz_id' => $quiz3->id,
            'question_text' => 'lim_{x→∞} (2x²+1)/(x²+3) = ?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q11->id,
            'option_text' => '0',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q11->id,
            'option_text' => '1',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q11->id,
            'option_text' => '2',
            'is_correct' => true,
        ]);

        QuizOption::create([
            'question_id' => $q11->id,
            'option_text' => 'Infinity',
            'is_correct' => false,
        ]);

        $q12 = Question::create([
            'quiz_id' => $quiz3->id,
            'question_text' => 'If lim_{x→0} sin(x)/x = 1, then lim_{x→0} sin(3x)/x = ?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q12->id,
            'option_text' => '1',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q12->id,
            'option_text' => '0',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q12->id,
            'option_text' => '3',
            'is_correct' => true,
        ]);

        QuizOption::create([
            'question_id' => $q12->id,
            'option_text' => 'Undefined',
            'is_correct' => false,
        ]);

        //lesson 4
        $mod4 = Module::create([
            'course_id' => $course->id,
            'title' => 'Module 4: Applications of Derivatives',
            'order' => 4,
        ]);

        Review::create([
            'module_id' => $mod4->id,
            'title' => 'Lesson 4 - Applications of Derivatives',
            'content' => '
                <h2>🎯 Learning Objectives</h2>
                <p>By the end of this lesson, you should be able to:</p>
                <ul>
                    <li>Apply derivatives to analyze the behavior of functions.</li>
                    <li>Identify increasing and decreasing intervals and local extrema.</li>
                    <li>Solve optimization problems using derivatives.</li>
                    <li>Use derivatives to study motion (velocity, acceleration).</li>
                    <li>Interpret real-life problems involving rates of change.</li>
                </ul>

                <section class="core-lesson">
                    <h2>📘 Learning Materials & Core Lesson</h2>

                    <h3>1. Increasing and Decreasing Functions</h3>
                    <p>
                        A function is <strong>increasing</strong> if <code>f\'(x) > 0</code>
                        and <strong>decreasing</strong> if <code>f\'(x) &lt; 0</code>.
                    </p>

                    <h3>2. Maxima and Minima (Critical Points)</h3>
                    <p>Critical points occur when <code>f\'(x) = 0</code> or when <code>f\'(x)</code> is undefined.</p>
                    <p><strong>First Derivative Test:</strong></p>
                    <ul>
                        <li>If <code>f\'(x)</code> changes from positive to negative → local maximum.</li>
                        <li>If <code>f\'(x)</code> changes from negative to positive → local minimum.</li>
                    </ul>

                    <h3>3. Concavity and Inflection Points</h3>
                    <ul>
                        <li>If <code>f\'\'(x) > 0</code>, the function is concave up.</li>
                        <li>If <code>f\'\'(x) &lt; 0</code>, the function is concave down.</li>
                        <li><strong>Inflection point:</strong> where concavity changes.</li>
                    </ul>

                    <h3>4. Optimization Problems</h3>
                    <p><strong>Steps:</strong></p>
                    <ol>
                        <li>Identify the quantity to optimize.</li>
                        <li>Write an equation.</li>
                        <li>Differentiate.</li>
                        <li>Solve for critical points.</li>
                        <li>Test and interpret the solution.</li>
                    </ol>

                    <h3>5. Motion Problems</h3>
                    <ul>
                        <li>Position: <code>s(t)</code></li>
                        <li>Velocity: <code>v(t) = s\'(t)</code></li>
                        <li>Acceleration: <code>a(t) = v\'(t) = s\'\'(t)</code></li>
                    </ul>
                    <p>Velocity is the rate of change of position; acceleration is the rate of change of velocity.</p>
                </section>

                <section class="references">
                    <h2>📚 References</h2>
                    <ul>
                        <li>Khan Academy. (n.d.). <em>Applications of Derivatives.</em></li>
                        <li>Paul’s Online Notes. (n.d.). <em>Applications of Derivatives.</em></li>
                        <li>MIT OpenCourseWare. (n.d.). <em>Single Variable Calculus.</em></li>
                    </ul>
                </section>
            '
        ]);

        $prac4 = Practice::create([
            'module_id' => $mod4->id,
            'title' => 'Lesson 4 - Applications of Derivatives',
            'content' => '<p>Practice Problems</p>',
        ]);


            $pq11 = PracticeQuestion::create([
            'practice_id' => $prac4->id,
            'question_text' => "Find intervals where the function is increasing or decreasing.
                                1. f(x)=x2−4x+3",
            'type' => 'code_writing',
            'details' => [
                'model_answer' =>  '<p>Increasing on (2, ∞), Decreasing on (-∞, 2)</p>'
                ]
            ]);


               $pq12 = PracticeQuestion::create([
                'practice_id' => $prac4->id,
                'question_text' => 'Solve the following problem:
                                    1. Find two numbers whose sum is 10 and whose product is maximum.',
                'type' => 'code_writing',
                'details' => [
               'model_answer' => '<p>The two numbers are 5 and 5.</p>'
                      ]
                ]);


              $pq13 = PracticeQuestion::create([
                'practice_id' => $prac4->id,
                'question_text' => "Check if the following functions are continuous at the given point:
                                    Given s(t)=t3−6t2+9t:
                                    find the velocity v(t) and acceleration a(t)",
                'type' => 'code_writing',
                'details' => [
                'model_answer' =>  '<p>v(t) = 3t^2 - 12t + 9</p>
                                     <p>a(t) = 6t - 12</p>'
                      ]
                ]);

        //Quiz template
        $quiz4 = Quiz::create([
            'module_id' => $mod4->id,
            'title' => "Quiz for $mod4->Applications of Derivatives",
        ]);

        $q13 = Question::create([
            'quiz_id' => $quiz4->id,
            'question_text' => 'f(x) = x^3 - 3x, find the critical points.',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q13->id,
            'option_text' => 'x = 0, ±√3',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q13->id,
            'option_text' => 'x = 0, ±1',
            'is_correct' => true,
        ]);

        QuizOption::create([
            'question_id' => $q13->id,
            'option_text' => 'x = ±1',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q13->id,
            'option_text' => 'x = 0',
            'is_correct' => false,
        ]);

        $q14 = Question::create([
            'quiz_id' => $quiz4->id,
            'question_text' => "If f''(x) > 0, the graph is:",
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q14->id,
            'option_text' => 'Increasing',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q14->id,
            'option_text' => 'Decreasing',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q14->id,
            'option_text' => 'Concave up',
            'is_correct' => true,
        ]);

        QuizOption::create([
            'question_id' => $q14->id,
            'option_text' => 'Concave down',
            'is_correct' => false,
        ]);

        $q15 = Question::create([
            'quiz_id' => $quiz4->id,
            'question_text' => 'A ball’s position is s(t) = 5t². Its velocity is:',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q15->id,
            'option_text' => '10t',
            'is_correct' => true,
        ]);

        QuizOption::create([
            'question_id' => $q15->id,
            'option_text' => '5t',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q15->id,
            'option_text' => '2t',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q15->id,
            'option_text' => 't²',
            'is_correct' => false,
        ]);

        $q16 = Question::create([
            'quiz_id' => $quiz4->id,
            'question_text' => 'The maximum of f(x) = -x² + 6x - 5 occurs at:',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q16->id,
            'option_text' => 'x = 0',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q16->id,
            'option_text' => 'x = 2',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q16->id,
            'option_text' => 'x = 3',
            'is_correct' => true,
        ]);

        QuizOption::create([
            'question_id' => $q16->id,
            'option_text' => 'x = 5',
            'is_correct' => false,
        ]);


        //lesson 5
        $mod5 = Module::create([
            'course_id' => $course->id,
            'title' => 'Module 5: Order of Rotation',
            'order' => 5,
        ]);

                 Review::create([
                'module_id' => $mod5->id,
                'title' => 'Lesson 5 - Order of Rotation',
                'content' => '<h2>🎯 Learning Objectives</h2>
                <section class="objectives">
                <h2>🎯 Learning Objectives</h2>
                <p>By the end of this lesson, students should be able to:</p>
                <ul>
                    <li>Define rotational symmetry and order of rotation.</li>
                    <li>Identify figures that have rotational symmetry.</li>
                    <li>Determine the order of rotation of 2D figures.</li>
                    <li>Apply the concept of order of rotation to real-life objects and patterns.</li>
                </ul>
            </section>


            <section class="core-lesson">
                <h2>📘 Learning Materials & Core Lesson</h2>

                <h3>1. What is an Order of Rotation?</h3>
                <p>
                    The <strong>order of rotation</strong> refers to the number of times a shape can be rotated around a central point
                    and still look the same within a full rotation of 360 degrees. This concept is closely linked to symmetry,
                    as it helps identify the degree of rotational symmetry a shape possesses, whether in two-dimensional figures
                    like polygons or three-dimensional objects like spheres and cubes.
                </p>

                <h3>2. Rotational Symmetry</h3>
                <p>
                    A figure has <strong>rotational symmetry</strong> if it looks the same after being rotated (turned)
                    by some angle less than 360°.
                </p>

                <h3>3. Order of Rotation</h3>
                <p>
                    The <strong>order of rotation</strong> is the number of times a figure maps onto itself
                    in one complete turn (360°).
                </p>
                <p><strong>Formula:</strong></p>
                <div class="code-snippet">
                    Angle of rotation=360∘Order of rotation\text{Angle of rotation} = \frac{360^\circ}{\text{Order of rotation}}Angle of rotation=Order of rotation360∘
                </div>

                <h3>4. Examples</h3>
                <ul>
                    <li><strong>Square:</strong> Order 4 (looks the same at 90°, 180°, 270°, 360°)</li>
                    <li><strong>Rectangle:</strong> Order 2 (looks the same at 180°, 360°)</li>
                    <li><strong>Equilateral Triangle:</strong> Order 3</li>
                    <li><strong>Circle:</strong> Infinite order of rotation.</li>
                </ul>

                <h3>5. Real-life Examples</h3>
                <p>Objects with rotational symmetry include:</p>
                <ul>
                    <li>Fan blades</li>
                    <li>Steering wheels</li>
                    <li>Logos and star patterns</li>
                    <li>Flowers and natural shapes</li>
                </ul>

            <section class="references">
                <h2>📚 References</h2>
                <ul>
                    <li>Singh, A. (2018). <em>Mathematics Class 9 – Symmetry</em>. NCERT.</li>
                    <li>Khan Academy. (n.d.). <em>Symmetry</em>. <a href="https://www.khanacademy.org/math/geometry" target="_blank">https://www.khanacademy.org/math/geometry</a></li>
                    <li>BBC Bitesize. (n.d.). <em>Rotational Symmetry</em>. <a href="https://www.bbc.co.uk/bitesize" target="_blank">https://www.bbc.co.uk/bitesize</a></li>
                    <li>Math is Fun. (n.d.). <em>Symmetry</em>. <a href="https://www.mathsisfun.com/geometry/symmetry.html" target="_blank">https://www.mathsisfun.com/geometry/symmetry.html</a></li>
                    <li>Fiveable. (n.d.). <em>Order of Rotation</em>. <a href="https://www.fiveable.me" target="_blank">https://www.fiveable.me</a></li>
                </ul>',
            ]);

           $prac5 = Practice::create([
                'module_id' => $mod5->id, // replace with your Lesson 2 module variable
                'title' => 'Lesson 5 - Order of Rotation',
                'content' => '<p>Practice Problems on Arithmetic Sequences</p>'
            ]);


            $pq14 = PracticeQuestion::create([
            'practice_id' => $prac5->id,
            'question_text' => "Find the order of rotation for each figure.
                                <p>1. Rectangle</p>
                                <p>2. Equilateral Triangle</p>
                                <p>3. Regular Pentagon</p>
                                <p>4. Letter “H”</p>",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => '<p>1. Order 2</p>
                                    <p>2. Order 3</p>
                                    <p>3. Order 5</p>
                                    <p>4. Order 2</p>'
                ]
            ]);


            $pq15 = PracticeQuestion::create([
            'practice_id' => $prac5->id,
            'question_text' => "Find the angle of rotation for the following shapes.
                                <p>1. Square</p>
                                <p>2. Regular Hexagon</p>
                                <p>3. Rhombus</p>",
            'type' => 'code_writing',
            'details' => [
            'model_answer' =>'<p>1. 90°</p>
                                <p>2. 60°</p>
                                <p>3. 180°</p>'
                ]
            ]);

        //Quiz template
        $quiz5 = Quiz::create([
            'module_id' => $mod5->id,
            'title' => "Quiz for $mod5->Order of Rotation",
        ]);

        $q17 = Question::create([
            'quiz_id' => $quiz5->id,
            'question_text' => 'A figure that looks the same 4 times in a full turn has an order of rotation:',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q17->id,
            'option_text' => '2',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q17->id,
            'option_text' => '3',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q17->id,
            'option_text' => '4',
            'is_correct' => true,
        ]);

        QuizOption::create([
            'question_id' => $q17->id,
            'option_text' => '5',
            'is_correct' => false,
        ]);


        $q18 = Question::create([
            'quiz_id' => $quiz5->id,
            'question_text' => 'A circle has:',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q18->id,
            'option_text' => 'Order 1',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q18->id,
            'option_text' => 'Order 2',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q18->id,
            'option_text' => 'Infinite order of rotation',
            'is_correct' => true,
        ]);

        QuizOption::create([
            'question_id' => $q18->id,
            'option_text' => 'No rotational symmetry',
            'is_correct' => false,
        ]);

        $q19 = Question::create([
            'quiz_id' => $quiz5->id,
            'question_text' => 'Which letter has rotational symmetry of order 2?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q19->id,
            'option_text' => 'N',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q19->id,
            'option_text' => 'H',
            'is_correct' => true,
        ]);

        QuizOption::create([
            'question_id' => $q19->id,
            'option_text' => 'S',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q19->id,
            'option_text' => 'Z',
            'is_correct' => false,
        ]);

        $q20 = Question::create([
            'quiz_id' => $quiz5->id,
            'question_text' => 'What is the angle of rotation for a regular pentagon is?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q20->id,
            'option_text' => '72°',
            'is_correct' => true,
        ]);

        QuizOption::create([
            'question_id' => $q20->id,
            'option_text' => '90°',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q20->id,
            'option_text' => '60°',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q20->id,
            'option_text' => '120°',
            'is_correct' => false,
        ]);

        //lesson 6
        $mod6 = Module::create([
            'course_id' => $course->id,
            'title' => 'Module 6: The Nature of Mathematics',
            'order' => 6,
        ]);

        Review::create([
            'module_id' => $mod6->id,
            'title' => 'Lesson 6 - The Nature of Mathematics',
            'content' => '
                <h2>🎯 Learning Objectives</h2>
                <p>By the end of this lesson, students should be able to:</p>
                <ul>
                <li>Explain the meaning and scope of mathematics.</li>
                <li>Identify the characteristics of mathematics.</li>
                <li>Recognize the uses of mathematics in everyday life, science, and technology.</li>
                <li>Appreciate mathematics as a language, tool, and way of thinking.</li>
            </ul>
        </section>

        <section class="core-lesson">
            <h2>📘 Learning Materials & Core Lesson</h2>

            <h3>1. What is Mathematics?</h3>
            <p>Mathematics comes from the Greek word <strong>“mathema”</strong>, meaning knowledge, study, or learning.
                Mathematics is often perceived as the study of numbers, symbols, formulas, and calculations. However, its nature goes far beyond arithmetic.
                It is a science of patterns and relationships both abstract (numbers, functions) and real (nature, economy, and society).
                From ancient counting systems to modern-day algorithms, mathematics has always been the foundation of knowledge, science, and human progress.</p>

            <h3>2. Characteristics of Mathematics</h3>
            <ul>
                <li><strong>Abstract:</strong> Deals with symbols, numbers, and concepts rather than tangible objects.</li>
                <li><strong>Logical:</strong> Built on reasoning, deduction, and proof.</li>
                <li><strong>Precise:</strong> Provides exact results through clear definitions and rules.</li>
                <li><strong>Universal:</strong> Serves as a common language understood across cultures.</li>
                <li><strong>Dynamic:</strong> Continuously expanding with new discoveries and applications.</li>
            </ul>

            <h3>3. Roles of Mathematics</h3>
            <ul>
                <li><strong>As a Language:</strong> Communicates ideas through numbers, equations, and graphs.</li>
                <li><strong>As a Tool:</strong> Applied in science, engineering, business, medicine, and daily decision-making.</li>
                <li><strong>As a Way of Thinking:</strong> Develops problem-solving, critical, and analytical skills.</li>
            </ul>

            <h3>4. Applications in Real Life</h3>
            <ul>
                <li><strong>Finance:</strong> Used in budgeting, managing expenses, and calculating interest rates.</li>
                <li><strong>Architecture:</strong> Involves measurements, design, and geometry.</li>
                <li><strong>Nature:</strong> Displays mathematical patterns such as Fibonacci sequences and symmetry.</li>
                <li><strong>Technology:</strong> Relies on mathematics for algorithms, artificial intelligence, and cryptography.</li>
            </ul>

        <section class="references">
            <h2>📚 References</h2>
            <ul>
                <li>Smith, D. E. (1958). <em>History of Mathematics</em>. Dover Publications.</li>
                <li>Courant, R., & Robbins, H. (1996). <em>What is Mathematics?</em> Oxford University Press.</li>
                <li>CK-12. (n.d.). <em>Nature of Mathematics</em>. <a href="https://www.ck12.org" target="_blank">https://www.ck12.org</a></li>
                <li>Your Smart Class. (n.d.). <em>Nature of Mathematics</em>. <a href="https://www.yoursmartclass.com" target="_blank">https://www.yoursmartclass.com</a></li>
            </ul>
        </section>',
        ]);


        $prac6     = Practice::create([
            'module_id' => $mod6->id, // replace with your Lesson 2 module variable
            'title' => 'Lesson 6 - The Nature of Mathematics',
            'content' => '<p>Practice Problems on Arithmetic Sequences</p>',
        ]);

        $pq16 = PracticeQuestion::create([
            'practice_id' => $prac6->id,
            'question_text' => "Mathematics is only about numbers.",
            'type' => 'true_false',
        ]);

        PracticeOption::create([
            'practice_question_id' => $pq16->id,
            'option_text' => 'True',
            'is_correct' => false
        ]);

        PracticeOption::create([
            'practice_question_id' => $pq16->id,
            'option_text' => 'False',
            'is_correct' => true
        ]);


        $pq17 = PracticeQuestion::create([
            'practice_id' => $prac6->id,
            'question_text' => "Mathematics is a universal language.",
            'type' => 'true_false',
        ]);

        PracticeOption::create([
            'practice_question_id' => $pq17->id,
            'option_text' => 'True',
            'is_correct' => true
        ]);

        PracticeOption::create([
            'practice_question_id' => $pq17->id,
            'option_text' => 'False',
            'is_correct' => false
        ]);


        $pq18 = PracticeQuestion::create([
            'practice_id' => $prac6->id,
            'question_text' => "The Fibonacci sequence is found in nature.",
            'type' => 'true_false',
        ]);

        PracticeOption::create([
            'practice_question_id' => $pq18->id,
            'option_text' => 'True',
            'is_correct' => true
        ]);

        PracticeOption::create([
            'practice_question_id' => $pq18->id,
            'option_text' => 'False',
            'is_correct' => false
        ]);


        $pq19 = PracticeQuestion::create([
            'practice_id' => $prac6->id,
            'question_text' =>'Answer briefly. How do I use mathematics in my daily life?',
            'type' => 'code_writing',
            'details' => [
                'model_answer' => '<p>Mathematics is used in daily life for budgeting, cooking measurements, time management, shopping discounts, and problem-solving.</p>'
                ]
        ]);

        $pq20 = PracticeQuestion::create([
            'practice_id' => $prac6->id,
            'question_text' => "Match the term with its definition.",
            'type' => 'matching',
            'details' => [
                'pairs' => [
                    ['left' => 'Medicine', 'right' => 'Dosage Calculation'],
                    ['left' => 'Construction', 'right' => 'Architecture'],
                    ['left' => 'Business', 'right' => 'Budgeting and profit analysis'],
                ]
            ]
        ]);

        $pq21 = PracticeQuestion::create([
            'practice_id' => $prac6->id,
            'question_text' =>'Research one natural pattern (e.g., honeycomb, sunflower, seashells) that shows mathematics in nature and present to the class.</p>.',
            'type' => 'code_writing',
            'details' => [

                'model_answer' => 'Anything can be accepted as long as it shows mathematics in nature.'
            ]
        ]);

        //Quiz template
        $quiz6 = Quiz::create([
            'module_id' => $mod6->id,
            'title' => "Quiz for $mod6->The Nature of Mathematics",
        ]);

        $q21 = Question::create([
            'quiz_id' => $quiz6->id,
            'question_text' => 'Mathematics originated from the Greek word meaning?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q21->id,
            'option_text' => 'Measure',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q21->id,
            'option_text' => 'Knowledge',
            'is_correct' => true,
        ]);

        QuizOption::create([
            'question_id' => $q21->id,
            'option_text' => 'Science',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q21->id,
            'option_text' => 'Pattern',
            'is_correct' => false,
        ]);

        $q22 = Question::create([
            'quiz_id' => $quiz6->id,
            'question_text' => 'Which is NOT a characteristic of mathematics?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q22->id,
            'option_text' => 'Abstract',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q22->id,
            'option_text' => 'Precise',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q22->id,
            'option_text' => 'Illogical',
            'is_correct' => true,
        ]);

        QuizOption::create([
            'question_id' => $q22->id,
            'option_text' => 'Universal',
            'is_correct' => false,
        ]);

        $q23 = Question::create([
            'quiz_id' => $quiz6->id,
            'question_text' => 'Which of the following best describes mathematics as a “tool”?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q23->id,
            'option_text' => 'Used to express emotions',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q23->id,
            'option_text' => 'Used in solving real-world problems',
            'is_correct' => true,
        ]);

        QuizOption::create([
            'question_id' => $q23->id,
            'option_text' => 'Used only by scientists',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q23->id,
            'option_text' => 'Used only for counting numbers',
            'is_correct' => false,
        ]);

        $q24 = Question::create([
            'quiz_id' => $quiz6->id,
            'question_text' => 'Which of the following is NOT an application of mathematics?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q24->id,
            'option_text' => 'Designing bridges',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q24->id,
            'option_text' => 'Analyzing business profits',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q24->id,
            'option_text' => 'Singing a song without rhythm',
            'is_correct' => true,
        ]);

        QuizOption::create([
            'question_id' => $q24->id,
            'option_text' => 'Cooking recipes',
            'is_correct' => false,
        ]);

        //lesson 7
        $mod7 = Module::create([
            'course_id' => $course->id,
            'title' => 'Module 7: The Fibonacci Sequence',
            'order' => 7,
        ]);

        Review::create([
                'module_id' => $mod7->id,
                'title' => 'Lesson 7 - The Fibonacci Sequence',
                'content' => '
                       <h2>🎯 Learning Objectives</h2>
                <p>By the end of this lesson, students should be able to:</p>

                <ul>
                    <li>Define the Fibonacci sequence.</li>
                    <li>Generate terms of the sequence using its recursive formula.</li>
                    <li>Explore patterns found in Fibonacci numbers.</li>
                    <li>Connect the Fibonacci sequence to the Golden Ratio and real-life examples.</li>
                </ul>
            </section>

            <section class="core-lesson">
                <h2>📘 Learning Materials & Core Lesson</h2>

                <h3>1. Definition</h3>
                <p>
                    The Fibonacci Sequence is a series of numbers where each term is obtained by adding its two preceding terms.
                    It starts with <strong>0</strong> and <strong>1</strong>.
                </p>
                <div class="code-snippet">
                    <pre><code>F0=0,  F1=1,  Fn=Fn−1+Fn−2  (n≥2)F_0 = 0, \; F_1 = 1, \; F_n = F_{n-1} + F_{n-2} \; (n \geq 2)F0=0,F1=1,Fn=Fn−1+Fn−2(n≥2) </code></pre>
                </div>
                <p><strong>Sequence:</strong> 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, …</p>

                <h3>2. Properties and Patterns</h3>
                <ul>
                    <li>Each term is the sum of the two before it.</li>
                    <li>The ratio of consecutive terms approaches the <strong>Golden Ratio (ϕ ≈ 1.618)</strong>.</li>
                    <li>Fibonacci numbers appear in nature in flower petals, spiral shells, pinecones, and sunflower seeds.</li>
                </ul>

                <h3>3. Formula for the n<sup>th</sup> Term (Binet’s Formula)</h3>
                <div class="code-snippet">
                    <pre><code>Fn=15((1+52)n−(1−52)n)F_n = \frac{1}{\sqrt{5}} \left( \left(\frac{1+\sqrt{5}}{2}\right)^n - \left(\frac{1-\sqrt{5}}{2}\right)^n \right)Fn=51((21+5)n−(21−5)n) </code></pre>
                </div>

                <h3>4. Applications</h3>
                <ul>
                    <li><strong>Nature:</strong> spirals in shells, flower arrangements, and branching patterns in trees.</li>
                    <li><strong>Computer Algorithms:</strong> used in sorting, searching, and recursive programming problems.</li>
                    <li><strong>Art and Architecture:</strong> connected to the Golden Ratio, used for aesthetic balance.</li>
                    <li><strong>Finance:</strong> applied in modeling growth and stock market patterns.</li>
                </ul>

            <section class="references">
                <h2>📚 References</h2>
                <ul>
                    <li>Livio, M. (2002). <em>The Golden Ratio: The Story of Phi.</em> Broadway Books.</li>
                    <li>Math is Fun. (n.d.). <em>Fibonacci Sequence.</em> <a href="https://www.mathsisfun.com/numbers/fibonacci-sequence.html" target="_blank">https://www.mathsisfun.com/numbers/fibonacci-sequence.html</a></li>
                    <li>Nature of Code. (n.d.). <em>Fibonacci Spirals.</em> <a href="https://natureofcode.com/book/chapter-8-fractals/" target="_blank">https://natureofcode.com/book/chapter-8-fractals/</a></li>
                    <li>Math Monks. (n.d.). <em>Fibonacci Sequence.</em> <a href="https://mathmonks.com/fibonacci-sequence#Formula" target="_blank">https://mathmonks.com/fibonacci-sequence#Formula</a></li>
                </ul>
            </section>'
        ]);

        $prac7  = Practice::create([
            'module_id' => $mod7->id, // replace with your Lesson 2 module variable
            'title' => 'Lesson 7 - The Fibonacci Sequence',
            'content' => '<p>Practice Problems on Arithmetic Sequences</p>',
        ]);

        $pq19 = PracticeQuestion::create([
            'practice_id' => $prac7->id,
            'question_text' =>'Write the next 6 terms of the sequence.
                                0, 1, 1, 2, 3, 5, ___, ___, ___, ___, ___, ___',
            'type' => 'code_writing',
            'details' => [

                'model_answer' => '8, 13, 21, 34, 55, 89'
            ]
        ]);

        $pq20 = PracticeQuestion::create([
            'practice_id' => $prac7->id,
            'question_text' =>'List at least 3 examples of Fibonacci numbers in nature or art.',
            'type' => 'code_writing',
            'details' => [
                'model_answer' =>' <p>1. Sunflower seed patterns</p>
                                    <p>2. Pinecone scales</p>
                                    <p>3. Spiral shells</p>'
            ]
        ]);

        $pq21 = PracticeQuestion::create([
            'practice_id' => $prac7->id,
            'question_text' =>'Compute the ratio of consecutive Fibonacci terms:
                                <p>21/13, 34/21, 55/34</p>
                                <p>What number do they approach?</p>',
            'type' => 'code_writing',
            'details' => [

                'model_answer' => '1.615, 1.619, 1.618 - They approach the Golden Ratio (≈1.618).'
            ]
        ]);


        $quiz7 = Quiz::create([
            'module_id' => $mod7->id,
            'title' =>  "Quiz for $mod7->The Fibonacci Sequence",
        ]);

        $q25 = Question::create([
            'quiz_id' => $quiz7->id,
            'question_text' => 'The 8th Fibonacci number is?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create(['question_id' => $q25->id, 'option_text' => '13', 'is_correct' => false]);
        QuizOption::create(['question_id' => $q25->id, 'option_text' => '21', 'is_correct' => true]);
        QuizOption::create(['question_id' => $q25->id, 'option_text' => '34', 'is_correct' => false]);
        QuizOption::create(['question_id' => $q25->id, 'option_text' => '55', 'is_correct' => false]);


        $q26 = Question::create([
            'quiz_id' => $quiz7->id,
            'question_text' => 'Which formula defines the Fibonacci sequence?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create(['question_id' => $q26->id, 'option_text' => 'Fn = Fn−1 ⋅ Fn−2', 'is_correct' => false]);
        QuizOption::create(['question_id' => $q26->id, 'option_text' => 'Fn = Fn−1 + Fn−2', 'is_correct' => true]);
        QuizOption::create(['question_id' => $q26->id, 'option_text' => 'Fn = 2Fn−1', 'is_correct' => false]);
        QuizOption::create(['question_id' => $q26->id, 'option_text' => 'Fn = n²', 'is_correct' => false]);


        $q27 = Question::create([
            'quiz_id' => $quiz7->id,
            'question_text' => 'The ratio of consecutive Fibonacci numbers approaches:',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create(['question_id' => $q27->id, 'option_text' => 'π (3.14)', 'is_correct' => false]);
        QuizOption::create(['question_id' => $q27->id, 'option_text' => 'Golden Ratio (≈1.618)', 'is_correct' => true]);
        QuizOption::create(['question_id' => $q27->id, 'option_text' => '√2 (1.41)', 'is_correct' => false]);
        QuizOption::create(['question_id' => $q27->id, 'option_text' => 'e (2.71)', 'is_correct' => false]);

        $q28 = Question::create([
            'quiz_id' => $quiz7->id,
            'question_text' => 'Which of the following is a Fibonacci number?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create(['question_id' => $q28->id, 'option_text' => '20', 'is_correct' => false]);
        QuizOption::create(['question_id' => $q28->id, 'option_text' => '22', 'is_correct' => false]);
        QuizOption::create(['question_id' => $q28->id, 'option_text' => '21', 'is_correct' => true]);
        QuizOption::create(['question_id' => $q28->id, 'option_text' => '2', 'is_correct' => false]);
    }
}
