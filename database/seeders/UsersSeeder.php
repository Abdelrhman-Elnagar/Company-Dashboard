<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //admin
        $admin =  User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);
        $admin->assignRole('admin');

        //company owner
        $admin =  User::create([
            'name' => 'owner User',
            'email' => 'owner@example.com',
            'password' => bcrypt('password'),
        ]);
        $admin->assignRole('company_owner');

        //branch manager
        $admin =  User::create([
            'name' => 'manager User',
            'email' => 'manager@example.com',
            'password' => bcrypt('password'),
        ]);
        $admin->assignRole('branch_manager');
    }
}
