<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Session;
use Illuminate\Routing\Redirector;
use App\Http\Controllers\Redirect;
use App\Kad;
use App\Pengusaha;

class SemakController extends Controller
{
    public function semakKad() {

    	return View('semakKad');
    }

    public function postSemakKad(Request $request) {

    	$validation = Validator::make($request->all(), [
    		'noKad'		=> 'required|min:10|max:10'
		]);

    	if($validation->fails()) {
    		Session::flash('error', 'Gagal. Min No Kad adalah 10 Digit.');
    		return back()->withInput();
    	}

    	//check Kad is belongs to someone

    	$kad = Kad::where('noKad', $request->noKad)
    		->first();

		if(empty($kad)) {
			Session::flash('error', "Gagal. Sila daftarkan kad ini. Kad ini belum didaftarkan kepada mana-mana usahawan. ");
			return back();
		}

		$usahawan = Pengusaha::where('id', $kad->pengusaha_id)
					->first();


		return View('carian.resultSemakKad', compact('usahawan'));

    }
}
