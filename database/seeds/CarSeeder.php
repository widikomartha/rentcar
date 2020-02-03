<?php

use Illuminate\Database\Seeder;
use App\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            //factory(Car::class,5)->create() ;
        DB::table('cars')->insert([
            [
                'tipe'              => 'Avanza',
                'merek'             => 'Toyota',
                'plate'             => 'DK 3728 KU',
                'tahun'             => '2015',
                'harga'             => 'Rp 200.000',
                'foto'              => 'avanza.jpg',
            ],
            [
                'tipe'              => 'AVP',
                'merek'             => 'Suzuki',
                'plate'             => 'DK 7483 HW',
                'tahun'             => '2016',
                'harga'             => 'Rp 250.000',
                'foto'              => 'suzuki-apv.jpg',
            ],
            [
                'tipe'              => 'Jazz',
                'merek'             => 'Honda',
                'plate'             => 'DK 3728 KU',
                'tahun'             => '2017',
                'harga'             => 'Rp 300.000',
                'foto'              => 'jazz.jpg',
            ],
            [
                'tipe'              => 'Ertiga',
                'merek'             => 'Suzuki',
                'plate'             => 'DK 8436 KU',
                'tahun'             => '2016',
                'harga'             => 'Rp 250.000',
                'foto'              => 'ertiga.jpg',
            ],
            [
                'tipe'              => 'Yaris',
                'merek'             => 'Toyota',
                'plate'             => 'DK 8364 WY',
                'tahun'             => '2018',
                'harga'             => 'Rp 350.000',
                'foto'              => 'yaris.jpg',
            ],
        ]);
    }
}
