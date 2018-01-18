@extends('layouts.template-login')
@section('script')
<script type="text/javascript">
</script>
@endsection
@section('login-content')
<div class="login-box">
  <div class="login-logo">
    <a href="login-mahasiswa.php"><b>Sistem Akademik</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to Siakad <br>Admin</p>

    <form action="{{route('login')}}" method="post">
      {{ csrf_field() }}

      <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
        @if ($errors->has('email'))
        <label class="control-label" for="emailError"><i class="fa fa-times-circle-o"></i> {{ $errors->first('email') }}</label>
        @endif
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <input type="email" name="email" value="{{ old('email') }}" id="email" class="form-control" placeholder="E-mail Address">
      </div>

      <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
        @if ($errors->has('password'))
        <label class="control-label" for="passwordError"><i class="fa fa-times-circle-o"></i> {{ $errors->first('password') }}</label>
        @endif
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input name="remember" type="checkbox" {{old('remember') ? 'checked' : '' }}> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@endsection
@section('css')
<style media="screen">
</style>
@endsection
