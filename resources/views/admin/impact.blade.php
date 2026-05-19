@extends('layouts.admin')

@section('title', 'Impact Stats')

@section('content')
    <h1>Sustainability Impact Stats</h1>
    <p style="color: #666; margin-bottom: 40px;">Manage the sustainability impact statistics.</p>

    <div class="card" style="margin-bottom: 40px; border-left: 4px solid var(--primary);">
        <h3 style="margin-bottom: 20px;">Add New Impact Stat</h3>
        <form action="{{ route('admin.impact.store') }}" method="POST">
            @csrf
            <div class="admin-form-grid-3">
                <div class="form-group">
                    <label>VALUE</label>
                    <input type="text" name="value" required>
                </div>
                <div class="form-group">
                    <label>DESCRIPTION</label>
                    <input type="text" name="description" required>
                </div>
                <div class="form-group">
                    <label>ICON (FontAwesome Class)</label>
                    <input type="text" name="icon" placeholder="fas fa-leaf">
                </div>
            </div>
            <button type="submit">Create Impact Stat</button>
        </form>
    </div>

    <h3 style="margin-bottom: 20px;">Existing Impact Stats</h3>
    <div class="grid">
        @foreach($impactStats as $impact)
        <form action="{{ route('admin.impact.update', $impact->id) }}" method="POST" class="card" style="margin-bottom: 0;">
            @csrf
            <div class="form-group">
                <label>VALUE</label>
                <input type="text" name="value" value="{{ $impact->value }}">
            </div>
            <div class="form-group">
                <label>DESCRIPTION</label>
                <input type="text" name="description" value="{{ $impact->description }}">
            </div>
            <div class="form-group">
                <label>ICON</label>
                <input type="text" name="icon" value="{{ $impact->icon }}">
            </div>
            <button type="submit">Update Stat</button>
        </form>
        @endforeach
    </div>
@endsection
