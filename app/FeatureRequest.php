<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeatureRequest extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
