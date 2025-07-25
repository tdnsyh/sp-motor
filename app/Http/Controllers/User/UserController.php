<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RiwayatDiagnosa;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboardUser()
    {
        return view('user.index');
    }

    public function userRiwayat()
    {
        $riwayats = RiwayatDiagnosa::where('user_id', Auth::id())
            ->latest()
            ->get();

        return view('user.riwayat.index', compact('riwayats'));
    }

}
