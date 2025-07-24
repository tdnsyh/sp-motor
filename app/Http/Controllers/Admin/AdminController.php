<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Kerusakan;
use App\Models\Rule;

class AdminController extends Controller
{
    public function dashboardAdmin()
    {
        $totalGejala = Gejala::count();
        $totalKerusakan = Kerusakan::count();
        $totalRule = Rule::distinct('kode_rule')->count('kode_rule');

        return view('admin.index', compact(
            'totalGejala',
            'totalKerusakan',
            'totalRule',
        ));
    }

    // gejala
    public function gejalaIndex()
    {
        $data = Gejala::all();
        return view('admin.gejala.index', compact('data'));
    }

    public function gejalaCreate()
    {
        return view('admin.gejala.create');
    }

    public function gejalaStore(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique:gejala,kode',
            'nama' => 'required',
        ]);

        Gejala::create($request->all());

        return redirect()->route('admin.gejala.index')->with('success', 'Gejala berhasil ditambahkan.');
    }

    public function gejalaEdit($id)
    {
        $gejala = Gejala::findOrFail($id);
        return view('admin.gejala.edit', compact('gejala'));
    }

    public function gejalaUpdate(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required|unique:gejala,kode,' . $id,
            'nama' => 'required',
        ]);

        $gejala = Gejala::findOrFail($id);
        $gejala->update($request->all());

        return redirect()->route('admin.gejala.index')->with('success', 'Gejala berhasil diperbarui.');
    }

    public function gejalaDestroy($id)
    {
        $gejala = Gejala::findOrFail($id);
        $gejala->delete();

        return redirect()->route('admin.gejala.index')->with('success', 'Gejala berhasil dihapus.');
    }

    public function kerusakanIndex()
    {
        $data = Kerusakan::all();
        return view('admin.kerusakan.index', compact('data'));
    }

    public function kerusakanCreate()
    {
        return view('admin.kerusakan.create');
    }

    public function kerusakanStore(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique:kerusakan,kode',
            'nama' => 'required',
        ]);

        Kerusakan::create($request->all());

        return redirect()->route('admin.kerusakan.index')->with('success', 'Kerusakan berhasil ditambahkan.');
    }

    public function kerusakanEdit($id)
    {
        $kerusakan = Kerusakan::findOrFail($id);
        return view('admin.kerusakan.edit', compact('kerusakan'));
    }

    public function kerusakanUpdate(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required|unique:kerusakan,kode,' . $id,
            'nama' => 'required',
        ]);

        $kerusakan = Kerusakan::findOrFail($id);
        $kerusakan->update($request->all());

        return redirect()->route('admin.kerusakan.index')->with('success', 'Kerusakan berhasil diperbarui.');
    }

    public function kerusakanDestroy($id)
    {
        $kerusakan = Kerusakan::findOrFail($id);
        $kerusakan->delete();

        return redirect()->route('admin.kerusakan.index')->with('success', 'Kerusakan berhasil dihapus.');
    }

    // rule
    public function ruleIndex()
    {
        $rules = Rule::with('gejala', 'kerusakan')
            ->get()
            ->groupBy('kode_rule')
            ->sortKeysUsing(function ($a, $b) {
                return intval(ltrim($a, 'R')) <=> intval(ltrim($b, 'R'));
            });

        return view('admin.rule.index', compact('rules'));
    }

    public function ruleCreate()
    {
        $gejala = Gejala::all();
        $kerusakan = Kerusakan::all();
        return view('admin.rule.create', compact('gejala', 'kerusakan'));
    }

    public function ruleStore(Request $request)
    {
        $request->validate([
            'kode_rule' => 'required|unique:rule,kode_rule',
            'kerusakan_id' => 'required|exists:kerusakan,id',
            'gejala_ids' => 'required|array|min:1',
            'gejala_ids.*' => 'exists:gejala,id',
        ]);

        foreach ($request->gejala_ids as $gejala_id) {
            Rule::create([
                'kode_rule' => $request->kode_rule,
                'kerusakan_id' => $request->kerusakan_id,
                'gejala_id' => $gejala_id,
            ]);
        }

        return redirect()->route('admin.rule.index')->with('success', 'Rule berhasil ditambahkan.');
    }

    public function ruleEdit($kode_rule)
    {
        $rules = Rule::where('kode_rule', $kode_rule)->get();
        $kerusakan = Kerusakan::all();
        $gejala = Gejala::all();
        $selected_gejala = $rules->pluck('gejala_id')->toArray();
        $kerusakan_id = $rules->first()->kerusakan_id ?? null;

        return view('admin.rule.edit', compact('kode_rule', 'kerusakan', 'gejala', 'selected_gejala', 'kerusakan_id'));
    }

    public function ruleUpdate(Request $request, $kode_rule)
    {
        $request->validate([
            'kerusakan_id' => 'required|exists:kerusakan,id',
            'gejala_ids' => 'required|array|min:1',
            'gejala_ids.*' => 'exists:gejala,id',
        ]);

        Rule::where('kode_rule', $kode_rule)->delete();

        foreach ($request->gejala_ids as $gejala_id) {
            Rule::create([
                'kode_rule' => $kode_rule,
                'kerusakan_id' => $request->kerusakan_id,
                'gejala_id' => $gejala_id,
            ]);
        }

        return redirect()->route('admin.rule.index')->with('success', "Rule $kode_rule berhasil diperbarui.");
    }

    public function ruleDestroy($kode_rule)
    {
        Rule::where('kode_rule', $kode_rule)->delete();
        return redirect()->route('admin.rule.index')->with('success', "Rule $kode_rule berhasil dihapus.");
    }
}
