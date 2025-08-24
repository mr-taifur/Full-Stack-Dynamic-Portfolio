@extends('admin.layout')

@push('title')
Manage Educations
@endpush

@section('content')
<div style="max-width: 700px; margin: 40px auto; font-family: 'Segoe UI', sans-serif;">

    <h1 style="text-align:center; color:#00695c; margin-bottom:30px;">Manage Educations</h1>

    @if(session('success'))
        <p style="color: green; text-align:center;">{{ session('success') }}</p>
    @endif

    <!-- Add Education Form -->
    <div style="background:#e0f2f1; padding:20px; border-radius:12px; margin-bottom:25px;">
        <form action="/admin/educations" method="POST" style="display:flex; flex-direction:column; gap:12px;">
            @csrf
            <input type="text" name="type" placeholder="Type" value="{{ old('type') }}" style="padding:10px; border-radius:8px; border:1px solid #26a69a;">
            @error('type')<span style="color:red;">{{ $message }}</span>@enderror

            <input type="text" name="name" placeholder="Degree Name" value="{{ old('name') }}" style="padding:10px; border-radius:8px; border:1px solid #26a69a;">
            @error('name')<span style="color:red;">{{ $message }}</span>@enderror

            <input type="text" name="institute" placeholder="Institute" value="{{ old('institute') }}" style="padding:10px; border-radius:8px; border:1px solid #26a69a;">
            @error('institute')<span style="color:red;">{{ $message }}</span>@enderror

            <input type="number" name="enrolled_year" placeholder="Enrolled Year" value="{{ old('enrolled_year') }}" style="padding:10px; border-radius:8px; border:1px solid #26a69a;">
            @error('enrolled_year')<span style="color:red;">{{ $message }}</span>@enderror

            <input type="number" name="passing_year" placeholder="Passing Year" value="{{ old('passing_year') }}" style="padding:10px; border-radius:8px; border:1px solid #26a69a;">
            @error('passing_year')<span style="color:red;">{{ $message }}</span>@enderror

            <input type="text" name="grade" placeholder="Grade" value="{{ old('grade') }}" style="padding:10px; border-radius:8px; border:1px solid #26a69a;">
            @error('grade')<span style="color:red;">{{ $message }}</span>@enderror

            <button type="submit" style="padding:12px; background-color:#00695c; color:#fff; border:none; border-radius:8px; cursor:pointer; font-weight:bold;">Add Education</button>
        </form>
    </div>

    <!-- Display Education Cards -->
    <div style="display:flex; flex-direction:column; gap:15px;">
        @forelse($educations as $edu)
        <div style="background:#b2dfdb; padding:15px 20px; border-radius:12px; border-left:5px solid #00695c;">
            <p><strong>{{ $edu->name }} ({{ $edu->type }})</strong></p>
            <p style="font-size:14px; color:#004d40;">{{ $edu->institute }} | {{ $edu->enrolled_year }} - {{ $edu->passing_year }}</p>
            @if($edu->grade)
            <p style="font-size:14px; color:#004d40;">Grade: {{ $edu->grade }}</p>
            @endif
        </div>
        @empty
        <p style="text-align:center; color:#004d40;">No education records found.</p>
        @endforelse
    </div>

</div>
@endsection
