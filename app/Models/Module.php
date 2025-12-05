<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = ['course_id', 'title', 'order'];
    public function course() { return $this->belongsTo(Course::class); }
    public function review() { return $this->hasOne(Review::class); }
    public function practice() { return $this->hasMany(Practice::class); }
    public function quiz() { return $this->hasOne(Quiz::class); }
}
