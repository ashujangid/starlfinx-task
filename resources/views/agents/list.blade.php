@extends('layouts.main')
@section('title', 'Agent List')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h3>{{ $title }}</h3>
    <a href="{{ route('agents.create') }}" class="btn btn-primary">Add Agent</a>
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @if($agents->count() > 0)
        @foreach($agents as $agent)
        <tr>
            <td>{{ $agent->id }}</td>
            <td>{{ $agent->name }}</td>
            <td>
                <span class="badge bg-{{ $agent->status == 1 ? 'success' : 'danger' }}">
                    {{ $agent->status == 1 ? 'Active' : 'Inactive' }}
                </span>
            </td>
            <td>
                <a href="{{ route('agents.show', $agent) }}" class="btn btn-info btn-sm">View</a>
                <a href="{{ route('agents.edit', $agent) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('agents.destroy', $agent) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td colspan="10" class="text-center">No agents found</td>
        </tr>
        @endif
    </tbody>
</table>

{{ $agents->links() }}

@endsection