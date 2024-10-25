@extends('layouts.index')

@section('connect')
    <h1>Categories</h1>
    <a href="/category_create" class="btn btn-primary mb-4">Create</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Options</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $category)
          <tr>
            <th scope="row">{{ $category->id }}</th>
            <td>{{ $category->name }}</td>
            <td>
              <form action="/category"></form>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
@endsection
