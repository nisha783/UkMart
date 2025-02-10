@extends('layouts.app')

@section('title', 'Product')

@section('breadcrumb')
@endsection

@section('content')
    <section class="shop-section single pt-100 pb-100">
        <div class="container">
            @if (session('success'))
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert bg-success text-white">
                            {{ session('success') }}
                        </div>
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-6 product-details-wrap">
                    <div class="product-slider-wrap">
                        <div class="swiper product-gallary-thumb">
                            <div class="swiper-wrapper">
                                @foreach ($product->images as $image)
                                    <div class="swiper-slide">
                                        <div class="thumb-item">
                                            <img src="{{ Storage::url($image->image) }}" alt="shop">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="swiper product-gallary">
                            <span class="sale">Sale</span>
                            <div class="swiper-wrapper">
                                @foreach ($product->images as $image)
                                    <div class="swiper-slide">
                                        <div class="gallary-item">
                                            <img src="{{ Storage::url($image->image) }}" alt="shop">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-nav-next"><i class="las la-arrow-right"></i></div>
                            <div class="swiper-nav-prev"><i class="las la-arrow-left"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-details">
                        <div class="product-info">
                            <div class="product-inner">
                                {{-- show all categories --}}
                                <div class="d-flex">
                                    @foreach ($product->categories as $category)
                                        <span class="category">{{ $category->name }}</span>
                                    @endforeach
                                </div>
                                <h3 class="title">{{ $product->name }}</h3>
                                <div class="rating-wrap">
                                    <ul class="rating">
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                    </ul>
                                    <span>({{ $product->reviews()->count() }} Reviews)</span>
                                </div>
                                @if ($product->sale_price)
                                    <h4 class="price">{{ Number::currency($product->sale_price) }}
                                        <span>{{ Number::currency($product->price) }}</span>
                                    </h4>
                                @else
                                    <h4 class="{{ $product->sale_price ? 'price' : '' }}">
                                        <span>{{ Number::currency($product->price) }}</span>
                                    </h4>
                                @endif
                                <div class="product-desc-wrap">
                                    <p>{!! $product->mini_description !!}</p>

                                    <span class="view-text"><i class="fa-sharp fa-regular fa-eye"></i>{{ rand(20, 70) }}
                                        people are viewing
                                        this right now</span>
                                </div>
                                <div class="item-left-line">
                                    <span>Only {{ $product->stock }} items left in stock!</span>
                                    <div class="line"></div>
                                </div>
                                <ul class="details-list">
                                    <li><i class="fa-light fa-arrow-right-arrow-left"></i>Free returns</li>
                                    <li><i class="fa-light fa-truck"></i>Free shipping via DHL, fully insured</li>
                                    <li><i class="fa-light fa-circle-check"></i>All taxes and customs duties included</li>
                                    <li><i class="fa-light fa-magnifying-glass"></i>Product Code: {{$product->sku}}</li>
                                </ul>
                            </div>
                            @livewire('product-purchase', ['product' => $product])
                            <ul class="product-meta">
                                <li><a href="#">Ask a question</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Shop Section-->

    <section class="product-description pb-100">
        <div class="container">
            <ul class="nav tab-navigation" id="product-tab-navigation" role="tablist">
                <li role="presentation">
                    <button class="active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                        role="tab" aria-controls="home" aria-selected="true">Description</button>
                </li>
            </ul>
            <div class="tab-content" id="product-tab-content">
                <div class="tab-pane fade show active description" id="home" role="tabpanel"
                    aria-labelledby="home-tab">
                    <div class="">
                        <p class="mb-30">Credibly negotiate emerging materials whereas clicks-and-mortar intellectual
                            capital. Compellingly whiteboard client-centric sourcescross-platform schemas. Distinctively
                            develop future-proof outsourcing without multimedia based portals. Progressively coordinate
                            generation architectures for collaborative solutions. Professionally restore
                            backward-compatible quality vectors before customer directed metrics. Holisticly restore
                            technically sound internal or "organic" sources before client-centered human capital
                            underwhelm holistic mindshare for prospective innovation.</p>
                        <p class="mb-0">Seamlessly target fully tested infrastructures whereas just in time process
                            improvements. Dynamically exploit team driven functionalities vis a vis global total linkage
                            redibly synthesize just in time technology rather than open-source strategic theme areas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
