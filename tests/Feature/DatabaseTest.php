<?php

namespace Tests\Feature;

use App\Models\User;
use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DatabaseTest extends TestCase
{
    // Decomment the file phpunit.xml for the DB SQlite
    use RefreshDatabase; // Trait for use the table users in the SQlite
    /**
     * Test the DB SQLite
     */
    public function testValidRegistration(): void
    {
        $count = User::count();

        // Create a new user in the DB
        $response = $this->post('/register', [
            'name' => 'TestName',
            'email' => 'Florian@test.com',
            'password' => 'TestPassword',
            'password_confirmation' => 'TestPassword',
        ]);
        $newCount = User::count();
        $this->assertNotEquals($count, $newCount);
    }
}
