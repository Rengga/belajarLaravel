@extends('layout.main')
@section('container')
<main class="form-signin">
    <form>
  
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
  
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    </form>
    <p class="d-block text-center mt-3"><a href="/register">Register</a></p>
  </main>
@endsection