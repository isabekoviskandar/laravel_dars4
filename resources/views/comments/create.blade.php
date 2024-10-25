@extends('layouts.index')

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

    <h2>Create comment</h2>
    <div class="input-group input-group-sm mb-3">
        <form action="/comments" method="POST"> 
            @csrf
        <span class="input-group-text" id="inputGroup-sizing-sm">Post id</span>
        <input type="text" name="post_id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        <span class="input-group-text" id="inputGroup-sizing-sm">Body</span>
        <input type="text" name="body" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        <input type="submit" class="btn btn-secondary">
        </form>
      </div>
      <a href="/comments" class="btn btn-primary">Back</a>
</div>
@endsection