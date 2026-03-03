<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class SubAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Sub Admin User',
            'email' => 'subadmin@starlfinx.com',
            'password' => bcrypt('Subadmin123@starlfinx'),
            'role' => 'user',
        ]);
    }
}
