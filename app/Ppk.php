<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ppk extends Model
{
	protected $table = "ppk";
	
    public $fillable = ['kod', 'wilayah', 'nama'];

    public $timestamps = false;
}
