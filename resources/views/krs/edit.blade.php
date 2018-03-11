@extends('layouts.template-dashboard')
@section('title', 'Edit Tahun Ajaran Form')
@section('page-title', 'Tahun Ajaran Form')
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
      <h3 class="box-title">Tahun Ajaran Form</h3>
    </div>
    <!-- /.box-header -->
    {!! Form::model($data, ['method' => 'PUT', 'route' => ['tahun.update',  $data->id ], 'class' => 'form-horizontal' ]) !!}
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
$(function () {

  var count = 0;
  $(".selectdata").click(function(e){
    e.preventDefault();
    var kd_matkul = $(this).data('kd_matkul'),
        nama = $(this).data('nama'),
        sks = $(this).data('sks'),
        row = $(this).data('row');
    // console.log("#selectdata-"+count);
    // console.log(row);
    $('#kode-matkul').val(kd_matkul);
    $('#nama-matkul').val(nama);
    $('#sks-matkul').val(sks);
    $('#row').val(row);
    $('#'+row).fadeOut();
    count += 1;
  })

  var counts = 0;
  $('.add-row').click(function(e){
    e.preventDefault();
    var valkd_matkul = $('#kode-matkul').val(),
        valNama      = $('#nama-matkul').val(),
        valdNama     = $('#nama-matkul'),
        valSks       = $('#sks-matkul').val(),
        valRow       = $('#row').val();

    if (valdNama.val().length > 0 ) {

      $('.table-matkul').append(
        '<tr>'
        +'<td> <input type="text" placeholder="type here" id="kd_matkul['+counts+']" name="detail['+counts+'][kd_matkul]" class="form-control input-sm" value="'+valkd_matkul+'" readonly> </td>'
        +'<td> <input type="text" placeholder="type here" id="nama['+counts+']" name="detail['+counts+'][nama]" class="form-control input-sm" value="'+valNama+'" readonly> </td>'
        +'<td> <input type="text" placeholder="type here" id="sks['+counts+']" name="detail['+counts+'][sks]" class="form-control input-sm" value="'+valSks+'" readonly> </td>'
        +'<td>'
        +'<a title="Delete Row" data-rows="'+valRow+'" class="remove_row btn btn-danger btn-md" value="Delete Row"><i class="fa fa-times"></i></a>'
        // +'<input id="rows-at-' + counts + '" name="rows[]" value="row-'+ counts +'" type="hidden">'
        +'</td>'
        +'</tr>'
      );
      // var valRowId     = $("#rows-at-"+counts).val();
      // console.log(valRowId);
      counts += 1;

      $(".remove_row").click(function (e) {
        if (e.type == 'click') {
          var row = $(this).data('rows');
          // console.log(row);

          // console.log($("#"+valRowId).val());
          $('#'+row).fadeIn();
          // $(this).parents("tr").fadeOut();
          $(this).parents("tr").remove();
        }
      });
      $('#kode-matkul').val('');
      $('#nama-matkul').val('');
      $('#sks-matkul').val('');
    }else {
      alert('Nama Matkul Tak boleh kosong');
    }
  })
})
</script>
@endsection
