@extends('layouts.main')
@section('title', 'Edit Agent')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <h3 class="mb-4">{{ $title }}</h3>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('agents.update', $agentInfo->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Agent Name</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                               value="{{ old('name', $agentInfo->name) }}" required>
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
                               value="{{ old('email', $agentInfo->email) }}" required>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror"
                               value="{{ old('phone', $agentInfo->phone) }}">
                        @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="team_id" class="form-label">Team</label>
                        <select class="form-select @error('team_id') is-invalid @enderror" name="team_id" id="team_id">
                            <option value="">-- Select Team --</option>
                            @foreach($teams as $team)
                                <option value="{{ $team->id }}" {{ old('team_id', $agentInfo->team_id) == $team->id ? 'selected' : '' }}>
                                    {{ $team->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('team_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select @error('status') is-invalid @enderror" name="status" id="status">
                            <option value="1" {{ old('status', $agentInfo->status) == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ old('status', $agentInfo->status) == 0 ? 'selected' : '' }}>Inactive</option>
                        </select>
                        @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">Update Agent</button>
                        <a href="{{ route('agents.index') }}" class="btn btn-secondary ms-2">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection