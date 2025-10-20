@extends('layouts.guest')
@section('title', 'Cart')
@section('content')

<!-- Inner Banner -->
<div class="inner-banner inner-bg1">
    <div class="container">
        <div class="inner-title">
            <h3>Shopping Cart</h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Shopping Cart</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Banner End -->

<!-- Start Cart Area -->
<section class="cart-wraps-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form>
                    <div class="cart-wraps">
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Product</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Unit Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="cart.html">
                                                <img src="assets/images/products/products-1.jpg" alt="Image">
                                            </a>
                                        </td>

                                        <td class="product-name">
                                            <a href="cart.html">Protein Natural</a>
                                        </td>

                                        <td class="product-price">
                                            <span class="unit-amount">$110.00</span>
                                        </td>

                                        <td class="product-quantity">
                                            <div class="input-counter">
                                                <span class="minus-btn">
                                                    <i class="ri-subtract-line"></i>
                                                </span>
                                                <input type="text" value="1">
                                                <span class="plus-btn">
                                                    <i class="ri-add-line"></i>
                                                </span>
                                            </div>
                                        </td>

                                        <td class="product-subtotal">
                                            <span class="subtotal-amount">$100.00</span>

                                            <a href="cart.html" class="remove">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="cart.html">
                                                <img src="assets/images/products/products-2.jpg" alt="Image">
                                            </a>
                                        </td>

                                        <td class="product-name">
                                            <a href="cart.html">Protein's Athletic</a>
                                        </td>

                                        <td class="product-price">
                                            <span class="unit-amount">$60.00</span>
                                        </td>

                                        <td class="product-quantity">
                                            <div class="input-counter">
                                                <span class="minus-btn">
                                                    <i class="ri-subtract-line"></i>
                                                </span>
                                                <input type="text" value="1">
                                                <span class="plus-btn">
                                                    <i class="ri-add-line"></i>
                                                </span>
                                            </div>
                                        </td>


                                        <td class="product-subtotal">
                                            <span class="subtotal-amount">$60.00</span>

                                            <a href="cart.html" class="remove">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="cart.html">
                                                <img src="assets/images/products/products-3.jpg" alt="Image">
                                            </a>
                                        </td>

                                        <td class="product-name">
                                            <a href="cart.html">Dumbbells Black</a>
                                        </td>

                                        <td class="product-price">
                                            <span class="unit-amount"> $90.00</span>
                                        </td>

                                        <td class="product-quantity">
                                            <div class="input-counter">
                                                <span class="minus-btn">
                                                    <i class="ri-subtract-line"></i>
                                                </span>
                                                <input type="text" value="1">
                                                <span class="plus-btn">
                                                    <i class="ri-add-line"></i>
                                                </span>
                                            </div>
                                        </td>

                                        <td class="product-subtotal">
                                            <span class="subtotal-amount">$90.00</span>

                                            <a href="cart.html" class="remove">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="cart.html">
                                                <img src="assets/images/products/products-4.jpg" alt="Image">
                                            </a>
                                        </td>

                                        <td class="product-name">
                                            <a href="cart.html">Shaker Bottle</a>
                                        </td>

                                        <td class="product-price">
                                            <span class="unit-amount">$80.00</span>
                                        </td>

                                        <td class="product-quantity">
                                            <div class="input-counter">
                                                <span class="minus-btn">
                                                    <i class="ri-subtract-line"></i>
                                                </span>
                                                <input type="text" value="1">
                                                <span class="plus-btn">
                                                    <i class="ri-add-line"></i>
                                                </span>
                                            </div>
                                        </td>

                                        <td class="product-subtotal">
                                            <span class="subtotal-amount">$80.00</span>
                                            <a href="cart.html" class="remove">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>

                <div class="cart-buttons">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="cart-widget-form-area">
                                <form class="cart-widget-form">
                                    <input type="text" class="form-control" placeholder="Coupon Code">
                                    <button class="subscribe-btn" type="submit">
                                        Apply Coupon
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-5 text-end">
                            <a href="cart.html" class="default-btn border-radius-5">
                                Update Cart
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Cart Area -->

<!-- Cart Totals Area -->
<div class="cart-totals-area pb-100">
    <div class="container">
        <div class="cart-totals">
            <h3>Cart Totals</h3>
            <ul>
                <li>Subtotal <span>$350.00</span></li>
                <li>Shipping <span>$30.00</span></li>
                <li>Coupon <span>$20.00</span></li>
                <li>Total <span><b>$340.00</b></span></li>
            </ul>
            <a href="checkout.html" class="default-btn border-radius-5">
                Proceed to checkout
            </a>
        </div>
    </div>
</div>
<!-- Cart Totals Area End -->
@endsection
