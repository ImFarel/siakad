<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = [
      'nim', 'foto', 'nama', 'jk', 'alamat', 'progstu_id', 'tahun_ajaran_id', 'semester_id','email','kelas','asal_sekolah','nama_sekolah','tahun_lulus','no_ijazah','alamat_sekolah','nama_or','no_tlp_or','email_or','pekerjaan_or','instansi_or','pend_or','tempat_lahir','tanggal_lahir','status_martial','agama','no_tlp','warga_negara','tlp_rmh','bbm','jurusan'
    ];

    public function progstu()
    {
      return $this->hasOne('App\Progstu');
    }
    public function semester()
    {
      return $this->hasOne('App\Semester');
    }
    public function tahun_ajaran()
    {
      return $this->hasOne('App\Tahun_ajaran');
    }
}
