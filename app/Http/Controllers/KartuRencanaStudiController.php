<?php

namespace App\Http\Controllers;

use App\PaketHead;
use App\PaketDetail;
use App\Progstu;
use App\Matkul;

use Illuminate\Http\Request;
use DB;

class KartuRencanaStudiController extends Controller
{
    public function index()
    {
      $data = PaketHead::all();
      return view('krs.index',compact('data'));
    }

    public function create_head()
    {
      $semester = DB::table('semester')->get()->pluck('semester','id');
      $progstu = Progstu::orderBy('id','ASC')->pluck('nama','id');
      // dd($progstu);
      // dd($semester);
      return view('krs.create_head',compact('semester','progstu'));
    }

    public function store_head(Request $request)
    {
      // dd($request->all());
      $do = PaketHead::create($request->except('_token'));
      $id = $do->id;

      return redirect()->route('krs.create_detail',[$id]);
    }

    public function create_detail(Request $request, $id)
    {
      $head = PaketHead::find($id);
      $matkul = Matkul::where('progstu_id', $head->progstu_id)->where('semester_id', $head->semester_id)->get();
      return view('krs.create_detail',compact('matkul','id'));
      dd($matkul);
    }

    public function store_detail(Request $request , $id)
    {
      // dd($request->all());
      $find = PaketHead::find($id);
      $data = [];
      // dd($request->input('detail'));
      foreach ($request->input('detail') as $key => $value) {
        $data[] = new PaketDetail([
          'sks' => $value['sks'],
          'paket_head_id' => $id,
          'kd_matkul' => $value['kd_matkul'],
        ]);
      }
      // dd($data);
      $do = $find->PaketDetail()->saveMany($data);
      flash()->success('Paket Berhasil Di Buat !')->important();
      return redirect()->route('krs.index');
    }

    public function read($id)
    {
      return view('krs.read');
    }
    public function edit($id)
    {
      $data = PaketHead::find($id);
      $detail = PaketDetail::where('paket_head_id', $id)->get();
      $exist = PaketDetail::where('paket_head_id', $id)->select('kd_matkul')->get();
      // $foo = $exist;
      // dd($foo->toArray());
      $count = count($exist);
      $semester = DB::table('semester')->get()->pluck('semester','id');
      $progstu = Progstu::orderBy('id','ASC')->pluck('nama','id');
      $matkul = Matkul::where('progstu_id', $data->progstu_id)->where('semester_id', $data->semester_id)->get();
      // dd($matkul);
      return view('krs.edit',compact('data','detail','semester','progstu','matkul','exist','count'));
    }

    public function update(Request $request,$id)
    {
      // dd($request->all());
      $data = PaketHead::find($id);
      // dd($data->nama_paket);
      if ($request->nama_paket != $data->nama_paket || $request->semester_id != $data->semester_id || $request->progstu_id != $data->progstu_id) {
        $data->fill($request->except('_token'));
        $data->save();
      }
      if ($data) { //executed
        $reqDetailOld = $request->input('detail');
        $detailData = PaketDetail::where('paket_head_id',$id)->get();
        foreach ($detailData as $key => $value) {
          if ($value['kd_matkul'] != $reqDetailOld[$key]['kd_matkul'] || $value['nama'] != $reqDetailOld[$key]['nama'] || $value['sks'] != $reqDetailOld[$key]['sks'] ) {
            PaketDetail::where('id',$value['id'])->update([
              'kd_matkul' => $reqDetailOld[$key]['kd_matkul'],

              'sks'       => $reqDetailOld[$key]['sks'],
            ]);
          }
        }
        if (!empty($request->input('detailnew'))) {
          $detailNew = array();
          foreach ($request->input('detailnew') as $keys => $values) {
            $detailNew[] = new PaketDetail([
              'kd_matkul' => $values['kd_matkul'],
              
              'sks'       => $values['sks'],
            ]);
          }
          $do = $data->PaketDetail()->saveMany($detailNew);
        }
        flash()->success('Data Berhasil Di Update !')->important();
        return redirect()->route('krs.index');
      }else {
        flash()->error('Data Gagal Di Update !')->important();
        return redirect()->back();
      }
    }
    public function delete($id)
    {
      $find = Matkul::delete($id);
    }
    public function deletedetail($id)
    {
      // $find = PaketDetail::where('paket_head_id',$id)->where('name', 'pattern');
      $find = PaketDetail::find($id)->delete();
      if ($find) {
        flash()->success('Baris di hapus')->important();
      }else {
        flash()->error('Baris gagal di hapus')->important();
      }
      return redirect()->back();
    }
}
