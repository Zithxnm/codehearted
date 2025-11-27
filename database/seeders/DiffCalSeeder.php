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
            'objectives' => [
                'Apply the Constant Rule, Power Rule, Constant Multiple Rule, and Sum/Difference Rule for differentiation.',
                'Find the derivative of functions involving polynomials, radicals, and negative exponents.',
                'Use derivatives to find equations of tangent lines and solve problems involving rates of change.'
            ]
        ]);

        //temporary, ignore
        $calcModules = [
            'Limits and Continuity',
            'Applications of Derivatives',
            'Order of Rotation',
            'The Nature of Mathematics',
            'The Fibonacci Sequence'
        ];

        //Practice Question Types(case sensitive)
        //identification
        //true_false
        //matching
        //trace_output
        //find_bug
        //table_making
        //code_writing  // can be used for essay/explain/program writing

        $mod1 = Module::create([
            'course_id' => $course->id,
            'title' => 'Basic Functions & Graphs',
            'order' => 1,
        ]);

        //Review template
        Review::create([
            'module_id' => $mod1->id,
            'title' => 'Understanding Functions',
            'content' => "<h3>Functions</h3><p>Welcome to the review section for $mod1->title. Read this carefully before taking the quiz.</p>",
        ]);

        //Practice template
        $prac1 = Practice::create([
            'module_id' => $mod1->id,
            'title' => 'Practice Exercises',
            'content' => "<p>Take practice quizzes before you take on the quiz.</p>"
        ]);

        $pq1 = PracticeQuestion::create([
            'practice_id' => $prac1->id,
            'question_text' => 'What is the most important question? Write an essay about it.',
            'type' => 'code_writing',
            'details' => [
                'model_answer' => "I don't know, what is the most important question?"
            ]
        ]);

        //Quiz template
        $quiz1 = Quiz::create([
            'module_id' => $mod1->id,
            'title' => "Basic Quiz Template for $mod1->title",
        ]);

        $q1 = Question::create([
            'quiz_id' => $quiz1->id,
            'question_text' => 'What is the most important question?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q1->id,
            'option_text' => 'What',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q1->id,
            'option_text' => 'Why',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q1->id,
            'option_text' => 'When',
            'is_correct' => false,
        ]);
        QuizOption::create([
            'question_id' => $q1->id,
            'option_text' => 'All of the above',
            'is_correct' => true,
        ]);

        $mod2 = Module::create([
            'course_id' => $course->id,
            'title' => 'Basic Differentiation',
            'order' => 2,
        ]);



    }
}
