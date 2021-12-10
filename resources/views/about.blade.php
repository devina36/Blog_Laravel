@extends('layouts.main')

@section('container')
    <h1>About Me</h1>
    <div class="card mb-3 mt-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img/{{ $img }}" class="img-fluid img-me" alt="{{ $name }}">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h3 class="card-title">Name : {{ $name }}</h3>
              <h5 class="card-title">Email : {{ $email }}</h5>
              <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus voluptates esse et eveniet animi dicta soluta atque praesentium nostrum consequatur ab accusantium impedit possimus excepturi exercitationem magnam eaque, magni porro!</p>
            </div>
          </div>
        </div>
    </div>
@endsection