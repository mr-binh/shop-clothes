@extends('client.layouts.main')
@section('tile', __('page.faq'))
@section('client.content')
    <div class="faq-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="faq-sidebar">
                        <div class="faq-sidebar-top">
                            <h4>CUSTOMER SERVICE</h4>
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna qua tellus erat.</p>
                            <div class="faq-contact">
                                <h5>Contact us, with any help ?</h5>
                                <ul>
                                    <li><a href="tel:269333050108">(269) 333-05-0108</a></li>
                                    <li><a
                                            href="https://demo.egenslab.com/cdn-cgi/l/email-protection#60090e060f131510100f1214200518010d100c054e030f0d"><span
                                                class="__cf_email__"
                                                data-cfemail="4821262e273b3d3838273a3c082d30292538242d662b2725">[email&#160;protected]</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="faq-form-wrap">
                            <form action="#" method="POST" id="faq-form">
                                <h5>Ask any Question?</h5>
                                <p>Your email address will not be published. Required fields are marked *</p>
                                <div class="review-input-group">
                                    <label for="fname">First Name</label>
                                    <input type="text" name="fname" id="fname" placeholder="Your first name">
                                </div>
                                <div class="review-input-group">
                                <textarea name="review-area" id="faq-area" cols="30" rows="7"
                                          placeholder="Your message"></textarea>
                                </div>
                                <div class="submit-btn">
                                    <input type="submit" value="Send Now">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="faq-accordions">
                        <h5>General FAQ</h5>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                                            aria-controls="flush-collapseOne">
                                        How to remove the impurities of Graphene oxide?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Any payment gateway that a subscription business chooses
                                        will need to be integrated with their checkout pages and billing system.There
                                        are a variety of different technologies
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                            aria-controls="flush-collapseTwo">
                                        How long will delivery take?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Any payment gateway that a subscription business chooses
                                        will need to be integrated with their checkout pages and billing system. here
                                        are a variety of different technologies
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                                            aria-controls="flush-collapseThree">
                                        MRI compatible touch tablet?
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Any payment gateway that a subscription business chooses
                                        will need to be integrated with their checkout pages and billing system. There
                                        are a variety of different technologies
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingfour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapsefour" aria-expanded="false"
                                            aria-controls="flush-collapsefour">
                                        Questionnaire on online shopping behavior during COVID-19.
                                    </button>
                                </h2>
                                <div id="flush-collapsefour" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Any payment gateway that a subscription business chooses
                                        will need to be integrated with their checkout pages and billing system.There
                                        are a variety of different technologies
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingsix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapsesix" aria-expanded="false"
                                            aria-controls="flush-collapsesix">
                                        Tellus ridicdiam eleifend id ullamcorper?
                                    </button>
                                </h2>
                                <div id="flush-collapsesix" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingsix" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Any payment gateway that a subscription business chooses
                                        will need to be integrated with their checkout pages and billing system. There
                                        are a variety of different technologies
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingfive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapsefive" aria-expanded="false"
                                            aria-controls="flush-collapsefive">
                                        Questionnaire on online shopping behavior during COVID-19.
                                    </button>
                                </h2>
                                <div id="flush-collapsefive" class="accordion-collapse collapse"
                                     aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Any payment gateway that a subscription business chooses
                                        will need to be integrated with their checkout pages and billing system. There
                                        are a variety of different technologies
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-accordions">
                        <h5>General FAQ</h5>
                        <div class="accordion accordion-flush" id="accordionFlushExample2">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapse1" aria-expanded="false"
                                            aria-controls="flush-collapse1">
                                        How to remove the impurities of Graphene oxide?
                                    </button>
                                </h2>
                                <div id="flush-collapse1" class="accordion-collapse collapse"
                                     aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body">Any payment gateway that a subscription business chooses
                                        will need to be integrated with their checkout pages and billing system.There
                                        are a variety of different technologies
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapse2" aria-expanded="false"
                                            aria-controls="flush-collapse2">
                                        How long will delivery take?
                                    </button>
                                </h2>
                                <div id="flush-collapse2" class="accordion-collapse collapse"
                                     aria-labelledby="flush-heading2" data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body">Any payment gateway that a subscription business chooses
                                        will need to be integrated with their checkout pages and billing system. here
                                        are a variety of different technologies
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapse3" aria-expanded="false"
                                            aria-controls="flush-collapse3">
                                        MRI compatible touch tablet?
                                    </button>
                                </h2>
                                <div id="flush-collapse3" class="accordion-collapse collapse"
                                     aria-labelledby="flush-heading3" data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body">Any payment gateway that a subscription business chooses
                                        will need to be integrated with their checkout pages and billing system. There
                                        are a variety of different technologies
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapse5" aria-expanded="false"
                                            aria-controls="flush-collapse5">
                                        Questionnaire on online shopping behavior during COVID-19.
                                    </button>
                                </h2>
                                <div id="flush-collapse5" class="accordion-collapse collapse"
                                     aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body">Any payment gateway that a subscription business chooses
                                        will need to be integrated with their checkout pages and billing system.There
                                        are a variety of different technologies
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading6">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapse6" aria-expanded="false"
                                            aria-controls="flush-collapse6">
                                        Tellus ridicdiam eleifend id ullamcorper?
                                    </button>
                                </h2>
                                <div id="flush-collapse6" class="accordion-collapse collapse"
                                     aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body">Any payment gateway that a subscription business chooses
                                        will need to be integrated with their checkout pages and billing system. There
                                        are a variety of different technologies
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading9">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapse4" aria-expanded="false"
                                            aria-controls="flush-collapse4">
                                        Questionnaire on online shopping behavior during COVID-19.
                                    </button>
                                </h2>
                                <div id="flush-collapse4" class="accordion-collapse collapse"
                                     aria-labelledby="flush-heading9" data-bs-parent="#accordionFlushExample2">
                                    <div class="accordion-body">Any payment gateway that a subscription business chooses
                                        will need to be integrated with their checkout pages and billing system. There
                                        are a variety of different technologies
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
