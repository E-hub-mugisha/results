<!-- Footer Area -->
<div class="footer-area">
    <div class="container ptb-100">
        <div class="newsletter-area">
            <div class="section-title text-center">
                <span>FOLLOW OUR COMMUNITY</span>
                <h2 class="m-auto">Unlock your potential and achieve your goals with personalized coaching and training programs</h2>
            </div>
        </div>
        <ul class="newsletter-social">
            <li>
                <a href="https://www.facebook.com/" target="_blank">
                    <i class='flaticon-facebook'></i>
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/" target="_blank">
                    <i class='flaticon-instagram'></i>
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
        </ul>
    </div>

    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5">
                    <ul class="copyright-list">
                        <li>
                            <a href="{{ route('about')}}">
                                About
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('user.shops')}}">
                                Shop
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('home.blogs')}}">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('user.contact') }}">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="copy-right-text">
                        <p>© <?php echo date("Y"); ?> {{ config('app.name')}} All Rights Reserved | Designed by <a href="https:homiez.rw" target="_blank">Homiez</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Area End -->