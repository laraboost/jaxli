<?php

namespace App\Http\Controllers;

use App\FeatureRequest;

class FeatureRequestController extends Controller
{
    public function index()
    {
        $featureRequests = FeatureRequest::all();
        return view('home')->with('featureRequests', $featureRequests);
    }
}
