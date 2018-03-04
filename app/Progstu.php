<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Progstu extends Model
{
  protected $table = 'progstu';
  public $fillable = [
    'nama',
    'jurusan',
    'jenjang_id',
  ];
}
