@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset($settings['hero_bg'] ?? 'assets/images/hero_bg.png') }}');">
        <div class="container">
            <div class="hero-content">
                <span class="section-tag" style="color: white; border: 1px solid rgba(255,255,255,0.3); padding: 5px 15px; border-radius: 40px; display: inline-block; font-size: 10px; backdrop-filter: blur(10px);">EST. 1976 — HAMBURG, GERMANY</span>
                <h1>BUILT TO<br><span>LAST.</span></h1>
                <p>{{ $settings['hero_subtitle'] ?? 'A global construction and infrastructure group operating across civil, energy, maritime, building, industrial, and digital sectors in 17 countries.' }}</p>
                <div class="hero-btns">
                    <a href="{{ route('businesses') }}" class="btn-primary">Explore Our Work <i class="fas fa-arrow-right"></i></a>
                    <a href="{{ route('contact') }}" class="btn-outline">Get in Touch</a>
                </div>
            </div>
            <div class="hero-stats-overlay">
                <h3>{{ $settings['hero_stats_value'] ?? '140+' }}</h3>
                <p>{{ $settings['hero_stats_label'] ?? 'LIVE PROJECTS' }}</p>
            </div>
        </div>
    </section>

    <!-- Stats Bar -->
    <div class="stats-bar">
        <div class="container">
            <div class="stats-grid">
                @foreach($stats as $stat)
                <div class="stat-item">
                    <div class="stat-icon"><i class="{{ $stat->icon }}"></i></div>
                    <div class="stat-info">
                        <h4 class="counter" data-target="{{ $stat->value }}">{{ $stat->value }}</h4>
                        <p>{{ $stat->label }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Summary Section -->
    <section class="container" style="padding: 120px 40px; text-align: center;">
        <span class="section-tag">WHO WE ARE</span>
        <h2 style="font-size: 48px; margin-bottom: 30px;">SHAPING THE GLOBAL<br>INFRASTRUCTURE LANDSCAPE</h2>
        <p style="max-width: 800px; margin: 0 auto 60px; color: var(--text-muted); font-size: 18px;">Harlan Group is a leading international construction and infrastructure provider. With nearly five decades of experience, we deliver complex, large-scale projects that drive economic growth and community development across four continents.</p>
        <div style="display: flex; justify-content: center; gap: 30px; flex-wrap: wrap;">
            <a href="{{ route('board') }}" class="btn-primary">Meet Our Leadership</a>
            <a href="{{ route('impact') }}" class="btn-outline">Our Sustainability Goal</a>
        </div>
    </section>

    <!-- Recent News Summary -->
    <section style="background: #fdfdfd; padding: 100px 0;">
        <div class="container">
            <div class="section-header">
                <div class="section-title">
                    <span class="section-tag">LATEST NEWS</span>
                    <h2>MEDIA CENTRE</h2>
                </div>
                <a href="{{ route('media') }}" style="color: var(--primary); font-weight: 700;">View All News <i class="fas fa-arrow-right"></i></a>
            </div>
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
        </div>
    <!-- Global Presence Section -->
    <section class="container" style="padding: 100px 40px; text-align: center;">
        <span class="section-tag">GLOBAL REACH</span>
        <h2 style="font-size: 48px; margin-bottom: 60px;">17 COUNTRIES. 4 CONTINENTS.</h2>
        <div style="background: url('https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1?auto=format&fit=crop&w=1400&q=80'); height: 500px; border-radius: 20px; background-size: cover; background-position: center; position: relative; overflow: hidden; display: flex; align-items: center; justify-content: center;">
            <div style="background: rgba(0,0,0,0.4); position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>
            <div style="position: relative; z-index: 1; color: white; max-width: 600px;">
                <h3 style="font-size: 32px; margin-bottom: 20px;">OUR WORLDWIDE FOOTPRINT</h3>
                <p style="font-size: 16px; opacity: 0.9;">From high-speed rail in Europe to massive ports in Asia and urban infrastructure in Africa, Harlan Group is everywhere that progress is being built.</p>
                <div style="display: flex; justify-content: center; gap: 40px; margin-top: 40px; flex-wrap: wrap;">
                    <div><h4 style="font-size: 24px; color: var(--primary);">05</h4><p style="font-size: 12px; text-transform: uppercase;">Regional Hubs</p></div>
                    <div><h4 style="font-size: 24px; color: var(--primary);">1200+</h4><p style="font-size: 12px; text-transform: uppercase;">Global Partners</p></div>
                    <div><h4 style="font-size: 24px; color: var(--primary);">48</h4><p style="font-size: 12px; text-transform: uppercase;">Years Experience</p></div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section container" style="margin-bottom: 100px;">
        <div class="cta-content" style="text-align: center;">
            <img src="{{ $settings['cta_image'] ?? 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1400&q=80' }}" alt="Footer Building" style="width: 100%; height: 400px; object-fit: cover; border-radius: 20px; margin-bottom: 60px;">
            <h2 style="font-size: 48px; margin-bottom: 20px;">{{ $settings['cta_title'] ?? 'LET\'S BUILD SOMETHING GREAT TOGETHER' }}</h2>
            <p style="max-width: 600px; margin: 0 auto 40px; color: var(--text-muted); font-size: 18px;">{{ $settings['cta_subtitle'] ?? 'We welcome enquiries from project owners, joint venture partners, investors, and prospective clients worldwide.' }}</p>
            <a href="{{ route('contact') }}" class="btn-primary" style="padding: 20px 60px; font-size: 18px;">Get in Touch <i class="fas fa-arrow-right"></i></a>
        </div>
    </section>
@endsection
