<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RoleAuthTest extends TestCase
{
    use RefreshDatabase;

    public function test_student_can_access_student_dashboard()
    {
        $student = User::factory()->create(['role' => 'student']);

        $response = $this->actingAs($student)->get('/student/dashboard');

        $response->assertStatus(200);
    }

    public function test_student_cannot_access_institute_dashboard()
    {
        $student = User::factory()->create(['role' => 'student']);

        $response = $this->actingAs($student)->get('/institute/dashboard');

        $response->assertStatus(403);
    }

    public function test_institute_can_access_institute_dashboard()
    {
        $institute = User::factory()->create(['role' => 'institute']);

        $response = $this->actingAs($institute)->get('/institute/dashboard');

        $response->assertStatus(200);
    }

    public function test_institute_cannot_access_student_dashboard()
    {
        $institute = User::factory()->create(['role' => 'institute']);

        $response = $this->actingAs($institute)->get('/student/dashboard');

        $response->assertStatus(403);
    }

    public function test_dashboard_redirects_student_correctly()
    {
        $student = User::factory()->create(['role' => 'student']);

        $response = $this->actingAs($student)->get('/dashboard');

        $response->assertRedirect('/student/dashboard');
    }

    public function test_dashboard_redirects_institute_correctly()
    {
        $institute = User::factory()->create(['role' => 'institute']);

        $response = $this->actingAs($institute)->get('/dashboard');

        $response->assertRedirect('/institute/dashboard');
    }
}
