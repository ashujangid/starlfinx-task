@extends('layouts.main')
@section('title', 'Add Team')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <h3 class="mb-3">{{ $title }}</h3>
        <form action="{{ route('teams.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Team Name<span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" rows="4">{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" class="form-select @error('status') is-invalid @enderror" id="status">
                    <option value="1" {{ old('status', 1) == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
                </select>
                @error('status')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-info">Add Team</button>
                <a href="{{ route('teams.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </form>
    </div>
</div>
@endsection