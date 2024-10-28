@extends('company_control.layouts.index')

@section('content')
<div class="container">
    <h1 class="mt-5 mb-3">Product Details</h1>
    
    <div class="card">
        <div class="card-header">
            Product ID: {{ $product->id }}
        </div>
        <div class="card-body">
            <h5 class="card-title">Name: {{ $product->name }}</h5>
            <p class="card-text">User ID: {{ $product->user_id }}</p>
            <p class="card-text">Price: {{ $product->price }}</p>
            <p class="card-text">Quantity: {{ $product->quantity }}</p>
        </div>
    </div>

    <a href="/product2" class="btn btn-primary mt-3">Back to Products</a>
</div>
@endsection
