@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New User</h1>
</div>


<div class="col-lg-8">
    <form action="/dashboard/users/{{ $user->username }}" method="post" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $user->name)}}" required autofocus>
          @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Username</label>
            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username', $user->username)}}" required>
            @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
           @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $user->email)}}" required>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
           @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password', $user->password)}}" required readonly>
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
           @enderror
        </div>
        <div class="mb-3">
            <label for="is_admin" class="form-label">Roles</label>
            <select class="form-select" name="is_admin">
                    <option value="1" @if(old('is_admin', $user->is_admin) == 1) selected @endif>Admin</option>
                    <option value="0" @if(old('is_admin', $user->is_admin) == 0) selected @endif>User</option>
              </select>
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>

@endsection
