<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class RouteTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test the authentification of the admin
     */
    public function testAccessAdminWithGuestRole(): void
    {
        $response = $this->get('/admin/articles');
        $response->assertRedirect('/login');
    }

    /**
     * Test that the user has an admin role
     */
    public function testAccessAdminWithAdminRole()
    {
        $admin = User::create([
            'email' => 'example@example.com',
            'name' => 'Jacques',
            'password' => Hash::make('secretPassword'),
            'role' => User::ADMIN_ROLE,
        ]);
        //dd($admin);
        $this->actingAs($admin);

        $response = $this->get('/admin/articles');
        dd($response->getStatusCode());
    }

}
