@extends('layouts.app')

@section('title', 'Our Impact & Sustainability | Harlan Group')

@section('styles')
<style>
    .esg-card {
        background: var(--white);
        border: 1px solid var(--border);
        border-radius: 20px;
        padding: 40px;
        position: relative;
        overflow: hidden;
        transition: var(--transition);
        box-shadow: var(--shadow-sm);
        z-index: 1;
    }
    .esg-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-xl);
        border-color: rgba(230, 103, 13, 0.3);
    }
    .esg-card::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: linear-gradient(135deg, rgba(230, 103, 13, 0.05) 0%, transparent 100%);
        z-index: -1;
    }
    .esg-icon-wrap {
        width: 60px; height: 60px;
        border-radius: 15px;
        background: var(--primary);
        color: var(--white);
        display: flex; align-items: center; justify-content: center;
        font-size: 24px;
        margin-bottom: 25px;
        box-shadow: 0 10px 20px rgba(230, 103, 13, 0.2);
    }
    .sdg-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 20px;
        margin-top: 40px;
    }
    .sdg-box {
        aspect-ratio: 1;
        border-radius: 12px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 20px;
        color: white;
        font-weight: 700;
        transition: transform 0.3s;
        cursor: default;
        position: relative;
        overflow: hidden;
    }
    .sdg-box::after {
        content: '';
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background: linear-gradient(to bottom, rgba(255,255,255,0.2), transparent);
        pointer-events: none;
    }
    .sdg-box:hover { transform: scale(1.05); }
    .sdg-box i { font-size: 40px; margin-bottom: 15px; }

    @media (max-width: 768px) {
        .net-zero-grid {
            grid-template-columns: 1fr !important;
        }
    }
</style>
    @viteReactRefresh
    @vite(['resources/js/app.jsx'])
@endsection

@section('content')
    <section class="hero" style="height: 50vh; min-height: 500px; background-image: linear-gradient(rgba(18,18,18,0.7), rgba(18,18,18,0.8)), url('{{ $settings['impact_bg'] ?? 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=1920&q=80' }}');">
        <div class="container" style="display: flex; align-items: center; height: 100%;">
            <div class="hero-content">
                <span class="section-tag" style="color: white; background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2); padding: 8px 20px; border-radius: 30px; display: inline-block; backdrop-filter: blur(10px); margin-bottom: 25px;">SUSTAINABILITY & CSR</span>
                <h1 style="font-size: 72px; margin-bottom: 20px; line-height: 1;">{{ $settings['impact_title'] ?? 'OUR IMPACT' }}</h1>
                <p style="font-size: 20px; opacity: 0.9; max-width: 600px;">{{ $settings['impact_subtitle'] ?? 'Committed to a sustainable future through innovation, ethical practices, and community investment.' }}</p>
            </div>
        </div>
    </section>

    <!-- Net Zero Section -->
    <section style="padding: 120px 0; background: #FDFDFD; position: relative; overflow: hidden;">
        <div style="position: absolute; top: -100px; right: -100px; width: 400px; height: 400px; background: rgba(230, 103, 13, 0.05); border-radius: 50%; filter: blur(60px);"></div>
        <div class="container">
            <div class="net-zero-grid">
                <div>
                    <h2 style="font-size: 48px; color: var(--dark); margin-bottom: 30px; line-height: 1.1;">{{ $settings['net_zero_title'] ?? 'DRIVING TOWARDS' }}<br><span style="color: var(--primary);">{{ $settings['net_zero_highlight'] ?? 'NET-ZERO 2040' }}</span></h2>
                    <p style="color: var(--text-muted); font-size: 18px; line-height: 1.8; margin-bottom: 30px;">
                        {{ $settings['net_zero_text1'] ?? 'The climate crisis demands immediate, aggressive action. At Harlan Group, we are completely transforming our global operations, supply chains, and construction methodologies to achieve full carbon neutrality by 2040.' }}
                    </p>
                    <p style="color: var(--text-muted); font-size: 16px; line-height: 1.8; margin-bottom: 40px;">
                        {{ $settings['net_zero_text2'] ?? 'By integrating renewable energy, pioneering green building materials, and implementing circular economy principles across all 17 countries we operate in, we aren\'t just adapting to the future—we are building it.' }}
                    </p>
                    <div style="display: flex; gap: 30px; flex-wrap: wrap;">
                        <div style="border-left: 3px solid var(--primary); padding-left: 20px;">
                            <h4 style="font-size: 32px; color: var(--dark); margin: 0;">100%</h4>
                            <p style="color: var(--text-muted); font-size: 14px; margin: 0; text-transform: uppercase; font-weight: 600;">Renewable Energy by 2030</p>
                        </div>
                        <div style="border-left: 3px solid var(--primary); padding-left: 20px;">
                            <h4 style="font-size: 32px; color: var(--dark); margin: 0;">Zero</h4>
                            <p style="color: var(--text-muted); font-size: 14px; margin: 0; text-transform: uppercase; font-weight: 600;">Waste to Landfill</p>
                        </div>
                    </div>
                </div>
                <div style="position: relative;">
                    <img src="{{ asset($settings['net_zero_image'] ?? 'https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?auto=format&fit=crop&w=800&q=80') }}" alt="Sustainability" style="border-radius: 20px; box-shadow: var(--shadow-xl);">
                    <div class="sustainability-badge">
                        <i class="fas fa-leaf" style="font-size: 40px; color: var(--primary); margin-bottom: 15px;"></i>
                        <h5 style="margin: 0; font-size: 18px;">Pioneering Green Tech</h5>
                        <p style="margin: 5px 0 0; color: var(--text-muted); font-size: 14px;">$2B Invested Annually</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Metrics Grid -->
    <section style="padding: 100px 0; background: var(--dark); color: white; position: relative;">
        <div class="container">
            <div style="text-align: center; margin-bottom: 80px;">
                <span class="section-tag" style="background: rgba(255,255,255,0.1);">MEASURABLE IMPACT</span>
                <h2 style="font-size: 42px; margin-top: 20px;">OUR 2023 PERFORMANCE</h2>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                @foreach($impactStats as $impact)
                <div class="esg-card" style="background: rgba(255,255,255,0.03); border-color: rgba(255,255,255,0.1);">
                    <div class="esg-icon-wrap" style="background: rgba(230, 103, 13, 0.2); color: var(--primary); box-shadow: none;">
                        <i class="{{ $impact->icon }}"></i>
                    </div>
                    <h4 style="font-size: 40px; margin-bottom: 10px; color: white;">{{ $impact->value }}</h4>
                    <p style="color: rgba(255,255,255,0.6); font-size: 16px; line-height: 1.5; margin: 0;">{{ $impact->description }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- UN SDGs -->
    <section style="padding: 120px 0; background: white;">
        <div class="container">
            <div style="text-align: center; max-width: 800px; margin: 0 auto;">
                <h2 style="font-size: 42px; color: var(--dark); margin-bottom: 20px;">{{ $settings['sdg_title'] ?? 'UNITED NATIONS SDGs' }}</h2>
                <p style="color: var(--text-muted); font-size: 18px;">{{ $settings['sdg_text'] ?? 'Our corporate strategy aligns with the UN Sustainable Development Goals, focusing our efforts where we can make the most profound impact globally.' }}</p>
            </div>

            <div id="sdg-react-root"></div>
        </div>
    </section>
@endsection
