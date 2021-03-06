<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function getProfileImage():string
    {
        $imagePath = ($this->image) ? $this->image : 'profile/noImageAvailable.png';
        return '/storage/' .  $imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
