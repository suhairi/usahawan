<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Session;
use App\Pengusaha;
use App\Ppk;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;

class PengusahaController extends Controller
{
    public function daftarPengusaha() {

    	$ppk = Ppk::lists('kod', 'id');

    	return View('daftar.daftarPengusaha', compact('ppk'));
    }

    public function postDaftarPengusaha(Request $request) {

    	// return $request->all();
    	$validation = Validator::make($request->all(), [
			'noKP'			=> 'required|size:12',
			'nama'			=> 'required',
			'ppk'			=> 'required',
			'perusahaan' 	=> 'required'
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

		// Generate No Ahli

		$ppk = Ppk::where('id', $request->ppk)
				->first();		

		$countUsahawan = Pengusaha::where('wilayah', $ppk->wilayah)->count();

		$idUsahawan = '';

		// ##############################
		// Here is the snippet for TRIAL
		// ##############################
		if($countUsahawan < 10)
			$idUsahawan = '000' . ($countUsahawan + 1);

		$noAhli = "ME0" . $ppk->wilayah . ' - ' . $idUsahawan;


		// Process the image

		$fileName = rand(1, 333) . '_' . rand(10000, 99999);

		if(Input::file('foto')->isValid()) {

			$destination = base_path() . "\public\images\profiles\\";
			$extensions = Input::file('foto')->getClientOriginalExtension();
			$fileName = $fileName . '.' .$extensions;
			
			Input::file('foto')->move($destination, $fileName);
		}

		// If all above success, then add into database

		if(Pengusaha::create([
			'noKP' 		=> $request->noKP,
			'noAhli'	=> $noAhli,
			'foto'		=> $fileName,
			'nama' 		=> strtoupper($request->nama),
			'alamat'	=> strtoupper($request->alamat),
			'perusahaan'=> strtoupper($request->perusahaan),
			'jantina' 	=> strtoupper($request->jantina), 
			'noTel' 	=> strtoupper($request->noTel),
			'ppk'		=> $request->ppk
		])) {
			Session::flash('success', 'Berjaya. No KP ' . $request->noKP . ' telah berjaya didaftarkan.');
		}


    	return redirect('daftar/daftarPengusaha');
    }
}
