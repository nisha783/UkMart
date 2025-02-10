@extends('layouts.app')
@section('title', 'Order')

@section('breadcrumb')
@endsection

@section('content')
    <section class="cart-section pt-130 pb-130">
        <div class="mb-4">
            <a href="#" class="text-decoration-none text-dark">
                <i class="bi bi-arrow-left me-2"></i>Back to Orders
            </a>
        </div>

        <!-- Order Header -->
        <div class="order-header rounded-3 p-4 mb-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h4 class="mb-1">Order Number: UMM-{{ $order->created_at->format('Y') }}-{{ $order->id }}</h4>
                    <h4 class="mb-1">Traking Code: UMM-TRACK-{{ $order->created_at->format('Y') }}-{{ $order->id }}</h4>
                    <p class="mb-0">Placed on {{ $order->created_at->format('M d, Y') }} at
                        {{ $order->created_at->format('h:i A') }}</p>
                </div>
                <div class="col-md-6 text-md-end mt-3 mt-md-0">
                    <span class="badge bg-success fs-6 text-uppercase">{{ $order->status }}</span>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Order Details -->
            <div class="col-lg-8">
                <!-- Order Status -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Order Status</h5>
                        <ul class="list-unstyled m-0">
                            <li class="tracking-item active">
                                <h6 class="mb-0">Order Placed</h6>
                                <p class="text-muted small mb-0">{{ $order->created_at->format('M d, Y') }} -
                                    {{ $order->created_at->format('h:i A') }}</p>
                                <p class="small mb-0">Your order has been placed and is being processed.</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Order Items -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Order Items</h5>
                        @forelse ($order->items as $item)
                            <div class="d-flex align-items-center p-3 border rounded mb-3">
                                <img src="{{ Storage::url($item->product->images->first()->image) }}"
                                    class="product-img img-thumbnail rounded me-3" alt="Product" width="80">
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">{{ $item->product->name }}</h6>
                                    <p class="mb-0">Qty: {{ $item->quantity }}</p>
                                    <p class="mb-0">Price: {{ Number::currency($item->product->price) }}</p>
                                </div>
                                <div class="text-end">
                                    <h6 class="mb-1">{{ Number::currency($item->product->price * $item->quantity) }}</h6>
                                </div>
                            </div>
                        @empty
                            <p class="text-muted mb-0">No order items found.</p>
                        @endforelse
                    </div>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="col-lg-4">
                <!-- Price Details -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Price Details</h5>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Subtotal</span>
                            <span>{{ Number::currency($order->total - $order->shipping_cost) }}</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Shipping</span>
                            <span>{{ Number::currency($order->shipping_cost) }}</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Tax</span>
                            <span>{{ Number::currency($order->tax) }}</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Discount</span>
                            <span class="text-success">{{ Number::currency($order->discount) }}</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between fw-bold">
                            <span>Total</span>
                            <span>{{ Number::currency($order->total) }}</span>
                        </div>
                    </div>
                </div>

                @php
                    $shipping = json_decode($order->shipping_address, true);
                @endphp

                <!-- Shipping Info -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Shipping Information</h5>
                        <h6 class="mb-2">{{ $shipping['first_name'] }} {{ $shipping['last_name'] }}</h6>
                        <p class="mb-2">{{ $shipping['address_line1'] }} <br> {{ $shipping['address_line2'] }}</p>
                        <p class="mb-2">{{ $shipping['state'] }} {{ $shipping['postal_code'] }}</p>
                        <p class="mb-2">{{ $shipping['country'] }}</p>
                        <p class="mb-0">Phone: {{ $shipping['phone'] }}</p>
                    </div>
                </div>

                @php
                    $cardDetail = json_decode($order->card_details, true);
                @endphp

                <!-- Payment Info -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Payment Information</h5>
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-credit-card me-2"></i>
                            <div>
                                <h6 class="mb-0">Credit Card</h6>
                                <p class="mb-0 text-muted">**** **** **** {{ substr($cardDetail['card_number'], -4) }}</p>
                            </div>
                        </div>
                        <div class="alert alert-success mb-0">
                            <i class="bi bi-check-circle me-2"></i>
                            Payment Successful
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
