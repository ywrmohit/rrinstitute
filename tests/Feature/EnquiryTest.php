<?php

namespace Tests\Feature;

use App\Models\Enquiry;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EnquiryTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_can_submit_enquiry()
    {
        $response = $this->post(route('enquiries.store'), [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '1234567890',
            'message' => 'I am interested in your courses.',
        ]);

        $response->assertSessionHas('success');
        $this->assertDatabaseHas('enquiries', ['email' => 'john@example.com']);
    }

    public function test_institute_can_view_enquiries()
    {
        $admin = User::factory()->create(['role' => 'institute']);
        Enquiry::create([
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'phone' => '0987654321',
            'message' => 'Hello',
        ]);

        $response = $this->actingAs($admin)->get(route('institute.enquiries.index'));

        $response->assertStatus(200);
        $response->assertSee('Jane Doe');
    }

    public function test_student_cannot_view_enquiries()
    {
        $student = User::factory()->create(['role' => 'student']);

        $response = $this->actingAs($student)->get(route('institute.enquiries.index'));

        $response->assertStatus(403);
    }

    public function test_institute_can_update_enquiry_status()
    {
        $admin = User::factory()->create(['role' => 'institute']);
        $enquiry = Enquiry::create([
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'phone' => '0987654321',
            'message' => 'Hello',
            'status' => 'new',
        ]);

        $response = $this->actingAs($admin)->patch(route('institute.enquiries.update', $enquiry), [
            'status' => 'contacted',
        ]);

        $response->assertSessionHas('success');
        $this->assertEquals('contacted', $enquiry->fresh()->status);
    }

    public function test_institute_can_delete_enquiry()
    {
        $admin = User::factory()->create(['role' => 'institute']);
        $enquiry = Enquiry::create([
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'phone' => '0987654321',
            'message' => 'Hello',
        ]);

        $response = $this->actingAs($admin)->delete(route('institute.enquiries.destroy', $enquiry));

        $response->assertSessionHas('success');
        $this->assertDatabaseMissing('enquiries', ['id' => $enquiry->id]);
    }
}
