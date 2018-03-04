@extends('layouts.template-dashboard')
@section('title', 'Formulir Pendaftaran Mahasiswa')
@section('page-title', 'Mahasiswa')
@section('css')
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="{{asset('admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/plugins/timepicker/bootstrap-timepicker.min.css')}}">
<style media="screen">
.required{
  color:red;
  font-weight: 900;
}
</style>
@endsection

@section('content')
<!-- right column -->
<div class="col-md-9">
  <div class="box box-info">
    <div class="box-header">
      <h3 class="box-title">Data Diri</h3>
    </div>
    <!-- /.box-header -->
    {!! Form::model($data, ['method' => 'PUT', 'route' => ['dosen.update',  $data->id ], 'class' => 'form-horizontal','enctype'=>'multipart/form-data' ]) !!}

    @include('dosen._form')

    <div class="box-footer text-right">
      <button type="submit" class="btn btn-flat btn-primary"> Update Data</button>
      <a href="{{route('dosen.index')}}" class="btn btn-flat btn-danger"> Batal</a>
    </div>
    {!! Form::close() !!}
  </div>
  <!-- /.box -->
</div>
<!--/.col (right) -->
@endsection

@section('script')
<!-- bootstrap datepicker -->
<script src="{{asset('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script type="text/javascript">
//Date picker
$('#datepicker').datepicker({
  autoclose: true,
  format: 'yyyy-mm-dd',
  todayHighLight: true
})
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#showgambar').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#inputgambar").change(function () {
  readURL(this);
});
</script>
@endsection
