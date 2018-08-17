@extends('layouts.base')

@section('content')
<div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
              <a class="navbar-brand" href="{{ url('/') }}"><i class="fa fa-arrow-circle-left"></i> Home</a>
            <div class="login-brand">
                {{ config('app.name', 'Laravel') }}
            </div>
            <div class="card card-primary">
                <div class="card-header"><h4>{{ __('Login') }}</h4></div>
                

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" class="needs-validation" novalidate="">
                        @csrf
                        <div class="form-group">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" name="email" tabindex="1" required autofocus>
                            @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                          </div>
                       
                          <div class="form-group">
                              <label for="password" class="d-block">{{ __('Password') }}
                                <div class="float-right">
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                              </label>
                              <input id="password" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" tabindex="2" required>
                              @if ($errors->has('password'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                            </div>
          
                        
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                  <label class="custom-control-label" for="remember"> {{ __('Remember Me') }}</label>
                                </div>
                              </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-primary btn-block" tabindex="4">
                                    {{ __('Login') }}
                                </button>

                               
                            </div>
                        </div>
                    </form>
                    <div class="mt-5 text-muted text-center">
                        Don't have an account? <a href="./register">Create One</a>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
