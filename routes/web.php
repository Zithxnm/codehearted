<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('php.Landing_Page');
})->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('show.login');
    Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('show.register');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/register', [RegisterController::class, 'register'])->name('register');

    Route::get('/login-signup', function () {
        return view('php.Login_Signup');
    })->name('login.signup');

});


//Authenticated User Pages

Route::get('/admin', [AdminController::class, 'index'])
    ->middleware(['auth', 'admin'])
    ->name('admin.index');

Route::middleware('auth')->group(function () {

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'show'])
        ->name('profile');

    Route::get('/courses', function () {
        return view('php.Courses');
    })->name('courses');

    //Course Main Pagess


    // The Main List
    Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');

// The Individual Course Pages (Dynamic ID)
    Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');

    Route::get('/courses/{course}/modules/{module}', [ModuleController::class, 'show'])
        ->name('modules.show')
        ->middleware(['auth', 'module.access']);




});

Route::get('/about', function () {
    return view('php.About');
})->name('about');


Route::get('/community', function () {
    return view('php.Community');
})->name('show.community');

Route::post('/quizzes/{quiz}/submit', [QuizController::class, 'submit'])
    ->name('quizzes.submit')
    ->middleware('auth');

// Show Result
Route::get('/quizzes/{quiz}/result', [QuizController::class, 'result'])
    ->name('quizzes.result')
    ->middleware('auth');

Route::get('/debug-progress', function () {
    $user = Illuminate\Support\Facades\Auth::user();
    // Replace '1' with the ID of the module you just finished
    $moduleId = 1;

    $result = $user->hasCompletedModule($moduleId);

    dd([
        'User ID' => $user->id,
        'Checking Module ID' => $moduleId,
        'Has Completed?' => $result ? 'YES' : 'NO',
        'Quiz Attempts Count' => $user->quizAttempts()->count(),
        'All Attempts' => $user->quizAttempts()->get()->toArray()
    ]);
});
