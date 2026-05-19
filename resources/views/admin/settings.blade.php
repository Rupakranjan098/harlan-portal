@extends('layouts.admin')

@section('title', 'Settings')

@section('content')
    <h1>Global Site Settings</h1>
    <p style="color: #666; margin-bottom: 40px;">Manage global site settings and configurations.</p>

    <div class="card" style="margin-bottom: 40px; border-left: 4px solid var(--primary);">
        <h3 style="margin-bottom: 20px;">Site Logo</h3>
        <form action="{{ route('admin.settings.logo') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="display: flex; gap: 20px; align-items: center;">
                <div class="form-group" style="flex: 1; margin-bottom: 0;">
                    <label>NEW LOGO IMAGE (PNG)</label>
                    <input type="file" name="logo" accept="image/png, image/jpeg" required style="background: white; border-radius: 8px;">
                </div>
                <div style="background: var(--dark); padding: 10px; border-radius: 8px;">
                    <img src="{{ asset('assets/images/logo.png') }}?v={{ time() }}" alt="Current Logo" style="height: 40px; display: block;">
                </div>
            </div>
            <button type="submit" style="margin-top: 20px;">Upload Logo</button>
        </form>
    </div>

    <div class="grid">
        @foreach($settings as $setting)
        <form action="{{ route('admin.settings.update', $setting->id) }}" method="POST" class="card" style="margin-bottom: 0;">
            @csrf
            <div class="form-group">
                <label>{{ strtoupper(str_replace('_', ' ', $setting->key)) }}</label>
                <textarea name="value" rows="3">{{ $setting->value }}</textarea>
            </div>
            <button type="submit">Update Setting</button>
        </form>
        @endforeach
    </div>
@endsection
