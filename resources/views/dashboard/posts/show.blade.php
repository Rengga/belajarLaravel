@extends('dashboard.layout.main')
@section('container')
<div class="countainer">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-5">
            <h2 class="mb-3">{{ $posts->title }}</h2>
            <a href="/dashboard/posts" class="btn btn-success mb-3"><span data-feather="arrow-left"></span> Back</a>
            <a href="" class="btn btn-warning mb-3"><span data-feather="edit"></span> Edit</a>
            <a href="" class="btn btn-danger mb-3"><span data-feather="x-circle"></span> Delete</a>

            <img class="img-fluid mb-4" src="https://source.unsplash.com/1200x500?{{ $posts->category->name }}" alt={{ $posts->category->name }}">
            <article class="my fs-5">
                {!! $posts->body !!}
            </article>
        </div>
    </div>
</div>
@endsection