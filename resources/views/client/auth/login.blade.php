@extends('client.layouts.main')
@section('title', 'Login')
@section('client.content')
{{--    <div class="breadcrumb-area">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="breadcrumb-wrap">--}}
{{--                        <h3 class="page-title">Login</h3>--}}
{{--                        <ul class="page-switcher">--}}
{{--                            <li><a href="index-2.html">Home <i class="bi bi-chevron-right"></i></a></li>--}}
{{--                            <li>Login</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="register-wrapper mt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="register-switcher text-center">
                        <a href="{{route('client.auth.register')}}" class="resister-btn">Register</a>
                        <a href="{{route('client.auth.login')}}" class="login-btn active">Login</a>
                    </div>
                </div>
            </div>
            <div class="row mt-100 justify-content-center">
                <div class="col-xxl-6 col-xl-6 col-lg-8">
                    <div class="reg-login-forms">
                        <h4 class="reg-login-title text-center">
                            Login Your Account
                        </h4>
                        <form action="#" method="POST" id="login-form">
                            <div class="reg-input-group">
                                <label for="fname">User Name *</label>
                                <input type="text" id="fname" placeholder="Your first name" required>
                            </div>
                            <div class="reg-input-group">
                                <label for="password">Password *</label>
                                <input type="password" id="password" placeholder="Enter your password" required>
                            </div>
                            <div class="password-recover-group d-flex justify-content-between flex-wrap">
                                <div class="reg-input-group reg-check-input d-flex align-items-center">
                                    <input type="checkbox" id="form-check" required>
                                    <label for="form-check">Remember Me</label>
                                </div>
                                <div class="forgot-password-link">
                                    <a href="#">Forgotten password?</a>
                                </div>
                            </div>
                            <div class="reg-input-group reg-submit-input d-flex align-items-center">
                                <input type="submit" id="submite-btn" value="LOG IN">
                            </div>
                        </form>
                        <div class="reg-social-login">
                            <h5>or login WITH</h5>
                            <ul class="social-login-options">
                                <li><a href="#" class="facebook-login"><i class="flaticon-facebook-app-symbol"></i> Sign
                                        up whit facebook</a></li>
                                <li><a href="#" class="google-login"><i class="flaticon-pinterest-1"></i> Signup whit
                                        google</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
