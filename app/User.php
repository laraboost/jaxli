<?php

namespace App;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasSlug, Notifiable;

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
        return $this->belongsToMany(FeatureRequest::class, 'votes', 'user_id', 'feature_request_id');
    }

    public function getSlugOptions()
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function toggleVote(FeatureRequest $featureRequest)
    {
        $this->votedFeatureRequests()->toggle([$featureRequest->id]);

        return $this;
    }
}
