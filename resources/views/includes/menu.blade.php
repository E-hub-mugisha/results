<!-- Top Header -->
<header class="top-header">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-9 col-md-9">
                <div class="header-left">
                    <ul>
                        <li>
                            <i class='flaticon-phone-call'></i>
                            <a href="tel:+250781044118">Call on: +250 781 044 118</a>
                        </li>
                        <li>
                            <i class='flaticon-time'></i>
                            Open Hours: Mon-Fri 08:00 AM - 10:00 PM
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-3">
                <div class="header-right">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class='flaticon-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/" target="_blank">
                                <i class='flaticon-twitter'></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/" target="_blank">
                                <i class='flaticon-linkedin'></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class='flaticon-instagram'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Top Header End -->

<!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="mobile-responsive-nav">
        <div class="container">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a href="{{ route('home')}}">
                        <img src="{{ asset('assets/images/logo-red.png') }}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="desktop-nav nav-area desktop-nav-two">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" href="{{ route('home')}}">
                    <img src="{{ asset('assets/images/logo-red.png') }}" alt="Logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="{{ route('home')}}" class="nav-link active">
                                HOME
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('about')}}" class="nav-link">
                                ABOUT US
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('user.shops')}}" class="nav-link">
                                SHOP
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('home.blogs')}}" class="nav-link">
                                BLOG
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('user.contact') }}" class="nav-link">
                                CONTACT US
                            </a>
                        </li>
                    </ul>

                    <div class="others-options d-flex align-items-center">
                        <div class="optional-item">
                            <div class="search-btn">
                                <a class="#" href="#searchmodal" data-bs-toggle="modal" data-bs-target="#searchmodal">
                                    <i class='flaticon-loupe'></i>
                                </a>
                            </div>
                        </div>
                        <div class="optional-item">
                            <a class="optional-item-cart" href="cart.html">
                                <i class='flaticon-shopping-cart'></i>
                                <span>2</span>
                            </a>
                        </div>

                        <div class="optional-item">
                            <div class="side-menu">
                                <a class="#" href="#sidebarmodal" data-bs-toggle="modal" data-bs-target="#sidebarmodal">
                                    <i class="ri-menu-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="mobile-nav">
                        <div class="mobile-other d-flex align-items-center">
                            <div class="optional-item">
                                <div class="search-btn">
                                    <a class="#" href="#searchmodal" data-bs-toggle="modal" data-bs-target="#searchmodal">
                                        <i class='flaticon-loupe'></i>
                                    </a>
                                </div>
                            </div>

                            <div class="optional-item">
                                <a class="optional-item-cart color-ffffff" href="cart.html">
                                    <i class='flaticon-shopping-cart'></i>
                                    <span>2</span>
                                </a>
                            </div>

                            <div class="optional-item">
                                <div class="side-menu">
                                    <a class="#" href="#sidebarmodal" data-bs-toggle="modal" data-bs-target="#sidebarmodal">
                                        <i class="ri-menu-line"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->

<!-- Modal Start -->
<div class="modal fade fade-scale searchmodal" id="searchmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal">
                    <i class="ri-close-line"></i>
                </button>
            </div>
            <div class="modal-body">
                <form class="modal-search-form">
                    <input type="search" class="search-field" placeholder="Search...">
                    <button type="submit"><i class="ri-search-line"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal End -->

<!-- Sidebar Modal -->
<div class="sidebarmodal modal right fade" id="sidebarmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-between">
                <div class="sidebar-logo">
                    <img src="assets/images/logos/logo-2.png" alt="Image">
                </div>

                <button type="button" class="close" data-bs-dismiss="modal">
                    <i class="ri-close-line"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="sidebar-about">
                    <h3>About Us</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut tur incidunt ut labore et
                    </p>
                </div>
                <div class="contact-us">
                    <h3>Contact Information</h3>
                    <ul class="contact-item">
                        <li>
                            <i class="ri-phone-line"></i>
                            <div class="content">
                                <h4>Office Address</h4>
                                <p>4252 Stanton Hollow Road,New York USA</p>
                            </div>
                        </li>

                        <li>
                            <i class="ri-message-2-line"></i>
                            <div class="content">
                                <h4>Call Us</h4>
                                <p><a href="tel:+1(044)123456789">+1 (044) 123 456 789</a></p>
                            </div>
                        </li>
                        <li>
                            <i class="ri-map-pin-line"></i>
                            <div class="content">
                                <h4>Email Us</h4>
                                <p><a href="https://templates.hibotheme.com/cdn-cgi/l/email-protection#630a0d050c23040c0f020d4d000c0e"><span class="__cf_email__" data-cfemail="7e171018113e1911121f10501d1113">[email&#160;protected]</span></a></p>
                            </div>
                        </li>
                        <li>
                            <i class="ri-time-line"></i>
                            <div class="content">
                                <h4>Office Open</h4>
                                <p>Sun - Fri (08AM - 10PM)</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="sidebar-follow-us">
                    <h3>Follow Us</h3>
                    <ul class="social-wrap">
                        <li>
                            <a href="https://twitter.com/?lang=en" target="_blank">
                                <i class="flaticon-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="flaticon-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="flaticon-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/" target="_blank">
                                <i class="flaticon-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="sidebar-newsletter">
                    <h3>Newsletter</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices </p>
                    <div class="sidebar-newsletter-area">
                        <form class="sidebar-newsletter-form" data-toggle="validator" method="POST">
                            <input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL" required autocomplete="off">
                            <button class="subscribe-btn" type="submit">
                                <i class="flaticon-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Sidebar Modal -->