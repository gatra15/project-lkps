@extends('layouts.head')

@section('container')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Sistem Informasi</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
                <div class="login-wrap p-4 p-md-5">
              <h3 class="text-center mb-4">Sign In</h3>
                            
              @if(session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif

            <form action="/login" method="post">
                    @csrf
                  <div class="form-group">
                      <input type="email" name="email" id="email" class="form-control rounded-left @error('email') is-invalid @enderror" placeholder="name@example.com" autofocus required>
                      @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                      @enderror
                  </div>
            <div class="form-group d-flex">
              <input type="password" name="password" id="password" class="form-control rounded-left" placeholder="Password" required>
            </div>
            <div class="form-group">
                <button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
            </div>
            <div class="form-group d-md-flex">
                            
                   
            </div>
                <small class="d-block-text text-center">Have an account? <a href="/register" class="text-primary"> Register Now! </a></small>    
          </form>
          
        </div>
            </div>
        </div>
    </div>
</section>

@endsection