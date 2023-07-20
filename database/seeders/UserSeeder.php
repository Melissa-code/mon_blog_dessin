<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => 'example@test.com',
            'name' => 'Hortense',
            'password' => Hash::make('secretPssword'),
            'role' => User::ADMIN_ROLE,
        ]);
    }
}
