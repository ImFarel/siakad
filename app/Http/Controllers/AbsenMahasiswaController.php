<?php

namespace App\Http\Controllers;

use App\Matkul;
use App\Berkul;
use App\Mahasiswa;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class AbsenMahasiswaController extends Controller
{
    public function index()
    {
      $matkul = Matkul::pluck('nama','kd_matkul');
      $semester = DB::table('semester')->pluck('semester','id');
      $ajaran = DB::table('tahun_ajaran')->pluck('tahun_ajaran','id');
      return view('mahasiswa.absen.index',compact('matkul','semester','ajaran'));
    }

    public function bak(Request $req)
    {
      dd($req->all());
      $data = Berkul::where('tanggal');
    }

    public function result(Request $request)
    {
      $data = Matkul::where('kd_matkul', $request->kd_matkul)->first();
      $mahasiswa = Mahasiswa::where('progstu_id',$data->progstu_id)->where('semester_id', $data->semester_id)->where('tahun_ajaran_id', $request->tahun_ajaran)->get();
      // dd($mahasiswa);
      return view('mahasiswa.absen.result', compact('data','mahasiswa'));
    }

    public function store(Request $request)
    {
      dd($request->all());
      $absen = array();
      foreach ($request->input('absen') as $key => $value) {
        // dd($find);
        $absen[] = new AbsenMahasiswa([
          'mahasiswa_id' => $value['mahasiswa_id'],
          'absen' => $value['status'],
          'ket' => NULL,
          'matkul_id' => $value['matkul_id'],
          'absen_at' => NULL,
          'absen_date' => NULL,
          'berita_acara_kuliah_id' => NULL,
        ]);
      }
      dd($absen);
    }
}
