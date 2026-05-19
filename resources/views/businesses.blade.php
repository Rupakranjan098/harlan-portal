@extends('layouts.app')

@section('title', 'Our Businesses | Harlan Group')

@section('content')
    <section class="hero" style="height: 40vh; min-height: 400px; background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('{{ asset($settings['businesses_bg'] ?? 'assets/images/hero_businesses.png') }}');">
        <div class="container">
            <div class="hero-content">
                <span class="section-tag" style="color: white; border: 1px solid white; padding: 5px 10px; border-radius: 4px; display: inline-block;">WHAT WE BUILD</span>
                <h1 style="font-size: 64px;">OUR BUSINESSES</h1>
                <p>Building critical infrastructure for a better tomorrow through diverse expertise.</p>
            </div>
        </div>
    </section>

    <section class="container" style="padding: 100px 40px;">
        <div class="businesses-grid">
            @foreach($businesses as $index => $business)
            <div class="business-card" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
                <div style="height: 200px; width: 100%; position: relative;">
                    <img src="{{ asset($business->image) }}" alt="{{ $business->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                    <span class="card-num" style="top: 20px; right: 20px; background: rgba(0,0,0,0.5); color: white; padding: 5px 10px; border-radius: 4px; backdrop-filter: blur(5px);">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                </div>
                <div style="padding: 30px;">
                    <div class="business-icon" style="background: var(--primary); margin-top: -50px; position: relative; z-index: 1; border: 4px solid white;"><i class="{{ $business->icon }}"></i></div>
                    <h3 style="margin-top: 15px;">{{ $business->title }}</h3>
                    <p style="font-size: 14px; min-height: 60px;">{{ $business->description }}</p>
                    <div class="card-stats" style="margin-top: 20px;">
                        <div class="c-stat"><h5>{{ $business->projects }}</h5><p>Projects</p></div>
                        <div class="c-stat"><h5>{{ $business->revenue }}</h5><p>Revenue</p></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection
