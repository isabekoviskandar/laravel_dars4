@extends('company_control.layouts.index')

@section('content')
<div class="container mt-5">
    <h2>Edit Product</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="/product2/{{ $product->id }}" method="POST"> 
        @csrf
        @method('PUT')
        <div class="input-group mb-3">
            <span class="input-group-text">User ID</span>
            <input type="text" name="user_id" class="form-control" value="{{ $product->user_id }}" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Name</span>
            <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Price</span>
            <input type="text" name="price" class="form-control" value="{{ $product->price }}" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Quantity</span>
            <input type="text" name="quantity" class="form-control" value="{{ $product->quantity }}" required>
        </div>
        <input type="submit" class="btn btn-secondary" value="Update Product">
    </form>

    <a href="/product2" class="btn btn-primary mt-3">Back to Products</a>
</div>
@endsection
