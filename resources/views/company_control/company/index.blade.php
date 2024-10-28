@extends('company_control.layouts.index')

@section('content')
<div class="container">
    <h1 class="mt-5 mb-3">Companies</h1>    
    <a href="{{ route('company.create') }}" class="btn btn-primary mb-4">Create</a>

    <!-- Search Form -->
    <form action="{{ route('company.index') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" value="{{ request()->input('search') }}" class="form-control" placeholder="Search by name or phone">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </div>
    </form>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">User ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Active</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                <tr>
                    <th scope="row">{{ $company->id }}</th>
                    <td>{{ $company->user_id }}</td>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->phone }}</td>
                    <td>{{ $company->is_active ? 'Yes' : 'No' }}</td>
                    <td>
                        <a href="{{ route('company.edit', $company->id) }}" class="btn btn-success">Update</a>
                        <a href="{{ route('company.show', $company->id) }}" class="btn btn-primary">Show</a>

                        <form action="{{ route('company.destroy', $company->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this company?');" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
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
              {{ $companies->links('pagination::bootstrap-4') }} <!-- Using Bootstrap 4 pagination style -->
          </ul>
      </nav>
    </div>
</div>    
@endsection
