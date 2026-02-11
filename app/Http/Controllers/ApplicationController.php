<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index(Request $request): View
    {
        $status = $request->string('status')->toString();
        $search = $request->string('search')->toString();

        $query = Application::query()->latest();

        if ($status !== '' && in_array($status, Application::statuses(), true)) {
            $query->where('status', $status);
        }

        if ($search !== '') {
            $query->where(function ($builder) use ($search): void {
                $builder
                    ->where('full_name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('program', 'like', "%{$search}%");
            });
        }

        return view('applications.index', [
            'applications' => $query->paginate(10)->withQueryString(),
            'statuses' => Application::statuses(),
            'currentStatus' => $status,
            'search' => $search,
        ]);
    }

    public function create(): View
    {
        return view('applications.create', [
            'statuses' => Application::statuses(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:120'],
            'phone' => ['nullable', 'string', 'max:30'],
            'program' => ['required', 'string', 'max:120'],
            'statement' => ['required', 'string', 'max:4000'],
        ]);

        $validated['status'] = Application::STATUS_SUBMITTED;

        $application = Application::create($validated);

        return redirect()
            ->route('applications.show', $application)
            ->with('success', 'Application submitted successfully.');
    }

    public function show(Application $application): View
    {
        return view('applications.show', [
            'application' => $application,
        ]);
    }
}
