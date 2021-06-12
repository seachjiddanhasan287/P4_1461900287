<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs1 = new Mahasiswa;
        $mhs1->nbi = "1461900287";
        $mhs1->nama_mhs = "Jiddan hasan";
        $mhs1->save();

        $mhs2 = new Mahasiswa;
        $mhs2->nbi = "14619000000";
        $mhs2->nama_mhs = "Ferdy Cahyo";
        $mhs2->save();
    }
}
