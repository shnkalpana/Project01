<?php

namespace Tests\Feature;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserRegistrationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_register_with_valid_data()
    {
        $userData = [
            'name' => 'JohnDoe',
            'email' => 'john@example.com',
            'password' => 'password123',
            'dob' => Carbon::today()->subYears(20)->toDateString(),
            'joined_date' => Carbon::today()->subYears(1)->toDateString(),
        ];

        $response = $this->post('/register', $userData);

        // Expect a redirect (302) after successful registration
        $response->assertStatus(302);
        $response->assertRedirect('/admin');
        $this->assertDatabaseHas('users', [
            'name' => 'JohnDoe',
            'email' => 'john@example.com',
        ]);
    }

    /** @test */
    public function registration_fails_with_invalid_data()
    {
        $invalidData = [
            'name' => 'ab', // Too short
            'email' => 'not-an-email', // Invalid email
            'password' => 'short', // Too short
            'dob' => Carbon::today()->toDateString(), // Too young
            'joined_date' => Carbon::today()->subYears(20)->toDateString(), // Before 18th birthday
        ];

        $response = $this->post('/register', $invalidData);

        // Expect a redirect back (302) with validation errors
        $response->assertStatus(302);
        $response->assertSessionHasErrors(['name', 'email', 'password', 'dob', 'joined_date']);
    }
}
