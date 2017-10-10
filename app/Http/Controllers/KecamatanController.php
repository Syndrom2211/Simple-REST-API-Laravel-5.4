<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Kecamatan;

class KecamatanController extends Controller
{
    public function nampilkeun_kabeh(){
      $kecamatan = Kecamatan::all();
      return response()->json($kecamatan);
    }

    public function nampilkeun_ku_id($id){
      $kecamatan = Kecamatan::find($id);
      if(is_null($kecamatan)){
        return response()->json("Data na eweuhan masbro");
	    }

      return response()->json($kecamatan);
    }

    public function tampilan_tambah(){
      return view("contoh_tambah");
    }

    public function nambah_data(Request $request){
      $kecamatan = new Kecamatan;

      $kecamatan->id_kecamatan = $request->id_kecamatan;
      $kecamatan->kecamatan    = $request->kecamatan;
      $status = $kecamatan->save();

      if (!$status) {
        return response()->json("Data na geus ayaan mereun");
      }

      return response()->json("Alus.. data na geus ditambah, sok cek");
    }

    public function ngahapus_data($id){
      $kecamatan = Kecamatan::find($id);
      $status = $kecamatan->delete();
      if(!$status){
        return response()->json("Gagal di hapus.. cing baleg!!");
      }

      return response()->json("Alus.. data na geus di hapus, sok cek");
    }

    public function ngubah_data(Request $request, $id){
      $kecamatan = Kecamatan::find($id);

      if(!is_null($kecamatan)){
        $kecamatan->kecamatan = $data_kecamatan;
      }

      $status = $kecamatan->save();
      if (!$status) {
        return response()->json("Gagal ahk.. id na eweuh meren");
      }

      return response()->json("Alus.. data na geus diubah, sok cek");
    }
}
