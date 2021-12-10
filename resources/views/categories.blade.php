@extends('layouts.main')

@section('container')
<h1 class="mb-5"> Post Categories</h1>
    <div class="container">
        <div class="row justify-content-between">
            @foreach ($categories as $category)
            <div class="col-md-4 mb-4">
                <div class="card bg-dark">
                    <a href="/posts?category={{$category->slug}}" class="text-decoration-none text-white">
                        <img src="https://source.unsplash.com/500x500/?{{$category->name}}" class="card-img" alt="{{$category->name}}">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title flex-fill text-center categories-card-text fs-3">{{ $category->name}}</h5>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection