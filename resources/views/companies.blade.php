@extends('layouts.app')

@section('title', 'Group Companies | Harlan Group')

@section('content')
    <section class="hero" style="height: 40vh; min-height: 400px; background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('{{ asset($settings['companies_bg'] ?? 'assets/images/hero_companies.png') }}');">
        <div class="container">
            <div class="hero-content">
                <span class="section-tag" style="color: white; border: 1px solid white; padding: 5px 10px; border-radius: 4px; display: inline-block;">GROUP STRUCTURE</span>
                <h1 style="font-size: 64px;">GROUP COMPANIES</h1>
                <p>A global network of specialized subsidiaries delivering excellence in every sector.</p>
            </div>
        </div>
    </section>

    <section class="container" style="padding: 100px 40px;">
        <div class="companies-grid">
            @foreach($companies as $company)
            <div class="card" style="padding: 0; overflow: hidden; background: white; border-radius: 20px; border: 1px solid var(--border); transition: var(--transition);">
                <div style="height: 250px; width: 100%; position: relative;">
                    <img src="{{ asset($company->image) }}" alt="{{ $company->name }}" style="width: 100%; height: 100%; object-fit: cover;">
                    <div style="position: absolute; bottom: 20px; left: 20px; background: var(--primary); color: white; padding: 5px 15px; border-radius: 4px; font-size: 12px; font-weight: 700;">
                        {{ $company->sector }}
                    </div>
                </div>
                <div style="padding: 30px;">
                    <h3 style="font-size: 24px; margin-bottom: 20px; color: var(--dark);">{{ $company->name }}</h3>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; font-size: 14px;">
                        <div>
                            <p style="color: var(--text-muted); margin-bottom: 5px;">COUNTRY</p>
                            <p style="font-weight: 700;">{{ $company->country }}</p>
                        </div>
                        <div>
                            <p style="color: var(--text-muted); margin-bottom: 5px;">FOUNDED</p>
                            <p style="font-weight: 700;">{{ $company->founded }}</p>
                        </div>
                        <div>
                            <p style="color: var(--text-muted); margin-bottom: 5px;">GROUP STAKE</p>
                            <p style="font-weight: 700; color: #2ECC71;">{{ $company->stake }}</p>
                        </div>
                    </div>
                    <a href="#" style="display: block; margin-top: 30px; text-align: center; color: var(--primary); font-weight: 700; font-size: 14px; text-transform: uppercase; letter-spacing: 1px;">Visit Subsidiary Site <i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection
