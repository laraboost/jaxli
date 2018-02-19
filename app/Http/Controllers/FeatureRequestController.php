<?php

namespace App\Http\Controllers;

use App\FeatureRequest;

class FeatureRequestController extends Controller
{
    public function index()
    {
        return FeatureRequest::all();
    }
}
