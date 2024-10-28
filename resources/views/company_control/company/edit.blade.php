@extends('company_control.layouts.index')

@section('content')
<div class="container mt-5">
    <h2>Edit Company</h2>
    <form action="{{ route('company.update', $company->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $company->name }}">
        </div>
        
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ $company->phone }}">
        </div>
        
        <div class="mb-3">
            <label for="is_active" class="form-label">Is Active</label>
            <select name="is_active" class="form-select">
                <option value="1" {{ $company->is_active ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ !$company->is_active ? 'selected' : '' }}>No</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('company.index') }}" class="btn btn-primary">Back</a>
    </form>
</div>
@endsection
