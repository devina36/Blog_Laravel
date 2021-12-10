@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Users Management</h1>
</div>

@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
      {{ session('success')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

 <div class="table-responsive col-lg-8">
   <a class="btn btn-primary" href="/dashboard/users/create"><span data-feather="plus"></span> Add User</a>
        <table class="table table-striped table-sm mt-3">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Roles</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($users as $user)
            <tr>
              <td>{{ ($users->currentPage() - 1) * $users->perPage() + $loop->iteration }}</td>
              <td>{{ $user->name}}</td>
              <td>{{ $user->email }}</td>
              <td><span class="badge {{ (($user->is_admin) == 1) ? 'bg-success' : 'bg-warning' }}">{{ (($user->is_admin) == 1) ? 'Admin' : 'User' }}</span></td>
              <td>
                <a href="/dashboard/users/{{$user->username}}" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="/dashboard/users/{{$user->username}}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="/dashboard/users/{{ $user->username }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="trash"></span></button>
                </form>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
      <nav class="mb-5" aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item">
            {{ $users->links() }}
          </li>
        </ul>
    </nav>
@endsection
