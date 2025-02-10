@extends('layouts.app')
@section('title', 'Latest News')

@section('content')
<section class="latest-news-section pt-130 pb-130" style="background: #f7f7f7;">
    <div class="container">
        <h2 class="section-title text-center mb-5" style="color: #333;">Latest News</h2>
        
        <div class="row gy-4">
            @foreach ($news as $article)
            <div class="col-lg-4 col-md-6">
                <div class="news-card p-4 shadow-sm bg-white rounded">
                    <!-- News Image Section -->
                    <div class="news-image mb-3">
                        @if ($article->image)
                            <img src="{{ Storage::url($article->image) }}" class="img-fluid rounded" alt="{{ $article->title }}">
                        @else
                            <img src="default-image.jpg" class="img-fluid rounded" alt="Default News Image">
                        @endif
                    </div>
                    
                    <!-- News Content Section -->
                    <div class="news-content">
                        <ul class="news-meta list-inline mb-3">
                            <!-- Date and Author -->
                            <li class="list-inline-item" style="color: #6c757d; font-size: 0.9rem;">
                                <i class="fa-solid fa-calendar-days me-1"></i>{{ $article->created_at->format('F d, Y') }}
                            </li>
                            <li class="list-inline-item" style="color: #6c757d; font-size: 0.9rem;">
                            </li>
                        </ul>
                        
                        <!-- Title -->
                        <h4 class="news-title mb-3" style="color: #333;">
                            <a href="{{ route('news.show', $article->id) }}" style="color: #007b88; text-decoration: none;">
                                {{ $article->title }}
                            </a>
                        </h4>
                        
                        <!-- Excerpt -->
                        <p class="news-excerpt" style="font-size: 0.95rem; color: #5c5c5c;">
                            {{ Str::limit($article->content, 120) }}
                        </p>

                        <!-- Read More Button -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Empty message if no news -->
        @if($news->isEmpty())
            <div class="col-12 text-center py-4">
                <p class="text-muted" style="font-size: 1.1rem;">No news articles available at the moment.</p>
            </div>
        @endif
    </div>
</section>
@endsection
