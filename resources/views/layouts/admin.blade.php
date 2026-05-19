<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harlan Admin | @yield('title', 'Dashboard')</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #E6670D;
            --dark: #121212;
            --light: #F9F9F9;
            --white: #FFFFFF;
            --border: #EEEEEE;
        }
        body {
            font-family: 'Outfit', sans-serif;
            background: var(--light);
            margin: 0;
            display: flex;
        }
        .sidebar {
            width: 280px;
            background: var(--dark);
            height: 100vh;
            color: white;
            padding: 20px 20px;
            position: fixed;
        }
        .main-content {
            margin-left: 280px;
            flex: 1;
            padding: 60px;
        }
        .logo {
            font-size: 20px;
            font-weight: 800;
            margin-bottom: 20px;
            color: white;
            text-decoration: none;
            display: block;
        }
        .logo span { color: var(--primary); }
        .nav-item {
            padding: 15px;
            color: rgba(255,255,255,0.6);
            text-decoration: none;
            display: block;
            border-radius: 8px;
            margin-bottom: 10px;
            transition: all 0.3s;
        }
        .nav-item:hover, .nav-item.active {
            background: rgba(255,255,255,0.05);
            color: white;
        }
        .card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            border: 1px solid var(--border);
            margin-bottom: 30px;
        }
        h2 { margin-top: 0; font-size: 24px; margin-bottom: 30px; }
        .grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 20px; }
        .admin-form-grid-3 { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
        .admin-form-grid-2 { display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; font-size: 12px; font-weight: 700; color: #666; margin-bottom: 5px; }
        input, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid var(--border);
            border-radius: 6px;
            font-family: inherit;
            box-sizing: border-box;
        }
        button {
            background: var(--primary);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: 700;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover { background: #CC5A0A; }
        .alert {
            padding: 15px;
            background: #d4edda;
            color: #155724;
            border-radius: 8px;
            margin-bottom: 30px;
        }

        .admin-mobile-toggle {
            display: none;
            position: fixed;
            top: 20px;
            right: 20px;
            background: var(--primary);
            color: white;
            border: none;
            padding: 12px 15px;
            border-radius: 6px;
            font-size: 18px;
            z-index: 1000;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        @media (max-width: 768px) {
            .admin-mobile-toggle { display: block; }
            .sidebar {
                transform: translateX(-100%);
                transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                z-index: 999;
                box-shadow: 4px 0 15px rgba(0,0,0,0.1);
            }
            .sidebar.show {
                transform: translateX(0);
            }
            .main-content {
                margin-left: 0;
                padding: 80px 20px 30px 20px;
            }
            .grid {
                grid-template-columns: 1fr;
            }
            .admin-form-grid-3, .admin-form-grid-2 {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <button class="admin-mobile-toggle" onclick="document.querySelector('.sidebar').classList.toggle('show')">
        <i class="fas fa-bars"></i>
    </button>
    <div class="sidebar">
        <a href="{{ route('home') }}" class="logo">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Harlan Group Logo" style="width: 200px; margin: -20px 0; display: block;">
        </a>
        <a href="{{ route('admin.stats') }}" class="nav-item {{ request()->routeIs('admin.stats') || request()->routeIs('admin.dashboard') ? 'active' : '' }}"><i class="fas fa-chart-line"></i> &nbsp; Statistics</a>
        <a href="{{ route('admin.directors') }}" class="nav-item {{ request()->routeIs('admin.directors') ? 'active' : '' }}"><i class="fas fa-users"></i> &nbsp; Directors</a>
        <a href="{{ route('admin.businesses') }}" class="nav-item {{ request()->routeIs('admin.businesses') ? 'active' : '' }}"><i class="fas fa-building"></i> &nbsp; Businesses</a>
        <a href="{{ route('admin.companies') }}" class="nav-item {{ request()->routeIs('admin.companies') ? 'active' : '' }}"><i class="fas fa-sitemap"></i> &nbsp; Companies</a>
        <a href="{{ route('admin.impact') }}" class="nav-item {{ request()->routeIs('admin.impact') ? 'active' : '' }}"><i class="fas fa-leaf"></i> &nbsp; Impact Stats</a>
        <a href="{{ route('admin.settings') }}" class="nav-item {{ request()->routeIs('admin.settings') ? 'active' : '' }}"><i class="fas fa-cog"></i> &nbsp; Settings</a>
        
        <hr style="border-color: rgba(255,255,255,0.1); margin: 20px 0;">

        <a href="{{ route('admin.profile.edit') }}" class="nav-item {{ request()->routeIs('admin.profile.edit') ? 'active' : '' }}"><i class="fas fa-user"></i> &nbsp; Profile Settings</a>
        <form method="POST" action="{{ route('logout') }}" style="margin-top: 20px;">
            @csrf
            <button type="submit" style="width: 100%; text-align: left; background: transparent; color: #e3342f; padding: 15px; border-radius: 8px; font-weight: normal; border: 1px solid rgba(227, 52, 47, 0.3);">
                <i class="fas fa-sign-out-alt"></i> &nbsp; Logout
            </button>
        </form>
    </div>

    <div class="main-content">
        @if(session('success'))
            <div class="alert">{{ session('success') }}</div>
        @endif
        @yield('content')
    </div>
</body>
</html>
