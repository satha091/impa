@extends('master')

@section('bootstrap')
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
@endsection

@section('page-content')
<style>
.overlay{
    background-color:white;
    background-image: url(img/home.png);
    height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}



    </style>
<div class="container"  style="padding:10px; line-height:40px;">
    <div class="row justify-content-center">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card">
                <div style="background-color:rgba(0,0,0,0.8);opacity:0.8;padding:10px 10px 10px 10px;">
                <div class="card-header text-info" style="text-align: center;margin-bottom:25px;"><h3 style="color:white" >Login</h3></div>

                <div class="card-body" >
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" style="color:white" class="col-md-offset-4 col-form-label text-md-right ">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-7 col-md-offset-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" style="color:white"  class="col-md-offset-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-7 col-md-offset-3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4"></div>
                            <div class="col-md-7 offset-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label style="color:white"  class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-3 "></div>
                            <div class="col-md-3">
                                <div class="col-md-3 col-md-offset-9">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                </div>
                                <div class="col-md-3 col-md-offset-1">
                                @if (Route::has('password.request'))
                                    <a style="color:white"  class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-4"></div>

    </div>
</div>
@endsection
