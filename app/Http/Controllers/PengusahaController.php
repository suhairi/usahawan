<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Session;
use App\Pengusaha;

class PengusahaController extends Controller
{
    public function daftarPengusaha() {
    	return View('daftar.daftarPengusaha');
    }

    public function postDaftarPengusaha(Request $request) {

    	$validation = Validator::make($request->all(), [
			'noKP'	=> 'required|size:12',
			'nama'	=> 'required'
		]);

		if($validation->fails()) {
			Session::flash('error', 'Ruangan bertanda * adalah wajib. Min No KP adalah 12 Digit');
			return redirect('daftar/daftarPengusaha')
					->withInput()
					->withErrors($validation);
		}

		// 1 - check noKP redunduncy
		$pengusaha = Pengusaha::where('noKP', $request->noKP)
					->get();

		if(!$pengusaha->isEmpty()) {
			Session::flash('error', 'Gagal. No KP ini telah didaftarkan kepada ' . $pengusaha->nama);
			return redirect('daftar/daftarPengusaha')->withInput();
		}

		if(Pengusaha::create([
			'noKP' 		=> $request->noKP, 
			'nama' 		=> strtoupper($request->nama), 
			'jantina' 	=> strtoupper($request->jantina), 
			'noTel' 	=> strtoupper($request->noTel)
		])) {
			Session::flash('success', 'Berjaya. No KP ' . $request->noKP . ' telah berjaya didaftarkan.');
		}


    	return redirect('daftar/daftarPengusaha');
    }
}
