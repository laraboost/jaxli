<?php

namespace App\Http\Controllers;

use App\FeatureRequest;
use Illuminate\Support\Facades\Auth;

class VotingController extends Controller
{
    public function update(FeatureRequest $featureRequest)
    {
        Auth::user()->toggleVote($featureRequest);

        return $featureRequest->fresh()->load('votes');
    }
}
