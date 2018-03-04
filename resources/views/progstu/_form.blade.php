<div class="box-body">
  <div class="row">
    <div class="col-md-6">
      <div class="form-grup">
        <label>Nama Program Studi:</label> <label class="required"> *</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-user"></i>
          </div>
          {!! Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'nama']) !!}
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-grup">
        <label>Jenjang:</label> <label class="required"> *</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-building"></i>
          </div>
          {!! Form::select('jenjang_id',['1'=>'S1','2'=>'S2','3'=>'D3'],null, ['class' => 'form-control select2 select2-hidden-accessible' , 'style' => 'width:100%', 'required']) !!}
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-grup">
        <label>Jurusan:</label> <label class="required"> *</label>
        <div class="input-group date">
          <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
          </div>
          {!! Form::select('jurusan',['Informatika'=>'Informatika','Ekonomi & Manajemen'=>'Ekonomi & Manajemen'],null, ['class' => 'form-control select2 select2-hidden-accessible' , 'style' => 'width:100%', 'required']) !!}

        </div>
      </div>
    </div>
  </div>
</div>
