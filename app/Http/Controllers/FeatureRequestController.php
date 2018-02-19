<?php

namespace App\Http\Controllers;

use App\FeatureRequest;
use Illuminate\Support\Facades\Auth;

class FeatureRequestController extends Controller
{
    public function index()
    {
        return FeatureRequest::with('user')->get();
    }

    public function store()
    {
        return FeatureRequest::create([
            'title' => request()->title,
            'body' => request()->body,
            'user_id' => Auth::user()->id
        ]);
    }
}
