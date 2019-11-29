<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Izin;
use File;

class PerijinankuController extends Controller
{
    public function index(){
        // $izin = Izin::get();
        // return view('perijinanku', compact('izin'));
        $izin = Izin::where('user_id',auth()->user()->id)->get();
		return view('perijinanku',['izin' => $izin]);
    }
}
