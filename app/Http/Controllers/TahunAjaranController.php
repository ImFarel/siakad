<?php

namespace App\Http\Controllers;

use App\TahunAjaran;
use Illuminate\Http\Request;

class TahunAjaranController extends Controller
{
    public function index()
    {
      $data = TahunAjaran::all();
      return view('tahun_ajaran.index',compact('data'));
    }
    public function create()
    {
      return view('tahun_ajaran.create');
    }
    public function store(Request $request)
    {
      $request->validate([
        'tahun_ajaran' => 'bail|required|max:9'
      ]);
      $datas = explode('/',$request->tahun_ajaran);
      $first = $datas[0];
      $second = $datas[1];

      if ($first > $second) { //validasi oh validasi
        flash()->error('Tahun Pertama Tidak Boleh Lebih Besar dari tahun Kedua')->important();
        return view('tahun_ajaran.create');
      }else {
        $data = ['tahun_ajaran'=>$first.'/'.$second];
        $check = TahunAjaran::where('tahun_ajaran',$data['tahun_ajaran'])->first();
        if (!empty($check)) {
          flash()->error('Tahun Sudah Ada !')->important();
          return view('tahun_ajaran.create');

        }else {
          $do = TahunAjaran::create($data);
          if ($do) {
            flash()->success('Berhasil Di Simpan !')->important();
            return redirect()->route('tahun.index');

          }else {
            flash()->error('Gagal Menyimpan !')->important();
            return view('tahun_ajaran.create');

          }
        }
      }
    }
    public function edit($id)
    {
      $data = TahunAjaran::findOrFail($id);
      // dd($data);
      return view('tahun_ajaran.edit',compact('data'));

    }
    public function update(Request $request, $id)
    {
      // dd($request->all());
      $request->validate([
        'tahun_ajaran' => 'bail|required|max:9'
      ]);
      $datas = explode('/',$request->tahun_ajaran);
      $first = $datas[0];
      $second = $datas[1];

      if ($first > $second) { //validasi oh validasi
        flash()->error('Tahun Pertama Tidak Boleh Lebih Besar dari tahun Kedua')->important();
        return redirect()->route('tahun.edit',[$id]);
      }else{
        $model = TahunAjaran::findOrFail($id);
        if (empty($model)) {
          flash()->error('Gagal Update')->important();
          return redirect()->route('tahun.edit',[$id]);

        }else {
          $model->fill($request->except('_token'));
          $model->save();
          flash()->success('Berhasil Update')->important();

          return redirect()->route('tahun.index');
        }
      }

    }
}
