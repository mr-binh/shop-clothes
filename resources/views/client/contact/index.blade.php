@extends('client.layouts.main')
@section('title','Contact')
@section('client.content')
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <h3 class="page-title">Contact Us</h3>
                        <ul class="page-switcher">
                            <li><a href="index-2.html">Home <i class="bi bi-chevron-right"></i></a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-wrapper mt-110">
        <div class="container">
            <div class="row">
                <div class="section-header">
                    <h2>Nice Project? Get in touch! will contact you soon</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12 col-lg-12">
                    <div class="contact-form-wrapper">
                        <h3>Get In Touch</h3>
                        <p>Your email address will not be published. Required fields are marked *</p>
                        <form action="#" method="POST" class="contact-form" id="contact-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="review-input-group">
                                        <label for="fname">Your Full Name</label>
                                        <input type="text" name="fname" id="fname" placeholder="Your full name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="review-input-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" placeholder="Your email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="review-input-group">
                                    <textarea name="review-area" id="review-area" cols="30" rows="7"
                                              placeholder="Your message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="submit-btn">
                                        <input type="submit" value="Send Message">
                                    </div>
                                </div>
                            </div>
                            <p class="form-message"></p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="contact-cards row">
                <div class="col-lg-4">
                    <div class="contact-card">
                        <div class="card-batch">
                            <h5>Branch No 01</h5>
                        </div>
                        <ul class="contact-card-list">
                            <li>Address: 168/170, Ave 01, Mirpur DOHS, Bangladesh</li>
                            <li>Email: <a href="https://demo.egenslab.com/cdn-cgi/l/email-protection"
                                          class="__cf_email__"
                                          data-cfemail="2b42454d446b4e534a465b474e05484446">[email&#160;protected]</a>
                            </li>
                            <li>Phone: +02 1234 567 88</li>
                            <li>Web: www.yourwebsite.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-card">
                        <div class="card-batch">
                            <h5>Branch No 02</h5>
                        </div>
                        <ul class="contact-card-list">
                            <li>Address: 150 lane Nagano Sitijet National Park, Australia</li>
                            <li>Email: <a href="https://demo.egenslab.com/cdn-cgi/l/email-protection"
                                          class="__cf_email__"
                                          data-cfemail="81e8efe7eec1e4f9e0ecf1ede4afe2eeec">[email&#160;protected]</a>
                            </li>
                            <li>Phone: +02 1234 567 88</li>
                            <li>Web: www.yourwebsite.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-card">
                        <div class="card-batch">
                            <h5>Branch No 03</h5>
                        </div>
                        <ul class="contact-card-list">
                            <li>Address: 150/58 Fujimi Navana lane Sitijet Nagano Japan</li>
                            <li>Email: <a href="https://demo.egenslab.com/cdn-cgi/l/email-protection"
                                          class="__cf_email__"
                                          data-cfemail="6b02050d042b0e130a061b070e45080406">[email&#160;protected]</a>
                            </li>
                            <li>Phone: +02 1234 567 88</li>
                            <li>Web: www.yourwebsite.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
