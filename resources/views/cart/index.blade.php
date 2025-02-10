@extends('layouts.app')
@section('title', 'Cart')

@section('breadcrumb')
@endsection

@section('content')
    <section class="cart-section pt-130 pb-130">
        <div class="container">
            @livewire('cart')
        </div>
    </section>
@endsection
