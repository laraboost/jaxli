<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    public function featureRequest()
    {
        return $this->belongsTo(FeatureRequest::class);
    }
}
