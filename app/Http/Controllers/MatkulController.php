<?php

namespace App\Http\Controllers;

use App\Matkul;
use App\Dosen;
use App\Progstu;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    public function index()
    {
      $data = Matkul::all();
      return view('matkul.index', compact('data'));
    }
    public function create()
    {
      $dosen   = Dosen::orderBy('id','ASC')->pluck('nama','id');
      $progstu = Progstu::orderBy('id','ASC')->pluck('nama','id');
      $kode = Matkul::all()->pluck('kd_matkul')->last();
      // dd($progstu);
      // dd($dosen);
      return view('matkul.create',compact('kode','dosen','progstu'));
    }
    public function store(Request $request)
    {
      // dd($request->all());
      $do = Matkul::create($request->except('_token'));
      if ($do) {
        flash()->success('Matakuliah Baru telah di Buat!')->important();
      }else {
        flash()->error('Gagal!')->important();
        return redirect()->back();
      }
      return redirect()->route('matkul.index');
    }
    public function edit($id)
    {
      $data = Matkul::findOrFail($id);
      $dosen   = Dosen::orderBy('id','ASC')->pluck('nama','id');
      $progstu = Progstu::orderBy('id','ASC')->pluck('nama','id');
      $kode = Matkul::all()->pluck('kd_matkul')->last();
      return view('matkul.edit',compact('data','dosen','progstu','kode'));
    }
    public function update(Request $request,$id)
    {
      // dd($request->all());
      $find = Matkul::findOrFail($id);
      $find->fill($request->except('_token'));
      $do = $find->save();

      if ($do) {
        flash()->success('Berhasil Update Data !')->important();
      }else {
        flash()->error('Gagal Update Data !')->important();
        return redirect()->back();
      }
      return redirect()->route('matkul.index');
    }

}
