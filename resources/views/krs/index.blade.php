@extends('layouts.template-dashboard')
@section('title', 'Kartu Rencana Studi')
@section('page-title', 'List Kartu Rencana Studi')
@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('content')
<div class="flash-msg">
  @include('flash::message')
</div>
<div class="box">

  <div class="box-header">
    <div class="col-md-3">
      <a href="{{route('krs.create_head')}}">
        <button type="button" class="btn btn-flat btn-info btn-flat">
          <i class="fa fa-user"> </i> Buat Kartu Rencana Studi Baru
        </button>
      </a>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No </th>
          <th>Nama Paket </th>
          <th>Program Studi </th>
          <th>Semester </th>

          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; ?>
        <?php foreach ($data as $datas): ?>
          <tr>
            <td>{{$no++}}</td>
            <td>{{$datas->nama_paket}}</td>
            <td>{{getStudi($datas->progstu_id)}}</td>
            <td>{{$datas->semester_id}}</td>

            <td>
              <div class="text-center">
                <a title="Edit" href="{{route('krs.edit',$datas->id)}}" class="btn btn-primary btn-flat btn-md"><i class="fa fa-edit"></i></a>
              </div>

            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->

@endsection

@section('script')
<!-- DataTables -->
<script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript">
  $(function () {
    $('#example1').DataTable()
  })
</script>
@endsection
