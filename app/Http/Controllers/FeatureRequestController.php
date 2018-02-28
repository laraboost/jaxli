<?php

namespace App\Http\Controllers;

use App\FeatureRequest;
use Illuminate\Support\Facades\Auth;

class FeatureRequestController extends Controller
{
    public function index()
    {
        return FeatureRequest::with(['user', 'votes'])->paginate(10);
    }

    public function store()
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        return FeatureRequest::create([
            'title' => request()->title,
            'body' => request()->body,
            'user_id' => Auth::user()->id
        ]);
    }
}
