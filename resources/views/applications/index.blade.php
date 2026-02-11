@extends('layouts.app')

@section('content')
    <h1>Applications</h1>

    <form method="GET" action="{{ route('applications.index') }}" class="row">
        <div>
            <label for="search">Search</label>
            <input id="search" name="search" value="{{ $search }}" placeholder="Name, email, or program">
        </div>
        <div>
            <label for="status">Status</label>
            <select id="status" name="status">
                <option value="">All statuses</option>
                @foreach ($statuses as $status)
                    <option value="{{ $status }}" @selected($currentStatus === $status)>{{ ucfirst($status) }}</option>
                @endforeach
            </select>
        </div>
        <div style="align-self:end;">
            <button class="btn btn-secondary" type="submit">Filter</button>
        </div>
    </form>

    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Program</th>
            <th>Status</th>
            <th>Submitted</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @forelse ($applications as $application)
            <tr>
                <td>{{ $application->full_name }}</td>
                <td>{{ $application->email }}</td>
                <td>{{ $application->program }}</td>
                <td><span class="badge">{{ $application->status }}</span></td>
                <td>{{ $application->created_at?->format('Y-m-d H:i') }}</td>
                <td><a href="{{ route('applications.show', $application) }}">View</a></td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No applications found.</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    <div style="margin-top:1rem;">
        {{ $applications->links() }}
    </div>
@endsection
