<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbsenMahasiswa extends Model
{
    protected $table = 'absen_mhs';
    public $fillable = [
      'mahasiswa_id',
      'absen',
      'ket',
      'matkul_id',
      'absen_at',
      'absen_date',
      'berita_acara_kuliah_id',
    ];
}
