<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function featureRequests()
    {
        return $this->hasMany(FeatureRequest::class);
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    public function votedFeatureRequests()
    {
        return $this->hasManyThrough(FeatureRequest::class, Vote::class, 'user_id', 'id');
    }
}
