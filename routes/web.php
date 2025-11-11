<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('php.Landing_Page');
})->name('home');

Route::get('/login', function () {
    return view('php.Login');
})->name('login');

Route::get('/register', function () {
    return view('php.Register');
})->name('register');

Route::get('/login-signup', function () {
    return view('php.Login_Signup');
})->name('login.signup');

//Authenticated User Pages
Route::get('/dashboard', function () {
    return view('php.Dashboard');
})->name('dashboard');

Route::get('/profile', function () {
    return view('php.Profile');
})->name('profile');

Route::get('/courses', function () {
    return view('php.Courses');
})->name('courses');

Route::get('/admin', function () {
    return view('php.Admin');
})->name('admin');

//Course Main Pagess

Route::get('/courses/differential-calculus', function () {
    return view('php.DiffCall');
})->name('courses.diffcalc');

Route::get('/courses/digital-logic', function () {
    return view('php.DigiLogic');
})->name('courses.digilogic');

Route::get('/courses/computer-fundamentals', function () {
    return view('php.CompFund');
})->name('courses.compfund');

Route::get('/courses/programming-fundamentals', function () {
    return view('php.ProgFund');
})->name('courses.progfund');


//Course Module Rouutes

// Differential Calculus Modules
Route::prefix('courses/diff-calc')->name('diffcalc.')->group(function () {
    // Module 1
    Route::get('module1/practice', function () { return view('php.DifferentialCalculus.module1_functions_and_graphs.practice'); })->name('mod1.practice');
    Route::get('module1/quiz', function () { return view('php.DifferentialCalculus.module1_functions_and_graphs.quiz'); })->name('mod1.quiz');
    Route::get('module1/review', function () { return view('php.DifferentialCalculus.module1_functions_and_graphs.review'); })->name('mod1.review');

    // Module 2
    Route::get('module2/practice', function () { return view('php.DifferentialCalculus.module2_basic_differentiation_rules.practice'); })->name('mod2.practice');
    Route::get('module2/quiz', function () { return view('php.DifferentialCalculus.module2_basic_differentiation_rules.quiz'); })->name('mod2.quiz');
    Route::get('module2/review', function () { return view('php.DifferentialCalculus.module2_basic_differentiation_rules.review'); })->name('mod2.review');

    // Module 3
    Route::get('module3/practice', function () { return view('php.DifferentialCalculus.module3_limits_and_continuity.practice'); })->name('mod3.practice');
    Route::get('module3/quiz', function () { return view('php.DifferentialCalculus.module3_limits_and_continuity.quiz'); })->name('mod3.quiz');
    Route::get('module3/review', function () { return view('php.DifferentialCalculus.module3_limits_and_continuity.review'); })->name('mod3.review');

    // Module 4
    Route::get('module4/practice', function () { return view('php.DifferentialCalculus.module4_applications_of_derivatives.practice'); })->name('mod4.practice');
    Route::get('module4/quiz', function () { return view('php.DifferentialCalculus.module4_applications_of_derivatives.quiz'); })->name('mod4.quiz');
    Route::get('module4/review', function () { return view('php.DifferentialCalculus.module4_applications_of_derivatives.review'); })->name('mod4.review');

    // Module 5
    Route::get('module5/practice', function () { return view('php.DifferentialCalculus.module5_order_of_rotation.practice'); })->name('mod5.practice');
    Route::get('module5/quiz', function () { return view('php.DifferentialCalculus.module5_order_of_rotation.quiz'); })->name('mod5.quiz');
    Route::get('module5/review', function () { return view('php.DifferentialCalculus.module5_order_of_rotation.review'); })->name('mod5.review');

    // Module 6
    Route::get('module6/practice', function () { return view('php.DifferentialCalculus.module6_the_nature_of_mathematics.practice'); })->name('mod6.practice');
    Route::get('module6/quiz', function () { return view('php.DifferentialCalculus.module6_the_nature_of_mathematics.quiz'); })->name('mod6.quiz');
    Route::get('module6/review', function () { return view('php.DifferentialCalculus.module6_the_nature_of_mathematics.review'); })->name('mod6.review');

    // Module 7
    Route::get('module7/practice', function () { return view('php.DifferentialCalculus.module7_the_fibonacci_sequence.practice'); })->name('mod7.practice');
    Route::get('module7/quiz', function () { return view('php.DifferentialCalculus.module7_the_fibonacci_sequence.quiz'); })->name('mod7.quiz');
    Route::get('module7/review', function () { return view('php.DifferentialCalculus.module7_the_fibonacci_sequence.review'); })->name('mod7.review');
});

