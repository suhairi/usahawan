<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pengusaha;

class LaporanController extends Controller
{
    public function umum() {

    	// dd($this->age(25));

    	// Wilayah 1
    	// Umur [1][18-25] [2][26-30] [3][31-40] [4][41-50] [5][51-60] [6][>61]

	   	// Pengusaha Wilayah 1
    	$pengusaha1s = Pengusaha::where('wilayah', 1)
    					->get();

    					dd($pengusaha1s);

		foreach($pengusaha1s as $pengusaha1) {

			// Kategori umur 18 -25
			for($i = $this->age(30); $i >= $this->age(26); $i++) {

				if(strpos($pengusaha1->noKP, $i))
					echo "<br />No KP : " . $pengusaha1->noKP;
			}
		}

		return;



    	return View('laporan.umum');
    }

    protected function age($age) {

    	$currentYear = date('Y');

    	$year = $currentYear - $age;

    	$year = substr($year, -2);

    	return $year;
    }
}
