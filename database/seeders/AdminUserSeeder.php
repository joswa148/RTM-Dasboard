<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@right-trademark.com'],
            [
                'name'              => 'RTM Administrator',
                'password'          => Hash::make('Rtm@Admin#2026!Secure'),
                'is_admin'          => true,
                'email_verified_at' => now(),
            ]
        );
    }
}
