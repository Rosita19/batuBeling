<?php 
//memulai session yang disimpan pada browser
session_start();

//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if($_SESSION['level']!="admin"){
//melakukan pengalihan
header("location:../login.php");
} 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Admin Almaas Sosial</title>
        <link href="img/icon.png" rel="icon">
        <!--STYLESHEET-->
        <!--=================================================-->
        <!--Roboto Slab Font [ OPTIONAL ] -->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400" rel="stylesheet">
        <!--Bootstrap Stylesheet [ REQUIRED ]-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--Jasmine Stylesheet [ REQUIRED ]-->
        <link href="css/styleku.css" rel="stylesheet">
        <!--Font Awesome [ OPTIONAL ]-->
        <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!--Switchery [ OPTIONAL ]-->
        <link href="plugins/switchery/switchery.min.css" rel="stylesheet">
        <!--Switchery [ OPTIONAL ]-->
        <link href="plugins/jvectormap/jquery-jvectormap.css" rel="stylesheet">
        <!--Bootstrap Select [ OPTIONAL ]-->
        <link href="plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
        <!--Bootstrap Validator [ OPTIONAL ]-->
        <link href="plugins/bootstrap-validator/bootstrapValidator.min.css" rel="stylesheet">
        <!--Demo [ DEMONSTRATION ]-->
        <link href="css/demo/jquery-steps.min.css" rel="stylesheet">
        <!--Demo [ DEMONSTRATION ]-->
        <link href="css/demo/jasmine.css" rel="stylesheet">
        <!--SCRIPT-->
        <!--=================================================-->
        <!--Page Load Progress Bar [ OPTIONAL ]-->
        <link href="plugins/pace/pace.min.css" rel="stylesheet">
        <script src="js/jquery-3.4.1.min.js"></script>
    </head>
    <!--TIPS-->
    <!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
    <body>
        <div id="container" class="effect mainnav-lg navbar-fixed mainnav-fixed">
            <!--NAVBAR-->
            <!--===================================================-->
            <header id="navbar">
                <div id="navbar-container" class="boxed">
                    <!--Brand logo & name-->
                    <!--================================-->
                    <div class="navbar-header">
                        <a href="index.html" class="navbar-brand">
                            <img src="img/tulis.png">
                            <div class="brand-title">
                                <span class="brand-text">Rose Resto</span>
                            </div>
                        </a>
                    </div>
                    <!--================================-->
                    <!--End brand logo & name-->
                    <!--Navbar Dropdown-->
                    <!--================================-->
                    <div class="navbar-content clearfix">
                        <ul class="nav navbar-top-links pull-left">
                            <!--Navigation toogle button-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li class="tgl-menu-btn">
                                <a class="mainnav-toggle" href="#"> <i class="fa fa-navicon fa-lg"></i> </a>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End Navigation toogle button-->
                            <!--Profile toogle button-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End Profile toogle button-->
                            <!--Messages Dropdown-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End message dropdown-->
                            <!--Notification dropdown-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End notifications dropdown-->
                        </ul>
                        <ul class="nav navbar-top-links pull-right">
                            <!--Profile toogle button-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li class="hidden-xs" id="toggleFullscreen">
                                <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                                <span class="sr-only">Toggle fullscreen</span>
                                </a>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End Profile toogle button-->
                            <!--Language selector-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End language selector-->
                            <!--User dropdown-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

                           <li id="dropdown-user" class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <i class="fa fa-navicon fa-lg"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right with-arrow">
                                    <!-- User dropdown menu -->
                                    <ul class="head-list">
                                        <li>
                                            <a href="logout.php"> <i class="fa fa-sign-out fa-fw"></i> Logout </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End user dropdown-->
                            <!--Navigation toogle button-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End user dropdown-->
                            <!--Navigation toogle button-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End Navigation toogle button-->
                        </ul>
                    </div>
                    <!--================================-->
                    <!--End Navbar Dropdown-->
                </div>
            </header>
            <!--===================================================-->
            <!--END NAVBAR-->
            <div class="boxed">
                <!--CONTENT CONTAINER-->
                <!--===================================================-->
                <div id="content-container">
                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->
                    <!--Page content-->
                    <!--===================================================-->
                    <div id="page-content">
                     <div class="panel" style="padding-bottom: 100px;">
                        <div class="panel-heading">
                            <h3 class="panel-title mb-5">Detail Pengajuan</h3>
                        </div>
                        <div class="col-sm-12 mt-5" style="margin:20px">
                         

                      </div>
                        <div class="col-sm-12 mt-5">
                         <div class="col-sm-12 mt-5" style="margin:5px">
                            <div class="table-responsive">
                                <?php
                                    include "koneksi.php";

                                    $idVerif = $_GET['idVerif'];

                                    $query = "SELECT *FROM verifikasi WHERE idVerif= '".$idVerif."'";
                                    $sql = mysqli_query($konek, $query);
                                    $data = mysqli_fetch_array($sql); 
                                ?>
                                <table>
                                        <tr>
                                            <td><a href="dataPengajuanA.php" style="margin-left : 40px; border-radius:5px; height: 30px;" class="btn btn-success fa fa-arrow-left"></a>
                                                <a href="pdfPengajuanA.php?idPengajuan=<?= $data['idPengajuan']?>" target="_blank" name="view" class="btn btn-success" style="margin-left: 5px; border-radius:5px"><i class="fa fa-file-pdf-o"></i></a>
                                                <a href="wordPengajuanA.php?idPengajuan=<?= $data['idPengajuan']?>" target="_blank" name="view" class="btn btn-success" style="margin-left: 5px; border-radius:5px"><i class="fa fa-file-word-o"></i></a>
                                                <a href="excellPengajuanA.php?idPengajuan=<?= $data['idPengajuan']?>" target="_blank" name="view" class="btn btn-success" style="margin-left: 5px; border-radius:5px"><i class="fa fa-file-excel-o"></i></a>
                                            </td>
                                        </tr>
                                    </table>
                                    <br>
                                <table border="0" class="table table-striped" id="table1" > 
                                        <tr class="text-center"cellspa>
                                            <td colspan="4" style="background-color: green; color: white;"><strong>Data Diri</strong></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"><?php echo "<center><img style='width: 300px; margin-top:10px; margin-left:50px; align: center;' src='../admin/gambar/$data[nama]' /></center>";?></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Nama Sang Pengaju :</td>
                                            <td><input type="text" class="form-control"  value="<?php echo $data['namaPengaju'];?>" readonly></td>
                                            <td>Jenis Kelamin :</td>
                                            <td><input type="text" class="form-control" value="<?php echo $data['jk'];?>" readonly></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Tanggal Lahir:</td>
                                            <td><input type="date" class="form-control"  value="<?php echo $data['tglLahir'];?>" readonly></td>
                                            <td>Usia :</td>
                                            <td><input type="number" class="form-control" value="<?php echo $data['usia'];?>" readonly></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Agama:</td>
                                            <td><input type="text" class="form-control"  value="<?php echo $data['agama'];?>" readonly></td>
                                            <td>Status Pernikahan :</td>
                                            <td><input type="text" class="form-control" value="<?php echo $data['statusPernikahan'];?>" readonly></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>No Telepon (Wa):</td>
                                            <td><input type="text" class="form-control"  value="<?php echo $data['noWa'];?>" readonly></td>
                                            <td>Pekerjaan :</td>
                                            <td><input type="text" class="form-control" value="<?php echo $data['pekerjaan'];?>" readonly></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Penghasilan/Pemasukan:</td>
                                            <td><input type="text" class="form-control"  value="<?php echo $data['hasilBulan'];?>" readonly></td>
                                            <td>Nama Kepala Keluarga:</td>
                                            <td><input type="text" class="form-control"  value="<?php echo $data['kepalaKeluarga'];?>" readonly></td>
                                        </tr>
                                        <tr cellspa>
                                            
                                            <td>Jenis KK :</td>
                                            <td><input type="text" class="form-control" value="<?php echo $data['jenisKK'];?>" readonly></td>
                                            <td>NIK:</td>
                                            <td><input type="number" class="form-control"  value="<?php echo $data['nik'];?>" readonly></td>
                                        </tr>
                                        <tr cellspa>
                                            
                                            <td>Jumlah KK dalam satu rumah :</td>
                                            <td><input type="number" class="form-control" value="<?php echo $data['jumlahKK'];?>" readonly></td>
                                            <td>Jumlah anggota keluarga dalam serumah:</td>
                                            <td><input type="text" class="form-control"  value="<?php echo $data['jumlahAnggota'];?>" readonly></td>
                                        </tr>
                                        <tr cellspa>
                                            
                                            <td>Alamat KK :</td>
                                            <td><input type="text" class="form-control" value="<?php echo $data['alamatK'];?>" readonly></td>
                                            <td>RT KK:</td>
                                            <td><input type="text" class="form-control"  value="<?php echo $data['rtK'];?>"readonly></td>
                                        </tr>
                                        <tr cellspa>
                                            
                                            <td>RW KK:</td>
                                            <td><input type="text" class="form-control" value="<?php echo $data['rwK'];?>"readonly></td>
                                            <?php
                                                include "koneksi.php";
                                                $provinsi = $data['provinsiK'];
                                                $quer = "select *from provinces where id = '$provinsi'";
                                                $sq = mysqli_query($konek, $quer);
                                                $provinsiK = mysqli_fetch_assoc($sq);

                                            ?>
                                            <td>Provinsi KK:</td>
                                            <td><input type="text" class="form-control"  value="<?php echo $provinsiK['name'];?>"readonly></td>
                                        </tr>
                                        <tr cellspa>
                                            
                                            <?php
                                                include "koneksi.php";
                                                $kabupaten = $data['kabupatenK'];
                                                $quer1 = "select *from regencies where id = '$kabupaten'";
                                                $sq1 = mysqli_query($konek, $quer1);
                                                $kabupatenK = mysqli_fetch_assoc($sq1);

                                            ?>
                                            <td>Kabupaten KK:</td>
                                            <td><input type="text" class="form-control" value="<?php echo $kabupatenK['name'];?>" readonly></td>
                                            <?php
                                                include "koneksi.php";
                                                $kecamatan = $data['kecamatanK'];
                                                $quer2 = "select *from districts where id = '$kecamatan'";
                                                $sq2 = mysqli_query($konek, $quer2);
                                                $kecamatanK = mysqli_fetch_assoc($sq2);

                                            ?>
                                            <td>Kecamatan KK:</td>
                                            <td><input type="text" class="form-control"  value="<?php echo $kecamatanK['name'];?>" readonly></td>
                                        </tr>
                                        <tr cellspa>
                                            
                                            <?php
                                                include "koneksi.php";
                                                $kelurahan = $data['kelurahanK'];
                                                $quer0 = "select *from villages where id = '$kelurahan'";
                                                $sq0 = mysqli_query($konek, $quer0);
                                                $kelurahanK = mysqli_fetch_assoc($sq0);

                                            ?>
                                            <td>Kelurahan KK :</td>
                                            <td><input type="text" class="form-control" value="<?php echo $kelurahanK['name'];?>" readonly></td>
                                            <td>Alamat Domis:</td>
                                            <td><input type="text" class="form-control"  value="<?php echo $data['alamatD'];?>" readonly></td>
                                        </tr>
                                        <tr cellspa>
                                            
                                            <td>RT Domis:</td>
                                            <td><input type="text" class="form-control" value="<?php echo $data['rtD'];?>"readonly></td>
                                            <td>RW Domis:</td>
                                            <td><input type="text" class="form-control"  value="<?php echo $data['rwD'];?>" readonly></td>
                                        </tr>
                                        <tr cellspa>
                                            
                                            <?php
                                                include "koneksi.php";
                                                $provinsi1 = $data['provinsiD'];
                                                $quer3 = "select *from provinces where id = '$provinsi1'";
                                                $sq3 = mysqli_query($konek, $quer3);
                                                $provinsiD = mysqli_fetch_assoc($sq3);

                                            ?>
                                            <td>Provinsi Domis:</td>
                                            <td><input type="text" class="form-control" value="<?php echo $provinsiD['name'];?>" readonly></td>
                                            <?php
                                                include "koneksi.php";
                                                $kabupaten1 = $data['kabupatenD'];
                                                $quer4 = "select *from regencies where id = '$kabupaten1'";
                                                $sq4 = mysqli_query($konek, $quer4);
                                                $kabupatenD = mysqli_fetch_assoc($sq4);

                                            ?>
                                            <td>Kabupaten Domis:</td>
                                            <td><input type="text" class="form-control"  value="<?php echo $kabupatenD['name'];?>" readonly></td>
                                        </tr>
                                        <tr cellspa>
                                            
                                            <?php
                                                include "koneksi.php";
                                                $kecamatan1 = $data['kecamatanD'];
                                                $quer5 = "select *from districts where id = '$kecamatan1'";
                                                $sq5 = mysqli_query($konek, $quer5);
                                                $kecamatanD = mysqli_fetch_assoc($sq5);

                                            ?>
                                            <td>Kecamatan Domis:</td>
                                            <td><input type="text" class="form-control" value="<?php echo $kecamatanD['name'];?>" readonly></td>
                                            <?php
                                                include "koneksi.php";
                                                $kelurahan1 = $data['kelurahanD'];
                                                $quer6 = "select *from villages where id = '$kelurahan1'";
                                                $sq6 = mysqli_query($konek, $quer6);
                                                $kelurahanD = mysqli_fetch_assoc($sq6);

                                            ?>
                                            <td>Kelurahan Domis:</td>
                                            <td><input type="text" class="form-control"  value="<?php echo $kelurahanD['name'];?>" readonly></td>
                                        </tr>
                                        <tr class="text-center"cellspa>
                                            <td colspan="4" style="background-color: green; color: white;"><strong>Kondisi Kesehatan</strong></td>
                                        </tr>
                                       
                                        <tr cellspa>
                                            <td>Kondisi Fisik:</td>
                                            <td><textarea type="text" class="form-control" readonly><?php echo $data['fisik'];?></textarea></td>
                                            <td>Riwayat Penyakit :</td>
                                            <td><textarea type="text" class="form-control" value="" readonly><?php echo $data['penyakit'];?></textarea></td>
                                        </tr>
                                        <tr class="text-center"cellspa>
                                            <td colspan="4" style="background-color: green; color: white;"><strong>Keterangan Lain</strong></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Alasan Diajukan :</td>
                                            <td><textarea type="text" class="form-control" value="" readonly><?php echo $data['alasan'];?></textarea></td>
                                            <td>Keterangan:</td>
                                            <td><textarea type="text" class="form-control"  value="" readonly><?php echo $data['ket'];?></textarea></td>
                                            
                                            
                                        </tr>
                                        <tr cellspa>
                                            
                                            <td>Yang Mengajukan:</td>
                                            <td><textarea type="text" class="form-control" value="" readonly><?php echo $data['pengaju'];?></textarea></td>
                                            <td>Kesulitan Yang Dialami:</td>
                                            <td><textarea type="text" class="form-control"  value="" readonly><?php echo $data['kesulitan'];?></textarea></td>
                                        </tr>
                                        <tr class="text-center"cellspa>
                                            <td colspan="4" style="background-color: green; color: white;"><strong>Status Tempat Tinggal</strong></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Status Tempat Tinggal:</td>
                                            <td><textarea type="text" class="form-control"  value="" readonly><?php echo $data['statusRumah'];?></textarea></td>
                                            <td>Jenis Lantai:</td>
                                            <td><textarea type="text" class="form-control"  value="" readonly><?php echo $data['jenisLantai'];?></textarea></td>
                                            
                                        </tr>
                                        <tr cellspa>
                                            
                                            <td>Jenis Tembok :</td>
                                            <td><textarea type="text" class="form-control" value="" readonly><?php echo $data['jenisTembok'];?></textarea></td>
                                            <td>Wujud Tempat Tinggal :</td>
                                            <td><textarea type="text" class="form-control" value="" readonly><?php echo $data['wujud'];?></textarea></td>
                                        </tr>
                                        <tr class="text-center"cellspa>
                                            <td colspan="4" style="background-color: green; color: white;"><strong>Pengeluaran Lainnya</strong></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Makan Satu Hari:</td>
                                            <td colspan="4"><input type="number" class="form-control"  value="<?php echo $data['makan'];?>" readonly></td>
                                            
                                            
                                        </tr>
                                        <tr cellspa>
                                            <td>Pengeluaran Lainnya :</td>
                                            <td><textarea type="text" class="form-control" value="" readonly><?php echo $data['pengeluaran'];?></textarea></td>
                                            <td>Penanggung Pengeluaran Bulanan:</td>
                                            <td><textarea type="text" class="form-control"  value="" readonly><?php echo $data['pengeluaranBulanan'];?></textarea></td>
                                             
                                            
                                        </tr>
                                        <tr cellspa>
                                            <td>Sumber Air:</td>
                                            <td><textarea type="text" class="form-control"  value="" readonly><?php echo $data['sumberAir'];?></textarea></td>
                                            
                                            <td>Biaya Air :</td>
                                            <td><input type="number" class="form-control" value="<?php echo $data['biayaAir'];?>" readonly></td>
                                            
                                        </tr>
                                        <tr cellspa>
                                            <td>jenis Listrik:</td>
                                            <td><textarea type="text" class="form-control"  value="" readonly><?php echo $data['sumberListrik'];?></textarea></td>
                                            <td>Biaya Listrik:</td>
                                            <td><input type="number" class="form-control" value="<?php echo $data['biayaListrik'];?>" readonly></td>
                                        </tr>
                                        <tr class="text-center"cellspa>
                                            <td colspan="4" style="background-color: green; color: white;"><strong>Sumber Pemasukan Lain</strong></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Sumber Pemasukan:</td>
                                            <td colspan="4"><textarea type="text" class="form-control"  value="" readonly><?php echo $data['sumberPemasukan'];?></textarea></td>
                                        </tr>
                                        <tr class="text-center"cellspa>
                                           
                                            <td colspan="4" style="background-color: green; color: white;" readonly><strong>Program Yang Diikuti</strong></td>
                                        </tr>
                                        <tr cellspa>
                                            
                                            <td>Program yang diikuti:</td>
                                            <td colspan="4"><textarea type="text" class="form-control"  value="" readonly><?php echo $data['program'];?></textarea></td>
                                            
                                        </tr>
                                    
                                       
                                        
                                        <tr class="text-center"cellspa>
                                            <td colspan="4" style="background-color: green; color: white;" ><strong>Kepemilikan Aset</strong></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Peralatan Listrik Terbesar:</td>
                                            <td><textarea type="text" class="form-control"  value="" readonly><?php echo $data['alatListrik'];?></textarea></td>
                                            <td>Kepemilikan Hewan Ternak :</td>
                                            <td><textarea type="text" class="form-control" value="" readonly><?php echo $data['hewan'];?></textarea></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Kepemilikan Kendaraan:</td>
                                            <td><textarea type="text" class="form-control"  value="" readonly><?php echo $data['tran'];?></textarea></td>
                                            <td>Kepemilikan Tanah :</td>
                                            <td><textarea type="text" class="form-control" value="" readonly><?php echo $data['tanah'];?></textarea></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Kepemilikan Usaha Sendiri/Bersama:</td>
                                            <td><textarea type="text" class="form-control"  value=""readonly><?php echo $data['usaha'];?></textarea></td>
                                        </tr>
                                        
                                        <tr class="text-center"cellspa>
                                            <td colspan="4" style="background-color: green; color: white;"><strong>Data Anggota Keluarga</strong></td>

                                            <table border="0" class="table table-striped" id="table1" > 
                                                <th style="margin: 5px">No</th>
                                                <th>Nama Keluarga</th>
                                                <th>Pekerjaan</th>
                                                <th>Penghasilan</th>
                                                <th>Status</th>
                                                <th>Kondisi Fisik</th>
                                                <th>Riwayat Penyakit</th>
                                                
                                            
                                            <?php
                                                include "koneksi.php";

                                                $no = 0;
                                                $query1 = "SELECT *FROM keluarga inner join pengajuan WHERE keluarga.idPengajuan=pengajuan.idPengajuan";
                                                $sql1  = mysqli_query($konek, $query1); 
                                                while($data1 = mysqli_fetch_array($sql1)){
                                                      $no++;
                                                      echo "<tr>";
                                                      echo "<td>".$no."</td>";
                                                      echo "<td>".$data1['namakeluarga']."</td>";
                                                      echo "<td>".$data1['pekerjaanKeluarga']."</td>";
                                                      echo "<td>".$data1['penghasilan']."</td>";
                                                      echo "<td>".$data1['statusKeluarga']."</td>";
                                                      echo "<td>".$data1['kondisiFisik']."</td>";
                                                      echo "<td>".$data1['riwayatPenyakit']."</td>";
                                                      echo "<tr>";
                                                    }
                                                ?>
                                        </tr>
                                        
                                </table>
                                <form action="proses_UbahPengajuanA.php?idVerif=<?php echo $idVerif; ?>" method="post" enctype="multipart/form-data">
                                <div class="col-md-6">
                                    <label class="control-label col-sm-8 mb-2"><strong>Verifikasi Supervisor:</strong></label>
                                    <input type="text" name="status" value="Proses" class="form-control" readonly>

                                </div>
                                 <div class="col-md-6">
                                    <label class="control-label col-sm-8 mb-2"><strong>Keterangan Supervisor:</strong></label>
                                    <textarea type="text" class="form-control" name="catatan" id="umum" required><?php echo $data['catatan'];?></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label col-sm-8 mb-2"><strong>Verifikasi Managemen:</strong></label>
                                    <input type="text" name="statusM" value="Proses" class="form-control" readonly>
                                </div>
                                 <div class="col-md-6">
                                    <label class="control-label col-sm-8 mb-2"><strong>Keterangan Managemen:</strong></label>
                                    <textarea type="text" class="form-control" name="catatanM" id="umum" required><?php echo $data['catatanM'];?></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label col-sm-8 mb-2"><strong>Verifikasi Admin:</strong></label>
                                    <input type="text" name="statusA" value="Proses" class="form-control" readonly>
                                </div>
                                 <div class="col-md-6">
                                    <label class="control-label col-sm-8 mb-2"><strong>Keterangan Admin:</strong></label>
                                    <textarea type="text" class="form-control" name="catatanA" id="umum" required><?php echo $data['catatanA'];?></textarea>
                                </div>
                                <div class="form-group ml-4">
                                    <button type="submit" name="btn_simpan" class="btn btn-success text-left ml-5">Simpan</button>
                                    <a href="dataPengajuanA.php" class="btn btn-success">Batal</a>
                                </div>
                              
                            </form>
                            </div>
                          
                      </div>
                      </div>

                           


                            
                                <div class="row">
                                    
                                    
                                </div>
