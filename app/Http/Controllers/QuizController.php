<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizAttempt;
use App\Models\Quiz;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class QuizController extends Controller
{
    public function submit(Request $request, $quizId)
    {
        // Get quiz and its questions
        $quiz = Quiz::with('questions.options', 'module')->findOrFail($quizId);
        $user = Auth::user();


        $alreadyPassed = $user->quizAttempts()
            ->where('quiz_id', $quiz->id)
            ->where('score', '>=', 0)
            ->exists();

        // Get user answers
        $answers = $request->input('answers');
        $score = 0;
        $totalPoints = 0;

        // Calculate score
        foreach ($quiz->questions as $question) {
            $totalPoints += $question->points;

            if (!isset($answers[$question->id])) continue;

            $userAnswer = $answers[$question->id];

            // Multiple Choice
            if ($question->type == 'multiple_choice') {
                $correctOption = $question->options->where('is_correct', true)->first();
                if ($correctOption && $correctOption->id == $userAnswer) {
                    $score += $question->points;
                }
            }
            // Identification
            else if ($question->type == 'identification') {
                $correctOption = $question->options->where('is_correct', true)->first();
                if ($correctOption && strcasecmp(trim($userAnswer), trim($correctOption->option_text)) === 0) {
                    $score += $question->points;
                }
            }
        }

        $percentage = ($totalPoints > 0) ? ($score / $totalPoints) * 100 : 0;
        $isPassed = $percentage >= 60;

        // Save quiz attempt
        QuizAttempt::create([
            'user_id' => Auth::id(),
            'quiz_id' => $quiz->id,
            'score' => $score,
            'completed_at' => now(),
        ]);

        // Only check for Course Completion/Achievements if they PASSED (>= 65%)
        if (!$alreadyPassed && $isPassed) {

            if ($user->hasCompletedCourse($quiz->module->course_id)) {
                $user->stat()->increment("Achievements");
                session()->flash('achievement', '🏆 Course Completed! You earned an Achievement.');
            }
        }

        $userStat = Auth::user()->stat;
        if ($userStat) {
            $today = Carbon::now()->startOfDay();
            $lastDate = $userStat->last_quiz_date ? $userStat->last_quiz_date->startOfDay() : null;

            if (!$alreadyPassed && $isPassed) {
                $userStat->increment('Quizzes');
            }

            if ($lastDate) {
                if ($lastDate->equalTo($today)) {
                    // Do nothing
                } elseif ($lastDate->equalTo($today->copy()->subDay())) {
                    $userStat->increment('Daily_Streak');
                } else {
                    $userStat->Daily_Streak = 1;
                }
            } else {
                $userStat->Daily_Streak = 1;
            }

            $userStat->last_quiz_date = $today;
            $userStat->save();
        }

        return redirect()->route('quizzes.result', [
            'quiz' => $quiz->id,
            'score' => $score,
            'total' => $totalPoints,
            'passed' => $isPassed ? 1 : 0
        ])->with('userAnswers', $answers);
    }

    public function result(Request $request, $quizId)
    {
        $quiz = Quiz::findOrFail($quizId);
        $score = $request->query('score');
        $total = $request->query('total');
        $passed = $request->query('passed');

        $userAnswers = session('userAnswers', []);

        return view('php.Quiz_result', compact('quiz', 'score', 'total', 'userAnswers', 'passed'));
    }
}
