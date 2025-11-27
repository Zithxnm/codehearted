<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Module;
use App\Models\Review;
use App\Models\Practice;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\QuizOption;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. DIFFERENTIAL CALCULUS
        $calc = Course::create([
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

        $calcModules = [
            'Basic Functions & Graphs',
            'Basic Differentiation',
            'Limits and Continuity',
            'Applications of Derivatives',
            'Order of Rotation',
            'The Nature of Mathematics',
            'The Fibonacci Sequence'
        ];

        $this->createModules($calc, $calcModules);


        // 2. DIGITAL LOGIC
        $logic = Course::create([
            'title' => 'Digital Logic',
            'description' => 'Digital Logic explores truth tables, logic operations, and number systems—binary, octal,
                              decimal, and hexadecimal. Students learn how arithmetic and geometric operations form
                              the core of how computers calculate and “think.',
            'image_path' => 'imgs/Catalog_Logic.jpg',
            'objectives' => [

            ]
        ]);

        $logicModules = [
            'Truth Tables',
            'Arithmetic Sequence',
            'Geometric Sequences',
            'Binary Number System',
            'Octal Number System',
            'Decimal Number System',
            'Hexadecimal Number System'
        ];

        $this->createModules($logic, $logicModules);



        // 3. FUNDAMENTALS OF COMPUTING
        $comp = Course::create([
            'title' => 'Fundamentals of Computing',
            'description' => 'Fundamentals of Computing covers essential topics, including assembly, BIOS/ALU, and
                        microcontrollers. Students gain insight into hardware design, algorithms, and
                        knowledge-sharing materials through hands-on activities and quizzes.',
            'image_path' => 'imgs/Catalog_Computing.jpg',
            'objectives' => [

            ]
        ]);

        $compModules = [
            'CCS OHS Policies & Tools',
            'Hardware Assembly',
            'BIOS UEFI & Bootable Media',
            'Installing OS & Drivers',
            'Installing Applications & Licensing'
        ];

        $this->createModules($comp, $compModules);


        // 4. PROGRAMMING FUNDAMENTALS
        $prog = Course::create([
            'title' => 'Programming Fundamentals',
            'description' => 'Programming Fundamentals is your first step into the world of coding—think like a creator,
                        solver, and geek. In this course, you’ll learn how to break big problems into smaller
                        ideas, design simple algorithms, and bring your ideas to life through code.',
            'image_path' => 'imgs/Catalog_Programming.jpg',
            'objectives' => [

            ]
        ]);

        $progModules = [
            'Introduction to Programming & Basic Terminology',
            'Variables, Data Types, and Memory Concepts',
            'Input, Output, and User Interaction',
            'Decision Making with Conditionals',
            'Loops and Iterations'
        ];

        $this->createModules($prog, $progModules);
    }

    /**
     * Helper function to create modules, reviews, practices, and quizzes automatically.
     */
    private function createModules(Course $course, array $moduleTitles)
    {
        foreach ($moduleTitles as $index => $title) {
            // 1. Create Module
            $module = Module::create([
                'course_id' => $course->id,
                'title' => "Module " . ($index + 1) . ": $title",
                'order' => $index + 1,
            ]);

            // 2. Create Placeholder Content (Review & Practice)
            Review::create([
                'module_id' => $module->id,
                'title' => 'Review Materials',
                'content' => "<p>Welcome to the review section for $title. Read this carefully before taking the quiz.</p>",
            ]);

            Practice::create([
                'module_id' => $module->id,
                'title' => 'Practice Exercises',
                'content' => "<p>Here are some practice problems for $title...</p>",
            ]);

            // 3. Create a Quiz
            $quiz = Quiz::create([
                'module_id' => $module->id,
                'title' => "Quiz: $title",
            ]);

            // 4. Add a Sample Question to the Quiz
            $q1 = Question::create([
                'quiz_id' => $quiz->id,
                'question_text' => "What is 2 + 2?",
                'type' => 'multiple_choice', // Specify Type
                'points' => 1,
            ]);
            QuizOption::create(['question_id' => $q1->id, 'option_text' => '4', 'is_correct' => true]);
            QuizOption::create(['question_id' => $q1->id, 'option_text' => '5', 'is_correct' => false]);

            // 5. Identification Example (Fill in the blank)
            $q2 = Question::create([
                'quiz_id' => $quiz->id,
                'question_text' => "Who is the father of modern computer science?",
                'type' => 'identification', // Specify Type
                'points' => 1,
            ]);

            // For identification, we simply store the CORRECT answer as an option
            QuizOption::create([
                'question_id' => $q2->id,
                'option_text' => 'Alan Turing',
                'is_correct' => true
            ]);
        }
    }
}
