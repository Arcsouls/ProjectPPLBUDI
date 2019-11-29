<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gambar;
use File;

class TabelController extends Controller
{
    public function index(){
        $gambar = Gambar::get();
        return view('tabel', compact('gambar'));
    }
    public function tampil($id){
    	$gambar = Gambar::get();
    	Gambar::where('id',$id)->update([
    		'status'=>1
    	]);

		return redirect()->back();
    }
    public function urungkan($id){
    	$gambar = Gambar::get();
    	Gambar::where('id',$id)->update([
    		'status'=>0
    	]);

		return redirect()->back();
    }
}
