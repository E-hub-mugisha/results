@extends('layouts.guest')
@section('title', 'HOME')
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
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut elit tellus luctus nec ullamcorper mattis pulvinar dapibus leo consectetur adipiscing elit ut elit </p> -->
                        <a href="{{ route('about')}}" class="default-btn border-radius-5">Learn More <i class="flaticon-right-arrow"></i></a>
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
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut elit tellus luctus nec ullamcorper mattis pulvinar dapibus leo consectetur adipiscing elit ut elit </p> -->
                    <a href="{{ route('about')}}" class="default-btn border-radius-5">Learn More <i class="flaticon-right-arrow"></i></a>
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
        </div>
    </div>
    <!-- End Carousel Thumbs -->
</div>
<!-- Hero Slider Area End -->

<!-- Appointment Area -->
<div class="appointment-area ptb-100">
    <div class="container">
        <form action="{{ route('appointment.send') }}" method="POST" class="appointment-form">
            @csrf
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="name" class="form-control" required placeholder="Enter Full Name">
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control" required placeholder="Enter Email Address">
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Course</label>
                        <select name="course" class="form-select form-control" required>
                            <option selected disabled>Select Course</option>
                            @foreach($services as $service)
                            <option value="{{ $service->name }}">{{ $service->name }}</option>
                            @endforeach
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
                    <a href="{{ route('about')}}" class="default-btn border-radius-5">Learn More <i class="flaticon-right-arrow"></i></a>
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
                    <img src="assets/images/about-img/1.jpg" alt="About" />
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
                    <a href="{{ route('about')}}" class="default-btn border-radius-5">Join With Us <i class="flaticon-right-arrow"></i></a>
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
                    <a href="{{ route('about')}}" class="default-btn border-radius-5">Learn More <i class="flaticon-right-arrow"></i></a>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="about-img" data-tilt data-tilt-axis="x">
                    <style>
                        .video-wrap {

                            padding-top: 56.25%;
                            /* Maintain 16:9 aspect ratio */
                        }

                        .video-wrap .video-element {
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            object-fit: cover;
                            /* Ensures the video scales to cover the container */
                            background-color: black;
                            /* Optional: fallback background */
                        }
                    </style>
                    <div class="video-wrap mb--130">
                        <video autoplay loop muted playsinline class="video-element">
                            <source src="assets/video/video.mp4" type="video/mp4" />
                            Your browser does not support the video tag.
                        </video>
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
            <span>Our Classes</span>
            <h2 class="m-auto">Exclusive Services to Help You Build a Healthier Life</h2>
        </div>

        <div class="row">
            @foreach($services as $service)
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="classes-card-two" data-tilt data-tilt-full-page-listening>
                    <span class="service-tag">{{ $service->name }}</span>
                    <h3 class="text-white">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#serviceModal-{{ $service->id }}">
                            {{ $service->name }}
                        </a>
                    </h3>
                    <p>{{ Str::limit($service->description, 80) }}</p>
                    <div class="content">
                        <a href="#" class="classes-btn" data-bs-toggle="modal" data-bs-target="#serviceModal-{{ $service->id }}">
                            Join Today <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Classes Area End -->

<!-- Service Booking Modals -->
@foreach($services as $service)
<div class="modal fade" id="serviceModal-{{ $service->id }}" tabindex="-1" aria-labelledby="serviceModalLabel-{{ $service->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ url('/book-Training-session') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="serviceModalLabel-{{ $service->id }}">
                        Book Your Session: {{ $service->name }}
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body row g-3">
                    <div class="col-12">
                        <label for="email-{{ $service->id }}" class="form-label text-black">Email Address</label>
                        <input type="email" name="email" id="email-{{ $service->id }}" class="form-control" placeholder="Enter your email" required>
                    </div>

                    <div class="col-12">
                        <label for="title-{{ $service->id }}" class="form-label text-black">Session Title</label>
                        <input type="text" name="title" id="title-{{ $service->id }}" value="{{ $service->name }}" class="form-control" placeholder="Enter session title" required readonly>
                    </div>

                    <div class="col-md-6">
                        <label for="start_time-{{ $service->id }}" class="form-label text-black">Start Time</label>
                        <input type="datetime-local" name="start_time" id="start_time-{{ $service->id }}" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label for="end_time-{{ $service->id }}" class="form-label text-black">End Time</label>
                        <input type="datetime-local" name="end_time" id="end_time-{{ $service->id }}" class="form-control" required>
                    </div>

                    <input type="hidden" name="service_id" value="{{ $service->id }}">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Book Now</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach


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
            @foreach($blogs as $blog)
            <div class="blog-item">
                <a href="{{ route('home.blog-show', $blog->slug) }}">
                    <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" />
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