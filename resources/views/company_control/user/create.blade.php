@extends('company_control.layouts.index')

@section('content')
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

    <h2>Create user</h2>
    <div class="input-group input-group-sm mb-3">
        <form action="/users" method="POST"> 
            @csrf
        <span class="input-group-text" id="inputGroup-sizing-sm">Name</span>
        <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
        <input type="text" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        <span class="input-group-text" id="inputGroup-sizing-sm">Password</span>
        <input type="text" name="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">

        <input type="submit" class="btn btn-secondary">
        </form>
      </div>
      <a href="/users" class="btn btn-primary">Back</a>
</div>
@endsection