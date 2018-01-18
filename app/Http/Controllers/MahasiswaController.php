<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
      return view('mahasiswa.index');
    }

    public function create()
    {
      return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
      # code...
    }

    public function read($id)
    {
      # code...
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
