<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Ensure this import exists

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@ehb.be',
            'password' => bcrypt('Password!321'),
            'is_admin' => true,
        ]);
    }
}
