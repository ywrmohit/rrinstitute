<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StudentManagementTest extends TestCase
{
    use RefreshDatabase;

    public function test_institute_can_access_student_list()
    {
        $institute = User::factory()->create(['role' => 'institute']);
        $response = $this->actingAs($institute)->get(route('institute.students.index'));
        $response->assertStatus(200);
    }

    public function test_student_cannot_access_student_list()
    {
        $student = User::factory()->create(['role' => 'student']);
        $response = $this->actingAs($student)->get(route('institute.students.index'));
        $response->assertStatus(403);
    }

    public function test_institute_can_create_student()
    {
        $institute = User::factory()->create(['role' => 'institute']);
        
        $response = $this->actingAs($institute)->post(route('institute.students.store'), [
            'name' => 'New Student',
            'email' => 'newstudent@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertRedirect(route('institute.students.index'));
        $this->assertDatabaseHas('users', [
            'email' => 'newstudent@example.com',
            'role' => 'student',
        ]);
    }

    public function test_institute_can_update_student()
    {
        $institute = User::factory()->create(['role' => 'institute']);
        $student = User::factory()->create(['role' => 'student']);

        $response = $this->actingAs($institute)->put(route('institute.students.update', $student), [
            'name' => 'Updated Student Name',
            'email' => $student->email,
        ]);

        $response->assertRedirect(route('institute.students.index'));
        $this->assertEquals('Updated Student Name', $student->fresh()->name);
    }

    public function test_institute_cannot_update_non_student()
    {
        $institute = User::factory()->create(['role' => 'institute']);
        $otherInstitute = User::factory()->create(['role' => 'institute']);

        $response = $this->actingAs($institute)->put(route('institute.students.update', $otherInstitute), [
            'name' => 'Hacked Name',
            'email' => $otherInstitute->email,
        ]);

        $response->assertStatus(404);
    }

    public function test_institute_can_delete_student()
    {
        $institute = User::factory()->create(['role' => 'institute']);
        $student = User::factory()->create(['role' => 'student']);

        $response = $this->actingAs($institute)->delete(route('institute.students.destroy', $student));

        $response->assertRedirect(route('institute.students.index'));
        $this->assertDatabaseMissing('users', ['id' => $student->id]);
    }
}
