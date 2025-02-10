@extends('layouts.app')
@section('title', 'Login')

@section('breadcrumb')
    <div class="container">
        <div class="page-header-content">
            <h1 class="title">Account Login</h1>
            <h4 class="sub-title">
                <span class="home">
                    <a href="{{ url('/') }}">
                        <span>Home</span>
                    </a>
                </span>
                <span class="icon"><i class="fa-solid fa-angle-right"></i></span>
                <span class="inner">
                    <span>Account Login</span>
                </span>
            </h4>
        </div>
    </div>
@endsection
@section('content')
    @include('inc.login-form')
@endsection
