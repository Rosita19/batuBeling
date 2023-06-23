<?php
    include "koneksi.php";

    if (isset($_POST['btn_simpan'])) {

            //Include file koneksi, untuk koneksikan ke database
            include 'koneksi.php';
            //Cek apakah ada kiriman form dari method post
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $id             = $_POST['id'];
                $namaPengaju    = $_POST['namaPengaju'];
                $alamat         = $_POST['alamat'];
                $ket            = $_POST['ket'];
                $tglAbsen       = $_POST['tglAbsen'];
                $status         = $_POST['status'];
                $tahap          = $_POST['tahap'];
                


                $ok = mysqli_query ($konek,"select namaPengaju, MONTH(tglAbsen) as bulan,YEAR(tglAbsen) as tahun from absen where status='Diambil'");
                $okk = mysqli_num_rows($ok);
                if (strlen($okk<2)) {
                    $sql="INSERT INTO absen (id, namaPengaju, alamat, ket, tglAbsen, status, tahap) values ('$id', '$namaPengaju', '$alamat', '$ket',  '$tglAbsen', '$status', '$tahap')";
                        //jika insert data berhasil, maka akan dikembalikan ke halaman tampilgambar.php
                    $simpan_bank=mysqli_query($konek,$sql);

                    if ($simpan_bank) {
                        header("Location:dataAbsenA.php");

                    }
                    else {
                        header("Location:tambahPengajuanA.php");
                        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                                    
                    }
                       
                    
                    
                }else{

                     echo ("<script>window.alert('Mohon maaf beras sudah diambil 2 kali dalam sebulan');window.location.href='dataAbsenA.php';</script>");        
                    
               }         
    }
}

                
?>