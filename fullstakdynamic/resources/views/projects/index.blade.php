@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Projects</h1>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @auth
        <a href="{{ route('projects.create') }}" class="btn btn-primary mb-3">Add New Project</a>
    @endauth

    <div class="row">
        @foreach($projects as $project)
            <div class="col-md-4 mb-4">
                <div class="card">
                    @if($project->image)
                        <img src="{{ asset('storage/' . $project->image) }}" class="card-img-top" alt="{{ $project->title }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $project->title }}</h5>
                        <p class="card-text">{{ Str::limit($project->description, 100) }}</p>
                        <a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
