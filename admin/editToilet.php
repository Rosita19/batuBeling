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
        <script>

 
        window.onload=function(){
            $('#datepicker').on('change', function() {
                var dob = new Date(this.value);
                var today = new Date();
                var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
                $('#umur').val(age);
            });
        }
 
    </script>
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
                            <h3 class="panel-title mb-5">Edit Gambar</h3>
                            <?php
                                include "koneksi.php";

                                $idPengajuan = $_GET['idPengajuan'];

                                $query = "SELECT *FROM pengajuan WHERE idPengajuan = '".$idPengajuan."'";
                                $sql = mysqli_query($konek, $query);
                                $data = mysqli_fetch_array($sql); 
                            ?>
                            
    <form action="prosesEditKTP.php?idPengajuan=<?php echo $idPengajuan; ?>"  method="post" enctype="multipart/form-data">  
    
      <div style="width: 95%; height: 300px; border-radius: 5px; padding:20px; margin:20px" >
        <div>
            <h3 style="font-size: 20px;">Data Diri</h3>
        </div>
          <hr>
          

          <div class="row g-4">
          <div class="col-md-6">
                <label class="control-label col-sm-8 mb-2"><strong>Gambar KTP:</strong></label>
                <?php echo "<img style='width: 450px; height: 350px; align: center;' src='../admin/gambar/$data[nama5]' />";?>
            </div>
          <div class="col-md-4">
                <label class="control-label col-sm-8 mb-2"><strong>Ubah Foto KTP (PNG/JPG) :</strong></label>
                <input type="file" name="gambar" class="file" required>
            </div>
          
            <div class="col-sm-12 mt-5" style="margin-top:15px;">
                     <div class="form-group ml-4">
                        <button type="submit" name="btn_simpan" class="btn btn-success text-left ml-5">Simpan</button>
                        <a href="tahap1A.php" class="btn btn-success">Batal</a>
                        
                      </div>
                  </div>
        </div> 
    </div>
    </form>
    

            
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

        function konfirmasi(){
            konfirmasi=confirm("Apakah anda yakin ingin menghapus gambar ini?")
            document.writeln(konfirmasi)
            }

            $(document).on("click", "#pilih_gambar", function() {
            var file = $(this).parents().find(".file");
            file.trigger("click");
            });

            $('input[type="file"]').change(function(e) {
            var fileName = e.target.files[0].name;
            $("#file").val(fileName);

            var reader = new FileReader();
            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                document.getElementById("preview").src = e.target.result;
            };

            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
            });

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