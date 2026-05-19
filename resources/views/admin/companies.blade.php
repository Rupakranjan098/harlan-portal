@extends('layouts.admin')

@section('title', 'Companies')

@section('content')
    <h1>Group Companies</h1>
    <p style="color: #666; margin-bottom: 40px;">Manage the companies under the group.</p>

    <div class="card" style="margin-bottom: 40px; border-left: 4px solid var(--primary);">
        <h3 style="margin-bottom: 20px;">Add New Company</h3>
        <form action="{{ route('admin.companies.store') }}" method="POST">
            @csrf
            <div class="admin-form-grid-3">
                <div class="form-group">
                    <label>COMPANY NAME</label>
                    <input type="text" name="name" required>
                </div>
                <div class="form-group">
                    <label>IMAGE PATH</label>
                    <input type="text" name="image">
                </div>
                <div class="form-group">
                    <label>COUNTRY</label>
                    <input type="text" name="country" required>
                </div>
                <div class="form-group">
                    <label>SECTOR</label>
                    <input type="text" name="sector" required>
                </div>
                <div class="form-group">
                    <label>FOUNDED (Year)</label>
                    <input type="text" name="founded" required>
                </div>
                <div class="form-group">
                    <label>STAKE</label>
                    <input type="text" name="stake" required>
                </div>
            </div>
            <button type="submit">Create Company</button>
        </form>
    </div>

    <h3 style="margin-bottom: 20px;">Existing Companies</h3>
    <div class="grid">
        @foreach($companies as $company)
        <form action="{{ route('admin.companies.update', $company->id) }}" method="POST" class="card" style="margin-bottom: 0;">
            @csrf
            <div class="form-group">
                <label>COMPANY NAME</label>
                <input type="text" name="name" value="{{ $company->name }}">
            </div>
            <div class="form-group">
                <label>IMAGE PATH</label>
                <input type="text" name="image" value="{{ $company->image }}">
            </div>
            <div class="form-group">
                <label>COUNTRY</label>
                <input type="text" name="country" value="{{ $company->country }}">
            </div>
            <div class="form-group">
                <label>SECTOR</label>
                <input type="text" name="sector" value="{{ $company->sector }}">
            </div>
            <div class="form-group">
                <label>FOUNDED (Year)</label>
                <input type="text" name="founded" value="{{ $company->founded }}">
            </div>
            <div class="form-group">
                <label>STAKE</label>
                <input type="text" name="stake" value="{{ $company->stake }}">
            </div>
            <button type="submit">Update Company</button>
        </form>
        @endforeach
    </div>
@endsection
