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
                $alamatD        = $_POST['alamatD'];
                $rtD            = $_POST['rtD'];
                $rwD            = $_POST['rwD'];
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
                $status         = $_POST['status'];
                $catatan        = $_POST['catatan'];
                $statusM         = $_POST['statusM'];
                $catatanM        = $_POST['catatanM'];
                $statusA         = $_POST['statusA'];
                $catatanA        = $_POST['catatanA'];

                

                $sql="UPDATE pengajuan SET namaPengaju='$namaPengaju', jk='$jk', tglLahir='$tglLahir', usia='$usia', agama='$agama', statusPernikahan='$statusPernikahan', noWa='$noWa', pekerjaan='$pekerjaan', hasilBulan='$hasilBulan', fisik='$fisik', penyakit='$penyakit', kesulitan='$kesulitan', alasan='$alasan', ket='$ket', pengaju='$pengaju', kepalaKeluarga='$kepalaKeluarga', jenisKK='$jenisKK', nik='$nik', jumlahKK='$jumlahKK', jumlahAnggota='$jumlahAnggota', alamatK='$alamatK', rtK='$rtK', rwK='$rwK', alamatD='$alamatD', rtD='$rtD', rwD='$rwD', statusRumah='$statusRumah', wujud='$wujud', jenisLantai='$jenisLantai', jenisTembok='$jenisTembok', sumberAir='$sumberAir', biayaAir='$biayaAir', sumberListrik='$sumberListrik', biayaListrik='$biayaListrik', makan='$makan', pengeluaran='$pengeluaran', pengeluaranBulanan='$pengeluaranBulanan', sumberPemasukan='$sumberPemasukan', program='$program', alatListrik='$alatListrik', hewan='$hewan', tran='$tran', tanah='$tanah', usaha='$usaha', status='$status', catatan='$catatan', statusM='$statusM', catatanM='$catatanM', statusA='$statusA', catatanA='$catatanA' WHERE idPengajuan='$idPengajuan'";

                $simpan_bank=mysqli_query($konek,$sql);

                if ($simpan_bank) {
                    header("Location:dataPengajuanA.php?");

                }
                else {
                    header("Location:ubahPengajuanA.php?gagal");
                    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                            
                }
                        
}
}
                
?>