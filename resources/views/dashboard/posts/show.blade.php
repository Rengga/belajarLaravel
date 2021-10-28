@extends('dashboard.layout.main')
@section('container')
<div class="countainer">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-5">
            <h2 class="mb-3">{{ $posts->title }}</h2>
            <a href="/dashboard/posts" class="btn btn-success mb-3"><span data-feather="arrow-left"></span> Back</a>
            <a href="/dashboard/posts/{{ $posts->slug }}/edit" class="btn btn-warning mb-3"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $posts->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger mb-3 border-0" onclick="return confirm('Apa kamu yakin?')"><span data-feather="x-circle"></span> Delete</button>
                </form>

            <img class="img-fluid mb-4" src="https://source.unsplash.com/1200x500?{{ $posts->category->name }}" alt={{ $posts->category->name }}">
            <article class="my fs-5">
                {!! $posts->body !!}
            </article>
        </div>
    </div>
</div>
@endsection