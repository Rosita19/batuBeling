<?php
    include "koneksi.php";

    $nama = $_FILES['nama']['name'];

        
    if (isset($_POST['btn_simpan'])) {

            //Include file koneksi, untuk koneksikan ke database
            include 'koneksi.php';
            //Cek apakah ada kiriman form dari method post
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $idPengajuan    = $_GET['idPengajuan'];
                $nama           = $_FILES['nama']['name'];

                if($nama != "") {
                    echo '<script>alert("Berhasil Melakukan Perubahan");window.location.href = "tahap1A.php"</script>';
                    $file_tmp = $_FILES['nama']['tmp_name'];   
                    $angka_acak     = rand(1,999);
                    $nama_baru = $angka_acak.'-'.$nama;

                    move_uploaded_file($file_tmp, '../admin/gambar/'.$nama_baru);

                    $query  = "UPDATE pengajuan SET nama = '$nama_baru' where idPengajuan = '$idPengajuan'";
                    $result = mysqli_query($konek, $query);
                }else{
                    echo '<script>alert("Gagal Melakukan Perubahan");window.location.href = "tahap1A.php"</script>';

                }
                            
                            
                        
}
}

?>