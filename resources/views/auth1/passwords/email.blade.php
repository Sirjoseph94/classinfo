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
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
                        @csrf

                        <div class="form-group ">
                            <label for="email" >{{ __('E-Mail Address') }}</label>

                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group mx-3 mb-5 ">
                            
                                <button type="submit" class="btn btn-primary btn-block " >
                                    {{ __('Send Password Reset Link') }}
                                </button>
                      
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
          </div></div></section>
          
</div>
@endsection
