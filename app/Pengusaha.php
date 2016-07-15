<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengusaha extends Model
{

    public $table = 'pengusaha';

    protected $fillable = [
    	'noKP', 'nama', 'jantina', 'noTel', 'pendidikan', 'institusiPendidikan', 'bidangPengajian',
    	'bangsa', 'warganegara', 'perkahwinan', 'alamat', 'dun', 'perlimen', 'daerah', 'statusAhliPPK',
    	'ppk'
    ];

    public $timestamps = false;

    public function Ppk() {
    	return $this->hasOne('App\Ppk', 'ppk', 'id');
    }

    public function pendidikan() {
    	return $this->hasOne('App\Pendidikan', 'pendidikan', 'id');
    }
}
