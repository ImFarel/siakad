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

<!-- Modal Matkul -->
<div class="modal fade" id="myModal" role="dialog" aria>
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <div class="row">
          <div class="col-sm-3">
            <h4 class="modal-title" style="padding: 7px">List Matakuliah</h4>
          </div>
        </div>
      </div>

      <div class="modal-body">
        <div class="table-responsive">
          <table id="example1" class="table table-striped no-margin">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode Matkul</th>
                <th>Nama Matkul</th>

                <th>SKS</th>
                <th>Dosen</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              <?php $no=0; ?>
              @foreach($matkul as $datas)
              <tr id="row-{{$no}}">

                <td>{{$datas->kd_matkul}}</td>
                <td>{{$datas->nama}}</td>

                <td>{{$datas->sks}}</td>
                <td>{{getDosen($datas->dosen_id)}}</td>
                <td>
                  <button class="btn choose btn-info btn-xs selectdata-{{$no}}" data-row="row-{{$no}}" data-kd_matkul="{{$datas->kd_matkul}}" data-nama="{{$datas->nama}}" data-sks="{{$datas->sks}}" data-dismiss="modal" aria-label="Close" >Pilih</button>
                </td>
              </tr>
              <?php $no++ ?>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- akhir modal -->

<div class="flash-msg">
  @include('flash::message')
</div>
{!! Form::open(['route'=>['krs.store_detail',$id],'role' =>'form' ]) !!}
<div class="row">

  <div class="col-md-4">
    <div class="box box-info">
      <div class="box-header">
        <h3 class="box-title">Matakuliah KRS</h3>
      </div>
      <!-- /.box-header -->

      <div class="box-body">
        {!! Form::hidden('row', null, ['class' => 'form-control','id'=>'row','required']) !!}

        <div class="row">
          <div class="col-md-12">
            <div class="form-grup">
              <label>Nama Matakuliah :</label> <label class="required"> *</label>
              <div class="input-group">
                {!! Form::text('nama', null, ['class' => 'form-control','id'=>'nama-matkul','required','readonly']) !!}

                <div class="input-group-btn">
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Pilih Matakuliah</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-grup">
              <label>Kode Matkul :</label> <label class="required"> *</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-user"></i>
                </div>
                {!! Form::text('kd_matkul', null, ['class' => 'form-control','id'=>'kode-matkul','required','readonly']) !!}
              </div>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-grup">
              <label>SKS :</label> <label class="required"> *</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-user"></i>
                </div>
                {!! Form::text('sks', null, ['class' => 'form-control','id'=>'sks-matkul','required','readonly']) !!}
              </div>
            </div>
          </div>

        </div>

      </div>
      <div class="box-footer text-left">
        <button type="submit" class="btn btn-flat btn-primary add-row"> Tambah</button>
      </div>

    </div>
    <!-- /.box -->
  </div>
  <!--/.col (right) -->

  <!-- Table Append  -->
  <div class="col-md-8">
    <div class="box box-info">

      <!-- /.box-header -->

      <div class="box-body">


          <table class="table table-striped no-margin table-matkul" name="table-matkul">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode Matakuliah</th>
                <th>SKS</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>

      </div>

      <div class="box-footer text-right">
        <button type="submit" class="btn btn-flat btn-primary"> Simpan Data</button>
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
<script type="text/javascript">
$(function () {
  var count = 0;

  $(".selectdata-"+count).click(function(e){
    e.preventDefault();
    var kd_matkul = $(this).data('kd_matkul'),
        nama = $(this).data('nama'),
        sks = $(this).data('sks'),
        row = $(this).data('row');
    console.log("#selectdata-"+count);
    console.log(row);
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
          console.log(row);

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
