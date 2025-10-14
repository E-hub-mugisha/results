@extends('layouts.guest')
@section('title', 'Products')
@section('content')

<!-- Inner Banner -->
<div class="inner-banner inner-bg10">
    <div class="container">
        <div class="inner-title">
            <h3>Our Shop</h3>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Our Shop</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Banner End -->

<!-- Shop Area -->
<div class="shop-area pt-100 pb-70">
    <div class="container">
        <div class="product-topper mb-45">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="product-title">
                        <h3>Showing {{ $products->count() }} results</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="product-topper-search-widget">
                        <form action="{{ route('user.shops') }}" method="GET" class="search-form">
                            <input type="search" name="search" class="form-control" placeholder="Search..." value="{{ request('search') }}">
                            <button type="submit">
                                <i class="flaticon-loupe"></i>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="product-list">
                        <form method="GET" action="{{ route('user.shops') }}">
                            <div class="form-group">
                                <select class="form-select" name="sort" onchange="this.form.submit()">
                                    <option value="">Default Price</option>
                                    <option value="high" {{ request('sort')=='high' ? 'selected' : '' }}>Price High To Low</option>
                                    <option value="low" {{ request('sort')=='low' ? 'selected' : '' }}>Price Low To High</option>
                                </select>
                                <i class="ri-arrow-down-s-line"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            @forelse($products as $product)
                <div class="col-lg-3 col-6">
                    <div class="product-card mb-30">
                        <div class="product-img">
                            <a href="{{ route('user.shops.detail', $product->id) }}">
                                @if($product->image)
                                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" style="height:250px; object-fit:cover;">
                                @else
                                    <img src="{{ asset('assets/images/no-image.png') }}" alt="No Image" style="height:250px; object-fit:cover;">
                                @endif
                            </a>
                            <ul class="product-action">
                                <li><a href="#"><i class="ri-heart-line"></i></a></li>
                                <li><a href="#"><i class="ri-shopping-cart-2-line"></i></a></li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3 class="title-text">
                                <a href="{{ route('user.shops.detail', $product->id) }}">{{ $product->name }}</a>
                            </h3>
                            <span>
                                @if($product->old_price)
                                    <del>${{ number_format($product->old_price, 2) }}</del>
                                @endif
                                - ${{ number_format($product->final_price, 2) }}
                            </span>
                            <p class="text-muted mb-0">{{ ucfirst($product->brand ?? 'No Brand') }}</p>
                            <small class="{{ strtolower($product->status) === 'available' ? 'text-success' : 'text-danger' }}">
                                {{ ucfirst($product->status ?? 'Unavailable') }}
                            </small>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-lg-12 text-center">
                    <p>No products found.</p>
                </div>
            @endforelse
        </div>

        <div class="col-lg-12 col-md-12 text-center">
            <div class="pagination-area">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>
<!-- Shop Area End -->
@endsection
