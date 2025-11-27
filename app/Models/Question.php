<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['quiz_id', 'question_text', 'type', 'points'];
    public function options() { return $this->hasMany(QuizOption::class); }
}
