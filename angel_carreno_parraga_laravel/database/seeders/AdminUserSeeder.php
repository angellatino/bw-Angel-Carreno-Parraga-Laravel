<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        $user = User::find(1); // Ensure this ID exists in your database
        if ($user) {
            $user->is_admin = true;
            $user->save();
        }
    }
}
