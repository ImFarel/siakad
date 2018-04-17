<?php
// ================= //
// Ini Bukan Model ! //
// ================= //
use Illuminate\Support\Facades\DB;

function getStudi($id)
{
  $params  = DB::table('progstu')->where('id', $id)->first();
  $paramsnya = DB::table('jenjang')->where('id', $params->jenjang_id)->first();

  return ($params)? $params->nama.' - '.$paramsnya->jenjang : '-';
}
function getTahun($id)
{
  $param = DB::table('tahun_ajaran')->where('id', $id)->first();
  return ($param) ?  $param->tahun_ajaran : '-';
}
function getMatkul($kd)
{
  $params = DB::table('matkul')->where('kd_matkul', $kd)->first();

  return ($params)? $params->nama : '';
}
function getDosen($id)
{
  $object = DB::table('dosen')->where('id', $id)->first();

  return ($object) ? $object->nama : '-';
}
function jenjang($id)
{
  $object = DB::table('jenjang')->where('id', $id)->first();
  
  return ($object) ? $object->jenjang : '-';
}
