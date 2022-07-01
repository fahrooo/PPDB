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
                <a href="<?= base_url('siswa/tampilDaftar') ?>" role="button" class="btn btn-success" style="float: right;">Deskripsi</a>
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table">
                            <tt>
                                <th>No. Pendaftaran</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>No. Telepon</th>
                                <th>Email</th>
                                <th>Kota Asal</th>
                                <th>Jalur Pendaftaran</th>
                                </tr>

                                <?php
                                foreach ($data as $user) {
                                    // var_dump($user);
                                ?>
                                    <?php
                                    $kalimat = $user['email'];;
                                    $key = 3;
                                    for ($i = 0; $i < strlen($kalimat); $i++) {
                                        $kode[$i] = ord($kalimat[$i]); //rubah ASCII ke desimal
                                        $b[$i] = ($kode[$i] + $key) % 256; //proses enkripsi
                                        $c[$i] = chr($b[$i]); //rubah desimal ke ASCII
                                    }
                                    //echo "kalimat ASLI : ";
                                    for ($i = 0; $i < strlen($kalimat); $i++) {
                                        //echo $kalimat[$i];
                                    }
                                    //echo "<br>";
                                    //echo "hasil enkripsi =";
                                    $hsl = '';
                                    for ($i = 0; $i < strlen($kalimat); $i++) {
                                        //echo $c[$i];
                                        $hsl = $hsl . $c[$i];
                                    }
                                    //echo "<br>"
                                    ?>
                                    <?php
                                    include_once('lib/lib.php');
                                    $kunci = str_replace(" ", "", 'fahro');
                                    $plain = str_replace(" ", "", $user['tempat_lahir']);
                                    $panjang_plain = strlen($plain);
                                    $panjang_kunci = strlen($kunci);
                                    $index_x = 0;
                                    $index_y = 0;
                                    $hasil_ciper = array();
                                    $hasil_akhir = "";
                                    while ($index_x < $panjang_plain) {
                                        $x = substr($plain, $index_x, 1);
                                        $y = substr($kunci, $index_y, 1);
                                        $hasil_ciper[$index_x] =
                                            $tabel_vigenere[huruf_ke_angka($x)][huruf_ke_angka($y)];
                                        $index_x++;
                                        $index_y++;
                                        if ($index_y == $panjang_kunci) {
                                            $index_y = 0;
                                        }
                                    }
                                    $i = 0;
                                    while ($i < $index_x) {
                                        $hasil_akhir .= $hasil_ciper[$i];
                                        $i++;
                                    }
                                    ?>

                                    <tr>
                                        <td><?php echo $user['no_pendaftaran']; ?></td>
                                        <td><?php echo $user['nama']; ?></td>
                                        <td><?php echo $user['jk']; ?></td>
                                        <td><?php echo $user['no_telp']; ?></td>
                                        <td><?php echo $hsl; ?></td>
                                        <td><?php echo $hasil_akhir; ?></td>
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