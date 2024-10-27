@extends('company_control.layouts.index')

@section('content')
<div class="container">
    <h1 class="mt-5 mb-3">Users</h1>    
    <a href="#" class="btn btn-primary mb-4">Create</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Options</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
          <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->password }}</td>
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
