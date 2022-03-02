@extends('auth.layout')
@section('title', 'Login')

@section('content')

<div class="mt-5">
    <img class="mb-3" src="{{asset('images/logo.png')}}" alt="logo" width="72" height="57">
    <h1 class="h3  fw-normal">Please sign in</h1>
</div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-5 col-xl-4 my-5">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="email"  name="email"  value="{{ old('email') }}" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" required autofocus id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Email</label>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="password"  id="floatingPassword" name="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"  required/>
                                    <label for="floatingPassword">Password</label>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="checkbox mb-3">
                                <label>
                                    <input type="checkbox" value="remember-me" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                </label>
                            </div>
                            <div class="mb-3">
                                <button class="w-100 btn btn-lg btn-primary" type="submit">
                                    {{ __('Sign In') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
