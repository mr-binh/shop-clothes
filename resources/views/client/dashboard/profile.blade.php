@extends('client.layouts.main')
@section('title','Profile')
@section('client.content')
    @include('client.dashboard.aside')
                <div class="col-xl-8 col-lg-8">
                    <div class="profile-form-wrapper">
                        <h5>Profile</h5>
                        <div class="profile-top">
                            <div class="user-image">
                                <img src="assets/images/profil-img.png" alt>
                                <div class="prifil-change-icon">
                                    <i class="bi bi-camera"></i>
                                </div>
                            </div>
                            <div class="profile-top-btns">
                                <a href="#" class="upload">Upload</a>
                                <a href="#" class="remove">Remove</a>
                            </div>
                        </div>
                        <form action="#" method="POST" id="profile-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="eg-input-group">
                                        <label for="fname">First Name*</label>
                                        <input type="text" id="fname" placeholder="Your first name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="eg-input-group">
                                        <label for="lname">Last Name*</label>
                                        <input type="text" id="lname" placeholder="Your last name" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="eg-input-group">
                                        <label for="email">Email *</label>
                                        <input type="email" id="email" placeholder="Your email" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="eg-input-group">
                                        <label for="Number">Contact Number *</label>
                                        <input type="tel" id="Number" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="eg-input-group">
                                        <label for="address">Address *</label>
                                        <input type="text" id="address" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="eg-input-group">
                                        <label for="city">City *</label>
                                        <select id="city">
                                            <option selected>Cumilla</option>
                                            <option value="1">Dhaka</option>
                                            <option value="2">Khulna</option>
                                            <option value="3">Bandarban</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="eg-input-group">
                                        <label for="state">State *</label>
                                        <select id="state">
                                            <option selected>Cumilla</option>
                                            <option value="1">Dhaka</option>
                                            <option value="2">Khulna</option>
                                            <option value="3">Bandarban</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="eg-input-group">
                                        <label for="zip">Zip Code * </label>
                                        <input type="number" id="zip" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="eg-input-group">
                                        <label for="country">Country *</label>
                                        <select id="country">
                                            <option selected>Bangladesh</option>
                                            <option value="1">Japan</option>
                                            <option value="2">Australia</option>
                                            <option value="3">Hawaii</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="eg-input-group">
                                        <label for="password">Password *</label>
                                        <input type="password" id="password" placeholder="Enter a password" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="eg-input-group">
                                        <label for="sure-pass">Confirm Password *</label>
                                        <input type="password" id="sure-pass" placeholder="Confirm password" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div
                                        class="eg-input-group profile-form-sumbit reg-submit-input d-flex align-items-center">
                                        <input type="submit" id="submite-btn" value="Save Change">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
