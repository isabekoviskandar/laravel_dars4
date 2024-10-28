@extends('company_control.layouts.index')

@section('content')

<div class="container mt-5">
    <h1 class="mt-5 mb-4 text-center">Products</h1>    
    <a href="/product2_create" class="btn btn-primary mb-4">Create New Product</a>
    
    <!-- Search Form -->
    <form action="{{ route('product2.index') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" value="{{ request()->input('search') }}" class="form-control" placeholder="Search by name or user ID">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </div>
    </form>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
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
                    <td>${{ number_format($product->price, 2) }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>
                        <a href="/product2/{{ $product->id }}" class="btn btn-info btn-sm">Show</a>
                        <a href="/product2/{{ $product->id }}/edit" class="btn btn-warning btn-sm">Update</a>
                        
                        <form action="/product2/{{ $product->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?');">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="d-flex justify-content-center">
        <nav>
            <ul class="pagination">
                {{ $product2s->links('pagination::bootstrap-4') }} <!-- Using Bootstrap 4 pagination style -->
            </ul>
        </nav>
    </div>
</div>    

@endsection
