<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';
    protected $fillable = [
      'nid',
      'nama',
      'alamat',
      'no_tlp',
      'email',
      'jk',
      'tempat_lahir',
      'tanggal_lahir'
    ];
}
