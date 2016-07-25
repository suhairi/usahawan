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
            'noKP'              => '840805025048',
            'noAhli'            => strtoupper('ME01 - 0001'),
            'nama'              => strtoupper('SHARIFAH BINTI ABDUL KARIM'),
            'jantina'           => 'PEREMPUAN',
            'noTel'             => '0194295692',
            'statusAhliPpk'     => 'AKTIF',
            'ppk'               => 2, // PPK B1
            'wilayah'           => 1
        ]);

        Pengusaha::create([
            'noKP'              => '870813025205',
            'noAhli'            => strtoupper('ME01 - 0002'),
            'nama'              => strtoupper('MOHD ZULKHAIRI BIN MOHD NOR'),
            'jantina'           => 'LELAKI',
            'noTel'             => '0134361772',
            'statusAhliPpk'     => 'AKTIF',
            'ppk'               => 2,
            'wilayah'           => 1
        ]);

        Pengusaha::create([
            'noKP'              => '840321025412',
            'noAhli'            => strtoupper('ME02 - 0001'),
            'nama'              => strtoupper('MAZUREEN BT.HJ.NORDIN'),
            'jantina'           => 'PEREMPUAN',
            'noTel'             => '0195692606',
            'statusAhliPpk'     => 'AKTIF',
            'ppk'               => 14, // PPK I2
            'wilayah'           => '2'
        ]);

        Pengusaha::create([
            'noKP'              => '850829025690',
            'noAhli'            => strtoupper('ME03 - 0001'),
            'nama'              => strtoupper('FAUZIAH BINTI JASNI'),
            'jantina'           => 'PEREMPUAN',
            'noTel'             => '0134070342',
            'statusAhliPpk'     => 'AKTIF',
            'ppk'               => 19, // PPK E3
            'wilayah'           => 2
        ]);

        Pengusaha::create([
    		'noKP' 		        => '900123025027',
    		'noAhli'	        => strtoupper('ME04 - 0001'),
    		'nama' 		        => strtoupper('MUHAMMAD MUKHRI B MOHD NOOR'),
    		'jantina'	        => 'LELAKI',
    		'noTel'		        => '0174336904',
            'statusAhliPpk'     => 'AKTIF',
    		'ppk'		        => 27, // PPK G4
    		'wilayah'	        => 4
		]);
        
    }
}
