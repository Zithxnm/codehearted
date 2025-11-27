<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function show(Request $request, $courseId, $moduleId)
    {
        $section = $request->query('section', 'review');

        $module = Module::with(['course', 'review', 'practice', 'quiz.questions.options'])
            ->where('course_id', $courseId)
            ->findOrFail($moduleId);

        // --- 1. Map Course Title to Folder Name ---
        $courseFolders = [
            'Differential Calculus' => 'diffcalc',
            'Digital Logic' => 'digilogic',
            'Fundamentals of Computing' => 'compfund',
            'Programming Fundamentals' => 'progfund',
        ];

        $folder = $courseFolders[$module->course->title] ?? 'default';

        // --- 2. Build the Dynamic CSS Path ---
        // Structure: resources/css/modules/{course}/mod{N}/{section}{N}.css
        // Example: resources/css/modules/compfund/mod1/practice1.css
        $cssPath = "resources/css/modules/{$folder}/mod{$module->order}/{$section}{$module->order}.css";

        // --- 3. Determine Content ---
        $content = null;
        $quiz = null;

        switch ($section) {
            case 'practice':
                $content = $module->practice->content ?? '<p>No practice content.</p>';
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
        return view('php.Module_Show', compact('module', 'section', 'content', 'quiz', 'cssPath'));
    }
}
