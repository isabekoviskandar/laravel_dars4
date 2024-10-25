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

    <h2>Create post</h2>
    <div class="input-group input-group-sm mb-3">
        <form action="/posts" method="POST"> 
            @csrf
            <div class="input-group mb-3">
                <select class="form-select" name="category_id" id="inputGroupSelect02">
                    @foreach ($collection as $item)
                        
                    @endforeach
                </select>
                <label class="input-group-text" for="inputGroupSelect02">Category</label>
              </div>
        <span class="input-group-text" id="inputGroup-sizing-sm">title</span>
        <input type="text" name="title" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        <span class="input-group-text" id="inputGroup-sizing-sm">Body</span>
        <input type="text" name="body" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        <input type="submit" class="btn btn-secondary">
        </form>
      </div>
      <a href="/posts" class="btn btn-primary">Back</a>
</div>
@endsection