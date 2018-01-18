@extends('layouts.template-dashboard')
@section('title', 'Mahasiswa')
@section('page-title', 'Mahasiswa')
@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('content')
<div class="flash-msg">
  @include('flash::message')
</div>
<div class="box">

  <!-- <div class="box-header">
    <div class="col-md-3">
      <a href="{ {route('mahasiswa.create')}}">
        <button type="button" class="btn btn-flat btn-info btn-flat">
          <i class="fa fa-user"> </i> Tambah Mahasiswa Baru
        </button>
      </a>
    </div>
  </div> -->

  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>NIM</th>
          <th>Nama Mahasiswa</th>
          <th>Jenis Kelamin</th>
          <th>Telepon</th>
          <th>Semester</th>
          <th>Aksi</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>
            <div class="text-center">
              <a title="Read More" href="" class="btn btn-info btn-flat btn-md"><i class="fa fa-info"></i></a>

              <a title="Edit" href="" class="btn btn-primary btn-flat btn-md"><i class="fa fa-edit"></i></a>

            </div>

            <!-- <a title="Delete" href="" class="btn btn-danger btn-flat btn-md" onclick="return confirm('Are yous sure ? (DELETE PERMANENTLY)');"><i class="fa fa-trash"></i></a> -->
          </td>
        </tr>
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
