<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Sayur;
use App\Models\SayurMasuk;
use App\Models\SayurKeluar;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $sayur = Sayur::count();
        $sayurGet = Sayur::get();
        $user = User::count();
        $jmlSayurMasuk = SayurMasuk::count();
        $jmlSayurKeluar = SayurKeluar::count();
        return view('dashboard', compact(['sayur', 'user', 'jmlSayurMasuk', 'jmlSayurKeluar', 'sayurGet']));
    }
}
