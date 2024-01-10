<?php

namespace Database\Seeders;

use App\Models\Details;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $details = [
        //     [
        //         'id_kapal' => 1,
        //         'nama_kapal' => 'MT. Triaksa 17',
        //         'muat_barang' => null,
        //         'bongkar' => null,
        //         'jenis_barang' => 'BBM',
        //         'keterangan' => null,
        //     ],
        //     [
        //         'id_kapal' => 2,
        //         'nama_kapal' => 'MT. Sky Blue',
        //         'muat_barang' => 3000,
        //         'bongkar' => null,
        //         'jenis_barang' => 'CPO',
        //         'keterangan' => null,
        //     ],
        //     [
        //         'id_kapal' => 3,
        //         'nama_kapal' => 'MV. Oceanic Success',
        //         'muat_barang' => null,
        //         'bongkar' => 1569,
        //         'jenis_barang' => 'Cement In Bulk',
        //         'keterangan' => null,
        //     ],
        //     [
        //         'id_kapal' => 4,
        //         'nama_kapal' => 'MT. Brilliant 8899',
        //         'muat_barang' => null,
        //         'bongkar' => null,
        //         'jenis_barang' => 'BBM',
        //         'keterangan' => null,
        //     ],
        //     [
        //         'id_kapal' => 5,
        //         'nama_kapal' => 'KM. Berau Mas',
        //         'muat_barang' => null,
        //         'bongkar' => null,
        //         'jenis_barang' => 'Container',
        //         'keterangan' => null,
        //     ],
        //     [
        //         'id_kapal' => 6,
        //         'nama_kapal' => 'KM. Sahabat Sejati 8',
        //         'muat_barang' => null,
        //         'bongkar' => null,
        //         'jenis_barang' => null,
        //         'keterangan' => null,
        //     ],
        //     [
        //         'id_kapal' => 7,
        //         'nama_kapal' => 'MV. Sawah Lunto',
        //         'muat_barang' => null,
        //         'bongkar' => null,
        //         'jenis_barang' => null,
        //         'keterangan' => null,
        //     ],
        //     [
        //         'id_kapal' => 8,
        //         'nama_kapal' => 'MT. Aerosesa Catalina',
        //         'muat_barang' => null,
        //         'bongkar' => null,
        //         'jenis_barang' => 'BBM',
        //         'keterangan' => null,
        //     ],
        //     [
        //         'id_kapal' => 9,
        //         'nama_kapal' => 'MV. Oceanic Success',
        //         'muat_barang' => null,
        //         'bongkar' => null,
        //         'jenis_barang' => null,
        //         'keterangan' => null,
        //     ],
        //     [
        //         'id_kapal' => 10,
        //         'nama_kapal' => 'MT. Triaksa 17',
        //         'muat_barang' => null,
        //         'bongkar' => null,
        //         'jenis_barang' => null,
        //         'keterangan' => null,
        //     ],
        //     [
        //         'id_kapal' => 11,
        //         'nama_kapal' => 'KM. Illannur',
        //         'muat_barang' => null,
        //         'bongkar' => null,
        //         'jenis_barang' => null,
        //         'keterangan' => 'ekspor',
        //     ],
        //     [
        //         'id_kapal' => 12,
        //         'nama_kapal' => 'MV. Glorious Jupiter',
        //         'muat_barang' => 11001,
        //         'bongkar' => null,
        //         'jenis_barang' => 'Cangkang',
        //         'keterangan' => 'Ekspor',
        //     ],
        //     [
        //         'id_kapal' => 13,
        //         'nama_kapal' => 'MV. Glorious Jupiter',
        //         'muat_barang' => 4000,
        //         'bongkar' => null,
        //         'jenis_barang' => 'BBM',
        //         'keterangan' => null,
        //     ],
        //     [
        //         'id_kapal' => 14,
        //         'nama_kapal' => 'Mv. Nacc Cozumel',
        //         'muat_barang' => 4000,
        //         'bongkar' => null,
        //         'jenis_barang' => 'BBM',
        //         'keterangan' => null,
        //     ],
        //     [
        //         'id_kapal' => 15,
        //         'nama_kapal' => 'Mv. Oceanic Success',
        //         'muat_barang' => 11001,
        //         'bongkar' => null,
        //         'jenis_barang' => 'Cangkang',
        //         'keterangan' => null,
        //     ],
        //     [
        //         'id_kapal' => 16,
        //         'nama_kapal' => 'MV. TTC Hai Phong',
        //         'muat_barang' => 4000,
        //         'bongkar' => null,
        //         'jenis_barang' => 'Cangkang',
        //         'keterangan' => null,
        //     ],
        //     [
        //         'id_kapal' => 17,
        //         'nama_kapal' => 'MT. Triaksa 17',
        //         'muat_barang' => 3000,
        //         'bongkar' => null,
        //         'jenis_barang' => 'BBM',
        //         'keterangan' => null,
        //     ],
        //     [
        //         'id_kapal' => 18,
        //         'nama_kapal' => 'Mv. Oceanic Success',
        //         'muat_barang' => 3000,
        //         'bongkar' => null,
        //         'jenis_barang' => 'Container',
        //         'keterangan' => null,
        //     ],
        //     [
        //         'id_kapal' => 19,
        //         'nama_kapal' => 'Mv. Nacc Cozumel',
        //         'muat_barang' => 3000,
        //         'bongkar' => null,
        //         'jenis_barang' => 'BBM',
        //         'keterangan' => null,
        //     ],
        //     [
        //         'id_kapal' => 20,
        //         'nama_kapal' => 'MV. Eastem Fair',
        //         'muat_barang' => 4000,
        //         'bongkar' => null,
        //         'jenis_barang' => 'BBM',
        //         'keterangan' => null,
        //     ],
        //     [
        //         'id_kapal' => 21,
        //         'nama_kapal' => 'MV. Oceanic success',
        //         'muat_barang' => 3000,
        //         'bongkar' => null,
        //         'jenis_barang' => 'BBM',
        //         'keterangan' => null,
        //     ],
        //     [
        //         'id_kapal' => 22,
        //         'nama_kapal' => 'KM. Berau Mas',
        //         'muat_barang' => 3000,
        //         'bongkar' => null,
        //         'jenis_barang' => 'BBM',
        //         'keterangan' => null,
        //     ],
        //     [
        //         'id_kapal' => 23,
        //         'nama_kapal' => 'MT. Garuda Asia',
        //         'muat_barang' => 3000,
        //         'bongkar' => null,
        //         'jenis_barang' => 'BBM',
        //         'keterangan' => null,
        //     ],
        //     [
        //         'id_kapal' => 24,
        //         'nama_kapal' => 'MV.Glorious Jupiter',
        //         'muat_barang' => 3000,
        //         'bongkar' => null,
        //         'jenis_barang' => 'BBM',
        //         'keterangan' => null,
        //     ],
        //     [
        //         'id_kapal' => 25,
        //         'nama_kapal' => 'MT. triaksa 17',
        //         'muat_barang' => 3000,
        //         'bongkar' => null,
        //         'jenis_barang' => 'Beras',
        //         'keterangan' => null,
        //     ],
        //     [
        //         'id_kapal' => 26,
        //         'nama_kapal' => 'MV. Glorious Jupiter',
        //         'muat_barang' => 3000,
        //         'bongkar' => null,
        //         'jenis_barang' => 'BBM',
        //         'keterangan' => null,
        //     ],
        //     [
        //         'id_kapal' => 27,
        //         'nama_kapal' => 'MT. Aerosea Catalina',
        //         'muat_barang' => 4000,
        //         'bongkar' => null,
        //         'jenis_barang' => 'BBM',
        //         'keterangan' => null,
        //     ],
        //     [
        //         'id_kapal' => 28,
        //         'nama_kapal' => 'KM. Sahabat Sejati 8',
        //         'muat_barang' => 3000,
        //         'bongkar' => null,
        //         'jenis_barang' => 'BBM',
        //         'keterangan' => null,
        //     ],
        //     [
        //         'id_kapal' => 29,
        //         'nama_kapal' => 'MT. Brilliant 8899',
        //         'muat_barang' => 3000,
        //         'bongkar' => null,
        //         'jenis_barang' => 'BBM',
        //         'keterangan' => null,
        //     ],
        // ];

        // foreach ($details as $detail) {
        //     Details::create($detail);
        // }
    }
}