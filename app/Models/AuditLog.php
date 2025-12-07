<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuditLog extends Model
{
    protected $primaryKey = 'Log_ID';

    protected $fillable = [
        'Admin_ID',
        'Action',
    ];

    public function admin()
    {
        return $this->belongsTo(User::class, 'Admin_ID');
    }
}
