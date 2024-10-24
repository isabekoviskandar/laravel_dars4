@extends('layouts.index')

@section('connect')
    <h1>Comments</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Post ID</th>
            <th scope="col">Comment</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($comments as $comment)
          <tr>
            <td>{{ $comment->post_id }}</td>
            <td>{{ $comment->body }}</td>
          </tr>
          @endforeach
        </tbody>
    </table>
@endsection
