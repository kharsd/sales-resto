@extends('layout.main')

@section('title', 'Login')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">    

        <div class="form-container sign-up-container">
            <main class="form-signin mt-10" style="margin-bottom: 250px; margin-top: 200px; max-width: 400px; margin-left: auto; margin-right: auto;">


                 @if(session()->has('loginError'))
                 <div class="alert alert-danger alert-dismissible fade show" role="alert">
                     {{ session('loginError') }}
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>
                  @endif


                <form action="/login" method="POST">
                    @csrf
                    <h1 class="h3 mb-4 fw-normal text-center">Login</h1>

                    <div class="form-floating mb-3">
                        <input type="email" name="email" id="email" class="form-control form-control-sm @error('email') is-invalid @enderror" id="floatingInput" placeholder="Email" required value="{{ old('email') }}">
                        <label for="floatingInput">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="password" id="password" class="form-control form-control-sm" id="floatingPassword" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                    </div>

                    <div class="checkbox mb-3"></div>

                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                </form>
                {{-- <small class="d-block text-center mt-3">Tidak Punya Account? <a href="/register" style="color: blue;">Register!</a></small> --}}
            </main>
        </div>
    </div>
</div>
@endsection
