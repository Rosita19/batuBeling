<?php
    //membuat koneksi
    include "koneksi.php";
    if (isset($_POST['simpan'])) {// code...

    
    //memasukkan data ke array
        $namakeluarga       = $_POST['namakeluarga'];
        $pekerjaanKeluarga  = $_POST['pekerjaanKeluarga'];
        $penghasilan        = $_POST['penghasilan'];
        $statusKeluarga     = $_POST['statusKeluarga'];
        $kondisiFisik       = $_POST['kondisiFisik'];
        $riwayatPenyakit    = $_POST['riwayatPenyakit'];
        $idPengajuan        = $_POST['idPengajuan'];


        $total = count($namakeluarga);


    //melakukan perulangan input
    for($i=0; $i<$total; $i++){

        mysqli_query($konek, "insert into keluarga set
            namakeluarga        = '$namakeluarga[$i]',
            pekerjaanKeluarga   = '$pekerjaanKeluarga[$i]',
            penghasilan         = '$penghasilan[$i]',
            statusKeluarga      = '$statusKeluarga[$i]',
            kondisiFisik        = '$kondisiFisik[$i]',
            riwayatPenyakit     = '$riwayatPenyakit[$i]', 
            idPengajuan         = '$idPengajuan' 

        ");
    }

    //kembali ke halaman sebelumnya
    header("location: dataPengajuanA.php");
}