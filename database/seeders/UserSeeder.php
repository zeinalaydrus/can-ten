<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'zein',
            'email' => 'zein@gmail.com',
            'password' => bcrypt('password')
        ]);

        $admin = User::create([
            'name' => 'robben',
            'email' => 'robben@gmail.com',
            'password' => bcrypt('password')
        ]);

        $admin = User::create([
            'name' => 'diffa',
            'email' => 'diffa@gmail.com',
            'password' => bcrypt('password')
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'User Role',
            'email' => 'user@role.test',
            'password' => bcrypt('password')
        ]);

        $user->assignRole('user');
    }
}
