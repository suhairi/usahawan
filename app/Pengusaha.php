<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kad;

class Pengusaha extends Model
{

    public $table = 'pengusaha';

    protected $fillable = [
    	'foto', 'noKP', 'noAhli', 'nama', 'jantina', 'noTel', 'pendidikan', 'institusiPendidikan', 'bidangPengajian',
    	'bangsa', 'warganegara', 'perkahwinan', 'alamat', 'dun', 'perlimen', 'daerah', 'statusAhliPPK',
    	'ppk', 'wilayah'
    ];

    public $timestamps = false;

    public function Ppk() {
    	return $this->hasOne('App\Ppk', 'id', 'ppk');
    }

    public function pendidikan() {
    	return $this->hasOne('App\Pendidikan', 'pendidikan', 'id');
    }

    public function kad($id) {

        $kad = null;
        $kad = Kad::where('pengusaha_id', $id)->first();

        return $kad;
    }
}
