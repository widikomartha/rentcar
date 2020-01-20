<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PenggunaTableSeeder extends Seeder
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
                'password'  => Hash::make('pengguna'),
                'email'     => 'user@gmail.com',
                'name'      => 'User Test',
                'level'     => 1
            ]
        ]);
    }
}
