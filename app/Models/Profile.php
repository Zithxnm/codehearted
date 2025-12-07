<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $primaryKey = 'Profile_ID';

    protected $fillable = [
        'user_id',
        'Display_Name',
        'Title',
        'Avatar',
        'Banner',
        'Theme',
        'Join_Date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
