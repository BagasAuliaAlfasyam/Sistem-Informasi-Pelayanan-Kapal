<?php

namespace Database\Seeders;

use App\Models\Keperluan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KeperluanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $keperluan = [
            [
                'id_kapal' => 1,
                'muat_barang' => null,
                'bongkar' => null,
                'jenis_barang' => 'BBM',
                'keterangan' => null,
            ],
            [
                'id_kapal' => 2,
                'muat_barang' => 3000,
                'bongkar' => null,
                'jenis_barang' => 'CPO',
                'keterangan' => null,
            ],
            // [
            //     'id_kapal' => 3,
            //     'muat_barang' => null,
            //     'bongkar' => 1569,
            //     'jenis_barang' => 'Cement In Bulk',
            //     'keterangan' => null,
            // ],
            // [
            //     'id_kapal' => 4,
            //     'muat_barang' => null,
            //     'bongkar' => 1569,
            //     'jenis_barang' => 'Cement In Bulk',
            //     'keterangan' => null,
            // ],
            // [
            //     'id_kapal' => 5,
            //     'muat_barang' => null,
            //     'bongkar' => null,
            //     'jenis_barang' => 'Container',
            //     'keterangan' => null,
            // ],
            // [
            //     'id_kapal' => 6,
            //     'muat_barang' => null,
            //     'bongkar' => null,
            //     'jenis_barang' => null,
            //     'keterangan' => null,
            // ],
            // [
            //     'id_kapal' => 7,
            //     'muat_barang' => null,
            //     'bongkar' => null,
            //     'jenis_barang' => null,
            //     'keterangan' => null,
            // ],
            // [
            //     'id_kapal' => 8,
            //     'muat_barang' => null,
            //     'bongkar' => null,
            //     'jenis_barang' => 'BBM',
            //     'keterangan' => null,
            // ],
            // [
            //     'id_kapal' => 9,
            //     'muat_barang' => null,
            //     'bongkar' => null,
            //     'jenis_barang' => null,
            //     'keterangan' => null,
            // ],
            // [
            //     'id_kapal' => 10,
            //     'muat_barang' => null,
            //     'bongkar' => null,
            //     'jenis_barang' => null,
            //     'keterangan' => null,
            // ],
            // [
            //     'id_kapal' => 11,
            //     'muat_barang' => null,
            //     'bongkar' => null,
            //     'jenis_barang' => null,
            //     'keterangan' => 'ekspor',
            // ],
            // [
            //     'id_kapal' => 12,
            //     'muat_barang' => 11001,
            //     'bongkar' => null,
            //     'jenis_barang' => 'Cangkang',
            //     'keterangan' => 'Ekspor',
            // ],
        ];

        foreach ($keperluan as $keperluan) {
            Keperluan::create($keperluan);
        }
    }
}
