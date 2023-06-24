<?php

namespace App\Http\Controllers;

use App\Models\Sayur;
use App\Models\Supplier;
use Barryvdh\DomPDF\PDF;
use App\Models\SayurMasuk;
use Illuminate\Http\Request;

class SayurMasukController extends Controller
{
    public function allSayurMasuk()
    {
        $sayurMasuk = SayurMasuk::with(['sayur', 'supplier'])->get();
        return view('all-sayur-masuk', ['sayurMasuk' => $sayurMasuk]);
    }
    public function createSayurMasuk()
    {
        $sayur = Sayur::get();
        $supplier = Supplier::get();
        return view('create-sayur-masuk', compact('sayur', 'supplier'));
    }
    public function storeSayurMasuk(Request $request)
    {
        $sayurMasuk = SayurMasuk::create($request->all());

        // Update stok sayur
        $sayur = Sayur::find($sayurMasuk->sayur_id);
        $sayur->stok += $sayurMasuk->jumlah;
        $sayur->save();
        return redirect('/sayur-masuk');
    }
}
