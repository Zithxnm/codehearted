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

class FundCompSeeder extends Seeder
{
  
    public function run(): void
    {
        $course = Course::create([
            'title' => 'Fundamentals of Computing',
            'description' => 'Fundamentals of Computing introduces students to the essential concepts of how computers work and interact with information. 
                              It emphasizes problem-solving, logical thinking, and the role of computing in everyday life, helping learners understand not just how to use technology, 
                              but how it fundamentally shapes the modern world.',
            'image_path' => 'imgs/Catalog_Programming.jpg',
        ]);

        $mod1 = Module::create([
            'course_id' => $course->id,
            'title' => 'Module 1: CCS, OHS Policies & Tools',
            'order' => 1,
        ]);

        // Review Modules
        // Module 1 Review
        Review::create([
            'module_id' => $mod1->id,
            'title' => 'Lesson 1: Introduction to Computer System Servicing (CSS)',
            'content' => '
                <section class="objectives">
                    <h2>🎯 Learning Objectives</h2>
                    <p>By the end of this lesson, you will be able to:</p>
                    <ul>
                        <li>Explain what Computer Systems Servicing (CSS) is and its importance in daily use and careers.</li>
                        <li>Follow Occupational Health and Safety (OHS) rules while servicing computers.</li>
                        <li>Identify different Personal Protective Equipment (PPE) used in computer servicing and their purposes.</li>
                        <li>Recognize common servicing tools and describe how each is used safely and correctly.</li>
                        <li>Demonstrate proper handling and organization of tools and components in a work area.</li>
                    </ul>
                </section>

                <section class="core-lesson">
                    <h2>📘 Learning Materials & Core Lesson</h2>

                    <h3>Computer System Servicing (CSS)</h3>
                    <p><strong>Computer System Servicing (CSS)</strong> is the process of <strong>installing, maintaining, troubleshooting, and repairing computer systems and networks</strong>. It covers both hardware (physical components) and software (programs and operating systems).</p>

                    <p><strong>Importance of Computer System Servicing:</strong></p>
                    <ul>
                        <li>Ensures <strong>computers remain efficient, safe, and secure.</strong></li>
                        <li>Prevents downtime in schools, businesses, and offices.</li>
                        <li>Extends the <strong>lifespan of computers and networks.</strong></li>
                        <li>Provides career opportunities in IT support, networking, and system maintenance.</li>
                    </ul>

                    <h3>1. Safety Rules Definition</h3>
                    <p><strong>Safety rules</strong> are guidelines that protect people from harm and prevent accidents during computer servicing.</p>
                    <ul>
                        <li><strong>Power Off First:</strong> Always unplug the computer before opening or repairing it.</li>
                        <li><strong>Avoid Static Electricity:</strong> Use an anti-static wrist strap when handling internal components.</li>
                        <li><strong>Use the Right Tool:</strong> Never force components; always choose the correct tool.</li>
                        <li><strong>Organize Work Area:</strong> Keep screws and parts in containers to prevent loss.</li>
                        <li><strong>Handle Components Properly:</strong> Hold circuit boards by the edges only.</li>
                        <li><strong>Ensure Proper Ventilation:</strong> Avoid overheating when testing or repairing systems.</li>
                        <li><strong>Report Hazards:</strong> Immediately report unsafe equipment or exposed wires.</li>
                    </ul>

                    <h3>2. Personal Protective Equipment (PPE) in CSS</h3>
                    <ul>
                        <li><strong>Anti-static Wrist Strap:</strong> Prevents electrostatic discharge (ESD).</li>
                        <li><strong>Safety Goggles:</strong> Protects the eyes from dust and possible sparks.</li>
                        <li><strong>Face Mask:</strong> Prevents inhalation of dust particles during cleaning.</li>
                        <li><strong>Gloves (ESD or Latex):</strong> Protects components from oils and static.</li>
                        <li><strong>Apron/Lab Coat:</strong> Reduces static buildup and keeps clothes clean.</li>
                    </ul>

                    <h3>3. Common Tools Used in Computer System Servicing</h3>
                    <p><strong>Here are the most commonly used tools:</strong></p>

                    <div class="image-center">
                        <img src="{{ asset(\'imgs/tools.png\') }}" alt="Computer servicing tools" class="image-center">
                    </div>

                    <ul>
                        <li><strong>Anti-static Wrist Strap:</strong> Prevents static electricity damage.</li>
                        <li><strong>Screwdriver Set:</strong> Used for opening cases and hardware. Always use the correct type.</li>
                        <li><strong>Tweezers:</strong> Helps handle tiny components and screws.</li>
                        <li><strong>IC Extractor:</strong> Removes integrated circuits safely.</li>
                        <li><strong>Cable Tester:</strong> Checks if LAN/network cables are working.</li>
                        <li><strong>Multimeter:</strong> Tests voltage, resistance, and continuity.</li>
                        <li><strong>Flash Drive (Bootable):</strong> Contains an OS installer or diagnostic tools.</li>
                        <li><strong>Cleaning Brush:</strong> Removes dust using anti-static bristles.</li>
                        <li><strong>Compressed Air Canister:</strong> Blows dust from inside the system (always upright).</li>
                    </ul>
                </section>

                <section class="references">
                    <h2>📚 References</h2>
                    <ul>
                        <li>Technical Education and Skills Development Authority (TESDA). Computer Systems Servicing NC II: Curriculum Guide. Philippines.</li>
                        <li>Department of Education (DepEd). Computer Systems Servicing: K-12 ICT Curriculum Guide. Philippines.</li>
                        <li>TESDA. Occupational Health and Safety for Computer Hardware Servicing.</li>
                        <li>Philippine National Police (PNP). Preventive Maintenance Guidelines for Computer Equipment.</li>
                    </ul>
                </section>
            ',
            ]);

        //Practice template
        // Lesson 1 Practices
        $prac1 = Practice::create([
                'module_id' => $mod1->id,
                'title' => 'Lesson 1 Practice: I. Problems & Answers',
                'content' => '<p>Practice Questions</p>',
            ]);

            //true or false questions
            $pq1 = PracticeQuestion::create([
                'practice_id' => $prac1->id,
                'question_text' => "An anti-static wrist strap prevents static electricity that can damage sensitive computer parts.",
                'type' => 'true_false',
            ]);

            PracticeOption::create(['practice_question_id' => $pq1->id, 'option_text' => 'True', 'is_correct' => true]);
            PracticeOption::create(['practice_question_id' => $pq1->id, 'option_text' => 'False', 'is_correct' => false]);

            $pq2 = PracticeQuestion::create([
                'practice_id' => $prac1->id,
                'question_text' => "A multimeter is used to check if network cables are working properly.",
                'type' => 'true_false',
            ]);

            PracticeOption::create(['practice_question_id' => $pq2->id, 'option_text' => 'True', 'is_correct' => false]);
            PracticeOption::create(['practice_question_id' => $pq2->id, 'option_text' => 'False', 'is_correct' => true]);

            $pq3 = PracticeQuestion::create([
                'practice_id' => $prac1->id,
                'question_text' => "Tweezers are used to handle small components like screws and jumpers.",
                'type' => 'true_false',
            ]);

            PracticeOption::create(['practice_question_id' => $pq3->id, 'option_text' => 'True', 'is_correct' => true]);
            PracticeOption::create(['practice_question_id' => $pq3->id, 'option_text' => 'False', 'is_correct' => false]);

            $pq4 = PracticeQuestion::create([
                'practice_id' => $prac1->id,
                'question_text' => "A compressed air canister should always be used upright to avoid releasing moisture.",
                'type' => 'true_false',
            ]);

            PracticeOption::create(['practice_question_id' => $pq4->id, 'option_text' => 'True', 'is_correct' => true]);
            PracticeOption::create(['practice_question_id' => $pq4->id, 'option_text' => 'False', 'is_correct' => false]);

            $pq5 = PracticeQuestion::create([
                'practice_id' => $prac1->id,
                'question_text' => "A bootable flash drive is used to install or troubleshoot an operating system.",
                'type' => 'true_false',
            ]);

            PracticeOption::create(['practice_question_id' => $pq5->id, 'option_text' => 'True', 'is_correct' => true]);
            PracticeOption::create(['practice_question_id' => $pq5->id, 'option_text' => 'False', 'is_correct' => false]);

        //identification questions
            $pq6 = PracticeQuestion::create([
                'practice_id' => $prac1->id,
                'question_text' => "List three reasons why safety rules are important in computer servicing.",
                'type' => 'identification',
            ]);

            PracticeOption::create([
                'practice_question_id' => $pq6->id,
                'option_text' => 'To prevent accidents, avoid equipment damage, and ensure a safe work area.',
                'is_correct' => true,
            ]);

            // Identification Question 2
            $pq7 = PracticeQuestion::create([
                'practice_id' => $prac1->id,
                'question_text' => "What PPE should you wear to prevent static electricity?",
                'type' => 'identification',
            ]);

            PracticeOption::create([
                'practice_question_id' => $pq7->id,
                'option_text' => 'Anti-static wrist strap.',
                'is_correct' => true,
            ]);

            // Identification Question 3
            $pq8 = PracticeQuestion::create([
                'practice_id' => $prac1->id,
                'question_text' => "Describe the use of a multimeter in servicing.",
                'type' => 'identification',
            ]);

            PracticeOption::create([
                'practice_question_id' => $pq8->id,
                'option_text' => 'It measures voltage, resistance, and continuity in electrical components.',
                'is_correct' => true,
            ]);



        // Quiz template
        // Lesson 1 Quiz
        $quiz1 = Quiz::create([
            'module_id' => $mod1->id,
            'title' => "Quiz for $mod1->title",
             ]);

             $q1 = Question::create([
                    'quiz_id' => $quiz1->id,
                    'question_text' => 'Which should you do first before opening a computer case?',
                    'type' => 'multiple_choice',
                    'points' => 1,
                    ]);

                QuizOption::create([
                    'question_id' => $q1->id,
                    'option_text' => 'Remove RAM',
                    'is_correct' => false,
                ]);
                QuizOption::create([
                    'question_id' => $q1->id,
                    'option_text' => 'Turn off and unplug the unit',
                    'is_correct' => true,
                ]);
                QuizOption::create([
                    'question_id' => $q1->id,
                    'option_text' => 'Touch the motherboard',
                    'is_correct' => false,
                ]);
                QuizOption::create([
                    'question_id' => $q1->id,
                    'option_text' => 'Use compressed air',
                    'is_correct' => false,
                ]);

            $q2 = Question::create([
                    'quiz_id' => $quiz1->id,
                    'question_text' => 'What PPE prevents damage from static electricity?',
                    'type' => 'multiple_choice',
                    'points' => 1,
                ]);

                QuizOption::create([
                    'question_id' => $q2->id,
                    'option_text' => 'Face mask',
                    'is_correct' => false,
                ]);
                QuizOption::create([
                    'question_id' => $q2->id,
                    'option_text' => 'Gloves',
                    'is_correct' => false,
                ]);
                QuizOption::create([
                    'question_id' => $q2->id,
                    'option_text' => 'Anti-static wrist strap',
                    'is_correct' => true,
                ]);
                QuizOption::create([
                    'question_id' => $q2->id,
                    'option_text' => 'Apron',
                    'is_correct' => false,
                ]);

            $q3 = Question::create([
                    'quiz_id' => $quiz1->id,
                    'question_text' => 'What tool is used to test voltage and continuity?',
                    'type' => 'multiple_choice',
                    'points' => 1,
                ]);

                QuizOption::create([
                    'question_id' => $q3->id,
                    'option_text' => 'Cable tester',
                    'is_correct' => false,
                ]);
                QuizOption::create([
                    'question_id' => $q3->id,
                    'option_text' => 'Multimeter',
                    'is_correct' => true,
                ]);
                QuizOption::create([
                    'question_id' => $q3->id,
                    'option_text' => 'IC extractor',
                    'is_correct' => false,
                ]);
                QuizOption::create([
                    'question_id' => $q3->id,
                    'option_text' => 'Screwdriver',
                    'is_correct' => false,
                ]);

            $q4 = Question::create([
                    'quiz_id' => $quiz1->id,
                    'question_text' => 'Which PPE protects your eyes during repair?',
                    'type' => 'multiple_choice',
                    'points' => 1,
                ]);

                QuizOption::create([
                    'question_id' => $q4->id,
                    'option_text' => 'Goggles',
                    'is_correct' => true,
                ]);
                QuizOption::create([
                    'question_id' => $q4->id,
                    'option_text' => 'Gloves',
                    'is_correct' => false,
                ]);
                QuizOption::create([
                    'question_id' => $q4->id,
                    'option_text' => 'Face mask',
                    'is_correct' => false,
                ]);
                QuizOption::create([
                    'question_id' => $q4->id,
                    'option_text' => 'Apron',
                    'is_correct' => false,
                ]);

            $q5 = Question::create([
                    'quiz_id' => $quiz1->id,
                    'question_text' => 'Which of the following helps prevent overheating during repair?',
                    'type' => 'multiple_choice',
                    'points' => 1,
                ]);

                QuizOption::create([
                    'question_id' => $q5->id,
                    'option_text' => 'Proper ventilation',
                    'is_correct' => true,
                ]);
                QuizOption::create([
                    'question_id' => $q5->id,
                    'option_text' => 'Thick gloves',
                    'is_correct' => false,
                ]);
                QuizOption::create([
                    'question_id' => $q5->id,
                    'option_text' => 'Closed casing',
                    'is_correct' => false,
                ]);
                QuizOption::create([
                    'question_id' => $q5->id,
                    'option_text' => 'Cleaning brush',
                    'is_correct' => false,
                ]);

      $mod2 = Module::create([
            'course_id' => $course->id,
            'title' => 'Module 2: Hardware Assembly',
            'order' => 2,
        ]);
    // Module 2 Review    
        Review::create([
    'module_id' => $mod2->id,
    'title' => 'Lesson 2: Hardware Assembly',
    'content' => '
        <section class="objectives">
            <h2>🎯 Learning Objectives</h2>
            <p>By the end of this lesson, you will be able to:</p>
            <ul>
                <li>Identify the parts of a system unit and describe their main functions.</li>
                <li>Explain the role of major components such as the CPU, motherboard, RAM, PSU, and storage devices.</li>
                <li>Demonstrate proper safety procedures when assembling and handling computer parts.</li>
                <li>Assemble a computer system correctly following standard procedures.</li>
                <li>Practice proper care, organization, and maintenance of computer hardware components.</li>
            </ul>
        </section>

        <section class="core-lesson">
            <h2>📘 Learning Materials & Core Lesson</h2>

            <h3>Definition of System Unit</h3>
            <p>The <strong>system unit</strong> is the core of the computer system. It is usually a rectangular case made of metal and plastic. Inside, it contains electronic components that perform the actual processing of data.</p>

            <h3>Major Parts of the System Unit:</h3>

            <div class="image-center">
                <img src="{{ asset(\'imgs/parts.png\') }}" alt="System Unit Parts" class="image-center">
            </div>

            <h4>Motherboard:</h4>
            <ul>
                <li>The main circuit board of the computer.</li>
                <li>Holds the CPU, RAM, expansion slots, and other crucial components.</li>
                <li>Acts as the backbone that connects all parts of the system unit.</li>
            </ul>

            <h4>Central Processing Unit (CPU):</h4>
            <ul>
                <li>Often called the “brain of the computer.”</li>
                <li>Executes instructions from programs.</li>
            </ul>

            <h4>Random Access Memory (RAM):</h4>
            <ul>
                <li>The computer’s short-term memory.</li>
                <li>Temporarily stores data and instructions while the computer is running.</li>
                <li>Volatile – data is lost when power is turned off.</li>
            </ul>

            <h4>Power Supply Unit (PSU):</h4>
            <ul>
                <li>Converts electrical power from an outlet into usable power for the computer’s components.</li>
                <li>Provides stable voltage and prevents surges.</li>
            </ul>

            <h4>Storage Devices:</h4>
            <ul>
                <li><strong>Hard Disk Drive (HDD):</strong> Stores operating system, software, and files.</li>
                <li><strong>Solid State Drive (SSD):</strong> Faster, modern alternative to HDD with no moving parts.</li>
                <li><strong>Optical Drive (optional):</strong> Reads CDs/DVDs (less common today).</li>
            </ul>

            <h4>Video Card (Graphics Card / GPU):</h4>
            <ul>
                <li>Responsible for rendering images, video, and animations.</li>
                <li>Essential for gaming, video editing, and graphics-intensive applications.</li>
            </ul>

            <h4>Sound Card (optional in modern PCs):</h4>
            <ul>
                <li>Provides audio input and output capabilities.</li>
                <li>Allows connection of speakers, microphones, and other audio devices.</li>
            </ul>

            <h4>Cooling System (Fans/Heat Sink):</h4>
            <ul>
                <li>Maintains safe operating temperature for CPU and GPU.</li>
                <li>Prevents overheating and damage.</li>
            </ul>

            <h4>Case (Chassis):</h4>
            <ul>
                <li>The outer shell that protects all internal components.</li>
                <li>Provides structure, airflow, and cable management.</li>
            </ul>

            <h3>Proper Handling of System Unit Parts</h3>
            <ul>
                <li>Always power off and unplug before opening.</li>
                <li>Handle components by the edges to avoid static damage.</li>
                <li>Use PPE such as anti-static wrist straps.</li>
                <li>Keep screws and parts in containers for organization.</li>
                <li>Avoid touching exposed circuits and connectors.</li>
            </ul>
        </section>

        <section class="references">
            <h2>📚 References</h2>
            <ul>
                <li>American Public University System. (n.d.). Basic components of a computer: How they function. APU Resources.</li>
                <li>Elahi, G. (2022). Computer systems: Digital design, fundamentals of computer architecture and ARM assembly language. Springer.</li>
                <li>GCFGlobal. (n.d.). Computer basics: Inside a computer. GCFGlobal.</li>
                <li>Lenovo. (n.d.). What is a system unit? Lenovo Glossary.</li>
                <li>OpenBookProject. (n.d.). Internal computer hardware. OpenBookProject.</li>
                <li>Technical Education and Skills Development Authority (TESDA). (2019). Computer systems servicing NC II: Curriculum guide.</li>
                <li>University of California, Riverside. (n.d.). Computer hardware overview. Department of Computer Science and Engineering.</li>
            </ul>
        </section>
    ',
    ]);

    //Practice template
    // Lesson 2 Practices
    $prac2 = Practice::create([
                'module_id' => $mod2->id,
                'title' => 'Lesson 2 Practice: I. Problems & Answers',
                'content' => '<p>Practice Questions</p>',
            ]);

            //identification questions
            $pq9 = PracticeQuestion::create([
                'practice_id' => $prac2->id,
                'question_text' => "The main circuit board that connects and holds the CPU, RAM, and other components.",
                'type' => 'identification',
            ]);
            PracticeOption::create([
                'practice_question_id' => $pq9->id,
                'option_text' => 'Motherboard',
                'is_correct' => true,
            ]);

            $pq10 = PracticeQuestion::create([
                'practice_id' => $prac2->id,
                'question_text' => "Known as the “brain of the computer”; it executes program instructions.",
                'type' => 'identification',
            ]);
            PracticeOption::create([
                'practice_question_id' => $pq10->id,
                'option_text' => 'Central Processing Unit (CPU)',
                'is_correct' => true,
            ]);

            $pq11 = PracticeQuestion::create([
                'practice_id' => $prac2->id,
                'question_text' => "A temporary storage that loses its data when the computer is turned off.",
                'type' => 'identification',
            ]);
            PracticeOption::create([
                'practice_question_id' => $pq11->id,
                'option_text' => 'Random Access Memory (RAM)',
                'is_correct' => true,
            ]);

            $pq12 = PracticeQuestion::create([
                'practice_id' => $prac2->id,
                'question_text' => "Converts electricity from an outlet into usable power for the computer’s components.",
                'type' => 'identification',
            ]);
            PracticeOption::create([
                'practice_question_id' => $pq12->id,
                'option_text' => 'Power Supply Unit (PSU)',
                'is_correct' => true,
            ]);

            $pq13 = PracticeQuestion::create([
                'practice_id' => $prac2->id,
                'question_text' => "The outer shell that houses and protects all the internal computer parts.",
                'type' => 'identification',
            ]);
            PracticeOption::create([
                'practice_question_id' => $pq13->id,
                'option_text' => 'Case (Chassis)',
                'is_correct' => true,
            ]);

        //multiple choice questions
            $pq14 = PracticeQuestion::create([
                'practice_id' => $prac2->id,
                'question_text' => "Which component is responsible for rendering images, videos, and animations?",
                'type' => 'multiple_choice',
            ]);

            PracticeOption::create([
                'practice_question_id' => $pq14->id,
                'option_text' => 'Sound Card',
                'is_correct' => false,
            ]);

            PracticeOption::create([
                'practice_question_id' => $pq14->id,
                'option_text' => 'Video Card (GPU)',
                'is_correct' => true,
            ]);

            PracticeOption::create([
                'practice_question_id' => $pq14->id,
                'option_text' => 'Power Supply Unit',
                'is_correct' => false,
            ]);

            PracticeOption::create([
                'practice_question_id' => $pq14->id,
                'option_text' => 'Motherboard',
                'is_correct' => false,
            ]);

            $pq15 = PracticeQuestion::create([
                'practice_id' => $prac2->id,
                'question_text' => "What device stores the operating system, applications, and files?",
                'type' => 'multiple_choice',
            ]);

            PracticeOption::create([
                'practice_question_id' => $pq15->id,
                'option_text' => 'RAM',
                'is_correct' => false,
            ]);

            PracticeOption::create([
                'practice_question_id' => $pq15->id,
                'option_text' => 'CPU',
                'is_correct' => false,
            ]);

            PracticeOption::create([
                'practice_question_id' => $pq15->id,
                'option_text' => 'Storage Device',
                'is_correct' => true,
            ]);

            PracticeOption::create([
                'practice_question_id' => $pq15->id,
                'option_text' => 'Cooling System',
                'is_correct' => false,
            ]);

            $pq16 = PracticeQuestion::create([
                'practice_id' => $prac2->id,
                'question_text' => "The Cooling System (fans and heat sink) is primarily used to:",
                'type' => 'multiple_choice',
            ]);

            PracticeOption::create([
                'practice_question_id' => $pq16->id,
                'option_text' => 'Improve sound quality',
                'is_correct' => false,
            ]);

            PracticeOption::create([
                'practice_question_id' => $pq16->id,
                'option_text' => 'Prevent overheating of components',
                'is_correct' => true,
            ]);

            PracticeOption::create([
                'practice_question_id' => $pq16->id,
                'option_text' => 'Increase power output',
                'is_correct' => false,
            ]);

            PracticeOption::create([
                'practice_question_id' => $pq16->id,
                'option_text' => 'Clean the inside of the computer',
                'is_correct' => false,
            ]);

        // Quiz template
        // Lesson 2 Quiz
        $quiz2 = Quiz::create([
            'module_id' => $mod2->id,
            'title' => "Quiz for $mod2->title",
             ]);
        
            $q6 = Question::create([
                'quiz_id' => $quiz2->id,
                'question_text' => 'Which part is the “brain” of the computer?',
                'type' => 'multiple_choice',
                'points' => 1,
            ]);

            QuizOption::create([
                'question_id' => $q6->id,
                'option_text' => 'RAM',
                'is_correct' => false,
            ]);
            QuizOption::create([
                'question_id' => $q6->id,
                'option_text' => 'CPU',
                'is_correct' => true,
            ]);
            QuizOption::create([
                'question_id' => $q6->id,
                'option_text' => 'GPU',
                'is_correct' => false,
            ]);
            QuizOption::create([
                'question_id' => $q6->id,
                'option_text' => 'PSU',
                'is_correct' => false,
            ]);

            $q7 = Question::create([
                'quiz_id' => $quiz2->id,
                'question_text' => 'Which component connects all other parts?',
                'type' => 'multiple_choice',
                'points' => 1,
            ]);

            QuizOption::create([
                'question_id' => $q7->id,
                'option_text' => 'Motherboard',
                'is_correct' => true,
            ]);
            QuizOption::create([
                'question_id' => $q7->id,
                'option_text' => 'Hard drive',
                'is_correct' => false,
            ]);
            QuizOption::create([
                'question_id' => $q7->id,
                'option_text' => 'Power supply',
                'is_correct' => false,
            ]);
            QuizOption::create([
                'question_id' => $q7->id,
                'option_text' => 'CPU',
                'is_correct' => false,
            ]);

            $q8 = Question::create([
                'quiz_id' => $quiz2->id,
                'question_text' => 'What is the short-term memory of a computer?',
                'type' => 'multiple_choice',
                'points' => 1,
            ]);

            QuizOption::create([
                'question_id' => $q8->id,
                'option_text' => 'SSD',
                'is_correct' => false,
            ]);
            QuizOption::create([
                'question_id' => $q8->id,
                'option_text' => 'RAM',
                'is_correct' => true,
            ]);
            QuizOption::create([
                'question_id' => $q8->id,
                'option_text' => 'PSU',
                'is_correct' => false,
            ]);
            QuizOption::create([
                'question_id' => $q8->id,
                'option_text' => 'GPU',
                'is_correct' => false,
            ]);

            $q9 = Question::create([
                'quiz_id' => $quiz2->id,
                'question_text' => 'What component powers all parts of the system?',
                'type' => 'multiple_choice',
                'points' => 1,
            ]);

            QuizOption::create([
                'question_id' => $q9->id,
                'option_text' => 'CPU',
                'is_correct' => false,
            ]);
            QuizOption::create([
                'question_id' => $q9->id,
                'option_text' => 'PSU',
                'is_correct' => true,
            ]);
            QuizOption::create([
                'question_id' => $q9->id,
                'option_text' => 'RAM',
                'is_correct' => false,
            ]);
            QuizOption::create([
                'question_id' => $q9->id,
                'option_text' => 'GPU',
                'is_correct' => false,
            ]);

            $q10 = Question::create([
                'quiz_id' => $quiz2->id,
                'question_text' => 'Which device improves visual output?',
                'type' => 'multiple_choice',
                'points' => 1,
            ]);

            QuizOption::create([
                'question_id' => $q10->id,
                'option_text' => 'RAM',
                'is_correct' => false,
            ]);
            QuizOption::create([
                'question_id' => $q10->id,
                'option_text' => 'GPU',
                'is_correct' => true,
            ]);
            QuizOption::create([
                'question_id' => $q10->id,
                'option_text' => 'CPU',
                'is_correct' => false,
            ]);
            QuizOption::create([
                'question_id' => $q10->id,
                'option_text' => 'PSU',
                'is_correct' => false,
            ]);

    $mod3 = Module::create([
            'course_id' => $course->id,
            'title' => 'Module 3: BIOS/UEFI & Bootable Media',
            'order' => 3,
        ]);
    // Module 3 Review
    Review::create([
    'module_id' => $mod3->id,
    'title' => 'Lesson 3: BIOS/UEFI & Bootable Media',
    'content' => '
        <h2>🎯 Learning Objectives</h2>
        <p>By the end of this lesson, you will be able to:</p>
        <ul>
            <li>Define BIOS and UEFI and explain their roles during computer startup.</li>
            <li>Describe the functions of BIOS/UEFI including POST, boot sequence, and hardware initialization.</li>
            <li>Identify different types of bootable media and their uses in computer servicing.</li>
            <li>Explain the importance of bootable media in installing or troubleshooting operating systems.</li>
            <li>Access and configure BIOS/UEFI settings safely for installation or repair purposes.</li>
        </ul>

        <h2>📘 Learning Materials & Core Lesson</h2>

        <h3>BIOS/UEFI Definition</h3>
        <p>BIOS (Basic Input/Output System) and UEFI (Unified Extensible Firmware Interface) are firmware programs stored on a computer’s motherboard. They are the very first software that runs when you power on a computer. Their purpose is to initialize hardware, check system components, and hand over control to the operating system.</p>

        <ul>
            <li><strong>BIOS:</strong> Traditional firmware, text-based, limited to older systems.</li>
            <li><strong>UEFI:</strong> Modern replacement for BIOS, supports graphical interface, larger storage drives, and faster booting.</li>
        </ul>

        <h3>Functions of BIOS/UEFI</h3>
        <ul>
            <li><strong>Power-On Self Test (POST):</strong> Checks memory, CPU, keyboard, and other hardware before booting.</li>
            <li><strong>Hardware Initialization:</strong> Ensures all components (RAM, drives, GPU) are ready.</li>
            <li><strong>Boot Device Selection:</strong> Lets you choose where the computer loads the OS from (hard drive, USB, DVD).</li>
            <li><strong>System Settings Management:</strong> Allows users to configure time, date, boot order, security passwords, and more.</li>
            <li><strong>Firmware Update Support (UEFI):</strong> Enables updating to fix bugs or improve compatibility.</li>
        </ul>

        <h3>Bootable Media Definition</h3>
        <p>Bootable media is any storage device prepared to start (boot) a computer. It contains essential files and instructions to load an operating system or troubleshooting environment.</p>

        <div class="image-center">
            <img src="{{ asset("imgs/tools2.png") }}" alt="Bootable Media" class="image-center">
        </div>

        <ul>
            <li><strong>USB Flash Drive (Bootable):</strong> Commonly used to install Windows, Linux, or diagnostic tools.</li>
            <li><strong>CD/DVD (Bootable):</strong> Older but still used in some systems.</li>
            <li><strong>External Hard Drive (Bootable):</strong> Can store full OS environments.</li>
            <li><strong>Network Boot (PXE):</strong> Boots a computer over a network connection.</li>
        </ul>

        <h3>Importance of Bootable Media in CSS</h3>
        <ul>
            <li>Used for installing operating systems (Windows, Linux, etc.).</li>
            <li>Essential for troubleshooting when the main OS is corrupted.</li>
            <li>Provides access to diagnostic tools (disk checkers, memory tests, antivirus).</li>
            <li>Allows technicians to recover data from damaged systems.</li>
        </ul>

        <h2>📚 References</h2>
        <ul>
            <li>HP. (2025, February 13). <em>What is UEFI? Understanding Your PC’s Core Technology.</em> HP Tech Takes.</li>
            <li>NameHero. (2024, April 10). <em>Understanding the Differences: UEFI vs. BIOS.</em> NameHero.</li>
            <li>Wright, G. (2021, July 26). <em>What is Preboot Execution Environment (PXE)?</em> TechTarget.</li>
            <li>Lenovo. (n.d.). <em>What is a boot device & why is it important?</em> Lenovo Glossary.</li>
        </ul>
    ',
    ]);

    // Lesson 3 Practices
        $prac3 = Practice::create([
            'module_id' => $mod3->id,
            'title' => 'Lesson 3 Practice: I. Problems & Answers',
            'content' => '<p>Practice Questions</p>',
        ]);

        // IDENTIFICATION QUESTIONS
        $pq17 = PracticeQuestion::create([
            'practice_id' => $prac3->id,
            'question_text' => "The very first software that runs when a computer is powered on; it initializes hardware and passes control to the operating system.",
            'type' => 'identification',
        ]);
        PracticeOption::create([
            'practice_question_id' => $pq17->id,
            'option_text' => 'BIOS/UEFI',
            'is_correct' => true,
        ]);

        $pq18 = PracticeQuestion::create([
            'practice_id' => $prac3->id,
            'question_text' => "A modern replacement for BIOS that supports a graphical interface, faster booting, and large storage drives.",
            'type' => 'identification',
        ]);
        PracticeOption::create([
            'practice_question_id' => $pq18->id,
            'option_text' => 'UEFI',
            'is_correct' => true,
        ]);

        $pq19 = PracticeQuestion::create([
            'practice_id' => $prac3->id,
            'question_text' => "The process performed by BIOS/UEFI that checks hardware like memory, CPU, and keyboard before the operating system loads.",
            'type' => 'identification',
        ]);
        PracticeOption::create([
            'practice_question_id' => $pq19->id,
            'option_text' => 'Power-On Self Test (POST)',
            'is_correct' => true,
        ]);


        // MULTIPLE CHOICE QUESTIONS
        $pq20 = PracticeQuestion::create([
            'practice_id' => $prac3->id,
            'question_text' => "Which of the following is the first software that runs when you turn on a computer?",
            'type' => 'multiple_choice',
        ]);

        PracticeOption::create([
            'practice_question_id' => $pq20->id,
            'option_text' => 'Operating System',
            'is_correct' => false,
        ]);
        PracticeOption::create([
            'practice_question_id' => $pq20->id,
            'option_text' => 'BIOS/UEFI',
            'is_correct' => true,
        ]);
        PracticeOption::create([
            'practice_question_id' => $pq20->id,
            'option_text' => 'Boot Loader',
            'is_correct' => false,
        ]);
        PracticeOption::create([
            'practice_question_id' => $pq20->id,
            'option_text' => 'Device Driver',
            'is_correct' => false,
        ]);


        $pq21 = PracticeQuestion::create([
            'practice_id' => $prac3->id,
            'question_text' => "The Power-On Self Test (POST) performed by BIOS/UEFI is used to:",
            'type' => 'multiple_choice',
        ]);

        PracticeOption::create([
            'practice_question_id' => $pq21->id,
            'option_text' => 'Install the operating system',
            'is_correct' => false,
        ]);
        PracticeOption::create([
            'practice_question_id' => $pq21->id,
            'option_text' => 'Check and initialize hardware components before booting',
            'is_correct' => true,
        ]);
        PracticeOption::create([
            'practice_question_id' => $pq21->id,
            'option_text' => 'Clean the computer’s memory',
            'is_correct' => false,
        ]);
        PracticeOption::create([
            'practice_question_id' => $pq21->id,
            'option_text' => 'Configure display settings',
            'is_correct' => false,
        ]);


        $pq22 = PracticeQuestion::create([
            'practice_id' => $prac3->id,
            'question_text' => "What type of bootable media is most commonly used today to install operating systems or run diagnostic tools?",
            'type' => 'multiple_choice',
        ]);

        PracticeOption::create([
            'practice_question_id' => $pq22->id,
            'option_text' => 'CD/DVD',
            'is_correct' => false,
        ]);
        PracticeOption::create([
            'practice_question_id' => $pq22->id,
            'option_text' => 'Network Boot (PXE)',
            'is_correct' => false,
        ]);
        PracticeOption::create([
            'practice_question_id' => $pq22->id,
            'option_text' => 'USB Flash Drive',
            'is_correct' => true,
        ]);
        PracticeOption::create([
            'practice_question_id' => $pq22->id,
            'option_text' => 'External Hard Drive',
            'is_correct' => false,
        ]);


        $pq23 = PracticeQuestion::create([
            'practice_id' => $prac3->id,
            'question_text' => "A Network Boot (PXE) allows a computer to start up using:",
            'type' => 'multiple_choice',
        ]);

        PracticeOption::create([
            'practice_question_id' => $pq23->id,
            'option_text' => 'A USB device',
            'is_correct' => false,
        ]);
        PracticeOption::create([
            'practice_question_id' => $pq23->id,
            'option_text' => 'A local hard drive',
            'is_correct' => false,
        ]);
        PracticeOption::create([
            'practice_question_id' => $pq23->id,
            'option_text' => 'A CD/DVD',
            'is_correct' => false,
        ]);
        PracticeOption::create([
            'practice_question_id' => $pq23->id,
            'option_text' => 'A network connection',
            'is_correct' => true,
        ]);


        $pq24 = PracticeQuestion::create([
            'practice_id' => $prac3->id,
            'question_text' => "Why is bootable media important in Computer System Servicing (CSS)?",
            'type' => 'multiple_choice',
        ]);

        PracticeOption::create([
            'practice_question_id' => $pq24->id,
            'option_text' => 'It increases the computer’s speed',
            'is_correct' => false,
        ]);
        PracticeOption::create([
            'practice_question_id' => $pq24->id,
            'option_text' => 'It is used for entertainment purposes',
            'is_correct' => false,
        ]);
        PracticeOption::create([
            'practice_question_id' => $pq24->id,
            'option_text' => 'It allows technicians to install, troubleshoot, and recover systems',
            'is_correct' => true,
        ]);
        PracticeOption::create([
            'practice_question_id' => $pq24->id,
            'option_text' => 'It prevents malware from infecting the BIOS',
            'is_correct' => false,
        ]);

        // Quiz template
        // Lesson 3 Quiz
        $quiz3= Quiz::create([
            'module_id' => $mod3->id,
            'title' => "Quiz for $mod3->title",
             ]);

        $q11 = Question::create([
            'quiz_id' => $quiz3->id,
            'question_text' => 'BIOS stands for:',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q11->id,
            'option_text' => 'Basic Input/Output System',
            'is_correct' => true,
        ]);

        QuizOption::create([
            'question_id' => $q11->id,
            'option_text' => 'Binary Integrated Operation Setup',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q11->id,
            'option_text' => 'Boot Interface Operating System',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q11->id,
            'option_text' => 'Base Input Option Software',
            'is_correct' => false,
        ]);


        $q12 = Question::create([
            'quiz_id' => $quiz3->id,
            'question_text' => 'What is the modern replacement for BIOS?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q12->id,
            'option_text' => 'CMOS',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q12->id,
            'option_text' => 'UEFI',
            'is_correct' => true,
        ]);

        QuizOption::create([
            'question_id' => $q12->id,
            'option_text' => 'GUI',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q12->id,
            'option_text' => 'POST',
            'is_correct' => false,
        ]);


        $q13 = Question::create([
            'quiz_id' => $quiz3->id,
            'question_text' => 'What does POST do?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q13->id,
            'option_text' => 'Installs drivers',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q13->id,
            'option_text' => 'Checks hardware before booting',
            'is_correct' => true,
        ]);

        QuizOption::create([
            'question_id' => $q13->id,
            'option_text' => 'Loads OS',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q13->id,
            'option_text' => 'Tests applications',
            'is_correct' => false,
        ]);


        $q14 = Question::create([
            'quiz_id' => $quiz3->id,
            'question_text' => 'What allows you to choose where the OS loads from?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q14->id,
            'option_text' => 'Boot order',
            'is_correct' => true,
        ]);

        QuizOption::create([
            'question_id' => $q14->id,
            'option_text' => 'CPU',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q14->id,
            'option_text' => 'GPU',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q14->id,
            'option_text' => 'BIOS chip',
            'is_correct' => false,
        ]);


        $q15 = Question::create([
            'quiz_id' => $quiz3->id,
            'question_text' => 'Which is NOT an example of bootable media?',
            'type' => 'multiple_choice',
            'points' => 1,
        ]);

        QuizOption::create([
            'question_id' => $q15->id,
            'option_text' => 'USB',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q15->id,
            'option_text' => 'CD/DVD',
            'is_correct' => false,
        ]);

        QuizOption::create([
            'question_id' => $q15->id,
            'option_text' => 'RAM',
            'is_correct' => true,
        ]);

        QuizOption::create([
            'question_id' => $q15->id,
            'option_text' => 'Network boot',
            'is_correct' => false,
        ]);

    $mod4 = Module::create([
            'course_id' => $course->id,
            'title' => 'Module 4: Installing OS & Drivers',
            'order' => 4,
        ]);
    // Module 4 Review
    Review::create([
    'module_id' => $mod4->id,
    'title' => 'Lesson 4: Installing OS & Drivers',
    'content' => '<h2>🎯 Learning Objectives</h2>
                <p>By the end of this lesson, you will be able to:</p>
                <ul>
                    <li>Define what an Operating System (OS) is and describe its main functions.</li>
                    <li>Follow the correct steps in installing an operating system on a computer.</li>
                    <li>Identify the importance of drivers and their role in hardware communication.</li>
                    <li>Install and update drivers using different methods (automatic, manual, or via Device Manager).</li>
                    <li>Demonstrate a complete OS and driver installation following proper procedures and safety rules.</li>
                </ul>

                <h2>📘 Learning Materials & Core Lesson</h2>

                <h3>Installing Operating System (OS) – Definition</h3>
                <p>An <strong>Operating System (OS)</strong> is the main software that manages a computer’s hardware and software resources. Installing an OS means setting up this system on a storage device (HDD/SSD) so that the computer can function and run applications.</p>

                <p><strong>Examples:</strong> Windows, Linux, macOS.</p>

                <h3>Steps in Installing an Operating System</h3>
                <ul>
                    <li><strong>Prepare Bootable Media –</strong> Use a USB, DVD, or network installer.</li>
                    <li><strong>Access BIOS/UEFI –</strong> Change boot order to boot from the prepared media.</li>
                    <li><strong>Start Installation –</strong> Load the installer and follow prompts.</li>
                    <li><strong>Partition the Drive –</strong> Choose or create partitions for system files and data.</li>
                    <li><strong>Copy Files & Install –</strong> The installer sets up the OS on the hard drive.</li>
                    <li><strong>Initial Setup –</strong> Configure time, region, user accounts, and security settings.</li>
                </ul>

                <h3>Drivers – Definition</h3>
                <p>A <strong>driver</strong> is specialized software that allows the operating system to communicate with hardware devices (e.g., printer, graphics card, network adapter). Without proper drivers, hardware may not work correctly.</p>

                <h3>Installing Drivers</h3>
                <ul>
                    <li><strong>Automatic Installation –</strong> Modern OS (like Windows 10/11) installs most drivers automatically.</li>
                    <li><strong>Manual Installation –</strong> Some devices require downloading drivers from the manufacturer’s website.</li>
                    <li><strong>Driver Disc/USB –</strong> Some hardware (like printers or motherboards) comes with driver discs or USBs.</li>
                    <li><strong>Device Manager (Windows) –</strong> Can be used to check, update, or troubleshoot drivers.</li>
                </ul>

                <h3>Importance of OS & Driver Installation</h3>
                <ul>
                    <li>OS Installation makes the computer usable by providing the base system for applications.</li>
                    <li>Drivers ensure all hardware (keyboard, sound, graphics, network, etc.) functions properly.</li>
                    <li>Both are essential for stability, performance, and compatibility of the system.</li>
                </ul>

                <h2>📚 References</h2>
                <ul>
                    <li>Microsoft. (n.d.). Windows Setup installation process. Microsoft Learn. https://learn.microsoft.com/en-us/windowshardware/manufacture/desktop/windows-setup-installationprocess?view=windows-11</li>
                    <li>Microsoft. (2024, September 20). Understanding Windows Update rules for driver distribution. Microsoft Learn. https://learn.microsoft.com/en-us/windowshardware/drivers/dashboard/understanding-windows-update-automatic-andoptional-rules-for-driver-distribution</li>
                    <li>GeeksforGeeks. (2021, November XX). Different methods of Operating System Installation. GeeksforGeeks. https://www.geeksforgeeks.org/operatingsystems/tips-and-tricks-on-operating-system-installations/</li>
                    <li>SANS Institute. (n.d.). Operating System Installation Guidelines. SANS. https://www.sans.org/media/security-training/os_install2.pdf</li>
                </ul>',
        ]);

                // Lesson 4 Practice
                $prac4 = Practice::create([
                    'module_id' => $mod4->id,
                    'title' => 'Lesson 4 Practice: I. Problems & Answers',
                    'content' => '<p>Practice Questions</p>',
                ]);

                // Identification Questions
                $pq25 = PracticeQuestion::create([
                    'practice_id' => $prac4->id,
                    'question_text' => "Define a 'driver.'",
                    'type' => 'identification',
                ]);
                PracticeOption::create([
                    'practice_question_id' => $pq25->id,
                    'option_text' => 'Software that links OS and hardware',
                    'is_correct' => true,
                ]);

                $pq26 = PracticeQuestion::create([
                    'practice_id' => $prac4->id,
                    'question_text' => "Give one example of an OS.",
                    'type' => 'identification',
                ]);
                PracticeOption::create([
                    'practice_question_id' => $pq26->id,
                    'option_text' => 'Windows/Linux/macOS',
                    'is_correct' => true,
                ]);

                $pq27 = PracticeQuestion::create([
                    'practice_id' => $prac4->id,
                    'question_text' => "What tool can check driver issues?",
                    'type' => 'identification',
                ]);
                PracticeOption::create([
                    'practice_question_id' => $pq27->id,
                    'option_text' => 'Device Manager',
                    'is_correct' => true,
                ]);

                $pq28 = PracticeQuestion::create([
                    'practice_id' => $prac4->id,
                    'question_text' => "Why is OS installation important?",
                    'type' => 'identification',
                ]);
                PracticeOption::create([
                    'practice_question_id' => $pq28->id,
                    'option_text' => 'It makes the computer usable',
                    'is_correct' => true,
                ]);

                $pq29 = PracticeQuestion::create([
                    'practice_id' => $prac4->id,
                    'question_text' => "Mention one benefit of updated drivers.",
                    'type' => 'identification',
                ]);
                PracticeOption::create([
                    'practice_question_id' => $pq29->id,
                    'option_text' => 'Improved performance or compatibility',
                    'is_correct' => true,
                ]);

                // True or False Questions
                $pq30 = PracticeQuestion::create([
                    'practice_id' => $prac4->id,
                    'question_text' => "Without drivers, some devices may not work.",
                    'type' => 'true_false',
                ]);
                PracticeOption::create(['practice_question_id' => $pq30->id, 'option_text' => 'True', 'is_correct' => true]);
                PracticeOption::create(['practice_question_id' => $pq30->id, 'option_text' => 'False', 'is_correct' => false]);

                $pq31 = PracticeQuestion::create([
                    'practice_id' => $prac4->id,
                    'question_text' => "OS installation happens before hardware assembly.",
                    'type' => 'true_false',
                ]);
                PracticeOption::create(['practice_question_id' => $pq31->id, 'option_text' => 'True', 'is_correct' => false]);
                PracticeOption::create(['practice_question_id' => $pq31->id, 'option_text' => 'False', 'is_correct' => true]);

                $pq32 = PracticeQuestion::create([
                    'practice_id' => $prac4->id,
                    'question_text' => "You can use a bootable USB to install Windows.",
                    'type' => 'true_false',
                ]);
                PracticeOption::create(['practice_question_id' => $pq32->id, 'option_text' => 'True', 'is_correct' => true]);
                PracticeOption::create(['practice_question_id' => $pq32->id, 'option_text' => 'False', 'is_correct' => false]);

                $pq33 = PracticeQuestion::create([
                    'practice_id' => $prac4->id,
                    'question_text' => "BIOS automatically updates drivers.",
                    'type' => 'true_false',
                ]);
                PracticeOption::create(['practice_question_id' => $pq33->id, 'option_text' => 'True', 'is_correct' => false]);
                PracticeOption::create(['practice_question_id' => $pq33->id, 'option_text' => 'False', 'is_correct' => true]);

                $pq34 = PracticeQuestion::create([
                    'practice_id' => $prac4->id,
                    'question_text' => "OS setup includes time and region settings.",
                    'type' => 'true_false',
                ]);
                PracticeOption::create(['practice_question_id' => $pq34->id, 'option_text' => 'True', 'is_correct' => true]);
                PracticeOption::create(['practice_question_id' => $pq34->id, 'option_text' => 'False', 'is_correct' => false]);


                // Quiz template
                // Lesson 4 Quiz
                $quiz4= Quiz::create([
                    'module_id' => $mod4->id,
                    'title' => "Quiz for $mod3->title",
                    ]);

                $q16 = Question::create([
                    'quiz_id' => $quiz4->id,
                    'question_text' => 'What software manages hardware and programs?',
                    'type' => 'multiple_choice',
                    'points' => 1,
                ]);

                QuizOption::create(['question_id' => $q16->id, 'option_text' => 'OS', 'is_correct' => true]);
                QuizOption::create(['question_id' => $q16->id, 'option_text' => 'Driver', 'is_correct' => false]);
                QuizOption::create(['question_id' => $q16->id, 'option_text' => 'BIOS', 'is_correct' => false]);
                QuizOption::create(['question_id' => $q16->id, 'option_text' => 'Application', 'is_correct' => false]);

                $q17 = Question::create([
                    'quiz_id' => $quiz4->id,
                    'question_text' => 'Which step comes first in OS installation?',
                    'type' => 'multiple_choice',
                    'points' => 1,
                ]);

                QuizOption::create(['question_id' => $q17->id, 'option_text' => 'Copying files', 'is_correct' => false]);
                QuizOption::create(['question_id' => $q17->id, 'option_text' => 'Preparing bootable media', 'is_correct' => true]);
                QuizOption::create(['question_id' => $q17->id, 'option_text' => 'Creating user account', 'is_correct' => false]);
                QuizOption::create(['question_id' => $q17->id, 'option_text' => 'Updating drivers', 'is_correct' => false]);

                $q18 = Question::create([
                    'quiz_id' => $quiz4->id,
                    'question_text' => 'What must be changed in BIOS before OS installation?',
                    'type' => 'multiple_choice',
                    'points' => 1,
                ]);

                QuizOption::create(['question_id' => $q18->id, 'option_text' => 'Boot order', 'is_correct' => true]);
                QuizOption::create(['question_id' => $q18->id, 'option_text' => 'Fan speed', 'is_correct' => false]);
                QuizOption::create(['question_id' => $q18->id, 'option_text' => 'Date and time', 'is_correct' => false]);
                QuizOption::create(['question_id' => $q18->id, 'option_text' => 'System password', 'is_correct' => false]);

                $q19 = Question::create([
                    'quiz_id' => $quiz4->id,
                    'question_text' => 'A driver allows:',
                    'type' => 'multiple_choice',
                    'points' => 1,
                ]);

                QuizOption::create(['question_id' => $q19->id, 'option_text' => 'The OS to communicate with hardware', 'is_correct' => true]);
                QuizOption::create(['question_id' => $q19->id, 'option_text' => 'Faster internet', 'is_correct' => false]);
                QuizOption::create(['question_id' => $q19->id, 'option_text' => 'Virus protection', 'is_correct' => false]);
                QuizOption::create(['question_id' => $q19->id, 'option_text' => 'Data storage', 'is_correct' => false]);

                $q20 = Question::create([
                    'quiz_id' => $quiz4->id,
                    'question_text' => 'Which is NOT an example of an OS?',
                    'type' => 'multiple_choice',
                    'points' => 1,
                ]);

                QuizOption::create(['question_id' => $q20->id, 'option_text' => 'Windows', 'is_correct' => false]);
                QuizOption::create(['question_id' => $q20->id, 'option_text' => 'Linux', 'is_correct' => false]);
                QuizOption::create(['question_id' => $q20->id, 'option_text' => 'Android', 'is_correct' => false]);
                QuizOption::create(['question_id' => $q20->id, 'option_text' => 'Photoshop', 'is_correct' => true]);

        $mod5 = Module::create([
            'course_id' => $course->id,
            'title' => 'Module 5: Installing Applications & Licensing',
            'order' => 5,
        ]);

        $review5 = Review::create([
    'module_id' => $mod5->id,
    'title' => 'Lesson 5: Installing Applications & Licensing',
    'content' => '<h2>🎯 Learning Objectives</h2>
                <p>By the end of this lesson, you will be able to:</p>
                <ul>
                    <li>Explain what an application software is and identify examples used in daily tasks.</li>
                    <li>Follow the correct steps in installing various software applications.</li>
                    <li>Differentiate between types of licenses (proprietary, open-source, freeware, shareware, subscription).</li>
                    <li>Practice proper installation and licensing to ensure legal, secure, and stable system performance.</li>
                    <li>Define software licensing and explain its importance in legal and safe software use.</li>
                </ul>

                <h2>📘 Learning Materials & Core Lesson</h2>

                <h3>Installing Applications – Definition</h3>
                <p><strong>Applications (or software programs)</strong> are tools designed to perform specific tasks, such as word processing, browsing the internet, or editing photos. Installing applications means setting up these programs on a computer so they can be used by the user.</p>
                <p><strong>Examples:</strong> Microsoft Office, Google Chrome, Adobe Photoshop, VLC Media Player.</p>

                <h3>Steps in Installing Applications</h3>
                <ul>
                    <li><strong>Obtain the Installer</strong> — Applications may come from CDs, USBs, or are downloaded online.</li>
                    <li><strong>Check System Requirements</strong> — Ensure the computer meets minimum hardware and OS requirements.</li>
                    <li><strong>Run the Installer</strong> — Usually a file with extensions like .exe (Windows) or .pkg/.dmg (macOS).</li>
                    <li><strong>Follow Setup Wizard</strong> — Choose installation type (typical, custom), and destination folder.</li>
                    <li><strong>Complete Installation</strong> — Wait until files are copied and program shortcuts are created.</li>
                    <li><strong>Restart if Required</strong> — Some applications need a system restart to finish setup.</li>
                </ul>

                <h3>Licensing – Definition</h3>
                <p>A <strong>software license</strong> is a legal agreement that defines how software can be used, shared, or distributed. It ensures that applications are used legally and protects both the user and the software developer.</p>

                <h3>Types of Software Licensing</h3>
                <ul>
                    <li><strong>Proprietary / Commercial License</strong> — Paid software (e.g., Microsoft Office, Adobe Creative Suite). Requires a product key or activation.</li>
                    <li><strong>Open-Source License</strong> — Free to use, modify, and share (e.g., Linux, GIMP).</li>
                    <li><strong>Freeware</strong> — Free to use but cannot be modified (e.g., Google Chrome, VLC).</li>
                    <li><strong>Shareware / Trialware</strong> — Free for a limited time or with limited features; full version requires payment (e.g., WinRAR).</li>
                    <li><strong>Subscription-Based</strong> — Software is rented on a monthly or yearly basis (e.g., Microsoft 365, Adobe CC).</li>
                </ul>

                <h3>Importance of Proper Licensing</h3>
                <ul>
                    <li><strong>Legal Use</strong> — Prevents piracy and ensures compliance with laws.</li>
                    <li><strong>Updates & Support</strong> — Licensed users receive security updates, bug fixes, and technical support.</li>
                    <li><strong>Security</strong> — Pirated or cracked software may contain malware.</li>
                    <li><strong>Reliability</strong> — Licensed applications run more smoothly and with fewer issues.</li>
                </ul>

                <h2>📚 References</h2>
                <ul>
                    <li>OnCrashReboot. (2024, December 12). Steps for installing software on a computer. OnCrashReboot. https://www.oncrashreboot.com/computer-literacy-studyguide/software/steps-for-installing-software/oncrashreboot.com</li>
                    <li>Revenera. (2025, August 8). Software licensing models & types: Your complete guide. Revenera. https://www.revenera.com/blog/software-monetization/software-licensingmodels-types/revenera.com</li>
                    <li>Black Duck. (2024, March 21). Five types of software licenses you need to understand. Black Duck. https://www.blackduck.com/blog/5-types-of-software-licenses-you-need-tounderstand.html</li>
                </ul>',
            ]);

                //Lesson 5 Practice
                $prac5 = Practice::create([
                    'module_id' => $mod5->id,
                    'title' => 'Lesson 5 Practice: I. Problems & Answers',
                    'content' => '<p>Practice Questions</p>',
                ]);

                // Identification questions
                $pq35 = PracticeQuestion::create([
                    'practice_id' => $prac5->id,
                    'question_text' => "What is software licensing?",
                    'type' => 'identification',
                ]);
                PracticeOption::create([
                    'practice_question_id' => $pq35->id,
                    'option_text' => 'A legal agreement that defines how software can be used.',
                    'is_correct' => true,
                ]);

                $pq36 = PracticeQuestion::create([
                    'practice_id' => $prac5->id,
                    'question_text' => "Give two types of software licenses.",
                    'type' => 'identification',
                ]);
                PracticeOption::create([
                    'practice_question_id' => $pq36->id,
                    'option_text' => 'Freeware and Open-source',
                    'is_correct' => true,
                ]);
                PracticeOption::create([
                    'practice_question_id' => $pq36->id,
                    'option_text' => 'Other valid answers: Shareware, Subscription, Proprietary',
                    'is_correct' => true,
                ]);

                $pq37 = PracticeQuestion::create([
                    'practice_id' => $prac5->id,
                    'question_text' => "Why is using licensed software important?",
                    'type' => 'identification',
                ]);
                PracticeOption::create([
                    'practice_question_id' => $pq37->id,
                    'option_text' => 'It prevents piracy, ensures updates, and keeps the system safe from malware.',
                    'is_correct' => true,
                ]);

                // Multiple choice questions
                $pq38 = PracticeQuestion::create([
                    'practice_id' => $prac5->id,
                    'question_text' => "What does installing an application mean?",
                    'type' => 'multiple_choice',
                ]);
                PracticeOption::create([
                    'practice_question_id' => $pq38->id,
                    'option_text' => 'Deleting a program from the computer',
                    'is_correct' => false,
                ]);
                PracticeOption::create([
                    'practice_question_id' => $pq38->id,
                    'option_text' => 'Setting up software so it can be used by the user',
                    'is_correct' => true,
                ]);
                PracticeOption::create([
                    'practice_question_id' => $pq38->id,
                    'option_text' => 'Buying a new computer',
                    'is_correct' => false,
                ]);
                PracticeOption::create([
                    'practice_question_id' => $pq38->id,
                    'option_text' => 'Updating the operating system',
                    'is_correct' => false,
                ]);

                $pq39 = PracticeQuestion::create([
                    'practice_id' => $prac5->id,
                    'question_text' => "Which of the following is the first step in installing an application?",
                    'type' => 'multiple_choice',
                ]);
                PracticeOption::create([
                    'practice_question_id' => $pq39->id,
                    'option_text' => 'Restart the computer',
                    'is_correct' => false,
                ]);
                PracticeOption::create([
                    'practice_question_id' => $pq39->id,
                    'option_text' => 'Run the installer',
                    'is_correct' => false,
                ]);
                PracticeOption::create([
                    'practice_question_id' => $pq39->id,
                    'option_text' => 'Obtain the installer',
                    'is_correct' => true,
                ]);
                PracticeOption::create([
                    'practice_question_id' => $pq39->id,
                    'option_text' => 'Open the application',
                    'is_correct' => false,
                ]);

                $pq40 = PracticeQuestion::create([
                    'practice_id' => $prac5->id,
                    'question_text' => "A software license is important because it:",
                    'type' => 'multiple_choice',
                ]);
                PracticeOption::create([
                    'practice_question_id' => $pq40->id,
                    'option_text' => 'Allows illegal sharing of programs',
                    'is_correct' => false,
                ]);
                PracticeOption::create([
                    'practice_question_id' => $pq40->id,
                    'option_text' => 'Defines how software can be used legally',
                    'is_correct' => true,
                ]);
                PracticeOption::create([
                    'practice_question_id' => $pq40->id,
                    'option_text' => 'Makes software free for everyone',
                    'is_correct' => false,
                ]);
                PracticeOption::create([
                    'practice_question_id' => $pq40->id,
                    'option_text' => 'Slows down the computer',
                    'is_correct' => false,
                ]);

                $pq41 = PracticeQuestion::create([
                    'practice_id' => $prac5->id,
                    'question_text' => "Which type of software license allows users to use and modify the program for free?",
                    'type' => 'multiple_choice',
                ]);
                PracticeOption::create([
                    'practice_question_id' => $pq41->id,
                    'option_text' => 'Proprietary',
                    'is_correct' => false,
                ]);
                PracticeOption::create([
                    'practice_question_id' => $pq41->id,
                    'option_text' => 'Open-Source',
                    'is_correct' => true,
                ]);
                PracticeOption::create([
                    'practice_question_id' => $pq41->id,
                    'option_text' => 'Shareware',
                    'is_correct' => false,
                ]);
                PracticeOption::create([
                    'practice_question_id' => $pq41->id,
                    'option_text' => 'Subscription-Based',
                    'is_correct' => false,
                ]);

                $pq42 = PracticeQuestion::create([
                    'practice_id' => $prac5->id,
                    'question_text' => "Why is proper licensing important?",
                    'type' => 'multiple_choice',
                ]);
                PracticeOption::create([
                    'practice_question_id' => $pq42->id,
                    'option_text' => 'It increases internet speed',
                    'is_correct' => false,
                ]);
                PracticeOption::create([
                    'practice_question_id' => $pq42->id,
                    'option_text' => 'It helps avoid piracy and ensures legal use',
                    'is_correct' => true,
                ]);
                PracticeOption::create([
                    'practice_question_id' => $pq42->id,
                    'option_text' => 'It makes software installation faster',
                    'is_correct' => false,
                ]);
                PracticeOption::create([
                    'practice_question_id' => $pq42->id,
                    'option_text' => 'It removes all advertisements',
                    'is_correct' => false,
                ]);

                // Quiz template
                // Lesson 5 Quiz
                $quiz5 = Quiz::create([
                    'module_id' => $mod5->id,
                    'title' => 'Lesson 5 Quiz',
                ]);

                // Multiple Choice Questions
                $q21 = Question::create([
                    'quiz_id' => $quiz5->id,
                    'question_text' => "What is the first step in installing an application?",
                    'type' => 'multiple_choice',
                ]);
                QuizOption::create(['question_id' => $q21->id, 'option_text' => 'Run the installer', 'is_correct' => false]);
                QuizOption::create(['question_id' => $q21->id, 'option_text' => 'Get the installer', 'is_correct' => true]);
                QuizOption::create(['question_id' => $q21->id, 'option_text' => 'Restart PC', 'is_correct' => false]);
                QuizOption::create(['question_id' => $q21->id, 'option_text' => 'Delete files', 'is_correct' => false]);

                $q22 = Question::create([
                    'quiz_id' => $quiz5->id,
                    'question_text' => "Which file extension usually starts installation?",
                    'type' => 'multiple_choice',
                ]);
                QuizOption::create(['question_id' => $q22->id, 'option_text' => '.exe', 'is_correct' => true]);
                QuizOption::create(['question_id' => $q22->id, 'option_text' => '.docx', 'is_correct' => false]);
                QuizOption::create(['question_id' => $q22->id, 'option_text' => '.jpg', 'is_correct' => false]);
                QuizOption::create(['question_id' => $q22->id, 'option_text' => '.zip', 'is_correct' => false]);

                $q23 = Question::create([
                    'quiz_id' => $quiz5->id,
                    'question_text' => "What type of software is free but cannot be edited?",
                    'type' => 'multiple_choice',
                ]);
                QuizOption::create(['question_id' => $q23->id, 'option_text' => 'Open source', 'is_correct' => false]);
                QuizOption::create(['question_id' => $q23->id, 'option_text' => 'Freeware', 'is_correct' => true]);
                QuizOption::create(['question_id' => $q23->id, 'option_text' => 'Shareware', 'is_correct' => false]);
                QuizOption::create(['question_id' => $q23->id, 'option_text' => 'Subscription', 'is_correct' => false]);

                $q24 = Question::create([
                    'quiz_id' => $quiz5->id,
                    'question_text' => "Which license allows modification and sharing?",
                    'type' => 'multiple_choice',
                ]);
                QuizOption::create(['question_id' => $q24->id, 'option_text' => 'Freeware', 'is_correct' => false]);
                QuizOption::create(['question_id' => $q24->id, 'option_text' => 'Open source', 'is_correct' => true]);
                QuizOption::create(['question_id' => $q24->id, 'option_text' => 'Commercial', 'is_correct' => false]);
                QuizOption::create(['question_id' => $q24->id, 'option_text' => 'Subscription', 'is_correct' => false]);

                $q25 = Question::create([
                    'quiz_id' => $quiz5->id,
                    'question_text' => "What is shareware?",
                    'type' => 'multiple_choice',
                ]);
                QuizOption::create(['question_id' => $q25->id, 'option_text' => 'Free with time limits', 'is_correct' => true]);
                QuizOption::create(['question_id' => $q25->id, 'option_text' => 'Paid only', 'is_correct' => false]);
                QuizOption::create(['question_id' => $q25->id, 'option_text' => 'Pirated', 'is_correct' => false]);
                QuizOption::create(['question_id' => $q25->id, 'option_text' => 'Trial with no expiration', 'is_correct' => false]);

    
    }
}

