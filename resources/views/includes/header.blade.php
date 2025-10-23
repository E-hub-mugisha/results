
<!-- Start Navbar Area -->
<div class="new-nav">
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
      <!-- Logo -->
      <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('assets/images/logo-black.jpg') }}" alt="Logo" height="90">
      </a>

      <!-- Mobile Toggle -->
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
        aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar Links -->
      <div class="collapse navbar-collapse" id="mainNavbar">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link active">HOME</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('about') }}" class="nav-link">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('user.shops') }}" class="nav-link">SHOP</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('home.blogs') }}" class="nav-link">BLOG</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('user.contact') }}" class="nav-link">CONTACT US</a>
          </li>
        </ul>

        <!-- CTA Button -->
        <div class="d-flex">
          <a href="{{ route('register') }}" class="default-btn border-radius-5">
            Get Started
          </a>
        </div>
      </div>
    </div>
  </nav>
</div>
<!-- End Navbar Area -->
