<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'program';
    protected $primaryKey = 'id';

    public $fillable = ['nama', 'tarikh', 'point'];

    public $timestamps = false;
}
