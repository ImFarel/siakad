<?php
// ================= //
// Ini Bukan Model ! //
// ================= //
use Illuminate\Support\Facades\DB;

function getStudi($id)
{
  $params  = DB::table('progstu')->where('id', $id)->first();
  $paramsnya = DB::table('jenjang')->where('id', $params->jenjang_id)->first();

  if ($params) {
    return $params->nama.' - '.$paramsnya->jenjang;
  }else {
    return '-';
  }
}
