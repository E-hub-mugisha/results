<!--    header-area start    -->
<header class="header-area">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-xl-center">
            <div class="col-xl-2 col-lg-3 col-md-3 col-6">
                <div class="logo-area">
                    <a href="{{ route('home')}}"><img src="{{ asset('assets/img/logo/logo-r.png')}}" alt="Logo"></a>
                </div>
            </div>
            <div class="col-xl-8 d-xl-flex justify-content-center align-items-center d-none">
                <nav class="main-menu">
                    <ul>
                        <li>
                            <a href="{{ route('home')}}">HOME</a>
                        </li>
                        <li>
                            <a href="#about">ABOUT</a>
                        </li>
                        <li>
                            <a href="#programs">PROGRAMS</a>
                        </li>
                        <li>
                            <a href="#">Gallery</a>
                        </li>
                        <li>
                            <a href="{{ route('posts')}}">BLOG</a>
                        </li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                </nav>
                <div class="attr-menu">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-9 col-md-9 col-6 d-flex justify-content-end align-items-center">
                <div class="attr-menu d-none d-xl-none d-lg-inline-block d-md-inline-block pr-60">
                    <ul>
                        <li>
                            <a href="#" class="open-search"><i class="far fa-search"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="far fa-shopping-bag"></i></a>
                        </li>
                    </ul>
                </div>
                <a href="javascript:void(0);" class="hamburger-menu">
                    <div class="hamburger-btn">
                        <div class="hamburger-bar"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</header>
<!--    header-area end    -->

<!--    slide-bar start   -->
<aside class="slide-bar">
    <div class="close-mobile-menu">
        <a href="javascript:void(0);"><i class="fas fa-times"></i></a>
    </div>
    <nav class="side-mobile-menu">
        <ul id="mobile-menu-active">
            <li>
                <a href="/">HOME</a>
            </li>
            <li>
                <a href="#about">ABOUT</a>
            </li>
            <li>
                <a href="#programs">PROGRAMS</a>
            </li>
            <li>
                <a href="#">Gallery</a>
            </li>
            <li>
                <a href="#blog">BLOG</a>
            </li>
            <li>
                <a href="#contact">Contact</a>
            </li>
        </ul>
    </nav>

    <div class="sidebar-widget-wrapper">
        <div class="sidebar-widget logo-side">
            <a href="/">
                <img src="{{ asset('assets/img/logo/logo-r.png')}}" alt="logo" width="100px">
            </a>
        </div>

        <div class="sidebar-widget">
            <div class="info-wdget">
                <h4 class="widget-title">Address</h4>
                <p>
                    Kigali City, Rwanda
                </p>
            </div>
        </div>

        <div class="sidebar-widget">
            <div class="info-wdget">
                <h4 class="widget-title">Phone Number</h4>
                <p> +250 781 044 118</p>
            </div>
        </div>

        <div class="sidebar-widget">
            <div class="info-wdget">
                <h4 class="widget-title">Email Address</h4>
                <p> <a href="#" class="__cf_email__">nsenthos@gmail.com</a> </p>
            </div>
        </div>

        <div class="sidebar-widget">
            <div class="instagram">
                <a href="#">
                    <img src="{{ asset('assets/img/gallery/5.jpg')}}" alt="instagram" height="50px" width="50px">
                </a>
                <a href="#">
                    <img src="{{ asset('assets/img/gallery/9.jpg')}}" alt="instagram" height="50px" width="50px">
                </a>
                <a href="#">
                    <img src="{{ asset('assets/img/gallery/10.jpg')}}" alt="instagram" height="50px" width="50px">
                </a>
                <a href="#">
                    <img src="{{ asset('assets/img/gallery/11.jpg')}}" alt="instagram" height="50px" width="50px">
                </a>
                <a href="#">
                    <img src="{{ asset('assets/img/gallery/12.jpg')}}" alt="instagram" height="50px" width="50px">
                </a>
                <a href="#">
                    <img src="{{ asset('assets/img/gallery/13.jpg')}}" alt="instagram" height="50px" width="50px">
                </a>
            </div>
        </div>

        <div class="sidebar-widget">
            <div class="social-widget">
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                    <i class="fab fa-google-plus-g"></i>
                </a>
                <a href="#">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
</aside>
<div class="body-overlay"></div>
<!--    slide-bar End   -->