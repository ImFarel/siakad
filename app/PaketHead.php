<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PaketDetail;
class PaketHead extends Model
{
    protected $table = 'paket_head';
    public $fillable = [
      'nama_paket',
      'progstu_id',
      'semester_id',
    ];

    public function PaketDetail()
    {
      return $this->hasMany(PaketDetail::class);
    }
}
