<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(User::class,5)->create() ;

        DB::table('users')->insert([
            [
                'name'              => 'Admin Wiko',
                'email'             => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('admin'),
                'role'              => 'admin',
                'remember_token'    => Str ::random(60),
            ],
            [
                'name'              => 'Widi Komartha',
                'email'             => 'wiko@gmail.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('wiko'),
                'role'              => 'user',
                'remember_token'    => Str ::random(60),
            ],
        ]);
    }
}
