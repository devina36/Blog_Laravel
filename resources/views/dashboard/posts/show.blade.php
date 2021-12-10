@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row mb-5">
        <div class="col-lg-8">
                <h2 class="mb-3">{{ $post->title}}</h2>

                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="trash"></span> Delete</button>
                </form>
                @if ($post->img)
                <div class="d-flex justify-content-center" style="max-height: 400px; overflow: hidden;">
                <img src="{{ asset('storage/' . $post->img) }}" class="img-fluid mt-3" alt="{{$post->category->name}}">
                </div>
                @else
                <img src="https://source.unsplash.com/1200x400/?{{$post->category->name}}" class="img-fluid mt-3" alt="{{$post->category->name}}">
                @endif
                
                <article class="fs-5 my-3">
                    {!! $post->body !!}
                </article>
        </div>
    </div>
</div>
@endsection
