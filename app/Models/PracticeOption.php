<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PracticeOption extends Model
{
    protected $fillable = ['practice_question_id', 'option_text', 'is_correct'];
}
