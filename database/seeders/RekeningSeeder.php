<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RekeningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rekening')->insert(
            [
                [
                    'kode_rek' => "41101.01",
                    'nama_rek' => "Pajak Hotel Bintang 1",
                ],
                [
                    'kode_rek' => "41101.02",
                    'nama_rek' => "Pajak Hotel Bintang 2",
                ],
                [
                    'kode_rek' => "41101.03",
                    'nama_rek' => "Pajak Hotel Bintang 3",
                ],
                [
                    'kode_rek' => "41101.04",
                    'nama_rek' => "Pajak Hotel Bintang 4",
                ],
                [
                    'kode_rek' => "41101.05",
                    'nama_rek' => "Pajak Hotel Bintang 5",
                ],
            ]
        );
    }
}
