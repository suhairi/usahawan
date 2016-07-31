<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Point;
use App\Program;
use Session;
use Redirector;
use Validator;
use App\Kad;

class PointController extends Controller
{
    public function point() {

    	$program = Program::where('tarikh', date('Y-m-d'))->first();

    	if($program == null) {
    		Session::flash('error', 'Gagal. Tiada Program pada tarikh hari ini. Sila daftar program dahulu.');

    		$programs = Program::all();  
    		return View('daftar.daftarProgram', compact('programs'));
    	}

    	$points = Point::where('program_id', $program->id)->get();


    	return View('point', compact('program', 'points'));

    }

    public function postPoint(Request $request) {

    	// Check usahawan has a card;

    	$kad = Kad::where('noKad', $request->noKad)
    			->where('status', 'AKTIF')
    			->first();

    	if($kad == null) {
			Session::flash('error', 'Gagal. Kad ini tidak didaftarkan atau Tidak Aktif');
    		return back();
    	}

    	$program = Program::where('id', $request->program_id)->first();


    	$point = Point::create([
    		'program_id'	=> $request->program_id,
    		'pengusaha_id'	=> $kad->pengusaha_id,
    		'point'			=> $program->point

		]);

		Session::flash('success', 'Berjaya. Point usahawan telah direkodkan.');


    	$program = Program::where('tarikh', date('Y-m-d'))->first();

    	if($program == null) {
    		Session::flash('error', 'Gagal. Tiada Program pada tarikh hari ini. Sila daftar program dahulu.');

    		$programs = Program::all();  
    		return View('daftar.daftarProgram', compact('programs'));
    	}

    	$points = Point::where('program_id', $program->id)->get();
    	
    	return View('point', compact('program', 'points'));
    }
}
