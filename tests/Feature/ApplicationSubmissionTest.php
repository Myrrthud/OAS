<?php

namespace Tests\Feature;

use App\Models\Application;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ApplicationSubmissionTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_submit_application(): void
    {
        $response = $this->post(route('applications.store'), [
            'full_name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'phone' => '555-1000',
            'program' => 'Computer Science',
            'statement' => 'I am passionate about software engineering.',
        ]);

        $response->assertRedirect();

        $this->assertDatabaseHas('applications', [
            'email' => 'jane@example.com',
            'status' => Application::STATUS_SUBMITTED,
        ]);
    }
}
