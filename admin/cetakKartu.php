<?php
include "koneksi.php";
    error_reporting(0);
    if($_SESSION['level']=="admin"){
        header("location:admin/index.php?pesan=berhasil");
    }
?>
<!DOCTYPE html>
<html>
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
<body>
    
<center><br>
<center><b>LAPORAN SISTEM ALMAAS SOSIAL</center>
<center><b>DATA PENGAJUAN</center>
<hr><width="100" height="75"></hr>
<center>
    <h2>Data Pengajuan</h2>
</center>
<?php
include 'koneksi.php';
?>

          <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex" style="background-image: url(admin/img/bgg.jpg);  margin-bottom: 60px; text-align:left;">
                        <div class="img" style="background-image: url(admin/img/beras.png); background-color: #003300;">
                            <h2 style="font-size:50px; text-align:center; font-family: comic sans ms; margin-top:20px">ALmaas Sosial</h2>
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <a href="index.php">
                                        <h3 class="mb-2"><i class="fa-sharp fa-solid fa-circle-left"></i></h3>
                                    </a>
                                </div>
                            </div>

                            <div class="d-flex">
                                <div class="w-100">
                                    <center><img src="assets/img/tulis.png">
                                    <h3 class="mb-4" style="font-family: times new roman;">Sign In Sosial</h3>
                                </div>
                            </div>
                            <div>
                                <form action="proseslogin.php" method="POST" class="signin-form">
                                    <div class="form-group mb-3">
                                        <label class="label">Username:</label>
                                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="label" for="password">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    <!-- <div class="form-group">
                                        <button type="submit" name="sigin" class="form-control btn btn-primary rounded submit px-3" style="width: 50%;">Sign In</button>
                                        <button type="submit" name="back" class="form-control btn btn-primary rounded submit px-3"><a data-toggle="tab" href="index.php" style="color: white; width: 50%;">Back</a></button>
                                    </div> -->
                                    <div class="col-lg-12">
                                    <button type="submit" name="sigin" class="form-control btn btn-primary rounded submit px-3" style="width: 50%;">Sign In</button>
                                    </div>

                                    <div class="form-group d-md-flex">
                                </form>
                                
                            </div>

                        </div>

                    </div>
                </div>
      </div>
    </div>
       <footer id="footer">
                
                <!-- Visible when footer positions are fixed -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <div class="show-fixed pull-right">

                </div>
                <!-- Visible when footer positions are static -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <div class="hide-fixed pull-right pad-rgt">Universitas Trunojoyo Madura</div>
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <!-- Remove the class name "show-fixed" and "hide-fixed" to make the content always appears. -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <p class="pad-lft">&#0169; 2023 Almaas Sosial</p>
            </footer>
        <script>
        window.print();
       </script>
                   
</body>

</html>