@extends('layouts.app')
@section('title', 'Category')

@section('breadcrumb')
    <section class="page-header">
        <div class="shape"><img src="{{ asset('assets/img/shapes/page-header-shape.png') }}" alt="shape"></div>
        <div class="container">
            <div class="page-header-content">
                <h1 class="title">{{ $category->name }}</h1>
                <h4 class="sub-title">
                    <span class="home">
                        <a href="#">
                            <span>Home</span>
                        </a>
                    </span>
                    <span class="icon"><i class="fa-solid fa-angle-right"></i></span>
                    <span class="inner">
                        <span>{{ $category->name }}</span>
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
                    @foreach ($category->products()->paginate(3) as $product)
                        <div class="col-md-3">
                            @livewire('product-wrapper', ['product' => $product])
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center mt-5">
                        {{ $category->products()->simplePaginate(3)->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
