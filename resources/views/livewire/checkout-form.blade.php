<div>
    <form wire:submit.prevent="placeOrder">
        @csrf
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="checkout-left">
                    <h3 class="form-header">Billing & Shipping Details</h3>
                    <form action="mail.php">
                        <div class="checkout-form-wrap">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-item">
                                        <h4 class="form-title">Email Address*</h4>
                                        <input type="email" wire:model.live="email" class="form-control"
                                            value="{{ old('email', auth()->check() ? auth()->user()->email : '') }}">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="form-item name">
                                        <h4 class="form-title">First Name*</h4>
                                        <input type="text" wire:model.live="first_name" class="form-control"
                                            value="{{ old('first_name', auth()->check() ? auth()->user()->first_name : '') }}">
                                        @error('first_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-item">
                                        <h4 class="form-title">Last Name*</h4>
                                        <input type="text" wire:model.live="last_name" class="form-control"
                                            value="{{ old('last_name', auth()->check() ? auth()->user()->last_name : '') }}">
                                        @error('last_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-item">
                                        <h4 class="form-title">Company Name (Optional)*</h4>
                                        <input type="text" wire:model.live="company_name" class="form-control"
                                            value="{{ old('company_name') }}">
                                        @error('company_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-item">
                                        <h4 class="form-title">Country / Region*</h4>
                                        <input type="text" wire:model.live="country" class="form-control"
                                            placeholder="United States (US)" value="{{ old('country') }}">
                                        @error('country')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-item ">
                                        <h4 class="form-title">Street Address*</h4>
                                        <input type="text" wire:model.live="street1"
                                            class="form-control street-control"
                                            placeholder="House number and street number" value="{{ old('street1') }}">
                                        @error('street1')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <input type="text" wire:model.live="street2"
                                            class="form-control street-control-2"
                                            placeholder="Apartment, suite, unit, etc. (optional)"
                                            value="{{ old('street2') }}">
                                        @error('street2')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-item">
                                        <h4 class="form-title">Town / City*</h4>
                                        <input type="text" wire:model.live="city" class="form-control"
                                            value="{{ old('city') }}">
                                        @error('city')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-item">
                                        <h4 class="form-title">State*</h4>
                                        <input type="text" wire:model.live="state" class="form-control"
                                            value="{{ old('state') }}">
                                        @error('state')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-item">
                                        <h4 class="form-title">Zip Code*</h4>
                                        <input type="text" wire:model.live="zip_code" class="form-control"
                                            value="{{ old('zip_code') }}">
                                        @error('zip_code')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-item">
                                        <h4 class="form-title">Phone*</h4>
                                        <input type="text" wire:model.live="phone" class="form-control"
                                            value="{{ old('phone') }}">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-item">
                                        <h4 class="form-title">Order Notes*</h4>
                                        <textarea wire:model.live="notes" cols="30" rows="5" class="form-control address"
                                            value="{{ old('notes') }}"></textarea>
                                        @error('notes')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="checkout-right">
                    <h3 class="form-header">Your Order</h3>
                    <div class="order-box">
                        <div class="order-items">
                            <div class="order-item item-1">
                                <div class="order-left">
                                    <span class="product">Product</span>
                                </div>
                                <div class="order-right">
                                    <span class="price">Price</span>
                                </div>
                            </div>
                            @foreach ($cart->items as $item)
                                <div class="order-item">
                                    <div class="order-left">
                                        <div class="order-img">
                                            <img src="{{ Storage::url($item->product->images->first()->image) }}"
                                                alt="img">
                                        </div>
                                    </div>
                                    <div class="order-right">
                                        <div class="content">
                                            <span
                                                class="category">{{ $item->product->categories->first()->name }}</span>
                                            <h4 class="title">{{ $item->product->name }}</h4>
                                        </div>
                                        <div class="text-end">
                                            <span class="">Qty: x{{ $item->quantity }}</span>
                                            <br>
                                            <span class="price">{{ Number::currency($item->total) }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="order-item item-1">
                                <div class="order-left">
                                    <span class="left-title">Subtotal</span>
                                </div>
                                <div class="order-right">
                                    <span class="right-title">{{ Number::currency($getSubtotal) }}</span>
                                </div>
                            </div>
                            <div class="order-item item-1">
                                <div class="order-left">
                                    <span class="left-title">Shipping</span>
                                </div>
                                <div class="order-right">
                                    <div class="form-group">
                                        {{-- pickup or warehouse checkboxes --}}
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault1" wire:model.live="shippingMethod"
                                                value="pickup">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Pickup
                                                {{ Number::currency(site_setting('checkout_pickup_shipping', 0)) }}
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault2" wire:model.live="shippingMethod"
                                                value="warehouse">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Nearest Warehouse
                                                {{ Number::currency(site_setting('checkout_nearest_warehouse_shipping', 1)) }}
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="order-item item-1">
                                <div class="order-left">
                                    <span class="left-title">Total Price:</span>
                                </div>
                                <div class="order-right">
                                    <span class="right-title title-2">{{ Number::currency($total) }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="payment-option-wrap">
                            <div class="payment-option">
                                <div class="accordion-item">
                                    <h2 class="accordion-header bg-white p-3" id="upperpay">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseupperpay"
                                            aria-expanded="false" aria-controls="collapseupperpay">
                                            Pay {{ Number::currency($total) }} with Uber Pay
                                        </button>
                                    </h2>
                                    <div id="collapseupperpay" class="accordion-collapse collapse show"
                                        aria-labelledby="headingupperpay" data-bs-parent="#accordionExampleTwo">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-item name">
                                                        <h5 class="form-title mt-3">Card Holder Name</h5>
                                                        <input type="text" id="card_holder_name"
                                                            name="card_holder_name" wire:model.live="card_holder_name"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-item name">
                                                        <h5 class="form-title mt-3">Card Number</h5>
                                                        <input type="text" id="card_number" name="card_number"
                                                            wire:model.live="card_number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-item name">
                                                        <h5 class="form-title mt-3">Expiration Date</h5>
                                                        <input type="text" id="expiry_date" name="expiry_date"
                                                            wire:model.live="expiry_date" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-item name">
                                                        <h5 class="form-title mt-3">CVV</h5>
                                                        <input type="text" id="cvv" name="cvv"
                                                            wire:model.live="cvv" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="desc">Your personal data will be used to process your order, support your
                                experience throughout this website, and for other purposes described in our
                                <span>privacy policy.</span>
                            </p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                                    required>
                                <label class="form-check-label" for="flexCheckDefault">
                                    I have read and agree terms and conditions *
                                </label>
                            </div>
                            <button class="rr-primary-btn order-btn">Place Your Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
