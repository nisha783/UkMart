@extends('layouts.app') {{-- Extend your app layout if you have one --}}
@section('title', 'BlogPost')

@section('content')
<section class="blog-section pt-130 pb-130">
    <div class="container">
        <h2 class="section-title text-center mb-5">Blog Posts</h2>

        <div class="row gy-4">
            @foreach ($blogPost as $post)
                <div class="col-lg-3 col-md-6">
                    <div class="card post-card">
                        <div class="post-thumb">
                            <img src="{{ asset('storage/'.$post->featured_image) }}" alt="post" class="card-img-top" height="200">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                            <small class="text-muted d-block mt-2">{{ $post->created_at->format('F d, Y') }}</small>
                            <a href="{{ route('blog.show', ['blog' => $post->slug]) }}" class="btn btn-danger">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination Links -->
        <div class="pagination justify-content-center mt-4">
            {{ $blogPost->links() }}
        </div>
    </div>
</section>
@endsection
