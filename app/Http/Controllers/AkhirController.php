<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LaporanAkhir;
use File;

class AkhirController extends Controller
{
  public function index(){
      $laporanakhir = LaporanAkhir::get();
      return view('dataakhir', compact('laporanakhir'));
  }
}
