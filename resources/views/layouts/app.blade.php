<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OAS</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f5f7fb; color: #111827; }
        .container { max-width: 960px; margin: 2rem auto; background: #fff; border-radius: 12px; padding: 1.5rem; box-shadow: 0 8px 24px rgba(17,24,39,.08); }
        .row { display: flex; gap: .75rem; flex-wrap: wrap; margin-bottom: 1rem; }
        .row > * { flex: 1; min-width: 200px; }
        label { display: block; font-weight: 600; margin-bottom: .3rem; }
        input, select, textarea { width: 100%; padding: .6rem .7rem; border: 1px solid #cbd5e1; border-radius: 8px; }
        textarea { min-height: 120px; }
        .btn { display: inline-block; background: #1d4ed8; color: #fff; text-decoration: none; padding: .65rem 1rem; border-radius: 8px; border: 0; cursor: pointer; }
        .btn-secondary { background: #334155; }
        .flash { background: #dcfce7; color: #166534; border: 1px solid #86efac; padding: .75rem; border-radius: 8px; margin-bottom: 1rem; }
        .error { color: #b91c1c; font-size: .9rem; margin-top: .35rem; }
        table { width: 100%; border-collapse: collapse; }
        th, td { text-align: left; border-bottom: 1px solid #e2e8f0; padding: .6rem .4rem; }
        .badge { padding: .2rem .45rem; border-radius: 999px; background: #dbeafe; font-size: .8rem; text-transform: capitalize; }
        nav { display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.25rem; }
        nav a { text-decoration: none; color: #1d4ed8; font-weight: 600; }
    </style>
</head>
<body>
<div class="container">
    <nav>
        <a href="{{ route('applications.index') }}">OAS Dashboard</a>
        <a class="btn" href="{{ route('applications.create') }}">New Application</a>
    </nav>

    @if (session('success'))
        <div class="flash">{{ session('success') }}</div>
    @endif

    @yield('content')
</div>
</body>
</html>
