@extends('layouts.auth')

@section('content')
    <!-- form -->
    <form method="POST" action="{{route('register')}}">
        @csrf

        <div class="form-group">
            <label for="name">{{__('Full Name')}}</label>
            <input class="form-control @error('name') is-invalid @enderror" name="name" type="text" value="{{old('name')}}" id="name" required placeholder="Enter your Full Name">
            @error('name')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

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

            <label for="password">{{__('Password')}}</label>
            <input class="form-control @error('password') is-invalid @enderror" name="password" type="password" required="" id="password" placeholder="Enter your Password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

        <div class="form-group">

            <label for="password-confirm"">{{__('Confirm Password')}}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required >

        </div>
        <br>


        <div class="form-group mb-0 text-center">
            <button class="btn btn-primary btn-block" type="submit">{{ __('Register') }}</button>
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
        @if (Route::has('login'))
            <a class="text-muted ml-1" href="{{ route('login') }}">
                {{ __('Login') }}
            </a>
        @endif
    </footer>
@endsection
