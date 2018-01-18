<div class="box-header">
  <div class="text-right">
    {!! Form::submit('Save', ['class'=>'btn btn-success']) !!}
    <a href="{{route('users.index')}}" class="btn btn-inverse waves-effect waves-light">Cancel</a>
  </div>
</div>

<div class="panel-wrapper collapse in" aria-expanded="true">
    <div class="panel-body">
        <div class="form-body">
            <div class="row">
                <div class="col-md-12">
                    <!-- Name Form Input -->
                    <div class="form-group row @if ($errors->has('name')) has-error @endif">
                        {!! Form::label('name', 'Name', ['class' => 'col-sm-2 control-label col-form-label']) !!}<span style="color:red">*</span>
                        <div class="col-sm-9">
                          {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                        </div>
                        @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
                    </div>

                    <!-- email Form Input -->
                    <div class="form-group row @if ($errors->has('email')) has-error @endif">
                        {!! Form::label('email', 'Username / E-mail address', ['class' => 'col-sm-2 control-label col-form-label']) !!}<span style="color:red">*</span>
                        <div class="col-sm-9">
                          {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Username / E-mail address']) !!}
                        </div>
                        @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
                    </div>

                    <!-- password Form Input -->
                    <div class="form-group row @if ($errors->has('password')) has-error @endif">
                        {!! Form::label('password', 'Password', ['class' => 'col-sm-2 control-label col-form-label']) !!}<span style="color:red">*</span>
                        <div class="col-sm-9">
                          {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                        </div>
                        @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
                    </div>

                    <!-- Roles Form Input -->
                    <div class="form-group row @if ($errors->has('roles')) has-error @endif">
                        {!! Form::label('roles[]', 'Roles', ['class' => 'col-sm-2 control-label col-form-label']) !!}<span style="color:red">*</span>
                        <div class="col-sm-9">
                          {!! Form::select('roles[]', $roles, isset($user) ? $user->roles->pluck('id')->toArray() : null,  ['class' => 'form-control']) !!}
                        </div>
                        @if ($errors->has('roles')) <p class="help-block">{{ $errors->first('roles') }}</p> @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
