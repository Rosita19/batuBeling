
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
        <script src="plugins/pace/pace.min.js"></script>
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
                     <div id="page-content">
                     <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Tabel Data </h3>
                            </div>

                            <!--Data Table-->
                            <!--===================================================-->

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table border="0" class="table" id="table1" style="text-align:center ;">
                                <?php
                                  include 'koneksi.php';
                                ?>

                                <div class="table-responsive">
                                    <table class="table table-bordered table-sm" id="dataTable" width="100%" style="margin-left: 30px; margin-right: 30px;">
                                    <thead>
                                        <tr class="text-center"cellspa>
                                            <th style="margin: 5px">Id Pengaju</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Agama</th>
                                            <th>Usia</th>
                                            <th>Jenis KK</th>
                                            <th>Alamat KK</th>
                                            <th>RT KK</th>
                                            <th>RW KK</th>
                                            <th>Kelurahan KK</th>
                                            <th>Kecamatan KK</th>
                                            <th>Alamat Domis</th>
                                            <th>RT Domis</th>
                                            <th>RW Domis</th>
                                            <th>Kelurahan Domis</th>
                                            <th>Kecamatan Domis</th>
                                            <th>Alasan</th>
                                            <th>Keterangan</th>
                                            <th>Pengaju</th>
                                            <th>Tanggal Pengajuan</th>
                                            <th>Status</th>
                                            <th colspan="2" class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php

                                    include "koneksi.php";

                                    $query = "SELECT * FROM pengajuan";
                                    $sql = mysqli_query($konek, $query);

                                    while($data = mysqli_fetch_array($sql)){
                                      echo "<tr>";
                                      echo "<td>".$data['idPengajuan']."</td>";
                                      echo "<td>".$data['namaPengaju']."</td>";
                                      echo "<td>".$data['jk']."</td>";
                                      echo "<td>".$data['tglLahir']."</td>";
                                      echo "<td>".$data['agama']."</td>";
                                      echo "<td>".$data['usia']."</td>";
                                      echo "<td>".$data['jenisKK']."</td>";
                                      echo "<td>".$data['alamatK']."</td>";
                                      echo "<td>".$data['rtK']."</td>";
                                      echo "<td>".$data['rwK']."</td>";
                                      echo "<td>".$data['kecamatanK']."</td>";
                                      echo "<td>".$data['kelurahanK']."</td>";
                                      echo "<td>".$data['alamatD']."</td>";
                                      echo "<td>".$data['rtD']."</td>";
                                      echo "<td>".$data['rwD']."</td>";
                                      echo "<td>".$data['kecamatanD']."</td>";
                                      echo "<td>".$data['kelurahanD']."</td>";
                                      echo "<td>".$data['alasan']."</td>";
                                      echo "<td>".$data['ket']."</td>";
                                      echo "<td>".$data['pengaju']."</td>";
                                      echo "<td>".$data['tglPengajuan']."</td>";
                                      echo "<td><a class='btn btn-primary fa fa-check'>".$data['status']."</a></td>";
                                      echo "<td><a class='btn btn-success fa fa-edit' href='prosesSurvey.php?idPengajuan=".$data['idPengajuan']."'> Proses</a></td>"; 
                                      echo "<tr>";   
                                  }?>

                                </table>
                                <div class="row" style="margin-bottom: 20px;">
                        
                                    <div class="col-lg-3">        
                                        <a href="cetakLaporan.php" class="btn btn-success" style="margin-left: 40px;"><i class="fa fa-print"></i> Laporan Rekapitulasi</a>
                                    </div>
                                    <div class="col-lg-3">        
                                        <a href="cetak.php" class="btn btn-success" style="margin-left: 40px;"><i class="fa fa-print"></i> Data Pengajuan</a>
                                    </div>
                                    <div class="col-lg-2">        
                                        <a href="cetakSurvey.php" class="btn btn-success" style="margin-left: 40px;"><i class="fa fa-print"></i> List Survey</a>
                                    </div>

            

                            <!--===================================================-->
                            <!--End Data Table-->
                        
                            <!--===================================================-->
                            <!--End Data Table-->
                        </div>

                    </div>
                    <!--Page content-->
                    <!--===================================================-->
                    <div id="page-content">
                     <div class="panel" style="padding-bottom: 20px;">
                        <div class="panel-heading">
                            <h3 class="panel-title mb-5">Input Data Survey</h3>
                            <?php
                                include "koneksi.php";

                                $idPengajuan = $_GET['idPengajuan'];

                                $query = "SELECT *FROM pengajuan WHERE idPengajuan = '".$idPengajuan."'";
                                $sql = mysqli_query($konek, $query);
                                $data = mysqli_fetch_array($sql); 
                            ?>
