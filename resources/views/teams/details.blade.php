@extends('layouts.main')
@section('title', 'Team Details')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <h3 class="mb-4">{{ $title }}</h3>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive mb-0">
                    <table class="table table-bordered table-striped align-middle">
                        <tbody>
                            <tr>
                                <th style="width: 30%;"><i class="bi bi-person-fill me-1"></i> Team Name</th>
                                <td>{{ $teamInfo->name }}</td>
                            </tr>
                            <tr>
                                <th><i class="bi bi-envelope-at-fill me-1"></i> Description</th>
                                <td>
                                    {{ $teamInfo->description ?? '-' }}
                                </td>
                            </tr>
                            <tr>
                            <th><i class="bi bi-people-fill me-1"></i> Total Agents</th>
                                <td>
                                    {{ $teamInfo->agents->count() ?? '0' }}
                                </td>
                            </tr>
                            <tr>
                                <th><i class="bi bi-people-fill me-1"></i> Agents</th>
                                <td>
                                    @if($teamInfo->agents->count() > 0)
                                    <ul>
                                        @foreach($teamInfo->agents as $agent)
                                        <li>
                                            <a href="{{ route('agents.show', $agent->id) }}">{{ $agent->name }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                    @else
                                    <span class="text-muted">No agents</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th><i class="bi bi-toggle-on me-1"></i> Status</th>
                                <td>
                                    @if($teamInfo->status == 1)
                                    <span class="badge bg-success px-3 py-2">Active</span>
                                    @else
                                    <span class="badge bg-secondary px-3 py-2">Inactive</span>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="mt-4 text-center">
            <a href="{{ route('teams.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection