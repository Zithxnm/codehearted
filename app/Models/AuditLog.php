<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuditLog extends Model
{
    // 1. Define Custom Primary Key
    protected $primaryKey = 'Log_ID';

    // 2. Allow Mass Assignment
    protected $fillable = [
        'Admin_ID',
        'Action',
    ];

    // 3. Relationship: A log belongs to one Admin (User)
    public function admin()
    {
        return $this->belongsTo(User::class, 'Admin_ID');
    }
}
