@extends('layouts.main')
@section('title', 'Add Agent')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <h3 class="mb-3">{{ $title }}</h3>
        <form action="{{ route('agents.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Agent Name<span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone<span class="text-danger">*</span></label>
                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" value="{{ old('phone') }}" oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="10">
                @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="team_id" class="form-label">Team<span class="text-danger">*</span></label>
                <select name="team_id" class="form-select @error('team_id') is-invalid @enderror" id="team_id">
                    <option value="">Select Team</option>
                    @foreach($teams as $team)
                    <option value="{{ $team->id }}" {{ old('team_id') == $team->id ? 'selected' : '' }}>{{ $team->name }}</option>
                    @endforeach
                </select>
                @error('team_id')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status<span class="text-danger">*</span></label>
                <select name="status" class="form-select @error('status') is-invalid @enderror" id="status">
                    <option value="1" {{ old('status', 1) == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
                </select>
                @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-info">Add Agent</button>
                <a href="{{ route('agents.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </form>
    </div>
</div>
@endsection