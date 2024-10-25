@extends('layouts.index')

@section('connect')
    <h1>Comments</h1>
    <a href="/comments_create" class="btn  btn-primary mb-3">Create comment</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Post ID</th>
            <th scope="col">Name</th>
            <th scope="col">options</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($comments as $comment)
          <tr>
            <td>{{ $comment->post_id }}</td>
            <td>{{ $comment->body }}</td>
            <td></td>
          </tr>
          @endforeach
        </tbody>
    </table>
@endsection
