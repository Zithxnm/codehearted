<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $primaryKey = 'Subject_id';
    protected $fillable = ['Subject_name'];

    public function participantSubjects()
    {
        return $this->hasMany(ParticipantSubject::class, 'Subject_ID', 'Subject_id');
    }
}
