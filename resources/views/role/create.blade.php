@extends('layouts.template-dashboard')
@section('title','Roles & Permission')

@section('page-title', 'Add New Roles')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            {!! Form::open(['route' => ['roles.addprocess'], 'class' => 'form-horizontal' ]) !!}
            <div class="box-header">
              <div class="text-right">
                <!-- Submit Form Button -->
                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Save</button>
                <a class="btn btn-inverse waves-effect waves-light" href="{{ route('roles.index') }}"> Cancel</a>
              </div>
            </div>
            <div class="box-wrapper collapse in" aria-expanded="true">
                <div class="box-body">
                    <div class="form-body">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row @if ($errors->has('name')) has-error @endif">
                                    {!! Form::label('name', 'Name', ['class' => 'col-sm-2 control-label col-form-label']) !!}<span style="color:red">*</span>
                                    <div class="col-sm-9">
                                      {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Role Name']) !!}
                                    </div>
                                    @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
