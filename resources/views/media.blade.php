@extends('layouts.app')

@section('title', 'Media Centre | Harlan Group')

@section('content')
    <section class="hero" style="height: 40vh; min-height: 400px; background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('{{ asset($settings['media_bg'] ?? 'assets/images/hero_media.png') }}');">
        <div class="container">
            <div class="hero-content">
                <span class="section-tag" style="color: white; border: 1px solid white; padding: 5px 10px; border-radius: 4px; display: inline-block;">PRESS & NEWS</span>
                <h1 style="font-size: 64px;">MEDIA CENTRE</h1>
                <p>Stay updated with the latest news, reports, and project updates from across the globe.</p>
            </div>
        </div>
    </section>

    <section class="container" style="padding: 100px 40px;">
        <div class="media-grid">
            @foreach($news as $article)
            <div class="media-card">
                <img src="{{ $article->image }}" alt="{{ $article->title }}" class="media-img">
                <div class="media-content">
                    <span class="media-tag">{{ $article->tag }} | {{ \Carbon\Carbon::parse($article->published_at)->format('d M Y') }}</span>
                    <h4>{{ $article->title }}</h4>
                    <p>{{ $article->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
        
        <div style="margin-top: 60px; text-align: center;">
            <a href="#" class="btn-outline">Load More Articles</a>
        </div>
    </section>
@endsection
