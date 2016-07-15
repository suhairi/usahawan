<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kad extends Model
{
	protected $primaryKey = ['noKad'];

	protected $fillable = ['noKad', 'pengusaha_id', 'status'];

	public function pengusaha() {
		return $this->hasOne('App\Pengusaha', 'pengusaha_id', 'id');
	}    
}
