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
                                <div class="table-responsive">
                                <?php

                                include "koneksi.php";

                                $idVerif = $_GET['idVerif'];

                                $query = "SELECT *from histori_verifikasi ORDER BY id_historiverif desc limit 1";
                                $sql = mysqli_query($konek, $query);
                                $data = mysqli_fetch_array($sql); 
   
                                    // $idPengajuan = $_GET['idPengajuan'];

                                    // $query = "SELECT *from histori_pengajuan order by id_historiPengajuan DESC limit 1";
                                    // $sql = mysqli_query($konek, $query);
                                    // $data = mysqli_fetch_assoc($sql); 
                                ?>
                            
                                    <br>
                        <form action="" method="post" enctype="multipart/form-data"> 
                                    <div class="col-md-6">
                                        <label class="control-label col-sm-8 mb-2"><strong>id Verif:</strong></label>
                                        <input type="text" class="form-control" name="idVerif" id="umum" value="<?php echo $data['idVerif'];?>" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label col-sm-8 mb-2"><strong>id Pengajuan:</strong></label>
                                        <input type="text" class="form-control" name="idPengajuan" id="umum" value="<?php echo $data['idPengajuan'];?>" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label col-sm-8 mb-2"><strong>Nama Pengaju:</strong></label>
                                        <input type="text" class="form-control" name="namaPengaju" id="umum" value="<?php echo $data['namaPengaju'];?>" required>
                                    </div>
                                     <div class="col-md-6">
                                        <label class="control-label col-sm-8 mb-2"><strong>Jenis Kelamin:</strong></label>
                                        <input type="text" class="form-control" name="jk" id="umum" value="<?php echo $data['jk'];?>" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label col-sm-8 mb-2"><strong>NIK:</strong></label>
                                        <input type="text" class="form-control" name="jk" id="umum" value="<?php echo $data['nik'];?>" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label col-sm-8 mb-2"><strong>Yang Mengajukan:</strong></label>
                                        <input type="text" class="form-control" name="jk" id="umum" value="<?php echo $data['pengaju'];?>" required>
                                    </div>

                                    
                                    <table border="0" class="table table-striped" id="table1" > 
                                        <tr class="text-center"cellspa style="background-color:#009900; color:white;">
                                            <td colspan="6" style="background-color: green; color: white;"><strong>Data Diri</strong></td>
                                        </tr>
                                        <tr class="text-center"cellspa style="background-color:#ccffcc; color:black">
                                            <td><strong>identitas</strong></td>
                                            <td><strong>data lama</strong></td>
                                            <td><strong>data baru</strong></td>
                                            <td><strong>identitas</strong></td>
                                            <td><strong>data lama</strong></td>
                                            <td><strong>data baru</strong></td>
                                        </tr>
                                        <tr cellspa>
                                            <th>Tanggal Verif </th>
                                            <td class="text-center"><?php echo $data['tglVerif'];?></td>
                                            <td class="text-center"><?php echo $data['tglVerif_baru'];?></td>
                                            <th>Nama Surveyor </th>
                                            <td class="text-center"><?php echo $data['namaSurveyor'];?></td>
                                            <td class="text-center"><?php echo $data['namaSurveyor_baru'];?></td>    
                                        </tr>
                                        <tr cellspa>
                                            <th>Nama Admin </th>
                                            <td class="text-center"><?php echo $data['namaAdmin'];?></td>

                                            <td class="text-center"><?php echo $data['namaAdmin_baru'];?></td>
                                            <th>Tanggal Lahir </th>
                                            <td class="text-center"><?php echo $data['tglLahir'];?></td>

                                            <td class="text-center"><?php echo $data['tglLahir_baru'];?></td>
                                            
                                        </tr>
                                        <tr cellspa>
                                            <th>Usia </th>
                                            <td class="text-center"><?php echo $data['usia'];?></td>

                                            <td class="text-center"><?php echo $data['usia_baru'];?></td>
                                            <th>Agama </th>
                                            <td class="text-center"><?php echo $data['agama'];?></td>

                                            <td class="text-center"><?php echo $data['agama_baru'];?></td>
                                            
                                            
                                        </tr>
                                        <tr cellspa>
                                            <th>Status Pernikahan </th>
                                            <td class="text-center"><?php echo $data['statusPernikahan'];?></td>

                                            <td class="text-center"><?php echo $data['statusPernikahan_baru'];?></td>
                                            <th>No Telepon Wa </th>
                                            <td class="text-center"><?php echo $data['noWa'];?></td>

                                            <td class="text-center"><?php echo $data['noWa_baru'];?></td>
                                            
                                            
                                        </tr>
                                        <tr cellspa>
                                            <th>Pekerjaan </th>
                                            <td class="text-center"><?php echo $data['pekerjaan'];?></td>

                                            <td class="text-center"><?php echo $data['pekerjaan_baru'];?></td>
                                            <th>Penghasilan/Bulan</th>
                                            <td class="text-center"><?php echo $data['hasilBulan'];?></td>

                                            <td class="text-center"><?php echo $data['hasilBulan_baru'];?></td>
                                            
                                            
                                            
                                        </tr>
                                        <tr cellspa>
                                            <th>Kepala Keluarga </th>
                                            <td class="text-center"><?php echo $data['kepalaKeluarga'];?></td>

                                            <td class="text-center"><?php echo $data['kepalaKeluarga_baru'];?></td>
                                            <th>Jenis KK </th>
                                            <td class="text-center"><?php echo $data['jenisKK'];?></td>

                                            <td class="text-center"><?php echo $data['jenisKK_baru'];?></td>
                                            
                                        </tr>
                                        <tr cellspa>
                                            <th>Jumlah KK </th>
                                            <td class="text-center"><?php echo $data['jumlahKK'];?></td>

                                            <td class="text-center"><?php echo $data['jumlahKK_baru'];?></td>
                                            <th>Jumlah Anggota </th>
                                            <td class="text-center"><?php echo $data['jumlahAnggota'];?></td>

                                            <td class="text-center"><?php echo $data['jumlahAnggota_baru'];?></td>
                                            
                                        </tr>
                                        <tr cellspa>
                                            <th>Alamat KK </th>
                                            <td class="text-center"><?php echo $data['alamatK'];?></td>

                                            <td class="text-center"><?php echo $data['alamatK_baru'];?></td>
                                            <th>RT KK </th>
                                            <td class="text-center"><?php echo $data['rtK'];?></td>

                                            <td class="text-center"><?php echo $data['rtK_baru'];?></td>
                                            
                                        </tr>
                                        
                                        <tr cellspa>
                                            <th>RW KK </th>
                                            <td class="text-center"><?php echo $data['rwK'];?></td>

                                            <td class="text-center"><?php echo $data['rwK_baru'];?></td>
                                            <th>Provinsi KK </th>
                                            <td class="text-center"><?php echo $data['provinsiK'];?></td>

                                            <td class="text-center"><?php echo $data['provinsiK_baru'];?></td>
                                            
                                        </tr>
                                        <tr cellspa>
                                            <th>Kabupaten KK </th>
                                            <td class="text-center"><?php echo $data['kabupatenK'];?></td>

                                            <td class="text-center"><?php echo $data['kabupatenK_baru'];?></td>
                                            <th>Kecamatan Domis </th>
                                            <td class="text-center"><?php echo $data['kecamatanK'];?></td>

                                            <td class="text-center"><?php echo $data['kecamatanK_baru'];?></td>
                                            
                                        </tr>
                                        <tr cellspa>
                                            <th>Keluarahan KK </th>
                                            <td class="text-center"><?php echo $data['kelurahanK'];?></td>

                                            <td class="text-center"><?php echo $data['kelurahanK_baru'];?></td>
                                            <th>Alamat Domis </th>
                                            <td class="text-center"><?php echo $data['alamatD'];?></td>

                                            <td class="text-center"><?php echo $data['alamatD_baru'];?></td>
                                            
                                            
                                        </tr>
                                        <tr cellspa>
                                            <th>RT Domis </th>
                                            <td class="text-center"><?php echo $data['rtD'];?></td>

                                            <td class="text-center"><?php echo $data['rtD_baru'];?></td>
                                            <th>RW Domis </th>
                                            <td class="text-center"><?php echo $data['rwD'];?></td>

                                            <td class="text-center"><?php echo $data['rwD_baru'];?></td>
                                            
                                            
                                        </tr>
                                        <tr cellspa>
                                            <th>Provinsi Domis </th>
                                            <td class="text-center"><?php echo $data['provinsiD'];?></td>

                                            <td class="text-center"><?php echo $data['provinsiD_baru'];?></td>
                                            <th>Kabupaten Domis </th>
                                            <td class="text-center"><?php echo $data['kabupatenD'];?></td>

                                            <td class="text-center"><?php echo $data['kabupatenD_baru'];?></td>
                                            
                                            
                                        </tr>
                                        <tr cellspa>
                                            <th>Kecamatan Domis </th>
                                            <td class="text-center"><?php echo $data['kecamatanD'];?></td>

                                            <td class="text-center"><?php echo $data['kecamatanD_baru'];?></td>
                                            <th>Kelurahan Domis </th>
                                            <td class="text-center"><?php echo $data['kelurahanD'];?></td>

                                            <td class="text-center"><?php echo $data['kelurahanD_baru'];?></td>
                                            
                                            
                                        </tr>
                                        <tr cellspa>
                                            <th>Kecamatan Domis </th>
                                            <td class="text-center"><?php echo $data['kecamatanD'];?></td>

                                            <td class="text-center"><?php echo $data['kecamatanD_baru'];?></td>
                                            <th>Kelurahan Domis </th>
                                            <td class="text-center"><?php echo $data['kelurahanD'];?></td>

                                            <td class="text-center"><?php echo $data['kelurahanD_baru'];?></td>
                                            
                                            
                                        </tr>
                                        <tr class="text-center"cellspa style="background-color:#009900; color:white;">
                                            <td colspan="6" style="background-color: green; color: white;"><strong>Kondisi Kesehatan </strong></td>
                                        </tr>
                                        <tr cellspa>
                                            <th>Kondisi Fisik </th>
                                            <td class="text-center"><?php echo $data['fisik'];?></td>

                                            <td class="text-center"><?php echo $data['fisik_baru'];?></td>
                                            <th>Riwayat Penyakit </th>
                                            <td class="text-center"><?php echo $data['penyakit'];?></td>

                                            <td class="text-center"><?php echo $data['penyakit_baru'];?></td>
                                            
                                            
                                            
                                        </tr>
                                        <tr class="text-center"cellspa style="background-color:#009900; color:white;">
                                            <td colspan="6" style="background-color: green; color: white;"><strong>Keterangan Lainnya</strong></td>
                                        </tr>
                                        <tr cellspa>
                                            <th>Alasan diajukan </th>
                                            <td class="text-center"><?php echo $data['alasan'];?></td>

                                            <td class="text-center"><?php echo $data['alasan_baru'];?></td>
                                            <th>Keterangan </th>
                                            <td class="text-center"><?php echo $data['ket'];?></td>

                                            <td class="text-center"><?php echo $data['ket_baru'];?></td>
                                            
                                            
                                        </tr>
                                        <tr cellspa>
                                            
                                            <th>Kesulitan yang sedang dialami</th>
                                            <td class="text-center"><?php echo $data['kesulitan'];?></td>

                                            <td class="text-center"><?php echo $data['kesulitan_baru'];?></td>
                                            
                                            
                                        </tr>
                                        
                
                                        
                                        <tr class="text-center"cellspa style="background-color:#009900; color:white;">
                                            <td colspan="6" style="background-color: green; color: white;"><strong>Tempat Tinggal </strong></td>
                                        </tr>

                                        <tr cellspa>
                                            <th>Status Tempat Tinggal </th>
                                            <td class="text-center"><?php echo $data['statusRumah'];?></td>

                                            <td class="text-center"><?php echo $data['statusRumah_baru'];?></td>
                                            <th>Wujud Tempat Tinggal </th>
                                            <td class="text-center"><?php echo $data['wujud'];?></td>

                                            <td class="text-center"><?php echo $data['wujud_baru'];?></td>
                                            
                                            
                                        </tr>
                                        <tr cellspa>
                                            <th>Jenis Lantai </th>
                                            <td class="text-center"><?php echo $data['jenisLantai'];?></td>

                                            <td class="text-center"><?php echo $data['jenisLantai_baru'];?></td>
                                            <th>Jenis Tembok </th>
                                            <td class="text-center"><?php echo $data['jenisTembok'];?></td>

                                            <td class="text-center"><?php echo $data['jenisTembok_baru'];?></td>
                                            
                                            
                                        </tr>
                                        <tr class="text-center"cellspa style="background-color:#009900; color:white;">
                                            <td colspan="6" style="background-color: green; color: white;"><strong>Pengeluaran Lainnya </strong></td>
                                        </tr>
                                        <tr cellspa>
                                            <th>Makan Satu Hari </th>
                                            <td class="text-center"><?php echo $data['makan'];?></td>

                                            <td class="text-center"><?php echo $data['makan_baru'];?></td>
                                            <th>Pengeluaran Lainnya </th>
                                            <td class="text-center"><?php echo $data['pengeluaran'];?></td>

                                            <td class="text-center"><?php echo $data['pengeluaran_baru'];?></td>
                                            
                                            
                                        </tr>
                                        <tr cellspa>
                                            
                                            <th>Yang Menanggung biaya bulanan </th>
                                            <td class="text-center"><?php echo $data['pengeluaranBulanan'];?></td>

                                            <td class="text-center"><?php echo $data['pengeluaranBulanan_baru'];?></td>
                                            <th>Sumber Air </th>
                                            <td class="text-center"><?php echo $data['sumberAir'];?></td>
                                            <td class="text-center"><?php echo $data['sumberAir_baru'];?></td>

                                            
                                        </tr>
                                        <tr cellspa>
                                            
                                            
                                            <th>Biaya Air </th>
                                            <td class="text-center"><?php echo $data['biayaAir'];?></td>

                                            <td class="text-center"><?php echo $data['biayaAir_baru'];?></td>
                                            <th>Sumber Listrik </th>
                                            <td class="text-center"><?php echo $data['sumberListrik'];?></td>

                                            <td class="text-center"><?php echo $data['sumberListrik_baru'];?></td>
                                            
                                        </tr>
                                        <tr cellspa>
                                            
                                            <th>Biaya Listrik </th>
                                            <td class="text-center"><?php echo $data['biayaListrik'];?></td>

                                            <td class="text-center"><?php echo $data['biayaListrik_baru'];?></td>
                                            
                                            
                                        </tr>
                                        
                                        <tr class="text-center"cellspa style="background-color:#009900; color:white;">
                                            <td colspan="6 " style="background-color: green; color: white;"><strong>Sumber Pemasukan </strong></td>


                                        </tr>

                                        <tr>
                                             <th>Sumber Pemasukan</th>
                                            <td class="text-center"><?php echo $data['sumberPemasukan'];?></td>

                                            <td class="text-center"><?php echo $data['sumberPemasukan_baru'];?></td>
                                        </tr>
                                        
                                        <tr class="text-center"cellspa style="background-color:#009900; color:white;">
                                            <td colspan="6 " style="background-color: green; color: white;"><strong>Program Yang diikuti</strong></td>
                                        
                                        </tr>
                                        <tr cellspa>
                                            <th>Program yang diikuti</th>
                                            <td class="text-center"><?php echo $data['program'];?></td>

                                            <td class="text-center"><?php echo $data['program_baru'];?></td>
                                            
                                            
                                            
                                        </tr>
                                        <tr class="text-center"cellspa style="background-color:#009900; color:white;">
                                            <td colspan="6 " style="background-color: green; color: white;"><strong>Kepemilikan Aset</strong></td>
                                        
                                        </tr>

                                        <tr cellspa>
                                            <th>Peralatan Listrik Terbesar </th>
                                            <td class="text-center"><?php echo $data['alatListrik'];?></td>

                                            <td class="text-center"><?php echo $data['alatListrik_baru'];?></td>
                                            <th>Kepemilikan Hewan Ternak</th>
                                            <td class="text-center"><?php echo $data['hewan'];?></td>

                                            <td class="text-center"><?php echo $data['hewan_baru'];?></td>
                                            
                                            
                                        </tr>

                                        <tr cellspa>
                                            <th>Kepemilikan Kendaraan </th>
                                            <td class="text-center"><?php echo $data['tran'];?></td>

                                            <td class="text-center"><?php echo $data['tran_baru'];?></td>
                                            <th>Kepemilikan Tanah</th>
                                            <td class="text-center"><?php echo $data['tanah'];?></td>

                                            <td class="text-center"><?php echo $data['tanah_baru'];?></td>
                                            
                                            
                                        </tr>
                                         <tr cellspa>
                                            <th>Kepemilikan Usaha </th>
                                            <td class="text-center"><?php echo $data['usaha'];?></td>

                                            <td class="text-center"><?php echo $data['usaha_baru'];?></td>
                                            
                                            
                                        </tr>
                                         <tr class="text-center"cellspa style="background-color:#009900; color:white;">
                                            <td colspan="6 " style="background-color: green; color: white;"><strong>Status Verifikasi</strong></td>
                                        
                                        </tr>
                                        <tr cellspa>
                                            <th>Verifikasi SPV </th>
                                            <td class="text-center"><?php echo $data['status'];?></td>

                                            <td class="text-center"><?php echo $data['status_baru'];?></td>
                                            <th>Keterangan SPV</th>
                                            <td class="text-center"><?php echo $data['catatan'];?></td>

                                            <td class="text-center"><?php echo $data['catatan_baru'];?></td>
                                            
                                            
                                        </tr>
                                        <tr cellspa>
                                            <th>Verifikasi Managemen </th>
                                            <td class="text-center"><?php echo $data['statusM'];?></td>

                                            <td class="text-center"><?php echo $data['statusM_baru'];?></td>
                                            <th>Keterangan Managemen</th>
                                            <td class="text-center"><?php echo $data['catatanM'];?></td>

                                            <td class="text-center"><?php echo $data['catatanM_baru'];?></td>
                                            
                                            
                                        </tr>
                                        <tr cellspa>
                                            <th>Verifikasi Admin </th>
                                            <td class="text-center"><?php echo $data['statusA'];?></td>

                                            <td class="text-center"><?php echo $data['statusA_baru'];?></td>
                                            <th>Keterangan Admin</th>
                                            <td class="text-center"><?php echo $data['catatanA'];?></td>

                                            <td class="text-center"><?php echo $data['catatanA_baru'];?></td>
                                            
                                            
                                        </tr>
                                        <tr cellspa>
                                            <th>Jenis Bantuan </th>
                                            <td class="text-center"><?php echo $data['jenisBantuan'];?></td>

                                            <td class="text-center"><?php echo $data['jenisBantuan_baru'];?></td>
                                            <th>Status Pendaftar</th>
                                            <td class="text-center"><?php echo $data['statusPendaftar'];?></td>

                                            <td class="text-center"><?php echo $data['statusPendaftar_baru'];?></td>
                                            
                                            
                                        </tr>


                

                                                                                
                                                                               
                                </table>
                                <div class="row g-4" style="margin-left:50px;">
                                <div class="col-md-12">
                                    <label class="control-label col-sm-8 mb-2"><strong>Gambar KTP:</strong></label>
                                    <table>
                                        <tr>
                                            <td><label class="control-label col-sm-8 mb-2"><strong>OLD</strong></label>
                                                <?php echo "<img style='width: 450px; height: 350px; align: center;' src='../admin/gambar/$data[nama]' />";?></td>
                                            <td><label class="control-label col-sm-8 mb-2"><strong>NEW:</strong></label>
                                                <?php echo "<img style='width: 450px; height: 350px; align: center;' src='../admin/gambar/$data[nama_baru]' />";?></td>
                                        </tr>
                                    </table>
                                </div>
                                
                                <div class="col-md-12">
                                    <label class="control-label col-sm-8 mb-2"><strong>Gambar KK:</strong> </label>
                                    <table>
                                        <tr>
                                            <td><label class="control-label col-sm-8 mb-2"><strong>OLD</strong></label>
                                                <?php echo "<img style='width: 450px; height: 350px; align: center;' src='../admin/gambar/$data[nama2]' />";?></td>
                                            <td><label class="control-label col-sm-8 mb-2"><strong>NEW:</strong></label>
                                                <?php echo "<img style='width: 450px; height: 350px; align: center;' src='../admin/gambar/$data[nama2_baru]' />";?></td>
                                        </tr>
                                    </table>

                                </div>
                                <div class="col-md-12">
                                    <label class="control-label col-sm-8 mb-2"><strong>Gambar Jamaah :</strong> </label>
                                    <table>
                                        <tr>
                                            <td><label class="control-label col-sm-8 mb-2"><strong>OLD</strong></label>
                                                <?php echo "<img style='width: 450px; height: 350px; align: center;' src='../admin/gambar/$data[nama3]' />";?></td>
                                            <td><label class="control-label col-sm-8 mb-2"><strong>NEW:</strong></label>
                                                <?php echo "<img style='width: 450px; height: 350px; align: center;' src='../admin/gambar/$data[nama3_baru]' />";?></td>
                                        </tr>
                                    </table>

                                </div>
                                <div class="col-md-12">
                                    <label class="control-label col-sm-8 mb-2"><strong>Gambar Rumah Dari Depan:</strong> </label>
                                    <table>
                                        <tr>
                                            <td><label class="control-label col-sm-8 mb-2"><strong>OLD</strong></label>
                                                <?php echo "<img style='width: 450px; height: 350px; align: center;' src='../admin/gambar/$data[nama4]' />";?></td>
                                            <td><label class="control-label col-sm-8 mb-2"><strong>NEW:</strong></label>
                                                <?php echo "<img style='width: 450px; height: 350px; align: center;' src='../admin/gambar/$data[nama4_baru]' />";?></td>
                                        </tr>
                                    </table>

                                </div>
                                <div class="col-md-12">
                                    <label class="control-label col-sm-8 mb-2"><strong>Gambar Toilet:</strong> </label>
                                    <table>
                                        <tr>
                                            <td><label class="control-label col-sm-8 mb-2"><strong>OLD</strong></label>
                                                <?php echo "<img style='width: 450px; height: 350px; align: center;' src='../admin/gambar/$data[nama5]' />";?></td>
                                            <td><label class="control-label col-sm-8 mb-2"><strong>NEW:</strong></label>
                                                <?php echo "<img style='width: 450px; height: 350px; align: center;' src='../admin/gambar/$data[nama5_baru]' />";?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            

        <script>
        window.print();
       </script>
                   
</body>

</html>