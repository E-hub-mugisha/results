<!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="mobile-responsive-nav">
        <div class="container">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a href="{{ route('home')}}">
                        <img src="assets/images/logos/small-white-logo.png" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="desktop-nav nav-area">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" href="{{ route('home')}}">
                    <img src="assets/images/logos/logo.png" alt="Logo">
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
                            <a href="#programs" class="nav-link">
                                PROGRAMS
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('user.shops')}}" class="nav-link">
                                SHOP
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('posts')}}" class="nav-link">
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