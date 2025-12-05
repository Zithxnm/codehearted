<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function show(Request $request, $courseId, $moduleId)
    {
        $section = $request->query('section', 'review');

        $module = Module::with(['course', 'review', 'practice.questions.options', 'quiz.questions.options'])
            ->where('course_id', $courseId)
            ->findOrFail($moduleId);

        // Map Course Title to Folder Name
        $courseFolders = [
            'Differential Calculus' => 'diffcalc',
            'Digital Logic' => 'digilogic',
            'Fundamentals of Computing' => 'compfund',
            'Programming Fundamentals' => 'progfund',
        ];

        $folder = $courseFolders[$module->course->title] ?? 'default';

        $cssPath = "resources/css/modules/{$folder}/mod{$module->order}/{$section}{$module->order}.css";

        // Determine Content
        $content = null;
        $quiz = null;
        $practices = $module->practice;
        switch ($section) {
            case 'practice':
                break;
            case 'quiz':
                $quiz = $module->quiz;
                break;
            case 'review':
            default:
                $content = $module->review->content ?? '<p>No review content.</p>';
                break;
        }

        // Pass $cssPath to the view
        return view('php.Module_Show', compact('module', 'section', 'content', 'practices', 'quiz', 'cssPath'));
    }
}
