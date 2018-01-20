@extends('layouts.template-dashboard')

@section('title', 'Users')

@section('page-title', 'Add New Users')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            {!! Form::open(['route' => ['users.addprocess'], 'class' => 'form-horizontal' ]) !!}
                @include('user._form')
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
