@extends('layouts.template-dashboard')
@section('title', 'Dosen')
@section('page-title', 'Dosen')
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
      <a href="{{route('dosen.create')}}">
        <button type="button" class="btn btn-flat btn-info btn-flat">
          <i class="fa fa-user"> </i> Tambah Dosen Baru
        </button>
      </a>
    </div>
  </div>

  <!-- <img src="{{asset('img/profile-pict/TI131199911.png')}}" alt="dwa" style="max-height:200px;max-width:200px;margin-top:10px;"> -->
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>NID</th>
          <th>Nama Dosen</th>
          <th>Jenis Kelamin</th>
          <th>No telp</th>
          <th>Email</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data as $datas): ?>
          <tr>
            <td>{{$datas->nid}}</td>
            <td>{{$datas->nama}}</td>
            <td>{{$datas->jk}}</td>
            <td>{{$datas->no_tlp}}</td>
            <td>{{$datas->email}}</td>
            <td>
              <div class="text-center">
                <a title="Read More" href="{{route('dosen.read',$datas->id)}}" class="btn btn-info btn-flat btn-md"><i class="fa fa-info"></i></a>

                <a title="Edit" href="{{route('dosen.edit',$datas->id)}}" class="btn btn-primary btn-flat btn-md"><i class="fa fa-edit"></i></a>
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
