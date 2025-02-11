
<div class="product-card">
                                <div class="product-thumb">
                                @if ($product->images->count())
            <img src="{{ Storage::url($product->images->first()->image) }}" alt="shop">
        @endif
                                                                       
                                                                   
                                    <div class="product-button-group"><a class="product-button wishlist_store" href="javascript:void(0)"   wire:click="addToWishlist({{ $product->id }})"  title="Wishlist"><i class="icon-heart"></i></a>
                                        <a data-target="" class="product-button product_compare" href="javascript:;" title="Compare"><i class="icon-repeat"></i></a>
                                                                                    <a class="product-button add_to_single_cart" data-target="1134" href="javascript:;" title="To Cart"><i class="icon-shopping-cart"></i>
                                            </a>
                                                                            </div>
                                </div>
                                    <div class="product-card-body">

                                        <div class="product-category">
                                             @forelse ($product->categories as $category)
                <a href="{{ route('category.show', $category->slug) }}">
                    <span class="category badge badge-secondary">{{ $category->name }}</span>
                </a>
            @empty
                <span class="category">{{ 'Uncategorized' }}</span>
            @endforelse</a></div>
                                        <h3 class="product-title"><a href="{{ route('product.show', ['product' => $product->slug]) }}">{{ $product->name }}
                                        
                                        </a></h3>
                                        <!-- <div class="rating-stars">
                                            <i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i>
                                        </div> -->
                                        <h4 class="product-price">
                                        
                                        @if ($product->sale_price)
                <span class="offer">{{ Number::currency($product->price) }}</span>
            @else
                {{ Number::currency($product->price) }}
            @endif
                                        </h4>

                                    </div>

                            </div>