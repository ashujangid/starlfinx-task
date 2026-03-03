@extends('layouts.main')
@section('title', 'Agent Details')

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
                                <th style="width: 30%;"><i class="bi bi-person-fill me-1"></i> Agent Name</th>
                                <td>{{ $agentInfo->name }}</td>
                            </tr>
                            <tr>
                                <th><i class="bi bi-envelope-at-fill me-1"></i> Email</th>
                                <td>
                                    <a href="mailto:{{ $agentInfo->email }}">{{ $agentInfo->email }}</a>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="bi bi-telephone-fill me-1"></i> Phone</th>
                                <td>
                                    <a href="tel:{{ $agentInfo->phone }}">{{ $agentInfo->phone }}</a>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="bi bi-people-fill me-1"></i> Team</th>
                                <td>
                                    @if($agentInfo->team)
                                    <span class="text-muted">{{ $agentInfo->team->name }}</span>
                                    @else
                                    <span class="text-muted">No Team Assigned</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th><i class="bi bi-toggle-on me-1"></i> Status</th>
                                <td>
                                    @if($agentInfo->status == 1)
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
            <a href="{{ route('agents.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection