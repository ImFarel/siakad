<?php

namespace App\Http\Controllers;

use App\Progstu;
use App\Mahasiswa;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile; //optional
class MahasiswaController extends Controller
{
    public function index()
    {
      $data = Mahasiswa::all();
      $entity = ['mahasiswa'];
      return view('mahasiswa.index', compact('data','entity'));
    }

    public function create()
    {
      return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
      // dd($request->all());

      $getProgstuName = Progstu::find($request->progstu_id);
      $varOv = explode(' ',$getProgstuName->nama);
      if (count($varOv) > 2 ) {
        $codeProg = substr($varOv[0],0,1).substr($varOv[1],0,1);
      }else {
        $codeProg = substr($varOv[0],0,1);
      }
      // dd($codeProg);
      $that = \Carbon\Carbon::now('Asia/Jakarta')->format('s') ;
      $tot = \Carbon\Carbon::now('Asia/Jakarta')->format('H') ;$that = $that + $tot;
      $nim = $codeProg.$request->progstu_id.$that.substr($request->tanggal_lahir,0,4).substr($request->tanggal_lahir,5,2);

      /**
      * Upload Foto ke Server
      *
      */
      $file = $request->file('foto')->storeAs('img/profile-pict', $nim.'.png');
      $request->file('foto')->move('img/profile-pict', $file);

      $mahasiswa = [
        'nim'             => $nim,
        'nama'            => $request->nama,
        'foto'            => $file,
        'jk'              => $request->jk,
        'alamat'          => $request->alamat,
        'email'           => $request->email,
        'semester_id'     => 1,
        'tahun_ajaran_id' => 1,
        'kelas'           => $request->kelas,
        'progstu_id'      => $request->progstu_id,
        'mahasiswa_id'    => $saveHead->id,
        'asal_sekolah'    => $request->asal_sekolah,
        'nama_sekolah'    => $request->nama_sekolah,
        'tahun_lulus'     => $request->tahun_lulus,
        'no_ijazah'       => $request->no_ijazah,
        'alamat_sekolah'  => $request->alamat_sekolah,
        'nama_or'         => $request->nama_or,
        'no_tlp_or'       => $request->no_tlp_or,
        'email_or'        => $request->email_or,
        'pekerjaan_or'    => $request->pekerjaan_or,
        'instansi_or'     => $request->instansi_or,
        'pend_or'         => $request->pend_or,
        'tempat_lahir'    => $request->tempat_lahir,
        'tanggal_lahir'   => $request->tanggal_lahir,
        'status_martial'  => $request->status_martial,
        'agama'           => $request->agama,
        'no_tlp'          => $request->no_tlp,
        'warga_negara'    => $request->warga_negara,
        'tlp_rmh'         => $request->tlp_rmh,
        'bbm'             => $request->bbm,
        'jurusan'         => $request->jurusan,
      ];
      $saveHead   = Mahasiswa::create($mahasiswa);
      // $saveHead   = Mahasiswa::create($request->except('_token'));

      if ($saveHead) {
        flash()->success('Ter-Input!');
      }else {
        flash()->error('Gagal Input!');
      }
      return redirect()->route('mahasiswa.index');
      // return $request;
    }

    public function read($id)
    {
      return view('mahasiswa.read');
    }

    public function edit($id)
    {
      $data = Mahasiswa::find($id);
      $selectedProg = $data->progstu_id;
      // dd($data);
      $entity = ['mahasiswa',$data->id];
      $ser = serialize($entity);
      $userRedy = User::where('entity', $ser)->get();
      return view('mahasiswa.edit',compact('data','selectedProg','ser','userRedy'));
    }

    public function update(Request $request, $id)
    {
      $getProgstuName = Progstu::find($request->progstu_id);
      $varOv = explode(' ',$getProgstuName->nama);
      if (count($varOv) > 2 ) {
        $codeProg = substr($varOv[0],0,1).substr($varOv[1],0,1);
      }else {
        $codeProg = substr($varOv[0],0,1);
      }
      // dd($codeProg);
      $that = \Carbon\Carbon::now('Asia/Jakarta')->format('s') ;
      $tot = \Carbon\Carbon::now('Asia/Jakarta')->format('H') ;$that = $that + $tot;
      $nim = $codeProg.$request->progstu_id.$that.substr($request->tanggal_lahir,0,4).substr($request->tanggal_lahir,5,2);

      /**
      * Upload Foto ke Server
      *
      */
      $find = Mahasiswa::findOrFail($id);
      if($request->foto == $find->foto || empty($request->foto)){
        $request->foto = $find->foto;
      }else {
        $file = $request->file('foto')->storeAs('img/profile-pict', $nim.'.png');
        $request->foto = $file;
      }
      if (!empty($request->entity)) {
        dd($request->entity);
        $user = new User;
        $user->name     = $request->nama;
        $user->status   = 0;
        $user->email    = $request->email;
        $user->password = bcrypt($nim);
        $user->entity   = $request->entity;
        $user->save();
      }
      $find->fill($request->except('_token','entity'));
      $find->save();
      flash()->success('Berhasil Men Edit Data')->important();

      return redirect()->route('mahasiswa.index');
    }

    public function destroy($id)
    {

    }
}
