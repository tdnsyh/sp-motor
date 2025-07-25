<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Kerusakan;
use App\Models\RiwayatDiagnosa;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class DiagnosaController extends Controller
{
    public function form()
    {
        $gejalas = Gejala::all();
        return view('public.diagnosa.form', compact('gejalas'));
    }

    public function panduan()
    {
        return view('public.diagnosa.panduan');
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

        $hasil = collect($hasil)->sortByDesc('confidence')->take(3)->values();
        session(['gejala_terpilih' => $selectedGejala]);

        return view('public.diagnosa.hasil', compact('hasil'));
    }

    public function simpan(Request $request)
    {
        $gejalaTerpilih = session('gejala_terpilih');
        $hasilDiagnosa = json_decode($request->hasil_diagnosa, true);

        $hasilUtama = $hasilDiagnosa[0]['kerusakan']['nama'] ?? 'Tidak diketahui';

        RiwayatDiagnosa::create([
            'user_id' => Auth::id(),
            'gejala_terpilih' => $gejalaTerpilih,
            'hasil_diagnosa' => $hasilUtama,
        ]);

        return redirect()->route('user.riwayat.index')->with('success', 'Riwayat diagnosa berhasil disimpan.');
    }

    public function cetak(Request $request)
    {
        $hasil = json_decode($request->input('hasil_diagnosa'), true);
        $gejala_terpilih = json_decode($request->input('gejala_terpilih'), true);

        $gejala_objects = Gejala::whereIn('id', $gejala_terpilih)->get();

        return PDF::loadView('public.diagnosa.pdf', compact('hasil', 'gejala_objects'))
                ->setPaper('A4', 'portrait')
                ->download('hasil_diagnosa.pdf');
    }
}
