@extends('layouts.admin')

@section('title', 'Directors')

@section('content')
    <h1>Board of Directors</h1>
    <p style="color: #666; margin-bottom: 40px;">Manage the board of directors.</p>

    <div class="card" style="margin-bottom: 40px; border-left: 4px solid var(--primary);">
        <h3 style="margin-bottom: 20px;">Add New Director</h3>
        <form action="{{ route('admin.directors.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="admin-form-grid-3">
                <div class="form-group">
                    <label>NAME</label>
                    <input type="text" name="name" required>
                </div>
                <div class="form-group">
                    <label>ROLE</label>
                    <input type="text" name="role" required>
                </div>
                <div class="form-group">
                    <label>IMAGE UPLOAD</label>
                    <input type="file" name="image" accept="image/*" style="padding: 10px; background: white; border: 1px solid var(--border); border-radius: 8px;">
                </div>
            </div>
            <button type="submit">Create Director</button>
        </form>
    </div>

    <h3 style="margin-bottom: 20px;">Existing Directors</h3>
    <div class="grid">
        @foreach($directors as $director)
        <form action="{{ route('admin.directors.update', $director->id) }}" method="POST" enctype="multipart/form-data" class="card" style="margin-bottom: 0;">
            @csrf
            <div class="form-group">
                <label>NAME</label>
                <input type="text" name="name" value="{{ $director->name }}">
            </div>
            <div class="form-group">
                <label>ROLE</label>
                <input type="text" name="role" value="{{ $director->role }}">
            </div>
            <div class="form-group">
                <label>IMAGE UPLOAD (Leave blank to keep current)</label>
                <div style="display: flex; gap: 15px; align-items: center;">
                    @if($director->image)
                        <img src="{{ asset($director->image) }}" style="width: 50px; height: 50px; border-radius: 8px; object-fit: cover;">
                    @endif
                    <input type="file" name="image" accept="image/*" style="padding: 10px; background: white; border: 1px solid var(--border); border-radius: 8px; flex: 1;">
                </div>
            </div>
            <button type="submit">Update Director</button>
        </form>
        @endforeach
    </div>
@endsection
