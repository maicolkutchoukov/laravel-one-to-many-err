@extends('layouts.guest')

@section('main-content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row justify-content-center align-items-center ">
        <div class="col-6 border rounded py-5 px-5 text-white login-form">
            <form method="POST" action="{{ route('login') }}" class="">
                @csrf
        
                <!-- Email Address -->
                <div>
                    <label for="email" class="form-label">
                        Email
                    </label>
                    <input class="form-control" type="email" id="email" name="email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

                </div>
        
                <!-- Password -->
                <div class="mt-4">
                    <label for="password" class="form-label">
                        Password
                    </label>
                    <input class="form-control" type="password" id="password" name="password">
                </div>
        
                <!-- Remember Me -->
                <div class="mt-4">
                    <label for="remember_me" class="form-label">
                        <input class="form-check-input me-1" id="remember_me" type="checkbox" name="remember">
                        <span class="form-check-label">Remember me</span>
                    </label>
                </div>
        
                <div class="mt-4">
                    @if (Route::has('password.request'))

                        <a href="{{ route('password.request') }}" class="forgot-link">
                            {{ __('Forgot your password?') }}
                        </a>
                        
                    @endif
        
                    <button type="submit" class="btn btn-primary ms-3">
                        Log in
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
