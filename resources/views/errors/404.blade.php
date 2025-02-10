@extends('layouts.app')
@section('content')
    <section class="error-section pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="error-content text-center">
                        <img src="assets/img/images/error-img.png" alt="error">
                        <h3 class="title">Page Not Found</h3>
                        <p>Sorry, we couldn't find the page you where looking for. We suggest that you return to homepage.
                        </p>
                        <a href="{{route('index')}}" class="rr-primary-btn">Back to Homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
