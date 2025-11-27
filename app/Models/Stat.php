<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    use HasFactory;

    // 1. Custom Primary Key
    protected $primaryKey = 'Stats_ID';

    // 2. Allow Mass Assignment
    protected $fillable = [
        'user_id',
        'Achievements',
        'Quizzes',
        'Course_Badge',
        'Daily_Streak',
    ];

    // 3. Relationship back to User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
