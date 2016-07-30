<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pengusaha;

class LaporanController extends Controller
{
    public function umum() {

  		$wilayah['grandTotal'] = 0;
  		$jantina['grandTotal'] = 0;

    	for($i = 1; $i <= 4; $i++) {

    		// UMUR
			$wilayah[$i]["total"] = 0;
			$jantina[$i]["total"] = 0;

			// JANTINA
			$jantina[$i]["lelaki"] = 0;
			$jantina[$i]["perempuan"] = 0;
	   	
	    	$pengusahas = Pengusaha::where('wilayah', $i)
	    					->where('statusAhliPPK', 'AKTIF')
	    					->get();			


			$wilayah[$i][1] = $wilayah[$i][2] = $wilayah[$i][3] = $wilayah[$i][4] = $wilayah[$i][5] = $wilayah[$i][6] = 0;
			
			foreach($pengusahas as $pengusaha) {
	
				// Kategori 1 umur 18 -25
				if($this->checkAge($pengusaha->noKP) >= 18 && $this->checkAge($pengusaha->noKP) <= 25) {
						$wilayah[$i][1]++;
						$wilayah[$i]["total"]++;
				}

				// Kategori 2 umur 26 - 30
				if($this->checkAge($pengusaha->noKP) >= 26 && $this->checkAge($pengusaha->noKP) <= 30) {
						$wilayah[$i][2]++;
						$wilayah[$i]["total"]++;
				}

				// Kategori 3 umur 31 - 40
				if($this->checkAge($pengusaha->noKP) >= 31 && $this->checkAge($pengusaha->noKP) <= 40) {
						$wilayah[$i][3]++;
						$wilayah[$i]["total"]++;
				}

				// Kategori 4 umur 41 - 50
				if($this->checkAge($pengusaha->noKP) >= 41 && $this->checkAge($pengusaha->noKP) <= 50) {
						$wilayah[$i][4]++;
						$wilayah[$i]["total"]++;
				}

				// Kategori 5 umur 51 - 60
				if($this->checkAge($pengusaha->noKP) >= 51 && $this->checkAge($pengusaha->noKP) <= 60) {
						$wilayah[$i][5]++;
						$wilayah[$i]["total"]++;
				}

				// Kategori 6 umur > 61
				if($this->checkAge($pengusaha->noKP) > 61) {
						$wilayah[$i][6]++;
						$wilayah[$i]["total"]++;
				}			
				
				if($pengusaha->jantina == "LELAKI"){
					$jantina[$i]["lelaki"]++;
					$jantina[$i]["total"]++;
				} else {
					$jantina[$i]["perempuan"]++;
					$jantina[$i]["total"]++;
				}
			}

			$wilayah['grandTotal'] += $wilayah[$i]["total"];
			$jantina["grandTotal"] += $jantina[$i]["total"];
		}

		// return;
    	return View('laporan.umum', compact('wilayah', 'jantina'));
    }

    public function prestasi() {

    	return View('laporan.prestasi');
    }

    protected function checkAge($noKP) {

    	$currentYear = date('Y');
    	$yearOfBirth = '19' . substr($noKP, 0, 2);

    	//check if noKP starts with '0'
    	// ##########################################################
    	// Bugs here for the year of birth that start 2010 and above
    	// For the time being, this code is fine
    	// ##########################################################

    	if(substr($noKP, 0, 1) == '0')
    		$yearOfBirth = '200';

    	$age = (int)($currentYear - $yearOfBirth);
    	return $age;

    }
}
