@extends('layouts.index')

@section('connect')
    <h1>Likes</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Post_id</th>
            <th scope="col">User_id</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($likes as $like)
          <tr>
            <td>{{ $like->id }}</td>
            <td>{{ $like->post_id }}</td>
            <td>{{ $like->user_id }}</td>
          </tr>
          @endforeach
        </tbody>
    </table>
@endsection
