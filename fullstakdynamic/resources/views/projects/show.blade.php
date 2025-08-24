@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                @if($project->image)
                    <img src="{{ asset('storage/' . $project->image) }}" class="card-img-top" alt="{{ $project->title }}">
                @endif
                <div class="card-body">
                    <h1 class="card-title">{{ $project->title }}</h1>
                    <p class="card-text">{{ $project->description }}</p>
                    
                    <div class="mt-4">
                        <a href="{{ route('projects.index') }}" class="btn btn-secondary">Back to Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
