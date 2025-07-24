<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rules = [
            ['kode_rule' => 'R1', 'kerusakan_id' => 1, 'gejala_ids' => [1, 2, 22, 23]],
            ['kode_rule' => 'R2', 'kerusakan_id' => 2, 'gejala_ids' => [3, 25, 50]],
            ['kode_rule' => 'R3', 'kerusakan_id' => 3, 'gejala_ids' => [20, 21, 40]],
            ['kode_rule' => 'R4', 'kerusakan_id' => 4, 'gejala_ids' => [11, 48]],
            ['kode_rule' => 'R5', 'kerusakan_id' => 5, 'gejala_ids' => [1, 31]],
            ['kode_rule' => 'R6', 'kerusakan_id' => 6, 'gejala_ids' => [15, 39, 41]],
            ['kode_rule' => 'R7', 'kerusakan_id' => 7, 'gejala_ids' => [3, 47]],
            ['kode_rule' => 'R8', 'kerusakan_id' => 8, 'gejala_ids' => [17, 30]],
            ['kode_rule' => 'R9', 'kerusakan_id' => 9, 'gejala_ids' => [12, 46]],
            ['kode_rule' => 'R10', 'kerusakan_id' => 10, 'gejala_ids' => [5, 36]],
            ['kode_rule' => 'R11', 'kerusakan_id' => 11, 'gejala_ids' => [35]],
            ['kode_rule' => 'R12', 'kerusakan_id' => 12, 'gejala_ids' => [13, 49]],
            ['kode_rule' => 'R13', 'kerusakan_id' => 13, 'gejala_ids' => [7, 18]],
            ['kode_rule' => 'R14', 'kerusakan_id' => 14, 'gejala_ids' => [21, 44]],
            ['kode_rule' => 'R15', 'kerusakan_id' => 15, 'gejala_ids' => [37]],
            ['kode_rule' => 'R16', 'kerusakan_id' => 16, 'gejala_ids' => [10, 24]],
            ['kode_rule' => 'R17', 'kerusakan_id' => 17, 'gejala_ids' => [19]],
            ['kode_rule' => 'R18', 'kerusakan_id' => 18, 'gejala_ids' => [6, 42]],
            ['kode_rule' => 'R19', 'kerusakan_id' => 19, 'gejala_ids' => [27, 28]],
            ['kode_rule' => 'R20', 'kerusakan_id' => 20, 'gejala_ids' => [12, 26]],
            ['kode_rule' => 'R21', 'kerusakan_id' => 21, 'gejala_ids' => [40]],
            ['kode_rule' => 'R22', 'kerusakan_id' => 22, 'gejala_ids' => [50]],
            ['kode_rule' => 'R23', 'kerusakan_id' => 23, 'gejala_ids' => [14, 38]],
            ['kode_rule' => 'R24', 'kerusakan_id' => 24, 'gejala_ids' => [24]],
            ['kode_rule' => 'R25', 'kerusakan_id' => 25, 'gejala_ids' => [9]],
        ];

        foreach ($rules as $rule) {
            foreach ($rule['gejala_ids'] as $gejala_id) {
                DB::table('rule')->insert([
                    'kode_rule' => $rule['kode_rule'],
                    'kerusakan_id' => $rule['kerusakan_id'],
                    'gejala_id' => $gejala_id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
