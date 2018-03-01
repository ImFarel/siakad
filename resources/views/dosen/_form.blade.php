<div class="box-body">
  <div class="row">
    <div class="col-md-6">
      <div class="form-grup">
        <label>Nama Lengkap:</label> <label class="required"> *</label>
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
          <!-- <input type="text" class="form-control pull-right" id="datepicker" required name="tanggal_lahir"> -->
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-grup">
        <label>Jenis Kelamin:</label> <label class="required"> *</label>
        {!! Form::select('jk',['Laki Laki'=>'Laki-Laki','Perempuan'=>'Perempuan'],'null', ['class' => 'form-control select2 select2-hidden-accessible' , 'style' => 'width:100%', 'required']) !!}
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-grup">
        <label>Status Martial:</label> <label class="required"> *</label>
        {!! Form::select('status_martial',['Menikah'=>'Menikah','Belum Menikah'=>'Belum Menikah'],null, ['class' => 'form-control select2 select2-hidden-accessible' , 'style' => 'width:100%', 'required']) !!}
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-grup">
        <label>Kewarganegaraan:</label> <label class="required"> *</label>
        {!! Form::select('warga_negara',['WNI'=>'WNI','WNA'=>'WNA'],null, ['class' => 'form-control select2 select2-hidden-accessible' , 'style' => 'width:100%', 'required']) !!}
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-grup">
        <label>Agama:</label> <label class="required"> *</label>
        {!! Form::select('agama',['Islam'=>'Islam','Hindu'=>'Hindu','Kristen'=>'Kristen','Budha'=>'Budha'],null, ['class' => 'form-control select2 select2-hidden-accessible' , 'style' => 'width:100%' , 'required']) !!}

      </div>
    </div>
    <div class="col-md-6">
      <div class="form-grup">
        <label>Alamat Tempat Tinggal:</label> <label class="required"> *</label>
        {!! Form::textarea('alamat', null,['placeholder'=>'Enter...', 'required']) !!}
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
        <label>Telepon Rumah:</label>
        <div class="input-group pull-right">
          <div class="input-group-addon">
            <i class="fa fa-phone"></i>
          </div>
          {!! Form::text('tlp_rmh', null,['onkeypress'=>'return event.charCode >= 48 && event.charCode <= 57', 'class'=>'form-control']) !!}

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
          {!! Form::email('email', null,['id'=>'email', 'class'=>'form-control']) !!}

        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-grup">
        <label>Pin BB/BBM:</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-btc"></i>
          </div>
          {!! Form::text('bbm', null,['class'=>'form-control pull-right','placeholder'=>'Enter Email']) !!}
          <!-- <input type="text" class="form-control pull-right" required name="bbm"> -->
        </div>
      </div>
    </div>

  </div>
