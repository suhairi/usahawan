<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PerkhidmatanController extends Controller
{
    public function penjual() {

    	return View('perkhidmatan/penjual');
    }

    public function pembeli() {

    	return View('perkhidmatan/pembeli');
    }
}
