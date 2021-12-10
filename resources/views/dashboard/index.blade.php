@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
</div>

<div class="row justify-content-between">
  <div class="col-lg-4">
    <div class="card text-white bg-card mb-3">
      <div class="card-header">My Post</div>
      <div class="card-body d-flex">
        <span data-feather="clipboard" stroke-width="3" style="width: 2vw; height:2vw;"></span>
        <h4 class="card-title ms-auto">{{ $posts->count() }}</h4>
      </div>
    </div>
  </div>
  @can('admin')
  <div class="col-lg-4">
    <div class="card text-white bg-card mb-3">
      <div class="card-header">All Posts</div>
      <div class="card-body d-flex">
        <span data-feather="layers" stroke-width="3" style="width: 2vw; height:2vw;"></span>
        <h4 class="card-title ms-auto">{{ $posts_all->count() }}</h4>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card text-white bg-card mb-3">
      <div class="card-header">Users</div>
      <div class="card-body d-flex">
        <span data-feather="user" stroke-width="3" style="width: 2vw; height:2vw;"></span>
        <h4 class="card-title ms-auto">{{ $users->count() }}</h4>
      </div>
    </div>
  </div>
  @endcan
</div>
@endsection
