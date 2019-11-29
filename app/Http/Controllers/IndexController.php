<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gambar;
use File;

class IndexController extends Controller
{
    public function index(){
        $gambar = Gambar::where('status',1)->get();
        return view('home', compact('gambar'));
    }
}
