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
            'foto'              => '01.jpg',
            'noKP'              => '840805025048',
            'noAhli'            => strtoupper('ME01 - 0001'),
            'nama'              => strtoupper('SHARIFAH BINTI ABDUL KARIM'),
            'alamat'            => strtoupper('Blok A, lot no 13 & 4, kawasan perindustrian mara, 02000 kuala perlis, perlis.'),
            'jantina'           => 'PEREMPUAN',
            'noTel'             => '0194295692',
            'statusAhliPpk'     => 'AKTIF',
            'ppk'               => 2, // PPK B1
            'wilayah'           => 1,
            'perusahaan'        => 'AIR SARANG BURUNG'
        ]);

        Pengusaha::create([
            'foto'              => '02.jpg',
            'noKP'              => '870813025205',
            'noAhli'            => strtoupper('ME01 - 0002'),
            'nama'              => strtoupper('MOHD ZULKHAIRI BIN MOHD NOR'),
            'alamat'            => strtoupper('243, perumahan polis seriab, -1--- kangar, perlis'),
            'jantina'           => 'LELAKI',
            'noTel'             => '0134361772',
            'statusAhliPpk'     => 'AKTIF',
            'ppk'               => 2,
            'wilayah'           => 1,
            'perusahaan'        => 'MEE LIDI & SANGGUL'
        ]);

        Pengusaha::create([
            'foto'              => '03.jpg',
            'noKP'              => '840321025412',
            'noAhli'            => strtoupper('ME02 - 0001'),
            'nama'              => strtoupper('MAZUREEN BT. HJ. NORDIN'),
            'alamat'            => strtoupper('kar 10, kuala sungai, mk. kubang rotan, 06250 alor setar, kedah.'),
            'jantina'           => 'PEREMPUAN',
            'noTel'             => '0195692606',
            'statusAhliPpk'     => 'AKTIF',
            'ppk'               => 14, // PPK I2
            'wilayah'           => 2,
            'perusahaan'        => 'SERBUK KARI'
        ]);

        Pengusaha::create([
            'foto'              => '04.jpg',
            'noKP'              => '850829025690',
            'noAhli'            => strtoupper('ME03 - 0001'),
            'nama'              => strtoupper('FAUZIAH BINTI JASNI'),
            'alamat'            => strtoupper('no. 4, kg. paya sena, 06700 pendang, kedah'),
            'jantina'           => 'PEREMPUAN',
            'noTel'             => '0134070342',
            'statusAhliPpk'     => 'AKTIF',
            'ppk'               => 19, // PPK E3
            'wilayah'           => 3,
            'perusahaan'        => 'KUIH TRADISIONAL'
        ]);

        Pengusaha::create([
    		'foto'               => '05.jpg',
            'noKP' 		        => '900123025027',
    		'noAhli'	        => strtoupper('ME04 - 0001'),
    		'nama' 		        => strtoupper('MUHAMMAD MUKHRI B MOHD NOOR'),
            'alamat'            => strtoupper('kg. baru belakang pejabat mada, 06800 gurun, kedah.'),
    		'jantina'	        => 'LELAKI',
    		'noTel'		        => '0174336904',
            'statusAhliPpk'     => 'AKTIF',
    		'ppk'		        => 27, // PPK G4
    		'wilayah'	        => 4,
            'perusahaan'        => 'TAUHU'
		]);
        
    }
}
