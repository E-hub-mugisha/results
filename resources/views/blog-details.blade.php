<x-guest-layout>
    {{-- Set the page title using the `@section` directive --}}
    @section('title', $detail->title)

    {{-- Breadcrumb Section --}}
    <section class="breadcrumb-area pt-180 pb-180 pt-md-120 pb-md-120 pt-xs-100 pb-xs-100 bg-fix"
        data-overlay="black"
        data-opacity="7"
        data-background="{{ asset('assets/img/bg/breadcrumb-bg-2.jpg')}}"
        style="background-image: url('assets/img/bg/breadcrumb-bg-2.jpg');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="breadcrumb-content">
                        {{-- Display the title --}}
                        <h3 class="title">{{ $detail->title }}</h3>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active">{{ $detail->title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    breadcrumb-area end    -->

    <!-- team-area start -->
    <div class="blog-standard-details-area pt-130 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="blog-standard-details-posts">
                        <div class="blog-details-wrap mb-40">
                            <div class="blog-thumb mb-35">
                                <a href="blog-details.html">
                                    <img src="assets/img/blog/blog-9.jpg" alt="blog">
                                </a>
                            </div>
                            <div class="blog-meta">
                                <span><i class="fas fa-calendar-alt"></i> {{ $detail->created_at->format('d M Y') }}</span>
                                <span><i class="far fa-comments"></i> Comments (1k)</span>
                            </div>
                            <div class="blog-title">
                                <h3>
                                {{ $detail->title}}
                                </h3>
                            </div>
                            <div class="blog-content">
                                <p>
                                    {!! $detail->content !!}
                                </p>
                                <div class="row mb-30">
                                    <div class="col-lg-6">
                                        <div class="author-quote mt-20">
                                            <h4>
                                                At vero eos et accusamu iusto odio dignissimos
                                                ducmus qui blanditiis praesenti luptatume deleniti atque corrupti
                                                dolores et quas molestias excepturi sint occaecati cupiditate non
                                                provident, similique sunt
                                            </h4>
                                            <div class="author-name">
                                                <h4>Bradley H. Rigsby</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="mt-20">
                                            Great explorer of the truth tter-builder of human
                                            happiness. No one rejects disl avoids psure itself, because it is
                                            plesure, but because thos who do not know how to pursue pleasure ratien
                                            ount quences that are extremely painful. No again is there anyone who
                                            loves or pursues or desires to obtain pain of itself, because it is pain
                                            but because occasicu stances occur in which toil and pain can procure
                                            him some great pleasure take
                                        </p>
                                    </div>
                                </div>
                                <div class="row mb-30">
                                    <div class="col-md-6">
                                        <div class="blog-tag">
                                            <h4>Tags:</h4>
                                            <ul>
                                                <li><a href="#"></a><a href="#">GYM</a></li>
                                                <li><a href="#"></a><a href="#">Yoga</a></li>
                                                <li><a href="#"></a><a href="#">Fitness</a></li>
                                                <li><a href="#"></a><a href="#">Body</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blog-share">
                                            <h4>Share :</h4>
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-author">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="author-thumb">
                                            <img src="assets/img/author/author-lg-4.jpg" alt="Author">
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="author-details">
                                            <h4>{{ $detail->author->name }}</h4>
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="related-news mt-60">
                                <h3>Related News</h3>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="related-news-wrap">
                                            <h4><a href="#">Mixing Tangible &amp; Intangible Interfaces Using Adobe</a></h4>
                                            <div class="news-meta">
                                                <span><i class="far fa-user"></i> Soamlia</span>
                                                <span><i class="fas fa-calendar-alt"></i> 20 Jan 2020</span>
                                                <span><i class="far fa-comments"></i> (1k)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="related-news-wrap">
                                            <h4><a href="#">Mixing Tangible &amp; Intangible Interfaces Using Adobe</a></h4>
                                            <div class="news-meta">
                                                <span><i class="far fa-user"></i> Soamlia</span>
                                                <span><i class="fas fa-calendar-alt"></i> 20 Jan 2020</span>
                                                <span><i class="far fa-comments"></i> (1k)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <!-- <div class="blog-comments mt-60">
                            <div class="blog-comments-title mb-30">
                                <h4>Comments</h4>
                            </div>
                            <div class="latest-comments">
                                <ul>
                                    <li>
                                        <div class="comments-box">
                                            <div class="comments-avatar">
                                                <img src="assets/img/author/author-5.jpg" alt="author-thumb">
                                            </div>
                                            <div class="comments-text">
                                                <div class="comments-author-name">
                                                    <h5>David Angel Makel</h5>
                                                    <span>Web Designer</span>
                                                </div>
                                                <p>
                                                    It is a long established fact that a reader will be distracted by
                                                    the readable content of a page when looking at its layout. The point
                                                    of using Lorem Ipsum that more-or-less normal distribution letters,
                                                    as opposed to using
                                                </p>
                                                <a href="#" class="replay">
                                                    Reply Comments <i class="fas fa-long-arrow-alt-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="comments-reply">
                                            <li>
                                                <div class="comments-box">
                                                    <div class="comments-avatar">
                                                        <img src="assets/img/author/author-6.jpg" alt="author-thumb">
                                                    </div>
                                                    <div class="comments-text">
                                                        <div class="comments-author-name">
                                                            <h5>Michel Rason Roy</h5>
                                                            <span>Product Engineer</span>
                                                        </div>
                                                        <p>
                                                            It is a long established fact that a reader will be
                                                            distracted the readable of a page when looking at its
                                                            layout. The point ousing that it has a more-or-less normal
                                                            distribution letters
                                                        </p>
                                                        <a href="#" class="replay">
                                                            Reply Comments <i class="fas fa-long-arrow-alt-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="comments-box">
                                            <div class="comments-avatar">
                                                <img src="assets/img/author/author-7.jpg" alt="author-thumb">
                                            </div>
                                            <div class="comments-text">
                                                <div class="comments-author-name">
                                                    <h5>David Angel Makel</h5>
                                                    <span>Assistant Manager</span>
                                                </div>
                                                <p>
                                                    It is a long established fact that a reader will be distracted by
                                                    the readable content of a when looking at its layout. The point of
                                                    using Lorem Ipsum that more-or-less normal distribution of letters,
                                                    as opposed to using Content here, content ktop publishing packages
                                                    and web page editors
                                                </p>
                                                <a href="#" class="replay">
                                                    Reply Comments <i class="fas fa-long-arrow-alt-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                        <div class="blog-comment-form mt-60 mb-md-60 mb-xs-60">
                            <div class="blog-comments-title mb-30">
                                <h4>Leave A Reply</h4>
                            </div>
                            <div class="comment-form">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="input-wrap input-icon icon-name">
                                                <input type="text" name="name" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-wrap input-icon icon-email">
                                                <input type="email" name="mail" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-wrap input-icon icon-msg">
                                                <textarea name="message" placeholder="Your Message" spellcheck="false"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button class="btn btn-gra" type="submit">
                                                send reply
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-10">
                    <div class="sidebar-area">
                        <div class="widget-wrap recent-post-widget mb-30">
                            <h3 class="widget-title">Recent News</h3>
                            @foreach( $rPosts as $post)
                            <div class="recent-post-wrap">
                                <img src="{{ asset('assets/img/widget/widget-blog-1.jpg')}}" alt="widget">
                                <h4>
                                    <a href="{{ route('post.details', $post->title )}}">
                                    {{ Str::limit($post->title, 20)}}
                                    </a>
                                </h4>
                            </div>
                            @endforeach
                        </div>
                        <div class="widget-wrap category-widget mb-30">
                            <h3 class="widget-title">Category</h3>
                            <ul>
                                <li><a href="#">Fitness &amp; GYM</a></li>
                                <li><a href="#">Beauty &amp; Spa</a></li>
                                <li><a href="#">Food &amp; Medicine</a></li>
                                <li><a href="#">Dumbbelling</a></li>
                                <li><a href="#">Boxing &amp; Caradio</a></li>
                                <li><a href="#">Cycling GYM</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team-area end -->

    </x-guest-layout>