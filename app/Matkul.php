<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table = 'matkul';
    public $fillable = [
      'kd_matkul',
      'progstu_id',
      'kode',
      'nama',
      'semester_id',
      'sks',
      'kategori',
      'dosen_id'
    ];
}
