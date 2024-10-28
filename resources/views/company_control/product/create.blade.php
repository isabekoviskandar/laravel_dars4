@extends('company_control.layouts.index')

@section('connect')
<div class="container mt-5">
     
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <h2>Create product</h2>
    <div class="input-group input-group-sm mb-3">
        <form action="/products" method="POST"> 
            @csrf
        <span class="input-group-text" id="inputGroup-sizing-sm">Category_id</span>
        <input type="text" name="category_id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        <span class="input-group-text" id="inputGroup-sizing-sm">Name</span>
        <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        <span class="input-group-text" id="inputGroup-sizing-sm">Price</span>
        <input type="text" name="price" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        <span class="input-group-text" id="inputGroup-sizing-sm">Quantity</span>
        <input type="text" name="quantity" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        <input type="submit" class="btn btn-secondary">
        </form>
      </div>
      <a href="/products" class="btn btn-primary">Back</a>
</div>
@endsection