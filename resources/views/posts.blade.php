

@extends('/layout.main')
@section('container')
<h1 class="mb-5">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/posts">
      @if (request('category'))
      <input type="hidden" name="category" value="{{ request('category') }}">
          
      @endif
      @if (request('author'))
      <input type="hidden" name="author" value="{{ request('author') }}">
          
      @endif

      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search.." name="search" aria-label="search" value="{{ request('search') }}">
        <button class="btn btn-outline-danger" type="submit" id="button-addon2">Search</button>
      </div>
    </form>
  </div>
</div>

@if ($posts->count())
<div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
    <div class="card-body text-center">
      <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug}}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
      <p>
        <small class="text-muted">
          By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> Category <a href="/posts?category={{ $posts[0]->category->slug }}"class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
        </small>
    </p>
      <p class="card-text">{{ $posts[0]->excerpt }}</p>
      <a href="/posts/{{ $posts[0]->slug}}" class="text-decoration-none btn btn-primary">Read more</a>
    </div>
  </div>
  

<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $mypost)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-2 py-1" style="background-color: rgba(0,0,0,0.8)"><a href="/posts?category={{ $mypost->category->slug }}" class="text-decoration-none text-white">{{ $mypost->category->name }}</a></div>

                    <img src="https://source.unsplash.com/500x400?{{ $mypost->category->name }}" class="card-img-top" alt="{{ $mypost->category->name }}">

                    <div class="card-body">
                    <h5 class="card-title"><a href="/posts/{{ $mypost->slug}}" class="text-dark text-decoration-none">{{ $mypost->title }}</a></h5>
                    <p>
                        <small class="text-muted">
                        By. <a href="/posts?author={{ $mypost->author->username }}" class="text-decoration-none">{{ $mypost->author->name }}</a> {{ $mypost->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{{ $mypost->excerpt }}</p>
                    <a href="/posts/{{ $mypost->slug}}" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@else
<p class="text-center fs-4">Tidak ada postingan.</p>
@endif
<div class="d-flex justify-content-center">{{ $posts->links() }}</div>

@endsection