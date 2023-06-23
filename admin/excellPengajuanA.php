<?php 
    // fungsi header dengan mengirimkan raw data excel
    header("Content-type: application/vnd-ms-excel");
     
    // membuat nama file ekspor "export-to-excel.xls"
    header("Content-Disposition: attachment; filename=export-to-excel.xls");
     
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
                                            <td colspan="4" style="background-color: green; color: white; font-size: 20px;"><strong>DATA DIRI</strong></td>
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
                                            <td>Penghasilan/Pemasukan:</td>
                                            <td><?php echo $data['hasilBulan'];?></td>
                                            <td>Nama Kepala Keluarga:</td>
                                            <td><?php echo $data['kepalaKeluarga'];?></td>
                                        </tr>
                                        <tr cellspa>
                                            
                                            <td>Jenis KK :</td>
                                            <td><?php echo $data['jenisKK'];?></td>
                                            <td>NIK:</td>
                                            <td><?php echo $data['nik'];?></td>
                                        </tr>
                                        <tr cellspa>
                                            
                                            <td>Jumlah KK dalam satu rumah :</td>
                                            <td><?php echo $data['jumlahKK'];?></td>
                                            <td>Jumlah anggota keluarga dalam serumah:</td>
                                            <td><?php echo $data['jumlahAnggota'];?></td>
                                        </tr>
                                        <tr cellspa>
                                            
                                            <td>Alamat KK :</td>
                                            <td><?php echo $data['alamatK'];?></td>
                                            <td>RT KK:</td>
                                            <td><?php echo $data['rtK'];?></td>
                                        </tr>
                                        <tr cellspa>
                                            
                                            <td>RW KK:</td>
                                            <td><?php echo $data['rwK'];?></td>
                                            <?php
                                                include "koneksi.php";
                                                $provinsi = $data['provinsiK'];
                                                $quer = "select *from provinces where id = '$provinsi'";
                                                $sq = mysqli_query($konek, $quer);
                                                $provinsiK = mysqli_fetch_assoc($sq);

                                            ?>
                                            <td>Provinsi KK:</td>
                                            <td><?php echo $provinsiK['name'];?></td>
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
                                            <td><?php echo $kabupatenK['name'];?></td>
                                            <?php
                                                include "koneksi.php";
                                                $kecamatan = $data['kecamatanK'];
                                                $quer2 = "select *from districts where id = '$kecamatan'";
                                                $sq2 = mysqli_query($konek, $quer2);
                                                $kecamatanK = mysqli_fetch_assoc($sq2);

                                            ?>
                                            <td>Kecamatan KK:</td>
                                            <td><?php echo $kecamatanK['name'];?></td>
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
                                            <td><?php echo $kelurahanK['name'];?></td>
                                            <td>Alamat Domis:</td>
                                            <td><?php echo $data['alamatD'];?></td>
                                        </tr>
                                        <tr cellspa>
                                            
                                            <td>RT Domis:</td>
                                            <td><?php echo $data['rtD'];?></td>
                                            <td>RW Domis:</td>
                                            <td><?php echo $data['rwD'];?></td>
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
                                            <td><?php echo $provinsiD['name'];?></td>
                                            <?php
                                                include "koneksi.php";
                                                $kabupaten1 = $data['kabupatenD'];
                                                $quer4 = "select *from regencies where id = '$kabupaten1'";
                                                $sq4 = mysqli_query($konek, $quer4);
                                                $kabupatenD = mysqli_fetch_assoc($sq4);

                                            ?>
                                            <td>Kabupaten Domis:</td>
                                            <td><?php echo $kabupatenD['name'];?></td>
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
                                            <td><?php echo $kecamatanD['name'];?></td>
                                            <?php
                                                include "koneksi.php";
                                                $kelurahan1 = $data['kelurahanD'];
                                                $quer6 = "select *from villages where id = '$kelurahan1'";
                                                $sq6 = mysqli_query($konek, $quer6);
                                                $kelurahanD = mysqli_fetch_assoc($sq6);

                                            ?>
                                            <td>Kelurahan Domis:</td>
                                            <td><?php echo $kelurahanD['name'];?></td>
                                        </tr>
                                        <tr class="text-center"cellspa>
                                            <td colspan="4" style="background-color: green; color: white; font-size: 20px;"><strong>KONDISI KESEHATAN</strong></td>
                                        </tr>
                                       
                                        <tr cellspa>
                                            <td>Kondisi Fisik:</td>
                                            <td><?php echo $data['fisik'];?></td>
                                            <td>Riwayat Penyakit :</td>
                                            <td><?php echo $data['penyakit'];?></td>
                                        </tr>
                                        <tr class="text-center"cellspa>
                                            <td colspan="4" style="background-color: green; color: white; font-size: 20px;"><strong>KETERANGAN LAIN</strong></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Alasan Diajukan :</td>
                                            <td><?php echo $data['alasan'];?></td>
                                            <td>Keterangan:</td>
                                            <td><?php echo $data['ket'];?></td>
                                            
                                            
                                        </tr>
                                        <tr cellspa>
                                            
                                            <td>Yang Mengajukan:</td>
                                            <td><?php echo $data['pengaju'];?></td>
                                            <td>Kesulitan Yang Dialami:</td>
                                            <td><?php echo $data['kesulitan'];?></td>
                                        </tr>
                                        <tr class="text-center"cellspa>
                                            <td colspan="4" style="background-color: green; color: white; font-size: 20px;"><strong>STATUS TEMPAT TINGGAL</strong></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Status Tempat Tinggal:</td>
                                            <td><?php echo $data['statusRumah'];?></td>
                                            <td>Jenis Lantai:</td>
                                            <td><?php echo $data['jenisLantai'];?></td>
                                            
                                        </tr>
                                        <tr cellspa>
                                            
                                            <td>Jenis Tembok :</td>
                                            <td><?php echo $data['jenisTembok'];?></td>
                                            <td>Wujud Tempat Tinggal :</td>
                                            <td><?php echo $data['wujud'];?></td>
                                        </tr>
                                        <tr class="text-center"cellspa>
                                            <td colspan="4" style="background-color: green; color: white; font-size: 20px;"><strong>PENGELUARAN LAINNYA</strong></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Makan Satu Hari:</td>
                                            <td colspan="3"><?php echo $data['makan'];?></td>
                                            
                                            
                                        </tr>
                                        <tr cellspa>
                                            <td>Pengeluaran Lainnya :</td>
                                            <td><?php echo $data['pengeluaran'];?></td>
                                            <td>Penanggung Pengeluaran Bulanan:</td>
                                            <td><?php echo $data['pengeluaranBulanan'];?></td>
                                             
                                            
                                        </tr>
                                        <tr cellspa>
                                            <td>Sumber Air:</td>
                                            <td><?php echo $data['sumberAir'];?></td>
                                            
                                            <td>Biaya Air :</td>
                                            <td><?php echo $data['biayaAir'];?></td>
                                            
                                        </tr>
                                        <tr cellspa>
                                            <td>jenis Listrik:</td>
                                            <td><?php echo $data['sumberListrik'];?></td>
                                            <td>Biaya Listrik:</td>
                                            <td><?php echo $data['biayaListrik'];?></td>
                                        </tr>
                                        <tr class="text-center"cellspa>
                                            <td colspan="4" style="background-color: green; color: white; font-size: 20px;"><strong>SUMBER PEMASUKAN LAIN</strong></td>
                                        </tr>
                                        <tr cellspa>
                                            <td>Sumber Pemasukan:</td>
                                            <td colspan="3"><?php echo $data['sumberPemasukan'];?></td>
                                        </tr>
                                        <tr class="text-center"cellspa>
                                           
                                            <td colspan="4" style="background-color: green; color: white; font-size: 20px;"><strong>PROGRAM YANG DIIKUTI</strong></td>
                                        </tr>
                                        <tr cellspa>
                                            
                                            <td>Program yang diikuti:</td>
                                            <td colspan="3"><?php echo $data['program'];?></td>
                                            
                                        </tr>
                                    
                                       
                                        
                                        <tr class="text-center"cellspa>
                                            <td colspan="4" style="background-color: green; color: white; font-size: 20px;"><strong>KEPEMILIKAN ASET</strong></td>
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
                                        
                                        <tr class="text-center"cellspa>
                                            <td colspan="4" style="background-color: green; color: white; font-size: 20px;"><strong>DATA ANGGOTA KELUARGA</strong></td>

                                            <table border="1" class="table table-striped" id="table1" > 
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
                                
                                        
                                </table>

        <script>
        window.print();
       </script>
                   
</body>

