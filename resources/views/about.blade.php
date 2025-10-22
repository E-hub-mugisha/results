@extends('layouts.guest')
@section('title', 'Who We are')
@section('content')

<!-- Inner Banner -->
<div class="inner-banner inner-bg1">
    <div class="container">
        <div class="inner-title">
            <h3>About Us</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Banner End -->

<!-- About Area -->
<div class="about-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="about-img pr-20" data-tilt data-tilt-axis="x">
                    <div class="img1">
                        <img src="assets/images/about-img/6.jpg" alt="About" />
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
                    <a href="{{ route('about')}}" class="default-btn border-radius-5">Learn More <i class="flaticon-right-arrow"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Area End -->

<div class="banner-bottom-area pt-70 pb-70">
    <div class="container">
        <div class="section-title text-center mb-45">
            <h2 class="m-auto">We Offer Exclusive Program</h2>
        </div>

        <div class="row g-4 justify-content-center">
            @foreach($services as $service)
            <div class="col-lg-2 col-md-4 col-sm-6 d-flex">
                <div class="card text-center shadow-sm flex-fill banner-bottom aos-init aos-animate" data-aos="fade-up" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <i class="flaticon-kettlebell mb-3 fs-2"></i>
                            <h5 class="card-title fw-semibold">{{ $service->name }}</h5>
                            <p class="card-text small">{{ Str::limit($service->description, 50) }}</p>
                        </div>
                        <div class="mt-auto">
                            <img src="assets/images/shape/shape1.png" alt="Shape" class="img-fluid" style="width:50px; opacity:0.8;">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>



<!-- Testimonials Area -->
<div class="testimonials-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center mb-45">
            <span>TESTIMONIALS</span>
            <h2 class="m-auto">What Our Client Say About Us</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-6">
                <div class="testimonials-item">
                    <div class="rating">
                        <i class="flaticon-star"></i>
                        <i class="flaticon-star"></i>
                        <i class="flaticon-star"></i>
                        <i class="flaticon-star"></i>
                        <i class="flaticon-star"></i>
                    </div>
                    <p>At vero eos et accusamus et iusto odio digni goikussimos ducimus qui to bonfoe blanditiis praese. Ntium voluum deleniti atque corrupti quos. of a page a reload when look</p>
                    <h3>Alexander Mason</h3>
                    <span>Gym Manager</span>
                </div>
            </div>

            <div class="col-lg-4 col-6">
                <div class="testimonials-item">
                    <div class="rating">
                        <i class="flaticon-star"></i>
                        <i class="flaticon-star"></i>
                        <i class="flaticon-star"></i>
                        <i class="flaticon-star"></i>
                        <i class="flaticon-star"></i>
                    </div>
                    <p>At vero eos et accusamus et iusto odio digni goikussimos ducimus qui to bonfoe blanditiis praese. Ntium voluum deleniti atque corrupti quos. of a page a reload when look</p>
                    <h3>Natalie Naomi</h3>
                    <span>Gym Founder</span>
                </div>
            </div>

            <div class="col-lg-4 col-6">
                <div class="testimonials-item">
                    <div class="rating">
                        <i class="flaticon-star"></i>
                        <i class="flaticon-star"></i>
                        <i class="flaticon-star"></i>
                        <i class="flaticon-star"></i>
                        <i class="flaticon-star"></i>
                    </div>
                    <p>At vero eos et accusamus et iusto odio digni goikussimos ducimus qui to bonfoe blanditiis praese. Ntium voluum deleniti atque corrupti quos. of a page a reload when look</p>
                    <h3>Eliana Brooklyn</h3>
                    <span>Gym Trainer</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonials Area End -->

<!-- Training Area -->
<div class="training-area pb-100">
    <div class="container">
        <div class="training-content">
            <div class="section-title">
                <h2>Are You Looking For a Personal Trainer For Training?</h2>
            </div>
            <a href="{{ route('about')}}" class="default-btn border-radius-5">Get Started <i class="flaticon-right-arrow"></i></a>
        </div>
    </div>
</div>
<!-- Training Area End -->

<!-- Blog Area -->
<div class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center mb-45">
            <span>OUR BLOG</span>
            <h2 class="m-auto">Check Our Latest News & Articles</h2>
        </div>

        <div class="blog-slider owl-carousel owl-theme">
            @foreach($blogs as $blog)
            <div class="blog-item">
                <a href="{{ route('home.blog-show', $blog->slug) }}">
                    <img src="{{ asset('images/blog/' . $blog->image) }}" alt="{{ $blog->title }}" />
                </a>
                <div class="content">
                    <ul>
                        <li><i class="flaticon-user"></i> <a href="#">{{ $blog->author ?? 'Admin' }}</a></li>
                        <li><i class="flaticon-time"></i> {{ $blog->created_at->format('M d, Y') }}</li>
                    </ul>
                    <h3>
                        <a href="{{ route('home.blog-show', $blog->slug) }}">
                            {{ Str::limit($blog->title, 60) }}
                        </a>
                    </h3>
                    <a href="{{ route('home.blog-show', $blog->slug) }}" class="default-btn border-radius-5">
                        Read More <i class="flaticon-right-arrow"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Blog Area End -->
@endsection