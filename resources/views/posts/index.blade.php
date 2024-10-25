@extends('layouts.index')

@section('connect')
    <h1>Posts</h1>
    <a href="/posts_create" class="btn btn-primary mb-3">Create post</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Category ID</th>
            <th scope="col">Title</th>
            <th scope="col">Name</th>
            <th scope="col">Options</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)
          <tr>
            <td>{{ $post->category_id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->body }}</td>
          </tr>
          @endforeach
        </tbody>
    </table>
@endsection
