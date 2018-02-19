@extends('layouts.app')

@section('content')
    <div class="flex items-center">
        <div class="md:w-1/2 md:mx-auto">
            @foreach($featureRequests as $fr)
                <div class="rounded shadow mb-4">
                    <div class="font-medium text-lg text-brand-darker bg-brand-lighter p-3 rounded-t">
                        {{$fr->title}}
                    </div>
                    <div class="bg-white p-3 rounded-b">
                        {{$fr->body}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
