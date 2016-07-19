<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LaporanController extends Controller
{
    public function umum() {

    	return View('laporan.umum');
    }
}
