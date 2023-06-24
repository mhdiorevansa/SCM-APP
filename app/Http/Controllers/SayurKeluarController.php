<?php

namespace App\Http\Controllers;

use App\Models\Sayur;
use App\Models\SayurKeluar;
use Illuminate\Http\Request;

class SayurKeluarController extends Controller
{
    public function allSayurKeluar()
    {
        $sayurKeluar = SayurKeluar::with(['sayur'])->get();
        return view('all-sayur-keluar', ['sayurKeluar' => $sayurKeluar]);
    }
    public function createSayurKeluar()
    {
        $sayur = Sayur::get();
        return view('create-sayur-keluar', compact('sayur'));
    }
    public function storeSayurKeluar(Request $request)
    {
        $sayurKeluar = SayurKeluar::create($request->all());

        // Update stok sayur
        $sayur = Sayur::find($sayurKeluar->sayur_id);
        $sayur->stok -= $sayurKeluar->jumlah;
        $sayur->save();

        return redirect('/sayur-keluar');
    }
}
