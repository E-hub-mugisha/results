<x-guest-layout>
    @section('title','Blogs')

    <!--    breadcrumb-area start    -->
    <section class="breadcrumb-area pt-180 pb-180 pt-md-120 pb-md-120 pt-xs-100 pb-xs-100 bg-fix" data-overlay="black" data-opacity="7" data-background="assets/img/bg/breadcrumb-bg-2.jpg" style="background-image: url(&quot;assets/img/bg/breadcrumb-bg-2.jpg&quot;);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="breadcrumb-content">
                        <h3 class="title">Blogs</h3>
                        <ul>
                            <li><a href="{{ route('home')}}">Home</a></li>
                            <li class="active">Blogs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    breadcrumb-area end    -->

    <!-- team-area start -->
    <div class="blog-content-area pt-130 pb-130">
        <div class="container">
            <div class="row">
                @foreach( $posts as $post )
                <div class="col-xl-4 col-md-6">
                    <div class="blog-wrap-2 mb-30">
                        <div class="blog-thumb mb-35">
                            <a href="{{ route('post.details', $post->title )}}">
                                <img src="assets/img/blog/blog-2.jpg" alt="blog">
                            </a>
                        </div>
                        <div class="blog-meta">
                            <span><i class="fas fa-calendar-alt"></i> {{ $post->created_at->format('d M Y') }}</span>
                            <span><i class="far fa-comments"></i> Comments (1k)</span>
                        </div>
                        <div class="blog-content">
                            <h3>
                                <a href="{{ route('post.details', $post->title )}}">
                                {{ Str::limit($post->title, 50)}}
                                </a>
                            </h3>

                            <a href="{{ route('post.details', $post->title )}}" class="read-more">
                                Read more <i class="fas fa-angle-double-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-xl-12 text-center">
                    <div class="blog-pagination mt-50">
                        <ul>
                            <li>
                                <a class="prev page-numbers" href="#">
                                    <i class="fas fa-angle-double-left"></i>
                                </a>
                            </li>
                            <li><span class="page-numbers current">01</span></li>
                            <li><a class="page-numbers" href="blog.html">02</a></li>
                            <li><a class="page-numbers" href="blog.html">03</a></li>
                            <li>
                                <a class="next page-numbers" href="blog.html">
                                    <i class="fas fa-angle-double-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



</x-guest-layout>