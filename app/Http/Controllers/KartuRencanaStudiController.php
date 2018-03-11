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
      dd($request);
      return redirect()->route('krs.index');
    }

    public function delete($id)
    {
      $find = Matkul::delete($id);
    }
}
