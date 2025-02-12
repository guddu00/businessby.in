<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Test',
            'last_name' => 'User',
            'email' => 'test@example.com',
            'address' => '123 Main Street',
            'phone' => '9876543210',
            'password' => Hash::make('user@123'), // Encrypt password
        ]);

        // Create multiple users using the factory (if needed)
        User::factory(10)->create();
    }
}
