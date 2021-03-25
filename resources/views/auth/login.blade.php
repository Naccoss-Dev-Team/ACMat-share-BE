@extends('layouts.auth')

@section('content')
    <!-- form -->
    <form method="POST" action="{{route('login')}}">
        @csrf
        <div class="form-group">
            <label for="emailaddress">Email address</label>
            <input class="form-control @error('email') is-invalid @enderror" name="email" type="email" value="{{old('email')}}" id="emailaddress" required placeholder="Enter your Email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">

            <label for="password">Password</label>
            <input class="form-control @error('password') is-invalid @enderror" name="password" type="password" required="" id="password" placeholder="Enter your Password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>
        <br>
        <div class="form-group mb-3">
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" name="remember" id="checkbox-signin" {{ old('remember') ? 'checked' : '' }}>

                <label class="custom-control-label" for="checkbox-signin">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>
        <div class="form-group mb-0 text-center">
            <button class="btn btn-primary btn-block" type="submit">{{ __('Login') }}</button>
        </div>

    </form>
    <!-- end form-->
    <!-- Footer-->
    <footer class="footer footer-alt">
        @if (Route::has('password.request'))
            <a class="text-muted" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
        ||
        @if (Route::has('register'))
            <a class="text-muted ml-1" href="{{ route('register') }}">
                {{ __('Sign Up') }}
            </a>
        @endif
    </footer>
@endsection
