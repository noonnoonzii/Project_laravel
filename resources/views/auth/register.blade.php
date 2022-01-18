@extends('layouts.main.index')

@section('content')
<section class="ftco-section">
    <div class="container" 
    style=" margin-bottom: 20px;
            margin-top: 20px;">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h1 class="heading-section">Account</h1>
            </div>
        </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">    
                        <h3 class="mb-4 text-center">Register</h3>   
                            <form class="signin-form" method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-group">
                                            <input id="username" type="text" class="form-control text-center  @error('username') is-invalid @enderror" placeholder="Username" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus style="margin-bottom: 5px;>
                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                            <input id="name" type="text" class="form-control text-center @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus style="margin-bottom: 5px;">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                            <input id="email" type="email" class="form-control text-center @error('email') is-invalid @enderror" placeholder="E-mail" name="email" value="{{ old('email') }}" required autocomplete="email" style="margin-bottom: 5px;>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>

                                    <div class="form-group">
                                            <input id="password" type="password" class="form-control text-center @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password" style="margin-bottom: 5px;>

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>

                                    <div class="form-group md-8">
                                            <input id="password-confirm" type="password" class="form-control text-center" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password" style="margin-bottom: 5px;>
                                        </div>
                                    </div>

                                    <div class="form-group mb-6">
                                        <div class="col mb-8">
                                            <button type="submit" class="form-control btn btn-dark rounded submit px-4">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                        </div>
                                    </div>
                                </form>    
                    </div>     
                </div>
                
            </div>        
                    
    </div>
</section>
    
@endsection
