<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header" style="background-color: white;">
    <h1>
      Dashboard
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
    <br>
  </section>

  <div class="row">
    <img src="<?php echo base_url('img/banner_home.jpg') ?>" alt="">
  </div>
  <!-- Main content -->
  <section class="content">
  <div class="row">
      <div class="d-flex justify-content-center">
        <div class="col-md-offset-2 col-lg-8 col-md-8 col-sm-8" style="text-align: center;"> 
        <?php
        if (!empty(session()->getFlashdata('success'))) { ?>

            <div class="alert alert-success">
                <?php echo session()->getFlashdata('success'); ?>
            </div>

        <?php } ?>
        <?php if (!empty(session()->getFlashdata('info'))) { ?>

            <div class="alert alert-info">
                <?php echo session()->getFlashdata('info'); ?>
            </div>

        <?php } ?>

        <?php if (!empty(session()->getFlashdata('warning'))) { ?>

            <div class="alert alert-warning">
                <?php echo session()->getFlashdata('warning'); ?>
            </div>

        <?php } ?>
        <?php if (!empty(session()->getFlashdata('danger'))) { ?>

            <div class="alert alert-danger">
                <?php echo session()->getFlashdata('danger'); ?>
            </div>

        <?php } ?>
    </div>
  </div>
  </div>
    <div class="row">
      <div class="d-flex justify-content-center">
        <div class="col-md-offset-2 col-lg-8 col-md-8 col-sm-8" style="background-color: #1C8BE3;">
          <h2 style="color: white; text-align: center;">Pendaftaran Calon Siswa Baru</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="d-flex justify-content-center">
        <div class="col-md-offset-2 col-lg-8 col-md-8 col-sm-8" style="background-color: white;">
          <div class="card mt-5">
            <br>
            <div class="card-body">
              <form action="<?php echo base_url('siswa/tambahDaftar'); ?>" method="POST">
              <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">No. Pendaftaran</label>
                  <div class="col-sm-10">
                    <?php
                    $kode = $max['id_pendaftaran']+1;
                    $kode = "PPDB000$kode";
                    ?>
                    <input name="no_pendaftaran" readonly value="<?= $kode ?>" style="width: 5cm;" type="text" class="form-control" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">No. STTB SMP</label>
                  <div class="col-sm-10">
                    <input name="no_sttb" style="width: 10cm;" type="text" class="form-control" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Nama Lengkap</label>
                  <div class="col-sm-10">
                    <input name="nama" style="width: 10cm;" type="text" class="form-control" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input name="jk" class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Laki-Laki" checked>
                      <label class="form-check-label" for="gridRadios1">
                        Laki-Laki
                      </label>
                    </div>
                    <div class="form-check">
                      <input name="jk" class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Perempuan">
                      <label class="form-check-label" for="gridRadios2">
                        Perempuan
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Agama</label>
                  <div class="col-sm-10">
                    <select style="width: 4cm;" name="agama" class="form-control" id="exampleFormControlSelect1" required>
                      <option style="text-align: center;">--Pilih--</option>
                      <option>Islam</option>
                      <option>Kristen</option>
                      <option>Hindu</option>
                      <option>Budha</option>
                      <option>Katolik</option>
                      <option>Konghucu</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Golongan Darah</label>
                  <div class="col-sm-10">
                    <select style="width: 3cm;" name="gol_darah" class="form-control" id="exampleFormControlSelect1" required>
                      <option style="text-align: center;">--Pilih--</option>
                      <option>A</option>
                      <option>B</option>
                      <option>AB</option>
                      <option>O</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-10">
                    <textarea name="alamat" style="width: 18cm; height: 2cm;" type="text" class="form-control" required></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Tempat Lahir</label>
                  <div class="col-sm-10">
                    <input name="tempat_lahir" style="width: 8cm;" type="text" class="form-control" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                  <div class="col-sm-10">
                    <input name="tgl_lahir" style="width: 8cm;" type="date" class="form-control" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Kontak</label>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">No. Telepon</label>
                  <div class="col-sm-10">
                    <input name="no_telp" style="width: 8cm;" type="text" class="form-control" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input name="email" style="width: 8cm;" type="text" class="form-control" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Orang Tua / Wali</label>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Nama Ayah</label>
                  <div class="col-sm-10">
                    <input name="nm_ayah" style="width: 8cm;" type="text" class="form-control" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Pekerjaan Ayah</label>
                  <div class="col-sm-10">
                    <select style="width: 7cm;" name="kj_ayah" class="form-control" id="exampleFormControlSelect1">
                      <option style="text-align: center;">--Pilih--</option>
                      <option>PNS</option>
                      <option>Karyawan Swasta</option>
                      <option>TNI/Polri</option>
                      <option>Petani</option>
                      <option>Nelayan</option>
                      <option>Wiraswasta</option>
                      <option>Buruh</option>
                      <option>Pensiunan</option>
                      <option>Serabutan</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Penghasilan Ayah</label>
                  <div class="col-sm-10">
                    <select style="width: 7cm;" name="hsl_ayah" class="form-control" id="exampleFormControlSelect1">
                      <option style="text-align: center;">--Pilih--</option>
                      <option>Tidak memiliki penghasilan</option>
                      <option>
                        < Rp. 500.000</option>
                      <option>Rp. 500.000 - < Rp. 1.000.000</option>
                      <option>Rp. 1.000.000 - < Rp. 2.000.000</option>
                      <option>Rp. 2.000.000 - < Rp. 3.000.000</option>
                      <option>Rp. 4.000.000 - < Rp. 5.000.000</option>
                      <option>> Rp. 5.000.000</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Nama Ibu</label>
                  <div class="col-sm-10">
                    <input name="nm_ibu" style="width: 8cm;" type="text" class="form-control" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Pekerjaan Ibu</label>
                  <div class="col-sm-10">
                    <select style="width: 7cm;" name="kj_ibu" class="form-control" id="exampleFormControlSelect1">
                      <option style="text-align: center;">--Pilih--</option>
                      <option>Ibu Rumah Tangga</option>
                      <option>PNS</option>
                      <option>Karyawan Swasta</option>
                      <option>TNI/Polri</option>
                      <option>Petani</option>
                      <option>Nelayan</option>
                      <option>Wiraswasta</option>
                      <option>Buruh</option>
                      <option>Pensiunan</option>
                      <option>Serabutan</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Penghasilan Ibu</label>
                  <div class="col-sm-10">
                    <select style="width: 7cm;" name="hsl_ibu" class="form-control" id="exampleFormControlSelect1">
                      <option style="text-align: center;">--Pilih--</option>
                      <option>Tidak memiliki penghasilan</option>
                      <option>
                        < Rp. 500.000</option>
                      <option>Rp. 500.000 - < Rp. 1.000.000</option>
                      <option>Rp. 1.000.000 - < Rp. 2.000.000</option>
                      <option>Rp. 2.000.000 - < Rp. 3.000.000</option>
                      <option>Rp. 4.000.000 - < Rp. 5.000.000</option>
                      <option>> Rp. 5.000.000</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Berkas</label>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Jalur Pendaftaran</label>
                  <div class="col-sm-10">
                    <select style="width: 7cm;" name="jlr_daftar" class="form-control" id="exampleFormControlSelect1">
                      <option style="text-align: center;">--Pilih--</option>
                      <option>Prestasi Akademik dan Non Akademik</option>
                      <option>Perpindahan Tugas Orang Tua/Wali</option>
                      <option>Nilai Rapor</option>
                      <option>Afirmasi</option>
                      <option>Zonasi</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Uploud Foto</label>
                  <div class="col-sm-10">
                    <div class="input-group">
                      <div class="custom-file">
                        <input name="uploud_foto" type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary" style="float: right; background-color: #1C8BE3;">Daftar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="d-flex justify-content-center">
        <div class="col-md-offset-2 col-lg-8 col-md-8 col-sm-8" style="background-color: white; height: 1cm;">
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-lg-6 col-mg-6 col-sm-6 col-xs-12" style="line-height: 1.2;">
        <h4><b>Info & Kontak</b></h4>
        <!-- <hr align="left" style="height: 1px;border:none;color:#B5B6B6;background-color:#B5B6B6;width: 80%;"> -->
        <span>
          <b>Jl. Gagak Hitam No. 120, Lemahabang, Cirebon, Jawa Barat 45183</b>
          <br>
          Telepon : (0231) 382973
        </span>
      </div>
    </div>
</div>



</section>
<!-- right col -->
</div>
<!-- /.row (main row) -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->