<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaksi')->insert(
            [
                [
                    'id_rek' => 1,
                    'id_pajak' => 1,
                    'via_bayar' => "Bendahara",
                    'tgl_setor' => date("2022-10-02"),
                ],
                [
                    'id_rek' => 3,
                    'id_pajak' => 3,
                    'via_bayar' => "Bank",
                    'tgl_setor' => date("2022-10-02"),
                ],
                [
                    'id_rek' => 2,
                    'id_pajak' => 2,
                    'via_bayar' => "Bendahara",
                    'tgl_setor' => date("2022-10-09"),
                ],
                [
                    'id_rek' => 1,
                    'id_pajak' => 1,
                    'via_bayar' => "Bank",
                    'tgl_setor' => date("2022-10-11"),
                ],
                [
                    'id_rek' => 5,
                    'id_pajak' => 5,
                    'via_bayar' => "Bendahara",
                    'tgl_setor' => date("2022-10-12"),
                ],
                [
                    'id_rek' => 2,
                    'id_pajak' => 2,
                    'via_bayar' => "Bendahara",
                    'tgl_setor' => date("2022-10-15"),
                ],
                [
                    'id_rek' => 4,
                    'id_pajak' => 4,
                    'via_bayar' => "Bendahara",
                    'tgl_setor' => date("2022-10-15"),
                ],
                [
                    'id_rek' => 2,
                    'id_pajak' => 2,
                    'via_bayar' => "Bendahara",
                    'tgl_setor' => date("2022-11-2"),
                ],
                [
                    'id_rek' => 3,
                    'id_pajak' => 3,
                    'via_bayar' => "Bendahara",
                    'tgl_setor' => date("2022-11-03"),
                ],
                [
                    'id_rek' => 3,
                    'id_pajak' => 3,
                    'via_bayar' => "Bendahara",
                    'tgl_setor' => date("2022-11-03"),
                ],
                [
                    'id_rek' => 1,
                    'id_pajak' => 1,
                    'via_bayar' => "Bank",
                    'tgl_setor' => date("2022-11-05"),
                ],
                [
                    'id_rek' => 2,
                    'id_pajak' => 2,
                    'via_bayar' => "Bank",
                    'tgl_setor' => date("2022-11-06"),
                ],
                [
                    'id_rek' => 4,
                    'id_pajak' => 4,
                    'via_bayar' => "Bank",
                    'tgl_setor' => date("2022-11-10"),
                ],
                [
                    'id_rek' => 5,
                    'id_pajak' => 5,
                    'via_bayar' => "Bank",
                    'tgl_setor' => date("2022-11-12"),
                ],
                [
                    'id_rek' => 1,
                    'id_pajak' => 1,
                    'via_bayar' => "Bank",
                    'tgl_setor' => date("2022-11-12"),
                ],
            ]
        );
    }
}
