<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    // 1. Define Custom Primary Key
    protected $primaryKey = 'Profile_ID';

    // 2. Allow Mass Assignment (for creating profiles easily)
    protected $fillable = [
        'user_id',
        'Display_Name',
        'Title',
        'Avatar',
        'Banner',
        'Theme',
        'Join_Date',
    ];

    // 3. Define Relationship (Inverse)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
