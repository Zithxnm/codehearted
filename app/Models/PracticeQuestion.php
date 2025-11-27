<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PracticeQuestion;

class PracticeQuestion extends Model
{
    protected $fillable = ['practice_id', 'question_text', 'type'];

    public function practice()
    {
        return $this->belongsTo(Practice::class);
    }

    public function options() {
        return $this->hasMany(PracticeOption::class);
    }
}
