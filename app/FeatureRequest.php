<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeatureRequest extends Model
{
    protected $guarded = ['id'];
    protected $with = ['user', 'votes'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    public function votedUsers()
    {
        return $this->belongsToMany(User::class, 'votes', 'feature_request_id', 'user_id');
    }
}
