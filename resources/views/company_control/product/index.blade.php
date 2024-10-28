@extends('company_control.layouts.index')

@section('content')
<div class="container">
    <h1 class="mt-5 mb-3">Products</h1>    
    <a href="/product2_create" class="btn btn-primary mb-4">Create</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">User ID</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Options</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($product2s as $product)
          <tr>
            <th scope="row">{{ $product->id }}</th>
            <td>{{ $product->user_id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->quantity }}</td>
            <td>
                <a href="/product2/{{ $product->id }}" class="btn btn-primary">Show</a>
                <a href="/product2/{{ $product->id }}/edit" class="btn btn-success">Update</a>
                
                <form action="/product2/{{ $product->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?');">Delete</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>    
@endsection
