<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParticipantSubject extends Model
{
    protected $fillable = ['user_id', 'Subject_ID', 'Case_Type'];
}
