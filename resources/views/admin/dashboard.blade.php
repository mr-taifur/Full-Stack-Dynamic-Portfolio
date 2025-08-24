@extends('admin.layout')

@push('title')
Admin Dashboard
@endpush

@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-container">
        <h1 class="dashboard-title">Admin Dashboard</h1>

        <div class="dashboard-cards">
            <div class="card">
                <div class="card-icon users-icon">👥</div>
                <div class="card-content">
                    <h3>Total Users</h3>
                    <p>{{ $totalUsers }}</p>
                </div>
            </div>
            <div class="card">
                <div class="card-icon projects-icon">📁</div>
                <div class="card-content">
                    <h3>Total Projects</h3>
                    <p>{{ $totalProjects }}</p>
                </div>
            </div>
            <div class="card">
                <div class="card-icon messages-icon">✉️</div>
                <div class="card-content">
                    <h3>Total Messages</h3>
                    <p>{{ $totalMessages ?? '0' }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Wrapper to center the dashboard */
.dashboard-wrapper {
    display: flex;
    justify-content: center; /* center horizontally */
    align-items: flex-start; /* top alignment */
    padding: 40px 20px;
    min-height: 100vh;
    box-sizing: border-box;
}

/* Dashboard container */
.dashboard-container {
    max-width: 900px; /* limits width for better look */
    width: 100%;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Title */
.dashboard-title {
    text-align: center; /* center the title */
    font-size: 2rem;
    margin-bottom: 30px;
    color: #333;
}

/* Cards layout */
.dashboard-cards {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
    justify-content: center; /* center cards */
}

/* Individual card */
.card {
    background: #fff;
    flex: 1 1 200px;
    max-width: 250px;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    display: flex;
    align-items: center;
    transition: transform 0.2s, box-shadow 0.2s;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}

.card-icon {
    font-size: 2.5rem;
    margin-right: 15px;
}

.card-content h3 {
    margin: 0;
    font-size: 1.2rem;
    color: #555;
}

.card-content p {
    font-size: 1.5rem;
    font-weight: bold;
    margin: 5px 0 0 0;
    color: #222;
}

/* Icon colors */
.users-icon { color: #4caf50; }
.projects-icon { color: #2196f3; }
.messages-icon { color: #ff9800; }
</style>
@endsection
