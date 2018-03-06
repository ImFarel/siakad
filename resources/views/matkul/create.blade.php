@extends('layouts.template-dashboard')
@section('title', 'Tambah Matakuliah')
@section('page-title', 'Matakuliah')
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

<div class="flash-msg">
  @include('flash::message')
</div>
<!-- right column -->
<div class="col-md-9">
  <div class="box box-info">
    <div class="box-header">
      <h3 class="box-title">Matakuliah Form</h3>
    </div>
    <!-- /.box-header -->
    {!! Form::open(['route'=>['matkul.store'],'role' =>'form' ]) !!}

    @include('matkul._form')
      <div class="box-footer text-right">
        <button type="submit" class="btn btn-flat btn-primary"> Simpan Data</button>
        <a href="{{route('matkul.index')}}" class="btn btn-flat btn-danger"> Batal</a>
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

</script>
@endsection
