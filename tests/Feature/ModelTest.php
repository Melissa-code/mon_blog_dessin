<?php

namespace Tests\Feature;

use App\Models\User;
use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class ModelTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Test the registration if the information is correct (RegisterController)
     * @param array $data
     */
    public function testValidRegistration(): void
    {
        $faker = Factory::create();
        $email = $faker->unique()->email;
        $count = User::count();
        // Create a new user in the DB
        $response = $this->post('/register', [
            'name' => 'TestName',
            'email' => $email,
            'password' => 'TestPassword',
            'password_confirmation' => 'TestPassword',
        ]);
        $newCount = User::count();
        $this->assertNotEquals($count, $newCount);
    }

    /**
     * Test failed registration
     */
    public function testInvalidRegistration(): void
    {
        $response = $this->post('/register', [
            'name' => 'TestName',
            'email' => 'TestEmail',
            'password' => 'TestPassword',
            'password_confirmation' => 'TestPassword',
        ]);
        //dd(session('errors')); // the email is required
        $response->assertSessionHasErrors();
    }
}
