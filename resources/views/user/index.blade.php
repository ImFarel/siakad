@extends('layouts.template-dashboard')

@section('title', 'Users')

@section('page-title', 'List Users')

@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection
@section('content')
<div id="flash-msg">
  @include('flash::message')
</div>
<div class="box">
  <div class="box-header">
    <div class="col-md-3">
      @can('add_users')
      <a href="{{ route('users.add') }}">
        <button type="button" class="btn btn-info btn-flat">
          <i class="fa fa-plus-square"></i> Tambah Users
        </button>
      </a>
      @endcan
    </div>
  </div>
  <!-- /.box-header  -->
  <div class="box-body">
    <table id="myTable" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Role</th>
          <th>Created At</th>

          @can('edit_users', 'delete_users')
          <th class="text-center">Actions</th>
          @endcan
        </tr>
      </thead>
      <tbody>
        <?php $no = 1;?>
        @foreach($result as $item)
        <tr>
          <td>{{ $no++ }}</td>
          <td>{{ $item->name }}</td>
          <td>{{ $item->roles->implode('name', ', ') }}</td>
          <td>{{ $item->created_at->toFormattedDateString() }}</td>

          @can('edit_users', 'delete_users')
          <td class="text-center">
            <a title="Edit" href="{{ route('users.edit',$item->id)}}" class="btn btn-success btn-md"> <i class="fa fa-edit"></i></a>
            <a title="Delete" onclick="return confirm('Are yous sure ? *delete permanently*');" href="{{ URL::to('admin/users/delete') }}/{{ $item->id }}" class="btn btn-md btn-danger"><i class="fa fa-trash"></i></a>
          </td>
          @endcan
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
@section('script')
<!-- DataTables -->
<script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
  $(document).ready(function() {
    $('#myTable').DataTable();
  });
</script>
@endsection
