<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gejala;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
 public function run()
    {
        $gejalaList = [
            ['G01', 'Lampu depan tidak menyala'],
            ['G02', 'Lampu redup saat idle'],
            ['G03', 'Aki cepat habis'],
            ['G04', 'Klakson tidak berbunyi'],
            ['G05', 'Motor sulit distarter'],
            ['G06', 'Lampu rem tidak menyala'],
            ['G07', 'Lampu indikator mati'],
            ['G08', 'Lampu sen tidak berkedip'],
            ['G09', 'Lampu dashboard redup'],
            ['G10', 'Suara starter tidak muncul'],
            ['G11', 'Sekring sering putus'],
            ['G12', 'Kabel terbakar'],
            ['G13', 'Bohlam sering putus'],
            ['G14', 'Aki tidak bisa diisi ulang'],
            ['G15', 'Spul panas berlebihan'],
            ['G16', 'Putaran mesin tidak stabil'],
            ['G17', 'Kelistrikan hilang saat hujan'],
            ['G18', 'Kabel soket longgar'],
            ['G19', 'Fuse tidak berfungsi'],
            ['G20', 'Tegangan aki di bawah 11V'],
            ['G21', 'Tegangan pengisian tidak stabil'],
            ['G22', 'Lampu menyala saat mesin mati'],
            ['G23', 'Lampu depan redup sebelah'],
            ['G24', 'Starter hanya klik'],
            ['G25', 'Aki baru cepat soak'],
            ['G26', 'Kelistrikan mati total'],
            ['G27', 'Indikator bensin tidak bergerak'],
            ['G28', 'Lampu netral mati'],
            ['G29', 'Tidak ada arus ke bohlam'],
            ['G30', 'Kabel grounding lepas'],
            ['G31', 'Saklar lampu tidak responsif'],
            ['G32', 'Kabel rem putus'],
            ['G33', 'Lampu sen kanan mati'],
            ['G34', 'Lampu sen kiri mati'],
            ['G35', 'Tegangan overcharge (di atas 15V)'],
            ['G36', 'Kabel CDI lepas'],
            ['G37', 'Stator lemah'],
            ['G38', 'Kiprok panas berlebihan'],
            ['G39', 'Tidak ada pengisian ke aki'],
            ['G40', 'Kabel pengisian aus'],
            ['G41', 'Output spul kecil'],
            ['G42', 'Saklar rem lengket'],
            ['G43', 'Lampu hanya nyala saat digas'],
            ['G44', 'Regulator tidak berfungsi'],
            ['G45', 'Kiprok terbakar'],
            ['G46', 'Kabel soket meleleh'],
            ['G47', 'Terminal aki kotor'],
            ['G48', 'Sekring longgar'],
            ['G49', 'Bohlam tidak sesuai watt'],
            ['G50', 'Aki kembung'],
        ];

        foreach ($gejalaList as [$kode, $nama]) {
            Gejala::create([
                'kode' => $kode,
                'nama' => $nama,
            ]);
        }
    }
}
