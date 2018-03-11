@extends('layouts.template-dashboard')
@section('title', 'Tambah Kartu Rencana Studi')
@section('page-title', 'Kartu Rencana Studi')
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
{!! Form::open(['route'=>['krs.store_head'],'role' =>'form' ]) !!}
<div class="row">
  <!-- Head -->
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header">
        <h3 class="box-title">Nama Kartu Rencana Studi</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

        <div class="row">
          <div class="col-md-6">
            <div class="form-grup">
              <label>Nama Paket :</label> <label class="required"> *</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-user"></i>
                </div>
                {!! Form::text('nama_paket', null, ['class' => 'form-control', 'placeholder' => 'Paket TI 1','required']) !!}
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-grup">
              <label>Semester :</label> <label class="required"> *</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-user"></i>
                </div>
                {!! Form::select('semester_id', $semester,null, ['class' => 'form-control','required']) !!}
              </div>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-grup">
              <label>Program Studi :</label> <label class="required"> *</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-user"></i>
                </div>
                {!! Form::select('progstu_id',$progstu, null, ['class' => 'form-control','required']) !!}
              </div>
            </div>
          </div>

        </div>

      </div>
      <div class="box-footer text-right">
        <button type="submit" class="btn btn-flat btn-primary"> Lanjut </button>
        <a href="{{route('krs.index')}}" class="btn btn-flat btn-danger"> Batal</a>
      </div>
    </div>
    <!-- /.box -->
  </div>
  <!--/.col (right) -->

</div>

{!! Form::close() !!}
@endsection

@section('script')
<!-- bootstrap datepicker -->
<script src="{{asset('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script type="text/javascript">

</script>
@endsection
