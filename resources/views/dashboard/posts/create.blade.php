@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post</h1>
</div>


<div class="col-lg-8">
    <form action="/dashboard/posts" method="post" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control  @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title')}}" required autofocus>
          @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug')}}" required>
            @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
           @enderror
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" name="category_id">
                @foreach ($categories as $category)
                @if (old('category_id') == $category->id)
                    <option value="{{ $category->id}}" selected>{{ $category->name }}</option>
                @else
                    <option value="{{ $category->id}}">{{ $category->name }}</option>
                @endif
                @endforeach
              </select>
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Post Image</label>
            <img class="img-preview img-fluid mb-3 col-sm-6">
            <input class="form-control @error('img') is-invalid @enderror" type="file" id="img" name="img" onchange="previewImg()">
            @error('img')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
           @enderror
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            @error('body')
                <p class="text-danger" style="font-size: 0.875em;">
                    {{ $message }}
                </p>
           @enderror
            <input id="body" type="hidden" name="body" value="{{ old('body')}}">
            <trix-editor input="body"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>


<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

</script>
<script>
    document.addEventListener('trix-file-accept'. function(e){
        e.preventDefault();
    });
</script>
<script>
    function previewImg() {
        const img = document.querySelector('#img');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const ofReader = URL.createObjectURL(img.files[0]);
        imgPreview.src = ofReader;
    }
</script>
@endsection
