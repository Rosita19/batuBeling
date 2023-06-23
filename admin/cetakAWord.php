<?php 
    // fungsi header dengan mengirimkan raw data excel
    header("Content-type: application/msword");
     
    // membuat nama file ekspor "export-to-excel.xls"
    header("Content-Disposition: attachment; filename=export-to-word.doc");
     
    // tambahkan table
include 'koneksi.php';
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
                                <?php
                                    include "koneksi.php";

                                    $idPengajuan = $_GET['idPengajuan'];

                                    $query = "SELECT *FROM pengajuan WHERE idPengajuan = '".$idPengajuan."'";
                                    $sql = mysqli_query($konek, $query);
                                    $data = mysqli_fetch_array($sql); 
                                ?>    
                                <center><br>
                                
                                <center><b><h2>DETAIL DATA PENGAJUAN </h2></center>
                                <hr><width="100" height="75"></hr>
                                <center>
                                    <h2>Data Pengajuan <?php echo $data['namaPengaju'];?></h2>
                                </center>
                               
                                <table border="1" class="table table-striped" id="table1" > 
                                        <tr class="text-center"cellspa>
                                            <td colspan="4" style="background-color: green; color: white;"><strong>Data Diri</strong></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"><?php echo $data['nama'];?></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Nama Sang Pengaju :</td>
                                            <td><?php echo $data['namaPengaju'];?></td>
                                            <td>Jenis Kelamin :</td>
                                            <td><?php echo $data['jk'];?></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Tanggal Lahir:</td>
                                            <td><?php echo $data['tglLahir'];?></td>
                                            <td>Usia :</td>
                                            <td><?php echo $data['usia'];?></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Agama:</td>
                                            <td><?php echo $data['agama'];?></td>
                                            <td>Status Pernikahan :</td>
                                            <td><?php echo $data['statusPernikahan'];?></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>No Telepon (Wa):</td>
                                            <td><?php echo $data['noWa'];?></td>
                                            <td>Pekerjaan :</td>
                                            <td><?php echo $data['pekerjaan'];?></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Kondisi Fisik:</td>
                                            <td><?php echo $data['fisik'];?></td>
                                            <td>Riwayat Penyakit :</td>
                                            <td><?php echo $data['penyakit'];?></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Kesulitan Yang Dialami:</td>
                                            <td><?php echo $data['kesulitan'];?></td>
                                            <td>Alasan Diajukan :</td>
                                            <td><?php echo $data['alasan'];?></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Keterangan:</td>
                                            <td><?php echo $data['ket'];?></td>
                                            <td>Yang Mengajukan:</td>
                                            <td><?php echo $data['pengaju'];?></td>
                                        </tr>
                                        <tr class="text-center"cellspa>
                                            <td colspan="4" style="background-color: green; color: white;"><strong>Alamat Lengkap</strong></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Nama Kepala Keluarga:</td>
                                            <td><?php echo $data['kepalaKeluarga'];?></td>
                                            <td>Jenis KK :</td>
                                            <td><?php echo $data['jenisKK'];?></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>NIK:</td>
                                            <td><?php echo $data['nik'];?></td>
                                            <td>Jumlah KK dalam satu rumah :</td>
                                            <td><?php echo $data['jumlahKK'];?></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Jumlah anggota keluarga dalam serumah:</td>
                                            <td><?php echo $data['jumlahAnggota'];?></td>
                                            <td>Alamat KK :</td>
                                            <td><?php echo $data['alamatK'];?></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>RT KK:</td>
                                            <td><?php echo $data['rtK'];?></td>
                                            <td>RW KK:</td>
                                            <td><?php echo $data['rwK'];?></td>
                                        </tr>
                                        <tr cellspa>
                                            <?php
                                                include "koneksi.php";
                                                $provinsi = $data['provinsiK'];
                                                $quer = "select *from provinces where id = '$provinsi'";
                                                $sq = mysqli_query($konek, $quer);
                                                $provinsiK = mysqli_fetch_assoc($sq);

                                            ?>
                                            <td>Provinsi KK:</td>
                                            <td><?php echo $provinsiK['name'];?></td>
                                            <?php
                                                include "koneksi.php";
                                                $kabupaten = $data['kabupatenK'];
                                                $quer1 = "select *from regencies where id = '$kabupaten'";
                                                $sq1 = mysqli_query($konek, $quer1);
                                                $kabupatenK = mysqli_fetch_assoc($sq1);

                                            ?>
                                            <td>Kabupaten KK:</td>
                                            <td><?php echo $kabupatenK['name'];?></td>
                                        </tr>
                                        <tr cellspa>
                                            <?php
                                                include "koneksi.php";
                                                $kecamatan = $data['kecamatanK'];
                                                $quer2 = "select *from districts where id = '$kecamatan'";
                                                $sq2 = mysqli_query($konek, $quer2);
                                                $kecamatanK = mysqli_fetch_assoc($sq2);

                                            ?>
                                            <td>Kecamatan KK:</td>
                                            <td><?php echo $kecamatanK['name'];?></td>
                                            <?php
                                                include "koneksi.php";
                                                $kelurahan = $data['kelurahanK'];
                                                $quer0 = "select *from villages where id = '$kelurahan'";
                                                $sq0 = mysqli_query($konek, $quer0);
                                                $kelurahanK = mysqli_fetch_assoc($sq0);

                                            ?>
                                            <td>Kelurahan KK :</td>
                                            <td><?php echo $kelurahanK['name'];?></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Alamat Domis:</td>
                                            <td><?php echo $data['alamatD'];?></td>
                                            <td>RT Domis:</td>
                                            <td><?php echo $data['rtD'];?></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>RW Domis:</td>
                                            <td><?php echo $data['rwD'];?></td>
                                            <?php
                                                include "koneksi.php";
                                                $provinsi1 = $data['provinsiD'];
                                                $quer3 = "select *from provinces where id = '$provinsi1'";
                                                $sq3 = mysqli_query($konek, $quer3);
                                                $provinsiD = mysqli_fetch_assoc($sq3);

                                            ?>
                                            <td>Provinsi Domis:</td>
                                            <td><?php echo $provinsiD['name'];?></td>
                                        </tr>
                                        <tr cellspa>
                                            <?php
                                                include "koneksi.php";
                                                $kabupaten1 = $data['kabupatenD'];
                                                $quer4 = "select *from regencies where id = '$kabupaten1'";
                                                $sq4 = mysqli_query($konek, $quer4);
                                                $kabupatenD = mysqli_fetch_assoc($sq4);

                                            ?>
                                            <td>Kabupaten Domis:</td>
                                            <td><?php echo $kabupatenD['name'];?></td>
                                            <?php
                                                include "koneksi.php";
                                                $kecamatan1 = $data['kecamatanD'];
                                                $quer5 = "select *from districts where id = '$kecamatan1'";
                                                $sq5 = mysqli_query($konek, $quer5);
                                                $kecamatanD = mysqli_fetch_assoc($sq5);

                                            ?>
                                            <td>Kecamatan Domis:</td>
                                            <td><?php echo $kecamatanD['name'];?></td>
                                        </tr>
                                        <tr cellspa>
                                            <?php
                                                include "koneksi.php";
                                                $kelurahan1 = $data['kelurahanD'];
                                                $quer6 = "select *from villages where id = '$kelurahan1'";
                                                $sq6 = mysqli_query($konek, $quer6);
                                                $kelurahanD = mysqli_fetch_assoc($sq6);

                                            ?>
                                            <td>Kelurahan Domis:</td>
                                            <td><?php echo $kelurahanD['name'];?></td>
                                            <td></td>
                                            <td></td>
                                        <tr class="text-center"cellspa>
                                            <td colspan="4" style="background-color: green; color: white;"><strong>Tempat Tinggal</strong></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Status Tempat Tinggal:</td>
                                            <td><?php echo $data['statusRumah'];?></td>
                                            <td>Wujud Tempat Tinggal :</td>
                                            <td><?php echo $data['wujud'];?></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Jenis Lantai:</td>
                                            <td><?php echo $data['jenisLantai'];?></td>
                                            <td>Jenis Tembok :</td>
                                            <td><?php echo $data['jenisTembok'];?></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Sumber Air:</td>
                                            <td><?php echo $data['sumberAir'];?></td>
                                            <td>Biaya Air :</td>
                                            <td><?php echo $data['biayaAir'];?></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Sumber Listrik:</td>
                                            <td><?php echo $data['sumberListrik'];?></td>
                                            <td>Biaya Listrik:</td>
                                            <td><?php echo $data['biayaListrik'];?></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Status Anak:</td>
                                            <td><?php echo $data['statusA'];?></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr class="text-center"cellspa>
                                            <td colspan="2" style="background-color: green; color: white;"><strong>Pengeluaran</strong></td>
                                            <td colspan="2" style="background-color: green; color: white;"><strong>Program Yang Diikuti</strong></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Makan Satu Hari:</td>
                                            <td><?php echo $data['makan'];?></td>
                                            <td>Program yang diikuti:</td>
                                            <td colspan="4"><?php echo $data['program'];?></td>
                                            
                                        </tr>
                                        <tr cellspa>
                                            <td>Pengeluaran Lainnya :</td>
                                            <td><?php echo $data['pengeluaran'];?></td>
                                        </tr>
                                       
                                        <tr class="text-center"cellspa>
                                            <td colspan="4" style="background-color: green; color: white;"><strong>Sumber Pemasukan Lain</strong></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Sumber Pemasukan:</td>
                                            <td colspan="4"><?php echo $data['sumberPemasukan'];?></td>
                                        </tr>
                                        <tr class="text-center"cellspa>
                                            <td colspan="4" style="background-color: green; color: white;"><strong>Kepemilikan Aset</strong></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Peralatan Listrik Terbesar:</td>
                                            <td><?php echo $data['alatListrik'];?></td>
                                            <td>Kepemilikan Hewan Ternak :</td>
                                            <td><?php echo $data['hewan'];?></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Kepemilikan Kendaraan:</td>
                                            <td><?php echo $data['tran'];?></td>
                                            <td>Kepemilikan Tanah :</td>
                                            <td><?php echo $data['tanah'];?></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Kepemilikan Usaha Sendiri/Bersama:</td>
                                            <td><?php echo $data['usaha'];?></td>
                                        </tr>
                                        
                                </table>

        <script>
        window.print();
       </script>
                   
</body>

</html>