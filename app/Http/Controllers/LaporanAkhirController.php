<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LaporanAkhir;
use File;

class LaporanAkhirController extends Controller
{
  public function laporanakhir(){
  $laporanakhir = LaporanAkhir::where('user_id',auth()->user()->id)->get();
  return view('laporanakhir',['laporanakhir' => $laporanakhir]);
  }
  public function proses_laporan(Request $request){
		$this->validate($request, [
      'file' => 'required|file',
			'keterangan' => 'required',
		]);

    $file = $request->file('file');

		$nama_file = time()."_".$file->getClientOriginalName();

    $tujuan_laporan = 'Laporan Akhir';
		$file->move($tujuan_laporan,$nama_file);

    LaporanAkhir::create([
			'file' => $nama_file,
			'keterangan' => $request->keterangan,
      'user_id' => auth()->user()->id,
		]);

		return redirect()->back();
  }
  public function hapus($id){
		// hapus file
		$laporanakhir = LaporanAkhir::where('id',$id)->first();
		File::delete('Laporan Akhir/'.$laporanakhir->file);

		// hapus data
		LaporanAkhir::where('id',$id)->delete();

		return redirect()->back();
	}
}
