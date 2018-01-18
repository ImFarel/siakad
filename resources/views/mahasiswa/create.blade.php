@extends('layouts.template-dashboard')
@section('title', 'Mahasiswa')
@section('page-title', 'Mahasiswa')
@section('css')
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="{{asset('admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
@endsection

@section('content')
<!-- right column -->
<div class="col-md-9">
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Formulir</h3>
    </div>
    <!-- /.box-header -->
    {!! Form::open(['route'=>['mahasiswa.store'] ]) !!}
      <div class="box-body">
        <!-- text input -->
        <div class="form-group">
          <label>Nama Lengkap</label>
          <input type="text" class="form-control" name="nama" placeholder="Text here ...">
        </div>

        <div class="row">
          <!-- text input -->
          <div class="form-group">
            <div class="col-md-6">
              <label>Tempat Lahir </label>
              <input type="text" class="form-control" name="tempat" placeholder="Text here ...">
            </div>
            <div class="col-md-6">
              <label>Tanggal Lahir</label>
              <input type="date" class="form-control" id="datepicker" name="satuan" placeholder="Kg / Mg / etc.">
            </div>
          </div>
        </div>

        <!-- text input -->
        <div class="form-group">
          <label>Alamat</label>
          <textarea type="text" rows="3" class="form-control" name="alamat" placeholder="Text here ..."></textarea>
        </div>

        <div class="row">
          <div class="form-group">
            <!-- combobox -->
            <div class="col-md-6">
              <label>Program Studi</label>
              <!-- {! ! Form::select('roles[]', $roles, isset($user) ? $user->roles->pluck('id')->toArray() : null,  ['class' => 'form-control']) !!} -->
              <select class="form-control" name="progstu_id">
                <option value="">IT &mdash; S1</option>
                <option value="">IT &mdash; S1</option>
                <option value="">Akuntan &mdash; S2</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="">Tahun Ajaran</label>
              <input type="text" class="form-control" name="tahun_ajaran" disabled>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="input_foto">Pas Photo</label>
          <input type="file" id="input_foto">

          <p class="help-block">3 x 4</p>
        </div>

      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" class="btn btn-flat btn-primary"> Simpan Data</button>
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
</script>
@endsection
