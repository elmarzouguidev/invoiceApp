@extends('layouts.guest')

@section('content')
    <div class="app-auth-branding mb-4"><a class="app-logo" href="#"><img class="logo-icon me-2"
                src="{{ asset('assets/images/app-logo.svg') }}" alt="logo"></a></div>
    <h2 class="auth-heading text-center mb-5">Log in to InvoiceApp</h2>
    <div class="auth-form-container text-start">
        @include('layouts.parts.__messages')
        <form class="auth-form login-form" action="{{ route('auth:loginPost') }}" method="post">
            @csrf
            @honeypot
            <div class="email mb-3">
                <label class="sr-only" for="signin-email">Email</label>
                <input id="signin-email" name="email" type="email"
                    class="form-control signin-email @error('email') is-invalid @enderror" placeholder="Email address"
                    required="required">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <!--//form-group-->
            <div class="password mb-3">
                <label class="sr-only" for="signin-password">Password</label>
                <input id="signin-password" name="password" type="password"
                    class="form-control signin-password @error('password') is-invalid @enderror" placeholder="Password"
                    required="required">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="extra mt-3 row justify-content-between">
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="RememberPassword"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="RememberPassword">
                                Remember me
                            </label>
                        </div>
                    </div>
                    <!--//col-6-->
                    <div class="col-6">
                        @if (Route::has('password.request'))
                            <div class="forgot-password text-end">
                                <a href="reset-password.html">Forgot password?</a>
                            </div>
                        @endif
                    </div>
                    <!--//col-6-->
                </div>
                <!--//extra-->
            </div>
            <!--//form-group-->
            <div class="text-center">
                <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Log In</button>
            </div>
        </form>
    </div>
    <!--//auth-form-container-->
@endsection
