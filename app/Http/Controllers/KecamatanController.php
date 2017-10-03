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

    public function nambah_data(){
      $kecamatan = new Kecamatan;

      //Data
      $data_satu = 31;
      $data_dua  = "Malangbong";

      $kecamatan->id_kecamatan = $data_satu;
      $kecamatan->kecamatan = $data_dua;
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

    public function ngubah_data($id){
      $kecamatan = Kecamatan::find($id);
      if(!is_null($kecamatan)){
        $data_kecamatan = "Banjaran";
        $kecamatan->kecamatan = $data_kecamatan;
      }
      $status = $kecamatan->save();
      if (!$status) {
        return response()->json("Gagal ahk.. id na eweuh meren");
      }

      return response()->json("Alus.. data na geus diubah, sok cek");
    }
}
