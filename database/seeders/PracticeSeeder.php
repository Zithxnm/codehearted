<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Module;
use App\Models\Practice;
use App\Models\PracticeQuestion;
use App\Models\PracticeOption;

class PracticeSeeder extends Seeder
{
    public function run(): void
    {
        $modules = Module::all();

        foreach ($modules as $module) {
            // 1. Create Practice Container
            $practice = Practice::create([
                'module_id' => $module->id,
                'title' => 'Practice Exercises',
                'content' => "<p>Here are some practice problems for $module->title:</p>",
            ]);

            // 2. Add Practice Questions

            // Example: Identification
            $pq1 = PracticeQuestion::create([
                'practice_id' => $practice->id,
                'question_text' => "Convert 1011 (Binary) to Decimal.",
                'type' => 'identification',
            ]);
            //  Identification Answer
            PracticeOption::create(['practice_question_id' => $pq1->id, 'option_text' => '11', 'is_correct' => true]);

            $pq2 = PracticeQuestion::create([
                'practice_id' => $practice->id,
                'question_text' => "HTML is a programming language.",
                'type' => 'true_false',
            ]);
            //  True or False Answer
            PracticeOption::create(['practice_question_id' => $pq2->id, 'option_text' => 'True', 'is_correct' => false]);
            PracticeOption::create(['practice_question_id' => $pq2->id, 'option_text' => 'False', 'is_correct' => true]);

            //  Matching Type
            $pq3 = PracticeQuestion::create([
                'practice_id' => $practice->id,
                'question_text' => "Match the logic gate to its symbol:",
                'type' => 'matching',
                'details' => [
                    'pairs' => [
                        ['left' => 'AND', 'right' => 'D-Shape'],
                        ['left' => 'OR', 'right' => 'Curved'],
                        ['left' => 'NOT', 'right' => 'Triangle'],
                    ]
                ]
            ]);

            // Trace the output
            $pq4 = PracticeQuestion::create([
                'practice_id' => $practice->id,
                'question_text' => "What will this code output?",
                'type' => 'trace_output',
                'details' => [
                    'code_snippet' => 'x = 10\ny = 5\nprint(x % y)'
                ]
            ]);

            PracticeOption::create(['practice_question_id' => $pq4->id, 'option_text' => '0', 'is_correct' => true]);

            // Find the bug
            $pq5 = PracticeQuestion::create([
                'practice_id' => $practice->id,
                'question_text' => "Find the syntax error.",
                'type' => 'find_bug',
                'details' => [
                    'code_snippet' => 'if x = 10:\n    print("Equal")'
                ]
            ]);

            PracticeOption::create(['practice_question_id' => $pq5->id, 'option_text' => "Use '==' for comparison", 'is_correct' => true]);


            // Table Making/Truth Table
            $pq6 = PracticeQuestion::create([
                'practice_id' => $practice->id,
                'question_text' => "Complete the Truth Table for OR:",
                'type' => 'table_making',
                'details' => [
                    'headers' => ['A', 'B', 'Output'],
                    'rows' => [
                        ['0', '0', 'answer:0'],
                        ['0', '1', 'answer:1'],
                        ['1', '0', 'answer:1'],
                        ['1', '1', 'answer:1']
                    ]
                ]
            ]);

            $pq7 = PracticeQuestion::create([
                'practice_id' => $practice->id,
                'question_text' => "Write a Python function to add two numbers.",
                'type' => 'code_writing',
                'details' => [
                    'model_answer' => "def add(a, b):\n    return a + b"
                ]
            ]);

            // ... Add more practice question types here ...
        }
    }
}
