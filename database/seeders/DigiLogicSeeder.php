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

class DigiLogicSeeder extends Seeder
{
    public function run(): void
    {
        $course = Course::create([
            'title' => 'Digital Logic',
            'description' => 'Digital Logic is all about learning how change works. Instead of diving deep into technical math,
                              this course helps non-STEM students see how limits and derivatives connect to real-life situations.
                              It`s designed to build intuition, not just memorize formulas or mechanical applications for both.',
            'image_path' => 'imgs/Catalog_Logic.jpg',
            'icon_path' => 'imgs/Icon_Logic.png',
            'objectives' => [
                'Define programming and explain what programmers do.',
                'Understand key programming terminology.',
                'Know what Python is and why it’s good for beginners',
                'Create your first program.',
                'Apply learning strategies that make programming easier'
            ]
        ]);

        $mod1 = Module::create([
            'course_id' => $course->id,
            'title' => 'Module 1: Truth Table',
            'order' => 1,
        ]);

        Review::create([
            'module_id' => $mod1->id,
            'title' => 'Lesson 1: Truth Tables',
            'content' => '<h2>🎯 Learning Objectives</h2>
                <p>By the end of this lesson, you will be able to:</p>
                <ul>
                    <li>Identify the main logical connectives and their meaning:
                        <ul>
                            <li>Negation (¬)</li>
                            <li>Conjunction (AND, ∧)</li>
                            <li>Disjunction (OR, ∨)</li>
                            <li>Implication (if-then, →)</li>
                            <li>Biconditional (if and only if, ↔)</li>
                        </ul>
                    </li>
                    <li>Construct truth tables for simple logical connectives individually.</li>
                    <li>Construct combined truth tables for compound logical statements by building intermediate columns.</li>
                    <li>Interpret the result of a truth table to determine whether a compound statement is true or false under specific assignments.</li>
                    <li>Systematically list all possible assignments of truth values for multiple statements.</li>
                </ul>

                <h2>📘 Learning Materials & Core Lesson</h2>

                <h3>Definitions and Behavior of Logical Connectives</h3>
                <table>
                    <tr>
                        <th>Connective</th>
                        <th>Symbol</th>
                        <th>Meaning / Truth Condition</th>
                    </tr>
                    <tr>
                        <td>Negation</td>
                        <td>¬P</td>
                        <td>True when P is False; False when P is True</td>
                    </tr>
                    <tr>
                        <td>Conjunction</td>
                        <td>P ∧ Q</td>
                        <td>True only when both P and Q are True; False otherwise</td>
                    </tr>
                    <tr>
                        <td>Disjunction (inclusive)</td>
                        <td>P ∨ Q</td>
                        <td>True when at least one of P or Q is True; False only if both are False</td>
                    </tr>
                    <tr>
                        <td>Implication</td>
                        <td>P → Q</td>
                        <td>False only when P is True and Q is False; True otherwise</td>
                    </tr>
                    <tr>
                        <td>Biconditional</td>
                        <td>P ↔ Q</td>
                        <td>True when P and Q have the same truth value; False otherwise</td>
                    </tr>
                </table>

                <h3>Constructing Truth Tables</h3>
                <ol>
                    <li>List the simple statements (P, Q, etc.).</li>
                    <li>Determine the number of possible combinations: 2^n for n statements.</li>
                    <li>Create a table with columns for each simple statement and subexpression.</li>
                    <li>Fill the rows systematically (e.g., lexicographic order).</li>
                    <li>Compute the truth value of each subexpression for each row.</li>
                </ol>

                <h3>Examples of Truth Tables</h3>

                <h4>Negation (¬P)</h4>
                <table>
                    <tr><th>P</th><th>¬P</th></tr>
                    <tr><td>T</td><td>F</td></tr>
                    <tr><td>F</td><td>T</td></tr>
                </table>

                <h4>Conjunction (P ∧ Q)</h4>
                <table>
                    <tr><th>P</th><th>Q</th><th>P ∧ Q</th></tr>
                    <tr><td>T</td><td>T</td><td>T</td></tr>
                    <tr><td>T</td><td>F</td><td>F</td></tr>
                    <tr><td>F</td><td>T</td><td>F</td></tr>
                    <tr><td>F</td><td>F</td><td>F</td></tr>
                </table>

                <h4>Disjunction (P ∨ Q)</h4>
                <table>
                    <tr><th>P</th><th>Q</th><th>P ∨ Q</th></tr>
                    <tr><td>T</td><td>T</td><td>T</td></tr>
                    <tr><td>T</td><td>F</td><td>T</td></tr>
                    <tr><td>F</td><td>T</td><td>T</td></tr>
                    <tr><td>F</td><td>F</td><td>F</td></tr>
                </table>

                <h4>Implication (P → Q)</h4>
                <table>
                    <tr><th>P</th><th>Q</th><th>P → Q</th></tr>
                    <tr><td>T</td><td>T</td><td>T</td></tr>
                    <tr><td>T</td><td>F</td><td>F</td></tr>
                    <tr><td>F</td><td>T</td><td>T</td></tr>
                    <tr><td>F</td><td>F</td><td>T</td></tr>
                </table>

                <h4>Biconditional (P ↔ Q)</h4>
                <table>
                    <tr><th>P</th><th>Q</th><th>P ↔ Q</th></tr>
                    <tr><td>T</td><td>T</td><td>T</td></tr>
                    <tr><td>T</td><td>F</td><td>F</td></tr>
                    <tr><td>F</td><td>T</td><td>F</td></tr>
                    <tr><td>F</td><td>F</td><td>T</td></tr>
                </table>

                <h4>Compound Statement Example</h4>
                <p>Construct the truth table for ¬P ∧ (P → Q):</p>
                <table>
                    <tr><th>P</th><th>Q</th><th>¬P</th><th>P → Q</th><th>¬P ∧ (P → Q)</th></tr>
                    <tr><td>T</td><td>T</td><td>F</td><td>T</td><td>F</td></tr>
                    <tr><td>T</td><td>F</td><td>F</td><td>F</td><td>F</td></tr>
                    <tr><td>F</td><td>T</td><td>T</td><td>T</td><td>T</td></tr>
                    <tr><td>F</td><td>F</td><td>T</td><td>T</td><td>T</td></tr>
                </table>

                <h2>📚 References</h2>
                <ul>
                    <li><a href="https://sites.millersville.edu/bikenaga/math-proof/truth-tables/truth-tables.html" target="_blank">https://sites.millersville.edu/bikenaga/math-proof/truth-tables/truth-tables.html</a></li>
                </ul>',
        ]);


        $prac1 = Practice::create([
            'module_id' => $mod1->id,
            'title' => 'Lesson 1 Practice: Truth Tables',
            'content' => '<p>Practice Problems</p>',
        ]);

        // Possible ba na inputs can only be T or F?
        $pq1 = PracticeQuestion::create([
            'practice_id' => $prac1->id,
            'question_text' => "Complete the truth table for the expression: P ∨ ¬Q",
            'type' => 'table_making',
            'details' => [
                'headers' => ['P', 'Q', '¬Q', 'P ∨ ¬Q'],
                'rows' => [
                    // Row 1: T, T, [Input: F], T
                    ['T', 'T', 'answer:F', 'T'],

                    // Row 2: T, [Input: F], T, T
                    ['T', 'answer:F', 'T', 'T'],

                    // Row 3: [Input: F], T, [Input: F], F
                    ['answer:F', 'T', 'answer:F', 'F'],

                    // Row 4: F, [Input: F], T, [Input: T]
                    ['F', 'answer:F', 'T', 'answer:T'],
                ]
            ]
        ]);

        // Practice 2 – Three Variables Truth Table
        $pq2 = PracticeQuestion::create([
            'practice_id' => $prac1->id,
            'question_text' => "Create the full truth table for: (P → Q) ∧ (Q → R)",
            'type' => 'identification',
            'details' => [
                'html' => 'h2>Practice 2 – Three Variables</h2>
                            <p>Create a full truth table for:</p>
                            <p><strong>(P → Q) ∧ (Q → R)</strong></p>
                            <p class="hint">(Hint: you will need 8 rows since there are 3 variables.)</p>'
            ]
        ]);

        PracticeOption::create([
            'practice_question_id' => $pq2->id,
            'option_text' => "P=T,Q=T,R=T → T; P=T,Q=T,R=F → F; P=T,Q=F,R=T → F; P=T,Q=F,R=F → F; P=F,Q=T,R=T → T; P=F,Q=T,R=F → F; P=F,Q=F,R=T → T; P=F,Q=F,R=F → T",
            'is_correct' => true,
        ]);

        $quiz1 = Quiz::create([
            'module_id' => $mod1->id,
            'title' => "Quiz for $mod1->title",
        ]);

        $q1 = Question::create([
            'quiz_id' => $quiz1->id,
            'question_text' => 'Construct the truth table for: P → (Q ∨ ¬P)',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q1->id,
            'option_text' => "P=T,Q=T → T; P=T,Q=F → F; P=F,Q=T → T; P=F,Q=F → T",
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q1->id,
            'option_text' => "P=T,Q=T → F; P=T,Q=F → T; P=F,Q=T → F; P=F,Q=F → F",
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q1->id,
            'option_text' => "P=T,Q=T → T; P=T,Q=F → T; P=F,Q=T → T; P=F,Q=F → F",
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q1->id,
            'option_text' => "P=T,Q=T → F; P=T,Q=F → F; P=F,Q=T → F; P=F,Q=F → T",
            'is_correct' => false,
        ]);

        /* Question 2: ¬P ∨ (P ∧ Q) when P=T, Q=F */
        $q2 = Question::create([
            'quiz_id' => $quiz1->id,
            'question_text' => 'Determine the truth value of: ¬P ∨ (P ∧ Q) when P=T, Q=F',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q2->id,
            'option_text' => "True",
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q2->id,
            'option_text' => "False",
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q2->id,
            'option_text' => "Cannot be determined",
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q2->id,
            'option_text' => "True for P only",
            'is_correct' => false,
        ]);

        /* Question 3: (P ∧ Q) → (P ∨ R) with P,Q,R */
        $q3 = Question::create([
            'quiz_id' => $quiz1->id,
            'question_text' => 'Build a truth table for: (P ∧ Q) → (P ∨ R) (Use P,Q,R)',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q3->id,
            'option_text' => "P=T,Q=T,R=T → T; P=T,Q=T,R=F → T; P=T,Q=F,R=T → T; P=T,Q=F,R=F → T; P=F,Q=T,R=T → T; P=F,Q=T,R=F → F; P=F,Q=F,R=T → T; P=F,Q=F,R=F → F",
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q3->id,
            'option_text' => "All rows True",
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q3->id,
            'option_text' => "All rows False",
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q3->id,
            'option_text' => "Alternating True and False",
            'is_correct' => false,
        ]);

        /* Question 4: ¬(P → Q) ∧ (R ∨ P) when P=F, Q=F, R=T */
        $q4 = Question::create([
            'quiz_id' => $quiz1->id,
            'question_text' => 'Evaluate: ¬(P → Q) ∧ (R ∨ P) when P=F, Q=F, R=T',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q4->id,
            'option_text' => "True",
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q4->id,
            'option_text' => "False",
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q4->id,
            'option_text' => "Cannot be determined",
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q4->id,
            'option_text' => "True only if P is True",
            'is_correct' => false,
        ]);

        /* Question 5: Connective of ¬(P → Q) ∧ (R ∨ P) */
        $q5 = Question::create([
            'quiz_id' => $quiz1->id,
            'question_text' => 'Which connective is being described by: ¬(P → Q) ∧ (R ∨ P) with P=F, Q=F, R=T',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q5->id,
            'option_text' => "Conjunction (AND)",
            'is_correct' => true,
        ]);
        QuizOption::create([
            'question_id' => $q5->id,
            'option_text' => "Disjunction (OR)",
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q5->id,
            'option_text' => "Implication (→)",
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q5->id,
            'option_text' => "Negation (¬)",
            'is_correct' => false,
        ]);


        $mod2 = Module::create([
            'course_id' => $course->id,
            'title' => 'Module 2: Arithmetic Sequences',
            'order' => 2,
        ]);

        Review::create([
            'module_id' => $mod2->id,
            'title' => 'Lesson 2: Arithmetic Sequences',
            'content' => '<h2>🎯 Learning Objectives</h2>
                <p>By the end of this lesson, students should be able to:</p>
                <ul>
                    <li>Define what an arithmetic sequence is; identify its first term and common difference.</li>
                    <li>Distinguish arithmetic sequences from other types of sequences.</li>
                    <li>Use the nth term formula to find any term in an arithmetic sequence.</li>
                    <li>Use both forms of the sum formula (one using a<sub>1</sub> and d, another using a<sub>1</sub> and a<sub>n</sub>).</li>
                    <li>Solve problems involving arithmetic sequences in real-life contexts (e.g., financial, positional patterns).</li>
                </ul>

                <h2>📘 Learning Materials & Core Lesson</h2>

                <ul>
                    <li><strong>First term:</strong> a<sub>1</sub> (or sometimes just a)</li>
                    <li><strong>Common difference:</strong> d (positive, negative, or zero)</li>
                    <li>Sequence notation: a<sub>1</sub>, a<sub>2</sub>, a<sub>3</sub>, …, a<sub>n</sub>, …</li>
                    <li><strong>Nth term formula:</strong> a<sub>n</sub> = a<sub>1</sub> + (n-1)d</li>
                    <li><strong>Recursive formula:</strong> a<sub>n</sub> = a<sub>n-1</sub> + d</li>
                    <li><strong>Sum of first n terms (arithmetic series):</strong>
                        <p>S<sub>n</sub> = n/2 [2a<sub>1</sub> + (n − 1)d] or S<sub>n</sub> = n/2 (a<sub>1</sub> + a<sub>n</sub>)</p>
                    </li>
                    <li>How to find d, n, or a<sub>n</sub> depending on what is given.</li>
                </ul>

                <h3>Detailed Explanations & Examples</h3>

                <h4>What makes a sequence arithmetic</h4>
                <ul>
                    <li>There is a constant difference d such that for all k ≥ 2, a<sub>k</sub> - a<sub>k-1</sub> = d</li>
                    <li>Example: 3, 6, 9, 12, 15, … has a<sub>1</sub> = 3, d = 3</li>
                    <li>Example of decreasing sequence: 80, 75, 70, 65, … has a<sub>1</sub> = 80, d = -5</li>
                </ul>

                <h4>Nth Term (General Term)</h4>
                <ul>
                    <li>If you know a<sub>1</sub> and d, find any term using a<sub>n</sub> = a<sub>1</sub> + (n-1)d</li>
                    <li>Example: Sequence 3, 6, 9, 12, …, a<sub>1</sub> = 3, d = 3 → a<sub>5</sub> = 3 + (5-1) × 3 = 15</li>
                    <li>If a later term is given instead of a<sub>1</sub>, you can solve for a<sub>1</sub> or n by manipulating the formula.</li>
                </ul>

                <h4>Sum of Terms (Arithmetic Series)</h4>
                <ul>
                    <li>Definition: sum of the first n terms is called an arithmetic series</li>
                    <li>Formulas:</li>
                    <p>1. S<sub>n</sub> = n/2 [2a<sub>1</sub> + (n-1)d] (use when a<sub>1</sub>, d, n are known)</p>
                    <p>2. S<sub>n</sub> = n/2 (a<sub>1</sub> + a<sub>n</sub>) (use when a<sub>1</sub>, a<sub>n</sub>, n are known)</p>
                    <li>Derivation sketch: sum forwards and backwards, add term-pairs, then solve for S<sub>n</sub></li>
                    <li>Example (salary increase): a<sub>1</sub> = 200,000, d = 25,000, n = 5 → S<sub>5</sub> = 5/2 [2(200,000) + 4×25,000] = 1,250,000</li>
                </ul>

                <h3>Example Problems</h3>
                <ul>
                    <li>Example 1: Sequence −5, −7/2, −2, … Find a<sub>n</sub>.
                        <ul>
                            <li>a<sub>1</sub> = -5, d = 3/2 → a<sub>n</sub> = -5 + (n-1) × 3/2</li>
                        </ul>
                    </li>
                    <li>Example 2: Which term of −3, −8, −13, −18, … is -248?
                        <ul>
                            <li>a<sub>1</sub> = -3, d = -5 → -3 + (n-1)(-5) = -248 → n = 50</li>
                        </ul>
                    </li>
                    <li>Example 3: Sum of -3, -8, -13, -18, …, -248 (50 terms)
                        <ul>
                            <li>S<sub>50</sub> = 50/2 (-3 + -248) = 25 × -251 = -6275</li>
                        </ul>
                    </li>
                </ul>

                <h2>📚 References</h2>
                <ul>
                    <li><a href="https://www.cuemath.com/algebra/arithmetic-sequence/" target="_blank">https://www.cuemath.com/algebra/arithmetic-sequence/</a></li>
                </ul>',
        ]);
        // Create Practice container for Lesson 2
        $prac2 = Practice::create([
            'module_id' => $mod2->id, // replace with your Lesson 2 module variable
            'title' => 'Lesson 2 Practice: Arithmetic Sequences',
            'content' => '<p>Practice Problems on Arithmetic Sequences</p>',
        ]);

        // Section I – Identify a1, d, and write formula
        $pq3 = PracticeQuestion::create([
            'practice_id' => $prac2->id,
            'question_text' => "Sequence: 3, 8, 13, 18, … \nIdentify a₁, d, and write the formula.",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'a1 = 3; d = 5; formula: a_n = 3 + (n-1)*5'
            ]
        ]);

        $pq4 = PracticeQuestion::create([
            'practice_id' => $prac2->id,
            'question_text' => "Sequence: 20, 16, 12, 8, … \nIdentify a₁, d, and write the formula.",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'a1 = 20; d = -4; formula: a_n = 20 + (n-1)*(-4)'
            ]
        ]);

        $pq5 = PracticeQuestion::create([
            'practice_id' => $prac2->id,
            'question_text' => "Sequence: −12, −1, −32, −2, … \nIdentify a₁, d, and write the formula.",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'a1 = -12; d = ?; formula: a_n = ...' // Fill if known
            ]
        ]);

        // Section II – Find Specific Terms
        $pq6 = PracticeQuestion::create([
            'practice_id' => $prac2->id,
            'question_text' => "What is a₁₅ for the sequence 5, 9, 13, … ?",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'a15 = 5 + (15-1)*4 = 61'
            ]
        ]);

        $pq7 = PracticeQuestion::create([
            'practice_id' => $prac2->id,
            'question_text' => "If a₁ = 10, d = -4, find a₁₂.",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'a12 = 10 + (12-1)*(-4) = -34'
            ]
        ]);

        $pq8 = PracticeQuestion::create([
            'practice_id' => $prac2->id,
            'question_text' => "If a₈ = 42, d = 7, find a₁.",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'a1 = 42 - (8-1)*7 = -7'
            ]
        ]);

        // Quiz 2
        $quiz2 = Quiz::create([
            'module_id' => $mod2->id,
            'title' => "Quiz for $mod2->title",
        ]);

        // Question 1
        $q6 = Question::create([
            'quiz_id' => $quiz2->id,
            'question_text' => 'A sequence is 7, 10, 13, 16, …
                                Find d, write a_n, and find a_25.',
            'type' => 'identification',
            'points' => 1,
        ]);

        PracticeOption::create([
            'practice_question_id' => $q6->id,
            'option_text' => "d=3; a_n=7+(n-1)3; a_25=79",
            'is_correct' => true,
        ]);

        // Question 2
        $q7 = Question::create([
            'quiz_id' => $quiz2->id,
            'question_text' => 'A sequence has a_1 = -8, d = 5. Find a_15.',
            'type' => 'identification',
            'points' => 1,
        ]);

        PracticeOption::create([
            'practice_question_id' => $q7->id,
            'option_text' => "a_15 = -8 + (15-1)5 = 62",
            'is_correct' => true,
        ]);

        // Question 3
        $q8 = Question::create([
            'quiz_id' => $quiz2->id,
            'question_text' => 'Which term of the sequence 12, 8, 4, 0, … is a given number?',
            'type' => 'identification',
            'points' => 1,
        ]);

        PracticeOption::create([
            'practice_question_id' => $q8->id,
            'option_text' => "n = (given number - 12)/(-4) + 1",
            'is_correct' => true,
        ]);

        // Question 4
        $q9 = Question::create([
            'quiz_id' => $quiz2->id,
            'question_text' => 'Find the sum of the first 30 terms of 5, 10, 15, …',
            'type' => 'identification',
            'points' => 1,
        ]);

        PracticeOption::create([
            'practice_question_id' => $q9->id,
            'option_text' => "S_30 = 30/2 [2(5) + (30-1)5] = 2325",
            'is_correct' => true,
        ]);

        // Question 5
        $q10 = Question::create([
            'quiz_id' => $quiz2->id,
            'question_text' => 'If a_1 = 100 and a_20 = 10, find d and S_20.',
            'type' => 'identification',
            'points' => 1,
        ]);

        PracticeOption::create([
            'practice_question_id' => $q10->id,
            'option_text' => "d = (10 - 100)/(20-1) = -90/19; S_20 = 20/2 (100 + 10) = 1100",
            'is_correct' => true,
        ]);

        // Module 3 Geometric Sequences
        $mod3 = Module::create([
            'course_id' => $course->id,
            'title' => 'Module 3: Geometric Sequences',
            'order' => 3,
        ]);

        Review::create([
            'module_id' => $mod3->id,
            'title' => 'Lesson 3: Geometric Sequences',
            'content' => '<h2>🎯 Learning Objectives</h2>
                <p>By the end of this lesson, students will be able to:</p>
                <ul>
                    <li>Define a geometric sequence and identify its <strong>initial term</strong> and <strong>common ratio</strong>.</li>
                    <li>Write a recursive formula and a <strong>closed-form</strong> (explicit) formula for a geometric sequence.</li>
                    <li>Compute any term of a geometric sequence directly using the closed-form formula.</li>
                    <li>Calculate the <strong>sum of a finite geometric sequence</strong>.</li>
                    <li>Recognize real-life applications of geometric sequences.</li>
                </ul>

                <h2>📘 Learning Materials & Core Lesson</h2>

                <ul>
                    <li><strong>Initial term:</strong> a<sub>0</sub> or a<sub>1</sub> — the first term of the sequence</li>
                    <li><strong>Common ratio:</strong> r — the constant factor between consecutive terms</li>
                    <li><strong>Recursive formula:</strong> a<sub>n</sub> = r ⋅ a<sub>n-1</sub>, with initial term a<sub>0</sub> or a<sub>1</sub></li>
                    <li><strong>Closed-form formula (starting from a<sub>0</sub>):</strong> a<sub>n</sub> = a<sub>0</sub> ⋅ r<sup>n</sup></li>
                    <li><strong>Closed-form formula (starting from a<sub>1</sub>):</strong> a<sub>n</sub> = a<sub>1</sub> ⋅ r<sup>n-1</sup></li>
                </ul>

                <h3>Detailed Explanation & Examples</h3>

                <h4>Identifying a Geometric Sequence</h4>
                <p>A sequence is geometric if the ratio between consecutive terms is constant:</p>
                <p>a<sub>1</sub>/a<sub>0</sub> = a<sub>2</sub>/a<sub>1</sub> = a<sub>3</sub>/a<sub>2</sub> = ... = r</p>
                <p><strong>Example:</strong> Sequence: 3, 6, 12, 24, 48, …</p>
                <ul>
                    <li>Common ratio r = 6/3 = 2</li>
                    <li>Recursive: a<sub>n</sub> = 2 ⋅ a<sub>n-1</sub>, a<sub>0</sub> = 3</li>
                    <li>Closed-form: a<sub>n</sub> = 3 ⋅ 2<sup>n</sup></li>
                </ul>

                <h4>Finding a Specific Term</h4>
                <p>You can find the n-th term without computing all previous terms using:</p>
                <p>a<sub>n</sub> = a<sub>0</sub> ⋅ r<sup>n</sup></p>
                <p><strong>Example:</strong> Given a<sub>0</sub> = 5, r = 3, find a<sub>4</sub></p>
                <p>a<sub>4</sub> = 5 ⋅ 3<sup>4</sup></p>

                <h4>Finite Sum of a Geometric Sequence</h4>
                <p>If there are n + 1 terms (from a<sub>0</sub> to a<sub>n</sub>):</p>
                <p>S<sub>n</sub> = a<sub>0</sub> ⋅ (r<sup>n+1</sup> − 1) / (r − 1), r ≠ 1</p>
                <p><strong>Example:</strong> Find the sum of 2, 4, 8, 16, 32</p>
                <ul>
                    <li>a<sub>0</sub> = 2, r = 2, n = 4</li>
                </ul>
                <p>S = 2 ⋅ (2<sup>5</sup> − 1) / (2 − 1) = 2 ⋅ 31 = 62</p>

                <h4>Real-Life Example</h4>
                <p><strong>Compound Interest:</strong> If you deposit $1000 in a bank account with 5% interest compounded yearly, the amount after n years is:</p>
                <p>A<sub>n</sub> = 1000 ⋅ (1.05)<sup>n</sup></p>
                <p>This is a geometric sequence with a<sub>0</sub> = 1000, r = 1.05</p>

                <h2>📚 References</h2>
                <ul>
                    <li><a href="https://discrete.openmathbooks.org/dmoi2/sec_seq-arithgeom.html" target="_blank">https://discrete.openmathbooks.org/dmoi2/sec_seq-arithgeom.html</a></li>
                </ul>',
        ]);
        // Create Practice container for Lesson 3
        $prac3 = Practice::create([
            'module_id' => $mod3->id, // replace with your Lesson 3 module variable
            'title' => 'Lesson 3 Practice: Geometric Sequences',
            'content' => '<p>Practice Problems on Geometric Sequences</p>',
        ]);

        // Section I – Identify and Write Formula
        $pq9 = PracticeQuestion::create([
            'practice_id' => $prac3->id,
            'question_text' => "Decide whether the following are geometric sequences. If they are, find r, write the recursive and closed-form formulas.\nSequences:\n1) 2, 4, 8, 16, ...\n2) 81, 27, 9, 3, ...\n3) 5, 10, 16, 23, ...",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => '# Sequence 1
                                    # a1 = 2, r = 2
                                    # Recursive: a_n = 2 * a_(n-1)
                                    # Closed-form: a_n = 2 * 2^(n-1)

                                    # Sequence 2
                                    # a1 = 81, r = 1/3
                                    # Recursive: a_n = (1/3) * a_(n-1)
                                    # Closed-form: a_n = 81 * (1/3)^(n-1)

                                    # Sequence 3
                                    # Not a geometric sequence'
            ]
        ]);

        // Section II – Find Terms
        $pq10 = PracticeQuestion::create([
            'practice_id' => $prac3->id,
            'question_text' => "Given a0 = 6, r = 3, find specific terms and formulas:\n1) Find a1 = 4, r = 2\n2) Write the closed-form formula for a_n.",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => '# First sequence: a1 = 4, r = 2
                                    # Recursive: a_n = 2 * a_(n-1)
                                    # Closed-form: a_n = 4 * 2^(n-1)

                                    # Second sequence: a0 = 6, r = 3
                                    # Closed-form: a_n = 6 * 3^n'
            ]
        ]);

        // Section III – Sum of Terms
        $pq11 = PracticeQuestion::create([
            'practice_id' => $prac3->id,
            'question_text' => "Find the sum of the first 5 terms of the geometric sequence a1 = 4, r = 2.",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => '# Geometric series sum formula: S_n = a1 * (r^n - 1) / (r - 1)
                                    a1 = 4
                                    r = 2
                                    n = 5
                                    S5 = a1 * (r**n - 1) // (r - 1)
                                    print(S5)  # Output: 124'
            ]
        ]);

        // quiz 3
        $quiz3 = Quiz::create([
            'module_id' => $mod3->id,
            'title' => "Quiz for $mod3->title",
        ]);

        // Question 1
        $q11 = Question::create([
            'quiz_id' => $quiz3->id,
            'question_text' => 'A geometric sequence has a_0 = 7 and r = 5.
                                Write the recursive and closed-form formulas, and find a_4.',
            'type' => 'identification',
            'points' => 1,
        ]);

        PracticeOption::create([
            'practice_question_id' => $q11->id,
            'option_text' => "Recursive: a_n = 5 ⋅ a_(n-1); Closed-form: a_n = 7 ⋅ 5^n; a_4 = 875",
            'is_correct' => true,
        ]);

        // Question 2
        $q12 = Question::create([
            'quiz_id' => $quiz3->id,
            'question_text' => 'The sequence 160, 80, 40, 20, … is geometric.
                                Find r, write the closed-form formula, and find a_6.',
            'type' => 'identification',
            'points' => 1,
        ]);

        PracticeOption::create([
            'practice_question_id' => $q12->id,
            'option_text' => "r = 0.5; Closed-form: a_n = 160 ⋅ (0.5)^(n-1); a_6 = 5",
            'is_correct' => true,
        ]);

        // Question 3
        $q13 = Question::create([
            'quiz_id' => $quiz3->id,
            'question_text' => 'Compute the sum of the first 6 terms of a_n = 3 ⋅ (0.5)^n.',
            'type' => 'identification',
            'points' => 1,
        ]);

        PracticeOption::create([
            'practice_question_id' => $q13->id,
            'option_text' => "S_6 = 3 ⋅ (1 - (0.5)^6) / (1 - 0.5) = 5.90625",
            'is_correct' => true,
        ]);

        // Question 4
        $q14 = Question::create([
            'quiz_id' => $quiz3->id,
            'question_text' => 'A culture of bacteria doubles every hour.
                                If it starts with 500 bacteria, how many are there after 8 hours?',
            'type' => 'identification',
            'points' => 1,
        ]);

        PracticeOption::create([
            'practice_question_id' => $q14->id,
            'option_text' => "a_8 = 500 ⋅ 2^8 = 128000",
            'is_correct' => true,
        ]);

        // Question 5
        $q15 = Question::create([
            'quiz_id' => $quiz3->id,
            'question_text' => 'Which formula would you use to compute the sum of a finite geometric sequence? (Write the general form.)',
            'type' => 'identification',
            'points' => 1,
        ]);

        PracticeOption::create([
            'practice_question_id' => $q15->id,
            'option_text' => "S_n = a_1 ⋅ (r^n - 1) / (r - 1), r ≠ 1",
            'is_correct' => true,
        ]);

        // Module 4 The Binary Number System
        $mod4 = Module::create([
            'course_id' => $course->id,
            'title' => 'Module 4: The Binary Number System',
            'order' => 4,
        ]);

        Review::create([
            'module_id' => $mod4->id,
            'title' => 'Lesson 4: The Binary Number System',
            'content' => '<h2>🎯 Learning Objectives</h2>
                <p>By the end of this lesson, you will be able to:</p>
                <ul>
                    <li>Define the binary number system (base-2) and identify bits and bytes.</li>
                    <li>Explain why computers use binary.</li>
                    <li>Read and write binary numbers.</li>
                    <li>Convert binary numbers to decimal.</li>
                    <li>Convert decimal numbers to binary using repeated division.</li>
                    <li>Perform basic binary arithmetic such as addition.</li>
                </ul>

                <h2>📘 Learning Materials & Core Lesson</h2>

                <h3>What is the Binary Number System?</h3>
                <p>The binary number system is a positional numeral system that uses only two digits: <strong>0</strong> and <strong>1</strong>. It is fundamental to all digital electronics and computing because computers operate using two electrical states—ON and OFF.</p>

                <p>Key concepts:</p>
                <ul>
                    <li>A <strong>bit</strong> (binary digit) is the smallest unit of data and can be 0 or 1.</li>
                    <li>A <strong>byte</strong> is a group of 8 bits.</li>
                    <li>Binary uses <strong>base-2</strong>, meaning each position represents a power of 2.</li>
                    <li>Computers store, process, and transmit all information in binary form.</li>
                </ul>

                <h3>How Positional Value Works in Binary</h3>
                <p>Binary is positional, meaning each digit has a value depending on where it is placed. Each position represents a power of 2:</p>
                <ul>
                    <li>Rightmost digit = 2⁰ (1)</li>
                    <li>Next left = 2¹ (2)</li>
                    <li>Next = 2² (4)</li>
                    <li>Next = 2³ (8)</li>
                </ul>

                <h3>Converting Binary to Decimal</h3>
                <p>Steps to convert binary to decimal:</p>
                <ul>
                    <li>Write the binary number and label each position with a power of 2.</li>
                    <li>Multiply each bit by its positional value.</li>
                    <li>Add the products.</li>
                </ul>

                <p><strong>Example: Convert 1011₂ to decimal</strong></p>

                <table>
                    <tr>
                        <th>Binary Digit</th>
                        <th>Position (Power of 2)</th>
                        <th>Value Contribution</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2³ = 8</td>
                        <td>1 × 8 = 8</td>
                    </tr>
                    <tr>
                        <td>0</td>
                        <td>2² = 4</td>
                        <td>0 × 4 = 0</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2¹ = 2</td>
                        <td>1 × 2 = 2</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2⁰ = 1</td>
                        <td>1 × 1 = 1</td>
                    </tr>
                </table>

                <p><strong>Sum:</strong> 8 + 0 + 2 + 1 = <strong>11₁₀</strong></p>

                <h3>Converting Decimal to Binary</h3>
                <p>You can convert decimal numbers to binary using repeated division by 2. Record the remainder each time until the quotient becomes 0.</p>

                <p><strong>Example: Convert 13₁₀ to binary</strong></p>

                <table>
                    <tr>
                        <th>Step</th>
                        <th>Decimal Number</th>
                        <th>Divide by 2</th>
                        <th>Quotient</th>
                        <th>Remainder</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>13</td>
                        <td>13 ÷ 2</td>
                        <td>6</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>6</td>
                        <td>6 ÷ 2</td>
                        <td>3</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>3</td>
                        <td>3 ÷ 2</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>1</td>
                        <td>1 ÷ 2</td>
                        <td>0</td>
                        <td>1</td>
                    </tr>
                </table>

                <p><strong>Binary result:</strong> Read remainders from bottom to top → <strong>1101₂</strong></p>

                <h3>Binary Arithmetic: Addition</h3>
                <p>Binary addition follows rules similar to decimal addition but uses base-2:</p>

                <table>
                    <tr>
                        <th>Rule</th>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <td>0 + 0 = 0</td>
                        <td>No carry</td>
                    </tr>
                    <tr>
                        <td>1 + 0 or 0 + 1 = 1</td>
                        <td>No carry</td>
                    </tr>
                    <tr>
                        <td>1 + 1 = 10₂</td>
                        <td>0 with carry 1</td>
                    </tr>
                    <tr>
                        <td>1 + 1 + 1 = 11₂</td>
                        <td>1 with carry 1</td>
                    </tr>
                </table>

                <p><strong>Example:</strong> Add 1011₂ + 1101₂</p>
                <pre>
                   1011
                 + 1101
                 -------
                   11000₂
                </pre>

                <h3>Why Do Computers Use Binary?</h3>
                <ul>
                    <li>Digital circuits have two states: ON and OFF.</li>
                    <li>Binary is easy and reliable for hardware to interpret.</li>
                    <li>Binary makes data storage and communication simple and stable.</li>
                    <li>Bits and bytes can represent numbers, letters (ASCII, Unicode), images, and more.</li>
                </ul>

                <h2>📚 References</h2>
                <ul>
                    <li>ComputerHope. (n.d.). <em>Binary (definition and explanation)</em>.</li>
                </ul>'
        ]);

        // Create Practice container for Lesson 4
        $prac4 = Practice::create([
            'module_id' => $mod4->id, // replace with your Lesson 4 module variable
            'title' => 'Lesson 4 Practice: Number System Conversions',
            'content' => '<p>Practice Problems on Binary, Decimal, and Binary Addition</p>',
        ]);


        $pq12 = PracticeQuestion::create([
            'practice_id' => $prac4->id,
            'question_text' => "Convert the following binary numbers to decimal:\n1) 1010₂\n2) 1111₂\n3) 100110₂",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => '# Binary → Decimal
                                    print(int("1010", 2))     # 10
                                    print(int("1111", 2))     # 15
                                    print(int("100110", 2))   # 38'
            ]
        ]);


        $pq13 = PracticeQuestion::create([
            'practice_id' => $prac4->id,
            'question_text' => "Convert the following decimal numbers to binary:\n1) 12₁₀\n2) 12₁₀\n3) 58₁₀",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => '# Decimal → Binary
                                    print(bin(12)[2:])   # 1100
                                    print(bin(12)[2:])   # 1100
                                    print(bin(58)[2:])   # 111010'
            ]
        ]);


        $pq14 = PracticeQuestion::create([
            'practice_id' => $prac4->id,
            'question_text' => "Perform the following binary additions:\n1) 1011₂ + 0110₂\n2) 1110₂ + 0001₂",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => '# Binary Addition
                                    a = int("1011", 2) + int("0110", 2)
                                    b = int("1110", 2) + int("0001", 2)

                                    print(bin(a)[2:])    # 10001
                                    print(bin(b)[2:])    # 1111'
            ]
        ]);

        $quiz4 = Quiz::create([
            'module_id' => $mod4->id,
            'title' => "Quiz for $mod4->title",
        ]);

        // Question 1
        $q16 = Question::create([
            'quiz_id' => $quiz4->id,
            'question_text' => 'Convert 101101₂ to decimal.',
            'type' => 'identification',
            'points' => 1,
        ]);

        PracticeOption::create([
            'practice_question_id' => $q16->id,
            'option_text' => "45(10)",
            'is_correct' => true,
        ]);

        // Question 2
        $q17 = Question::create([
            'quiz_id' => $quiz4->id,
            'question_text' => 'Convert 45₁₀ to binary.',
            'type' => 'identification',
            'points' => 1,
        ]);

        PracticeOption::create([
            'practice_question_id' => $q17->id,
            'option_text' => "101101₂",
            'is_correct' => true,
        ]);

        // Question 3
        $q18 = Question::create([
            'quiz_id' => $quiz4->id,
            'question_text' => 'Add 1101₂ + 1011₂.',
            'type' => 'identification',
            'points' => 1,
        ]);

        PracticeOption::create([
            'practice_question_id' => $q18->id,
            'option_text' => "11000₂",
            'is_correct' => true,
        ]);

        // Question 4
        $q19 = Question::create([
            'quiz_id' => $quiz4->id,
            'question_text' => 'Why do computers use binary instead of decimal?',
            'type' => 'identification',
            'points' => 1,
        ]);

        PracticeOption::create([
            'practice_question_id' => $q19->id,
            'option_text' => "Binary is easier for computers to process because it uses two states (ON/OFF) that align with digital circuits.",
            'is_correct' => true,
        ]);

        // Question 5
        $q20 = Question::create([
            'quiz_id' => $quiz4->id,
            'question_text' => 'What is the decimal value of 11111111₂?',
            'type' => 'identification',
            'points' => 1,
        ]);

        PracticeOption::create([
            'practice_question_id' => $q20->id,
            'option_text' => "255₁₀",
            'is_correct' => true,
        ]);

        $mod5 = Module::create([
            'course_id' => $course->id,
            'title' => 'Module 5: Octal Number System',
            'order' => 5,
        ]);
        Review::create([
            'module_id' => $mod5->id,
            'title' => 'Lesson 5: Octal Number System',
            'content' => '<h2>🎯 Learning Objectives</h2>
                            <p>By the end of this lesson, you will be able to:</p>
                            <ul>
                                <li>Define the octal number system and understand what base-8 means.</li>
                                <li>Identify the valid digits used in the octal system (0–7).</li>
                                <li>Convert octal numbers to decimal (including integer and fractional parts).</li>
                                <li>Convert decimal numbers to octal.</li>
                                <li>Convert between octal and binary formats.</li>
                                <li>Apply positional notation using powers of 8.</li>
                            </ul>

                            <h2>📘 Learning Materials & Core Lesson</h2>

                            <h3>What is the Octal Number System?</h3>
                            <p>The octal number system is a base-8 positional numeral system that uses eight digits:</p>
                            <ul>
                                <li>0, 1, 2, 3, 4, 5, 6, 7</li>
                            </ul>
                            <p>
                                Each digit position represents a power of 8, similar to how decimal uses powers of 10 and binary uses powers of 2.
                                Octal has been historically used in computing, such as Unix file permissions and representing binary in compact form.
                            </p>

                            <h3>Understanding Place Values in Octal</h3>
                            <p>Each position in an octal number corresponds to a power of 8:</p>
                            <ul>
                                <li><strong>8²</strong> place</li>
                                <li><strong>8¹</strong> place</li>
                                <li><strong>8⁰</strong> place</li>
                            </ul>
                            <p>
                                For example, in the octal number <strong>(215)<sub>8</sub></strong>, each digit is multiplied by its positional power of 8.
                            </p>

                            <h3>Converting Octal to Decimal</h3>
                            <p>To convert an octal number to decimal:</p>
                            <ul>
                                <li>Identify the place value (powers of 8) for each digit.</li>
                                <li>Multiply each octal digit by its corresponding power of 8.</li>
                                <li>Add all results to get the decimal value.</li>
                            </ul>

                            <p><strong>Example 1:</strong> Convert (215)<sub>8</sub> to decimal</p>
                            <p>(215)<sub>8</sub> = 2×8² + 1×8¹ + 5×8⁰</p>
                            <p>= 128 + 8 + 5 = <strong>141<sub>10</sub></strong></p>

                            <p><strong>Example 2 (with fraction):</strong> Convert (246.28)<sub>8</sub> to decimal</p>
                            <p>
                                2×8² + 4×8¹ + 6×8⁰ + 2×8⁻¹ + 8×8⁻²
                            </p>
                            <ul>
                                <li>8² = 64</li>
                                <li>8¹ = 8</li>
                                <li>8⁰ = 1</li>
                                <li>8⁻¹ = 1/8</li>
                                <li>8⁻² = 1/64</li>
                            </ul>
                            <p>
                                = 128 + 32 + 6 + 0.25 + 0.125
                                = <strong>166.375<sub>10</sub></strong>
                            </p>

                            <h3>Converting Decimal to Octal</h3>
                            <p>To convert a decimal integer to octal:</p>
                            <ul>
                                <li>Divide the decimal number by 8.</li>
                                <li>Record the remainder.</li>
                                <li>Repeat with the quotient until it becomes 0.</li>
                                <li>Read the remainders from bottom to top.</li>
                            </ul>

                            <p><strong>Example:</strong> Convert 100<sub>10</sub> to octal</p>
                            <ul>
                                <li>100 ÷ 8 = 12, remainder 4</li>
                                <li>12 ÷ 8 = 1, remainder 4</li>
                                <li>1 ÷ 8 = 0, remainder 1</li>
                            </ul>
                            <p>Reading from last to first: (144)<sub>8</sub></p>

                            <h3>Decimal Fractions to Octal</h3>
                            <p>For fractional parts:</p>
                            <ul>
                                <li>Multiply the fractional part by 8.</li>
                                <li>The whole number becomes the next octal digit.</li>
                                <li>Repeat with the remaining fraction.</li>
                            </ul>

                            <h3>Octal ↔ Binary Conversion</h3>
                            <p>Since 8 = 2³, each octal digit corresponds to 3 binary digits.</p>
                            <ul>
                                <li>To convert octal → binary: replace each octal digit with its 3-bit binary form.</li>
                                <li>To convert binary → octal: group bits in sets of 3.</li>
                            </ul>

                            <p><strong>Example:</strong> Convert (57)<sub>8</sub> to binary</p>
                            <ul>
                                <li>5 → 101</li>
                                <li>7 → 111</li>
                            </ul>
                            <p>(57)<sub>8</sub> = (101111)<sub>2</sub></p>

                            <h2>📚 References</h2>
                            <ul>
                                <li>BYJU\'S. (n.d.). <em>Octal Number System</em>.</li>
                            </ul>
                        ',
        ]);

        // Create Practice container
        $prac5 = Practice::create([
            'module_id' => $mod5->id,
            'title' => 'Lesson 5 Practice: Octal and Binary Conversions',
            'content' => '<p>Practice Problems</p>',
        ]);

        // I. Octal → Decimal Conversion
        $pq15 = PracticeQuestion::create([
            'practice_id' => $prac5->id,
            'question_text' => "Convert (235)₈ to decimal:",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => '157',
            ]
        ]);

        $pq16 = PracticeQuestion::create([
            'practice_id' => $prac5->id,
            'question_text' => "Convert (701)₈ to decimal:",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => '449',
            ]
        ]);

        $pq17 = PracticeQuestion::create([
            'practice_id' => $prac5->id,
            'question_text' => "Convert (45.3)₈ to decimal:",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => '37.375',
            ]
        ]);

        // II. Decimal → Octal Conversion
        $pq18 = PracticeQuestion::create([
            'practice_id' => $prac5->id,
            'question_text' => "Convert 73₁₀ to octal:",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => '111₈',
            ]
        ]);

        $pq19 = PracticeQuestion::create([
            'practice_id' => $prac5->id,
            'question_text' => "Convert 150₁₀ to octal:",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => '226₈',
            ]
        ]);

        $pq20 = PracticeQuestion::create([
            'practice_id' => $prac5->id,
            'question_text' => "Convert 300₁₀ to octal:",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => '454₈',
            ]
        ]);

        // III. Octal ↔ Binary Conversion
        $pq21 = PracticeQuestion::create([
            'practice_id' => $prac5->id,
            'question_text' => "Convert (356)₈ to binary:",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => '11101110₂',
            ]
        ]);

        $pq22 = PracticeQuestion::create([
            'practice_id' => $prac5->id,
            'question_text' => "Convert (110101)₂ to octal:",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => '65₈',
            ]
        ]);

        $pq23 = PracticeQuestion::create([
            'practice_id' => $prac5->id,
            'question_text' => "Convert (24)₈ to binary:",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => '10100₂',
            ]
        ]);

        $quiz5 = Quiz::create([
            'module_id' => $mod5->id,
            'title' => "Quiz for $mod5->title",
        ]);

        // Question 1
        $q21 = Question::create([
            'quiz_id' => $quiz5->id,
            'question_text' => 'Convert (476)₈ to decimal.',
            'type' => 'identification',
            'points' => 1,
        ]);

        PracticeOption::create([
            'practice_question_id' => $q21->id,
            'option_text' => "318₁₀",
            'is_correct' => true,
        ]);

        // Question 2
        $q22 = Question::create([
            'quiz_id' => $quiz5->id,
            'question_text' => 'Convert 200₁₀ to octal.',
            'type' => 'identification',
            'points' => 1,
        ]);

        PracticeOption::create([
            'practice_question_id' => $q22->id,
            'option_text' => "310₈",
            'is_correct' => true,
        ]);

        // Question 3
        $q23 = Question::create([
            'quiz_id' => $quiz5->id,
            'question_text' => 'Convert (101101)₂ to octal.',
            'type' => 'identification',
            'points' => 1,
        ]);

        PracticeOption::create([
            'practice_question_id' => $q23->id,
            'option_text' => "55₈",
            'is_correct' => true,
        ]);

        // Question 4
        $q24 = Question::create([
            'quiz_id' => $quiz5->id,
            'question_text' => 'Convert (101101)₂ to octal.', // duplicate, same as Q3
            'type' => 'identification',
            'points' => 1,
        ]);

        PracticeOption::create([
            'practice_question_id' => $q24->id,
            'option_text' => "55₈",
            'is_correct' => true,
        ]);

        // Question 5
        $q25 = Question::create([
            'quiz_id' => $quiz5->id,
            'question_text' => 'Convert (101101)₂ to octal.', // duplicate, same as Q3
            'type' => 'identification',
            'points' => 1,
        ]);

        PracticeOption::create([
            'practice_question_id' => $q25->id,
            'option_text' => "55₈",
            'is_correct' => true,
        ]);

        $mod6 = Module::create([
            'course_id' => $course->id,
            'title' => 'Module 6: Decimal Number System',
            'order' => 6,
        ]);

        Review::create([
            'module_id' => $mod6->id,
            'title' => 'Lesson 6: Decimal Number System',
            'content' => '<h2>🎯 Learning Objectives</h2>
                            <p>By the end of this lesson, you will be able to:</p>
                            <ul>
                                <li>Define the decimal number system and understand what "base-10" means.</li>
                                <li>Identify and interpret the place values of both integer and fractional parts.</li>
                                <li>Write numbers in expanded form.</li>
                                <li>Compare and order decimal numbers.</li>
                                <li>Round decimal numbers to a specified place.</li>
                                <li>Perform arithmetic operations (addition, subtraction, multiplication, division) with decimals.</li>
                            </ul>

                            <h2>📘 Learning Materials & Core Lesson</h2>

                            <h3>What is the Decimal Number System?</h3>
                            <p>The decimal system is a base-10 positional numeral system, using ten digits: 0–9. Each digit’s value depends on its position:</p>
                            <ul>
                                <li>Integer part: units (10⁰), tens (10¹), hundreds (10²), etc.</li>
                                <li>Fractional part: tenths (10⁻¹), hundredths (10⁻²), thousandths (10⁻³), etc.</li>
                            </ul>
                            <p>Decimal numbers are used in everyday counting, measuring, financial calculations, and scientific notation.</p>

                            <h3>Place Value & Expanded Form</h3>
                            <p><strong>Example:</strong> 4,325.078</p>
                            <ul>
                                <li>4 in thousands → 4 × 10³ = 4000</li>
                                <li>3 in hundreds → 3 × 10² = 300</li>
                                <li>2 in tens → 2 × 10¹ = 20</li>
                                <li>5 in units → 5 × 10⁰ = 5</li>
                                <li>0 in tenths → 0 × 10⁻¹ = 0.0</li>
                                <li>7 in hundredths → 7 × 10⁻² = 0.07</li>
                                <li>8 in thousandths → 8 × 10⁻³ = 0.008</li>
                            </ul>
                            <p>Expanded form: 4000 + 300 + 20 + 5 + 0.07 + 0.008</p>

                            <h3>Comparing & Ordering Decimals</h3>
                            <ul>
                                <li>Compare integer parts first; if equal, compare tenths, hundredths, etc.</li>
                                <li>Write numbers with the same number of decimal places to simplify comparison.</li>
                            </ul>
                            <p><strong>Example:</strong> Which is larger: 3.2 or 3.15?</p>
                            <ul>
                                <li>Integer parts: 3 vs 3 → equal</li>
                                <li>Tenths: 2 vs 1 → 3.2 > 3.15</li>
                            </ul>
                            <p>Example: Order 5.003, 5.03, 5.0003, 5.1 from smallest to largest → 5.0003, 5.003, 5.03, 5.1</p>

                            <h3>Rounding Decimals</h3>
                            <ul>
                                <li>Choose the place to round to (whole number, tenths, hundredths, etc.).</li>
                                <li>Check the next digit: ≥5 → round up, <5 → round down.</li>
                            </ul>
                            <p><strong>Example:</strong> Round 7.8642 to two decimal places → 7.86</p>
                            <p><strong>Example:</strong> Round 2.376 to one decimal place → 2.4</p>

                            <h3>Arithmetic with Decimals</h3>
                            <ul>
                                <li><strong>Addition / Subtraction:</strong> Align decimal points, pad zeros if needed, then calculate.</li>
                                <li><strong>Multiplication:</strong> Ignore decimal points, multiply as integers, then place decimal according to total decimal places.</li>
                                <li><strong>Division:</strong> Shift decimal points in divisor/dividend to make divisor whole, then divide normally.</li>
                            </ul>
                            <p><strong>Example (Addition):</strong> 12.45 + 3.7 → 12.45 + 3.70 = 16.15</p>
                            <p><strong>Example (Multiplication):</strong> 2.5 × 0.4 → 25 × 4 = 100 → decimal places = 2 → 1.00</p>
                            <p><strong>Example (Division):</strong> 3.6 ÷ 0.3 → (3.6×10)/(0.3×10) = 36 ÷ 3 = 12</p>

                            <h2>📚 References</h2>
                            <ul>
                                <li><a href="https://byjus.com/maths/decimal-number-system/" target="_blank">BYJU\'S: Decimal Number System</a></li>
                            </ul>',
        ]);


        $prac6 = Practice::create([
            'module_id' => $mod6->id,
            'title' => 'Lesson 6 Practice: Place Value, Comparing & Rounding Decimals',
            'content' => '<p>Practice Problems</p>',
        ]);

        $pq1 = PracticeQuestion::create([
            'practice_id' => $prac6->id,
            'question_text' => "Write the expanded form of 4,307.082:",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => '4000 + 300 + 7 + 0.08 + 0.002',
            ]
        ]);

        $pq26 = PracticeQuestion::create([
            'practice_id' => $prac6->id,
            'question_text' => "What is the digit in the thousandths place of 62.4078?",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => '7',
            ]
        ]);

        $pq27 = PracticeQuestion::create([
            'practice_id' => $prac6->id,
            'question_text' => "Write 9,050.6 in expanded form:",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => '9000 + 0 + 50 + 0.6',
            ]
        ]);


        $pq28 = PracticeQuestion::create([
            'practice_id' => $prac6->id,
            'question_text' => "Which is larger: 5.703 or 5.73?",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => '5.73',
            ]
        ]);

        $pq29 = PracticeQuestion::create([
            'practice_id' => $prac6->id,
            'question_text' => "Compute: 12.3 + 5.47 − 0.58",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => '17.19',
            ]
        ]);

        $quiz6 = Quiz::create([
            'module_id' => $mod6->id,
            'title' => "Quiz for $mod6->title",
        ]);

        // Question 1
        $q26 = Question::create([
            'quiz_id' => $quiz6->id,
            'question_text' => 'Write the expanded form of 6,024.305.',
            'type' => 'identification',
            'points' => 1,
        ]);

        PracticeOption::create([
            'practice_question_id' => $q26->id,
            'option_text' => "6000 + 0 + 20 + 4 + 0.3 + 0.005",
            'is_correct' => true,
        ]);

        // Question 2
        $q27 = Question::create([
            'quiz_id' => $quiz6->id,
            'question_text' => 'Which is greater: 14.07 or 14.007?',
            'type' => 'identification',
            'points' => 1,
        ]);

        PracticeOption::create([
            'practice_question_id' => $q27->id,
            'option_text' => "14.07",
            'is_correct' => true,
        ]);

        // Question 3
        $q28 = Question::create([
            'quiz_id' => $quiz6->id,
            'question_text' => 'Round 8.3764 to two decimal places.',
            'type' => 'identification',
            'points' => 1,
        ]);

        PracticeOption::create([
            'practice_question_id' => $q28->id,
            'option_text' => "8.38",
            'is_correct' => true,
        ]);

        // Question 4
        $q29 = Question::create([
            'quiz_id' => $quiz6->id,
            'question_text' => 'Compute: 25.64 + 4.8 − 0.06',
            'type' => 'identification',
            'points' => 1,
        ]);

        PracticeOption::create([
            'practice_question_id' => $q29->id,
            'option_text' => "30.38",
            'is_correct' => true,
        ]);

        // Question 5
        $q30 = Question::create([
            'quiz_id' => $quiz6->id,
            'question_text' => 'Compute: 3.6 × 0.25 + 5.4 ÷ 0.9',
            'type' => 'identification',
            'points' => 1,
        ]);

        PracticeOption::create([
            'practice_question_id' => $q30->id,
            'option_text' => "9.0",
            'is_correct' => true,
        ]);

        $mod7 = Module::create([
            'course_id' => $course->id,
            'title' => 'Module 7: Hexadecimal Number System (Base-16)',
            'order' => 7,
        ]);

        Review::create([
            'module_id' => $mod7->id,
            'title' => 'Lesson 7: Hexadecimal Number System (Base-16)',
            'content' => '
        <h2>🎯 Learning Objectives</h2>
        <p>By the end of this lesson, you will be able to:</p>
        <ul>
            <li>Define the hexadecimal number system and list all valid symbols (0–9, A–F).</li>
            <li>Interpret hexadecimal numbers using positional weights (powers of 16).</li>
            <li>Convert numbers between:</li>
            <ul>
                <li>Hexadecimal → Decimal</li>
                <li>Decimal → Hexadecimal</li>
                <li>Hexadecimal ↔ Binary</li>
            </ul>
            <li>Understand fractions (hexadecimal numbers with a "hex point") and their place values.</li>
            <li>Apply hexadecimal conversions in practical contexts (e.g., digital systems, color codes).</li>
        </ul>

        <h2>📘 Learning Materials & Core Lesson</h2>

        <h3>Valid Symbols & Positional Values</h3>
        <ul>
            <li>Symbols: <strong>0, 1, 2, 3, 4, 5, 6, 7, 8, 9, A, B, C, D, E, F</strong></li>
            <li>Values: A = 10, B = 11, …, F = 15</li>
            <li>Positional weights: 16⁰, 16¹, 16², … for integer part</li>
            <li>Fractional part: 16⁻¹, 16⁻², 16⁻³, …</li>
        </ul>

        <h3>Conversion: Hexadecimal → Decimal</h3>
        <ol>
            <li>Write each digit and replace A–F with 10–15.</li>
            <li>Multiply each digit by 16 raised to the power of its position (counting from 0 on the right).</li>
            <li>Sum all products.</li>
        </ol>
        <p><strong>Example:</strong> Convert 3E5₁₆ to decimal:</p>
        <ul>
            <li>3 × 16² = 768</li>
            <li>E (14) × 16¹ = 224</li>
            <li>5 × 16⁰ = 5</li>
            <li>Sum = 768 + 224 + 5 = 997₁₀</li>
        </ul>

        <h3>Conversion: Decimal → Hexadecimal</h3>
        <ol>
            <li>Divide the decimal number by 16.</li>
            <li>Record the remainder (0–15; if ≥10, use A–F).</li>
            <li>Repeat with the quotient until 0.</li>
            <li>Read remainders from last to first → hexadecimal number.</li>
        </ol>
        <p><strong>Example:</strong> Convert 754₁₀ to hexadecimal:</p>
        <ul>
            <li>754 ÷ 16 = 47 remainder 2</li>
            <li>47 ÷ 16 = 2 remainder 15 → F</li>
            <li>2 ÷ 16 = 0 remainder 2</li>
            <li>Hexadecimal: 2F2₁₆</li>
        </ul>

        <h3>Hexadecimal ↔ Binary</h3>
        <ul>
            <li>Each hex digit = 4 binary bits.</li>
            <li>Binary → Hex: group binary digits in sets of 4, convert each group to hex.</li>
            <li>Hex → Binary: convert each hex digit to 4-bit binary equivalent.</li>
        </ul>
        <p><strong>Example:</strong> A3F₁₆ → binary:</p>
        <ul>
            <li>A → 1010</li>
            <li>3 → 0011</li>
            <li>F → 1111</li>
            <li>Result: 101000111111₂</li>
        </ul>

        <h3>Fractions / Hexadecimal Point</h3>
        <p>Digits after the hex point have weights 16⁻¹, 16⁻², …</p>
        <p><strong>Example:</strong> 4B.A7₁₆</p>
        <ul>
            <li>4 × 16¹ = 64</li>
            <li>B (11) × 16⁰ = 11</li>
            <li>A (10) × 16⁻¹ = 0.625</li>
            <li>7 × 16⁻² ≈ 0.02734375</li>
            <li>Sum = 64 + 11 + 0.625 + 0.02734375 = 75.65234375₁₀</li>
        </ul>

        <h2>📚 References</h2>
        <ul>
            <li><a href="https://byjus.com/maths/hexadecimal-number-system/" target="_blank">BYJU\'S: Hexadecimal Number System</a></li>
        </ul>
    ',
        ]);

        $prac7 = Practice::create([
            'module_id' => $mod7->id,
            'title' => 'Lesson 7 Practice: Hexadecimal Conversions',
            'content' => '<p>Practice Problems</p>',
        ]);

        $pq30 = PracticeQuestion::create([
            'practice_id' => $prac7->id,
            'question_text' => "Convert 2F₁₆ to decimal:",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => '47',
            ]
        ]);

        $pq31 = PracticeQuestion::create([
            'practice_id' => $prac7->id,
            'question_text' => "Convert A7₁₆ to decimal:",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => '167',
            ]
        ]);

        $pq32 = PracticeQuestion::create([
            'practice_id' => $prac7->id,
            'question_text' => "Convert 1C3₁₆ to decimal:",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => '451',
            ]
        ]);

        $pq33 = PracticeQuestion::create([
            'practice_id' => $prac7->id,
            'question_text' => "Convert 156₁₀ to hexadecimal:",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => '9C',
            ]
        ]);

        $pq34 = PracticeQuestion::create([
            'practice_id' => $prac7->id,
            'question_text' => "Convert 999₁₀ to hexadecimal:",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => '3E7',
            ]
        ]);

        $pq35 = PracticeQuestion::create([
            'practice_id' => $prac7->id,
            'question_text' => "Convert 4095₁₀ to hexadecimal:",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'FFF',
            ]
        ]);

        $pq36 = PracticeQuestion::create([
            'practice_id' => $prac7->id,
            'question_text' => "Convert B4₁₆ to binary:",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => '10110100',
            ]
        ]);

        $pq37 = PracticeQuestion::create([
            'practice_id' => $prac7->id,
            'question_text' => "Convert 101111101011₂ to hexadecimal:",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => 'BEB',
            ]
        ]);

        $pq38 = PracticeQuestion::create([
            'practice_id' => $prac7->id,
            'question_text' => "Convert 3F₁₆ to decimal (fraction included if any):",
            'type' => 'code_writing',
            'details' => [
                'model_answer' => '63',
            ]
        ]);

        $quiz7 = Quiz::create([
            'module_id' => $mod7->id,
            'title' => "Quiz for $mod7->title",
        ]);

        // Question 1
        $q31 = Question::create([
            'quiz_id' => $quiz7->id,
            'question_text' => 'Write the expanded form of 6,024.305.',
            'type' => 'identification',
            'points' => 1,
        ]);

        PracticeOption::create([
            'practice_question_id' => $q31->id,
            'option_text' => "6000 + 0 + 20 + 4 + 0.3 + 0.005",
            'is_correct' => true,
        ]);

        // Question 2
        $q32 = Question::create([
            'quiz_id' => $quiz7->id,
            'question_text' => 'Which is greater: 14.07 or 14.007?',
            'type' => 'identification',
            'points' => 1,
        ]);

        PracticeOption::create([
            'practice_question_id' => $q32->id,
            'option_text' => "14.07",
            'is_correct' => true,
        ]);

        // Question 3
        $q33 = Question::create([
            'quiz_id' => $quiz7->id,
            'question_text' => 'Round 8.3764 to two decimal places.',
            'type' => 'identification',
            'points' => 1,
        ]);

        PracticeOption::create([
            'practice_question_id' => $q33->id,
            'option_text' => "8.38",
            'is_correct' => true,
        ]);

        // Question 4
        $q34 = Question::create([
            'quiz_id' => $quiz7->id,
            'question_text' => 'Compute: 25.64 + 4.8 − 0.06',
            'type' => 'identification',
            'points' => 1,
        ]);

        PracticeOption::create([
            'practice_question_id' => $q34->id,
            'option_text' => "30.38",
            'is_correct' => true,
        ]);

        // Question 5
        $q35 = Question::create([
            'quiz_id' => $quiz7->id,
            'question_text' => 'Compute: 3.6 × 0.25 + 5.4 ÷ 0.9',
            'type' => 'identification',
            'points' => 1,
        ]);

        PracticeOption::create([
            'practice_question_id' => $q35->id,
            'option_text' => "9.0",
            'is_correct' => true,
        ]);
    }
}