</div>
<div class="box box-info">
  <div class="box-header">
    <h3 class="box-title">Data Asal Sekolah</h3>
    <div class="box-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-grup">
            <label>Asal Sekolah:</label><label class="required"> *</label>
            {!! Form::select('asal_sekolah',['SMK'=>'SMK','SMA'=>'SMA'],null, ['class' => 'form-control select2 select2-hidden-accessible' , 'style' => 'width:100%', 'required']) !!}

          </div>
        </div>
        <div class="col-md-6">
          <div class="form-grup">
            <label>Jurusan: </label><label class="required"> *</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-gg-circle"></i>
              </div>
              {!! Form::text('jurusan', null,['class'=>'form-control pull-right','placeholder'=>'Jurusan']) !!}

            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-grup">
            <label>Nama Sekolah:</label><label class="required"> *</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-building"></i>
              </div>
              {!! Form::text('nama_sekolah', null,['class'=>'form-control pull-right']) !!}

            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-grup">
            <label>Tahun Lulus:</label><label class="required"> *</label>
            <div class="input-group pull-right">
              <div class="input-group-addon">
                <i class="fa fa-hourglass-half"></i>
              </div>
              {!! Form::text('tahun_lulus', null,['class'=>'form-control pull-right','required']) !!}

            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-grup">
            <label>No Ijazah:</label><label class="required"> *</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-file-text-o"></i>
              </div>
              {!! Form::text('no_ijazah', null,['class'=>'form-control pull-right','required']) !!}

            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-grup">
            <label>Alamat Sekolah:</label><label class="required"> *</label>
            {!! Form::textarea('alamat_sekolah',null,['class'=>'form-control pull-right','required']) !!}

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Data Orang Tua/Wali</h3>
    <div class="box-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-grup">
            <label>Nama Orangtua/Wali:</label><label class="required"> *</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-user"></i>
              </div>
              {!! Form::text('nama_or',null,['class'=>'form-control', 'required']) !!}

            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-grup">
            <label>No Telepon:</label><label class="required"> *</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-phone"></i>
              </div>
              {!! Form::text('no_tlp_or', null,['onkeypress'=>'return event.charCode >= 48 && event.charCode <= 57', 'placeholder'=>'Enter...','class'=>'form-control', 'required']) !!}
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-grup">
            <label>Email:</label>
            <div class="input-group">
              <div class="input-group-addon">@
                <i class="fa fa-email"></i>
              </div>
              {!! Form::email('email_or',null,['class'=>'form-control']) !!}
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-grup">
            <label>Pekerjaan:</label><label class="required"> *</label>
            {!! Form::select('pekerjaan_or', ['PNS' => 'PNS', 'TNI/Polri' => 'TNI/Polri', 'Dosen/Guru' => 'Dosen/Guru', 'Wirausaha' => 'Wirausaha', 'Swasta' => 'Swasta', 'Petani Buruh' => 'Petani Buruh', 'Pensiunan' => 'Pensiunan','Lain-Lain' => 'Lain-Lain'], null, ['placeholder' => 'Pick a something...','class'=>'form-control select2 select2-hidden-accessible pull-right']) !!}
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-grup">
            <label>Nama Instansi:</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-building-o"></i>
              </div>
              {!! Form::text('instansi_or',null,['class'=>'form-control']) !!}
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-grup">
            <label>Pendidikan Terakhir:</label><label class="required"> *</label>
            {!! Form::select('pend_or', ['S3' => 'S3', 'S2' => 'S2', 'S1' => 'S1', 'Diploma' => 'Diploma', 'SLTA' => 'SLTA'], null, ['placeholder' => 'Pick a size...','required','class'=>'form-control select2 select2-hidden-accessible pull-right']) !!}

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Data Kelas & Jurusan</h3>
    <div class="box-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-grup">
            <label>Kelas:</label><label class="required"> *</label>
            {!! Form::select('kelas', ['Reguler' => 'Reguler', 'Karyawan' => 'Karyawan', 'Eksekutif' => 'Eksekutif'], null, ['required','class'=>'form-control select2 select2-hidden-accessible pull-right']) !!}

          </div>
        </div>
      </div><br>
      <div class="col-md-6">
        <label>Ekonomi & Manajemen:</label><label class="required"> *</label>
        <div class="form-grup">
          <div class="col-md-12">
            <div class="radio">
              <?php if ($selectedProg == 6): ?>
                <input type="radio" name="progstu_id" value="6" checked>D3 Keuangan Perbankan</input>
              <?php else: ?>
                <input type="radio" name="progstu_id" value="6" >D3 Keuangan Perbankan</input>
              <?php endif; ?>
            </div>
            <div class="radio">
              <?php if ($selectedProg == 4): ?>
                <input type="radio" name="progstu_id" value="4" checked>D3 Akuntansi</input>
              <?php else: ?>
                <input type="radio" name="progstu_id" value="4" >D3 Akuntansi</input>
              <?php endif; ?>

            </div>
            <div class="radio">
              <?php if ($selectedProg == 3): ?>
                <input type="radio" name="progstu_id" value="3" checked>S1 Akuntansi</input>
              <?php else: ?>
                <input type="radio" name="progstu_id" value="3" >S1 Akuntansi</input>
              <?php endif; ?>

            </div>
            <div class="radio">
              <?php if ($selectedProg == 7): ?>
                <input type="radio" name="progstu_id" value="7" checked>S1 Manajemen</input>
              <?php else: ?>
                <input type="radio" name="progstu_id" value="7">S1 Manajemen</input>
              <?php endif; ?>

            </div>
            <div class="radio">
              <?php if ($selectedProg == 8): ?>
                <input type="radio" name="progstu_id" value="8" checked>D3 Manajemen Perpajakan</input>
              <?php else: ?>
                <input type="radio" name="progstu_id" value="8" >D3 Manajemen Perpajakan</input>
              <?php endif; ?>

            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <label>Informatika:</label><label class="required"> *</label>
        <div class="form-grup">
          <div class="col-md-12">
            <div class="radio">
              <?php if ($selectedProg == 1): ?>
                <input type="radio" name="progstu_id" value="1" checked>S1 Teknik Informatika</input>
              <?php else: ?>
                <input type="radio" name="progstu_id" value="1" >S1 Teknik Informatika</input>
              <?php endif; ?>
            </div>
            <div class="radio">
              <?php if ($selectedProg == 2): ?>
                <input type="radio" name="progstu_id" value="2" checked>D3 Komputerisasi Akuntansi</input>
              <?php else: ?>
                <input type="radio" name="progstu_id" value="2" >D3 Komputerisasi Akuntansi</input>
              <?php endif; ?>
            </div>
            <div class="radio">
              <?php if ($selectedProg == 5): ?>
                <input type="radio" name="progstu_id" value="5" checked>D3 Manajemen Informatika</input>
              <?php else: ?>
                <input type="radio" name="progstu_id" value="5" >D3 Manajemen Informatika</input>
              <?php endif; ?>

            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</div>
</div>
<div class="col-md-6">
<?php if (!empty($data->foto)): ?>
  <img src="{{asset($data->foto)}}" id="showgambar" style="max-width:200px;max-height:200px;float:left;" />

<?php else: ?>
  <img src="{{asset('admin\dist\img\boxed-bg.png')}}" id="showgambar" style="max-width:200px;max-height:200px;float:left;" />

<?php endif; ?>
</div>
<div class="col-md-6">
  <div class="form-grup">
    <label for="inputgambar">Masukkan Foto:</label><label class="required"> *</label>
    <?php if (empty($_GET['id'])): ?>
      {!!Form::file('foto',['id'=>'inputgambar'])!!}
    <?php else: ?>
      {!!Form::file('foto',['id'=>'inputgambar','required'])!!}
    <?php endif; ?>
    <p class="help-block">Masukkan Foto</p>
  </div>
</div>
