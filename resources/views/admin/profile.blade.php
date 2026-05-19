@extends('layouts.admin')

@section('title', 'Profile Settings')

@section('content')
    <h1>Profile Settings</h1>
    <p style="color: #666; margin-bottom: 40px;">Update your admin account details and password.</p>

    <!-- Profile Section -->
    <section id="profile" class="card">
        <div class="grid" style="grid-template-columns: 1fr;">
            <form action="{{ route('admin.profile.update') }}" method="POST" class="card" style="margin-bottom: 0; max-width: 600px;">
                @csrf
                @if($errors->any())
                    <div class="alert" style="background: #f8d7da; color: #721c24;">
                        <ul style="margin: 0; padding-left: 20px;">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group">
                    <label>FULL NAME</label>
                    <input type="text" name="name" value="{{ auth()->user()->name }}" required>
                </div>
                <div class="form-group">
                    <label>EMAIL ADDRESS</label>
                    <input type="email" name="email" value="{{ auth()->user()->email }}" required>
                </div>
                <div class="form-group">
                    <label>NEW PASSWORD (Leave blank to keep current)</label>
                    <input type="password" name="password" placeholder="••••••••">
                </div>
                <div class="form-group">
                    <label>CONFIRM NEW PASSWORD</label>
                    <input type="password" name="password_confirmation" placeholder="••••••••">
                </div>
                <button type="submit">Update Profile</button>
            </form>
        </div>
    </section>
@endsection
