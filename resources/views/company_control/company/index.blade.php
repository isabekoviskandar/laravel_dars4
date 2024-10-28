@extends('company_control.layouts.index')

@section('content')
<div class="container">
    <h1 class="mt-5 mb-3">Companies</h1>    
    <a href="/company_create" class="btn btn-primary mb-4">Create</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">User_id</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Is_active</th>
            <th scope="col">Options</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($companies as $company)
          <tr>
            <th scope="row">{{ $company->id }}</th>
            <td>{{ $company->user_id }}</td>
            <td>{{ $company->name }}</td>
            <td>{{ $company->phone }}</td>
            <td>{{ $company->is_active }}</td>
            <td> <a href="#" class="btn btn-danger">Delete</a></td>
            <td> <a href="#" class="btn btn-success">Update</a></td>
            <td> <a href="#" class="btn btn-primary">Show</a></td>
            <td>
              <form action="#"></form>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>    
@endsection
