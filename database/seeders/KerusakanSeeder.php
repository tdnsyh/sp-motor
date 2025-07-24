<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kerusakan;

class KerusakanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $data = [
            ['K01', 'Kiprok rusak'],
            ['K02', 'Aki soak'],
            ['K03', 'Kabel pengisian putus'],
            ['K04', 'Sekring putus'],
            ['K05', 'Saklar lampu rusak'],
            ['K06', 'Spul pengisian lemah'],
            ['K07', 'Terminal aki kotor'],
            ['K08', 'Kabel grounding lepas'],
            ['K09', 'Kabel terbakar'],
            ['K10', 'CDI tidak stabil'],
            ['K11', 'Overcharge dari kiprok'],
            ['K12', 'Bohlam tidak sesuai spesifikasi'],
            ['K13', 'Soket longgar'],
            ['K14', 'Regulator tidak bekerja'],
            ['K15', 'Stator short'],
            ['K16', 'Starter relay rusak'],
            ['K17', 'Fuse aus'],
            ['K18', 'Saklar rem tidak terhubung'],
            ['K19', 'Indikator panel error'],
            ['K20', 'Wiring harness bermasalah'],
            ['K21', 'Kabel charging aus'],
            ['K22', 'Baterai kembung'],
            ['K23', 'Spul terbakar'],
            ['K24', 'Relay starter aus'],
            ['K25', 'Lampu dashboard rusak'],
        ];

        foreach ($data as [$kode, $nama]) {
            Kerusakan::create([
                'kode' => $kode,
                'nama' => $nama,
                'solusi' => null, // Bisa kamu isi nanti jika punya data solusi
            ]);
        }
    }
}
