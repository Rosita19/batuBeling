<?php
    include "koneksi.php";

    if (isset($_POST['btn_simpan'])) {

            //Include file koneksi, untuk koneksikan ke database
            include 'koneksi.php';
            //Cek apakah ada kiriman form dari method post
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $id      = $_GET['id'];
                $username = $_POST['username'];
                $password  = md5($_POST['password']);
                $level     = $_POST['level'];
              
                

                $sql="UPDATE login SET username='$username', password='$password', level='$level' WHERE id='$id'";

                $simpan_bank=mysqli_query($konek,$sql);

                if ($simpan_bank) {
                    header("Location:dataUserA.php?");

                }
                else {
                    header("Location:ubahUser.php");
                    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                            
                }        
    
}}

                
?>