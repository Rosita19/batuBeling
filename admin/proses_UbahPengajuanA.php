<?php
ini_set('display_errors', 1);//Atauerror_reporting(E_ALL && ~E_NOTICE);
    include "koneksi.php";
    if (isset($_POST['btn_simpan'])) {

            //Include file koneksi, untuk koneksikan ke database
            include 'koneksi.php';
            //Cek apakah ada kiriman form dari method post
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $idPengajuan    = $_GET['idPengajuan'];
                $statusA         = $_POST['statusA'];
                $catatanA        = $_POST['catatanA'];

                

                $sql="UPDATE pengajuan SET statusA='$statusA', catatanA='$catatanA' WHERE idPengajuan='$idPengajuan'";

                $simpan_bank=mysqli_query($konek,$sql);

                if ($simpan_bank) {
                    header("Location:dataPengajuanA.php?");

                }
                else {
                    header("Location:ubahPengajuanA.php");
                    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                            
                }
                        
}
}
                
?>