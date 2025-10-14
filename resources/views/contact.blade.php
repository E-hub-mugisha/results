@extends('layouts.guest')
@section('title', 'Lets Talk')
@section('content')

<!-- Inner Banner -->
<div class="inner-banner inner-bg2">
    <div class="container">
        <div class="inner-title">
            <h3>Contact Us</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Banner End -->

<!-- Contact Area -->
<div class="contact-area ptb-100">
    <div class="container">
        <div class="contact-max-width">
            <div class="section-title mb-45">
                <span>Feel free to reach out — we’d love to hear from you!</span>
                <h2>Send Us A Message</h2>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-form mr-20">
                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" name="fullName" id="fullName" class="form-control" required data-error="Please Enter Your Name" placeholder="Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required data-error="Please Enter Your Email" placeholder="Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" name="phone" id="phone" required data-error="Please Enter Your number" class="form-control" placeholder="Phone Number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" required data-error="Please Enter Your email" class="form-control" placeholder="Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" name="subject" id="subject" class="form-control" required data-error="Please Enter Your Subject" placeholder="Your Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="7" required data-error="Write your message" placeholder="Your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="agree-label">
                                        <input type="checkbox" id="chb1">
                                        <label for="chb1">
                                            Accept <a href="terms-condition.html">Terms & Conditions</a> And <a href="privacy-policy.html">Privacy Policy.</a>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">
                                        Send Message
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="contact-info">
                        <ul>
                            <li>
                                <div class="content">
                                    <i class="flaticon-location"></i>
                                    <div class="text">
                                        <h3>Office Address</h3>
                                        <p>Kigali city, Rwanda</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <i class="flaticon-phone-call"></i>
                                    <div class="text">
                                        <h3>Call Us</h3>
                                        <p><a href="tel:+250781044118">+250 781 044 118</a></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <i class="flaticon-paper-plane"></i>
                                    <div class="text">
                                        <h3>Email Us</h3>
                                        <p><a href="mailto:nsenthos@gmail.com"><span>nsenthos@gmail.com</span></a></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <i class="flaticon-time"></i>
                                    <div class="text">
                                        <h3>Office Open</h3>
                                        <p>Sun - Fri (08AM - 10PM)</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Widget Area End -->
@endsection