@extends('layouts.guest')
@section('title', 'Blog')
@section('content')

<!-- Inner Banner -->
<div class="inner-banner inner-bg4">
    <div class="container">
        <div class="inner-title">
            <h3>Blog Grid</h3>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Blog Grid</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Banner End -->

<!-- Blog Area -->
<div class="blog-page-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center mb-45">
            <span>OUR BLOG</span>
            <h2 class="m-auto">Check Our Latest News & Articles</h2>
        </div>

        <div class="row">
            @forelse($blogs as $blog)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="blog-item">
                        <a href="{{ route('home.blog-show', $blog->slug) }}">
                            <img src="{{ asset('storage/blogs/' . $blog->image) }}" alt="{{ $blog->title }}" class="img-fluid rounded">
                        </a>
                        <div class="content">
                            <ul>
                                <li>
                                    <i class="flaticon-user"></i>
                                    <a href="#">{{ $blog->author ?? 'Admin' }}</a>
                                </li>
                                <li>
                                    <i class="flaticon-time"></i>
                                    {{ $blog->created_at->format('M d, Y') }}
                                </li>
                            </ul>
                            <h3>
                                <a href="{{ route('home.blog-show', $blog->slug) }}">{{ Str::limit($blog->title, 60) }}</a>
                            </h3>
                            <a href="{{ route('home.blog-show', $blog->slug) }}" class="default-btn border-radius-5">
                                Read More <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p>No blog posts available at the moment.</p>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="col-lg-12 col-md-12 text-center">
            <div class="pagination-area">
                {{ $blogs->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>
<!-- Blog Area End -->

@endsection
