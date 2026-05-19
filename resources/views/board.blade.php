@extends('layouts.app')

@section('title', 'Board of Directors | Harlan Group')

@section('content')
    <section class="hero" style="height: 40vh; min-height: 400px; background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('{{ asset($settings['board_bg'] ?? 'assets/images/hero_board.png') }}');">
        <div class="container">
            <div class="hero-content">
                <span class="section-tag" style="color: white; border: 1px solid white; padding: 5px 10px; border-radius: 4px; display: inline-block;">LEADERSHIP</span>
                <h1 style="font-size: 64px;">BOARD OF DIRECTORS</h1>
                <p>Experienced leaders driving long-term value across all group operations worldwide.</p>
            </div>
        </div>
    </section>

    <section class="container" style="padding: 100px 40px;">
        <div class="directors-grid">
            @foreach($directors as $director)
            <div class="director-card">
                <img src="{{ asset($director->image) }}" alt="{{ $director->name }}" class="director-img">
                <div class="director-info">
                    <h4>{{ $director->name }}</h4>
                    <p>{{ $director->role }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <div style="margin-top: 80px; padding: 60px; background: var(--light); border-radius: 20px;">
            <h3 style="font-size: 32px; margin-bottom: 20px;">GOVERNANCE & ETHICS</h3>
            <p style="color: var(--text-muted); line-height: 1.8;">Our board is committed to the highest standards of corporate governance, ensuring transparency, accountability, and ethical conduct across all business units. We believe that strong leadership and integrity are the foundations of sustainable growth and long-term value for our stakeholders.</p>
        </div>
    </section>
@endsection
