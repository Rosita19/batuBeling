<?php 
    // fungsi header dengan mengirimkan raw data excel

    header("Content-type:application/pdf");
    header("Content-Disposition: attachment; filename=export-to-pdf.pdf");

         
    // tambahkan table
include 'koneksi.php';
?>

          <table cellpadding="5" cellspacing="0" border="1" width="100%">
            <tr>
                <th style="margin: 5px">Id Pengaju</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Agama</th>
                <th>Usia</th>
                <th>Jenis KK</th>
                <th>Alamat KK</th>
                <th>RT KK</th>
                <th>RW KK</th>
                <th>Alamat Domis</th>
                <th>RT Domis</th>
                <th>RW Domis</th>
                <th>Alasan</th>
                <th>Keterangan</th>
                <th>Pengaju</th>
                <th>Tanggal Pengajuan</th>
                <th>Status</th>
                <th>Gambar</th>
            </tr>

            <?php
           $sql = mysqli_query($konek, "select *from pengajuan ");
           while($data = mysqli_fetch_array($sql)){
            ?>
            <tr>
            <td><?= $data['idPengajuan'] ?></td>
            <td><?= $data['namaPengaju']?></td>
            <td><?= $data['jk']?></td>
            <td><?= $data['tglLahir']?></td>
            <td><?= $data['agama']?></td>
            <td><?= $data['usia']?></td>
            <td><?= $data['jenisKK']?></td>
            <td><?= $data['alamatK']?></td>
            <td><?= $data['rtK']?></td>
            <td><?= $data['rwK']?></td>
            <td><?= $data['alamatD']?></td>
            <td><?= $data['rtD']?></td>
            <td><?= $data['rwD']?></td>
            <td><?= $data['alasan']?></td>
            <td><?= $data['ket']?></td>
            <td><?= $data['pengaju']?></td>
            <td><?= $data['tglPengajuan']?></td>
            <td><?= $data['status']?></td>
            <td><?php echo "<img src='gambar/$data[nama]' />";?></td></td>
            
            
            </tr>
              <?php
           }
           ?>
       </table>