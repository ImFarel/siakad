<?php

namespace App\Http\Controllers;

use App\Progstu;
use Illuminate\Http\Request;

class ProgstuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Progstu::all();
        return view('progstu.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('progstu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $do = Progstu::create($request->except('_token'));
        if ($do) {
          flash()->success('Program Studi Baru talh di buat !')->important();
          return redirect()->route('progstu.index');
        }else {
          flash()->error('Program Studi gagal dibuat !')->important();
          return view('progstu.create');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Progstu::findOrFail($id);
        return view('progstu.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $find = Progstu::findOrFail($id);
        $find->fill($request->except('_token'));
        $find->save();
        return redirect()->route('progstu.index');
    }

}
