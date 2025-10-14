@extends('layouts.guest')
@section('title', 'Home')
@section('content')

<!-- Hero Slider Area -->
<div class="hero-slider-area-two">
    <div class="hero-slider-two owl-carousel owl-theme" data-slider-id="1">
        <div class="hero-slider-item hero-slider-item-bg1">
            <div class="hero-slider-item-max">
                <div class="container-fluid">
                    <div class="hero-content hero-content-max">
                        <span>Real Time For Fitness</span>
                        <h1>Gym is The Best Place With Lots of Space</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut elit tellus luctus nec ullamcorper mattis pulvinar dapibus leo consectetur adipiscing elit ut elit </p>
                        <a href="about.html" class="default-btn border-radius-5">Learn More <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
                <div class="hero-triangle"></div>
            </div>

        </div>

        <div class="hero-slider-item hero-slider-item-bg2">
            <div class="container-fluid">
                <div class="hero-content hero-content-max">
                    <span>Real Time For Fitness</span>
                    <h1>A Reason of Your Health Join Today</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut elit tellus luctus nec ullamcorper mattis pulvinar dapibus leo consectetur adipiscing elit ut elit </p>
                    <a href="about.html" class="default-btn border-radius-5">Learn More <i class="flaticon-right-arrow"></i></a>
                </div>
            </div>
            <div class="hero-triangle"></div>
        </div>

        <div class="hero-slider-item hero-slider-item-bg3">
            <div class="container-fluid">
                <div class="hero-content hero-content-max">
                    <span>Real Time For Fitness</span>
                    <h1>People sharing Gym Gear and Tools</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut elit tellus luctus nec ullamcorper mattis pulvinar dapibus leo consectetur adipiscing elit ut elit </p>
                    <a href="about.html" class="default-btn border-radius-5">Learn More <i class="flaticon-right-arrow"></i></a>
                </div>
            </div>
            <div class="hero-triangle"></div>
        </div>
    </div>

    <!-- Start Carousel Thumbs -->
    <div class="thumbs-wrap">
        <div class="owl-thumbs hero-slider-thumb" data-slider-id="1">
            <div class="owl-thumb-item">
                <span>01</span>
            </div>

            <div class="owl-thumb-item">
                <span>02</span>
            </div>

            <div class="owl-thumb-item">
                <span>03</span>
            </div>
        </div>
    </div>
    <!-- End Carousel Thumbs -->
</div>
<!-- Hero Slider Area End -->

<!-- Appointment Area -->
<div class="appointment-area ptb-100">
    <div class="container">
        <form class="appointment-form">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control" required data-error="Please Enter Your Name" placeholder="Enter Full Name">
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" class="form-control" required data-error="Please Enter Your Name" placeholder="Enter Email Address">
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Course</label>
                        <select class="form-select form-control">
                            <option selected>Select Course</option>
                            <option value="1">Cardio Training</option>
                            <option value="2">Fitness Training</option>
                            <option value="3">Boxing Training</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-3">
                    <button type="submit" class="default-btn">
                        Get Appointment
                    </button>
                </div>
            </div>
        </form>
    </div>

</div>
<!-- Appointment Area End -->

<!-- About Area -->
<div class="about-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="about-img pr-20" data-tilt data-tilt-axis="x">
                    <div class="img1">
                        <img src="assets/images/about-img/about-img1.jpg" alt="About" />
                    </div>
                    <div class="img2">
                        <img src="assets/images/about-img/about-img2.jpg" alt="About" />
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="about-content">
                    <div class="section-title">
                        <span>ABOUT US</span>
                        <h2>Training That Transforms Lives</h2>
                        <p>
                            At Results Focused Fitness, we believe that training is more than just physical exercise — it’s a lifestyle that strengthens your mind, body, and spirit.
                        </p>
                        <p>
                            Our approach is rooted in personalized guidance, consistency, and holistic well-being.
                            We recognize that every person has unique strengths, goals, and challenges. Our mission is to help you unlock your full potential through motivation, education, and dedicated support.
                        </p>
                        <p>
                            Whether your goal is weight management, recovery, personal growth, or overall wellness — we’re here to guide you every step of the way.
                        </p>
                    </div>
                    <div class="about-list">
                        <ul>
                            <li><i class="flaticon-check"></i> One-on-one personalized sessions designed around your fitness level, goals, and schedule.</li>
                            <li><i class="flaticon-check"></i> A recovery and wellness platform that helps you heal, rebuild strength, and maintain balance.</li>
                            <li><i class="flaticon-check"></i> Accelerate recovery, reduce soreness, and enhance circulation with our guided ice bath therapy.</li>
                            <li><i class="flaticon-check"></i> A fun, disciplined martial arts program that builds focus, confidence, and self-defense skills.</li>
                            <li><i class="flaticon-check"></i> Dynamic group fitness classes suitable for all levels — train together, stay motivated, and have fun!</li>
                        </ul>
                    </div>
                    <a href="about.html" class="default-btn border-radius-5">Learn More <i class="flaticon-right-arrow"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Area End -->

