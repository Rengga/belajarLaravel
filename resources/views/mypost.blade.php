@extends('layout.main')
@section('container')
<div class="countainer">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-5">
            <h2 class="mb-3">{{ $mypost2->title }}</h2>
            <p>By. <a href="/posts?author={{ $mypost2->author->username }}" class="text-decoration-none">{{ $mypost2->author->name }}</a> Category <a href="/posts?category={{ $mypost2->category->slug }}"class="text-decoration-none">{{ $mypost2->category->name }}</a></p>

            <img class="img-fluid mb-4" src="https://source.unsplash.com/1200x500?{{ $mypost2->category->name }}" alt={{ $mypost2->category->name }}">
            <article class="my fs-5">
                {!! $mypost2->body !!}
            </article>
        </div>
    </div>
</div>
@endsection