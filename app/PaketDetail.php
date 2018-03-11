<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PaketHead;
class PaketDetail extends Model
{
    protected $table = 'paket_detail';
    public $fillable = [
      'sks',
      'paket_head_id',
      'kd_matkul',
    ];

    public function PaketHead()
    {
      return $this->belongsTo(PaketHead::class);
    }
}
