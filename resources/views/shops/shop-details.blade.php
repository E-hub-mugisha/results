@extends('layouts.guest')
@section('title', $product->name)
@section('content')

<!-- Inner Banner -->
<div class="inner-banner inner-bg11">
    <div class="container">
        <div class="inner-title">
            <h3>{{ $product->name }}</h3>
            <ul>
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>{{ $product->name }}</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Banner End -->

<!-- Product Details Area -->
<div class="product-details-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="product-details-image mb-30">
                    <img src="{{ $product->image ? asset($product->image) : asset('assets/images/products/product-details.jpg') }}" alt="{{ $product->name }}" />
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="product-desc mb-30 pl-20">
                    <h3>{{ $product->name }}</h3>
                    <div class="product-review">
                        <div class="rating">
                            @for ($i = 0; $i < 5; $i++)
                                @if($i < floor($product->rating ?? 0))
                                <i class="ri-star-fill"></i>
                                @elseif($i < ceil($product->rating ?? 0))
                                    <i class="ri-star-half-fill"></i>
                                    @else
                                    <i class="ri-star-line"></i>
                                    @endif
                                    @endfor
                        </div>
                        <div class="rating-count">({{ $product->reviews_count ?? 0 }} customer review)</div>
                    </div>
                    <div class="price">
                        @if($product->old_price ?? false)
                        <span class="old-price">${{ $product->old_price }}</span>
                        @endif
                        <span class="new-price">${{ $product->price }}</span>
                    </div>
                    <p>{{ $product->description }}</p>
                    <ul class="product-category-list">
                        <li><span>Category:</span> {{ $product->category }}</li>
                        <li><span>Brand:</span> {{ $product->brand }}</li>
                        <li><span>Stock:</span> {{ $product->stock }}</li>
                        <li><span>Status:</span> {{ $product->status }}</li>
                    </ul>

                    <div class="input-counter">
                        <span class="minus-btn"><i class="ri-subtract-line"></i></span>
                        <input type="text" value="1">
                        <span class="plus-btn"><i class="ri-add-line"></i></span>
                    </div>

                    <div class="product-add-btn">
                        <form action="{{ route('cart.add', $product->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="default-btn two border-radius-5">Add To Cart</button>
                        </form>

                        <a href="{{ route('checkout.index', $product->id) }}" class="default-btn border-radius-5">
                            Buy Now
                        </a>
                    </div>

                    <div class="product-share">
                        <ul>
                            <li><span>Share:</span></li>
                            <li><a href="https://twitter.com/?lang=en" target="_blank"><i class="flaticon-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/" target="_blank"><i class="flaticon-instagram"></i></a></li>
                            <li><a href="https://www.facebook.com/" target="_blank"><i class="flaticon-facebook"></i></a></li>
                            <li><a href="https://www.linkedin.com/" target="_blank"><i class="flaticon-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Details Area End -->

<!-- Shop Details Tab Area -->
<div class="shop-details-tab-area pb-70">
    <div class="container">
        <div class="tab shop-detls-tab">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="tabs">
                        <li>Description</li>
                        <li>Additional Information</li>
                        <li>Reviews <span>({{ $product->reviews_count ?? 0 }})</span></li>
                    </ul>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="tab_content current active">
                        <!-- Description Tab -->
                        <div class="tabs_item current">
                            <div class="shop-detls-tab-content">
                                <p>{{ $product->description }}</p>
                            </div>
                        </div>

                        <!-- Additional Info Tab -->
                        <div class="tabs_item">
                            <div class="shop-detls-tab-content">
                                <ul class="additional-information">
                                    <li><span>Brand:</span> {{ $product->brand }}</li>
                                    <li><span>Category:</span> {{ $product->category }}</li>
                                    <li><span>Stock:</span> {{ $product->stock }}</li>
                                    <li><span>Status:</span> {{ $product->status }}</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Reviews Tab -->
                        <div class="tabs_item">
                            <div class="shop-detls-tab-content">
                                <div class="shop-review-form">
                                    <h3>Customer Reviews</h3>
                                    <div class="review-title">
                                        <div class="rating">
                                            @for ($i = 0; $i < 5; $i++)
                                                @if($i < floor($product->rating ?? 0))
                                                <i class="ri-star-fill"></i>
                                                @elseif($i < ceil($product->rating ?? 0))
                                                    <i class="ri-star-half-fill"></i>
                                                    @else
                                                    <i class="ri-star-line"></i>
                                                    @endif
                                                    @endfor
                                        </div>
                                        <p>Based on {{ $product->reviews_count ?? 0 }} reviews</p>
                                        <a href="#review-form" class="default-btn btn-right">Write a Review <span></span></a>
                                    </div>

                                    <div class="review-comments">
                                        @foreach($product->reviews ?? [] as $review)
                                        <div class="review-item">
                                            <div class="content">
                                                <img src="{{ asset($review->user->avatar ?? 'assets/images/products/product-user1.jpg') }}" alt="Images">
                                                <div class="content-dtls">
                                                    <h4>{{ $review->user->name ?? 'Anonymous' }}</h4>
                                                    <span>{{ $review->created_at->format('d M, Y \A\t h:i A') }}</span>
                                                </div>
                                            </div>
                                            <div class="rating">
                                                @for ($i = 0; $i < 5; $i++)
                                                    @if($i < $review->rating)
                                                    <i class="ri-star-fill"></i>
                                                    @else
                                                    <i class="ri-star-line"></i>
                                                    @endif
                                                    @endfor
                                            </div>
                                            <p>{{ $review->comment }}</p>
                                        </div>
                                        @endforeach
                                    </div>

                                    <!-- Review Form -->
                                    <div class="review-form" id="review-form">
                                        <h4>Write a Review</h4>
                                        <form action="{{ route('reviews.store', $product->id) }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-6">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control" required placeholder="Your Name">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-sm-6">
                                                    <div class="form-group">
                                                        <input type="email" name="email" class="form-control" required placeholder="Your Email">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <textarea name="comment" class="form-control" cols="30" rows="8" required placeholder="Your Review"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12">
                                                    <button type="submit" class="default-btn border-radius-5">Post A Comment</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- End Review Form -->
                                </div>
                            </div>
                        </div>
                        <!-- End Reviews Tab -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Details Tab Area End -->

@endsection