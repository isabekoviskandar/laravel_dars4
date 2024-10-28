@extends('company_control.layouts.index')

@section('content')
<div class="container">
    <h1>Company Details</h1>
    <p><strong>ID:</strong> {{ $company->id }}</p>
    <p><strong>User ID:</strong> {{ $company->user_id }}</p>
    <p><strong>Name:</strong> {{ $company->name }}</p>
    <p><strong>Phone:</strong> {{ $company->phone }}</p>
    <p><strong>Is Active:</strong> {{ $company->is_active }}</p>
    <a href="{{ route('company.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection
