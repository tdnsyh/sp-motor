<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Kerusakan;

class DiagnosaController extends Controller
{
    public function form()
    {
        $gejalas = Gejala::all();
        return view('public.diagnosa.form', compact('gejalas'));
    }

    public function hasil(Request $request)
    {
        $selectedGejala = collect($request->input('gejala'))
            ->filter(fn($v) => $v == 1)
            ->keys()
            ->map(fn($id) => (int) $id)
            ->toArray();

        $kerusakans = Kerusakan::with('rules')->get();

        $hasil = [];

        foreach ($kerusakans as $kerusakan) {
            $ruleGejala = $kerusakan->rules->pluck('gejala_id')->toArray();

            $cocok = array_intersect($ruleGejala, $selectedGejala);
            $jumlahCocok = count($cocok);
            $jumlahRule = count($ruleGejala);

            if ($jumlahCocok > 0) {
                $confidence = round(($jumlahCocok / $jumlahRule) * 100, 2);
                $hasil[] = [
                    'kerusakan' => $kerusakan,
                    'confidence' => $confidence,
                    'gejala_cocok' => $cocok,
                    'total_gejala' => $jumlahRule,
                ];
            }
        }

        // Urutkan berdasarkan confidence
        $hasil = collect($hasil)->sortByDesc('confidence')->take(3)->values();

        return view('public.diagnosa.hasil', compact('hasil'));
    }
}
