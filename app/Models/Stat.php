<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    use HasFactory;

    protected $primaryKey = 'Stats_ID';

    protected $fillable = [
        'user_id',
        'Achievements',
        'Quizzes',
        'Course_Badge',
        'Daily_Streak',
        'last_quiz_date',
    ];

    protected $casts = [
        'last_quiz_date' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
