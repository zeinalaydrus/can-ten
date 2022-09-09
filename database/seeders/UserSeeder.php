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
            'name' => 'Folksy',
            'email' => 'folksy@gmail.com',
            'password' => bcrypt('password')
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'Robben',
            'email' => 'robben@gmail.com',
            'password' => bcrypt('password')
        ]);

        $user->assignRole('user');

        $user = User::create([
            'name' => 'Difa',
            'email' => 'difa@gmail.com',
            'password' => bcrypt('password')
        ]);

        $user->assignRole('user');
    }
}
