<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pengusaha;

class SenaraiController extends Controller
{
    public function senarai() {

    	$usahawans = Pengusaha::orderBy('nama', 'asc')
    		->get();

    	return View('laporan.usahawan', compact('usahawans'));
    }
}
