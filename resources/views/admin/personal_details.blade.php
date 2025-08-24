@extends('admin.layout')

@push('title')
Personal Info
@endpush

@section('content')
<div style="max-width: 600px; margin: 40px auto; font-family: 'Segoe UI', sans-serif;">

    <h1 style="text-align:center; color: #4a148c; margin-bottom: 25px;">Personal Info</h1>

    @if(session('success'))
        <div style="background-color: #e1bee7; color: #4a148c; padding: 12px; border-radius: 8px; margin-bottom: 20px; text-align:center;">
            {{ session('success') }}
        </div>
    @endif

    <!-- Add Details Form -->
    <div style="background: #f3e5f5; padding: 20px; border-radius: 12px; margin-bottom: 30px;">
        <form action="/admin/personal-details" method="POST" style="display: flex; flex-direction: column; gap: 12px;">
            @csrf

            <textarea name="description" placeholder="Short Description" style="padding:10px; border-radius:8px; border:1px solid #ce93d8;">{{ old('description') }}</textarea>
            @error('description')<div style="color:red;">{{ $message }}</div>@enderror

            <input type="text" name="blood_group" placeholder="Blood Group" value="{{ old('blood_group') }}" style="padding:10px; border-radius:8px; border:1px solid #ce93d8;">
            @error('blood_group')<div style="color:red;">{{ $message }}</div>@enderror

            <input type="text" name="department" placeholder="Department" value="{{ old('department') }}" style="padding:10px; border-radius:8px; border:1px solid #ce93d8;">
            @error('department')<div style="color:red;">{{ $message }}</div>@enderror

            <button type="submit" style="padding:12px; background-color:#4a148c; color:#fff; border:none; border-radius:8px; cursor:pointer; font-weight:bold;">Save Info</button>
        </form>
    </div>

    <!-- Display Personal Details -->
    <div style="display: flex; flex-direction: column; gap: 15px;">
        @forelse($details as $detail)
        <div style="background:#fce4ec; padding:15px 20px; border-radius:12px; border-left:5px solid #4a148c;">
            <p><strong>{{ $detail->description }}</strong></p>
            <p style="font-size:14px; color:#6a1b9a;">Blood Group: {{ $detail->blood_group }} | Dept: {{ $detail->department }}</p>
        </div>
        @empty
        <p style="text-align:center; color:#9c27b0;">No info added yet.</p>
        @endforelse
    </div>

</div>
@endsection
