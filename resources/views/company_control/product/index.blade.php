@extends('company_control.layouts.index')

@section('content')
<div class="container">
    <h1 class="mt-5 mb-3">Products</h1>    
    <a href="#" class="btn btn-primary mb-4">Create</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">User_id</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Options</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $product)
          <tr>
            <th scope="row">{{ $product->id }}</th>
            <td>{{ $product->user_id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->quantity }}</td>
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
