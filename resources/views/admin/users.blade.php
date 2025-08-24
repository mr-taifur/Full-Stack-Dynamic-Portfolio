@extends('admin.layout')

@push('title')
Manage Users
@endpush

@section('content')
<div style="max-width: 900px; margin: 40px auto; font-family: Arial, sans-serif;">

    <h1 style="text-align:center; margin-bottom: 30px; color: #333;">Manage Users</h1>

    @if(session('success'))
        <div style="background-color: #d4edda; color: #155724; padding: 12px 15px; border-radius: 8px; margin-bottom: 25px; text-align: center;">
            {{ session('success') }}
        </div>
    @endif

    <!-- Add User Card -->
    <div style="background: #f0f0f0; padding: 25px; border-radius: 12px; box-shadow: 0 6px 12px rgba(0,0,0,0.1); margin-bottom: 35px;">
        <form action="/admin/users" method="POST" style="display: flex; flex-wrap: wrap; gap: 15px;">
            @csrf
            <input type="text" name="name" placeholder="Name" required
                style="flex: 1 1 200px; padding: 12px; border-radius: 6px; border: 1px solid #ccc;">
            <input type="email" name="email" placeholder="Email" required
                style="flex: 1 1 200px; padding: 12px; border-radius: 6px; border: 1px solid #ccc;">
            <button type="submit"
                style="padding: 12px 25px; background-color: #28a745; color: #fff; border:none; border-radius: 6px; cursor:pointer;">
                Add User
            </button>
        </form>
    </div>

    <!-- Users Table -->
    <div style="overflow-x:auto;">
        <table style="width:100%; border-collapse: collapse; background: #fff; box-shadow: 0 4px 10px rgba(0,0,0,0.05); border-radius: 8px; overflow: hidden;">
            <thead style="background-color: #17a2b8; color: #fff;">
                <tr>
                    <th style="padding: 14px; text-align:left;">Name</th>
                    <th style="padding: 14px; text-align:left;">Email</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                <tr style="border-bottom: 1px solid #e0e0e0;">
                    <td style="padding: 12px;">{{ $user->name }}</td>
                    <td style="padding: 12px;">{{ $user->email }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="2" style="padding: 15px; text-align:center; color: #555;">No users found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
