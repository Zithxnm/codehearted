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
            'title' => 'Differential Calculus', //Title of Course
            'description' => 'Differential Calculus develops how learners view change and rate of change.
                              Students will learn to handle derivatives, limits, and functions with applications
                              in motion, optimization, and modeling of real-world phenomena.',
            'image_path' => 'imgs/Catalog_Calculus.jpg', //Path to the course image
            'icon_path' => 'imgs/Icon_Calculus.png',
            'objectives' => [   // Objectives to be displayed when the course is clicked on
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


        //Review template
        Review::create([
            'module_id' => $mod1->id,
            'title' => 'Lesson 1: Basic Functions and Graphs',
            'content' => ' <h2>🎯 Learning Objectives</h2>

         <p>By the end of this lesson, students should be able to:</p>
            <ul>
                    <li>Define and identify functions.</li>
                    <li>Distinguish between domain and range.</li>
                    <li>Evaluate functions at specific values.</li>
                    <li>Recognize different types of functions and their graphs.</li>
                    <li>Apply transformations (shifts, stretches, reflections) to graphs.</li>
                </ul>
            </section>

            <section class="core-lesson">
                <h2>📘 Learning Materials & Core Lesson</h2>

                <h3>1. What is a Function?</h3>
                <p>
                    In mathematics, a function is a particular type of relation with some rules.
                    For example, mathematically, a function <strong>f</strong> is a relation from a
                    non-empty set <strong>A</strong> to a non-empty set <strong>B</strong> such that
                    the domain of <strong>f</strong> is <strong>A</strong> and no two distinct ordered
                    pairs in <strong>f</strong> have the same first element. Also, we have different
                    types of functions that can be defined based on their properties.
                </p>

                <p style="margin-top: 1rem;">
                    A function is a rule that assigns to each input <strong>x</strong> exactly one
                    output <strong>y</strong>.<br>
                </p>
                <ul>
                    <li><strong>Notation:</strong> <code>f(x)=y</code></li>
                    <li><strong>Example:</strong> <code>f(x)=2x+3</code></li>
                </ul>

                <h3>2. Domain and Range</h3>
                <p>

                <strong>Domain:</strong> all possible input values (x-values). <br>
                    <strong>Range:</strong> all possible output values (y-values).
                </p>
                <p>Example: <code>f(x)=√x</code> → Domain: <code>x≥0</code>, Range: <code>y≥0</code>.</p>

                <h3>3. Common Types of Functions and Graphs</h3>
                <ul>
                    <li><strong>Linear:</strong> <code>f(x)=mx+b</code> → straight line</li>
                    <li><strong>Quadratic:</strong> <code>f(x)=ax²+bx+c</code> → parabola</li>
                    <li><strong>Cubic:</strong> <code>f(x)=x³</code> → S-shaped curve</li>
                    <li><strong>Square Root:</strong> <code>f(x)=√x</code></li>
                    <li><strong>Reciprocal:</strong> <code>f(x)=1/x</code></li>
                    <li><strong>Absolute Value:</strong> <code>f(x)=|x|</code></li>
                </ul>

                <h3>4. Graph Transformations</h3>
                <ul>
                    <li>Vertical shift: <code>f(x)+k</code> → move up/down</li>
                    <li>Horizontal shift: <code>f(x−h)</code> → move left/right</li>
                    <li>Reflection:
                        <ul>
                            <li>Over x-axis: <code>−f(x)</code></li>
                            <li>Over y-axis: <code>f(−x)</code></li>
                        </ul>
                    </li>
                    <li>Stretch/Compression: <code>a·f(x)</code> (vertical), <code>f(bx)</code> (horizontal)</li>
                </ul>

                <h3>Example of Functions and Graphs: Linear Functions and Slope</h3>
                <p>
                    The easiest type of function to consider is a linear function.
                    Linear functions have the form <code>f(x)=ax+b</code>, where <code>a</code> and
                    <code>b</code> are constants. In the figure below, we see examples of linear functions
                    when <code>a</code> is positive, negative, and zero. Note that if <code>a>0</code>,
                    the graph of the line rises as <code>x</code> increases. In other words,
                    <code>f(x)=ax+b</code> is increasing on <code>(−∞,∞)</code>. If <code>a<0</code>,
                    the graph of the line falls as <code>x</code> increases. In this case,
                    <code>f(x)=ax+b</code> is decreasing on <code>(−∞,∞)</code>. If <code>a=0</code>,
                    the line is horizontal.
                </p>
                <div style="text-align:center; margin-top: 1.5rem;">
                    <img src="../../imgs/module1.png" alt="Graph example image"
                         style="max-width:100%; border-radius:10px;">
                </div>
            </section>
                <h2>📚 References</h2>
                <ul>
                    <li>Khan Academy. (n.d.). <em>Functions and Graphs.</em> <a href="https://www.khanacademy.org/math/algebra" target="_blank">https://www.khanacademy.org/math/algebra</a></li>
                    <li>Paul’s Online Notes. (n.d.). <em>Graphing Functions.</em> <a href="http://tutorial.math.lamar.edu" target="_blank">http://tutorial.math.lamar.edu</a></li>
                    <li>Desmos Graphing Calculator. (n.d.). <a href="https://www.desmos.com/calculator" target="_blank">https://www.desmos.com/calculator</a></li>
                    <li>Byju’s. (n.d.). <em>Functions and Their Graphs.</em> <a href="https://byjus.com" target="_blank">https://byjus.com</a></li>
                </ul>',


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
            'question_text' => "Decide whether the relation is a function.",
            'type' => 'Function or Not?',
            'details' => [

                      'model_answer' => '<p>1. (1,2),(2,3),(3,4)(1,2), (2,3), (3,4)(1,2),(2,3),(3,4)</p>
                                         <p>2. (1,2),(1,3),(2,4)(1,2), (1,3), (2,4)(1,2),(1,3),(2,4)</p>'
                         ]
                     ]);

                $pq2 = PracticeQuestion::create([
                'practice_id' => $prac1->id,
                'question_text' => "Find the domain and range of the following functions.",
                'type' => 'Domain & Range',
                     'details' => [

                            'model_answer' =>' <p>1. f(x)=x−2f(x) = \sqrt{x - 2}f(x)=x−2</p>
                                               <p>2. f(x)=1x+3f(x) = \frac{1}{x+3}f(x)=x+31</p>'

                                ]
                            ]);


            $pq3 = PracticeQuestion::create([
            'practice_id' => $prac1->id,
            'question_text' => 'Describe how the following graphs look.',
            'type' => 'Graphing Practice',

            'details' => [
                 'model_answer' =>' <p>1. f(x)=∣x−2∣f(x) = |x - 2|f(x)=∣x−2∣</p>
                                    <p>2. f(x)=(x−1)2+3f(x) = (x - 1)^2 + 3f(x)=(x−1)2+3</p>'

                          ]
                       ]);


            $pq4 = PracticeQuestion::create([
            'practice_id' => $prac1->id,
            'question_text' => 'Describe how the graph of f(x)=x2f(x) = x^2f(x)=x2 changes to:.',
            'type' => 'Transformations',

            'details' => [
               'model_answer' => '<p>1. g(x)=(x−2)2g(x) = (x - 2)^2g(x)=(x−2)2</p>
                                  <p>2. h(x)=−x2h(x) = -x^2h(x)=−x2</p>
                                  <p>3. p(x)=3x2p(x) = 3x^2p(x)=3x2</p>'


                       ]
                  ]);



        //Quiz template
        $quiz1 = Quiz::create([
            'module_id' => $mod1->id,
            'title' =>  "Quiz for $mod1->Differential Calculus",
        ]);

        $q1 = Question::create([
            'quiz_id' => $quiz1->id,
            'question_text' => 'Which of the following is a function?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        $q2 =  QuizOption::create([
            'question_id' => $quiz1->id,
            'option_text' => 'Circle: x2+y2=1x^2 + y^2 = 1x2+y2=1',
            'is_correct' => false,
        ]);
       $q3 =  QuizOption::create([
            'question_id' => $quiz1->id,
            'option_text' => 'Line: y=2x+1y = 2x + 1y=2x+1',
            'is_correct' => true,
        ]);
       $q4 =  QuizOption::create([
            'question_id' => $quiz1->id,
            'option_text' => 'Relation: (1,2),(1,3)(1,2), (1,3)(1,2),(1,3)',
            'is_correct' => false,
        ]);
       $q5 =  QuizOption::create([
            'question_id' => $quiz1->id,
            'option_text' => 'Both a and c',
            'is_correct' => false,
        ]);


         $q6 = Question::create([
                'quiz_id' => $quiz1->id,
                'question_text' => 'The domain of f(x)=1x−4f(x) = \frac{1}{x-4}f(x)=x−41 is:',
                'type' => 'multiple_choice',
                'points' => 1,
            ]);

       $q7 = QuizOption::create([
                'question_id' => $quiz1->id,
                'option_text' => "All real numbers",
                'is_correct' => false,
            ]);


        $q8 = QuizOption::create([
                'question_id' => $quiz1->id,
                'option_text' => "All real numbers except x=4x=4x=4",
                'is_correct' => true,
            ]);

        $q9 = QuizOption::create([
                'question_id' => $quiz1->id,
                'option_text' => "All positive numbers",
                'is_correct' => false,
            ]);

        $q10 = QuizOption::create([
                'question_id' => $q2->id,
                'option_text' => "x>4x > 4x>4",
                'is_correct' => false,
            ]);


        $q11 = Question::create([
                'quiz_id' => $quiz1->id,
                'question_text' => 'The range of f(x)=∣x∣f(x) = |x|f(x)=∣x∣  is:',
                'type' => 'multiple_choice',
                'points' => 1,
            ]);

      $q12 =  QuizOption::create([
                'question_id' => $quiz1->id,
                'option_text' => "All real numbers",
                'is_correct' => false,
            ]);


      $q13 =     QuizOption::create([
                'question_id' => $quiz1->id,
                'option_text' => "y≥0y \geq 0y≥0",
                'is_correct' => true,
            ]);

       $q14 =   QuizOption::create([
                'question_id' => $quiz1->id,
                'option_text' => "y>0y > 0y>0",
                'is_correct' => false,
            ]);

        $q15 =  QuizOption::create([
                'question_id' => $quiz1->id,
                'option_text' => "y<0y < 0y<0",
                'is_correct' => false,
            ]);



          $q16 = Question::create([
                'quiz_id' => $quiz1->id,
                'question_text' => 'The graph of f(x)=(x+2)2−3f(x) = (x+2)^2 - 3f(x)=(x+2)2−3 is a parabola:',
                'type' => 'multiple_choice',
                'points' => 1,
            ]);

       $q17 = QuizOption::create([
                'question_id' => $quiz1->id,
                'option_text' => "Shifted 2 units left, 3 units up",
                'is_correct' => false,
            ]);


        $q18 =QuizOption::create([
                'question_id' => $quiz1->id,
                'option_text' => "Shifted 2 units right, 3 units down",
                'is_correct' => true,
            ]);

          $q19 = QuizOption::create([
                'question_id' => $quiz1->id,
                'option_text' => "Shifted 2 units left, 3 units down",
                'is_correct' => false,
            ]);

        $q20 =QuizOption::create([
                'question_id' => $quiz1->id,
                'option_text' => "Shifted 2 units right, 3 units up",
                'is_correct' => false,
            ]);


       //lessson 2

        $mod2 = Module::create([
            'course_id' => $course->id,
            'title' => 'Module 2:Basic Differentiation Rules',
            'order' => 2,


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
                    Whether you are preparing for board exams, JEE, NEET, or Olympiads, understanding these rules helps you solve calculus and derivative-related
                    questions quickly and accurately.
                </p>
                <p>
                 A <strong>differentiation rule</strong>is a formula that tells us how to find the derivatives (or rates of change) of different types of functions.
                    You’ll find this concept applied in areas such as velocity calculation, graph slopes, and mathematical modeling.
                    Mastering differentiation rules is essential as it helps in solving various mathematical, scientific, and engineering problems efficiently.
                </p>

                <h3>2. Definition of a Derivative</h3>
                <p>
                    The derivative of a function <code>f(x)f(x)f(x)</code> is defined as:
                </p>

                <div class="code-snippet">
                    f′(x)=limh→0f(x+h)−f(x)hf'(x) = \lim_{h \to 0} \frac{f(x+h) - f(x)}{h}f′(x)=h→0limhf(x+h)−f(x)
                </div>

                <p>
                    'It represents the <strong>instantaneous rate of change</strong> or the <strong>slope of the tangent line</strong> at a point.
                </p>

                <h3>4. Basic Differentiation Rules</h3>

                       <ul>
                    <li><strong>Constant Rule:</strong> <code>ddx[c]=0\frac{d}{dx}[c] = 0dxd[c]=0 </code> — the derivative of a constant is zero.</li>
                    <li><strong>Power Rule:</strong> <code>ddx[xn]=nxn−1,n∈R\frac{d}{dx}[x^n] = n x^{n-1}, \quad n \in \mathbb{R}dxd[xn]=nxn−1,n∈R = n xⁿ⁻¹</code>.</li>
                   '<li><strong>Constant Multiple Rule:</strong> <code>ddx[c⋅f(x)]=c⋅f′(x)\frac{d}{dx}[c \cdot f(x)] = c \cdot f'(x)dxd[c⋅f(x)]=c⋅f′(x) </code>.</li>
                    <li><strong>Sum Rule:</strong> <code>ddx[f(x)+g(x)]=f′(x)+g′(x)\frac{d}{dx}[f(x) + g(x)] = f'(x) + g'(x)dxd[f(x)+g(x)]=f′(x)+g′(x)</code>.</li>
                    <li><strong>Difference Rule:</strong> <code>ddx[f(x)−g(x)]=f′(x)−g′(x)\frac{d}{dx}[f(x) - g(x)] = f'(x) - g'(x)dxd[f(x)−g(x)]=f′(x)−g′(x)</code>.</li>
               '</ul>

            '<section class="references">
                <h2>📚 References</h2>
                <ul>
                    <li>Khan Academy. (n.d.). <em>Basic Differentiation Rules.</em> <a href="https://www.khanacademy.org/math/calculus-1" target="_blank">https://www.khanacademy.org/math/calculus-1</a></li>
                    <li>Paul’s Online Notes. (n.d.). <em>Derivative Rules.</em> <a href="http://tutorial.math.lamar.edu" target="_blank">http://tutorial.math.lamar.edu</a></li>
                    <li>MIT OpenCourseWare. (n.d.). <em>Single Variable Calculus.</em> <a href="https://ocw.mit.edu" target="_blank">https://ocw.mit.edu</a></li>
                    <li>Vedantu. (n.d.). <em>Differentiation Rules.</em> <a href="https://www.vedantu.com" target="_blank">https://www.vedantu.com</a></li>
                </ul>
            </section>


                     '$prac2 = Practice::create([
                     'module_id' => $mod2->id, // replace with your Lesson 2 module variable
                     'title' => 'Lesson 2 Practice: Basic Differentiation Rules',
                     'content' => '🎯 Learning Objectives',
                        ]);

                        $pq5 = PracticeQuestion::create([
                        'practice_id' => $prac2->id,
                        'question_text' => "Differentiate the following functions:",
                        'type' => 'Apply Power Rule',

                        'details' => [
                        'model_answer' => '<p>1. f(x)=x4f(x) = x^4f(x)=x4</p>
                                           <p>2. g(x)=5x3g(x) = 5x^3g(x)=5x3</p>
                                           <p>3. h(x)=7x2+4x−6h(x) = 7x^2 + 4x - 6h(x)=7x2+4x−6</p>'


                                      ]
                                 ]);

                        $pq6 = PracticeQuestion::create([
                        'practice_id' => $prac2->id,
                        'question_text' => "Differentiate the following trigonometric functions:",
                        'type' => 'Trigonometric Derivatives',

                             'details' => [
                        'model_answer' => '<p>1. y=sinx+cosxy = \sin x + \cos xy=sinx+cosx
                                           <p>2. y=tanx−secxy = \tan x - \sec xy=tanx−secx</p>'


                        ]
                    ]);


                       $pq7 = PracticeQuestion::create([
                       ' practice_id '=> $prac2->id,
                        'question_text' =>"Differentiate the following:",
                        'type' => 'Mixed Functions',

                        'details' => [
                        'model_answer' => '<p>1. f(x)=ex+x5f(x) = e^x + x^5f(x)=ex+x5</p>
                                          <p>2. g(x)=ln(x)+3x2g(x) = \ln(x) + 3x^2g(x)=ln(x)+3x2</p>'

                                   ]
                              ]);


                    $quiz2 = Quiz::create([
                    'module_id' => $mod2->id,
                    'title' =>  "Quiz for $mod2->Basic Differentiation Rules",
                   ]);


                           $q21 = Question::create([
                            'quiz_id' => $quiz2->id,
                            'question_text' => "If f(x)=10f(x) = 10f(x)=10, then f′(x)=f'(x) =f′(x)= ?",
                            'type' => 'multiple_choice',
                            'points' => 1,
                            ]);

                       $q22 = QuizOption::create([
                            'question_id' => $quiz2->id,
                            'option_text' => '10',
                            'is_correct '=> false,
                        ]);
                      $q23 =  QuizOption::create([
                            'question_id' => $quiz2->id,
                            'option_text' => '1',
                            'is_correct' => true,
                        ]);
                      $q24 = QuizOption::create([
                            'question_id' => $quiz2->id,
                            'option_text' => '0',
                            'is_correct' => false,
                        ]);
                      $q25 =  QuizOption::create([
                            'question_id' => $quiz2->id,
                            'option_text' => 'Undefined',
                            'is_correct' => false,
                        ]);



                        $q26 = Question::create([
                            'quiz_id' => $quiz2->id,
                            'question_text' => "If y=x7y = x^7y=x7, then y′=y' =y′= ?",
                            'type' => 'multiple_choice',
                            'points' => 1,
                            ]);

                       $q27 =  QuizOption::create([
                            'question_id' => $quiz2->id,
                            'option_text '=> '7x67x^67x6',
                           ' is_correct' => false,
                        ]);
                   $q28 =      QuizOption::create([
                            'question_id' => $quiz2->id,
                            'option_text' => 'x6x^6x6',
                            'is_correct' => true,
                        ]);
                    $q29 =     QuizOption::create([
                            'question_id' => $quiz2->id,
                            'option_text' => '6x76x^76x7',
                            'is_correct' => false,
                        ]);
                     $q30 =   QuizOption::create([
                            'question_id' => $quiz2->id,
                            'option_text' => '7x77x^77x7',
                            'is_correct' => false,
                        ]);



                        $q31 = Question::create([
                            'quiz_id' => $quiz2->id,
                            'question_text' => "If y=3sinxy = 3\sin xy=3sinx, then y′=y' =y′= ?",
                            'type' => multiple_choice,
                            'points' => 1,
                            ]);

                        $q32 = QuizOption::create([
                            'question_id' => $quiz2->id,
                            'option_text' => "3cosx3\cos x3cosx",
                            'is_correct' => false,
                        ]);

                      $q32 =   QuizOption::create([
                            'question_id' => $quiz2->id,
                            'option_text' => "−3cosx-3\cos x−3cosx",
                            'is_correct' => false,
                        ]);

                    $q33 =    QuizOption::create([
                            'question_id' => $quiz2->id,
                            'option_text' => '−3sinx-3\sin x−3sinx',
                            'is_correct' => false,
                        ]);

                    $q34 =    QuizOption::create([
                            'question_id' => $quiz2->id,
                            'option_text' => '3tanx3\tan x3tanx',
                            'is_correct' => false,
                        ]);

                        $q35 = Question::create([
                            'quiz_id' => $quiz2->id,
                            'question_text' => "If y=ln(x)y = \ln(x)y=ln(x), then y′=y' =y′= ?",
                            'type' => 'multiple_choice',
                            'points' => 1,
                            ]);

                        $q36 = QuizOption::create([
                            'question_id' => $q4->id,
                            'option_text' => '1x\frac{1}{x}x1',
                            'is_correct' => false,
                        ]);

                     $q37 =   QuizOption::create([
                            'question_id' => $quiz2->id,
                            'option_text' => 'ln(x−1)\ln(x-1)ln(x−1)',
                            'is_correct' => false,
                        ]);

                     $q38 =   QuizOption::create([
                            'question_id' => $quiz2->id,
                            'option_text' => 'exe^xex',
                            'is_correct' => false,
                        ]);

                      $q39 =  QuizOption::create([
                            'question_id' =>$quiz2->id,
                            'option_text' => 'xln(x)x \ln(x)xln(x)',
                            'is_correct' => false,
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
                    <li>f(a)f(a)f(a) is defined,</li>
                    <li>limx→af(x)\lim_{x \to a} f(x)limx→af(x) exists.</li>
                    <li>limx→af(x)=f(a)\lim_{x \to a} f(x) = f(a)limx→af(x)=f(a).</li>
                </ul>

                <p>If any of these conditions fail, the function is <strong>discontinuous</strong> at aaa.</p>


                <h2>📚 References</h2>
                <ul>
                    <li>Khan Academy. (n.d.). <em>Limits and Continuity.</em> <a href="https://www.khanacademy.org/math/calculus-1/cs1-limits" target="_blank">https://www.khanacademy.org/math/calculus-1/cs1-limits</a></li>
                    <li>Paul’s Online Notes. (n.d.). <em>Limits.</em> <a href="http://tutorial.math.lamar.edu" target="_blank">http://tutorial.math.lamar.edu</a></li>
                    <li>MIT OpenCourseWare. (n.d.). <em>Single Variable Calculus.</em> <a href="https://ocw.mit.edu" target="_blank">https://ocw.mit.edu</a></li>
                    <li>Allen, G. (n.d.). <em>Limits and Continuity.</em> <a href="https://allen.in/jee/maths/limits-and-continuity" target="_blank">https://allen.in/jee/maths/limits-and-continuity</a></li>
                </ul>',



                // Practice container
                $prac3 = Practice::create([
                    ' module_id' => $mod3->id,
                    'title' => 'Lesson 3 Limits and Continuity',
                    'content' => '<p>Practice Problems</p>',
                ]);


            $pq8 = PracticeQuestion::create([
            'practice_id' => $prac3->id,
            'question_text' => "Evaluate the following limits:",
            'type' => 'I. Basic Limits',
            'details' => [
               'model_answer' => '<p>1. limx→3(2x+5)\lim_{x \to 3} (2x + 5)limx→3(2x+5)</p>'


              'model_answer' => ' <p>2. limx→−2(x2+4x+4)\lim_{x \to -2} (x^2 + 4x + 4)limx→−2(x2+4x+4)</p>'


               'model_answer' =>' <p>3. limx→∞5xx+1\lim_{x \to \infty} \frac{5x}{x+1}limx→∞x+15x</p>'

                      ]
                  ]);

               $pq9 = PracticeQuestion::create([
                'practice_id' => $prac3->id,
                'question_text' => "Evaluate the following special limits:",
                'type' => 'Special Limits',
                'details' => [

               'model_answer' =>  '<p>1. limx→0sin(2x)x\lim_{x \to 0} \frac{\sin(2x)}{x}limx→0xsin(2x)</p>'



               'model_answer' =>' <p>2. limx→∞3x2+4x2+1\lim_{x \to \infty} \frac{3x^2 + 4}{x^2 + 1}limx→∞x2+13x2+4</p>'

                      ]
                 ]);

             $pq10 = PracticeQuestion::create([
                'practice_id' => $prac3->id,
                'question_text' => "Check if the following functions are continuous at the given point:",
                'type' => 'Continuity Check',
                'details' => [

               'model_answer' => '<p>1. f(x)=x2−1x−1,x=1f(x) = \frac{x^2 - 1}{x - 1}, \quad x = 1f(x)=x−1x2−1,x=1</p>'


               'model_answer' =>'  <p>2. g(x)={x2x≠25x=2g(x) = \begin{cases} x^2 & x \neq 2 \\ 5 & x = 2 \end{cases}g(x)={x25x=2x=2 at x=2x = 2x=2</p>'

                      ]

                 ]);

                 $quiz3 = Quiz::create([
                    'module_id' => $mod3->id,
                    'title' =>  'Quiz for $mod3->Limits & Continuity',
                   ]);


                            $q40 = Question::create([
                            'quiz_id' =>  $quiz3->id,
                            'question_text' => 'limx→2(x2+3x)=\lim_{x \to 2} (x^2 + 3x) =limx→2(x2+3x)=?',
                            'type' => 'multiple_choice',
                            'points' => 1,
                            ]);

                        $q41 = QuizOption::create([
                            'question_id' =>  $quiz3->id,
                           ' option_text' => '10',
                           ' is_correct' => false,
                        ]);
                      $q42 =  QuizOption::create([
                            'question_id' =>  $quiz3->id,
                            'option_text' => '7',
                            'is_correct' => true,
                        ]);
                     $q43 =   QuizOption::create([
                            'question_id' =>  $quiz3->id,
                            'option_text' => '14',
                            'is_correct' => false,
                        ]);
                    $q44 =    QuizOption::create([
                            'question_id' =>  $quiz3->id,
                            'option_text' => 'Undefined',
                            'is_correct' => false,
                        ]);




                    $q45 =  Question::create([
                            'quiz_id' =>  $quiz3->id,
                            'question_text' => 'A function is continuous at x=ax = ax=a if:?',
                            'type' => 'multiple_choice',
                            'points' => 1,
                            ]);

                       $q46 =  QuizOption::create([
                            'question_id' => $quiz3->id,
                            'option_text' => 'limx→af(x)\lim_{x \to a} f(x)limx→af(x) exists',
                            'is_correct' => false,
                        ]);
                       $q47 =  QuizOption::create([
                            'question_id' => $quiz3->id,
                            'option_text' => "f(a)f(a)f(a) exists",
                            'is_correct' => true,
                        ]);
                       $q48 =  QuizOption::create([
                            'question_id' => $quiz3->id,
                            'option_text' => 'limx→af(x)=f(a)\lim_{x \to a} f(x) = f(a)limx→af(x)=f(a)',
                            'is_correct' => false,
                        ]);
                      $q48 =   QuizOption::create([
                            'question_id' => $quiz3->id,
                            'option_text' => 'All of the above',
                            'is_correct' => false,
                        ]);



                       $q49 = Question::create([
                            'quiz_id' => $quiz3->id,
                            'question_text' => 'limx→∞2x2+1x2+3=\lim_{x \to \infty} \frac{2x^2 + 1}{x^2 + 3} =limx→∞x2+32x2+1= ?',
                            type => multiple_choice,
                            'points' => 1,
                            ]);

                         $q50 = QuizOption::create([
                            'question_id' => $quiz3->id,
                            'option_text' => '0',
                            'is_correct' => false,
                        ]);

                        $q51 = QuizOption::create([
                            'question_id' => $quiz3->id,
                            'option_text' => '1',
                            'is_correct' => false,
                        ]);

                       $q52 = QuizOption::create([
                            'question_id' => $quiz3->id,
                            'option_text' => '2',
                            'is_correct' => false,
                        ]);

                      $q53 =  QuizOption::create([
                            'question_id' => $quiz3->id,
                            'option_text' => 'Infinity',
                            'is_correct' => false,
                        ]);




                         $q54 =  Question::create([
                            'quiz_id' => $quiz3->id,
                            'question_text' => 'If limx→0sinxx=1\lim_{x \to 0} \frac{\sin x}{x} = 1limx→0xsinx=1, then limx→0sin(3x)x=\lim_{x \to 0} \frac{\sin(3x)}{x} =limx→0xsin(3x)=?',
                            type => multiple_choice,
                            'points' => 1,
                            ]);

                        $q55 = QuizOption::create([
                            'question_id' => $quiz3->id,
                            'option_text' => '1',
                            'is_correct' => false,
                        ]);

                      $q56 =    QuizOption::create([
                            'question_id' => $quiz3->id,
                            'option_text' => '0)',
                            'is_correct' => false,
                        ]);

                     $q57 =     QuizOption::create([
                            'question_id' => $quiz3->id,
                            'option_text' => '3',
                            'is_correct' => false,
                        ]);

                   $q58 =       QuizOption::create([
                            'question_id' => $quiz3->id,
                            'option_text' => 'Undefined',
                            'is_correct' => false,
                        ]);



          Review::create([
            'module_id' => $mod4->id,
            'title' => 'Lesson 4 - Applications of Derivatives',
            'content' => ' <h2>🎯 Learning Objectives</h2>


                <p>By the end of this lesson, you should be able to:</p>
                <ul>
                    <li>Apply derivatives to analyze the behavior of functions.</li>
                    <li>Identify increasing/decreasing intervals and local extrema.</li>
                    <li>Solve optimization problems using derivatives.</li>
                    <li>Use derivatives to study motion (velocity, acceleration).</li>
                    <li>Interpret real-life problems involving rates of change.</li>
                </ul>
            </section>

            <section class="core-lesson">
                <h2>📘 Learning Materials & Core Lesson</h2>

                <h3>1. Increasing and Decreasing Functions</h3>
                <p>
                    A function is <strong>increasing</strong> if <code>f′(x)>0f'(x) > 0f′(x)>0, f(x)f(x)f(x)</code>
                    and <strong>decreasing</strong> if <code>f′(x)<0f'(x) < 0f′(x)<0, f(x)f(x)f(x)</code>.
                </p>

                <h3>2. Maxima and Minima (Critical Points)</h3>
                <p>Critical points occur when <code>f′(x)=0f'(x) = 0f′(x)=0 or f′(x)f'(x)f′(x) </code> is undefined.</p>
                <p>Use the <strong>First Derivative Test:</strong></p>
                <ul>
                    <li>If <code>f′(x)f'(x)f′(x) </code> changes from positive to negative → local maximum.</li>
                    <li>If <code>f′(x)f'(x)f′(x) </code> changes from negative to positive → local minimum.</li>
                </ul>

                <h3>3. Concavity and Inflection Points</h3>
                <ul>
                    <li>If <code>f′′(x)>0f''(x) > 0f′′(x)>0, </code>, the function is concave up (cup-shaped).</li>
                    <li>If <code>f′′(x)<0f''(x) < 0f′′(x)<0, </code>, the function is concave down (cap-shaped).</li>
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
                    <li>Position: <code>s(t)s(t)s(t).</code></li>
                    <li>Velocity: <code>v(t)=s′(t)v(t) = s'(t)v(t)=s′(t).</code></li>
                    <li>Acceleration: <code>a(t)=v′(t)=s′′(t)a(t) = v'(t) = s''(t)a(t)=v′(t)=s′′(t).</code></li>
               </ul>
               <p>Velocity describes the rate of change of position; acceleration describes the rate of change of velocity.</p>

            <section class="references">
                <h2>📚 References</h2>
                <ul>
                    <li>Khan Academy. (n.d.). <em>Applications of Derivatives.</em> <a href="https://www.khanacademy.org/math/calculus-1" target="_blank">https://www.khanacademy.org/math/calculus-1</a></li>
                    <li>Paul’s Online Notes. (n.d.). <em>Applications of Derivatives.</em> <a href="http://tutorial.math.lamar.edu" target="_blank">http://tutorial.math.lamar.edu</a></li>
                    <li>MIT OpenCourseWare. (n.d.). <em>Single Variable Calculus.</em></li>
                </ul>


                   $prac4 = Practice::create([
                     module_id' => $mod4->id,
                    'title' => 'Lesson 4 - Applications of Derivatives',
                    'content' => '<p>Practice Problems</p>',
                ]);


            $pq11 = PracticeQuestion::create([
            'practice_id' => $prac4->id,
            'question_text' => "Find intervals where the function is increasing or decreasing.",
            'type' => 'Increasing/Decreasing',
            'details' => [
                         'model_answer' =>  '<p>1. f(x)=x2−4x+3f(x) = x^2 - 4x + 3f(x)=x2−4x+3</p> '

                                      ]


               $pq12 = PracticeQuestion::create([
                'practice_id' => $prac4->id,
                'question_text' => 'Solve the following problem:',
                'type' => 'Optimization',
                'details' => [
               'model_answer' =>'  <p>1. Find two numbers whose sum is 10 and whose product is maximum.</p>'

                      ]


              $pq13 = PracticeQuestion::create([
                'practice_id' => $prac4->id,
                'question_text' => "Check if the following functions are continuous at the given point:",
                'type' => 'Motion',
                'details' => [
               'model_answer' =>  'Given s(t)=t3−6t2+9ts(t) = t^3 - 6t^2 + 9ts(t)=t3−6t2+9t:'
                      ]



                 $quiz4 = Quiz::create([
                    'module_id' => $mod4->id,
                    'title' =>  "Quiz for $mod4->Applications of Derivatives",
                   ]);


                            $q59 =  Question::create([
                            'quiz_id' => $quiz4->id,
                            'question_text' => 'f f(x)=x3−3xf(x) = x^3 - 3xf(x)=x3−3x, find critical points.?',
                            'type' => 'multiple_choice',
                            'points' => 1,
                            ]);

                     $q60 =  QuizOption::create([
                            'question_id' => $quiz4->id,
                            'option_text' => 'x=0,±3x = 0, \pm \sqrt{3}x=0,±3',
                           ' is_correct' => false,
                        ]);
                        $q61 =   QuizOption::create([
                            'question_id' => $quiz4->id,
                            'option_text' => 'x=0,±1x = 0, \pm 1x=0,±1',
                            'is_correct' => true,
                        ]);
                      $q62 =     QuizOption::create([
                            'question_id' => $quiz4->id,
                            'option_text' => ' x=±1x = \pm 1x=±1',
                            'is_correct' => false,
                        ]);
                 $q63 =    QuizOption::create([
                            'question_id' => $quiz4->id,
                            'option_text' => 'x=0x = 0x=0',
                            'is_correct' => false,
                        ]);




                      $q64 =  Question::create([
                            'quiz_id' => $quiz4->id,
                            'question_text' => 'If f′′(x)>0f''(x) > 0f′′(x)>0, then the graph is:?',
                           ' type '=> multiple_choice,
                            'points' => 1,
                            ]);

                         $q65 =  QuizOption::create([
                            'question_id' => $quiz4->id,
                            'option_text' => 'Increasing',
                            'is_correct' => false,
                        ]);
                       $q66 =    QuizOption::create([
                            'question_id' => $quiz4->id,
                            'option_text' => 'Decreasing',
                            'is_correct' => true,
                        ]);
                     $q67 =      QuizOption::create([
                            'question_id' => $quiz4->id,
                            'option_text' => 'Concave up',
                            'is_correct' => false,
                        ]);
                       $q68 =    QuizOption::create([
                            'question_id' => $quiz4->id,
                            'option_text' => 'Concave down',
                            'is_correct' => false,
                        ]);



                        $q69 =   Question::create([
                            'quiz_id' => $quiz4->id,
                            'question_text' => 'A ball’s position is s(t)=5t2s(t) = 5t^2s(t)=5t2. Its velocity is:?',
                            type => multiple_choice,
                            'points' => 1,
                            ]);

                             $q70 =  QuizOption::create([
                            'question_id' => $quiz4->id,
                            'option_text' => 10t10t10t,
                            'is_correct' => false,
                        ]);

                      $q71 = QuizOption::create([
                            'question_id' => $quiz4->id,
                            'option_text' => '5t5t5t',
                            'is_correct' => false,
                        ]);

                      $q72 =  QuizOption::create([
                            'question_id' => $quiz4->id,
                            'option_text' => '2t2t2t',
                            'is_correct' => false,
                        ]);

                      $q73 =  QuizOption::create([
                            'question_id' => $quiz4->id,
                            'option_text' => 't2t^2t2',
                            'is_correct' => false,
                        ]);




                        $q74 = Question::create([
                            'quiz_id' => $quiz4->id,
                            'question_text' => 'The maximum of f(x)=−x2+6x−5f(x) = -x^2 + 6x - 5f(x)=−x2+6x−5 occurs at:?',
                            'type' => 'multiple_choice',
                            'points' => 1,
                            ]);

                          $q75 = QuizOption::create([
                            'question_id' => $quiz4->id,
                            'option_text' => 'x=0x = 0x=0',
                            'is_correct' => false,
                        ]);

                          $q76 = QuizOption::create([
                            'question_id' => $quiz4->id,
                            'option_text' => ' x=2x = 2x=2',
                            'is_correct' => false,
                        ]);

                        $q77 =QuizOption::create([
                            'question_id' => $quiz4->id,
                            'option_text' => 'x=3x = 3x=3',
                            'is_correct' => false,
                        ]);

                       $q78 = QuizOption::create([
                            'question_id' => $quiz4->id,
                            'option_text' => 'x=5x = 5x=5',
                            'is_correct' => false,
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



           $prac5     = Practice::create([
    'module_id' => $mod5->id, // replace with your Lesson 2 module variable
    'title' => 'Lesson 5 - Order of Rotation',
    'content' => '<p>Practice Problems on Arithmetic Sequences</p>',
                ]);


                $pq14 = PracticeQuestion::create([
                'practice_id' => $prac5->id,
                'question_text' => "Find the order of rotation for each figure.",
                'type' => 'dentify the Order of Rotation',
                'details' => [

                       'model_answer' =>'<p>1. Rectangle</p>
                                         <p>2. Equilateral Triangle</p>
                                         <p>3. Regular Pentagon</p>
                                         <p>4. Letter “H”</p>'

                             ]



                     $pq15 = PracticeQuestion::create([
                'practice_id' => $prac5->id,
                'question_text' => "Find the angle of rotation for the following shapes.",
                'type' => 'Angle of Rotation',
                'details' => [

                   'model_answer' =>' <p>1. Square</p>
                                <p>2. Regular Hexagon</p>
                                 <p>3. Rhombus</p>'
                             ]


               $quiz5 = Quiz::create([
                    'module_id' => $mod4->id,
                    'title' =>  "Quiz for $mod5-> Order of Rotation",
                   ]);

                        $q79 = Question::create([
                            'quiz_id' => $quiz5->id,
                            'question_text' => ' A figure that looks the same 4 times in a full turn has an order of rotation:',
                            'type' => 'multiple_choice',
                            'points' => 1,
                            ]);

                         $q80 = QuizOption::create([
                            'question_id' => $quiz5->id,
                            'option_text' => '2',
                            'is_correct' => false,
                        ]);

                           $q81 = QuizOption::create([
                            'question_id' => $quiz5->id,
                            'option_text' => '3',
                            'is_correct' => false,
                        ]);

                           $q82 = QuizOption::create([
                            'question_id' => $quiz5->id,
                            'option_text' => '4',
                            'is_correct' => false,
                        ]);


                             $q83 = QuizOption::create([
                            'question_id' => $quiz5->id,
                            'option_text' => '5',
                            'is_correct' => false,
                        ]);



                            $q84= Question::create([
                            'quiz_id' => $quiz5->id,
                            'question_text' => '  A circle has:?',
                            'type' => 'multiple_choice',
                            'points' => 1,
                            ]);


                             $q85 = QuizOption::create([
                            'question_id' => $quiz5->id,
                            'option_text' => 'Order 1',
                            'is_correct' => false,
                        ]);




                               $q86 = QuizOption::create([
                            'question_id' => $quiz5->id,
                            'option_text' => 'Order 2',
                            'is_correct' => false,
                        ]);

                           $q87 = QuizOption::create([
                            'question_id' => $quiz5->id,
                            'option_text' => 'Infinite order of rotation',
                            'is_correct' => false,
                        ]);

                             $q87 = QuizOption::create([
                            'question_id' => $quiz5->id,
                            'option_text' => ' No rotational symmetry',
                            'is_correct' => false,
                        ]);


                          $q88= Question::create([
                            'quiz_id' => $quiz5->id,
                            'question_text' => ' Which letter has rotational symmetry of order 2?',
                            'type' => 'multiple_choice',
                            'points' => 1,
                            ]);


                            $q89 = QuizOption::create([
                            'question_id' => $quiz5->id,
                            'option_text' => ' N',
                            'is_correct' => false,
                                   ]);

                            $q90= QuizOption::create([
                            'question_id' => $quiz5->id,
                            'option_text' => ' H',
                            'is_correct' => false,
                        ]);


                        $q91 = QuizOption::create([
                            'question_id' => $quiz5->id,
                            'option_text' => ' S',
                            'is_correct' => false,
                        ]);

                      $q92 = QuizOption::create([
                            'question_id' => $quiz5->id,
                            'option_text' => ' Z',
                            'is_correct' => false,
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



                     $prac6     = Practice::create([
                    'module_id' => $mod6->id, // replace with your Lesson 2 module variable
                    'title' => 'Lesson 6 - The Nature of Mathematics',
                    'content' => '<p>Practice Problems on Arithmetic Sequences</p>',
                                ]);




                         $pq16 = PracticeQuestion::create([
                        'practice_id' => $prac6->id,
                        'question_text' => "Decide if the following statements are <strong>True</strong> or <strong>False.",
                        'type' => 'True or False',
                        'details' => [

                           'model_answer' =>' <p>1. Mathematics is only about numbers.</p>
                                             <p>2. Mathematics is a universal language.</p>
                                             <p>3. The Fibonacci sequence is found in nature.</p>'
                                     ]


                         $pq17 = PracticeQuestion::create([
                        'practice_id' => $prac6->id,
                        'question_text' =>'Answer briefly.',
                        'type' => 'Reflection Writing',
                        'details' => [

                           'model_answer' =>'>“How do I use mathematics in my daily life?”</p>'
                                     ]




                         $pq18 = PracticeQuestion::create([
                        'practice_id' => $prac6->id,
                        'question_text' =>'Match the term with its definition.',
                        'type' => 'nderstanding Terminology',
                        'details' => [

                           'model_answer' =>' <table class="match-table">
                    <tr>
                        <td><input type="text" onkeydown="return /[a-d]/i.test(event.key)" maxlength="1" class="answer-input small"> Medicine</td>
                        <td>a) Architecture</td>
                    </tr>
                    <tr>
                        <td><input type="text" onkeydown="return /[a-d]/i.test(event.key)" maxlength="1" class="answer-input small"> Construction</td>
                        <td>b) Dosage calculation</td>
                    </tr>
                    <tr>
                        <td><input type="text" onkeydown="return /[a-d]/i.test(event.key)" maxlength="1" class="answer-input small"> Business</td>
                        <td>c) Budgeting and profit analysis</td>
                    </tr>
                </table>'


                       $pq18 = PracticeQuestion::create([
                        'practice_id' => $prac6->id,
                        'question_text' =>'esearch one natural pattern (e.g., honeycomb, sunflower, seashells) that shows mathematics in nature and present to the class.</p>.',
                        'type' => 'Explore',
                        'details' => [

                           'model_answer' =>'<textarea class="answer-area" placeholder="Write your research here."></textarea>'



                  $quiz6 = Quiz::create([
                    'module_id' => $mod6->id,
                    'title' =>  "Quiz for $mod6-> The Nature of Mathematics",
                   ]);

                        $q93 = Question::create([
                            'quiz_id' => $quiz6->id,
                            'question_text' => ' Mathematics originated from the Greek word meaning?                                                                                                                                                                        ',
                            'type' => 'multiple_choice',
                            'points' => 1,
                            ]);

                         $q94 = QuizOption::create([
                            'question_id' => $quiz6->id,
                            'option_text' => 'Measure',
                            'is_correct' => false,
                        ]);


                         $q95 = QuizOption::create([
                            'question_id' => $quiz6->id,
                            'option_text' => 'Knowledge',
                            'is_correct' => false,
                        ]);

                            $q96 = QuizOption::create([
                            'question_id' => $quiz6->id,
                            'option_text' => 'Science',
                            'is_correct' => false,
                        ]);

                       $q97 = QuizOption::create([
                            'question_id' => $quiz6->id,
                            'option_text' => 'Pattern',
                            'is_correct' => false,
                        ]);

                         $q98 = Question::create([
                            'quiz_id' => $quiz6->id,
                            'question_text' => ' Which is NOT a characteristic of mathematics? '
                            'type' => 'multiple_choice',
                            'points' => 1,
                            ]);

                         $q99 = QuizOption::create([
                            'question_id' => $quiz6->id,
                            'option_text' => 'Abstract',
                            'is_correct' => false,
                        ]);

                         $q100 = QuizOption::create([
                            'question_id' => $quiz6->id,
                            'option_text' => 'Precise',
                            'is_correct' => false,
                        ]);

                            $q101 = QuizOption::create([
                            'question_id' => $quiz6->id,
                            'option_text' => 'Illogical',
                            'is_correct' => false,
                        ]);

                       $q102 = QuizOption::create([
                            'question_id' => $quiz6->id,
                            'option_text' => 'Universal',
                            'is_correct' => false,
                        ]);

                   $q103 = Question::create([
                            'quiz_id' => $quiz6->id,
                            'question_text' => ' Which of the following best describes mathematics as a “tool”?                                                                                                                                                                      ',
                            'type' => 'multiple_choice',
                            'points' => 1,
                            ]);

                         $q104 = QuizOption::create([
                            'question_id' => $quiz6->id,
                            'option_text' => 'Used to express emotions',
                            'is_correct' => false,
                        ]);

                         $q105 = QuizOption::create([
                            'question_id' => $quiz6->id,
                            'option_text' => 'Used in solving real-world problems',
                            'is_correct' => false,
                        ]);

                            $q106 = QuizOption::create([
                            'question_id' => $quiz6->id,
                            'option_text' => 'Used only by scientists',
                            'is_correct' => false,
                        ]);

                       $q107 = QuizOption::create([
                            'question_id' => $quiz6->id,
                            'option_text' => 'Used only for counting numbers',
                            'is_correct' => false,
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


                        $prac7  = Practice::create([
                    'module_id' => $mod7->id, // replace with your Lesson 2 module variable
                    'title' => 'Lesson 7 - The Fibonacci Sequence',
                    'content' => '<p>Practice Problems on Arithmetic Sequences</p>',
                                ]);




                         $pq19 = PracticeQuestion::create([
                        'practice_id' => $prac7->id,
                        'question_text' =>'Write the next 6 terms of the sequence.',
                        'type' => 'Generate Fibonacci Numbers',
                        'details' => [

                           'model_answer' =>'<p>0, 1, 1, 2, 3, 5, ___, ___, ___, ___, ___, ___</p>'

                     ]);

                     $pq20 = PracticeQuestion::create([
                        'practice_id' => $prac7->id,
                        'question_text' =>'List at least 3 examples of Fibonacci numbers in nature or art.',
                        'type' => 'Fibonacci in Nature',
                        'details' => [

                           'model_answer' =>'<p>0, 1, 1, 2, 3, 5, ___, ___, ___, ___, ___, ___</p>'
                     ]);

                   $pq21 = PracticeQuestion::create([
                        'practice_id' => $prac7->id,
                        'question_text' =>'Compute the ratio of consecutive Fibonacci terms:',
                        'type' => 'Golden Ratio Connection',
                        'details' => [

                           'model_answer' =>' <p>
                                           21/13, 34/21, 55/34
                                              </p>
                                          <p>What number do they approach?</p>'
                     ]);


                            $quiz7 = Quiz::create([
                    'module_id' => $mod6->id,
                    'title' =>  "Quiz for $mod6-> TThe Fibonacci Sequence",
                   ]);

                        $q108 = Question::create([
                            'quiz_id' => $quiz7->id,
                            'question_text' => ' The 8th Fibonacci number is? ',
                            'type' => 'multiple_choice',
                            'points' => 1,
                            ]);

                         $q109 = QuizOption::create([
                            'question_id' => $quiz7->id,
                            'option_text' => '13',
                            'is_correct' => false,
                        ]);

                     $q110 = QuizOption::create([
                            'question_id' => $quiz7->id,
                            'option_text' => '21',
                            'is_correct' => false,
                        ]);

                           $q111 = QuizOption::create([
                            'question_id' => $quiz7->id,
                            'option_text' => '34',
                            'is_correct' => false,
                        ]);


                         $q112 = QuizOption::create([
                            'question_id' => $quiz7->id,
                            'option_text' => '55',
                            'is_correct' => false,
                        ]);



                        $q113 = Question::create([
                            'quiz_id' => $quiz7->id,
                            'question_text' => ' Which formula defines the Fibonacci sequence?',
                            'type' => 'multiple_choice',
                            'points' => 1,
                            ]);




                            $q114 = QuizOption::create([
                            'question_id' => $quiz7->id,
                            'option_text' => 'Fn=Fn−1⋅Fn−2F_n = F_{n-1} \cdot F_{n-2}Fn=Fn−1⋅Fn−2',
                            'is_correct' => false,
                        ]);

                     $q115 = QuizOption::create([
                            'question_id' => $quiz7->id,
                            'option_text' => 'Fn=Fn−1+Fn−2F_n = F_{n-1} + F_{n-2}Fn=Fn−1+Fn−2',
                            'is_correct' => false,
                        ]);

                           $q116 = QuizOption::create([
                            'question_id' => $quiz7->id,
                            'option_text' => 'Fn=2Fn−1F_n = 2F_{n-1}Fn=2Fn−1',
                            'is_correct' => false,
                        ]);


                         $q117 = QuizOption::create([
                            'question_id' => $quiz7->id,
                            'option_text' => 'n=n2F_n = n^2Fn=n2',
                            'is_correct' => false,
                        ]);




                        $q118 = Question::create([
                            'quiz_id' => $quiz7->id,
                            'question_text' => ' he ratio of consecutive Fibonacci numbers approaches:',
                            'type' => 'multiple_choice',
                            'points' => 1,
                            ]);




                            $q119 = QuizOption::create([
                            'question_id' => $quiz7->id,
                            'option_text' => 'π (3.14)',
                            'is_correct' => false,
                        ]);

                     $q120 = QuizOption::create([
                            'question_id' => $quiz7->id,
                            'option_text' => 'Golden Ratio (≈1.618)',
                            'is_correct' => false,
                        ]);

                           $q121 = QuizOption::create([
                            'question_id' => $quiz7->id,
                            'option_text' => 'Golden Ratio (≈1.618)',
                            'is_correct' => false,
                        ]);


                         $q122 = QuizOption::create([
                            'question_id' => $quiz7->id,
                            'option_text' => '√2 (1.41)',
                            'is_correct' => false,
                        ]);


    }
}
