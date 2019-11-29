<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaporanAkhir extends Model
{
  protected $table = "laporanakhir";

  protected $guarded = [];
  public function user()
  {
    return $this->belongsTo('App\user');
  }
}
