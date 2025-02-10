@extends('layouts.app')
@section('title', 'Product')

@section('breadcrumb')
    <section class="page-header">
        <div class="shape"><img src="{{ asset('assets/img/shapes/page-header-shape.png') }}" alt="shape"></div>
        <div class="container">
            <div class="page-header-content">
                <h1 class="title">{{ $keyword }}</h1>
                <h4 class="sub-title">
                    <span class="home">
                        <a href="#">
                            <span>Home</span>
                        </a>
                    </span>
                    <span class="icon"><i class="fa-solid fa-angle-right"></i></span>
                    <span class="inner">
                        <span>{{ $keyword }}</span>
                    </span>
                </h4>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section class="fashion-section pb-100">
        <div class="container">
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
@endsection
