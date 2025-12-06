<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    protected $primaryKey = 'Community_ID';

    protected $fillable = ['user_id', 'Parent_ID', 'Title', 'Content', 'Category', 'Likes'];

    // Relationship: A post belongs to a User (Participant)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship: A post creates a thread of replies
    public function replies()
    {
        return $this->hasMany(Community::class, 'Parent_ID', 'Community_ID');
    }

    public function likedByUsers()
    {
        return $this->belongsToMany(User::class, 'community_likes', 'community_id', 'user_id');
    }

    public function isLikedByAuthUser()
    {
        return $this->likedByUsers()->where('user_id', auth()->id())->exists();
    }
}
