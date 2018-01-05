@extends('layouts.app')

@section('login-content')
<div class="login-box">
  <div class="login-logo">
    <a href="login-mahasiswa.php"><b>Sistem Akademik</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to Siakad <br>Admin</p>

    <form action="../dashboard/dashboard.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <a href="../dashboard/dashboard.php"><button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button></a>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@endsection
@section('css')
<style media="screen">
</style>
@endsection
