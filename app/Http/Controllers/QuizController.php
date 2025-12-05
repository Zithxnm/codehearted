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

        // get quiz and its questions
        $quiz =  Quiz::with('questions.options', 'module')->findOrFail($quizId);
        $user = Auth::user();

        $alreadyPassed = $user->quizAttempts()
            ->where('quiz_id', $quiz->id)
            ->where('score', '>=', 0)
            ->exists();

        // get user answers
        $answers = $request->input('answers');
        $score = 0;
        $totalPoints = 0;

        //calculate score
        foreach ($quiz->questions as $question) {
            $totalPoints += $question->points;

            if (!isset($answers[$question->id])) continue;

            $userAnswer = $answers[$question->id];

            if($question->type == 'multiple_choice') {
                $correctOption = $question->options->where('is_correct', true)->first();
                if ($correctOption && $correctOption->id == $userAnswer) {
                    $score += $question->points;
                }
            }
            else if($question->type == 'identification') {
                $correctOption = $question->options->where('is_correct', true)->first();
                if ($correctOption && strcasecmp(trim($userAnswer), trim($correctOption->option_text)) === 0) {
                    $score += $question->points;
                }
            }
        }

        //Save quiz attempt
        QuizAttempt::create([
            'user_id' => Auth::id(),
            'quiz_id' => $quiz->id,
            'score' => $score,
            'completed_at' => now(),
        ]);

        if(! $alreadyPassed &&  $score >= 0){

            if ($user->hasCompletedCourse($quiz->module->course_id)) {

                $user->stat()->increment("Achievements");

                session()->flash('achievement', '🏆 Course Completed! You earned an Achievement.');
            }
        }



        $userStat = Auth::user()->stat;
        if ($userStat) {
            $today = Carbon::now()->startOfDay();
            $lastDate = $userStat->last_quiz_date ? $userStat->last_quiz_date->startOfDay() : null;


            if (! $alreadyPassed) {
                $userStat->increment('Quizzes');
            }

            if ($lastDate) {
                if ($lastDate->equalTo($today)) {
                    //Do nothing
                } elseif ($lastDate->equalTo($today->copy()->subDay())) {
                    //add streak
                    $userStat->increment('Daily_Streak');
                } else {
                    //reset streak to 1
                    $userStat->Daily_Streak = 1;
                }
            } else {
                //record first quiz streak
                $userStat->Daily_Streak = 1;
            }

            $userStat->last_quiz_date = $today;
            $userStat->save();
        }

        return redirect()->route('quizzes.result', [
            'quiz' => $quiz->id,
            'score' => $score,
            'total' => $totalPoints
        ])->with('userAnswers', $answers);
    }

    public function result(Request $request, $quizId)
    {
        $quiz =  Quiz::findOrFail($quizId);
        $score = $request->query('score');
        $total = $request->query('total');

        $userAnswers = session('userAnswers', []);

        return view('php.Quiz_result', compact('quiz', 'score', 'total', 'userAnswers'));
    }
}