</div>
                    </div>
                    <!--===================================================-->
                    <!--End page content-->
                </div>
                <!--===================================================-->
                <!--END CONTENT CONTAINER-->

                <!--MAIN NAVIGATION-->
                <!--===================================================-->
                <nav id="mainnav-container">
                    <div id="mainnav">
                        <!--Menu-->
                        <!--================================-->
                        <div id="mainnav-menu-wrap">
                            <div class="nano">
                                <div class="nano-content">
                                    <ul id="mainnav-menu" class="list-group">
                                        <!--Category name-->
                                        <li class="list-header">Navigation</li>
                                        <!--Menu list item-->
                                        <li>
                                            <a href="indexA.php">
                                            <i class="fa fa-home"></i>
                                            <span class="menu-title">Dashboard</span>
                                            
                                           
                                            </a>
                                            <!--Submenu-->
                                        </li>
                                        <!--Menu list item-->
                                        
                                        <li class="list-divider"></li>
                                        <!--Category name-->
                                        <li class="list-header">Components</li>
                                        <!--Menu list item-->
                                        
                                        <!--Menu list item-->
                                        <li>
                                            <a href="penilaianA.php">
                                            <i class="fa fa-check"></i>
                                            <span class="menu-title">
                                            <strong>Standart Penilaian</strong>
                                            </span>
                                            
                                            </a>
                                            
                                        </li>
                                        <li>
                                            <a href="#">
                                            <i class="fa fa-file"></i>
                                            <span class="menu-title">
                                            <strong>Pengajuan</strong>
                                            </span>
                                            <i class="arrow"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="dataPengajuanA.php"><i class="fa fa-caret-right"></i> Data Pengajuan </a></li>
                                                <li><a href="dataValidasiA.php"><i class="fa fa-caret-right"></i> Histori Validasi</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <i class="fa fa-database"></i>
                                            <span class="menu-title">
                                            <strong>Seleksi Data</strong>
                                            </span>
                                            <i class="arrow"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="tahap1A.php"><i class="fa fa-caret-right"></i> Lolos Tahap 1 </a></li>
                                                <li><a href="tahap2A.php"><i class="fa fa-caret-right"></i> Lolos Tahap 2 </a></li>
                                                <li><a href="hasilA.php"><i class="fa fa-caret-right"></i> Hasil Akhir </a></li>
                                            </ul>
                                        </li>
                                        <!--Menu list item-->
                                        <li>
                                            <a href="#">
                                                
                                            <i class="fa fa-dollar"></i>
                                            <span class="menu-title">Donasi</span>
                                            <i class="arrow"></i>
                                            </a>
                                            <!--Submenu-->
                                             <ul class="collapse">
                                                <li><a href="donasiUangA.php"><i class="fa fa-caret-right"></i> Donasi Uang </a></li>
                                                <li><a href="donasiLainA.php"><i class="fa fa-caret-right"></i> Donasi Lainnya </a></li>
                                            </ul>
                                        </li>
                                         <li>
                                            <a href="#">
                                            <i class="fa fa-table"></i>
                                            <span class="menu-title">
                                            <strong>Data Pending</strong>
                                            </span>
                                            <i class="arrow"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="dataPending1A.php"><i class="fa fa-caret-right"></i> Pending Tahap 1 </a></li>
                                                <li><a href="dataPending2A.php"><i class="fa fa-caret-right"></i> Pending Tahap 2 </a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <i class="fa fa-pencil"></i>
                                            <span class="menu-title">
                                            <strong>Absen</strong>
                                            </span>
                                            <i class="arrow"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="dataAbsenA.php"><i class="fa fa-caret-right"></i> Data Absen</a></li>
                                                
                                            </ul>
                                        </li>
             
                                        <!--Menu list item-->

                                        <!--Category name-->
                                        <li class="list-divider"></li>
                                        <!--Category name-->
                                        
                                        <!--Menu list item-->
                                        
                                        <!--Menu list item-->
                                        
                                    <!--Widget-->
                                    <!--================================-->
                                    
                                    <!--================================-->
                                    <!--End widget-->
                                </div>
                            </div>
                        </div>
                        <!--================================-->
                        <!--End menu-->
                    </div>
                </nav>
                <!--===================================================-->
                <!--END MAIN NAVIGATION-->
                <!--ASIDE-->
                <!--===================================================-->
                <aside id="aside-container">
                    <div id="aside">
                        <div class="nano">
                            <div class="nano-content">
                                <!--Nav tabs-->
                                <!--================================-->
                                <ul class="nav nav-tabs nav-justified">
                                    <li class="active">
                                        <a href="#demo-asd-tab-1" data-toggle="tab"> <i class="fa fa-comments"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#demo-asd-tab-3" data-toggle="tab"> <i class="fa fa-wrench"></i> </a>
                                    </li>
                                </ul>
                                <!--================================-->
                                <!--End nav tabs-->
                                <!-- Tabs Content Start-->
                                <!--================================-->
                                <div class="tab-content">
                                    <!--First tab (Contact list)-->
                                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                    <div class="tab-pane fade in active" id="demo-asd-tab-1">
                                        <h4 class="pad-hor text-thin"> Online Members (7) </h4>
                                        <div class="list-group bg-trans">
                                            <div class="list-group-item">
                                                <div class="pull-left avatar mar-rgt">
                                                <img src="img/av1.png" alt="" class="img-sm">
                                                <i class="on bottom text-light"></i>
                                                </div>
                                                <div class="inline-block">
                                                    <div class="text-small">John Knight</div>
                                                    <small class="text-mute">Available</small>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="pull-left avatar mar-rgt">
                                                <img src="img/av2.png" alt="" class="img-sm">
                                                <i class="on bottom text-light"></i>
                                                </div>
                                                <div class="inline-block pad-ver-5">
                                                    <div class="text-small">Jose Knight</div>
                                                    <small class="text-mute">Available</small>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="pull-left avatar mar-rgt">
                                                <img src="img/av3.png" alt="" class="img-sm">
                                                <i class="on bottom text-light"></i>
                                                </div>
                                                <div class="inline-block">
                                                    <div class="text-small">Roy Banks</div>
                                                    <small class="text-mute">Available</small>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="pull-left avatar mar-rgt">
                                                <img src="img/av7.png" alt="" class="img-sm">
                                                <i class="on bottom text-light"></i>
                                                </div>
                                                <div class="inline-block">
                                                    <div class="text-small">Steven Jordan</div>
                                                    <small class="text-mute">Available</small>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="pull-left avatar mar-rgt">
                                                <img src="img/av4.png" alt="" class="img-sm">
                                                <i class="on bottom text-light"></i>
                                                </div>
                                                <div class="inline-block">
                                                    <div class="text-small">Scott Owens</div>
                                                    <small class="text-mute">Available</small>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="pull-left avatar mar-rgt">
                                                <img src="img/av5.png" alt="" class="img-sm">
                                                <i class="on bottom text-light"></i>
                                                </div>
                                                <div class="inline-block">
                                                    <div class="text-small">Melissa Hunt</div>
                                                    <small class="text-mute">Available</small>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <h4 class="pad-hor text-thin"> Busy Members (4) </h4>
                                        <div class="list-group bg-trans">
                                            <div class="list-group-item">
                                                <div class="pull-left avatar mar-rgt">
                                                <img src="img/av1.png" alt="" class="img-sm">
                                                <i class="busy bottom text-light"></i>
                                                </div>
                                                <div class="inline-block">
                                                    <div class="text-small">John Knight</div>
                                                    <small class="text-mute">Available</small>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="pull-left avatar mar-rgt">
                                                <img src="img/av2.png" alt="" class="img-sm">
                                                <i class="busy bottom text-light"></i>
                                                </div>
                                                <div class="inline-block">
                                                    <div class="text-small">Jose Knight</div>
                                                    <small class="text-mute">Available</small>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="pull-left avatar mar-rgt">
                                                <img src="img/av3.png" alt="" class="img-sm">
                                                <i class="busy bottom text-light"></i>
                                                </div>
                                                <div class="inline-block">
                                                    <div class="text-small">Roy Banks</div>
                                                    <small class="text-mute">Available</small>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="pull-left avatar mar-rgt">
                                                <img src="img/av7.png" alt="" class="img-sm">
                                                <i class="busy bottom text-light"></i>
                                                </div>
                                                <div class="inline-block">
                                                    <div class="text-small">Steven Jordan</div>
                                                    <small class="text-mute">Available</small>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <h4 class="pad-hor text-thin"> Offline Members (4) </h4>
                                        <div class="list-group bg-trans">
                                            <div class="list-group-item">
                                                <div class="pull-left avatar mar-rgt">
                                                <img src="img/av1.png" alt="" class="img-sm">
                                                <i class="off bottom text-light"></i>
                                                </div>
                                                <div class="inline-block pad-ver-5">
                                                    <div class="text-small">John Knight</div>
                                                    <small class="text-mute">Available</small>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="pull-left avatar mar-rgt">
                                                <img src="img/av2.png" alt="" class="img-sm">
                                                <i class="off bottom text-light"></i>
                                                </div>
                                                <div class="inline-block pad-ver-5">
                                                    <div class="text-small">Jose Knight</div>
                                                    <small class="text-mute">Available</small>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="pull-left avatar mar-rgt">
                                                <img src="img/av3.png" alt="" class="img-sm">
                                                <i class="off bottom text-light"></i>
                                                </div>
                                                <div class="inline-block pad-ver-5">
                                                    <div class="text-small">Roy Banks</div>
                                                    <small class="text-mute">Available</small>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="pull-left avatar mar-rgt">
                                                <img src="img/av7.png" alt="" class="img-sm">
                                                <i class="off bottom text-light"></i>
                                                </div>
                                                <div class="inline-block">
                                                    <div class="text-small">Steven Jordan</div>
                                                    <small class="text-mute">Available</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                    <!--End first tab (Contact list)-->
                                    <!--Second tab (Settings)-->
                                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                    <div class="tab-pane fade" id="demo-asd-tab-3">
                                        <ul class="list-group bg-trans">
                                            <li class="list-header">
                                                <h4 class="text-thin">Account Settings</h4>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="pull-right">
                                                    <input class="demo-switch" type="checkbox" checked>
                                                </div>
                                                <p>Show my personal status</p>
                                                <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small> 
                                            </li>
                                            <li class="list-group-item">
                                                <div class="pull-right">
                                                    <input class="demo-switch" type="checkbox" checked>
                                                </div>
                                                <p>Show offline contact</p>
                                                <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small> 
                                            </li>
                                            <li class="list-group-item">
                                                <div class="pull-right">
                                                    <input class="demo-switch" type="checkbox">
                                                </div>
                                                <p>Invisible mode </p>
                                                <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small> 
                                            </li>
                                        </ul>
                                        <hr>
                                        <ul class="list-group bg-trans">
                                            <li class="list-header">
                                                <h4 class="text-thin">Public Settings</h4>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="pull-right">
                                                    <input class="demo-switch" type="checkbox" checked>
                                                </div>
                                                Online status 
                                            </li>
                                            <li class="list-group-item">
                                                <div class="pull-right">
                                                    <input class="demo-switch" type="checkbox">
                                                </div>
                                                Show offline contact 
                                            </li>
                                            <li class="list-group-item">
                                                <div class="pull-right">
                                                    <input class="demo-switch" type="checkbox" checked>
                                                </div>
                                                Show my device icon 
                                            </li>
                                        </ul>
                                        <hr>
                                        <h4 class="pad-hor text-thin">Task Progress</h4>
                                        <div class="pad-all">
                                            <p>Upgrade Progress</p>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar progress-bar-success" style="width: 15%;"><span class="sr-only">15%</span></div>
                                            </div>
                                            <small class="text-muted">15% Completed</small> 
                                        </div>
                                        <div class="pad-hor">
                                            <p>Database</p>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar progress-bar-danger" style="width: 75%;"><span class="sr-only">75%</span></div>
                                            </div>
                                            <small class="text-muted">17/23 Database</small> 
                                        </div>
                                    </div>
                                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                    <!--Second tab (Settings)-->
                                </div>
                                <!-- Tabs Content End -->
                                <!--================================-->
                            </div>
                        </div>
                    </div>
                </aside>
                <!--===================================================-->
                <!--END ASIDE-->
            </div>
            <!-- FOOTER -->
            <!--===================================================-->
            <footer id="footer">
                <!-- Visible when footer positions are fixed -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <div class="show-fixed pull-right">
                    <ul class="footer-list list-inline">
                        <li>
                            <p class="text-sm">SEO Proggres</p>
                            <div class="progress progress-sm progress-light-base">
                                <div style="width: 80%" class="progress-bar progress-bar-danger"></div>
                            </div>
                        </li>
                        <li>
                            <p class="text-sm">Online Tutorial</p>
                            <div class="progress progress-sm progress-light-base">
                                <div style="width: 80%" class="progress-bar progress-bar-primary"></div>
                            </div>
                        </li>
                        <li>
                            <button class="btn btn-sm btn-dark btn-active-success">Checkout</button>
                        </li>
                    </ul>
                </div>
                <!-- Visible when footer positions are static -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <div class="hide-fixed pull-right pad-rgt">Universitas Trunojoyo Madura</div>
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <!-- Remove the class name "show-fixed" and "hide-fixed" to make the content always appears. -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <p class="pad-lft">&#0169; 2023 Almaas Sosial</p>
            </footer>
            <!--===================================================-->
            <!-- END FOOTER -->
            <!-- SCROLL TOP BUTTON -->
            <!--===================================================-->
            <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
            <!--===================================================-->
        </div>
        <!--===================================================-->
        <!-- END OF CONTAINER -->
        <!--JAVASCRIPT-->
        <!--=================================================-->
        <!--jQuery [ REQUIRED ]-->
              <script>

        $("#kendaraan").change(function(){
            // variabel dari nilai combo box kendaraan
            var id_kendaraan = $("#kendaraan").val();

            // Menggunakan ajax untuk mengirim dan dan menerima data dari server
            $.ajax({
                type: "POST",
                dataType: "html",
                url: "ambil-data.php",
                data: "kendaraan="+id_kendaraan,
                success: function(data){
                   $("#merk").html(data);
                }
            });
        });

        $("#merk").change(function(){
            // variabel dari nilai combo box merk
            var id_merk = $("#merk").val();

            // Menggunakan ajax untuk mengirim dan dan menerima data dari server
            $.ajax({
                type: "POST",
                dataType: "html",
                url: "ambil-data.php",
                data: "merk="+id_merk,
                success: function(data){
                    $("#tipe").html(data);
                }
            });
        });

        $("#tipe").change(function(){
            // variabel dari nilai combo box merk
            var id_tipe = $("#tipe").val();

            // Menggunakan ajax untuk mengirim dan dan menerima data dari server
            $.ajax({
                type: "POST",
                dataType: "html",
                url: "ambil-data.php",
                data: "tipe="+id_tipe,
                success: function(data){
                    $("#ide").html(data);
                }
            });
        });
        $("#kendaraan2").change(function(){
            // variabel dari nilai combo box kendaraan
            var id_kendaraan = $("#kendaraan2").val();

            // Menggunakan ajax untuk mengirim dan dan menerima data dari server
            $.ajax({
                type: "POST",
                dataType: "html",
                url: "ambil-data.php",
                data: "kendaraan2="+id_kendaraan,
                success: function(data){
                   $("#merk2").html(data);
                }
            });
        });

        $("#merk2").change(function(){
            // variabel dari nilai combo box merk
            var id_merk = $("#merk2").val();

            // Menggunakan ajax untuk mengirim dan dan menerima data dari server
            $.ajax({
                type: "POST",
                dataType: "html",
                url: "ambil-data.php",
                data: "merk2="+id_merk,
                success: function(data){
                    $("#tipe2").html(data);
                }
            });
        });

        $("#tipe2").change(function(){
            // variabel dari nilai combo box merk
            var id_tipe = $("#tipe2").val();

            // Menggunakan ajax untuk mengirim dan dan menerima data dari server
            $.ajax({
                type: "POST",
                dataType: "html",
                url: "ambil-data.php",
                data: "tipe2="+id_tipe,
                success: function(data){
                    $("#ide2").html(data);
                }
            });
        });

    </script>
        <script src="js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
        <!--BootstrapJS [ RECOMMENDED ]-->
        <script src="js/bootstrap.min.js"></script>
        <!--Fast Click [ OPTIONAL ]-->
        <script src="plugins/fast-click/fastclick.min.js"></script>
        <!--Jasmine Admin [ RECOMMENDED ]-->
        <script src="js/scripts.js"></script>
        <!--Switchery [ OPTIONAL ]-->
        <script src="plugins/switchery/switchery.min.js"></script>
        <!--Jquery Steps [ OPTIONAL ]-->
        <script src="plugins/parsley/parsley.min.js"></script>
        <!--Jquery Steps [ OPTIONAL ]-->
        <script src="plugins/jquery-steps/jquery-steps.min.js"></script>
        <!--Bootstrap Select [ OPTIONAL ]-->
        <script src="plugins/bootstrap-select/bootstrap-select.min.js"></script>
        <!--Bootstrap Wizard [ OPTIONAL ]-->
        <script src="plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
        <!--Masked Input [ OPTIONAL ]-->
        <script src="plugins/masked-input/bootstrap-inputmask.min.js"></script>
        <!--Bootstrap Validator [ OPTIONAL ]-->
        <script src="plugins/bootstrap-validator/bootstrapValidator.min.js"></script>
        <!--jvectormap [ OPTIONAL ]-->
        <script src="plugins/jvectormap/jquery-jvectormap.min.js"></script>
        <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!--Flot Chart [ OPTIONAL ]-->
        <script src="plugins/flot-charts/jquery.flot.min.js"></script>
        <script src="plugins/flot-charts/jquery.flot.resize.min.js"></script>
        <!--Flot Order Bars Chart [ OPTIONAL ]-->
        <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
        <!--Fullscreen jQuery [ OPTIONAL ]-->
        <script src="plugins/screenfull/screenfull.js"></script>
        <!--Form Wizard [ SAMPLE ]-->
        <script src="js/demo/dashboard-v2.js"></script>
        <!--Form Wizard [ SAMPLE ]-->
        <script src="js/demo/wizard.js"></script>
        <!--Demo script [ DEMONSTRATION ]-->
        <script src="js/demo/jasmine.js"></script>
        <!--Form Wizard [ SAMPLE ]-->
        <script src="js/demo/form-wizard.js"></script>
    </body>
</html>