<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(array(
            'name' => 'admin',
            'email' => 'burakyildiz@gmail.com',
            'password' => Hash::make('admin'),
        ));
    }
}
