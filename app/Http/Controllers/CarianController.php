<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pengusaha;

class CarianController extends Controller
{
    public function carian() {
    	return View('carian.carian');
    }

    public function postCarian(Request $request) {

    	$usahawan = Pengusaha::where('noKP', $request->noKP)
    		->first();

		return View('carian.resultCarian', compact('usahawan'));
    }
}
