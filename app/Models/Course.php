<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image_path',
        'icon_path',
        'objectives',
        ];

    protected $casts = [
        'objectives' => 'array',
    ];
    public function modules() { return $this->hasMany(Module::class)->orderBy('order'); }

    public function users()
    {
        return $this->belongsToMany(User::class, 'course_enrollments', 'course_id', 'user_id');
    }
}


