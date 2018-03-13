<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsenMahasiswaController extends Controller
{
    public function index()
    {
      $data = [];
      return view('mahasiswa.absen.index',compact('data'));
    }
}
