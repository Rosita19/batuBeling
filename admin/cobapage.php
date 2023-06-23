<html>
<head>
    <title>Cara Membuat Pagination Dengan PHP MySQL</title>    
</head>
<body>
    <h2>Tutorial Cara Membuat Pagination Dengan PHP MySQL - Paging PHP</h2>
    <h5>Daftar Surat Masuk</h5>
    <table border="1" cellpadding="2">
        <tr height="32">
            <th style="margin: 5px">Id Pengaju</th>
                                            <th>Nama</th>
                                            <th>NIK</th>
                                            <th>Alamat Domis</th>
                                            <th>Pengaju</th>
                                            <th>Tanggal Pengajuan</th>
                                            <th>Tgl Diajukan Lagi</th>
                                            <th>Verifikasi SPV</th>
                                            <th>Keterangan SPV</th>
                                            <th>Verifikasi Managemen</th>
                                            <th>Keterangan Managemen</th>
                                            <th>Verifikasi Admin </th>
                                            <th>Keterangan Admin</th>
                                            <th>KTP</th>
                                            <th>KK</th>
        </tr>
            <?php
                include "koneksi.php";
                $halaman = 2; /* page halaman*/
                $page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                $mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;
                
                $result    =mysqli_query($konek, "SELECT * FROM pengajuan");
                $total = mysqli_num_rows($result);
                $pages = ceil($total/$halaman);
                
                $tampilMas    =mysqli_query($konek, "SELECT * FROM pengajuan LIMIT $mulai, $halaman");
                $no    =$mulai+1;
                while($data    =mysqli_fetch_array($tampilMas)){
                        echo "<tr>";
                                      echo "<td>".$data['idPengajuan']."</td>";
                                      echo "<td>".$data['namaPengaju']."</td>";
                                      echo "<td>".$data['nik']."</td>";
                                      echo "<td>".$data['alamatD']."</td>";
                                      echo "<td>".$data['pengaju']."</td>";
                                      echo "<td>".$data['tglPengajuan']."</td>";
                                      echo "<td>".$data['tglAjukan']."</td>";
                                      if ($data["status"] == 'Proses'){
                                            echo "<td><a class='btn btn-info fa fa-check' style='border-radius: 5px;'>".$data['status']."</a></td>";

                                        }elseif ($data["status"] == 'Lanjut Survey') {
                                            echo "<td><a class='btn btn-success fa fa-check' style='border-radius: 5px;'>".$data['status']."</a></td>";
                                        }else{
                                            echo "<td><a class='btn btn-warning fa fa-check' style='border-radius: 5px;'>".$data['status']."</a></td>";
                                        }
                                      
                                      echo "<td>".$data['catatan']."</td>";
                                      if ($data["statusM"] == 'Proses'){
                                            echo "<td><a class='btn btn-info fa fa-check' style='border-radius: 5px;'>".$data['statusM']."</a></td>";

                                        }elseif ($data["statusM"] == 'Lanjut Survey') {
                                            echo "<td><a class='btn btn-success fa fa-check' style='border-radius: 5px;'>".$data['statusM']."</a></td>";
                                        }else{
                                            echo "<td><a class='btn btn-warning fa fa-check' style='border-radius: 5px;'>".$data['statusM']."</a></td>";
                                        }
                                      
                                      echo "<td>".$data['catatanM']."</td>";
                                      if ($data["statusA"] == 'Proses'){
                                            echo "<td><a class='btn btn-info fa fa-check' style='border-radius: 5px;'>".$data['statusA']."</a></td>";

                                        }elseif ($data["statusA"] == 'Lolos Tahap 1') {
                                            echo "<td><a class='btn btn-success fa fa-check' style='border-radius: 5px;'>".$data['statusA']."</a></td>";
                                        }else{
                                            echo "<td><a class='btn btn-warning fa fa-check' style='border-radius: 5px;'>".$data['statusA']."</a></td>";
                                        }
                                      
                                      echo "<td>".$data['catatanA']."</td>";
                                      echo "<td><a class='btn btn-primary fa fa-image' style='border-radius: 5px;' href='ktpA.php?idPengajuan=".$data['idPengajuan']."'></a></td>";
                                      echo "<td><a class='btn btn-primary fa fa-image' style='border-radius: 5px;' href='kkA.php?idPengajuan=".$data['idPengajuan']."'></a></td>";
                                      echo "<td><a class='btn btn-danger fa fa-eye' style='border-radius: 5px;' href='tampilPengajuanA.php?idPengajuan=".$data['idPengajuan']."'> </a></td>";
                                      echo "<td><a class='btn btn-success fa fa-edit' style='border-radius: 5px;' href='ubahPengajuanA.php?idPengajuan=".$data['idPengajuan']."'></a></td>"; 
                                      echo "<td><a class='btn btn-danger fa fa-trash' style='border-radius: 5px;' href='hapusPengajuanA.php?idPengajuan=".$data['idPengajuan']."'></a></td>"; 
                                      echo "<tr>";
                }
            ?>
        
    </table>
    <br />
    <div style="font-weight:bold;">
        Paging
        <?php
            for ($i=1; $i<=$pages ; $i++){
        ?>
            <a href="cobaPage.php?halaman=<?php echo $i; ?>" style="text-decoration:none">   <u><?php echo $i; ?></u></a>
        <?php
            }
        ?>
    </div>
</body>
</html>