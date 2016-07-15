<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Session;
use App\Kad;
use App\Pengusaha;

class KadController extends Controller
{
	public function daftarKad() {
		return View('daftar.daftarKad');
	}

	public function postDaftarKad(Request $request) {

		$validation = Validator::make($request->all(), [
			'noKad' => 'required|min:10',
			'noKP'	=> 'required|size:12'
		]);

		// 1 - Validate inputs
		if($validation->fails()) {
			Session::flash('error', 'Minimum No Kad adalah 10 digit');
			return redirect('daftar/daftarKad')->withInput();
		}

		// 2 - Check noKP is belong to a Pengusaha

		$pengusaha = Pengusaha::where('noKP', $request->noKP)
					->get();

		if($pengusaha->isEmpty()) {
			Session::flash('error', 'No KP ini tidak didaftarkan sebagai usahawan.');
			return $redirect('daftar/daftarKad')->withInput();
		}


		// 3 - Check wether the noKad already existed
		$kad = Kad::where('noKad', $request->noKad)
			->orWhere('noKP', $request->noKP)
			->get();

		if(!$kad->isEmpty()) {
			Session::flash('error', 'Kad ini milik : ' . $kad->pengusaha->nama);
			return redirect('daftar/daftarKad')->withInput();
		}

		if(Kad::create(['noKad' => $request->noKad, 'noKP' => $request->noKP])) {
			Session::flash('success', 'Berjaya. Kad telah didaftarkan kepada ' . $kad->pengusaha->nama);			
		}

		return $redirect('daftar/daftarKad');
	}  
}
