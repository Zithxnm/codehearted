<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Module;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
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
     * Helper function to create modules automatically.
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

        }
    }
}
