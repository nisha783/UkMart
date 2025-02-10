<div>
    <div class="row">
        <div class="col-lg-8">
            <div class="table-content cart-table">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th class="product-remove"></th>
                            <th class="cart-product-name text-center">Products</th>
                            <th class="product-price">Price</th>
                            <th class="product-quantity">Quantity</th>
                            <th class="product-subtotal">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @dd($cart->items) --}}
                        @forelse ($cart->items as $item)
                            <tr wire:key="cart-item-{{ $item->id }}">
                                <td class="product-remove">
                                    <button wire:click="removeItem({{ $item->product_id }})"
                                        wire:loading.attr="disabled" class="remove-btn">
                                        <i class="fa-sharp fa-regular fa-xmark"></i>
                                    </button>
                                </td>
                                <td class="product-thumbnail">
                                    <a href="{{ route('product.show', $item->product) }}">
                                        <img src="{{ Storage::url($item->product->images->first()->image) }}"
                                            alt="{{ $item->product->name }}" class="product-image">
                                    </a>
                                    <div class="product-thumbnail">
                                        <h4 class="title">{{ $item->product->name }}</h4>
                                    </div>
                                </td>
                                <td class="product-price">
                                    <span class="amount">{{ Number::currency($item->price) }}</span>
                                </td>
                                <td class="product-quantity">
                                    <div class="quantity__group">
                                        <input type="number"
                                            wire:model.live.debounce.500ms="quantities.{{ $item->product_id }}"
                                            wire:change="updateQuantity({{ $item->product_id }}, $event.target.value)"
                                            class="input-text qty text" min="1" max="{{ $item->product->stock }}"
                                            step="1">
                                    </div>
                                    <div wire:loading wire:target="updateQuantity">
                                        <small class="text-muted">Updating...</small>
                                    </div>
                                </td>
                                <td class="product-subtotal">
                                    <span class="amount">{{ Number::currency($item->total) }}</span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-4">
                                    Your cart is empty.
                                    <a href="{{ route('index') }}" class="btn btn-link">Continue Shopping</a>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if ($cart->items->isNotEmpty())
                <div class="cart-actions mt-4">
                    <button wire:click="clearCart" wire:loading.attr="disabled" class="btn btn-outline-danger">
                        Clear Cart
                    </button>
                </div>
            @endif
        </div>

        <div class="col-lg-4">
            <div class="checkout-wrapper">
                <div class="checkout-top checkout-item item-1">
                    <h4 class="title">Cart Totals</h4>
                </div>
                <div class="checkout-top checkout-item">
                    <h4 class="title">Subtotal</h4>
                    <span class="price">{{ Number::currency($subtotal) }}</span>
                </div>
                <div class="checkout-total checkout-item">
                    <h4 class="title">Total</h4>
                    <span>{{ Number::currency($total) }}</span>
                </div>
            </div>
            @if ($cart->items->isNotEmpty())
                <div class="checkout-proceed">
                    <a href="{{ route('checkout.index') }}" class="rr-primary-btn checkout-btn">
                        Proceed to Checkout
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
