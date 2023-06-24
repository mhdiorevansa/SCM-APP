<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index()
    {
        $user = auth()->User();
        return view('my-profile', compact('user'));
    }
}