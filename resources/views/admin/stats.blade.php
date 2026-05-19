@extends('layouts.admin')

@section('title', 'Statistics')

@section('content')
    <h1>Website Statistics</h1>
    <p style="color: #666; margin-bottom: 40px;">Manage the statistics displayed on the homepage.</p>

    <div class="card" style="margin-bottom: 40px; border-left: 4px solid var(--primary);">
        <h3 style="margin-bottom: 20px;">Add New Stat</h3>
        <form action="{{ route('admin.stats.store') }}" method="POST">
            @csrf
            <div class="admin-form-grid-3">
                <div class="form-group">
                    <label>LABEL</label>
                    <input type="text" name="label" required>
                </div>
                <div class="form-group">
                    <label>VALUE</label>
                    <input type="text" name="value" required>
                </div>
                <div class="form-group">
                    <label>ICON (FontAwesome Class)</label>
                    <input type="text" name="icon" placeholder="fas fa-chart-line">
                </div>
            </div>
            <button type="submit">Create Stat</button>
        </form>
    </div>

    <h3 style="margin-bottom: 20px;">Existing Statistics</h3>
    <div class="grid">
        @foreach($stats as $stat)
        <form action="{{ route('admin.stats.update', $stat->id) }}" method="POST" class="card" style="margin-bottom: 0;">
            @csrf
            <div class="form-group">
                <label>LABEL</label>
                <input type="text" name="label" value="{{ $stat->label }}">
            </div>
            <div class="form-group">
                <label>VALUE</label>
                <input type="text" name="value" value="{{ $stat->value }}">
            </div>
            <div class="form-group">
                <label>ICON (FontAwesome Class)</label>
                <input type="text" name="icon" value="{{ $stat->icon }}">
            </div>
            <button type="submit">Update Stat</button>
        </form>
        @endforeach
    </div>
@endsection
