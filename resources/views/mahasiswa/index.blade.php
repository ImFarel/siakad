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

  <div class="box-header">
    <div class="col-md-3">
      <a href="">
        <button type="button" class="btn btn-info btn-flat">
          <i class="fa fa-plus-square"></i> Tambah Menu Cabang
        </button>
      </a>
    </div>
  </div>

  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama menu</th>
          <th>Harga</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td>
            <a title="Edit" href="" class="btn btn-success btn-md"><i class="fa fa-edit"></i></a>

            <a title="Delete" href="" class="btn btn-danger btn-md" onclick="return confirm('Are yous sure ? (DELETE PERMANENTLY)');"><i class="fa fa-trash"></i></a>
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
