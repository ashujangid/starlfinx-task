@extends('layouts.main')
@section('title', 'Team List')
@section('content')
<div class="d-flex justify-content-between mb-3">
    <h3>{{ $title }}</h3>
    <a href="{{ route('teams.create') }}" class="btn btn-primary">Add Team</a>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Team Name</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @if($teams->count() > 0)
        @foreach($teams as $team)
        <tr>
            <td>{{ $team->id }}</td>
            <td>{{ $team->name }}</td>
            <td>
                <span class="badge bg-{{ $team->status == 1 ? 'success' : 'danger' }}">
                    {{ $team->status ? 'Active' : 'Inactive' }}
                </span>
            </td>
            <td>
                <a href="{{ route('teams.show', $team) }}" class="btn btn-info btn-sm">View</a>
                <a href="{{ route('teams.edit', $team) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('teams.destroy', $team) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td colspan="10" class="text-center">No teams found</td>
        </tr>
        @endif
    </tbody>
</table>
{{ $teams->links() }}
@endsection