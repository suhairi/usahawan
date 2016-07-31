<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Program;
use Validator;
use Session;

class ProgramController extends Controller
{
    public function daftarProgram() {

    	$programs = Program::all();    	

    	return View('daftar.daftarProgram', compact('program', 'programs'));
    }

    public function postDaftarProgram(Request $request) {


    	$validation = Validator::make($request->all(), [
    		'nama'		=> 'required',
    		'tarikh'	=> 'required',
    		'point'		=> 'required|numeric'
		]);


		if($validation->fails()) {
			Session::flash('error', 'Gagal. Semua ruangan adalah wajib diisi. Isikan dengan format yang betul.');
			return back();

		}

		// Bugs here
		// Check the same program with the same date...

		Program::create([
			'nama'		=> strtoupper($request->nama),
			'tarikh'	=> $request->tarikh,
			'point'		=> $request->point
		]);

		Session::flash('success', 'Berjaya. Program berjaya didaftarkan.');


		$programs = Program::all();

    	return View('daftar.daftarProgram', compact('programs'));

    }
}
