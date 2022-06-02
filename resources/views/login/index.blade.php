@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-signin w-100 m-auto">
            <form action="/login" method="POST">
              @csrf
              <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
          
              <div class="form-floating">
                <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror "id="email" placeholder="name@example.com" autofocus required>
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                 @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
              </div>
          
              <div class="checkbox mb-3">
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">login</button>
            </form>
            <small>Don't have an account? <a href="/register" class="text-decoration-none">Sign Up</a></small>
          </main>
    </div>
</div>

@endsection