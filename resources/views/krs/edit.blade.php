@extends('layouts.template-dashboard')
@section('title', 'Edit Kartu Rencana Studi Form')
@section('page-title', 'Kartu Rencana Studi Form')
@section('css')
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
                <th>Kode Matkul</th>
                <th>Nama Matkul</th>

                <th>SKS</th>
                <th>Dosen</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              <?php $no=0; ?>

                <?php foreach ($matkul as $key => $value): ?>
                  <?php foreach ($exist as $keys => $values): ?>

                    <?php if ($value['kd_matkul'] == $values['kd_matkul']): ?>
                      <?php $stat = "style=display:none"; break;?>
                    <?php else: ?>
                      <?php $stat = '';?>
                    <?php endif; ?>

                  <?php endforeach; ?>

                    <tr id="row-{{$value['kd_matkul']}}" {{$stat}}>
                      <td>{{$value['kd_matkul']}}</td>
                      <td>{{$value['nama']}}</td>
                      <td>{{$value['sks']}}</td>
                      <td>{{getDosen($value['dosen_id'])}}</td>
                      <td>
                        <button class="btn choose btn-info btn-xs selectdata" data-row="row-{{$value['kd_matkul']}}" data-kd_matkul="{{$value['kd_matkul']}}" data-nama="{{$value['nama']}}" data-sks="{{$value['sks']}}" data-dismiss="modal" aria-label="Close" >Pilih</button>
                      </td>
                    </tr>
                  <?php $no++ ?>
                <?php endforeach; ?>

            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- akhir modal -->

<div class="row">

  <!-- left column -->
  <div class="col-md-4">
    <div class="box box-info">
      <div class="box-header">
        <h3 class="box-title">Matakuliah</h3>
      </div>
      <!-- /.box-header -->

      <div class="box-body">
        <div class="row">
          <div class="col-md-12">
            <div class="form-grup">
              <label>Nama Matakuliah :</label> <label class="required"> *</label>
              <div class="input-group">
                {!! Form::text('nama', null, ['class' => 'form-control','id'=>'nama-matkul','required','readonly']) !!}
                {!! Form::hidden('row', null, ['class' => 'form-control','id'=>'row','required']) !!}

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
      <div class="box-footer text-right">
        <button type="submit" class="btn btn-flat btn-primary add-row"> Tambah</button>
        <button type="submit" class="cancel btn btn-flat btn-danger"> Batal</button>
      </div>

    </div>
    <!-- /.box -->
  </div>
  <!--/.col (left) -->

  <!-- right top column -->
  <div class="col-md-8">
    <div class="box box-info">
      <div class="box-header">
        <h3 class="box-title">Kartu Rencana Studi Form</h3>
      </div>
      <!-- /.box-header -->
      {!! Form::model($data, ['method' => 'PUT', 'route' => ['krs.update',  $data->id ], 'class' => 'form-horizontal' ]) !!}
      <div class="box-body">

        <div class="row">
          <div class="col-md-4">
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
          <div class="col-md-4">
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
          <div class="col-md-4">
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


    </div>
    <!-- /.box -->
  </div>
  <!--/.col (right top) -->

  <!-- right bottom column Table -->
  <div class="col-md-8">
    <div class="box box-info">
      <div class="box-header">
        <h3 class="box-title">Isi Kartu Rencana Studi Form</h3>
      </div>
      <!-- /.box-header -->

      <div class="box-body">
        <table class="table table-striped no-margin table-matkul" name="table-matkul">
          <thead>
            <tr>
              <th>Kode Matakuliah</th>
              <th>Nama Matakuliah</th>
              <th>SKS</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 0; ?>
            <?php foreach ($detail as $value): ?>
              <tr>
                {{$no}}
                <td><input type="text" placeholder="type here" id="kd_matkul[{{$no}}]" name="detail[{{$no}}][kd_matkul]" class="form-control input-sm" value="{{$value->kd_matkul}}" readonly></td>
                <td><input type="text" placeholder="type here" id="nama[{{$no}}]" name="detail[{{$no}}][nama]" class="form-control input-sm" value="{{getMatkul($value->kd_matkul)}}" readonly></td>
                <td><input type="text" placeholder="type here" id="sks[{{$no}}]" name="detail[{{$no}}][sks]" class="form-control input-sm" value="{{$value->sks}}" readonly></td>
                <td>
                  <a onclick="return confirm('Anda yakin ingin hapus baris ini ?')" href="{{route('krs.deletedetail',[$value->id])}}" title="Delete Row" type="submit" data-rows="row-{{$value->kd_matkul}}" class="remove_row btn btn-danger btn-md" value="Delete Row"><i class="fa fa-times"></i></a>
                </td>
              </tr>
              <?php $no++ ?>
            <?php endforeach; ?>

          </tbody>
        </table>
      </div>
      <div class="box-footer text-right">
        <button type="submit" class="btn btn-flat btn-primary"> Simpan </button>
        <a href="{{route('krs.index')}}" class="btn btn-flat btn-danger"> Batal</a>
      </div>
      {!! Form::close() !!}
    </div>
    <!-- /.box -->
  </div>
  <!--/.col (right bottom) Table -->
</div>
@endsection

@section('script')
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

  $(".cancel").click(function (e) {
    e.preventDefault();

    var kd = $('#kode-matkul').val(),row = 'row-'+kd;
    console.log(row);

    // console.log($("#"+valRowId).val());

    $('#kode-matkul').val('');
    $('#nama-matkul').val('');
    $('#sks-matkul').val('');
    $('#'+row).fadeIn();
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
        +'<td> <input type="text" placeholder="type here" id="kd_matkul['+counts+']" name="detailnew['+counts+'][kd_matkul]" class="form-control input-sm" value="'+valkd_matkul+'" readonly> </td>'
        +'<td> <input type="text" placeholder="type here" id="nama['+counts+']" name="detailnew['+counts+'][nama]" class="form-control input-sm" value="'+valNama+'" readonly> </td>'
        +'<td> <input type="text" placeholder="type here" id="sks['+counts+']" name="detailnew['+counts+'][sks]" class="form-control input-sm" value="'+valSks+'" readonly> </td>'
        +'<td>'
        +'<a title="Delete Row" data-rows="'+valRow+'" class="remove_row btn btn-danger btn-md" value="Delete Row"><i class="fa fa-times"></i></a>'
        // +'<input id="rows-at-' + counts + '" name="rows[]" value="row-'+ counts +'" type="hidden">'
        +'</td>'
        +'</tr>'
      );

      counts += 1;
      $(".remove_row").click(function (e) {
        e.preventDefault();
        if (e.type == 'click') {
          var row = $(this).data('rows');
          console.log(row);

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