<form method="post" action="proses_UbahPengajuan.php?idPengajuan=<?php echo $idPengajuan; ?>" enctype="multipart/form-data">
            <div class="col-md-4">
                <label class="control-label col-sm-8 mb-2">Nama Pengaju:</label>
                <input type="text" class="form-control" name="namaPengaju" value="<?php echo $data['namaPengaju'];?>">
            </div>
            <div class="col-md-4">
                <label class="control-label col-sm-8 mb-2">Jenis Kelamin:</label>
                <select class="form-control" name="jk" value="<?php echo $data['jk'];?>"> 
                    <option>Pilih Jenis Kelamin</option>
                    <option value="Laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="control-label col-sm-8 mb-2">Tanggal Lahir:</label>
                <input type="date" class="form-control" name="tglLahir" id="umum" required>
            </div>
            <div class="col-md-4">
                <label class="control-label col-sm-8 mb-2">Usia:</label>
                <input type="text" class="form-control" name="usia" id="umum" value="<?php echo $data['usia'];?>" required>
            </div>
            <div class="col-md-4">
                <label class="control-label col-sm-8 mb-2">Agama:</label>
                <input type="text" class="form-control" name="agama" id="umum" value="<?php echo $data['agama'];?>" required>
            </div>
            <div class="col-md-4">
                <label class="control-label col-sm-8 mb-2">Jenis KK:</label>
                <select class="form-control" name="jenisKK" value="<?php echo $data['jenisKK'];?>"> 
                    <option>Pilih Jenis KK</option>
                    <option value="tinggal">Tempat Tinggal</option>
                    <option value="domisili">Domisili</option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="control-label col-sm-8 mb-2">Alamat kartu keluarga:</label>
                <textarea type="text" class="form-control" name="alamatK" id="umum" required><?php echo $data['alamatK'];?></textarea>
            </div>
            <div class="col-md-2">
                <label class="control-label col-sm-10 mb-2">RT KK:</label>
                <input type="text" class="form-control" name="rtK" id="umum" value="<?php echo $data['rtK'];?>" required>
            </div>
            <div class="col-md-2">
                <label class="control-label col-sm-12 mb-2">RW KK:</label>
                <input type="text" class="form-control" name="rwK" id="umum" value="<?php echo $data['rwK'];?>" required>
            </div>
            <div class="col-md-4">
                <label class="control-label col-sm-12 mb-2">Provinsi kartu keluarga:</label>
                <input type="text" class="form-control" name="provinsiK" id="umum" value="<?php echo $data['provinsiK'];?>" required>
            </div>
            <div class="col-md-4">
                <label class="control-label col-sm-12 mb-2">Kabupaten/Kota kartu keluarga:</label>
                <input class="form-control" name="kabupatenK" id="umum" value="<?php echo $data['kabupatenK'];?>" required>
            </div>
            <div class="col-md-4">
                <label class="control-label col-sm-12 mb-2">Kecamatan kartu keluarga:</label>
                <input class="form-control" name="kecamatanK" id="umum" value="<?php echo $data['kecamatanK'];?>" required>
            </div>
            <div class="col-md-4">
                <label class="control-label col-sm-12 mb-2">Kelurahan kartu keluarga:</label>
                <input class="form-control" name="kelurahanK" id="umum" value="<?php echo $data['kelurahanK'];?>" required></textarea>
            </div>
                <div class="col-md-4">
                <label class="control-label col-sm-8 mb-2">Alamat Domisili:</label>
                <textarea type="text" class="form-control" name="alamatD" id="umum"  required><?php echo $data['alamatD'];?></textarea>
            </div>
            <div class="col-md-2">
                <label class="control-label col-sm-10 mb-2">RT Domisili:</label>
                <input type="text" class="form-control" name="rtD" value="<?php echo $data['rtD'];?>" id="umum" required>
            </div>
            <div class="col-md-2">
                <label class="control-label col-sm-12 mb-2">RW Domisili:</label>
                <input type="text" class="form-control" name="rwD" value="<?php echo $data['rwD'];?>" id="umum" required>
            </div>
            <div class="col-md-4">
                <label class="control-label col-sm-12 mb-2">Provinsi Domisili:</label>
                <input type="text" class="form-control" name="provinsiD" id="umum" value="<?php echo $data['provinsiD'];?>" required>
            </div>
            <div class="col-md-4">
                <label class="control-label col-sm-12 mb-2">Kabupaten/Kota Domisili:</label>
                <input class="form-control" name="kabupatenD" id="umum" value="<?php echo $data['kabupatenD'];?>" required></textarea>
            </div>
            <div class="col-md-4">
                <label class="control-label col-sm-12 mb-2">Kecamatan Domisili:</label>
                <input class="form-control" name="kecamatanD" id="umum" value="<?php echo $data['kecamatanD'];?>" required>
            </div>
            <div class="col-md-4">
                <label class="control-label col-sm-12 mb-2">Kelurahan Domisili:</label>
                <input class="form-control" name="kelurahanD" id="umum" value="<?php echo $data['kelurahanD'];?>" required>
            </div>
            <div class="col-md-4">
                <label class="control-label col-sm-12 mb-2">Alasan Diajukan:</label>
                <textarea class="form-control" name="alasan" id="umum" required><?php echo $data['alasan'];?></textarea>
            </div>
            <div class="col-md-4">
                <label class="control-label col-sm-12 mb-2">Keterangan:</label>
                <textarea class="form-control" name="ket" id="umum" required><?php echo $data['ket'];?></textarea>
            </div>
            <div class="col-md-4">
                <label class="control-label col-sm-12 mb-2">Yang Mengajukan:</label>
                <input class="form-control" name="pengaju" id="umum" value="<?php echo $data['pengaju'];?>" required></textarea>
            </div>
            <div class="col-md-4">
                <label class="control-label col-sm-12 mb-2">Status:</label>
                <select class="form-control" name="status"> 
                    <option>Pilih Jenis Status</option>
                    <option value="Gratis">Gratis</option>
                    <option value="Menolak Ikut Pembelian">Menolak Ikut Pembelian</option>
                    <option value="Pembelian 50%">Pembelian 50%</option>
                    <option value="Telah Disurvey">Telah Disurvey</option>
                    <option value="Tidak ACC">Tidak ACC</option>
                    <option value="Wafat">Wafat</option>
                    <option value="Tidak ACC">Tidak ACC</option>
                </select>
            </div>
            <div class="col-sm-12">
                <br>
                <div class="form-group ml-4">
                    <button type="submit" name="btn_simpan" class="btn btn-success text-left ml-5">Simpan</button>
                    <a href="dataPengajuan.php" class="btn btn-success">Batal</a>
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
                                            <a href="indexAdmin.php">
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
                                            <a href="#">
                                            <i class="fa fa-file"></i>
                                            <span class="menu-title">
                                            <strong>Pengajuan</strong>
                                            </span>
                                            <i class="arrow"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="dataPengajuan.php"><i class="fa fa-caret-right"></i> Data Pengajuan </a></li>
                                            </ul>
                                        </li>
                                        <!--Menu list item-->
                                        <li>
                                            <a href="#">
                                            <i class="fa fa-briefcase"></i>
                                            <span class="menu-title">Survey</span>
                                            <i class="arrow"></i>
                                            </a>
                                            <!--Submenu-->
                                             <ul class="collapse">
                                                <li><a href="inputSurvey.php"><i class="fa fa-caret-right"></i> Input Survey </a></li>
                                                <li><a href="dataSurvey.php"><i class="fa fa-caret-right"></i> Data Survey </a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                
                                            <i class="fa fa-dollar"></i>
                                            <span class="menu-title">Donasi</span>
                                            <i class="arrow"></i>
                                            </a>
                                            <!--Submenu-->
                                             <ul class="collapse">
                                                <li><a href="donasiUang.php"><i class="fa fa-caret-right"></i> Donasi Uang </a></li>
                                                <li><a href="donasiLain.php"><i class="fa fa-caret-right"></i> Donasi Lainnya </a></li>
                                            </ul>
                                        </li>
                                        <!--Menu list item-->

                                        <!--Category name-->
                                        <li class="list-divider"></li>
                                        <!--Category name-->
                                        <li class="list-header">Ekstra</li>
                                        <!--Menu list item-->
                                        <li>
                                            <a href="#">
                                            <i class="fa fa-calendar"></i>
                                            <span class="menu-title">Cetak</span>
                                            <i class="arrow"></i>
                                            </a>
                                            <!--Submenu-->
                                             <ul class="collapse">
                                                <li><a href="Pelanggan.php"><i class="fa fa-caret-right"></i> Cetak Pelanggan 
                                                </a></li>
                                                <li><a href="Menu.php"><i class="fa fa-caret-right"></i> Cetak Menu
                                                </a></li>
                                                <li><a href="Pesanan.php"><i class="fa fa-caret-right"></i> Cetak Pesanan </a></li>
                                                <li><a href="Setor.php"><i class="fa fa-caret-right"></i> Cetak Stok 
                                                </a></li>
                                                <li><a href="rekap.php"><i class="fa fa-caret-right"></i> Cetak Transaksi </a></li>
                                                <li><a href="Petugas.php"><i class="fa fa-caret-right"></i> Cetak Petugas 
                                                </a></li>
                                            </ul>
                                        </li>
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