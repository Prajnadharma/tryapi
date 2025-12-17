<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Penyakit;
use App\Models\Ramuan;
use App\Models\Tumbuhan;
use App\Models\CaraMengolah;

class UsadaSeeder extends Seeder
{
    public function run(): void
    {
        // 🌿 PENYAKIT
        $mencret = Penyakit::create([
            'nama' => 'Mencret (Diare)',
            'deskripsi' => 'Gangguan pencernaan disertai buang air cair.'
        ]);
        $hipertensi = Penyakit::create([
            'nama' => 'Tekanan Darah Tinggi (Hipertensi)',
            'deskripsi' => 'Tekanan darah melebihi batas normal.'
        ]);
        $hepatitis = Penyakit::create([
            'nama' => 'Sakit Kuning (Hepatitis)',
            'deskripsi' => 'Gangguan hati menyebabkan kulit dan mata tampak kuning.'
        ]);

        // 🌿 RAMUAN
        $padangBelulang = $mencret->ramuans()->create([
            'nama' => 'Padang Belulang',
            'deskripsi' => 'Akar padang belulang, akar gantung beringin, dan gula aren.',
            'pemakaian' => 'Minum (lōlōh).'
        ]);

        $padangPecut = $hipertensi->ramuans()->create([
            'nama' => 'Padang Pecut',
            'deskripsi' => 'Akar, daun, dan bunga padang pecut.',
            'pemakaian' => 'Minum air rebusan (lōlōh).'
        ]);

        $pangi = $hepatitis->ramuans()->create([
            'nama' => 'Pangi',
            'deskripsi' => 'Kulit kayu pangi, daun kelinco, ketumbar, rimpang lengkuas, kayu cendana jenggi, menyan arab, dan menyan madu.',
            'pemakaian' => 'Boreh (pilis) setiap pagi.'
        ]);

        // 🌿 TUMBUHAN
        $t1 = Tumbuhan::create(['nama_umum' => 'Padang Belulang', 'nama_latin' => 'Eleusine sp.', 'bagian_umum' => 'Akar']);
        $t2 = Tumbuhan::create(['nama_umum' => 'Gantung Beringin', 'bagian_umum' => 'Akar gantung']);
        $t3 = Tumbuhan::create(['nama_umum' => 'Gula Aren', 'bagian_umum' => 'Getah']);
        $t4 = Tumbuhan::create(['nama_umum' => 'Padang Pecut', 'bagian_umum' => 'Akar, daun, bunga']);
        $t5 = Tumbuhan::create(['nama_umum' => 'Pangi', 'bagian_umum' => 'Kulit kayu']);
        $t6 = Tumbuhan::create(['nama_umum' => 'Daun Kelinco', 'bagian_umum' => 'Daun']);
        $t7 = Tumbuhan::create(['nama_umum' => 'Ketumbar', 'bagian_umum' => 'Biji']);
        $t8 = Tumbuhan::create(['nama_umum' => 'Lengkuas', 'bagian_umum' => 'Rimpang']);
        $t9 = Tumbuhan::create(['nama_umum' => 'Cendana', 'bagian_umum' => 'Kayu']);
        $t10 = Tumbuhan::create(['nama_umum' => 'Menyan Arab', 'bagian_umum' => 'Getah']);
        $t11 = Tumbuhan::create(['nama_umum' => 'Menyan Madu', 'bagian_umum' => 'Getah']);

        // 🌿 CARA MENGOLAH
        $c1 = CaraMengolah::create(['nama' => 'Digerus halus', 'deskripsi' => 'Bahan ditumbuk atau digiling hingga halus.']);
        $c2 = CaraMengolah::create(['nama' => 'Direbus', 'deskripsi' => 'Bahan direbus dengan air hingga mendidih.']);
        $c3 = CaraMengolah::create(['nama' => 'Diperas', 'deskripsi' => 'Setelah digerus, bahan diperas untuk diambil sarinya.']);
        $c4 = CaraMengolah::create(['nama' => 'Ditumbuk halus', 'deskripsi' => 'Bahan dihancurkan menggunakan alat tumbuk.']);

        // 🌿 RELASI: Ramuan → Tumbuhan
        $padangBelulang->tumbuhans()->attach([$t1->id, $t2->id, $t3->id]);
        $padangPecut->tumbuhans()->attach([$t4->id]);
        $pangi->tumbuhans()->attach([$t5->id, $t6->id, $t7->id, $t8->id, $t9->id, $t10->id, $t11->id]);

        // 🌿 RELASI: Ramuan → Cara Mengolah
        $padangBelulang->caraMengolah()->attach([$c1->id, $c3->id]);
        $padangPecut->caraMengolah()->attach([$c2->id]);
        $pangi->caraMengolah()->attach([$c1->id, $c4->id]);
    }
}
