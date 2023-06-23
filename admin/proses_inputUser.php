<?php
    include "koneksi.php";

    if (isset($_POST['btn_simpan'])) {

            //Include file koneksi, untuk koneksikan ke database
            include 'koneksi.php';
            //Cek apakah ada kiriman form dari method post
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $id      = $_POST['id'];
                $name    = $_POST['name'];
                $username = $_POST['username'];
                $password  = md5($_POST['password']);
                $level     = $_POST['level'];
              
                

                $sql="INSERT INTO login (id, name, username, password, level) values ('$id', '$name', '$username', '$password', '$level')";
                        //jika insert data berhasil, maka akan dikembalikan ke halaman tampilgambar.php
                $simpan_bank=mysqli_query($konek,$sql);

                    if ($simpan_bank) {
                        header("Location:dataUserA.php");

                    }
                    else {
                        header("Location:tambahUser.php");
                        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                                    
                    }
                       
                    
                       
                    
               }         
    
}
                
?>