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
    <img src="img/atas.png" class="img-fluid">
<center><b>LAPORAN SISTEM ALMAAS SOSIAL</center>
<center><b>DATA PENGAJUAN</center>
<hr><width="100" height="75"></hr>
<center>
    <h2>Data Pengajuan</h2>
</center>
<?php
include 'koneksi.php';
?>

          <table cellpadding="5" cellspacing="0" border="1" width="100%">
            <tr>
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
                <th>Alamat Domis</th>
                <th>RT Domis</th>
                <th>RW Domis</th>
                <th>Alasan</th>
                <th>Keterangan</th>
                <th>Pengaju</th>
                <th>Tanggal Pengajuan</th>
                
                <th>Gambar</th>
            </tr>

            <?php
           $sql = mysqli_query($konek, "select *from pengajuan ");
           while($data = mysqli_fetch_array($sql)){
            ?>
            <tr>
            <td><?= $data['idPengajuan'] ?></td>
            <td><?= $data['namaPengaju']?></td>
            <td><?= $data['jk']?></td>
            <td><?= $data['tglLahir']?></td>
            <td><?= $data['agama']?></td>
            <td><?= $data['usia']?></td>
            <td><?= $data['jenisKK']?></td>
            <td><?= $data['alamatK']?></td>
            <td><?= $data['rtK']?></td>
            <td><?= $data['rwK']?></td>
            <td><?= $data['alamatD']?></td>
            <td><?= $data['rtD']?></td>
            <td><?= $data['rwD']?></td>
            <td><?= $data['alasan']?></td>
            <td><?= $data['ket']?></td>
            <td><?= $data['pengaju']?></td>
            <td><?= $data['tglPengajuan']?></td>
            
            <td><?php echo "<img src='../admin/gambar/$data[nama]' />";?></td></td>
            
            
            </tr>
              <?php
           }
           ?>
       </table>
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