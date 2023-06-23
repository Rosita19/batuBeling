<?php
ini_set('display_errors', 1);//Atauerror_reporting(E_ALL && ~E_NOTICE);
    include "koneksi.php";
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
                $jenisKelamin   = $_POST['jenisKelamin'];
                $pekerjaan      = $_POST['pekerjaan'];
                $statusPendaftar= $_POST['statusPendaftar'];
                
                $sql="UPDATE verifikasi SET tglVerif='$tglVerif', namaSurveyor='$namaSurveyor', namaAdmin='$namaAdmin', idPengajuan='$idPengajuan', namaPengaju='$namaPengaju', jk='$jk', pekerjaan='$pekerjaan', statusPendaftar='$statusPendaftar' WHERE idVerif='$idVerif'";

                $simpan_bank=mysqli_query($konek,$sql);

                if ($simpan_bank) {
                    header("Location:hasilA.php?");

                }
                else {
                    header("Location:masaPendaftarA.php");
                    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                            
                }
                        
}
}
                
?>