@extends('layouts.app')
@section('title', 'BlogPost')

@section('breadcrumb')
@endsection

@section('content')
<section class="fashion-section pb-100">
    <div class="container">
        <div class="shop-carousel">
            <div class="col-lg-12 col-md-12">
                <div class="blog-details-wrap">
                    <div class="blog-details-img">
                        <img src="{{ Storage::url($blogPost->featured_image) }}" alt="{{ $blogPost->title }}">
                    </div>
                    <div class="blog-details-content-wrap">
                        <ul class="post-meta">
                            <li><i
                                    class="fa-sharp fa-regular fa-clock"></i>{{ $blogPost->created_at?->format('d F, Y') ?? 'Not Published' }}
                            </li>
                            <li>
                                <i class="fa-light fa-user"></i>
                                {{config('app.name', 'Laravel')}}
                            </li>
                        </ul>
                        <div class="blog-details-content">
                            <h2 class="details-title mb-25">{{ $blogPost->title }}</h2>
                            <p class="mb-20">{{ $blogPost->meta_description }}</p>
                            {!! $blogPost->content !!}
                        </div>
                        <div class="tags">
                            <div class="tag-left">

                            </div>
                            <div class="social-list-wrap">
                                <h4 class="follow">Follow Us:</h4>
                                <ul class="social-list">
                                    <li>
                                        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-author-wrap">
                            <div class="blog-author-item">
                                <div class="author-img">
                                    <h4>UKMEGAMART</h4>
                                </div>
                                <div class="content">
                                    <h3 class="name">{{config('app.name', 'Laravel')}}</h3>
                                    <p>#1 Online Shopping Brand in United Kindgom</p>
                                    <ul class="social-list">
                                        <li>
                                            <a href="" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="" class="twitter"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                        <li>
                                            <a href="" class="instagram"><i class="fab fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection