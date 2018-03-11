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

function getMatkul($kd)
{
  $params = DB::table('matkul')->where('kd_matkul', $kd)->first();

  return ($params)? $params->nama : '';
}
function getDosen($id)
{
  $object = DB::table('dosen')->where('id', $id)->first();
  if ($object) {
    return $object->nama;
  }else {
    return '-';
  }
}
function jenjang($id)
{
  $object = DB::table('jenjang')->where('id', $id)->first();
  if ($object) {
    return $object->jenjang;
  }else {
    return '-';
  }
}
