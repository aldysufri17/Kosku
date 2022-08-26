<?php

namespace Database\Seeders;

use App\Models\Transaksi;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transaksi::create([
            'kode' => 'ANT12312313',
            'status' => 1,
            'user_id' => 1,
            'kamar_id' => 1,
            'durasi' => "3 bulan",
            'tgl_mulai' => Date('ymd'),
            'tgl_selesai'  => Date('ymd'),
            'foto_kk'  => "dasd",
            'foto_ktp'  => "asd",
            'biaya' => "12.000",
        ]);
    }
}
