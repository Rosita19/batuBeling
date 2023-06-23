<?php
    include "koneksi.php";

    if (isset($_POST['kendaraan'])) {
        $kendaraan = $_POST["kendaraan"];

        $sql = "select * from regencies where province_id=$kendaraan";

        $hasil = mysqli_query($konek, $sql);
        $no = 0;
        while ($data = mysqli_fetch_array($hasil)) {
            ?>
            <option value="<?php echo  $data['id']; ?>"><?php echo $data['name']; ?></option>
            <?php
        }
    }

    if (isset($_POST['merk'])) {
        $merk = $_POST["merk"];

        $sql = "select * from districts where regency_id=$merk";

        $hasil = mysqli_query($konek, $sql);
        $no = 0;
        while ($data = mysqli_fetch_array($hasil)) {
            ?>
            <option value="<?php echo  $data['id']; ?>"><?php echo $data['name']; ?></option>
            <?php
        }
    }
    if (isset($_POST['tipe'])) {
        $tipe = $_POST["tipe"];

        $sql = "select * from villages where district_id=$tipe";

        $hasil = mysqli_query($konek, $sql);
        $no = 0;
        while ($data = mysqli_fetch_array($hasil)) {
            ?>
            <option value="<?php echo  $data['id']; ?>"><?php echo $data['name']; ?></option>
            <?php
        }
    }
    if (isset($_POST['kendaraan2'])) {
        $kendaraan = $_POST["kendaraan2"];

        $sql = "select * from regencies where province_id=$kendaraan";

        $hasil = mysqli_query($konek, $sql);
        $no = 0;
        while ($data = mysqli_fetch_array($hasil)) {
            ?>
            <option value="<?php echo  $data['id']; ?>"><?php echo $data['name']; ?></option>
            <?php
        }
    }

    if (isset($_POST['merk2'])) {
        $merk = $_POST["merk2"];

        $sql = "select * from districts where regency_id=$merk";

        $hasil = mysqli_query($konek, $sql);
        $no = 0;
        while ($data = mysqli_fetch_array($hasil)) {
            ?>
            <option value="<?php echo  $data['id']; ?>"><?php echo $data['name']; ?></option>
            <?php
        }
    }
    if (isset($_POST['tipe2'])) {
        $tipe = $_POST["tipe2"];

        $sql = "select * from villages where district_id=$tipe";

        $hasil = mysqli_query($konek, $sql);
        $no = 0;
        while ($data = mysqli_fetch_array($hasil)) {
            ?>
            <option value="<?php echo  $data['id']; ?>"><?php echo $data['name']; ?></option>
            <?php
        }
    }
    if (isset($_POST['btn_simpan'])) {

            //Include file koneksi, untuk koneksikan ke database
            include 'koneksi.php';
            //Cek apakah ada kiriman form dari method post
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $idVerif        = $_GET['idVerif'];
                $tglVerif       = $_POST['tglVerif'];
                $namaSurveyor   = $_POST['namaSurveyor'];
                $namaAdmin      = $_POST['namaAdmin'];
                $idPengajuan    = $_POST['idPengajuan'];
                $namaPengaju    = $_POST['namaPengaju'];
                $jk             = $_POST['jk'];
                $tglLahir       = $_POST['tglLahir'];
                $usia           = $_POST['usia'];
                $agama          = $_POST['agama'];
                $statusPernikahan = $_POST['statusPernikahan'];
                $noWa           = $_POST['noWa'];
                $pekerjaan      = $_POST['pekerjaan'];
                $hasilBulan      = $_POST['hasilBulan'];
                $fisik          = $_POST['fisik'];
                $penyakit       = $_POST['penyakit'];
                $kesulitan      = $_POST['kesulitan'];
                $alasan         = $_POST['alasan'];
                $ket            = $_POST['ket'];
                $pengaju        = $_POST['pengaju'];
                $kepalaKeluarga = $_POST['kepalaKeluarga'];
                $jenisKK        = $_POST['jenisKK'];
                $nik            = $_POST['nik'];
                $jumlahKK       = $_POST['jumlahKK'];
                $jumlahAnggota  = $_POST['jumlahAnggota'];
                $alamatK        = $_POST['alamatK'];
                $rtK            = $_POST['rtK'];
                $rwK            = $_POST['rwK'];
                $provinsiK      = $_POST['provinsiK'];
                $kabupatenK     = $_POST['kabupatenK'];
                $kecamatanK     = $_POST['kecamatanK'];
                $kelurahanK     = $_POST['kelurahanK'];
                $alamatD        = $_POST['alamatD'];
                $rtD            = $_POST['rtD'];
                $rwD            = $_POST['rwD'];
                $provinsiD      = $_POST['provinsiD'];
                $kabupatenD     = $_POST['kabupatenD'];
                $kecamatanD     = $_POST['kecamatanD'];
                $kelurahanD     = $_POST['kelurahanD'];
                $statusRumah    = $_POST['statusRumah'];
                $wujud          = $_POST['wujud'];
                $jenisLantai    = $_POST['jenisLantai'];
                $jenisTembok    = $_POST['jenisTembok'];
                $sumberAir      = $_POST['sumberAir'];
                $biayaAir       = $_POST['biayaAir'];
                $sumberListrik  = $_POST['sumberListrik'];
                $biayaListrik   = $_POST['biayaListrik'];
                $makan          = $_POST['makan'];
                $pengeluaran    = $_POST['pengeluaran'];
                $pengeluaranBulanan = $_POST['pengeluaranBulanan'];
                $sumberPemasukan = $_POST['sumberPemasukan'];
                $program        = $_POST['program'];
                $alatListrik    = $_POST['alatListrik'];
                $hewan          = $_POST['hewan'];
                $tran           = $_POST['tran'];
                $tanah          = $_POST['tanah'];
                $usaha          = $_POST['usaha'];
                $tglPengajuan   = $_POST['tglPengajuan'];
                $jenisBantuan    = $_POST['jenisBantuan'];
                $statusPendaftar = $_POST['statusPendaftar'];
                $perubahan       = $_POST['perubahan'];
                $nama            = $_FILES['nama']['name'];
                $nama2            = $_FILES['nama2']['name'];
                $nama3            = $_FILES['nama3']['name'];
                $nama4            = $_FILES['nama4']['name'];
                $nama5            = $_FILES['nama5']['name'];

                if ($nama == '' and $nama2 =='' and $nama3 =='' and $nama4 == '' and $nama5 == '') {
                   
                   $file_tmp = $_FILES['nama']['tmp_name']; 
                   $file2_tmp = $_FILES['nama2']['tmp_name']; 
                   $file3_tmp = $_FILES['nama3']['tmp_name']; 
                   $file4_tmp = $_FILES['nama4']['tmp_name']; 
                   $file5_tmp = $_FILES['nama5']['tmp_name']; 
                   $angka_acak     = rand(1,999);
                   $nama_baru = $angka_acak.'-'.$nama;
                   $nama2_baru = $angka_acak.'-'.$nama2;
                   $nama3_baru = $angka_acak.'-'.$nama3;
                   $nama4_baru = $angka_acak.'-'.$nama4;
                   $nama5_baru = $angka_acak.'-'.$nama5;
                   move_uploaded_file($file_tmp, '../admin/gambar/'.$nama_baru); 
                   move_uploaded_file($file2_tmp, '../admin/gambar/'.$nama2_baru); 
                   move_uploaded_file($file3_tmp, '../admin/gambar/'.$nama3_baru); 
                   move_uploaded_file($file4_tmp, '../admin/gambar/'.$nama4_baru); 
                   move_uploaded_file($file5_tmp, '../admin/gambar/'.$nama5_baru); 

                    $sql="UPDATE verifikasi SET tglVerif='$tglVerif', namaSurveyor='$namaSurveyor', namaAdmin='$namaAdmin', idPengajuan='$idPengajuan', namaPengaju='$namaPengaju', jk='$jk', tglLahir='$tglLahir', usia='$usia', agama='$agama', statusPernikahan='$statusPernikahan', noWa='$noWa', pekerjaan='$pekerjaan', hasilBulan='$hasilBulan', fisik='$fisik', penyakit='$penyakit', kesulitan='$kesulitan', alasan='$alasan', ket='$ket', pengaju='$pengaju', kepalaKeluarga='$kepalaKeluarga', jenisKK='$jenisKK', nik='$nik', jumlahKK='$jumlahKK', jumlahAnggota='$jumlahAnggota', alamatK='$alamatK', rtK='$rtK', rwK='$rwK', provinsiK='$provinsiK', kabupatenK='$kabupatenK', kecamatanK='$kecamatanK', kelurahanK='$kelurahanK', alamatK='$alamatD', rtD='$rtD', rwD='$rwD', provinsiD='$provinsiD', kabupatenD='$kabupatenD',kecamatanD='$kecamatanD', kelurahanD='$kelurahanD', statusRumah='$statusRumah', wujud='$wujud', jenisLantai='$jenisLantai', jenisTembok='$jenisTembok', sumberAir='$sumberAir', biayaAir='$biayaAir', sumberListrik='$sumberListrik', biayaListrik='$biayaListrik', makan='$makan', pengeluaran='$pengeluaran', pengeluaranBulanan='$pengeluaranBulanan', sumberPemasukan='$sumberPemasukan', program='$program', alatListrik='$alatListrik', hewan='$hewan', tran='$tran', tanah='$tanah', usaha='$usaha', tglPengajuan='$tglPengajuan', jenisBantuan='$jenisBantuan', statusPendaftar='$statusPendaftar', perubahan='$perubahan' WHERE idVerif='$idVerif'";
                       $simpan_bank=mysqli_query($konek,$sql);

                                if ($simpan_bank) {
                            header("Location:detailKeluarga.php");

                        }
                        else {
                            header("Location:validasiDataA.php?add=gagal");
                            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                            
                        }

                }elseif ($nama != '' and $nama2 =='' and $nama3 =='' and $nama4 == '' and $nama5 == '') {
                   $file_tmp = $_FILES['nama']['tmp_name']; 
                   $file2_tmp = $_FILES['nama2']['tmp_name']; 
                   $file3_tmp = $_FILES['nama3']['tmp_name']; 
                   $file4_tmp = $_FILES['nama4']['tmp_name']; 
                   $file5_tmp = $_FILES['nama5']['tmp_name']; 
                   $angka_acak     = rand(1,999);
                   $nama_baru = $angka_acak.'-'.$nama;
                   $nama2_baru = $angka_acak.'-'.$nama2;
                   $nama3_baru = $angka_acak.'-'.$nama3;
                   $nama4_baru = $angka_acak.'-'.$nama4;
                   $nama5_baru = $angka_acak.'-'.$nama5;
                   move_uploaded_file($file_tmp, '../admin/gambar/'.$nama_baru); 
                   move_uploaded_file($file2_tmp, '../admin/gambar/'.$nama2_baru); 
                   move_uploaded_file($file3_tmp, '../admin/gambar/'.$nama3_baru); 
                   move_uploaded_file($file4_tmp, '../admin/gambar/'.$nama4_baru); 
                   move_uploaded_file($file5_tmp, '../admin/gambar/'.$nama5_baru); 

                   $sql="UPDATE verifikasi SET tglVerif='$tglVerif', namaSurveyor='$namaSurveyor', namaAdmin='$namaAdmin', idPengajuan='$idPengajuan', namaPengaju='$namaPengaju', jk='$jk', tglLahir='$tglLahir', usia='$usia', agama='$agama', statusPernikahan='$statusPernikahan', noWa='$noWa', pekerjaan='$pekerjaan', hasilBulan='$hasilBulan', fisik='$fisik', penyakit='$penyakit', kesulitan='$kesulitan', alasan='$alasan', ket='$ket', pengaju='$pengaju', kepalaKeluarga='$kepalaKeluarga', jenisKK='$jenisKK', nik='$nik', jumlahKK='$jumlahKK', jumlahAnggota='$jumlahAnggota', alamatK='$alamatK', rtK='$rtK', rwK='$rwK', provinsiK='$provinsiK', kabupatenK='$kabupatenK', kecamatanK='$kecamatanK', kelurahanK='$kelurahanK', alamatK='$alamatD', rtD='$rtD', rwD='$rwD', provinsiD='$provinsiD', kabupatenD='$kabupatenD',kecamatanD='$kecamatanD', kelurahanD='$kelurahanD', statusRumah='$statusRumah', wujud='$wujud', jenisLantai='$jenisLantai', jenisTembok='$jenisTembok', sumberAir='$sumberAir', biayaAir='$biayaAir', sumberListrik='$sumberListrik', biayaListrik='$biayaListrik', makan='$makan', pengeluaran='$pengeluaran', pengeluaranBulanan='$pengeluaranBulanan', sumberPemasukan='$sumberPemasukan', program='$program', alatListrik='$alatListrik', hewan='$hewan', tran='$tran', tanah='$tanah', usaha='$usaha', tglPengajuan='$tglPengajuan', jenisBantuan='$jenisBantuan', statusPendaftar='$statusPendaftar', nama='$nama_baru' WHERE idVerif='$idVerif'";

                       $simpan_bank=mysqli_query($konek,$sql);

                                if ($simpan_bank) {
                            header("Location:detailKeluarga.php");

                        }
                        else {
                            header("Location:validasiDataA.php?add=gagal");
                            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                            
                        }
                }elseif ($nama != '' and $nama2 !='' and $nama3 =='' and $nama4 == '' and $nama5 == '') {
                   $file_tmp = $_FILES['nama']['tmp_name']; 
                   $file2_tmp = $_FILES['nama2']['tmp_name']; 
                   $file3_tmp = $_FILES['nama3']['tmp_name']; 
                   $file4_tmp = $_FILES['nama4']['tmp_name']; 
                   $file5_tmp = $_FILES['nama5']['tmp_name']; 
                   $angka_acak     = rand(1,999);
                   $nama_baru = $angka_acak.'-'.$nama;
                   $nama2_baru = $angka_acak.'-'.$nama2;
                   $nama3_baru = $angka_acak.'-'.$nama3;
                   $nama4_baru = $angka_acak.'-'.$nama4;
                   $nama5_baru = $angka_acak.'-'.$nama5;
                   move_uploaded_file($file_tmp, '../admin/gambar/'.$nama_baru); 
                   move_uploaded_file($file2_tmp, '../admin/gambar/'.$nama2_baru); 
                   move_uploaded_file($file3_tmp, '../admin/gambar/'.$nama3_baru); 
                   move_uploaded_file($file4_tmp, '../admin/gambar/'.$nama4_baru); 
                   move_uploaded_file($file5_tmp, '../admin/gambar/'.$nama5_baru); 

                   $sql="UPDATE verifikasi SET tglVerif='$tglVerif', namaSurveyor='$namaSurveyor', namaAdmin='$namaAdmin', idPengajuan='$idPengajuan', namaPengaju='$namaPengaju', jk='$jk', tglLahir='$tglLahir', usia='$usia', agama='$agama', statusPernikahan='$statusPernikahan', noWa='$noWa', pekerjaan='$pekerjaan', hasilBulan='$hasilBulan', fisik='$fisik', penyakit='$penyakit', kesulitan='$kesulitan', alasan='$alasan', ket='$ket', pengaju='$pengaju', kepalaKeluarga='$kepalaKeluarga', jenisKK='$jenisKK', nik='$nik', jumlahKK='$jumlahKK', jumlahAnggota='$jumlahAnggota', alamatK='$alamatK', rtK='$rtK', rwK='$rwK', provinsiK='$provinsiK', kabupatenK='$kabupatenK', kecamatanK='$kecamatanK', kelurahanK='$kelurahanK', alamatK='$alamatD', rtD='$rtD', rwD='$rwD', provinsiD='$provinsiD', kabupatenD='$kabupatenD',kecamatanD='$kecamatanD', kelurahanD='$kelurahanD', statusRumah='$statusRumah', wujud='$wujud', jenisLantai='$jenisLantai', jenisTembok='$jenisTembok', sumberAir='$sumberAir', biayaAir='$biayaAir', sumberListrik='$sumberListrik', biayaListrik='$biayaListrik', makan='$makan', pengeluaran='$pengeluaran', pengeluaranBulanan='$pengeluaranBulanan', sumberPemasukan='$sumberPemasukan', program='$program', alatListrik='$alatListrik', hewan='$hewan', tran='$tran', tanah='$tanah', usaha='$usaha', tglPengajuan='$tglPengajuan', jenisBantuan='$jenisBantuan', statusPendaftar='$statusPendaftar', nama='$nama_baru', nama2='$nama2_baru' WHERE idVerif='$idVerif'";
                        $simpan_bank=mysqli_query($konek,$sql);

                        if ($simpan_bank) {
                            header("Location:detailKeluarga.php");

                        }
                        else {
                            header("Location:validasiDataA.php?add=gagal");
                            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                            
                        }
               }elseif ($nama != '' and $nama2 !='' and $nama3 !='' and $nama4 == '' and $nama5 == '') {
                   $file_tmp = $_FILES['nama']['tmp_name']; 
                   $file2_tmp = $_FILES['nama2']['tmp_name']; 
                   $file3_tmp = $_FILES['nama3']['tmp_name']; 
                   $file4_tmp = $_FILES['nama4']['tmp_name']; 
                   $file5_tmp = $_FILES['nama5']['tmp_name']; 
                   $angka_acak     = rand(1,999);
                   $nama_baru = $angka_acak.'-'.$nama;
                   $nama2_baru = $angka_acak.'-'.$nama2;
                   $nama3_baru = $angka_acak.'-'.$nama3;
                   $nama4_baru = $angka_acak.'-'.$nama4;
                   $nama5_baru = $angka_acak.'-'.$nama5;
                   move_uploaded_file($file_tmp, '../admin/gambar/'.$nama_baru); 
                   move_uploaded_file($file2_tmp, '../admin/gambar/'.$nama2_baru); 
                   move_uploaded_file($file3_tmp, '../admin/gambar/'.$nama3_baru); 
                   move_uploaded_file($file4_tmp, '../admin/gambar/'.$nama4_baru); 
                   move_uploaded_file($file5_tmp, '../admin/gambar/'.$nama5_baru); 

                   $sql="UPDATE verifikasi SET tglVerif='$tglVerif', namaSurveyor='$namaSurveyor', namaAdmin='$namaAdmin', idPengajuan='$idPengajuan', namaPengaju='$namaPengaju', jk='$jk', tglLahir='$tglLahir', usia='$usia', agama='$agama', statusPernikahan='$statusPernikahan', noWa='$noWa', pekerjaan='$pekerjaan', hasilBulan='$hasilBulan', fisik='$fisik', penyakit='$penyakit', kesulitan='$kesulitan', alasan='$alasan', ket='$ket', pengaju='$pengaju', kepalaKeluarga='$kepalaKeluarga', jenisKK='$jenisKK', nik='$nik', jumlahKK='$jumlahKK', jumlahAnggota='$jumlahAnggota', alamatK='$alamatK', rtK='$rtK', rwK='$rwK', provinsiK='$provinsiK', kabupatenK='$kabupatenK', kecamatanK='$kecamatanK', kelurahanK='$kelurahanK', alamatK='$alamatD', rtD='$rtD', rwD='$rwD', provinsiD='$provinsiD', kabupatenD='$kabupatenD',kecamatanD='$kecamatanD', kelurahanD='$kelurahanD', statusRumah='$statusRumah', wujud='$wujud', jenisLantai='$jenisLantai', jenisTembok='$jenisTembok', sumberAir='$sumberAir', biayaAir='$biayaAir', sumberListrik='$sumberListrik', biayaListrik='$biayaListrik', makan='$makan', pengeluaran='$pengeluaran', pengeluaranBulanan='$pengeluaranBulanan', sumberPemasukan='$sumberPemasukan', program='$program', alatListrik='$alatListrik', hewan='$hewan', tran='$tran', tanah='$tanah', usaha='$usaha', tglPengajuan='$tglPengajuan', jenisBantuan='$jenisBantuan', statusPendaftar='$statusPendaftar', nama='$nama_baru', nama2='$nama2_baru', nama3='$nama3_baru' WHERE idVerif='$idVerif'";

                        $simpan_bank=mysqli_query($konek,$sql);

                                if ($simpan_bank) {
                            header("Location:detailKeluarga.php");

                        }
                        else {
                            header("Location:validasiDataA.php?add=gagal");
                            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                            
                        }
                }elseif ($nama != '' and $nama2 !='' and $nama3 !='' and $nama4 != '' and $nama5 == '') {
                   $file_tmp = $_FILES['nama']['tmp_name']; 
                   $file2_tmp = $_FILES['nama2']['tmp_name']; 
                   $file3_tmp = $_FILES['nama3']['tmp_name']; 
                   $file4_tmp = $_FILES['nama4']['tmp_name']; 
                   $file5_tmp = $_FILES['nama5']['tmp_name']; 
                   $angka_acak     = rand(1,999);
                   $nama_baru = $angka_acak.'-'.$nama;
                   $nama2_baru = $angka_acak.'-'.$nama2;
                   $nama3_baru = $angka_acak.'-'.$nama3;
                   $nama4_baru = $angka_acak.'-'.$nama4;
                   $nama5_baru = $angka_acak.'-'.$nama5;
                   move_uploaded_file($file_tmp, '../admin/gambar/'.$nama_baru); 
                   move_uploaded_file($file2_tmp, '../admin/gambar/'.$nama2_baru); 
                   move_uploaded_file($file3_tmp, '../admin/gambar/'.$nama3_baru); 
                   move_uploaded_file($file4_tmp, '../admin/gambar/'.$nama4_baru); 
                   move_uploaded_file($file5_tmp, '../admin/gambar/'.$nama5_baru); 

                   $sql="UPDATE verifikasi SET tglVerif='$tglVerif', namaSurveyor='$namaSurveyor', namaAdmin='$namaAdmin', idPengajuan='$idPengajuan', namaPengaju='$namaPengaju', jk='$jk', tglLahir='$tglLahir', usia='$usia', agama='$agama', statusPernikahan='$statusPernikahan', noWa='$noWa', pekerjaan='$pekerjaan', hasilBulan='$hasilBulan', fisik='$fisik', penyakit='$penyakit', kesulitan='$kesulitan', alasan='$alasan', ket='$ket', pengaju='$pengaju', kepalaKeluarga='$kepalaKeluarga', jenisKK='$jenisKK', nik='$nik', jumlahKK='$jumlahKK', jumlahAnggota='$jumlahAnggota', alamatK='$alamatK', rtK='$rtK', rwK='$rwK', provinsiK='$provinsiK', kabupatenK='$kabupatenK', kecamatanK='$kecamatanK', kelurahanK='$kelurahanK', alamatK='$alamatD', rtD='$rtD', rwD='$rwD', provinsiD='$provinsiD', kabupatenD='$kabupatenD',kecamatanD='$kecamatanD', kelurahanD='$kelurahanD', statusRumah='$statusRumah', wujud='$wujud', jenisLantai='$jenisLantai', jenisTembok='$jenisTembok', sumberAir='$sumberAir', biayaAir='$biayaAir', sumberListrik='$sumberListrik', biayaListrik='$biayaListrik', makan='$makan', pengeluaran='$pengeluaran', pengeluaranBulanan='$pengeluaranBulanan', sumberPemasukan='$sumberPemasukan', program='$program', alatListrik='$alatListrik', hewan='$hewan', tran='$tran', tanah='$tanah', usaha='$usaha', tglPengajuan='$tglPengajuan', jenisBantuan='$jenisBantuan', statusPendaftar='$statusPendaftar', nama='$nama_baru', nama2='$nama2_baru', nama3='$nama3_baru', nama4='$nama4_baru' WHERE idVerif='$idVerif'";

                        $simpan_bank=mysqli_query($konek,$sql);

                                if ($simpan_bank) {
                            header("Location:detailKeluarga.php");

                        }
                        else {
                            header("Location:validasiDataA.php?add=gagal");
                            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                            
                        }
                } elseif ($nama != '' and $nama2 !='' and $nama3 !='' and $nama4 != '' and $nama5 != '') {
                   $file_tmp = $_FILES['nama']['tmp_name']; 
                   $file2_tmp = $_FILES['nama2']['tmp_name']; 
                   $file3_tmp = $_FILES['nama3']['tmp_name']; 
                   $file4_tmp = $_FILES['nama4']['tmp_name']; 
                   $file5_tmp = $_FILES['nama5']['tmp_name']; 
                   $angka_acak     = rand(1,999);
                   $nama_baru = $angka_acak.'-'.$nama;
                   $nama2_baru = $angka_acak.'-'.$nama2;
                   $nama3_baru = $angka_acak.'-'.$nama3;
                   $nama4_baru = $angka_acak.'-'.$nama4;
                   $nama5_baru = $angka_acak.'-'.$nama5;
                   move_uploaded_file($file_tmp, '../admin/gambar/'.$nama_baru); 
                   move_uploaded_file($file2_tmp, '../admin/gambar/'.$nama2_baru); 
                   move_uploaded_file($file3_tmp, '../admin/gambar/'.$nama3_baru); 
                   move_uploaded_file($file4_tmp, '../admin/gambar/'.$nama4_baru); 
                   move_uploaded_file($file5_tmp, '../admin/gambar/'.$nama5_baru); 

                   $sql="UPDATE verifikasi SET tglVerif='$tglVerif', namaSurveyor='$namaSurveyor', namaAdmin='$namaAdmin', idPengajuan='$idPengajuan', namaPengaju='$namaPengaju', jk='$jk', tglLahir='$tglLahir', usia='$usia', agama='$agama', statusPernikahan='$statusPernikahan', noWa='$noWa', pekerjaan='$pekerjaan', hasilBulan='$hasilBulan', fisik='$fisik', penyakit='$penyakit', kesulitan='$kesulitan', alasan='$alasan', ket='$ket', pengaju='$pengaju', kepalaKeluarga='$kepalaKeluarga', jenisKK='$jenisKK', nik='$nik', jumlahKK='$jumlahKK', jumlahAnggota='$jumlahAnggota', alamatK='$alamatK', rtK='$rtK', rwK='$rwK', provinsiK='$provinsiK', kabupatenK='$kabupatenK', kecamatanK='$kecamatanK', kelurahanK='$kelurahanK', alamatK='$alamatD', rtD='$rtD', rwD='$rwD', provinsiD='$provinsiD', kabupatenD='$kabupatenD',kecamatanD='$kecamatanD', kelurahanD='$kelurahanD', statusRumah='$statusRumah', wujud='$wujud', jenisLantai='$jenisLantai', jenisTembok='$jenisTembok', sumberAir='$sumberAir', biayaAir='$biayaAir', sumberListrik='$sumberListrik', biayaListrik='$biayaListrik', makan='$makan', pengeluaran='$pengeluaran', pengeluaranBulanan='$pengeluaranBulanan', sumberPemasukan='$sumberPemasukan', program='$program', alatListrik='$alatListrik', hewan='$hewan', tran='$tran', tanah='$tanah', usaha='$usaha', tglPengajuan='$tglPengajuan', jenisBantuan='$jenisBantuan', statusPendaftar='$statusPendaftar', nama='$nama_baru', nama2='$nama2_baru', nama3='$nama3_baru', nama4='$nama4_baru', nama5='$nama5_baru' WHERE idVerif='$idVerif'";

                       $simpan_bank=mysqli_query($konek,$sql);

                                if ($simpan_bank) {
                            header("Location:detailKeluarga.php");

                        }
                        else {
                            header("Location:validasiDataA.php?add=gagal");
                            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                            
                        }
                     
                }elseif ($nama != '' and $nama2 =='' and $nama3 !='' and $nama4 == '' and $nama5 == '') {
                   $file_tmp = $_FILES['nama']['tmp_name']; 
                   $file2_tmp = $_FILES['nama2']['tmp_name']; 
                   $file3_tmp = $_FILES['nama3']['tmp_name']; 
                   $file4_tmp = $_FILES['nama4']['tmp_name']; 
                   $file5_tmp = $_FILES['nama5']['tmp_name']; 
                   $angka_acak     = rand(1,999);
                   $nama_baru = $angka_acak.'-'.$nama;
                   $nama2_baru = $angka_acak.'-'.$nama2;
                   $nama3_baru = $angka_acak.'-'.$nama3;
                   $nama4_baru = $angka_acak.'-'.$nama4;
                   $nama5_baru = $angka_acak.'-'.$nama5;
                   move_uploaded_file($file_tmp, '../admin/gambar/'.$nama_baru); 
                   move_uploaded_file($file2_tmp, '../admin/gambar/'.$nama2_baru); 
                   move_uploaded_file($file3_tmp, '../admin/gambar/'.$nama3_baru); 
                   move_uploaded_file($file4_tmp, '../admin/gambar/'.$nama4_baru); 
                   move_uploaded_file($file5_tmp, '../admin/gambar/'.$nama5_baru); 

                   $sql="UPDATE verifikasi SET tglVerif='$tglVerif', namaSurveyor='$namaSurveyor', namaAdmin='$namaAdmin', idPengajuan='$idPengajuan', namaPengaju='$namaPengaju', jk='$jk', tglLahir='$tglLahir', usia='$usia', agama='$agama', statusPernikahan='$statusPernikahan', noWa='$noWa', pekerjaan='$pekerjaan', hasilBulan='$hasilBulan', fisik='$fisik', penyakit='$penyakit', kesulitan='$kesulitan', alasan='$alasan', ket='$ket', pengaju='$pengaju', kepalaKeluarga='$kepalaKeluarga', jenisKK='$jenisKK', nik='$nik', jumlahKK='$jumlahKK', jumlahAnggota='$jumlahAnggota', alamatK='$alamatK', rtK='$rtK', rwK='$rwK', provinsiK='$provinsiK', kabupatenK='$kabupatenK', kecamatanK='$kecamatanK', kelurahanK='$kelurahanK', alamatK='$alamatD', rtD='$rtD', rwD='$rwD', provinsiD='$provinsiD', kabupatenD='$kabupatenD',kecamatanD='$kecamatanD', kelurahanD='$kelurahanD', statusRumah='$statusRumah', wujud='$wujud', jenisLantai='$jenisLantai', jenisTembok='$jenisTembok', sumberAir='$sumberAir', biayaAir='$biayaAir', sumberListrik='$sumberListrik', biayaListrik='$biayaListrik', makan='$makan', pengeluaran='$pengeluaran', pengeluaranBulanan='$pengeluaranBulanan', sumberPemasukan='$sumberPemasukan', program='$program', alatListrik='$alatListrik', hewan='$hewan', tran='$tran', tanah='$tanah', usaha='$usaha', tglPengajuan='$tglPengajuan', jenisBantuan='$jenisBantuan', statusPendaftar='$statusPendaftar', nama='$nama_baru', nama3='$nama3_baru' WHERE idVerif='$idVerif'";

                        $simpan_bank=mysqli_query($konek,$sql);

                                if ($simpan_bank) {
                            header("Location:detailKeluarga.php");

                        }
                        else {
                            header("Location:validasiDataA.php?add=gagal");
                            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                            
                        }
                } elseif ($nama != '' and $nama2 =='' and $nama3 =='' and $nama4 != '' and $nama5 == '') {
                   $file_tmp = $_FILES['nama']['tmp_name']; 
                   $file2_tmp = $_FILES['nama2']['tmp_name']; 
                   $file3_tmp = $_FILES['nama3']['tmp_name']; 
                   $file4_tmp = $_FILES['nama4']['tmp_name']; 
                   $file5_tmp = $_FILES['nama5']['tmp_name']; 
                   $angka_acak     = rand(1,999);
                   $nama_baru = $angka_acak.'-'.$nama;
                   $nama2_baru = $angka_acak.'-'.$nama2;
                   $nama3_baru = $angka_acak.'-'.$nama3;
                   $nama4_baru = $angka_acak.'-'.$nama4;
                   $nama5_baru = $angka_acak.'-'.$nama5;
                   move_uploaded_file($file_tmp, '../admin/gambar/'.$nama_baru); 
                   move_uploaded_file($file2_tmp, '../admin/gambar/'.$nama2_baru); 
                   move_uploaded_file($file3_tmp, '../admin/gambar/'.$nama3_baru); 
                   move_uploaded_file($file4_tmp, '../admin/gambar/'.$nama4_baru); 
                   move_uploaded_file($file5_tmp, '../admin/gambar/'.$nama5_baru); 

                   $sql="UPDATE verifikasi SET tglVerif='$tglVerif', namaSurveyor='$namaSurveyor', namaAdmin='$namaAdmin', idPengajuan='$idPengajuan', namaPengaju='$namaPengaju', jk='$jk', tglLahir='$tglLahir', usia='$usia', agama='$agama', statusPernikahan='$statusPernikahan', noWa='$noWa', pekerjaan='$pekerjaan', hasilBulan='$hasilBulan', fisik='$fisik', penyakit='$penyakit', kesulitan='$kesulitan', alasan='$alasan', ket='$ket', pengaju='$pengaju', kepalaKeluarga='$kepalaKeluarga', jenisKK='$jenisKK', nik='$nik', jumlahKK='$jumlahKK', jumlahAnggota='$jumlahAnggota', alamatK='$alamatK', rtK='$rtK', rwK='$rwK', provinsiK='$provinsiK', kabupatenK='$kabupatenK', kecamatanK='$kecamatanK', kelurahanK='$kelurahanK', alamatK='$alamatD', rtD='$rtD', rwD='$rwD', provinsiD='$provinsiD', kabupatenD='$kabupatenD',kecamatanD='$kecamatanD', kelurahanD='$kelurahanD', statusRumah='$statusRumah', wujud='$wujud', jenisLantai='$jenisLantai', jenisTembok='$jenisTembok', sumberAir='$sumberAir', biayaAir='$biayaAir', sumberListrik='$sumberListrik', biayaListrik='$biayaListrik', makan='$makan', pengeluaran='$pengeluaran', pengeluaranBulanan='$pengeluaranBulanan', sumberPemasukan='$sumberPemasukan', program='$program', alatListrik='$alatListrik', hewan='$hewan', tran='$tran', tanah='$tanah', usaha='$usaha', tglPengajuan='$tglPengajuan', jenisBantuan='$jenisBantuan', statusPendaftar='$statusPendaftar', nama='$nama_baru', nama4='$nama4_baru' WHERE idVerif='$idVerif'";

                       $simpan_bank=mysqli_query($konek,$sql);

                                if ($simpan_bank) {
                            header("Location:detailKeluarga.php");

                        }
                        else {
                            header("Location:validasiDataA.php?add=gagal");
                            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                            
                        }
                     
                }elseif ($nama != '' and $nama2 =='' and $nama3 =='' and $nama4 == '' and $nama5 != '') {
                   $file_tmp = $_FILES['nama']['tmp_name']; 
                   $file2_tmp = $_FILES['nama2']['tmp_name']; 
                   $file3_tmp = $_FILES['nama3']['tmp_name']; 
                   $file4_tmp = $_FILES['nama4']['tmp_name']; 
                   $file5_tmp = $_FILES['nama5']['tmp_name']; 
                   $angka_acak     = rand(1,999);
                   $nama_baru = $angka_acak.'-'.$nama;
                   $nama2_baru = $angka_acak.'-'.$nama2;
                   $nama3_baru = $angka_acak.'-'.$nama3;
                   $nama4_baru = $angka_acak.'-'.$nama4;
                   $nama5_baru = $angka_acak.'-'.$nama5;
                   move_uploaded_file($file_tmp, '../admin/gambar/'.$nama_baru); 
                   move_uploaded_file($file2_tmp, '../admin/gambar/'.$nama2_baru); 
                   move_uploaded_file($file3_tmp, '../admin/gambar/'.$nama3_baru); 
                   move_uploaded_file($file4_tmp, '../admin/gambar/'.$nama4_baru); 
                   move_uploaded_file($file5_tmp, '../admin/gambar/'.$nama5_baru); 

                   $sql="UPDATE verifikasi SET tglVerif='$tglVerif', namaSurveyor='$namaSurveyor', namaAdmin='$namaAdmin', idPengajuan='$idPengajuan', namaPengaju='$namaPengaju', jk='$jk', tglLahir='$tglLahir', usia='$usia', agama='$agama', statusPernikahan='$statusPernikahan', noWa='$noWa', pekerjaan='$pekerjaan', hasilBulan='$hasilBulan', fisik='$fisik', penyakit='$penyakit', kesulitan='$kesulitan', alasan='$alasan', ket='$ket', pengaju='$pengaju', kepalaKeluarga='$kepalaKeluarga', jenisKK='$jenisKK', nik='$nik', jumlahKK='$jumlahKK', jumlahAnggota='$jumlahAnggota', alamatK='$alamatK', rtK='$rtK', rwK='$rwK', provinsiK='$provinsiK', kabupatenK='$kabupatenK', kecamatanK='$kecamatanK', kelurahanK='$kelurahanK', alamatK='$alamatD', rtD='$rtD', rwD='$rwD', provinsiD='$provinsiD', kabupatenD='$kabupatenD',kecamatanD='$kecamatanD', kelurahanD='$kelurahanD', statusRumah='$statusRumah', wujud='$wujud', jenisLantai='$jenisLantai', jenisTembok='$jenisTembok', sumberAir='$sumberAir', biayaAir='$biayaAir', sumberListrik='$sumberListrik', biayaListrik='$biayaListrik', makan='$makan', pengeluaran='$pengeluaran', pengeluaranBulanan='$pengeluaranBulanan', sumberPemasukan='$sumberPemasukan', program='$program', alatListrik='$alatListrik', hewan='$hewan', tran='$tran', tanah='$tanah', usaha='$usaha', tglPengajuan='$tglPengajuan', jenisBantuan='$jenisBantuan', statusPendaftar='$statusPendaftar', nama='$nama_baru', nama5='$nama5_baru' WHERE idVerif='$idVerif'";

                       $simpan_bank=mysqli_query($konek,$sql);

                                if ($simpan_bank) {
                            header("Location:detailKeluarga.php");

                        }
                        else {
                            header("Location:validasiDataA.php?add=gagal");
                            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                            
                        }
                     
                }elseif ($nama == '' and $nama2 !='' and $nama3 !='' and $nama4 == '' and $nama5 == '') {
                   $file_tmp = $_FILES['nama']['tmp_name']; 
                   $file2_tmp = $_FILES['nama2']['tmp_name']; 
                   $file3_tmp = $_FILES['nama3']['tmp_name']; 
                   $file4_tmp = $_FILES['nama4']['tmp_name']; 
                   $file5_tmp = $_FILES['nama5']['tmp_name']; 
                   $angka_acak     = rand(1,999);
                   $nama_baru = $angka_acak.'-'.$nama;
                   $nama2_baru = $angka_acak.'-'.$nama2;
                   $nama3_baru = $angka_acak.'-'.$nama3;
                   $nama4_baru = $angka_acak.'-'.$nama4;
                   $nama5_baru = $angka_acak.'-'.$nama5;
                   move_uploaded_file($file_tmp, '../admin/gambar/'.$nama_baru); 
                   move_uploaded_file($file2_tmp, '../admin/gambar/'.$nama2_baru); 
                   move_uploaded_file($file3_tmp, '../admin/gambar/'.$nama3_baru); 
                   move_uploaded_file($file4_tmp, '../admin/gambar/'.$nama4_baru); 
                   move_uploaded_file($file5_tmp, '../admin/gambar/'.$nama5_baru); 

                   $sql="UPDATE verifikasi SET tglVerif='$tglVerif', namaSurveyor='$namaSurveyor', namaAdmin='$namaAdmin', idPengajuan='$idPengajuan', namaPengaju='$namaPengaju', jk='$jk', tglLahir='$tglLahir', usia='$usia', agama='$agama', statusPernikahan='$statusPernikahan', noWa='$noWa', pekerjaan='$pekerjaan', hasilBulan='$hasilBulan', fisik='$fisik', penyakit='$penyakit', kesulitan='$kesulitan', alasan='$alasan', ket='$ket', pengaju='$pengaju', kepalaKeluarga='$kepalaKeluarga', jenisKK='$jenisKK', nik='$nik', jumlahKK='$jumlahKK', jumlahAnggota='$jumlahAnggota', alamatK='$alamatK', rtK='$rtK', rwK='$rwK', provinsiK='$provinsiK', kabupatenK='$kabupatenK', kecamatanK='$kecamatanK', kelurahanK='$kelurahanK', alamatK='$alamatD', rtD='$rtD', rwD='$rwD', provinsiD='$provinsiD', kabupatenD='$kabupatenD',kecamatanD='$kecamatanD', kelurahanD='$kelurahanD', statusRumah='$statusRumah', wujud='$wujud', jenisLantai='$jenisLantai', jenisTembok='$jenisTembok', sumberAir='$sumberAir', biayaAir='$biayaAir', sumberListrik='$sumberListrik', biayaListrik='$biayaListrik', makan='$makan', pengeluaran='$pengeluaran', pengeluaranBulanan='$pengeluaranBulanan', sumberPemasukan='$sumberPemasukan', program='$program', alatListrik='$alatListrik', hewan='$hewan', tran='$tran', tanah='$tanah', usaha='$usaha', tglPengajuan='$tglPengajuan', jenisBantuan='$jenisBantuan', statusPendaftar='$statusPendaftar', nama2='$nama2_baru', nama3='$nama3_baru' WHERE idVerif='$idVerif'";

                       $simpan_bank=mysqli_query($konek,$sql);

                                if ($simpan_bank) {
                            header("Location:detailKeluarga.php");

                        }
                        else {
                            header("Location:validasiDataA.php?add=gagal");
                            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                            
                        }
                     
                }elseif ($nama == '' and $nama2 !='' and $nama3 =='' and $nama4 != '' and $nama5 == '') {
                   $file_tmp = $_FILES['nama']['tmp_name']; 
                   $file2_tmp = $_FILES['nama2']['tmp_name']; 
                   $file3_tmp = $_FILES['nama3']['tmp_name']; 
                   $file4_tmp = $_FILES['nama4']['tmp_name']; 
                   $file5_tmp = $_FILES['nama5']['tmp_name']; 
                   $angka_acak     = rand(1,999);
                   $nama_baru = $angka_acak.'-'.$nama;
                   $nama2_baru = $angka_acak.'-'.$nama2;
                   $nama3_baru = $angka_acak.'-'.$nama3;
                   $nama4_baru = $angka_acak.'-'.$nama4;
                   $nama5_baru = $angka_acak.'-'.$nama5;
                   move_uploaded_file($file_tmp, '../admin/gambar/'.$nama_baru); 
                   move_uploaded_file($file2_tmp, '../admin/gambar/'.$nama2_baru); 
                   move_uploaded_file($file3_tmp, '../admin/gambar/'.$nama3_baru); 
                   move_uploaded_file($file4_tmp, '../admin/gambar/'.$nama4_baru); 
                   move_uploaded_file($file5_tmp, '../admin/gambar/'.$nama5_baru); 

                   $sql="UPDATE verifikasi SET tglVerif='$tglVerif', namaSurveyor='$namaSurveyor', namaAdmin='$namaAdmin', idPengajuan='$idPengajuan', namaPengaju='$namaPengaju', jk='$jk', tglLahir='$tglLahir', usia='$usia', agama='$agama', statusPernikahan='$statusPernikahan', noWa='$noWa', pekerjaan='$pekerjaan', hasilBulan='$hasilBulan', fisik='$fisik', penyakit='$penyakit', kesulitan='$kesulitan', alasan='$alasan', ket='$ket', pengaju='$pengaju', kepalaKeluarga='$kepalaKeluarga', jenisKK='$jenisKK', nik='$nik', jumlahKK='$jumlahKK', jumlahAnggota='$jumlahAnggota', alamatK='$alamatK', rtK='$rtK', rwK='$rwK', provinsiK='$provinsiK', kabupatenK='$kabupatenK', kecamatanK='$kecamatanK', kelurahanK='$kelurahanK', alamatK='$alamatD', rtD='$rtD', rwD='$rwD', provinsiD='$provinsiD', kabupatenD='$kabupatenD',kecamatanD='$kecamatanD', kelurahanD='$kelurahanD', statusRumah='$statusRumah', wujud='$wujud', jenisLantai='$jenisLantai', jenisTembok='$jenisTembok', sumberAir='$sumberAir', biayaAir='$biayaAir', sumberListrik='$sumberListrik', biayaListrik='$biayaListrik', makan='$makan', pengeluaran='$pengeluaran', pengeluaranBulanan='$pengeluaranBulanan', sumberPemasukan='$sumberPemasukan', program='$program', alatListrik='$alatListrik', hewan='$hewan', tran='$tran', tanah='$tanah', usaha='$usaha', tglPengajuan='$tglPengajuan', jenisBantuan='$jenisBantuan', statusPendaftar='$statusPendaftar', nama2='$nama2_baru', nama4='$nama4_baru' WHERE idVerif='$idVerif'";

                       $simpan_bank=mysqli_query($konek,$sql);

                                if ($simpan_bank) {
                            header("Location:detailKeluarga.php");

                        }
                        else {
                            header("Location:validasiDataA.php?add=gagal");
                            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                            
                        }
                     
                }elseif ($nama == '' and $nama2 !='' and $nama3 =='' and $nama4 == '' and $nama5 != '') {
                   $file_tmp = $_FILES['nama']['tmp_name']; 
                   $file2_tmp = $_FILES['nama2']['tmp_name']; 
                   $file3_tmp = $_FILES['nama3']['tmp_name']; 
                   $file4_tmp = $_FILES['nama4']['tmp_name']; 
                   $file5_tmp = $_FILES['nama5']['tmp_name']; 
                   $angka_acak     = rand(1,999);
                   $nama_baru = $angka_acak.'-'.$nama;
                   $nama2_baru = $angka_acak.'-'.$nama2;
                   $nama3_baru = $angka_acak.'-'.$nama3;
                   $nama4_baru = $angka_acak.'-'.$nama4;
                   $nama5_baru = $angka_acak.'-'.$nama5;
                   move_uploaded_file($file_tmp, '../admin/gambar/'.$nama_baru); 
                   move_uploaded_file($file2_tmp, '../admin/gambar/'.$nama2_baru); 
                   move_uploaded_file($file3_tmp, '../admin/gambar/'.$nama3_baru); 
                   move_uploaded_file($file4_tmp, '../admin/gambar/'.$nama4_baru); 
                   move_uploaded_file($file5_tmp, '../admin/gambar/'.$nama5_baru); 

                   $sql="UPDATE verifikasi SET tglVerif='$tglVerif', namaSurveyor='$namaSurveyor', namaAdmin='$namaAdmin', idPengajuan='$idPengajuan', namaPengaju='$namaPengaju', jk='$jk', tglLahir='$tglLahir', usia='$usia', agama='$agama', statusPernikahan='$statusPernikahan', noWa='$noWa', pekerjaan='$pekerjaan', hasilBulan='$hasilBulan', fisik='$fisik', penyakit='$penyakit', kesulitan='$kesulitan', alasan='$alasan', ket='$ket', pengaju='$pengaju', kepalaKeluarga='$kepalaKeluarga', jenisKK='$jenisKK', nik='$nik', jumlahKK='$jumlahKK', jumlahAnggota='$jumlahAnggota', alamatK='$alamatK', rtK='$rtK', rwK='$rwK', provinsiK='$provinsiK', kabupatenK='$kabupatenK', kecamatanK='$kecamatanK', kelurahanK='$kelurahanK', alamatK='$alamatD', rtD='$rtD', rwD='$rwD', provinsiD='$provinsiD', kabupatenD='$kabupatenD',kecamatanD='$kecamatanD', kelurahanD='$kelurahanD', statusRumah='$statusRumah', wujud='$wujud', jenisLantai='$jenisLantai', jenisTembok='$jenisTembok', sumberAir='$sumberAir', biayaAir='$biayaAir', sumberListrik='$sumberListrik', biayaListrik='$biayaListrik', makan='$makan', pengeluaran='$pengeluaran', pengeluaranBulanan='$pengeluaranBulanan', sumberPemasukan='$sumberPemasukan', program='$program', alatListrik='$alatListrik', hewan='$hewan', tran='$tran', tanah='$tanah', usaha='$usaha', tglPengajuan='$tglPengajuan', jenisBantuan='$jenisBantuan', statusPendaftar='$statusPendaftar', nama2='$nama2_baru', nama5='$nama5_baru' WHERE idVerif='$idVerif'";

                       $simpan_bank=mysqli_query($konek,$sql);

                                if ($simpan_bank) {
                            header("Location:detailKeluarga.php");

                        }
                        else {
                            header("Location:validasiDataA.php?add=gagal");
                            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                            
                        }
                     
                }elseif ($nama == '' and $nama2 =='' and $nama3 !='' and $nama4 != '' and $nama5 == '') {
                   $file_tmp = $_FILES['nama']['tmp_name']; 
                   $file2_tmp = $_FILES['nama2']['tmp_name']; 
                   $file3_tmp = $_FILES['nama3']['tmp_name']; 
                   $file4_tmp = $_FILES['nama4']['tmp_name']; 
                   $file5_tmp = $_FILES['nama5']['tmp_name']; 
                   $angka_acak     = rand(1,999);
                   $nama_baru = $angka_acak.'-'.$nama;
                   $nama2_baru = $angka_acak.'-'.$nama2;
                   $nama3_baru = $angka_acak.'-'.$nama3;
                   $nama4_baru = $angka_acak.'-'.$nama4;
                   $nama5_baru = $angka_acak.'-'.$nama5;
                   move_uploaded_file($file_tmp, '../admin/gambar/'.$nama_baru); 
                   move_uploaded_file($file2_tmp, '../admin/gambar/'.$nama2_baru); 
                   move_uploaded_file($file3_tmp, '../admin/gambar/'.$nama3_baru); 
                   move_uploaded_file($file4_tmp, '../admin/gambar/'.$nama4_baru); 
                   move_uploaded_file($file5_tmp, '../admin/gambar/'.$nama5_baru); 

                   $sql="UPDATE verifikasi SET tglVerif='$tglVerif', namaSurveyor='$namaSurveyor', namaAdmin='$namaAdmin', idPengajuan='$idPengajuan', namaPengaju='$namaPengaju', jk='$jk', tglLahir='$tglLahir', usia='$usia', agama='$agama', statusPernikahan='$statusPernikahan', noWa='$noWa', pekerjaan='$pekerjaan', hasilBulan='$hasilBulan', fisik='$fisik', penyakit='$penyakit', kesulitan='$kesulitan', alasan='$alasan', ket='$ket', pengaju='$pengaju', kepalaKeluarga='$kepalaKeluarga', jenisKK='$jenisKK', nik='$nik', jumlahKK='$jumlahKK', jumlahAnggota='$jumlahAnggota', alamatK='$alamatK', rtK='$rtK', rwK='$rwK', provinsiK='$provinsiK', kabupatenK='$kabupatenK', kecamatanK='$kecamatanK', kelurahanK='$kelurahanK', alamatK='$alamatD', rtD='$rtD', rwD='$rwD', provinsiD='$provinsiD', kabupatenD='$kabupatenD',kecamatanD='$kecamatanD', kelurahanD='$kelurahanD', statusRumah='$statusRumah', wujud='$wujud', jenisLantai='$jenisLantai', jenisTembok='$jenisTembok', sumberAir='$sumberAir', biayaAir='$biayaAir', sumberListrik='$sumberListrik', biayaListrik='$biayaListrik', makan='$makan', pengeluaran='$pengeluaran', pengeluaranBulanan='$pengeluaranBulanan', sumberPemasukan='$sumberPemasukan', program='$program', alatListrik='$alatListrik', hewan='$hewan', tran='$tran', tanah='$tanah', usaha='$usaha', tglPengajuan='$tglPengajuan', jenisBantuan='$jenisBantuan', statusPendaftar='$statusPendaftar', nama3='$nama3_baru', nama4='$nama4_baru' WHERE idVerif='$idVerif'";

                       $simpan_bank=mysqli_query($konek,$sql);

                                if ($simpan_bank) {
                            header("Location:detailKeluarga.php");

                        }
                        else {
                            header("Location:validasiDataA.php?add=gagal");
                            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                            
                        }
                     
                }elseif ($nama == '' and $nama2 =='' and $nama3 !='' and $nama4 == '' and $nama5 != '') {
                   $file_tmp = $_FILES['nama']['tmp_name']; 
                   $file2_tmp = $_FILES['nama2']['tmp_name']; 
                   $file3_tmp = $_FILES['nama3']['tmp_name']; 
                   $file4_tmp = $_FILES['nama4']['tmp_name']; 
                   $file5_tmp = $_FILES['nama5']['tmp_name']; 
                   $angka_acak     = rand(1,999);
                   $nama_baru = $angka_acak.'-'.$nama;
                   $nama2_baru = $angka_acak.'-'.$nama2;
                   $nama3_baru = $angka_acak.'-'.$nama3;
                   $nama4_baru = $angka_acak.'-'.$nama4;
                   $nama5_baru = $angka_acak.'-'.$nama5;
                   move_uploaded_file($file_tmp, '../admin/gambar/'.$nama_baru); 
                   move_uploaded_file($file2_tmp, '../admin/gambar/'.$nama2_baru); 
                   move_uploaded_file($file3_tmp, '../admin/gambar/'.$nama3_baru); 
                   move_uploaded_file($file4_tmp, '../admin/gambar/'.$nama4_baru); 
                   move_uploaded_file($file5_tmp, '../admin/gambar/'.$nama5_baru); 

                   $sql="UPDATE verifikasi SET tglVerif='$tglVerif', namaSurveyor='$namaSurveyor', namaAdmin='$namaAdmin', idPengajuan='$idPengajuan', namaPengaju='$namaPengaju', jk='$jk', tglLahir='$tglLahir', usia='$usia', agama='$agama', statusPernikahan='$statusPernikahan', noWa='$noWa', pekerjaan='$pekerjaan', hasilBulan='$hasilBulan', fisik='$fisik', penyakit='$penyakit', kesulitan='$kesulitan', alasan='$alasan', ket='$ket', pengaju='$pengaju', kepalaKeluarga='$kepalaKeluarga', jenisKK='$jenisKK', nik='$nik', jumlahKK='$jumlahKK', jumlahAnggota='$jumlahAnggota', alamatK='$alamatK', rtK='$rtK', rwK='$rwK', provinsiK='$provinsiK', kabupatenK='$kabupatenK', kecamatanK='$kecamatanK', kelurahanK='$kelurahanK', alamatK='$alamatD', rtD='$rtD', rwD='$rwD', provinsiD='$provinsiD', kabupatenD='$kabupatenD',kecamatanD='$kecamatanD', kelurahanD='$kelurahanD', statusRumah='$statusRumah', wujud='$wujud', jenisLantai='$jenisLantai', jenisTembok='$jenisTembok', sumberAir='$sumberAir', biayaAir='$biayaAir', sumberListrik='$sumberListrik', biayaListrik='$biayaListrik', makan='$makan', pengeluaran='$pengeluaran', pengeluaranBulanan='$pengeluaranBulanan', sumberPemasukan='$sumberPemasukan', program='$program', alatListrik='$alatListrik', hewan='$hewan', tran='$tran', tanah='$tanah', usaha='$usaha', tglPengajuan='$tglPengajuan', jenisBantuan='$jenisBantuan', statusPendaftar='$statusPendaftar', nama3='$nama3_baru', nama5='$nama5_baru' WHERE idVerif='$idVerif'";

                       $simpan_bank=mysqli_query($konek,$sql);

                                if ($simpan_bank) {
                            header("Location:detailKeluarga.php");

                        }
                        else {
                            header("Location:validasiDataA.php?add=gagal");
                            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                            
                        }
                     
                }elseif ($nama == '' and $nama2 =='' and $nama3 =='' and $nama4 != '' and $nama5 != '') {
                   $file_tmp = $_FILES['nama']['tmp_name']; 
                   $file2_tmp = $_FILES['nama2']['tmp_name']; 
                   $file3_tmp = $_FILES['nama3']['tmp_name']; 
                   $file4_tmp = $_FILES['nama4']['tmp_name']; 
                   $file5_tmp = $_FILES['nama5']['tmp_name']; 
                   $angka_acak     = rand(1,999);
                   $nama_baru = $angka_acak.'-'.$nama;
                   $nama2_baru = $angka_acak.'-'.$nama2;
                   $nama3_baru = $angka_acak.'-'.$nama3;
                   $nama4_baru = $angka_acak.'-'.$nama4;
                   $nama5_baru = $angka_acak.'-'.$nama5;
                   move_uploaded_file($file_tmp, '../admin/gambar/'.$nama_baru); 
                   move_uploaded_file($file2_tmp, '../admin/gambar/'.$nama2_baru); 
                   move_uploaded_file($file3_tmp, '../admin/gambar/'.$nama3_baru); 
                   move_uploaded_file($file4_tmp, '../admin/gambar/'.$nama4_baru); 
                   move_uploaded_file($file5_tmp, '../admin/gambar/'.$nama5_baru); 

                   $sql="UPDATE verifikasi SET tglVerif='$tglVerif', namaSurveyor='$namaSurveyor', namaAdmin='$namaAdmin', idPengajuan='$idPengajuan', namaPengaju='$namaPengaju', jk='$jk', tglLahir='$tglLahir', usia='$usia', agama='$agama', statusPernikahan='$statusPernikahan', noWa='$noWa', pekerjaan='$pekerjaan', hasilBulan='$hasilBulan', fisik='$fisik', penyakit='$penyakit', kesulitan='$kesulitan', alasan='$alasan', ket='$ket', pengaju='$pengaju', kepalaKeluarga='$kepalaKeluarga', jenisKK='$jenisKK', nik='$nik', jumlahKK='$jumlahKK', jumlahAnggota='$jumlahAnggota', alamatK='$alamatK', rtK='$rtK', rwK='$rwK', provinsiK='$provinsiK', kabupatenK='$kabupatenK', kecamatanK='$kecamatanK', kelurahanK='$kelurahanK', alamatK='$alamatD', rtD='$rtD', rwD='$rwD', provinsiD='$provinsiD', kabupatenD='$kabupatenD',kecamatanD='$kecamatanD', kelurahanD='$kelurahanD', statusRumah='$statusRumah', wujud='$wujud', jenisLantai='$jenisLantai', jenisTembok='$jenisTembok', sumberAir='$sumberAir', biayaAir='$biayaAir', sumberListrik='$sumberListrik', biayaListrik='$biayaListrik', makan='$makan', pengeluaran='$pengeluaran', pengeluaranBulanan='$pengeluaranBulanan', sumberPemasukan='$sumberPemasukan', program='$program', alatListrik='$alatListrik', hewan='$hewan', tran='$tran', tanah='$tanah', usaha='$usaha', tglPengajuan='$tglPengajuan', jenisBantuan='$jenisBantuan', statusPendaftar='$statusPendaftar', nama4='$nama4_baru', nama5='$nama5_baru' WHERE idVerif='$idVerif'";

                       $simpan_bank=mysqli_query($konek,$sql);

                                if ($simpan_bank) {
                            header("Location:detailKeluarga.php");

                        }
                        else {
                            header("Location:validasiDataA.php?add=gagal");
                            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                            
                        }
                     
                }elseif ($nama != '' and $nama2 !='' and $nama3 !='' and $nama4 == '' and $nama5 == '') {
                   $file_tmp = $_FILES['nama']['tmp_name']; 
                   $file2_tmp = $_FILES['nama2']['tmp_name']; 
                   $file3_tmp = $_FILES['nama3']['tmp_name']; 
                   $file4_tmp = $_FILES['nama4']['tmp_name']; 
                   $file5_tmp = $_FILES['nama5']['tmp_name']; 
                   $angka_acak     = rand(1,999);
                   $nama_baru = $angka_acak.'-'.$nama;
                   $nama2_baru = $angka_acak.'-'.$nama2;
                   $nama3_baru = $angka_acak.'-'.$nama3;
                   $nama4_baru = $angka_acak.'-'.$nama4;
                   $nama5_baru = $angka_acak.'-'.$nama5;
                   move_uploaded_file($file_tmp, '../admin/gambar/'.$nama_baru); 
                   move_uploaded_file($file2_tmp, '../admin/gambar/'.$nama2_baru); 
                   move_uploaded_file($file3_tmp, '../admin/gambar/'.$nama3_baru); 
                   move_uploaded_file($file4_tmp, '../admin/gambar/'.$nama4_baru); 
                   move_uploaded_file($file5_tmp, '../admin/gambar/'.$nama5_baru); 

                   $sql="UPDATE verifikasi SET tglVerif='$tglVerif', namaSurveyor='$namaSurveyor', namaAdmin='$namaAdmin', idPengajuan='$idPengajuan', namaPengaju='$namaPengaju', jk='$jk', tglLahir='$tglLahir', usia='$usia', agama='$agama', statusPernikahan='$statusPernikahan', noWa='$noWa', pekerjaan='$pekerjaan', hasilBulan='$hasilBulan', fisik='$fisik', penyakit='$penyakit', kesulitan='$kesulitan', alasan='$alasan', ket='$ket', pengaju='$pengaju', kepalaKeluarga='$kepalaKeluarga', jenisKK='$jenisKK', nik='$nik', jumlahKK='$jumlahKK', jumlahAnggota='$jumlahAnggota', alamatK='$alamatK', rtK='$rtK', rwK='$rwK', provinsiK='$provinsiK', kabupatenK='$kabupatenK', kecamatanK='$kecamatanK', kelurahanK='$kelurahanK', alamatK='$alamatD', rtD='$rtD', rwD='$rwD', provinsiD='$provinsiD', kabupatenD='$kabupatenD',kecamatanD='$kecamatanD', kelurahanD='$kelurahanD', statusRumah='$statusRumah', wujud='$wujud', jenisLantai='$jenisLantai', jenisTembok='$jenisTembok', sumberAir='$sumberAir', biayaAir='$biayaAir', sumberListrik='$sumberListrik', biayaListrik='$biayaListrik', makan='$makan', pengeluaran='$pengeluaran', pengeluaranBulanan='$pengeluaranBulanan', sumberPemasukan='$sumberPemasukan', program='$program', alatListrik='$alatListrik', hewan='$hewan', tran='$tran', tanah='$tanah', usaha='$usaha', tglPengajuan='$tglPengajuan', jenisBantuan='$jenisBantuan', statusPendaftar='$statusPendaftar', nama='$nama_baru', nama2='$nama2_baru', nama3='$nama3_baru' WHERE idVerif='$idVerif'";

                       $simpan_bank=mysqli_query($konek,$sql);

                                if ($simpan_bank) {
                            header("Location:detailKeluarga.php");

                        }
                        else {
                            header("Location:validasiDataA.php?add=gagal");
                            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                            
                        }
                     
                }elseif ($nama == '' and $nama2 !='' and $nama3 =='' and $nama4 != '' and $nama5 != '') {
                   $file_tmp = $_FILES['nama']['tmp_name']; 
                   $file2_tmp = $_FILES['nama2']['tmp_name']; 
                   $file3_tmp = $_FILES['nama3']['tmp_name']; 
                   $file4_tmp = $_FILES['nama4']['tmp_name']; 
                   $file5_tmp = $_FILES['nama5']['tmp_name']; 
                   $angka_acak     = rand(1,999);
                   $nama_baru = $angka_acak.'-'.$nama;
                   $nama2_baru = $angka_acak.'-'.$nama2;
                   $nama3_baru = $angka_acak.'-'.$nama3;
                   $nama4_baru = $angka_acak.'-'.$nama4;
                   $nama5_baru = $angka_acak.'-'.$nama5;
                   move_uploaded_file($file_tmp, '../admin/gambar/'.$nama_baru); 
                   move_uploaded_file($file2_tmp, '../admin/gambar/'.$nama2_baru); 
                   move_uploaded_file($file3_tmp, '../admin/gambar/'.$nama3_baru); 
                   move_uploaded_file($file4_tmp, '../admin/gambar/'.$nama4_baru); 
                   move_uploaded_file($file5_tmp, '../admin/gambar/'.$nama5_baru); 

                  $sql="UPDATE verifikasi SET tglVerif='$tglVerif', namaSurveyor='$namaSurveyor', namaAdmin='$namaAdmin', idPengajuan='$idPengajuan', namaPengaju='$namaPengaju', jk='$jk', tglLahir='$tglLahir', usia='$usia', agama='$agama', statusPernikahan='$statusPernikahan', noWa='$noWa', pekerjaan='$pekerjaan', hasilBulan='$hasilBulan', fisik='$fisik', penyakit='$penyakit', kesulitan='$kesulitan', alasan='$alasan', ket='$ket', pengaju='$pengaju', kepalaKeluarga='$kepalaKeluarga', jenisKK='$jenisKK', nik='$nik', jumlahKK='$jumlahKK', jumlahAnggota='$jumlahAnggota', alamatK='$alamatK', rtK='$rtK', rwK='$rwK', provinsiK='$provinsiK', kabupatenK='$kabupatenK', kecamatanK='$kecamatanK', kelurahanK='$kelurahanK', alamatK='$alamatD', rtD='$rtD', rwD='$rwD', provinsiD='$provinsiD', kabupatenD='$kabupatenD',kecamatanD='$kecamatanD', kelurahanD='$kelurahanD', statusRumah='$statusRumah', wujud='$wujud', jenisLantai='$jenisLantai', jenisTembok='$jenisTembok', sumberAir='$sumberAir', biayaAir='$biayaAir', sumberListrik='$sumberListrik', biayaListrik='$biayaListrik', makan='$makan', pengeluaran='$pengeluaran', pengeluaranBulanan='$pengeluaranBulanan', sumberPemasukan='$sumberPemasukan', program='$program', alatListrik='$alatListrik', hewan='$hewan', tran='$tran', tanah='$tanah', usaha='$usaha', tglPengajuan='$tglPengajuan', jenisBantuan='$jenisBantuan', statusPendaftar='$statusPendaftar', nama2='$nama2_baru', nama4='$nama4_baru', nama5='$nama5_baru' WHERE idVerif='$idVerif'";
                       $simpan_bank=mysqli_query($konek,$sql);

                                if ($simpan_bank) {
                            header("Location:detailKeluarga.php");

                        }
                        else {
                            header("Location:validasiDataA.php?add=gagal");
                            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                            
                        }
                     
                }elseif ($nama == '' and $nama2 !='' and $nama3 !='' and $nama4 != '' and $nama5 == '') {
                   $file_tmp = $_FILES['nama']['tmp_name']; 
                   $file2_tmp = $_FILES['nama2']['tmp_name']; 
                   $file3_tmp = $_FILES['nama3']['tmp_name']; 
                   $file4_tmp = $_FILES['nama4']['tmp_name']; 
                   $file5_tmp = $_FILES['nama5']['tmp_name']; 
                   $angka_acak     = rand(1,999);
                   $nama_baru = $angka_acak.'-'.$nama;
                   $nama2_baru = $angka_acak.'-'.$nama2;
                   $nama3_baru = $angka_acak.'-'.$nama3;
                   $nama4_baru = $angka_acak.'-'.$nama4;
                   $nama5_baru = $angka_acak.'-'.$nama5;
                   move_uploaded_file($file_tmp, '../admin/gambar/'.$nama_baru); 
                   move_uploaded_file($file2_tmp, '../admin/gambar/'.$nama2_baru); 
                   move_uploaded_file($file3_tmp, '../admin/gambar/'.$nama3_baru); 
                   move_uploaded_file($file4_tmp, '../admin/gambar/'.$nama4_baru); 
                   move_uploaded_file($file5_tmp, '../admin/gambar/'.$nama5_baru); 

                   $sql="UPDATE verifikasi SET tglVerif='$tglVerif', namaSurveyor='$namaSurveyor', namaAdmin='$namaAdmin', idPengajuan='$idPengajuan', namaPengaju='$namaPengaju', jk='$jk', tglLahir='$tglLahir', usia='$usia', agama='$agama', statusPernikahan='$statusPernikahan', noWa='$noWa', pekerjaan='$pekerjaan', hasilBulan='$hasilBulan', fisik='$fisik', penyakit='$penyakit', kesulitan='$kesulitan', alasan='$alasan', ket='$ket', pengaju='$pengaju', kepalaKeluarga='$kepalaKeluarga', jenisKK='$jenisKK', nik='$nik', jumlahKK='$jumlahKK', jumlahAnggota='$jumlahAnggota', alamatK='$alamatK', rtK='$rtK', rwK='$rwK', provinsiK='$provinsiK', kabupatenK='$kabupatenK', kecamatanK='$kecamatanK', kelurahanK='$kelurahanK', alamatK='$alamatD', rtD='$rtD', rwD='$rwD', provinsiD='$provinsiD', kabupatenD='$kabupatenD',kecamatanD='$kecamatanD', kelurahanD='$kelurahanD', statusRumah='$statusRumah', wujud='$wujud', jenisLantai='$jenisLantai', jenisTembok='$jenisTembok', sumberAir='$sumberAir', biayaAir='$biayaAir', sumberListrik='$sumberListrik', biayaListrik='$biayaListrik', makan='$makan', pengeluaran='$pengeluaran', pengeluaranBulanan='$pengeluaranBulanan', sumberPemasukan='$sumberPemasukan', program='$program', alatListrik='$alatListrik', hewan='$hewan', tran='$tran', tanah='$tanah', usaha='$usaha', tglPengajuan='$tglPengajuan', jenisBantuan='$jenisBantuan', statusPendaftar='$statusPendaftar', nama2='$nama2_baru', nama3='$nama3_baru', nama4='$nama4_baru' WHERE idVerif='$idVerif'";

                       $simpan_bank=mysqli_query($konek,$sql);

                                if ($simpan_bank) {
                            header("Location:detailKeluarga.php");

                        }
                        else {
                            header("Location:validasiDataA.php?add=gagal");
                            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                            
                        }
                     
                }elseif ($nama == '' and $nama2 =='' and $nama3 !='' and $nama4 != '' and $nama5 != '') {
                   $file_tmp = $_FILES['nama']['tmp_name']; 
                   $file2_tmp = $_FILES['nama2']['tmp_name']; 
                   $file3_tmp = $_FILES['nama3']['tmp_name']; 
                   $file4_tmp = $_FILES['nama4']['tmp_name']; 
                   $file5_tmp = $_FILES['nama5']['tmp_name']; 
                   $angka_acak     = rand(1,999);
                   $nama_baru = $angka_acak.'-'.$nama;
                   $nama2_baru = $angka_acak.'-'.$nama2;
                   $nama3_baru = $angka_acak.'-'.$nama3;
                   $nama4_baru = $angka_acak.'-'.$nama4;
                   $nama5_baru = $angka_acak.'-'.$nama5;
                   move_uploaded_file($file_tmp, '../admin/gambar/'.$nama_baru); 
                   move_uploaded_file($file2_tmp, '../admin/gambar/'.$nama2_baru); 
                   move_uploaded_file($file3_tmp, '../admin/gambar/'.$nama3_baru); 
                   move_uploaded_file($file4_tmp, '../admin/gambar/'.$nama4_baru); 
                   move_uploaded_file($file5_tmp, '../admin/gambar/'.$nama5_baru); 

                   $sql="UPDATE verifikasi SET tglVerif='$tglVerif', namaSurveyor='$namaSurveyor', namaAdmin='$namaAdmin', idPengajuan='$idPengajuan', namaPengaju='$namaPengaju', jk='$jk', tglLahir='$tglLahir', usia='$usia', agama='$agama', statusPernikahan='$statusPernikahan', noWa='$noWa', pekerjaan='$pekerjaan', hasilBulan='$hasilBulan', fisik='$fisik', penyakit='$penyakit', kesulitan='$kesulitan', alasan='$alasan', ket='$ket', pengaju='$pengaju', kepalaKeluarga='$kepalaKeluarga', jenisKK='$jenisKK', nik='$nik', jumlahKK='$jumlahKK', jumlahAnggota='$jumlahAnggota', alamatK='$alamatK', rtK='$rtK', rwK='$rwK', provinsiK='$provinsiK', kabupatenK='$kabupatenK', kecamatanK='$kecamatanK', kelurahanK='$kelurahanK', alamatK='$alamatD', rtD='$rtD', rwD='$rwD', provinsiD='$provinsiD', kabupatenD='$kabupatenD',kecamatanD='$kecamatanD', kelurahanD='$kelurahanD', statusRumah='$statusRumah', wujud='$wujud', jenisLantai='$jenisLantai', jenisTembok='$jenisTembok', sumberAir='$sumberAir', biayaAir='$biayaAir', sumberListrik='$sumberListrik', biayaListrik='$biayaListrik', makan='$makan', pengeluaran='$pengeluaran', pengeluaranBulanan='$pengeluaranBulanan', sumberPemasukan='$sumberPemasukan', program='$program', alatListrik='$alatListrik', hewan='$hewan', tran='$tran', tanah='$tanah', usaha='$usaha', tglPengajuan='$tglPengajuan', jenisBantuan='$jenisBantuan', statusPendaftar='$statusPendaftar', nama3='$nama3_baru', nama4='$nama4_baru', nama5='$nama5_baru' WHERE idVerif='$idVerif'";

                       $simpan_bank=mysqli_query($konek,$sql);

                                if ($simpan_bank) {
                            header("Location:detailKeluarga.php");

                        }
                        else {
                            header("Location:validasiDataA.php?add=gagal");
                            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                            
                        }
                     
                }else{
                    echo '<script>alert("anda gagal mengubah");window.location.href = "dataValidasiA.php"</script>';
                        
}
}
}
                
?>