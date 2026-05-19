@extends('layouts.admin')

@section('title', 'Businesses')

@section('content')
    <h1>Business Sectors</h1>
    <p style="color: #666; margin-bottom: 40px;">Manage the business sectors.</p>

    <div class="card" style="margin-bottom: 40px; border-left: 4px solid var(--primary);">
        <h3 style="margin-bottom: 20px;">Add New Business Sector</h3>
        <form action="{{ route('admin.businesses.store') }}" method="POST">
            @csrf
            <div class="admin-form-grid-2">
                <div class="form-group">
                    <label>TITLE</label>
                    <input type="text" name="title" required>
                </div>
                <div class="form-group">
                    <label>IMAGE PATH</label>
                    <input type="text" name="image">
                </div>
            </div>
            <div class="admin-form-grid-3">
                <div class="form-group">
                    <label>ICON (e.g. fas fa-building)</label>
                    <input type="text" name="icon" required>
                </div>
                <div class="form-group">
                    <label>PROJECTS (e.g. 340)</label>
                    <input type="text" name="projects" required>
                </div>
                <div class="form-group">
                    <label>REVENUE (e.g. $1.1B)</label>
                    <input type="text" name="revenue" required>
                </div>
            </div>
            <div class="form-group">
                <label>DESCRIPTION</label>
                <textarea name="description" rows="3" required></textarea>
            </div>
            <button type="submit">Create Business</button>
        </form>
    </div>

    <h3 style="margin-bottom: 20px;">Existing Business Sectors</h3>
    <div class="grid">
        @foreach($businesses as $business)
        <form action="{{ route('admin.businesses.update', $business->id) }}" method="POST" class="card" style="margin-bottom: 0;">
            @csrf
            <div class="form-group">
                <label>TITLE</label>
                <input type="text" name="title" value="{{ $business->title }}">
            </div>
            <div class="form-group">
                <label>IMAGE PATH</label>
                <input type="text" name="image" value="{{ $business->image }}">
            </div>
            <div class="admin-form-grid-3">
                <div class="form-group">
                    <label>ICON</label>
                    <input type="text" name="icon" value="{{ $business->icon }}">
                </div>
                <div class="form-group">
                    <label>PROJECTS</label>
                    <input type="text" name="projects" value="{{ $business->projects }}">
                </div>
                <div class="form-group">
                    <label>REVENUE</label>
                    <input type="text" name="revenue" value="{{ $business->revenue }}">
                </div>
            </div>
            <div class="form-group">
                <label>DESCRIPTION</label>
                <textarea name="description" rows="3">{{ $business->description }}</textarea>
            </div>
            <button type="submit">Update Business</button>
        </form>
        @endforeach
    </div>
@endsection
