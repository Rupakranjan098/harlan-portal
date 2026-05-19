@extends('layouts.app')

@section('title', 'Our History | Harlan Group')

@section('content')
    <section class="hero" style="height: 40vh; min-height: 400px; background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('{{ asset($settings['timeline_bg'] ?? 'assets/images/hero_timeline.png') }}');">
        <div class="container">
            <div class="hero-content">
                <span class="section-tag" style="color: white; border: 1px solid white; padding: 5px 10px; border-radius: 4px; display: inline-block;">OUR HISTORY</span>
                <h1 style="font-size: 64px;">48 YEARS BUILDING</h1>
                <p>From a small road contract in Hamburg to a global infrastructure leader.</p>
            </div>
        </div>
    </section>

    <section class="container" style="padding: 100px 40px;">
        <div class="timeline-grid">
            @foreach($timeline as $item)
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <h5>{{ $item->category }}</h5>
                <h4>{{ $item->year }}</h4>
                <p>{{ $item->description }}</p>
            </div>
            @endforeach
        </div>
        
        <div style="margin-top: 100px; text-align: center; border-top: 1px solid var(--border); padding-top: 60px;">
            <p style="font-size: 24px; color: var(--primary); font-weight: 700; font-style: italic;">And the journey continues...</p>
        </div>
    </section>
@endsection
