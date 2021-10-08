@extends('layout.main')
@section('container')
<div class="row justify-content-center">
  <div class="col-md-4">
    @if (session()->has('sukses'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('sukses') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if (session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('loginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    

    <main class="form-signin">
      <form action="/login" method="post">
        <div class="form-floating">
          @csrf
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
          <label for="email">Email address</label>
          @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
        
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password">
          <label for="password" required="">Password</label>
        </div>
    
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      </form>
      <p class="d-block text-center mt-3"><a href="/register">Register</a></p>
    </main>
  </div>
</div>

@endsection