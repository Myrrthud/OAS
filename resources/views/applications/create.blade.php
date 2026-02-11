@extends('layouts.app')

@section('content')
    <h1>Submit Application</h1>

    <form method="POST" action="{{ route('applications.store') }}">
        @csrf

        <div class="row">
            <div>
                <label for="full_name">Full Name</label>
                <input id="full_name" name="full_name" value="{{ old('full_name') }}" required>
                @error('full_name') <div class="error">{{ $message }}</div> @enderror
            </div>
            <div>
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required>
                @error('email') <div class="error">{{ $message }}</div> @enderror
            </div>
        </div>

        <div class="row">
            <div>
                <label for="phone">Phone</label>
                <input id="phone" name="phone" value="{{ old('phone') }}">
                @error('phone') <div class="error">{{ $message }}</div> @enderror
            </div>
            <div>
                <label for="program">Program</label>
                <input id="program" name="program" value="{{ old('program') }}" required>
                @error('program') <div class="error">{{ $message }}</div> @enderror
            </div>
        </div>

        <div>
            <label for="statement">Personal Statement</label>
            <textarea id="statement" name="statement" required>{{ old('statement') }}</textarea>
            @error('statement') <div class="error">{{ $message }}</div> @enderror
        </div>

        <p style="margin-top:1rem;">
            <button class="btn" type="submit">Submit</button>
        </p>
    </form>
@endsection
