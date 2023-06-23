<?php

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
                $jk             = $_POST['jk'];
                $pekerjaan      = $_POST['pekerjaan'];
                $jenisBantuan   = $_POST['jenisBantuan'];
                
                $sql = "UPDATE verifikasi SET tglVerif='$tglVerif', namaSurveyor='$namaSurveyor', namaAdmin='$namaAdmin', idPengajuan='$idPengajuan', namaPengaju='$namaPengaju', jk='$jk', pekerjaan='$pekerjaan', jenisBantuan='$jenisBantuan' WHERE idVerif='$idVerif'";

                $simpan_bank=mysqli_query($konek,$sql);

                if ($simpan_bank) {
                    header("Location:tahap2A.php?");

                }
                else {
                    header("Location:kriteriaA.php");
                    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                            
                }
                        
        }
}
                
?>