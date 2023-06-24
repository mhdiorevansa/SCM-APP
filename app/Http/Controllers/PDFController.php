<?php

namespace App\Http\Controllers;


use PDF;
use App\Models\SayurMasuk;
use App\Models\SayurKeluar;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function printSayurMasuk()
    {
        $sayurMasuk = SayurMasuk::with(['sayur', 'supplier'])->get();
        $pdf = PDF::loadView('pdf.cetak-sayur-masuk', ['sayurMasuk' => $sayurMasuk]);
        $filename = 'laporan sayur masuk -' . now()->format('Ymd_His') . '.pdf';

        return $pdf->download($filename);
    }
    public function printSayurKeluar()
    {
        $sayurKeluar = SayurKeluar::with(['sayur'])->get();
        $pdf = PDF::loadView('pdf.cetak-sayur-keluar', ['sayurKeluar' => $sayurKeluar]);
        $filename = 'laporan sayur keluar -' . now()->format('Ymd_His') . '.pdf';

        return $pdf->download($filename);
    }
}
