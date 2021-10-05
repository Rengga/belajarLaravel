@extends('layout.main')
@section('container')

<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <form>
                <div class="form-floating">
                    <input type="text" class="form-control rounded-top" name="name" id="name" placeholder="Name">
                    <label for="name">Name</label>
                  </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                    <label for="username">Username</label>
                  </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                <label for="email">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
                <label for="password">Password</label>
              </div>
        
              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
            </form>
            <p class="d-block text-center mt-3"><a href="/login">login if registered</a></p>
          </main>
        
    </div>
</div>

@endsection