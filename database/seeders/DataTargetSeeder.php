<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataTargetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_target')->insert(
            [
                [
                    'id_rek' => 1,
                    'target' => 60500000,
                    'bulan_berlaku' => 1,
                    'tahun_berlaku' => 2022,
                ],
                [
                    'id_rek' => 2,
                    'target' => 50750000,
                    'bulan_berlaku' => 1,
                    'tahun_berlaku' => 2022,
                ],
                [
                    'id_rek' => 3,
                    'target' => 50500000,
                    'bulan_berlaku' => 1,
                    'tahun_berlaku' => 2022,
                ],
                [
                    'id_rek' => 4,
                    'target' => 50250000,
                    'bulan_berlaku' => 1,
                    'tahun_berlaku' => 2022,
                ],
                [
                    'id_rek' => 5,
                    'target' => 50000000,
                    'bulan_berlaku' => 1,
                    'tahun_berlaku' => 2022,
                ],
                [
                    'id_rek' => 1,
                    'target' => 70500000,
                    'bulan_berlaku' => 1,
                    'tahun_berlaku' => 2021,
                ],
                [
                    'id_rek' => 2,
                    'target' => 70750000,
                    'bulan_berlaku' => 1,
                    'tahun_berlaku' => 2021,
                ],
            ]
        );
    }
}
