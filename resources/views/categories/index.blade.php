@extends('layouts.index')

@section('connect')
    <h1>Categories</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $category)
          <tr>
            <th scope="row">{{ $category->id }}</th>
            <td>{{ $category->name }}</td>
          </tr>
          @endforeach
        </tbody>
    </table>
@endsection