<!-- About Area -->
<div class="about-area about-bg pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="about-img2 ml-20">
                    <img src="assets/images/about-img/about-img3.jpg" alt="About" />
                </div>
            </div>

            <div class="col-lg-5">
                <div class="about-content about-content-color">
                    <div class="section-title">
                        <span>Why Choose Us?</span>
                        <h2>We Use Experience To Achieve The Physique You Deserve</h2>
                        <p>
                            Join us today and start your transformation!
                        </p>
                    </div>
                    <div class="about-list">
                        <ul>
                            <li><i class="flaticon-check"></i> Tailored Programs – We customize every plan to match your goals, fitness level, and lifestyle.</li>
                            <li><i class="flaticon-check"></i> Expert Coaches – Our trainers are certified professionals with proven success records.</li>
                            <li><i class="flaticon-check"></i> Holistic Support – From nutrition tips to mental resilience, we focus on total well-being.</li>
                            <li><i class="flaticon-check"></i> Modern Facilities – Clean, safe, and equipped with everything you need to succeed.</li>
                        </ul>
                    </div>
                    <a href="about.html" class="default-btn border-radius-5">Join With Us <i class="flaticon-right-arrow"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Area End -->

<!-- About Area -->
<div class="about-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="about-content">
                    <div class="section-title">
                        <span>ABOUT US</span>
                        <h2>Training Is Very Important For Our Health, Our Approach</h2>
                        <p>
                            We believe that every individual possesses unique strengths, talents, and aspirations.
                            Our coaching approach is centered on personalized guidance and holistic support to help you harness your full potential.
                            Whether you're seeking career advancement, personal development, or enhanced well-being,
                            our experienced coaches are here to partner with you on your journey to success.
                        </p>
                    </div>
                    <a href="about.html" class="default-btn border-radius-5">Learn More <i class="flaticon-right-arrow"></i></a>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="about-img pr-20" data-tilt data-tilt-axis="x">
                    <div class="img1">
                        <img src="assets/images/about-img/about-img1.jpg" alt="About" />
                    </div>
                    <div class="img2">
                        <img src="assets/images/about-img/about-img2.jpg" alt="About" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Area End -->

<!-- Classes Area -->
<div class="classes-area classes-area-bg3 pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center mb-45">
            <span>CLASSES WE PROVIDE</span>
            <h2 class="m-auto">We Offer Exclusive Services To Build Health With Professionals</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-6">
                <div class="classes-card-two" data-tilt data-tilt-full-page-listening>
                    <span>Cardio Training</span>
                    <h3><a href="class-details.html">Boxing For Men & Women</a></h3>
                    <p>By Raimo V</p>
                    <div class="content">
                        <h4>$19.99 <del>$24.74</del></h4>
                        <a href="class-details.html" class="classes-btn">Join Today <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-6">
                <div class="classes-card-two" data-tilt data-tilt-full-page-listening>
                    <span>Fitness Training</span>
                    <h3><a href="class-details.html">Strength Training For Men</a></h3>
                    <p>By Scarlett </p>
                    <div class="content">
                        <h4>$30.99 <del>$36.74</del></h4>
                        <a href="class-details.html" class="classes-btn">Join Today <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-6">
                <div class="classes-card-two" data-tilt data-tilt-full-page-listening>
                    <span>Self Defense</span>
                    <h3><a href="class-details.html">Cardio Training For Women</a></h3>
                    <p>By Alex</p>
                    <div class="content">
                        <h4>$20.99 <del>$26.74</del></h4>
                        <a href="class-details.html" class="classes-btn">Join Today <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-6">
                <div class="classes-card-two" data-tilt data-tilt-full-page-listening>
                    <span>Strategic Training</span>
                    <h3><a href="class-details.html">Cardio & Strategic Self Defense</a></h3>
                    <p>By Scarlett</p>
                    <div class="content">
                        <h4>$27.99 <del>$30.74</del></h4>
                        <a href="class-details.html" class="classes-btn">Join Today <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-6">
                <div class="classes-card-two" data-tilt data-tilt-full-page-listening>
                    <span>Bodybuilding</span>
                    <h3><a href="class-details.html">Bodybuilding Training Sessions</a></h3>
                    <p>By Penelope</p>
                    <div class="content">
                        <h4>$28.99 <del>$33.74</del></h4>
                        <a href="class-details.html" class="classes-btn">Join Today <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-6">
                <div class="classes-card-two" data-tilt data-tilt-full-page-listening>
                    <span>Boxing</span>
                    <h3><a href="class-details.html">Boxing High Intensity Training</a></h3>
                    <p>By Eleanor </p>
                    <div class="content">
                        <h4>$24.99 <del>$32.74</del></h4>
                        <a href="class-details.html" class="classes-btn">Join Today <i class="flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Classes Area End -->

