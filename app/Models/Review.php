<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['module_id', 'title', 'content'];
    public function module() { return $this->belongsTo(Module::class); }
}
