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
                                <?php
        include "koneksi.php";

        $idPengajuan = $_GET['idPengajuan'];

        $query = "SELECT *FROM verifikasi WHERE idPengajuan = '".$idPengajuan."'";
        $sql = mysqli_query($konek, $query);
        $data = mysqli_fetch_array($sql); 
    ?> 
    <div class="row" style="margin-left: 200px;">
            <div class="col-md-12 ">
            <div class="col-md-4">
                <div class="depan">
                <?php echo "<img src='gambar/$data[nama2]'; class='poto'/>";?>
                </div>
            </div>
            <div class="col-md-6">
                <table style="margin-top:210px; margin-left: 40px; color:white; font-size: 16px;">
                    <tr>
                        <th>Nama&nbsp;&nbsp;</th>
                        <td>:</td>
                        <td style="margin-top:50px"><?= $data['namaPengaju']?></td>
                    </tr>
                     <tr>
                        <th>NIK</th>
                        <td>:</td>
                        <td style="margin-top:50px"><?= $data['nik']?></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td></td>
                        <td style="margin-top:50px">&nbsp<?= $data['alamatD']?></td>
                    </tr>
                </table>
            </div>
               
        </div>
        <div class="col-md-12" style="margin-top:20px">
            <div class="col-md-5">
                <img src="img/belakanggratis.jpeg" alt="" class="belakang">
        
            </div>
        </div>
    </div>

        <script>
        window.print();
       </script>
                   
</body>

</html>