// Digital Logic Modules
Route::prefix('courses/digi-logic')->name('digilogic.')->group(function () {
    // Module 1
    Route::get('module1/practice', function () { return view('php.DigitalLogic.module1_Truth_Table.practice'); })->name('mod1.practice');
    Route::get('module1/quiz', function () { return view('php.DigitalLogic.module1_Truth_Table.quiz'); })->name('mod1.quiz');
    Route::get('module1/review', function () { return view('php.DigitalLogic.module1_Truth_Table.review'); })->name('mod1.review');

    // Module 2
    Route::get('module2/practice', function () { return view('php.DigitalLogic.module2_Arithmetic_Sequence.practice'); })->name('mod2.practice');
    Route::get('module2/quiz', function () { return view('php.DigitalLogic.module2_Arithmetic_Sequence.quiz'); })->name('mod2.quiz');
    Route::get('module2/review', function () { return view('php.DigitalLogic.module2_Arithmetic_Sequence.review'); })->name('mod2.review');

    // Module 3
    Route::get('module3/practice', function () { return view('php.DigitalLogic.module3_Geometric_Sequences.practice'); })->name('mod3.practice');
    Route::get('module3/quiz', function () { return view('php.DigitalLogic.module3_Geometric_Sequences.quiz'); })->name('mod3.quiz');
    Route::get('module3/review', function () { return view('php.DigitalLogic.module3_Geometric_Sequences.review'); })->name('mod3.review');

    // Module 4
    Route::get('module4/practice', function () { return view('php.DigitalLogic.module4_Binary_Number_System.practice'); })->name('mod4.practice');
    Route::get('module4/quiz', function () { return view('php.DigitalLogic.module4_Binary_Number_System.quiz'); })->name('mod4.quiz');
    Route::get('module4/review', function () { return view('php.DigitalLogic.module4_Binary_Number_System.review'); })->name('mod4.review');

    // Module 5
    Route::get('module5/practice', function () { return view('php.DigitalLogic.module5_Octal_Number_System.practice'); })->name('mod5.practice');
    Route::get('module5/quiz', function () { return view('php.DigitalLogic.module5_Octal_Number_System.quiz'); })->name('mod5.quiz');
    Route::get('module5/review', function () { return view('php.DigitalLogic.module5_Octal_Number_System.review'); })->name('mod5.review');
});

