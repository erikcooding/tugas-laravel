<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Login;

class LoginSeeder extends Seeder
{
    public function run(): void
    {
        Login::create([
            'username' => 'admin',
            'password' => Hash::make('admin123'), // 🔐 Password di-bcrypt
        ]);
    }
}
