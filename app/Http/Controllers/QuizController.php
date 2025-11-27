<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizAttempt;
use App\Models\Quiz;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    public function submit(Request $request, $quizId)
    {

        // get quiz and its questions
        $quiz =  Quiz::with('questions.options')->findOrFail($quizId);

        // get user answers
        $answers = $request->input('answers');
        $score = 0;
        $totalPoints = 0;

        //calculate score
        foreach ($quiz->questions as $question) {
            $totalPoints += $question->points;

            // skips if user didnt answer the question
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

        return redirect()->route('quizzes.result', ['quiz' => $quiz->id, 'score' => $score, 'total' => $totalPoints]);
    }

    public function result(Request $request, $quizId)
    {
        $quiz =  Quiz::findOrFail($quizId);
        $score = $request->query('score');
        $total = $request->query('total');

        return view('php.Quiz_result', compact('quiz', 'score', 'total'));
    }
}
