@extends('layouts.app')
@section('title', 'Ukmegamart')

@section('breadcrumb')
    <section class="hero-section">
        <div class="overlay"></div>
        <div class="hero-images">
            <div class="hero-people"><img src="assets/img/images/hero-peoples.png" alt="img"></div>
            <div class="hero-shape"><img src="assets/img/shapes/hero-shape-1.png" alt="shape"></div>
            <div class="hero-shape-2"><img src="assets/img/shapes/hero-shape-2.png" alt="shape"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8"></div>
                <div class="col-xl-4 col-lg-12">
                    <div class="hero-content">
                        <h4 class="sub-title">ummer 22 women’s collection</h4>
                        <h2 class="title">Super COLLECTION <br>FOR WOMEN</h2>
                        <h5 class="price"><span>From</span>$320.00</h5>
                        <a href="shop.html" class="rr-primary-btn">View Collections</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section class="category-section pt-100 pb-100">
        <div class="container">
            <div class="category-top heading-space space-border">
                <div class="section-heading mb-0">
                    <h2 class="section-title">Best for your categories</h2>
                    <p>{{ Number::format($categories->count()) }} categories belonging to a total
                        {{ Number::format($categories->count()) }} products</p>
                </div>
                <!-- Carousel Arrows -->
                <div class="swiper-arrow">
                    <div class="swiper-nav swiper-next"><i class="fa-regular fa-arrow-left"></i></div>
                    <div class="swiper-nav swiper-prev"><i class="fa-regular fa-arrow-right"></i></div>
                </div>
            </div>
            <div class="category-carousel swiper">
                <div class="swiper-wrapper">
                    @foreach ($categories as $category)
                        <div class="swiper-slide">
                            <div class="category-item">
                                <div class="category-img-wrapper">
                                    <a href="{{ route('category.show', $category->slug) }}">
                                        <img class="category-image" src="{{ Storage::url($category->image) }}"
                                            alt="category">
                                    </a>
                                </div>
                                <h3 class="title"><a
                                        href="{{ route('category.show', $category->slug) }}">{{ $category->name }}</a>
                                </h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="fashion-section pb-100">
        <div class="container">
            <div class="category-top heading-space space-border">
                <div class="section-heading mb-0">
                    <h2 class="section-title">GET YOUR FASHION STYLE</h2>
                    <p>29 categories belonging to a total 15,892 products</p>
                </div>
            </div>
            <div class="shop-carousel">
                <div class="row g-3">
                    @foreach ($products as $product)
                        <div class="col-md-3">
                            @livewire('product-wrapper', ['product' => $product])
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="discount-section overflow-hidden pb-100">
        <div class="row gy-lg-0 gy-4">
            <div class="col-lg-4 col-md-6">
                <div class="discount-item item-1">
                    <div class="product-overlay"></div>
                    <div class="shape"><img src="assets/img/shapes/dis-shpe.png" alt="shape"></div>
                    <div class="content">
                        <span>Special 50% Disocunt</span>
                        <h3 class="title">The Latest Men’s Trends <br> This Season</h3>
                        <a href="shop.html"><i class="fa-regular fa-plus"></i>View Collections</a>
                    </div>
                    <div class="men"><img src="assets/img/images/discount-men-1.png" alt="img"></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="discount-item">
                    <div class="product-overlay"></div>
                    <div class="shape"><img src="assets/img/shapes/dis-shpe.png" alt="shape"></div>
                    <div class="men"><img src="assets/img/images/discount-men-2.png" alt="img"></div>
                    <div class="content">
                        <span>Special 50% Disocunt</span>
                        <h3 class="title">Latest Kids Trends <br>This Season</h3>
                        <a href="shop.html"><i class="fa-regular fa-plus"></i>View Collections</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="discount-item">
                    <div class="product-overlay"></div>
                    <div class="shape"><img src="assets/img/shapes/dis-shpe.png" alt="shape"></div>
                    <div class="men"><img src="assets/img/images/discount-men-3.png" alt="img"></div>
                    <div class="content">
                        <span>Special 50% Disocunt</span>
                        <h3 class="title">Latest Women’s Trends <br>This Season</h3>
                        <a href="shop.html"><i class="fa-regular fa-plus"></i>View Collections</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section pt-100 pb-100" data-background="assets/img/bg-img/cta-bg.jpg"
        style="background-image: url(&quot;assets/img/bg-img/cta-bg.jpg&quot;);">
        <div class="overlay"></div>
        <div class="container">
            <div class="cta-wrap text-center">
                <span>Spring summer 22 women’s collection</span>
                <h2 class="title">-15% Off Discount <br>All Here</h2>
                <a href="shop.html" class="rr-primary-btn cta-btn">View Collections</a>
            </div>
        </div>
    </section>

    @if ($products->count() > 0)
        <section class="deal-section pt-100 pb-100">
            <div class="container">
                <div class="row deal-wrap align-items-center">
                    <div class="shape"><img src="assets/img/shapes/deal-shape.png" alt="shape"></div>
                    <div class="col-xl-5 col-lg-12">
                        <div class="deal-content">
                            <div class="section-heading mb-0">
                                <h2 class="section-title">Deal Of the days</h2>
                                <p>Elegant pink origami design three type of dimensional view and <br>decoration co Great
                                    for
                                    adding a decorative...</p>
                            </div>
                            <div class="deal-info">
                                <div class="icon">
                                    <img src="assets/img/icon/deal-icon.png" alt="icon">
                                </div>
                                <div class="content">
                                    <p>Limited Time offer. THe Deal will expire <br> one
                                        {{ $products->last()->created_at->addDays(7)->format('M d') }} </p>
                                </div>
                            </div>
                            <a href="shop.html" class="rr-primary-btn deal-btn">View All Collections</a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-12">
                        <div class="row gy-md-0 gy-4">
                            @foreach ($products->take(2) as $product)
                                <div class="col-md-6">
                                    @livewire('product-wrapper', ['product' => $product])
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <h2 class="ms-5">F.A.Q</h2>
    <p class="ms-5">Have any questions? Find the answers to frequently asked questions below!</p>
    <div class="faq-section pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12">
                <div class="faq-content">
                    <div class="accordion" id="accordionExampleTwo">
                        @foreach($faqs as $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{ $loop->index }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $loop->index }}" aria-expanded="false" aria-controls="collapse{{ $loop->index }}">
                                        {{ $faq->question }}
                                    </button>
                                </h2>
                                <div id="collapse{{ $loop->index }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $loop->index }}" data-bs-parent="#accordionExampleTwo">
                                    <div class="accordion-body">
                                        {{ $faq->answer }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12">    
                <div class="faq-form">
                    <form action="mail.php">
                        <div class="form-item">
                            <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-item">
                            <input type="text" id="email" name="email" class="form-control" placeholder="Email address*">
                        </div>
                        <div class="form-item">
                            <textarea id="message" name="message" cols="30" rows="5" class="form-control address" placeholder="Message"></textarea>
                        </div>
                        <div class="submit-btn">
                            <button class="submit rr-primary-btn">Submit Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


    <section class="product-cta overflow-hidden pb-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cta-wrap-2">
                        <div class="bg-men"><img src="assets/img/bg-img/cta-bg-men.png" alt=""></div>
                        <span>Weekend Discount</span>
                        <h3 class="title">All You Need Under One Roof</h3>
                        <p>Just don’t miss the special offer this week</p>
                        <a href="shop-grid.html" class="cta-btn"><i class="fa-solid fa-plus"></i>shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-section pt-100">
        <div class="container">
            <div class="section-heading text-center">
                <h2 class="section-title mb-0">Our Latest News Insight</h2>
            </div>
            <div class="row gy-lg-0 gy-4 justify-content-center">
                @foreach ($posts->take(3) as $post)
                    <div class="col-lg-4 col-md-6">
                        <div class="post-card">
                            <div class="post-thumb">
                                <img src="{{ Storage::url($post->featured_image) }}" alt="post">
                            </div>
                            <div class="post-content-wrap">
                                <div class="post-content">
                                    <h3 class="title"><a
                                            href="{{ route('blog.show', ['blog' => $post->slug]) }}">{{ str()->limit($post->title, 25) }}</a>
                                    </h3>
                                </div>
                                <div class="post-bottom">
                                    <a href="{{ route('blog.show', ['blog' => $post->slug]) }}" class="read-more">Read
                                        More<i class="fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
