<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Izin;
use File;

class PerijinankuadminController extends Controller
{
    public function index(){
		$izin = Izin::get();
		return view('perijinanku_admin',['izin' => $izin]);
	}
	public function detail($id){
		$izin = Izin::findOrFail($id);
		return view('detail',['izin' => $izin]);
	}
	public function proses_detail(Request $request,$id){
    	Izin::where('id',$id)->update([
    		'status'=>$request->status
    	]);
 
		return redirect()->back();
    }
}
