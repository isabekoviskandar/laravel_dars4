@extends('company_control.layouts.index')

@section('content')
<div class="container">
    <h1 class="mt-5 mb-3">Companies</h1>    
    <a href="/company_create" class="btn btn-primary mb-4">Create</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">User_id</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Is_active</th>
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
            <td>{{ $company->is_active }}</td>
            <td>
              <!-- Delete form -->
              <form action="{{ route('company.destroy', $company->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this company?');" style="display: inline-block;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>
              </form>

              <!-- Update and Show buttons -->
              <a href="{{ route('company.edit', $company->id) }}" class="btn btn-success">Update</a>
              <a href="{{ route('company.show', $company->id) }}" class="btn btn-primary">Show</a>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>    
@endsection
