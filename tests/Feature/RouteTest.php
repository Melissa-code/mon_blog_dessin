<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class RouteTest extends TestCase
{
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
        $admin = Auth::loginUsingId(1);
        //dd($admin);
        $this->actingAs($admin);

        $response = $this->get('/admin/articles');
        dd($response->getStatusCode());
    }

}
