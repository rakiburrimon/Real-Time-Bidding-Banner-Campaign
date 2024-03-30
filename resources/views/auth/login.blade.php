@extends('layouts.login')

@section('title', 'Login')

@section('content')
    <!-- Content -->
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="index.html" class="app-brand-link gap-2">
                                <span class="app-brand-logo demo">
                                    {{--  <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">  --}}
                                        <!-- SVG content -->
                                    </svg>
                                </span>
                                <span class="app-brand-text demo text-body fw-bolder">{{ __('Login') }}</span>
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-2">Welcome 👋</h4>
                        <p class="mb-4">{{ __('Please sign-in to your account and start the adventure') }}</p>
                        <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email') }}</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="{{ __('Enter your email') }}" required autofocus />
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Password</label>
                                    {{--  <a href="auth-forgot-password-basic.html"><small>Forgot Password?</small></a>  --}}
                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" required />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">{{ __('Sign in') }}</button>
                            </div>
                        </form>
                        <p class="text-center">
                            <span>New on our platform?</span>
                            <a href="{{ route('register') }}"><span>{{ __('Create an account') }}</span></a>
                        </p>
                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>
    <!-- Core JS -->
    <script src="{{ asset('dist/js/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('dist/js/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap.js') }}"></script>
    <script src="{{ asset('dist/js/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('dist/js/menu.js') }}"></script>
    <!-- endbuild -->
    <!-- Vendors JS -->
    <!-- Main JS -->
    <script src="{{ asset('dist/js/main.js') }}"></script>
    <!-- Page JS -->
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
@endsection
