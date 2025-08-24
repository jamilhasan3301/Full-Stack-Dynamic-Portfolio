@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Manage Skills</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <!-- Add New Skill Form -->
    <div class="card mb-4">
        <div class="card-header">
            Add New Skill
        </div>
        <div class="card-body">
            <form action="{{ route('skills.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Skill Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="percentage" class="form-label">Proficiency (%)</label>
                    <input type="number" class="form-control" id="percentage" name="percentage" min="0" max="100" required>
                </div>
                <div class="mb-3">
                    <label for="icon" class="form-label">Icon Class (FontAwesome)</label>
                    <input type="text" class="form-control" id="icon" name="icon">
                    <small class="text-muted">Example: fab fa-html5</small>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add Skill</button>
            </form>
        </div>
    </div>

    <!-- List of Skills -->
    <div class="card">
        <div class="card-header">
            Current Skills
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Proficiency</th>
                            <th>Icon</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($skills as $skill)
                        <tr>
                            <td>{{ $skill->name }}</td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: {{ $skill->percentage }}%">
                                        {{ $skill->percentage }}%
                                    </div>
                                </div>
                            </td>
                            <td><i class="{{ $skill->icon }}"></i></td>
                            <td>{{ $skill->description }}</td>
                            <td>
                                <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editSkill{{ $skill->id }}">
                                    Edit
                                </button>
                                <form action="{{ route('skills.destroy', $skill) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>

                        <!-- Edit Modal for each skill -->
                        <div class="modal fade" id="editSkill{{ $skill->id }}" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Skill</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('skills.update', $skill) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="mb-3">
                                                <label for="edit_name_{{ $skill->id }}" class="form-label">Skill Name</label>
                                                <input type="text" class="form-control" id="edit_name_{{ $skill->id }}" name="name" value="{{ $skill->name }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="edit_percentage_{{ $skill->id }}" class="form-label">Proficiency (%)</label>
                                                <input type="number" class="form-control" id="edit_percentage_{{ $skill->id }}" name="percentage" value="{{ $skill->percentage }}" min="0" max="100" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="edit_icon_{{ $skill->id }}" class="form-label">Icon Class</label>
                                                <input type="text" class="form-control" id="edit_icon_{{ $skill->id }}" name="icon" value="{{ $skill->icon }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="edit_description_{{ $skill->id }}" class="form-label">Description</label>
                                                <textarea class="form-control" id="edit_description_{{ $skill->id }}" name="description" rows="3">{{ $skill->description }}</textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Update Skill</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
