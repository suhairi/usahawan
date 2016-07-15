<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kad extends Model
{
	protected $table = "kad";
	
	protected $fillable = ['noKad', 'pengusaha_id', 'status'];

	public $timestamps = false;

	public function pengusaha() {
		return $this->belongsTo('App\Pengusaha', 'pengusaha_id');
	}    
}
