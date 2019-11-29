<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Gambar;
use App\Izin;
use App\LaporanAkhir;


class HomeAdminController extends Controller
{
    public function homeadmin(){
      $count = Gambar::count();
      $count2 = Izin::wherestatus('disetujui')->count();
      $count3 = Izin::wherestatus('tidak disetujui')->count();
      $count4 = LaporanAkhir::count();


      return view('homeadmin',compact('count', 'count2', 'count3', 'count4'));
    }
}
