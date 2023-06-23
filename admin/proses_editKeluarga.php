<?php
ini_set('display_errors', 1);//Atauerror_reporting(E_ALL && ~E_NOTICE);
    include "koneksi.php";
    if (isset($_POST['btn_simpan'])) {

            //Include file koneksi, untuk koneksikan ke database
            include 'koneksi.php';
            //Cek apakah ada kiriman form dari method post
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $idKeluarga        = $_GET['idKeluarga'];
                $namakeluarga       = $_POST['namakeluarga'];
                $pekerjaanKeluarga  = $_POST['pekerjaanKeluarga'];
                $penghasilan        = $_POST['penghasilan'];
                $statusKeluarga     = $_POST['statusKeluarga'];
                $kondisiFisik       = $_POST['kondisiFisik'];
                $riwayatPenyakit    = $_POST['riwayatPenyakit'];

                

                $sql="UPDATE keluarga SET namakeluarga='$namakeluarga', pekerjaanKeluarga='$pekerjaanKeluarga', penghasilan='$penghasilan', statusKeluarga='$statusKeluarga', kondisiFisik='$kondisiFisik', riwayatPenyakit='$riwayatPenyakit' WHERE idKeluarga='$idKeluarga'";

                $simpan_bank=mysqli_query($konek,$sql);

                if ($simpan_bank) {
                    echo '<script>alert("Anda berhasil mengedit");window.location.href = "tahap1A.php"</script>';

                }
                else {
                    echo '<script>alert("anda gagal merubah");window.location.href = "editKeluarga.php"</script>';
                            
                }
                        
}
}
                
?>