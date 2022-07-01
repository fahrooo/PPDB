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
        <div class="container">
            <div class="card-header" style="text-align: center; height: 1cm; background-color: #1C8BE3; color: white;">
                <h2>Data Siswa Terdaftar</h2>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12" style="background-color: white;">
                <br>
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>No. Pendaftaran</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>No. Telepon</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Jalur Pendaftaran</th>
                                </tr>

                                <?php
                                foreach ($data as $user) {
                                    // var_dump($user);
                                ?>
                                    <tr>
                                        <td><?php echo $user['no_pendaftaran']; ?></td>
                                        <td><?php echo $user['nama']; ?></td>
                                        <td><?php echo $user['jk']; ?></td>
                                        <td><?php echo $user['no_telp']; ?></td>
                                        <td><?php echo $user['email']; ?></td>
                                        <td><?php echo $user['alamat']; ?></td>
                                        <td><?php echo $user['jlr_daftar']; ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                        </table>
                    </div>
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