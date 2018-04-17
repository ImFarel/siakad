@extends('layouts.template-dashboard')
@section('title', 'Absen Mahasiswa')
@section('page-title', 'Absen Mahasiswa')

@section('css')
<!-- datepicker -->
<link rel="stylesheet" href="{{asset('admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('admin/bower_components/select2/dist/css/select2.min.css')}}">
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
<div class="row">

  <div class="col-md-12">
    <div class="box box-info ">

      <div class="box-header with-border">
        <h3 class="box-title">Summary Absen Hari ini</h3>
      </div>
      <!-- /.box-header -->

      {!! Form::open(['route'=>['mahasiswa.absen.bak'],'role' =>'form']) !!}
      <div class="box-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-grup">
              <label>Tanggal:</label> <label class="required"> *</label>
              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                {!! Form::text('tanggal', null, ['id'=> 'datepicker', 'class' => 'form-control pull-right', 'required']) !!}
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-grup">
              <label>Semester:</label> <label class="required"> *</label>
              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-mortar-board"></i>
                </div>
                {!! Form::select('semester_id',$semester,null, ['class' => 'form-control select2' , 'style' => 'width:100%', 'required']) !!}
              </div>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-grup">
              <label>Matakuliah :</label> <label class="required"> *</label>
              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-book"></i>
                </div>
                {!! Form::select('kd_matkul',$matkul,null, ['class' => 'form-control select2' , 'style' => 'width:100%', 'required']) !!}

              </div>

            </div>
          </div>

          <div class="col-md-6">
            <div class="form-grup">
              <label>Tahun Akademik:</label> <label class="required"> *</label>
              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-mortar-board"></i>
                </div>
                {!! Form::select('tahun_ajaran',$ajaran,null, ['class' => 'form-control select2' , 'style' => 'width:100%', 'required']) !!}
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- /.box-body -->
      <div class="box-footer text-right">
        <button type="submit" class="btn btn-flat btn-primary"> Cari Data</button>
      </div>
      <!-- /.box-footer -->
      {!! Form::close() !!}
    </div>


  </div>
</div>
<!-- /.row -->


@endsection

@section('script')
<!-- Select2 -->
<script src="{{asset('admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script type="text/javascript">
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd',
      todayHighlight: true,
    })

  })
</script>
@endsection
