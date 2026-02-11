@extends('layouts.app')

@section('content')
    <h1>Application #{{ $application->id }}</h1>

    <div class="row">
        <div>
            <strong>Name</strong>
            <p>{{ $application->full_name }}</p>
        </div>
        <div>
            <strong>Email</strong>
            <p>{{ $application->email }}</p>
        </div>
    </div>

    <div class="row">
        <div>
            <strong>Phone</strong>
            <p>{{ $application->phone ?: 'N/A' }}</p>
        </div>
        <div>
            <strong>Program</strong>
            <p>{{ $application->program }}</p>
        </div>
    </div>

    <div>
        <strong>Status</strong>
        <p><span class="badge">{{ $application->status }}</span></p>
    </div>

    <div>
        <strong>Personal Statement</strong>
        <p style="white-space: pre-wrap;">{{ $application->statement }}</p>
    </div>
@endsection
