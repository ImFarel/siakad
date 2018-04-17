@extends('layouts.template-dashboard')
@section('title', 'Formulir Pendaftaran Mahasiswa')
@section('page-title', 'Mahasiswa')
@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" />
<!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{asset('admin/plugins/iCheck/all.css')}}">
<style media="screen">
.required{
  color:red;
  font-weight: 900;
}
</style>
@endsection

@section('content')
<div class="row">
  <!-- right column -->
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header">
        <h3 class="box-title">Data Diri</h3>
      </div>
      <!-- /.box-header -->

      <div class="box-body">
        {!! Form::open(['route'=>['mahasiswa.absen.store'],'role' =>'form','enctype'=>'multipart/form-data' ]) !!}
        <table id="example1" class="table table-bordered table-striped table-hover">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Program Studi</th>
              <th>Semester</th>
              <th>Tahun Ajaran</th>
              <th>Kelas</th>
              <th>Absen</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=0; ?>
            <?php foreach ($mahasiswa as $datas ): ?>
              <tr>
                <td>{{$datas->nim}}</td>
                <td>{{$datas->nama}}</td>
                <td>{{getStudi($datas->progstu_id)}}</td>
                <td>{{getTahun($datas->tahun_ajaran_id)}}</td>
                <td>{{$datas->kelas}}</td>
                <td>
                  <div class="form-group">
                    <label>
                      <input type="radio" name="absen[{{$no}}][status]" value="hadir" class="minimal-red">
                      Hadir
                    </label>
                    <label>
                      <input type="radio" name="absen[{{$no}}][status]" value="sakit" class="minimal-red">
                      Sakit
                    </label>
                    <label>
                      <input type="radio" name="absen[{{$no}}][status]" value="izin" class="minimal-red">
                      Izin
                    </label>
                    <label>
                      <input type="radio" name="absen[{{$no}}][status]" value="alfa" class="minimal-red">
                      Alfa
                    </label>
                  </div>
                  <input type="hidden" name="absen[{{$no}}][mahasiswa_id]" value="{{$datas->id}}">
                  <input type="hidden" name="absen[{{$no}}][matkul_id]" value="{{$data->id}}">
                </td>
              </tr>
              <?php $no++ ?>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <div class="box-footer text-right">
        <button type="submit" class="btn btn-flat btn-primary"> Simpan Data</button>
        <a href="{{route('mahasiswa.index')}}" class="btn btn-flat btn-danger"> Batal</a>
      </div>
      {!! Form::close() !!}
    </div>
    <!-- /.box -->
  </div>
  <!--/.col (right) -->

</div>
@endsection

@section('script')
<script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{asset('admin/plugins/iCheck/icheck.min.js')}}"></script>
<script type="text/javascript">
  $(function () {
    $('#example1').DataTable()
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
  })
</script>
@endsection
