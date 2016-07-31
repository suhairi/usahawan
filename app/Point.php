<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pengusaha;

class Point extends Model
{
    protected $table = 'point';
    protected $primaryKey = 'id';

    protected $fillable = ['program_id', 'pengusaha_id', 'point'];

    public $timestamps = false;


    public function pengusaha() {
    	return $this->hasOne('App\Pengusaha', 'id', 'pengusaha_id'); 
    }

}
