@extends('layouts.template-dashboard')

@section('title', 'Users')

@section('page-title', 'Edit Users')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            {!! Form::model($user, ['method' => 'PUT', 'route' => ['users.editprocess',  $user->id ], 'class' => 'form-horizontal' ]) !!}
                @include('user._form')
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection
