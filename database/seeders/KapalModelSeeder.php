<?php

namespace Database\Seeders;

use App\Models\Kapal;
use App\Models\KapalModel;
use Illuminate\Database\Seeder;

class KapalModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ships = [
            [
                'nama_kapal' => 'MT. Triaksa 17',
                'keagenan' => 'PT. Pertamina Trans Kontinental',
                'loa' => 90,
                'gt' => 2908,
                'pemilik' => 1,
                'bendera' => 'Indonesia',
            ],
            [
                'nama_kapal' => 'MT. Sky Blue',
                'keagenan' => 'PT. Fajar Sribahari Sakti',
                'loa' => 129,
                'gt' => 8686,
                'pemilik' => 0,
                'bendera' => 'Korea',
            ],
            [
                'nama_kapal' => 'MV. Oceanic Success',
                'keagenan' => 'PT. Sanindo Antar Nusa',
                'loa' => 110,
                'gt' => 6943,
                'pemilik' => 1,
                'bendera' => 'Indonesia',
            ],
            [
                'nama_kapal' => 'MT. Brilliant 8899',
                'keagenan' => 'PT. Pertamina Trans Kontinental',
                'loa' => 105,
                'gt' => 4731,
                'pemilik' => 1,
                'bendera' => 'Indonesia',
            ],
            [
                'nama_kapal' => 'KM. Berau Mas',
                'keagenan' => 'PT. Temas Shipping',
                'loa' => 86,
                'gt' => 2003,
                'pemilik' => 1,
                'bendera' => 'Indonesia',
            ],
            [
                'nama_kapal' => 'KM. Sahabat Sejati 8',
                'keagenan' => 'PT. Panah Sakti',
                'loa' => 89,
                'gt' => 3208,
                'pemilik' => 1,
                'bendera' => 'Indonesia',
            ],
            [
                'nama_kapal' => 'MV. Sawah Lunto',
                'keagenan' => 'PT. Fajar Sribahari Sakti',
                'loa' => 110,
                'gt' => 6943,
                'pemilik' => 1,
                'bendera' => 'Indonesia',
            ],
            [
                'nama_kapal' => 'MT. Aerosea Catalina',
                'keagenan' => 'PT. Pertamina Trans Kontinental',
                'loa' => 100,
                'gt' => 5153,
                'pemilik' => 1,
                'bendera' => 'Indonesia',
            ],
            [
                'nama_kapal' => 'MV. Oceanic Success',
                'keagenan' => 'PT. Sanindo Antar Nusa',
                'loa' => 110,
                'gt' => 6943,
                'pemilik' => 1,
                'bendera' => 'Indonesia',
            ],
            [
                'nama_kapal' => 'MT. Triaksa 17',
                'keagenan' => 'PT. Pertamina Trans Kontinental',
                'loa' => 90,
                'gt' => 2908,
                'pemilik' => 1,
                'bendera' => 'Indonesia',
            ],
            [
                'nama_kapal' => 'KM. Illannur',
                'keagenan' => 'PT. Panah Sakti',
                'loa' => 86,
                'gt' => 2528,
                'pemilik' => 1,
                'bendera' => 'Indonesia',
            ],
            [
                'nama_kapal' => 'MV. Glorious Jupiter',
                'keagenan' => 'PT. Bahtera Adhiguna',
                'loa' => 157,
                'gt' => 16088,
                'pemilik' => 0,
                'bendera' => 'Panama',
            ],
            [
                'nama_kapal' => 'MT. triaksa 17',
                'keagenan' => 'PT. Pertamina Trans Kontinental',
                'loa' => 90,
                'gt' => 2908,
                'pemilik' => 1,
                'bendera' => 'Indinesia',
            ],
            [
                'nama_kapal' => 'KM. Ilannur',
                'keagenan' => 'PT. Panah Sakti',
                'loa' => 86,
                'gt' => 2528,
                'pemilik' => 1,
                'bendera' => 'Indinesia',
            ],
            [
                'nama_kapal' => 'MV.Glorious Jupiter',
                'keagenan' => 'PT. Bahtera Adighuna',
                'loa' => 157,
                'gt' => 16088,
                'pemilik' => 0,
                'bendera' => 'panama',
            ],
            [
                'nama_kapal' => 'MT. Garuda Asia',
                'keagenan' => 'PT. Multi jaya samudra',
                'loa' => 118,
                'gt' => 5180,
                'pemilik' => 0,
                'bendera' => 'Indonesia',
            ],
            [
                'nama_kapal' => 'MT. Nacc Cozumel',
                'keagenan' => 'PT. Sea Asih Lines',
                'loa' => 117,
                'gt' => 5838,
                'pemilik' => 0,
                'bendera' => 'Indonesia',
            ],
            [
                'nama_kapal' => 'KM. Berau Mas',
                'keagenan' => 'PT. Temas Shipping',
                'loa' => 86,
                'gt' => 2003,
                'pemilik' => 0,
                'bendera' => 'Indonesia',
            ],
            [
                'nama_kapal' => 'MT. Brilliant 8899',
                'keagenan' => 'PT. Pertamina Trans Kontinental',
                'loa' => 105,
                'gt' => 4731,
                'pemilik' => 0,
                'bendera' => 'Indonesia',
            ],
            [
                'nama_kapal' => 'MV. Oceanic success',
                'keagenan' => 'PT. Sanindo Antar Nusa',
                'loa' => 110,
                'gt' => 6943,
                'pemilik' => 0,
                'bendera' => 'Indonesia',
            ],
            [
                'nama_kapal' => 'KM. Noah Satu',
                'keagenan' => 'PT. Panah Sakti',
                'loa' => 81,
                'gt' => 2541,
                'pemilik' => 0,
                'bendera' => 'Indonesia',
            ],
            [
                'nama_kapal' => 'MT. Triaksa 17',
                'keagenan' => 'PT. Pertamina Trans Kontinental',
                'loa' => 90,
                'gt' => 2908,
                'pemilik' => 0,
                'bendera' => 'Indonesia',
            ],
            [
                'nama_kapal' => 'MT. Aerosea Catalina',
                'keagenan' => 'PT. Pertamina Trans Kontinental',
                'loa' => 100,
                'gt' => 5153,
                'pemilik' => 0,
                'bendera' => 'Indonesia',
            ],
            [
                'nama_kapal' => 'MV. Eastem Fair',
                'keagenan' => 'PT. Multi jaya samudra',
                'loa' => 114,
                'gt' => 4465,
                'pemilik' => 0,
                'bendera' => 'Indonesia',
            ],
            [
                'nama_kapal' => 'MV. TTC Hai Phong',
                'keagenan' => 'PT. Lidya Marine Lines',
                'loa' => 103,
                'gt' => 4095,
                'pemilik' => 0,
                'bendera' => 'Vietnam',
            ],
            [
                'nama_kapal' => 'MV. Sawah Lunto',
                'keagenan' => 'PT. Fajar Sribahari Sakti',
                'loa' => 110,
                'gt' => 6943,
                'pemilik' => 0,
                'bendera' => 'Indonesia',
            ],
            [
                'nama_kapal' => 'MT. Triaksa 17',
                'keagenan' => 'PT. Pertamina Trans Kontinental',
                'loa' => 90,
                'gt' => 2908,
                'pemilik' => 0,
                'bendera' => 'Indonesia',
            ],
            [
                'nama_kapal' => 'Mv. Oceanic Success',
                'keagenan' => 'PT. Pertamina Trans Kontinental',
                'loa' => 110,
                'gt' => 6943,
                'pemilik' => 0,
                'bendera' => 'Indonesia',
            ],
            [
                'nama_kapal' => 'Mv. Nacc Cozumel',
                'keagenan' => 'PT. Sea Asih lines',
                'loa' => 117,
                'gt' => 5838,
                'pemilik' => 0,
                'bendera' => 'Indonesia',
            ],

        ];

        foreach ($ships as $ship) {
            Kapal::create($ship);
        }
    }
}