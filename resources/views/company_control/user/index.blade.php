@extends('company_control.layouts.index')

@section('content')
<div class="container">
    <h1 class="mt-5 mb-3">Users</h1>    
    <a href="/user_create" class="btn btn-primary mb-4">Create</a>

    <!-- Search Form -->
    <form action="{{ route('users.index') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" value="{{ request()->input('search') }}" class="form-control" placeholder="Search by name or email">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </div>
    </form>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Options</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
          <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->password }}</td>
            <td>
                <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary btn-sm">Show</a>
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-success btn-sm">Update</a>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?');">Delete</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>    

<div class="d-flex justify-content-center">
  <nav>
      <ul class="pagination">
          {{ $users->links('pagination::bootstrap-4') }} <!-- Using Bootstrap 4 pagination style -->
      </ul>
  </nav>
</div>
@endsection
