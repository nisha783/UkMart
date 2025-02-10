@extends('layouts.app')
@section('title', 'Checkout')

@section('breadcrumb')
@endsection

@section('content')
    <section class="checkout-section pb-100">
        <div class="container">
            @guest
                <div class="row">
                    <div class="col-md-6">
                        @include('inc.register-form')
                    </div>
                    <div class="col-md-6">
                        @include('inc.login-form')
                    </div>
                </div>
            @endguest
            @auth
                @livewire('checkout-form')
            @endauth
        </div>
    </section>
@endsection
