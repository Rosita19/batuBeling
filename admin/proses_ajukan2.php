<?php
ini_set('display_errors', 1);//Atauerror_reporting(E_ALL && ~E_NOTICE);
    include "koneksi.php";
    if (isset($_POST['btn_simpan'])) {

            //Include file koneksi, untuk koneksikan ke database
            include 'koneksi.php';
            //Cek apakah ada kiriman form dari method post
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $idPengajuan    = $_GET['idPengajuan'];
                $namaPengaju    = $_POST['namaPengaju'];
                $jk             = $_POST['jk'];
                $tglLahir       = $_POST['tglLahir'];
                $usia           = $_POST['usia'];
                $agama          = $_POST['agama'];
                $statusPernikahan = $_POST['statusPernikahan'];
                $noWa           = $_POST['noWa'];
                $pekerjaan      = $_POST['pekerjaan'];
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
                $statusAnak     = $_POST['statusAnak'];
                $makan          = $_POST['makan'];
                $pengeluaran    = $_POST['pengeluaran'];
                $pengeluaranBulanan    = $_POST['pengeluaranBulanan'];
                $sumberPemasukan = $_POST['sumberPemasukan'];
                $program        = $_POST['program'];
                $alatListrik    = $_POST['alatListrik'];
                $hewan          = $_POST['hewan'];
                $tran           = $_POST['tran'];
                $tanah          = $_POST['tanah'];
                $usaha          = $_POST['usaha'];
                $tglPengajuan   = $_POST['tglPengajuan'];
                $tglAjukan      = date('Ymd');
                $status         = $_POST['status'];
                $catatan        = $_POST['catatan'];
                $statusM        = $_POST['statusM'];
                $catatanM       = $_POST['catatanM'];
                $statusA         = $_POST['statusA'];
                $catatanA        = $_POST['catatanA'];
                $jenisBantuan    = $_POST['jenisBantuan'];
                $nama            = $_POST['nama'];
                $nama2           = $_POST['nama2'];
                $nama3           = $_POST['nama3'];
                $nama4           = $_POST['nama4'];
                $nama5           = $_POST['nama5'];

                $queri = mysqli_query($konek, "select *from verifikasi where namaPengaju = '$namaPengaju'");
                while ($data = mysqli_fetch_array($queri)){ 
                    $ajukan = 'Sudah Diajukan';
                 $sql=mysqli_query($konek, "INSERT INTO pengajuan (idPengajuan, namaPengaju, jk, tglLahir, usia, agama, statusPernikahan, noWa, pekerjaan, hasilBulan, fisik, penyakit, kesulitan, alasan, ket, pengaju, kepalaKeluarga, jenisKK, nik, jumlahKK, jumlahAnggota, alamatK, rtK, rwK, provinsiK, kabupatenK, kecamatanK, kelurahanK, alamatD, rtD, rwD, provinsiD, kabupatenD,kecamatanD, kelurahanD, statusRumah, wujud, jenisLantai, jenisTembok, sumberAir, biayaAir, sumberListrik, biayaListrik, makan, pengeluaran, pengeluaranBulanan, sumberPemasukan, program, alatListrik, hewan, tran, tanah, usaha, tglPengajuan, tglAjukan, status, catatan, statusM, catatanM, statusA, catatanA, nama, nama2, nama3, nama4, nama5) values (' ', '$namaPengaju', '$jk', '$tglLahir', '$usia', '$agama', '$statusPernikahan', '$noWa', '$pekerjaan', '$hasilBulan', '$fisik', '$penyakit', '$kesulitan', '$alasan', '$ket', '$pengaju', '$kepalaKeluarga', '$jenisKK', '$nik', '$jumlahKK', '$jumlahAnggota', '$alamatK', '$rtK', '$rwK', '$provinsiK', '$kabupatenK', '$kecamatanK', '$kelurahanK', '$alamatD', '$rtD', '$rwD', '$provinsiD', '$kabupatenD','$kecamatanD', '$kelurahanD', '$statusRumah', '$wujud', '$jenisLantai', '$jenisTembok', '$sumberAir', '$biayaAir', '$sumberListrik', '$biayaListrik', '$makan', '$pengeluaran', '$pengeluaranBulanan',  '$sumberPemasukan', '$program', '$alatListrik', '$hewan', '$tran', '$tanah', '$usaha', '$tglPengajuan', '$tglAjukan', '$status', '$catatan', '$statusM', '$catatanM', '$statusA', '$catatanA', '$nama', '$nama2', '$nama3', '$nama4', '$nama5')");
                 $sql2 = mysqli_query($konek, "UPDATE verifikasi SET ajukan = '$ajukan' where namaPengaju = '$namaPengaju'");
           

                // $simpan_bank=mysqli_query($konek,$sql);
                // $simpan_bank2 = mysqli_query($konek, $sql2)

                if ($sql & $sql2) {
                    header("Location:dataPending2A.php?");

                }
                else {
                    header("Location:ubahPengajuanA.php");
                    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                            
                }
                        
}
}
}

                
?>