//Fundamentals of Computing Modules
Route::prefix('courses/comp-fund')->name('compfund.')->group(function () {
    // Module 1
    Route::get('module1/practice', function () { return view('php.FundamentalsOfComputing.module1_CCS_OHS_Policies_&_Tools.practice'); })->name('mod1.practice');
    Route::get('module1/quiz', function () { return view('php.FundamentalsOfComputing.module1_CCS_OHS_Policies_&_Tools.quiz'); })->name('mod1.quiz');
    Route::get('module1/review', function () { return view('php.FundamentalsOfComputing.module1_CCS_OHS_Policies_&_Tools.review'); })->name('mod1.review');

    // Module 2
    Route::get('module2/practice', function () { return view('php.FundamentalsOfComputing.module2_Hardware_Assembly.practice'); })->name('mod2.practice');
    Route::get('module2/quiz', function () { return view('php.FundamentalsOfComputing.module2_Hardware_Assembly.quiz'); })->name('mod2.quiz');
    Route::get('module2/review', function () { return view('php.FundamentalsOfComputing.module2_Hardware_Assembly.review'); })->name('mod2.review');

    // Module 3
    Route::get('module3/practice', function () { return view('php.FundamentalsOfComputing.module3_BIOS_UEFI_&_Bootable_Media.practice'); })->name('mod3.practice');
    Route::get('module3/quiz', function () { return view('php.FundamentalsOfComputing.module3_BIOS_UEFI_&_Bootable_Media.quiz'); })->name('mod3.quiz');
    Route::get('module3/review', function () { return view('php.FundamentalsOfComputing.module3_BIOS_UEFI_&_Bootable_Media.review'); })->name('mod3.review');

    // Module 4
    Route::get('module4/practice', function () { return view('php.FundamentalsOfComputing.module4_Installing_OS_&_Drivers.practice'); })->name('mod4.practice');
    Route::get('module4/quiz', function () { return view('php.FundamentalsOfComputing.module4_Installing_OS_&_Drivers.quiz'); })->name('mod4.quiz');
    Route::get('module4/review', function () { return view('php.FundamentalsOfComputing.module4_Installing_OS_&_Drivers.review'); })->name('mod4.review');

    // Module 5
    Route::get('module5/practice', function () { return view('php.FundamentalsOfComputing.module5_Installing_Applications_&_Licensing.practice'); })->name('mod5.practice');
    Route::get('module5/quiz', function () { return view('php.FundamentalsOfComputing.module5_Installing_Applications_&_Licensing.quiz'); })->name('mod5.quiz');
    Route::get('module5/review', function () { return view('php.FundamentalsOfComputing.module5_Installing_Applications_&_Licensing.review'); })->name('mod5.review');
});


//Programming Fundamentals Modules

Route::prefix('courses/prog-fund')->name('progfund.')->group(function () {
    // Module 1
    Route::get('module1/practice', function () { return view('php.ProgrammingFundamentals.module1_introduction_to_programming_and_basic_terminology.practice'); })->name('mod1.practice');
    Route::get('module1/quiz', function () { return view('php.ProgrammingFundamentals.module1_introduction_to_programming_and_basic_terminology.quiz'); })->name('mod1.quiz');
    Route::get('module1/review', function () { return view('php.ProgrammingFundamentals.module1_introduction_to_programming_and_basic_terminology.review'); })->name('mod1.review');

    // Module 2
    Route::get('module2/practice', function () { return view('php.ProgrammingFundamentals.module2_variables_data_types_and_memory_concepts.practice'); })->name('mod2.practice');
    Route::get('module2/quiz', function () { return view('php.ProgrammingFundamentals.module2_variables_data_types_and_memory_concepts.quiz'); })->name('mod2.quiz');
    Route::get('module2/review', function () { return view('php.ProgrammingFundamentals.module2_variables_data_types_and_memory_concepts.review'); })->name('mod2.review');

    // Module 3
    Route::get('module3/practice', function () { return view('php.ProgrammingFundamentals.module3_input_output_and_user_interaction.practice'); })->name('mod3.practice');
    Route::get('module3/quiz', function () { return view('php.ProgrammingFundamentals.module3_input_output_and_user_interaction.quiz'); })->name('mod3.quiz');
    Route::get('module3/review', function () { return view('php.ProgrammingFundamentals.module3_input_output_and_user_interaction.review'); })->name('mod3.review');

    // Module 4
    Route::get('module4/practice', function () { return view('php.ProgrammingFundamentals.module4_decision_making_with_conditionals.practice'); })->name('mod4.practice');
    Route::get('module4/quiz', function () { return view('php.ProgrammingFundamentals.module4_decision_making_with_conditionals.quiz'); })->name('mod4.quiz');
    Route::get('module4/review', function () { return view('php.ProgrammingFundamentals.module4_decision_making_with_conditionals.review'); })->name('mod4.review');

    // Module 5
    Route::get('module5/practice', function () { return view('php.ProgrammingFundamentals.module5_loops_and_iterations.practice'); })->name('mod5.practice');
    Route::get('module5/quiz', function () { return view('php.ProgrammingFundamentals.module5_loops_and_iterations.quiz'); })->name('mod5.quiz');
    Route::get('module5/review', function () { return view('php.ProgrammingFundamentals.module5_loops_and_iterations.review'); })->name('mod5.review');
});
