

@extends('/layout.main')
@section('container')
<h1 class="mb-5">Post Categories</h1>
<div class="container">
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-12">
            <a href="/posts?category={{ $category->slug}}" class="text-decoration-none text-white text-center">
                    <div class="card mb-3">
                        <img  src="https://source.unsplash.com/1200x200?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                        <div class="card-img-overlay d-flex align-items-center" style="background-color: rgba(0,0,0,0.8)">
                        <h5  class="card-title flex-fill p-4 fs-1">{{ $category->name }}</h5>
                        
                    </div>
                </div>
            </a>
         </div>
         @endforeach
    </div>
</div>

    
@endsection