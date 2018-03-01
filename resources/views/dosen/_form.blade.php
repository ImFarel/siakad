<div class="box-body">
  <div class="row">
    <div class="col-md-6">
      <div class="form-grup">
        <label>Nama Lengkap + Gelar:</label> <label class="required"> *</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-user"></i>
          </div>
          {!! Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Ahmad Farel, M.Kom, S.I.']) !!}
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-grup">
        <label for="email">Email:</label><label class="required"> *</label>
        <div class="input-group">
          <div class="input-group-addon">@
            <i class="fa fa-email"></i>
          </div>
          {!! Form::email('email', null,['class'=>'form-control']) !!}

        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-grup">
        <label>Jenis Kelamin:</label> <label class="required"> *</label>
        {!! Form::select('jk',['Laki-Laki'=>'Laki-Laki','Perempuan'=>'Perempuan'],'null', ['class' => 'form-control select2 select2-hidden-accessible' , 'style' => 'width:100%', 'required']) !!}
      </div>
    </div>
    
    <div class="col-md-6">
      <div class="form-grup">
        <label>Tempat Lahir:</label> <label class="required"> *</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-building"></i>
          </div>
          {!! Form::text('tempat_lahir', null, ['class' => 'form-control', 'placeholder' => 'Tempat Lahir' , 'required']) !!}
          <!-- <input type="text" class="form-control" required name="tempat_lahir"> -->
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-grup">
        <label>Tanggal Lahir:</label> <label class="required"> *</label>
        <div class="input-group date">
          <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
          </div>
          {!! Form::text('tanggal_lahir', null, ['id'=> 'datepicker', 'class' => 'form-control pull-right', 'placeholder' => 'Tempat Lahir' , 'required']) !!}
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-grup">
        <label>No. HP:</label> <label class="required"> *</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-phone"></i>
          </div>
          {!! Form::text('no_tlp', null,['onkeypress'=>'return event.charCode >= 48 && event.charCode <= 57', 'class'=>'form-control', 'required']) !!}
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-grup">
        <label>Alamat:</label> <label class="required"> *</label>
        {!! Form::textarea('alamat', null, ['class' => 'form-control', 'placeholder' => 'Alamat','cols'=>'50','rows'=>'5']) !!}
      </div>
    </div>

  </div>
</div>
