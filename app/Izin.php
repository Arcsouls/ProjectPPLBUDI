<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Izin extends Model
{
    protected $table = "izin";

    protected $guarded = [];
    public function user()
    {
    	return $this->belongsTo('App\user');
    }
}
