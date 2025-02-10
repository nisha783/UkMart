@extends('layouts.app')
@section('title', 'Wishlist')

@section('breadcrumb')
@endsection

@section('content')
<section class="cart-section pt-130 pb-130">
    <div class="container">
        <h2 class="section-title text-center mb-5">Your Wishlist</h2>

        <!-- Grid Layout for Wishlist Items -->
        <div class="row gy-4">
            @forelse (auth()->user()->wishlist as $product)
                <div class="col-lg-4 col-md-6">
                    <div class="card product-card">
                        <div class="product-thumbnail">
                            <a href="shop-details.html">
                                <img src="{{ Storage::url($product->images->first()->image) }}" alt="img" class="card-img-top">
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <div class="d-flex flex-wrap">
                                @forelse ($product->categories as $category)
                                    <a href="{{ route('category.show', $category->slug) }}">
                                        <span class="category badge badge-secondary">{{ $category->name }}</span>
                                    </a>
                                @empty
                                    <span class="category">Uncategorized</span>
                                @endforelse
                            </div>

                            <div class="product-price">
                                @if ($product->sale_price)
                                    <span class="offer">{{ Number::currency($product->price) }}</span>
                                    {{ Number::currency($product->sale_price) }}
                                @else
                                    {{ Number::currency($product->price) }}
                                @endif
                            </div>

                            <div class="stock-status">
                                <span>{{ $product->stock ? 'In stock' : 'Out of stock' }}</span>
                            </div>

                            <!-- Wishlist Remove and Add to Cart Form -->
                            <div class="actions d-flex justify-content-between align-items-center mt-3">
                                <form action="{{ route('user.wishlist.destroy', $product->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa-sharp fa-regular fa-xmark"></i></button>
                                </form>
                                <form action="{{ route('cart.add', ['product' => $product->id]) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="qty" value="1">
                                    <button class="btn btn-primary btn-sm">Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-4">
                    <p>Your wishlist is empty.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection
