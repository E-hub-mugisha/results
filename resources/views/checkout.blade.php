@extends('layouts.guest')
@section('title', 'Checkout')

@section('content')

<!-- Inner Banner -->
<div class="inner-banner inner-bg2">
    <div class="container">
        <div class="inner-title">
            <h3>Checkout</h3>
            <ul>
                <li>
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li>Checkout</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Banner End -->

<!-- Checkout Area -->
<section class="checkout-area pt-100 pb-70">
    <div class="container">

        <!-- Flash Messages -->
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="checkout-user mb-45">
            <i class="ri-login-circle-line"></i>
            <span>
                Returning customer?
                <a href="{{ route('login') }}">Click here to Log In</a>
            </span>
        </div>

        <form id="checkout-form" action="{{ route('checkout.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="billing-details">
                        <h3 class="title">Billing Details</h3>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Full Name <span class="required">*</span></label>
                                    <input type="text" name="names" value="{{ old('names') }}" class="form-control" required>
                                    @error('names')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Phone <span class="required">*</span></label>
                                    <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" required>
                                    @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Address <span class="required">*</span></label>
                                    <input type="text" name="address" value="{{ old('address') }}" class="form-control" required>
                                    @error('address')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Town / City <span class="required">*</span></label>
                                    <input type="text" name="city" value="{{ old('city') }}" class="form-control" required>
                                    @error('city')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Country <span class="required">*</span></label>
                                    <input type="text" name="country" value="{{ old('country') }}" class="form-control" required>
                                    @error('country')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="notes" cols="30" rows="5" placeholder="Order Notes (optional)" class="form-message">{{ old('notes') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Hidden product data -->
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                </div>

                <div class="col-lg-6">
                    <div class="billing-sildbar pl-20">
                        <div class="billing-totals">
                            <h3>Your Order Summary</h3>
                            <ul>
                                <li class="border-line">
                                    <b>Product</b><span><b>Total</b></span>
                                </li>
                                <li>
                                    {{ $product->name }}
                                    <span>${{ number_format($product->price, 2) }}</span>
                                </li>
                                <li class="list-color">
                                    Shipping <span>$30.00</span>
                                </li>
                                <li class="list-color">
                                    <b>Total</b>
                                    <span><b>${{ number_format($product->price + 30, 2) }}</b></span>
                                </li>
                            </ul>
                        </div>

                        <div class="payment-box">
                            <div class="payment-method">
                                <h3>Payment Method</h3>

                                <p>
                                    <input type="radio" id="bank" name="payment_method" value="Bank Transfer"
                                        {{ old('payment_method', 'Bank Transfer') == 'Bank Transfer' ? 'checked' : '' }}>
                                    <label for="bank">Direct Bank Transfer</label>
                                </p>

                                <p>
                                    <input type="radio" id="paypal" name="payment_method" value="PayPal"
                                        {{ old('payment_method') == 'PayPal' ? 'checked' : '' }}>
                                    <label for="paypal">PayPal</label>
                                </p>

                                <p>
                                    <input type="radio" id="cod" name="payment_method" value="Cash On Delivery"
                                        {{ old('payment_method') == 'Cash On Delivery' ? 'checked' : '' }}>
                                    <label for="cod">Cash On Delivery</label>
                                </p>

                                @error('payment_method')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <button type="submit" class="default-btn border-radius-5 mt-3 w-100">
                                Place Order
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Checkout Area End -->

@endsection
