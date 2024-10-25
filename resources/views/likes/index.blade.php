@extends('layouts.index')

@section('connect')
    <h1>Likes</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Post_id</th>
            <th scope="col">user_id</th>
            <th scope="col">is_active</th>
            <th scope="col">Options</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($likes as $like)
          <tr>
            <td>{{ $like->id }}</td>
            <td>{{ $like->post_id }}</td>
            <td>{{ $like->user_id }}</td>
            <td>{{ $like->is_active }}</td>
          </tr>
          @endforeach
        </tbody>
    </table>
@endsection
