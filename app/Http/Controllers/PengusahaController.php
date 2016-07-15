<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PengusahaController extends Controller
{
    public function daftarPengusaha() {
    	return View('daftar.daftarPengusaha');
    }
}