<section class="about-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7">
                <div class="about-content-4 mb-md-50 mb-xs-50">
                    <div class="about-content">
                        <div class="section-title">
                            <h2>
                                Our Valued Partner
                            </h2>
                        </div>
                        <p>
                            we are proud to collaborate with a diverse range of partners who share our
                            commitment to health and wellness.
                        </p>
                        <p>
                            We’re proud to collaborate with a wide range of partners who share our dedication to health, fitness, and community wellness.
                            Interested in partnering with us?
                        </p>
                        <a href="#contact" class="default-btn border-radius-5">
                            Partner with us <i class="fas fa-angle-double-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 align-self-center">
                <div class="about-thumb logo-brand mb-30">
                    <div class="row">
                        <div class="col-md-4 col-sm-2">
                            <img src="{{ asset('assets/images/brand/brand-1.png')}}" alt="brand"
                                style="width:100px">
                        </div>
                        <div class="col-md-4 col-sm-2">
                            <img src="{{ asset('assets/images/brand/brand-2.png')}}" alt="brand"
                                style="width:100px">
                        </div>
                        <div class="col-md-4 col-sm-2">
                            <img src="{{ asset('assets/images/brand/brand-3.png')}}" alt="brand"
                                style="width:100px">
                        </div>
                        <div class="col-md-4 col-sm-2">
                            <img src="{{ asset('assets/images/brand/brand-4.png')}}" alt="brand"
                                style="width:100px">
                        </div>
                        <div class="col-md-4 col-sm-2">
                            <img src="{{ asset('assets/images/brand/brand-5.png')}}" alt="brand"
                                style="width:100px">
                        </div>
                        <div class="col-md-4 col-sm-2">
                            <img src="{{ asset('assets/images/brand/brand-6.jpg')}}" alt="brand"
                                style="width:100px">
                        </div>
                        <div class="col-md-4 col-sm-2">
                            <img src="{{ asset('assets/images/brand/brand-7.jpg')}}" alt="brand"
                                style="width:100px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Area -->
<div class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center mb-45">
            <span>OUR BLOG</span>
            <h2 class="m-auto">Check Our Latest News & Articles</h2>
        </div>
        <div class="blog-slider owl-carousel owl-theme">
            <div class="blog-item">
                <a href="blog-details.html">
                    <img src="assets/images/blog/blog-img1.jpg" alt="Blog" />
                </a>
                <div class="content">
                    <ul>
                        <li><i class="flaticon-user"></i> <a href="author.html">By Alicia </a></li>
                        <li><i class="flaticon-time"></i> Dec 12, 2024</li>
                    </ul>
                    <h3><a href="blog-details.html">There Are Many Variations Of Passages Orem </a></h3>
                    <a href="blog-details.html" class="default-btn border-radius-5">Read More <i class="flaticon-right-arrow"></i></a>
                </div>
            </div>

            <div class="blog-item">
                <a href="blog-details.html">
                    <img src="assets/images/blog/blog-img2.jpg" alt="Blog" />
                </a>
                <div class="content">
                    <ul>
                        <li><i class="flaticon-user"></i> <a href="author.html">By Natalie</a></li>
                        <li><i class="flaticon-time"></i> Dec 19, 2024</li>
                    </ul>
                    <h3><a href="blog-details.html">The 10 Best Exercises to Do in Your Park</a></h3>
                    <a href="blog-details.html" class="default-btn border-radius-5">Read More <i class="flaticon-right-arrow"></i></a>
                </div>
            </div>

            <div class="blog-item">
                <a href="blog-details.html">
                    <img src="assets/images/blog/blog-img3.jpg" alt="Blog" />
                </a>
                <div class="content">
                    <ul>
                        <li><i class="flaticon-user"></i> <a href="author.html">By Brooklyn</a></li>
                        <li><i class="flaticon-time"></i> Dec 21, 2024</li>
                    </ul>
                    <h3><a href="blog-details.html">The Interesting Mental Health Benefits of Exercise</a></h3>
                    <a href="blog-details.html" class="default-btn border-radius-5">Read More <i class="flaticon-right-arrow"></i></a>
                </div>
            </div>

            <div class="blog-item">
                <a href="blog-details.html">
                    <img src="assets/images/blog/blog-img4.jpg" alt="Blog" />
                </a>
                <div class="content">
                    <ul>
                        <li><i class="flaticon-user"></i> <a href="author.html">By Eliana </a></li>
                        <li><i class="flaticon-time"></i> Dec 27, 2024</li>
                    </ul>
                    <h3><a href="blog-details.html">10 Tips How to Prepare Meals Fast and Easy</a></h3>
                    <a href="blog-details.html" class="default-btn border-radius-5">Read More <i class="flaticon-right-arrow"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Area End -->
@endsection