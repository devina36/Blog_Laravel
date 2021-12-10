@extends('layouts.main')

@section('container')
<div class="brand text-center">
  <h1>#Black</h1>
</div>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel"> 
      <div class="carousel-inner">
      @if ($categories->count() )
        <div class="carousel-item active">
          <img src="https://source.unsplash.com/1200x400/?{{ $categories[0]->name }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h3>{{ $categories[0]->name }}</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex fugit fuga sunt.</p>
          </div>
        </div>
      @foreach ($categories->skip(1) as $category)
        <div class="carousel-item">
          <img src="https://source.unsplash.com/1200x400/?{{ $category->name }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h3>{{ $category->name }}</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, suscipit quia. Dolorem.</p>
          </div>
        </div>
      @endforeach
      @endif
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
</div>
@endsection