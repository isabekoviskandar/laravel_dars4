@extends('layouts.main')

@section('content')
    <h1>Posts</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Category ID</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
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
