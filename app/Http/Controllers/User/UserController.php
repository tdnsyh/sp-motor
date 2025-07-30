<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RiwayatDiagnosa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function dashboardUser()
    {
        $userId = Auth::id();

        $totalDiagnosa = RiwayatDiagnosa::where('user_id', $userId)->count();

        $penyakitTerbanyak = RiwayatDiagnosa::where('user_id', $userId)
            ->select('hasil_diagnosa', DB::raw('COUNT(*) AS jumlah'))
            ->groupBy('hasil_diagnosa')
            ->orderByDesc('jumlah')
            ->first();

        $riwayatTerbaru = RiwayatDiagnosa::where('user_id', $userId)
            ->latest()
            ->take(3)
            ->get();


        return view('user.index', [
            'totalDiagnosa'    => $totalDiagnosa,
            'penyakitTerbanyak'=> $penyakitTerbanyak?->hasil_diagnosa,
            'riwayatTerbaru' => $riwayatTerbaru,
        ]);
    }

    public function userRiwayat()
    {
        $riwayats = RiwayatDiagnosa::where('user_id', Auth::id())
            ->latest()
            ->get();

        return view('user.riwayat.index', compact('riwayats'));
    }

    public function profilIndex()
    {
        $title = 'Profil';
        $user = Auth::user();
        return view('user.profil.index', compact('title', 'user'));
    }

    public function profilUpdate(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|confirmed|min:6',
        ]);

        $data = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'updated_at' => now(),
        ];

        if (!empty($validated['password'])) {
            $data['password'] = Hash::make($validated['password']);
        }

        DB::table('users')->where('id', $user->id)->update($data);

        return back()->with('success', 'Profil berhasil diperbarui.');
    }

}
