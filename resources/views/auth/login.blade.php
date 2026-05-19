@extends('layouts.app')

@section('title', 'Admin Login | Harlan Group')

@section('styles')
<style>
    .login-container {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        background-image: linear-gradient(rgba(18, 18, 18, 0.7), rgba(18, 18, 18, 0.8)), url('https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1920&q=80');
        background-size: cover;
        background-position: center;
    }

    .login-card {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        padding: 50px;
        border-radius: 24px;
        box-shadow: var(--shadow-xl);
        width: 100%;
        max-width: 450px;
        text-align: center;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .login-logo {
        font-size: 28px;
        font-weight: 800;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        color: var(--dark);
    }

    .login-logo span {
        color: var(--primary);
    }

    .login-subtitle {
        color: var(--text-muted);
        margin-bottom: 40px;
        font-size: 15px;
    }

    .input-group {
        display: flex;
        flex-direction: column;
        text-align: left;
        margin-bottom: 20px;
        gap: 8px;
    }

    .input-label {
        font-size: 13px;
        font-weight: 700;
        color: var(--text-muted);
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .login-input {
        width: 100%;
        padding: 16px 20px;
        border: 2px solid var(--border);
        border-radius: 12px;
        background: var(--light);
        font-family: var(--font-main);
        font-size: 16px;
        transition: var(--transition);
        outline: none;
        color: var(--text-main);
    }

    .login-input:focus {
        border-color: var(--primary);
        background: var(--white);
        box-shadow: 0 0 0 4px rgba(230, 103, 13, 0.1);
    }

    .btn-login {
        width: 100%;
        background: var(--primary);
        color: var(--white);
        padding: 16px;
        border-radius: 12px;
        font-weight: 700;
        font-size: 16px;
        border: none;
        cursor: pointer;
        transition: var(--transition);
        box-shadow: var(--shadow-md);
        margin-top: 10px;
    }

    .btn-login:hover {
        background: var(--primary-hover);
        transform: translateY(-2px);
        box-shadow: var(--shadow-lg);
    }

    .error-msg {
        color: #e3342f;
        font-size: 13px;
        margin-top: 5px;
        display: block;
    }
</style>
@endsection

@section('content')
<div class="login-container">
    <div class="login-card">
        <a href="{{ route('home') }}" class="login-logo">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Harlan Group Logo" style="height: 65px;">
        </a>
        <p class="login-subtitle">Sign in to access the admin dashboard</p>

        @if($errors->any())
            <div style="background: rgba(227, 52, 47, 0.1); border-left: 4px solid #e3342f; padding: 15px; border-radius: 8px; margin-bottom: 25px; text-align: left;">
                <p style="color: #e3342f; font-size: 14px; margin: 0; font-weight: 500;">
                    <i class="fas fa-exclamation-circle" style="margin-right: 5px;"></i> {{ $errors->first() }}
                </p>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <div class="input-group">
                <label class="input-label">Email Address</label>
                <input type="email" name="email" class="login-input" value="{{ old('email') }}" placeholder="admin@harlangroup.com" required autofocus>
            </div>
            
            <div class="input-group">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <label class="input-label">Password</label>
                </div>
                <input type="password" name="password" class="login-input" placeholder="••••••••" required>
            </div>
            
            <button type="submit" class="btn-login">
                Sign In <i class="fas fa-arrow-right" style="margin-left: 5px;"></i>
            </button>
        </form>
        
        <div style="margin-top: 30px; display: flex; justify-content: space-between;">
            <a href="{{ route('home') }}" style="color: var(--text-muted); font-size: 14px; text-decoration: none;">&larr; Back to Website</a>
            <a href="{{ route('register') }}" style="color: var(--primary); font-size: 14px; text-decoration: none; font-weight: 600;">Create an account</a>
        </div>
    </div>
</div>
@endsection
