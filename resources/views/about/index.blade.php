@extends('layouts.app')
@section('title', 'About')

@section('breadcrumb')
    <section class="about-section pt-100 pb-100" style="background-image: url('assets/img/6.jpg'); background-size: cover; background-position: center; position: relative; z-index: 1;">
    <div class="overlay" style="background: rgba(0, 0, 0, 0.5); position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 2;"></div>
    <div class="container" style="position: relative; z-index: 3;">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-content">
                    <div class="section-heading">
                        <h2 class="section-title text-white">Creating a World Where Fashion is a Lifestyle</h2>
                        <p class="text-white">Fashion is a vibrant art form that allows individuals to express their personality and creativity. It is ever-evolving, blending tradition with modernity, and empowering people to showcase their uniqueness. From timeless classics to bold innovations, fashion reflects the culture, mood, and aspirations of society.</p>
                    </div>
                    <div class="about-items">
                        <div class="about-item"><i class="fa-sharp fa-solid fa-circle-check"></i>Fast Growing Sells</div>
                        <div class="about-item"><i class="fa-sharp fa-solid fa-circle-check"></i>24/7 Quality Services</div>
                        <div class="about-item"><i class="fa-sharp fa-solid fa-circle-check"></i>Skilled Team Members</div>
                        <div class="about-item"><i class="fa-sharp fa-solid fa-circle-check"></i>Best Quality Services</div>
                    </div>
                    <a href="#" class="rr-primary-btn about-btn">Learn More</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="about-img">
                    <img src="assets/img/images/about-img-1.jpg" alt="about">
                    <div class="play-btn">
                        <a class="video-popup" data-autoplay="true" data-vbtype="video" href="https://youtu.be/Dngwk0BBLmw?feature=shared">
                            <div class="play-btn">
                                <i class="fa-sharp fa-solid fa-play"></i>
                            </div>
                            <div class="ripple"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ about-section -->

