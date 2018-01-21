@extends('layouts.template-dashboard')


@section('page-title','Unauthorized')
@section('content')
<section class="content">
  <div class="error-page">
    <h2 class="headline text-red"> 403</h2>

    <div class="error-content">
      <h3><i class="fa fa-user-times text-red"></i> Oops! Unauthorized.</h3>

      <p>
        We can not give access to the page you were looking for.
        Meanwhile, you may <a href="{{route('dashboard')}}">return to dashboard.</a>
      </p>
    </div>
    <!-- /.error-content -->
  </div>
  <!-- /.error-page -->
</section>
@endsection
