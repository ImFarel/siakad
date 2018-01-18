@extends('layouts.template-dashboard')

@section('title', 'Roles')

@section('page-title', 'Roles & Permission')
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
      @can('add_roles')
      <a href="{{ route('roles.add') }}">
        <button type="button" class="btn btn-info btn-flat">
          <i class="fa fa-plus-square"></i> Tambah Role
        </button>
      </a>
      @endcan
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Id</th>
          <th>Role Name</th>
          <th>Created At</th>

          @can('edit_roles', 'delete_roles')
          <th class="text-center">Actions</th>
          @endcan
        </tr>
      </thead>
      <tbody>
          <?php $no = 1;?>
          @foreach($roles as $item)
              <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->created_at->toFormattedDateString() }}</td>

                  @can('edit_roles')
                  <td class="text-center">
                    @if($item->name == "Admin" || $item->name == "Administrator" )
                      No Actions For This Role
                    @else
                      <a title="Permissions" data-toggle="tooltip" data-placement="left" original-title="Permissions" href="{{ route('roles.permission',$item->id) }}" class="btn btn-md btn-info">
                          <i class="fa fa-cogs"></i></a>

                      <a title="Edit" data-toggle="tooltip" data-placement="top" original-title="Edit Data" href="{{ route('roles.edit',$item->id) }}" class="btn btn-success btn-md">
                          <i class="fa fa-edit"></i></a>

                      <a title="Delete" data-toggle="tooltip" data-placement="right" original-title="Delete Data" href="{{ route('roles.delete',$item->id) }}" class="btn btn-md btn-danger" onclick="return confirm('Are yous sure ? *delete permanently*');">
                          <i class="fa fa-trash"></i></a>
                    @endif
                  </td>
                  @endcan
              </tr>
          @endforeach
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