<section class="team-section pt-100 pb-100" style="background-image: url('assets/img/team-bg.jpg'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="section-heading text-center">
            <h2 class="section-title">Our Creative Team</h2>
        </div>
        <div class="row gy-lg-0 gy-4">
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-thumb">
                        <img src="{{ asset('assets/img/4.jpg') }}" alt="img">
                    </div>
                    <div class="team-content text-center">
                        <span>Chief Creative Officer</span>
                        <h3 class="title">Henry David Wilson</h3>
                        <ul class="team-social">
                            <li><a href="#">FB</a></li>
                            <li><a href="#">TW</a></li>
                            <li><a href="#">IG</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-thumb">
                        <img src="{{ asset('assets/img/3.jpg') }}" alt="img">
                    </div>
                    <div class="team-content text-center">
                        <span>Head of Innovation</span>
                        <h3 class="title">Travis Head</h3>
                        <ul class="team-social">
                            <li><a href="#">FB</a></li>
                            <li><a href="#">TW</a></li>
                            <li><a href="#">IG</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-thumb">
                        <img src="{{ asset('assets/img/1.jpg') }}" alt="img">
                    </div>
                    <div class="team-content text-center">
                        <span>Brand Strategist</span>
                        <h3 class="title">Smirthi Mandhana</h3>
                        <ul class="team-social">
                            <li><a href="#">FB</a></li>
                            <li><a href="#">TW</a></li>
                            <li><a href="#">IG</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-thumb">
                        <img src="{{ asset('assets/img/4.jpg') }}" alt="img">
                    </div>
                    <div class="team-content text-center">
                        <span>Senior Developer</span>
                        <h3 class="title">Henry Klassen</h3>
                        <ul class="team-social">
                            <li><a href="#">FB</a></li>
                            <li><a href="#">TW</a></li>
                            <li><a href="#">IG</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="service-section pt-100 pb-100">
    <div class="container">
        <div class="row gy-lg-0 gy-4">
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="service-item">
                    <div class="service-content top-area text-center">
                        <span class="number">01</span>
                        <h3 class="title">24/7 Dedicated Support</h3>
                        <p>Our team is available around the clock to provide assistance and ensure a seamless experience, whenever you need it.</p>
                    </div>
                    <div class="service-img">
                        <img src="{{ asset('assets/img/3.jpg') }}" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="service-item item-2">
                    <div class="service-img top-area">
                        <img src="{{ asset('assets/img/6.jpg') }}" alt="img">
                    </div>
                    <div class="service-content text-center">
                        <span class="number">02</span>
                        <h3 class="title">About Our Company</h3>
                        <p>We are a forward-thinking organization dedicated to delivering innovative solutions and exceptional services to our clients.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="service-item">
                    <div class="service-content top-area text-center">
                        <span class="number">03</span>
                        <h3 class="title">Exclusive Deals & Offers</h3>
                        <p>Take advantage of our amazing offers and discounts designed to bring value and satisfaction to your experience.</p>
                    </div>
                    <div class="service-img">
                        <img src="{{ asset('assets/img/7.avif') }}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        <!-- ./ service-section -->

        <section class="testimonial-section about-testi pt-100 pb-100">
    <div class="container">
        <div class="section-heading white-content text-center">
            <h2 class="section-title">What Our Customers Say</h2>
        </div>
        <div class="testimonial-carousel swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testi-item-wrap">
                        <div class="testi-item testi-item-2">
                            <div class="testi-top-content">
                                <h4 class="title">Exceptional Service</h4>
                                <ul class="review">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                            <p>“The service provided exceeded all expectations. I’ve never experienced such quality and attention to detail before. Highly recommended!”</p>
                            <div class="shape"><img src="{{ asset('assets/img/shapes/testi-shape.png') }}" alt="shape"></div>
                        </div>
                        <div class="testi-author">
                            <img src="{{ asset('assets/img/images/testi-author.png') }}" alt="img">
                            <h4 class="name">Alexandra Smith <span>Marketing Expert</span></h4>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testi-item-wrap">
                        <div class="testi-item testi-item-2">
                            <div class="testi-top-content">
                                <h4 class="title">Outstanding Support</h4>
                                <ul class="review">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                            <p>“The team was there whenever I needed assistance. They made the process smooth and stress-free. Couldn’t ask for a better experience!”</p>
                            <div class="shape"><img src="{{ asset('assets/img/shapes/testi-shape.png') }}" alt="shape"></div>
                        </div>
                        <div class="testi-author">
                            <img src="{{ asset('assets/img/images/testi-author-2.png') }}" alt="img">
                            <h4 class="name">John Kim <span>Business Owner</span></h4>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testi-item-wrap">
                        <div class="testi-item testi-item-2">
                            <div class="testi-top-content">
                                <h4 class="title">Quality Products</h4>
                                <ul class="review">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                            <p>“I was blown away by the premium quality of the products. They clearly take pride in delivering excellence. Definitely coming back!”</p>
                            <div class="shape"><img src="{{ asset('assets/img/shapes/testi-shape.png') }}" alt="shape"></div>
                        </div>
                        <div class="testi-author">
                            <img src="{{ asset('assets/img/images/testi-author-3.png') }}" alt="img">
                            <h4 class="name">Emily Clarke <span>Fashion Enthusiast</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        <!-- ./ testimonial-section -->

        <div class="sponsor-section pt-100 pb-100">
            <div class="container">
                <div class="row sponsor-wrap">
                    <div class="sponsor-item bd-right bd-bottom">
                        <a href="#">   <img src="{{ asset('assets/img/8.avif') }}" alt="img"> </a>  
                    </div>
                    <div class="sponsor-item bd-right bd-bottom">
                    <a href="#">   <img src="{{ asset('assets/img/9.jpg') }}" alt="img"> </a>  
                    
                    </div>
                    <div class="sponsor-item bd-right bd-bottom">
                    <a href="#">   <img src="{{ asset('assets/img/11.jpg') }}" alt="img"> </a>  
                        
                    </div>
                    <div class="sponsor-item bd-right bd-bottom">
                    <a href="#">   <img src="{{ asset('assets/img/12.avif') }}" alt="img"> </a>  
                    
                    </div>
                    <div class="sponsor-item bd-bottom">
                    <a href="#">   <img src="{{ asset('assets/img/13.jpg') }}" alt="img"> </a>  
                        
                    </div>
                    <div class="sponsor-item bd-right">
                    <a href="#">   <img src="{{ asset('assets/img/14.jpg') }}" alt="img"> </a>  
                    
                    </div>
                    <div class="sponsor-item bd-right">
                    <a href="#">   <img src="{{ asset('assets/img/15.avif') }}" alt="img"> </a>  
                        
                    </div>
                    <div class="sponsor-item bd-right">
                    <a href="#">   <img src="{{ asset('assets/img/16.avif') }}" alt="img"> </a>  
                        
                    </div>
                    <div class="sponsor-item bd-right">
                    <a href="#">   <img src="{{ asset('assets/img/17.jpg') }}" alt="img"> </a>  
                        
                    </div>
                    <div class="sponsor-item">
                    <a href="#">   <img src="{{ asset('assets/img/18.jpg') }}" alt="img"> </a>  
                        
                    </div>
                </div>
            </div>
        </div>
@endsection