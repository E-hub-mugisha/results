@extends('layouts.guest')
@section('title', $blog->title)
@section('content')

<!-- Inner Banner -->
<div class="inner-banner inner-bg3">
    <div class="container">
        <div class="inner-title">
            <h3>{{ $blog->title }}</h3>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Blog Details</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Banner End -->

<!-- Blog Details Area -->
<div class="blog-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <!-- Blog Content -->
            <div class="col-lg-8">
                <div class="blog-details-content">
                    <h2 class="title">{{ $blog->title }}</h2>

                    @if($blog->image)
                        <div class="blog-preview-img">
                            <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}">
                        </div>
                    @endif

                    <ul class="tag-list">
                        <li><i class='flaticon-user'></i> By {{ $blog->author ?? 'Admin' }}</li>
                        <li><i class='flaticon-time'></i> {{ $blog->created_at->format('M d, Y') }}</li>
                    </ul>

                    <p>{!! nl2br(e($blog->content)) !!}</p>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="side-bar-area pl-20">
                    <div class="side-bar-widget">
                        <h3 class="title">Recent Posts</h3>
                        <div class="widget-popular-post">
                            @foreach($recentBlogs as $recent)
                                <article class="item">
                                    <a href="{{ route('home.blog-show', $recent->slug) }}" class="thumb">
                                        <span class="full-image cover" style="background-image:url('{{ asset($recent->image) }}')"></span>
                                    </a>
                                    <div class="info">
                                        <p>{{ $recent->created_at->format('M d, Y') }}</p>
                                        <h4 class="title-text">
                                            <a href="{{ route('home.blog-show', $recent->slug) }}">{{ $recent->title }}</a>
                                        </h4>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
