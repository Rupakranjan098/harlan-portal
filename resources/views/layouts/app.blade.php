<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Harlan Group | Built to Last')</title>
    <meta name="description" content="A global construction and infrastructure group operating across civil, energy, maritime, building, industrial, and digital sectors in 17 countries.">
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('styles')
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Harlan Group Logo" style="height: 75px; max-height: 100%; margin: -10px 0;">
                </a>
                <div class="nav-links">
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">HOME</a>
                    <a href="{{ route('board') }}" class="{{ request()->routeIs('board') ? 'active' : '' }}">BOARD</a>
                    <a href="{{ route('businesses') }}" class="{{ request()->routeIs('businesses') ? 'active' : '' }}">BUSINESSES</a>
                    <a href="{{ route('companies') }}" class="{{ request()->routeIs('companies') ? 'active' : '' }}">COMPANIES</a>
                    <a href="{{ route('impact') }}" class="{{ request()->routeIs('impact') ? 'active' : '' }}">IMPACT</a>
                    <a href="{{ route('timeline') }}" class="{{ request()->routeIs('timeline') ? 'active' : '' }}">TIMELINE</a>
                    <a href="{{ route('media') }}" class="{{ request()->routeIs('media') ? 'active' : '' }}">MEDIA</a>
                    <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">CONTACT</a>
                </div>
                <div class="nav-mobile-toggle">
                    <i class="fas fa-bars"></i>
                </div>
                <a href="{{ route('contact') }}" class="btn-contact">Get in Touch <i class="fas fa-arrow-right"></i></a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <a href="{{ route('home') }}" class="logo" style="margin-bottom: 20px;">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Harlan Group Logo" style="height: 65px;">
                    </a>
                    <p style="color: rgba(255,255,255,0.5); font-size: 14px; line-height: 1.6;">{{ $settings['footer_about'] ?? 'A global construction and infrastructure group operating across 17 countries.' }}</p>
                    <div style="display: flex; gap: 15px; margin-top: 25px;">
                        <a href="#" style="color: white; font-size: 20px;"><i class="fab fa-linkedin"></i></a>
                        <a href="#" style="color: white; font-size: 20px;"><i class="fab fa-twitter"></i></a>
                        <a href="#" style="color: white; font-size: 20px;"><i class="fab fa-instagram"></i></a>
                        <a href="#" style="color: white; font-size: 20px;"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h5>QUICK LINKS</h5>
                    <ul class="footer-links">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('board') }}">Board</a></li>
                        <li><a href="{{ route('businesses') }}">Businesses</a></li>
                        <li><a href="{{ route('companies') }}">Companies</a></li>
                        <li><a href="{{ route('impact') }}">Impact</a></li>
                        <li><a href="{{ route('timeline') }}">Timeline</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h5>RESOURCES</h5>
                    <ul class="footer-links">
                        <li><a href="#">Media Centre</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Sustainability</a></li>
                        <li><a href="#">Legal Notice</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h5>CONTACT</h5>
                    <ul class="footer-links" style="color: rgba(255,255,255,0.5); font-size: 14px;">
                        <li style="margin-bottom: 15px;"><i class="fas fa-map-marker-alt" style="color: var(--primary);"></i> &nbsp; {{ $settings['contact_address'] ?? 'Hamburg, Germany' }}</li>
                        <li style="margin-bottom: 15px;"><i class="fas fa-phone" style="color: var(--primary);"></i> &nbsp; {{ $settings['contact_phone'] ?? '+49 40 6000 2200' }}</li>
                        <li><i class="fas fa-envelope" style="color: var(--primary);"></i> &nbsp; {{ $settings['contact_email'] ?? 'info@harlangroup.com' }}</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2024 Harlan Group AG. All rights reserved.</p>
                <div class="footer-legal">
                    <a href="#">PRIVACY POLICY</a>
                    <a href="#">LEGAL NOTICE</a>
                    <a href="#">INVESTOR RELATIONS</a>
                    <a href="#">CAREERS</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/main.js') }}"></script>
    @yield('scripts')
</body>
</html>
