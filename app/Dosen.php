<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';
    protected $fillable = [
      'nip',
      'nama',
      'alamat',
      'no_tlp',
      'email',
    ];
}
