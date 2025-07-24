<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function publicIndex()
    {
        return view('public.index');
    }

    public function dashboard()
    {
        return view('admin.index');
    }
}
