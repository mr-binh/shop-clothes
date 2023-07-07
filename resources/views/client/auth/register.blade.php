@extends('client.layouts.main')
@section('title', 'Register')
@section('client.content')
{{--    <div class="breadcrumb-area">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="breadcrumb-wrap">--}}
{{--                        <h3 class="page-title">Register</h3>--}}
{{--                        <ul class="page-switcher">--}}
{{--                            <li><a href="{{route('client.home.index')}}">Home <i class="bi bi-chevron-right"></i></a></li>--}}
{{--                            <li>Register</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="register-wrapper mt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="register-switcher text-center">
                        <a href="{{route('client.auth.register')}}" class="resister-btn active">Register</a>
                        <a href="{{route('client.auth.login')}}" class="login-btn">Login</a>
                    </div>
                </div>
            </div>
            <div class="row mt-100 justify-content-center">
                <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-10">
                    <div class="reg-login-forms">
                        <h4 class="reg-login-title text-center">
                            Register Your Account
                        </h4>
                        <form action="#" method="POST" id="register-form">
                            <div class="reg-input-group">
                                <label for="fname">First Name*</label>
                                <input type="text" id="fname" placeholder="Your first name" required>
                            </div>
                            <div class="reg-input-group">
                                <label for="lname">Last Name*</label>
                                <input type="text" id="lname" placeholder="Your last name" required>
                            </div>
                            <div class="reg-input-group">
                                <label for="email">Email *</label>
                                <input type="email" id="email" placeholder="Your email" required>
                            </div>
                            <div class="reg-input-group">
                                <label for="password">Password *</label>
                                <input type="password" id="password" placeholder="Enter a password" required>
                            </div>
                            <div class="reg-input-group">
                                <label for="sure-pass">Confirm Password *</label>
                                <input type="password" id="sure-pass" placeholder="Confirm password" required>
                            </div>
                            <div class="reg-input-group reg-check-input d-flex align-items-center">
                                <input type="checkbox" id="form-check" required>
                                <label for="form-check">I agree to the <a href="#">Terms & Policy</a></label>
                            </div>
                            <div class="reg-input-group reg-submit-input d-flex align-items-center">
                                <input type="submit" id="submite-btn" value="CREATE AN ACCOUNT">
                            </div>
                        </form>
                        <div class="reg-social-login">
                            <h5>or Signup WITH</h5>
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
