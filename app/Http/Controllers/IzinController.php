<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Izin;
use File;

class IzinController extends Controller
{
    public function izin(){
		$izin = Izin::where('user_id',auth()->user()->id)->get();
		return view('izin',['izin' => $izin]);
	}

	public function proses_izin(Request $request){
		$this->validate($request, [
			'desa' => ['required', 'file', 'image'],
			'kecamatan' => ['required', 'file', 'image'],
			'keterangan' => ['required', 'max:255'],
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('desa');
		$fili = $request->file('kecamatan');

		$nama_file = time()."_".$file->getClientOriginalName();
		$nama_fili = time()."_".$fili->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_izin = 'perijinan';
		$file->move($tujuan_izin,$nama_file);
		$fili->move($tujuan_izin,$nama_fili);

		Izin::create([
			'desa' => $nama_file,
			'kecamatan' => $nama_fili,
			'keterangan' => $request->keterangan,
      'user_id' => auth()->user()->id,
      'nama' => auth()->user()->name,
			'belakang' => auth()->user()->nama,
		]);

		return redirect()->back();
	}
	public function hapus($id){
		// hapus file
		$izin = Izin::where('id',$id)->first();
		File::delete('perijinan/'.$izin->file);

		// hapus data
		Izin::where('id',$id)->delete();

		return redirect()->back();
	}
}
