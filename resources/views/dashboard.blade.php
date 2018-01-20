@extends('layouts.template-dashboard')
@section('title','Dashboard')
<!-- @ section('page-title','Dashboard') -->
@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
  <div class="col-lg-4 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3>150</h3>

        <p>Semester Kamu</p>
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
      <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-4 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3>53<sup style="font-size: 20px">%</sup></h3>

        <p>Rata-rata Masuk Kamu</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="#" class="small-box-footer">  <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-4 col-xs-12">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3>44</h3>

        <p>Jurusan Kamu</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"> </i> </a>
    </div>
  </div>
  <!-- ./col -->
</div>
<!-- /.row -->
<div class="alert alert-info alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  <h4><i class="icon fa fa-info"></i>Welcome !</h4>
  Logged as , {!!Auth::user()->name!!} <b>({!!Auth::user()->roles->implode('name', ', ')!!})</b>.
</div>
@endsection
