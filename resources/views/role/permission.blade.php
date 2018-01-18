@extends('layouts.template-dashboard')

@section('title', 'Permissions')

@section('page-title', 'Edit Permissions')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <div id="flash-msg">
                @include('flash::message')
            </div>

                {!! Form::model($roles, ['method' => 'PUT', 'route' => ['roles.editpermission',  $roles->id ], 'class' => 'm-b']) !!}

                @if($roles->name == 'Administrator')
                    @include('shared._permissions', [
                                  'title' => $roles->name .' Permissions',
                                  'options' => ['disabled'] ])
                @else
                    @include('shared._permissions', [
                                  'title' => $roles->name .' Permissions',
                                  'model' => $roles ])
                    @can('edit_roles')
                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Save</button>
                        <a class="btn btn-inverse waves-effect waves-light" href="{{ route('roles.index') }}"> Cancel</a>
                    @endcan
                @endif

                {!! Form::close() !!}

        </div>
    </div>
</div>
@endsection
