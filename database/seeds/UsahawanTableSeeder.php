<?php

use Illuminate\Database\Seeder;
use App\Pengusaha;

class UsahawanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Pengusaha::create([
    		'noKP' 		=> '870813025205',
    		'noAhli'	=> strtoupper('ME01 - 0001'),
    		'nama' 		=> strtoupper('Mohd Zulkhairi bin Mohd Noor'),
    		'jantina'	=> 'LELAKI',
    		'noTel'		=> '013-4361772',
    		'ppk'		=> 'C1',
    		'wilayah'		=> '1'
		]);
        
    }
}
