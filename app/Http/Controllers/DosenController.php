<?php

namespace App\Http\Controllers;

use App\Dosen;
use App\Progstu;
use App\Berkul;
use App\Ruangan;
use App\Matkul;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $data = Dosen::all();
        return view('dosen.index',compact('data'));
    }

    public function create()
    {
        $nid = Dosen::orderBy('created_at','desc')->first();
        $last = $nid->nid;
				$nid = $last + 1;
        return view('dosen.create', compact('nid'));
    }

    public function store(Request $request)
    {

        $process = Dosen::create($request->except('_token'));
        if ($process) {
          flash('Dosen Berhasil di Tambah !')->success()->important();
        }else {
          flash('Dosen Gagal di Tambah !')->error()->important();
          return redirect()->back();
        }
        return redirect()->route('dosen.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $find = Dosen::findOrFail($id);
        // dd($find);
        return view('dosen.edit')->with('data', $find);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
          'tanggal_lahir' => 'required',
          'tempat_lahir' => 'required'
        ]);

        $dosen = Dosen::findOrFail($id);
        $dosen->fill($request->except('_token'));
        $dosen->update();
        // dd($dosen);
        if ($dosen) {
          flash()->success('Dosen di Update !')->important();
          return redirect()->route('dosen.index');
        }else {
          flash()->error('Dosen gagal di Update !')->important();
          return redirect()->back();
        }
    }

    public function destroy($id)
    {
        //
    }
}
