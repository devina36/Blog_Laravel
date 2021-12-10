@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">About User</h1>
</div>

<a href="/dashboard/users" class="btn btn-success"><span data-feather="arrow-left"></span> Back</a>
<div class="col-lg-8 mt-4">
    <form class="mb-5" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ $user->name}}" disabled>
          @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="{{ $user->username}}" disabled>
            @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
           @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email}}" disabled>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
           @enderror
        </div>
        <div class="mb-3">
            <label for="roles" class="form-label">Roles</label>
            <input type="text" class="form-control" id="is_admin" name="is_admin" value="{{ ($user->is_admin === 1) ? 'Admin' : 'User'}}" disabled>
        </div>
    </form>
</div>

@endsection
