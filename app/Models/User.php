<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'role',
        'bio',
        'profile_picture_path',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function profile()
    {
        return $this->hasOne(Profile::class, 'user_id');
    }


    public function stat()
    {
        return $this->hasOne(Stat::class, 'user_id');
    }


//  Get all posts made by this user
    public function posts()
    {
        return $this->hasMany(Community::class, 'user_id');
    }

//  Get all subjects this user is enrolled in
    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'participant_subjects', 'user_id', 'Subject_ID')
            ->withPivot('Case_Type')
            ->withTimestamps();
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_enrollments', 'user_id', 'course_id')
            ->withTimestamps();
    }

    public function dashboardLogs()
    {
        return $this->hasMany(Dashboard::class, 'Admin_ID');
    }

    public function auditLogs()
    {
        return $this->hasMany(AuditLog::class, 'Admin_ID');
    }

    public function quizAttempts()
    {
        return $this->hasMany(QuizAttempt::class);
    }

    public function hasCompletedModule($moduleId)
    {
        $quiz = Quiz::with('questions')->where('module_id', $moduleId)->first();

        if (!$quiz) {
            return false;
        }

        $totalPoints = $quiz->questions->sum('points');

        if ($totalPoints == 0) return false;

        $bestScore = $this->quizAttempts()
            ->where('quiz_id', $quiz->id)
            ->max('score');

        if (is_null($bestScore)) {
            return false;
        }

        $percentage = ($bestScore / $totalPoints) * 100;

        return $percentage >= 65;
    }

    public function hasCompletedCourse($courseId)
    {
        $moduleIds = Module::where('course_id', $courseId)->pluck('id');

        foreach ($moduleIds as $id) {
            if (! $this->hasCompletedModule($id)) {
                return false;
            }
        }

        return true;
    }

    public function isAdmin()
    {
        return $this->role === 'admin';
    }
}
