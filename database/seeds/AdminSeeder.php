<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'nama' => 'Super Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
                'role' => 1
            ],
        );
        User::create(
            [
                'nama' => 'Sales',
                'email' => 'sales@gmail.com',
                'password' => Hash::make('sales'),
                'role' => 2
            ],
        );
    }
}
