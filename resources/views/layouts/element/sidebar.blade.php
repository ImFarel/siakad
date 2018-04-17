<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{!! Auth::user()->name !!}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i>
            Online
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">

        <li class="header">&mdash; Menu Utama</li>
        <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
          <a href="{{ route('dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        @if (Auth::user()->roles->implode('name', ', ') == "Mahasiswa") <!--//Menu ini hanya dapat di tampilkan di mahasiswa-->
        <li class="header">&mdash; Data Mahasiswa</li>
        <li class=" treeview"> <!--{{Request::is('/dashboard*')? 'active menu-open' : '' }}-->
          <a href="#"><i class="fa fa-credit-card"></i> <span>Kartu Rencana Study</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Kartu Rencana Study</a></li>
            <li><a href="#">Kartu Hasil Study</a></li>
            <li><a href="#">Transkrip Nilai</a></li>
          </ul>
        </li>
        @endif

        @if (Auth::user()->roles->implode('name', ', ') == "Dosen") <!--//Menu ini hanya dapat di tampilkan di dosen-->
        <!-- @ can('') -->
        <li class="header">&mdash;Menu Dosen</li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('users.index')}}">List user</a></li>
            <li><a href="{{route('users.add')}}">Add user</a></li>
          </ul>
        </li>
        <!-- @ endcan -->
        @endif

        <li class="header">&mdash; Mahasiswa Modules</li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Mahasiswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('mahasiswa.index')}}">List Mahasiswa</a></li>
            <li><a href="{{route('mahasiswa.create')}}">Pendaftaran Mahasiswa</a></li>
            <li><a href="{{route('mahasiswa.absen.index')}}">Absen Mahasiswa</a></li>
          </ul>
        </li>


        <li class="header">&mdash; Dosen Modules</li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Dosen</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('dosen.index')}}">List Dosen</a></li>
            <li><a href="{{route('dosen.create')}}">Tambah Dosen</a></li>
          </ul>
        </li>

        <li class="header">&mdash; Kurikulum Modules</li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Program Studi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('progstu.index')}}">List Program Studi</a></li>
            <li><a href="{{route('progstu.create')}}">Tambah Program Studi</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Mata Kuliah</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('matkul.index')}}">List Matakuliah</a></li>
            <li><a href="{{route('matkul.create')}}">Tambah Matakuliah</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Tahun Ajaran</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('tahun.index')}}">List Tahun Ajaran</a></li>
            <li><a href="{{route('tahun.create')}}">Buat Tahun Ajaran</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Kartu Rencana Studi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('krs.index')}}">List KRS</a></li>
            <li><a href="{{route('krs.create_head')}}">Tambah KRS Baru</a></li>
          </ul>
        </li>

        @can('view_users')
        <li class="header">&mdash; User Management</li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('users.index')}}">List user</a></li>
            <li><a href="{{route('users.add')}}">Add user</a></li>
          </ul>
        </li>
        @endcan

        @can('view_roles')
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Roles & Permission</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('roles.index')}}">List roles</a></li>
            <li><a href="{{route('roles.add')}}">Add roles</a></li>
          </ul>
        </li>
        @endcan
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
