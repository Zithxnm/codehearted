<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PracticeQuestion;

class Practice extends Model
{
    protected $fillable = ['module_id', 'title', 'content'];

    public function module() {
        return $this->belongsTo(Module::class);
    }

    public function questions() {
        return $this->hasMany(PracticeQuestion::class);
    }
}
