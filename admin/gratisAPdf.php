<!DOCTYPE html>
<html>
   <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Admin Almaas Sosial</title>

        <link href="img/icon.png" rel="icon">
        <style>
        .poto {
            margin-top : 160px;
            margin-left: 38px;
            width:162px;
            height:162px;
            border-radius : 100%;
        }
        .depan {
            background : url('img/depanGratis.jpg');
            width: 600px;
            height : 380px;
        }
        .belakang{
            width: 600px;
            height: 380px;

        }
        .grid-container {
          display: grid;
          grid-template-columns: 220px auto;
          padding: 10px;
          color: white;

        }
        .grid-item {
          padding: 20px;
          font-size: 30px;
          text-align: center;
        }

    </style>
    </head>
    
<body>
    <?php
    include "koneksi.php";

    $idPengajuan = $_GET['idPengajuan'];

    $query = "SELECT *FROM verifikasi WHERE idPengajuan = '".$idPengajuan."'";
    $sql = mysqli_query($konek, $query);
    $data = mysqli_fetch_array($sql); 
    ?> 


            <div class="grid-container">
              <div class="">
                  <div class="depan">
                    <img class='poto' src='../admin/gambar/<?php echo "$data[nama]" ?>'>
                  </div>
              </div>
              <div style="margin-top: 170px; margin-left: 95px; font-size: 20px; width:100%; font-family: times new roman; text-align:left">

                 <strong>&nbsp;<?= $data['namaPengaju']?></strong>
                 <br>
                 <br><strong>&nbsp;&nbsp;&nbsp;&nbsp;Nik :</strong>
                 <br><strong><?= $data['nik']?></strong>
                 <br>
                 <br><strong>&nbsp;&nbsp;&nbsp;Alamat :</strong>
                 <br><strong><?= $data['alamatD']?></strong>
            </div>
              <div style="margin-left:1px">
                <br>
                  <img src="img/belakanggratis.jpeg" alt="" class="belakang">
              </div>
              
            </div>
            
    </div>

        <script>
        window.print();
       </script>
                   
</body>

</html>
