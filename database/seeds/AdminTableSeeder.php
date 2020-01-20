<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'password'  => Hash::make('admin123'),
                'email'     => 'Admin@gmail.com',
                'name'      => 'Admin',
                'role'      => 'admin',
            ],
        ]);
    }
}
