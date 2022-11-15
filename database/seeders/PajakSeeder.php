<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PajakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pajak')->insert(
            [
                [
                    'id_rek' => 1,
                    'jumlah_pajak' => 2000000,
                ],
                [
                    'id_rek' => 2,
                    'jumlah_pajak' => 1750000,
                ],
                [
                    'id_rek' => 3,
                    'jumlah_pajak' => 1500000,
                ],
                [
                    'id_rek' => 4,
                    'jumlah_pajak' => 1250000,
                ],
                [
                    'id_rek' => 5,
                    'jumlah_pajak' => 1000000,
                ],
            ]
        );
    }
}
