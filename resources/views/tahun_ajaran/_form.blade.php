<div class="box-body">
  <div class="row">
    <div class="col-md-6">
      <div class="form-grup">
        <label>Kode Matakuliah:</label> <label class="required"> *</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-user"></i>
          </div>
          {!! Form::text('kd_matkul', null, ['class' => 'form-control', 'placeholder' => $kode,'required']) !!}
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-grup">
        <label>Nama Matakuliah:</label> <label class="required"> *</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-user"></i>
          </div>
          {!! Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Nama Matkul','required']) !!}
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-grup">
        <label>Program Studi:</label> <label class="required"> *</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-building"></i>
          </div>
          {!! Form::select('progstu_id',$progstu,null, ['class' => 'form-control select2 select2-hidden-accessible' , 'style' => 'width:100%', 'required']) !!}
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-grup">
        <label>Kode:</label> <label class="required"> *</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-user"></i>
          </div>
          {!! Form::text('kode', null, ['class' => 'form-control', 'placeholder' => 'Nama Matkul','required']) !!}
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-grup">
        <label>Dosen Pengajar:</label> <label class="required"> *</label>
        <div class="input-group date">
          <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
          </div>
          {!! Form::select('dosen_id',$dosen,null, ['class' => 'form-control select2 select2-hidden-accessible' , 'style' => 'width:100%', 'required']) !!}

        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-grup">
        <label>SKS:</label> <label class="required"> *</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-user"></i>
          </div>
          {!! Form::text('sks', null, ['class' => 'form-control', 'placeholder' => 'Angka','onkeypress'=>'return event.charCode >= 48 && event.charCode <= 57','required']) !!}
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-grup">
        <label>Kategori:</label> <label class="required"> *</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-user"></i>
          </div>
          {!! Form::select('kategori', ['Wajib'=>'Wajib','Tambahan'=>'Tambahan'],null, ['class' => 'form-control select2 select2-hidden-accessible','required']) !!}
        </div>
      </div>
    </div>
  </div>
</div>
