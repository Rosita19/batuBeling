<?php
    include "koneksi.php";

    if (isset($_POST['kendaraan'])) {
        $kendaraan = $_POST["kendaraan"];

        $sql = "select * from regencies where province_id=$kendaraan";

        $hasil = mysqli_query($konek, $sql);
        $no = 0;
        while ($data = mysqli_fetch_array($hasil)) {
            ?>
            <option value="<?php echo  $data['id']; ?>"><?php echo $data['name']; ?></option>
            <?php
        }
    }

    if (isset($_POST['merk'])) {
        $merk = $_POST["merk"];

        $sql = "select * from districts where regency_id=$merk";

        $hasil = mysqli_query($konek, $sql);
        $no = 0;
        while ($data = mysqli_fetch_array($hasil)) {
            ?>
            <option value="<?php echo  $data['id']; ?>"><?php echo $data['name']; ?></option>
            <?php
        }
    }
    if (isset($_POST['tipe'])) {
        $tipe = $_POST["tipe"];

        $sql = "select * from villages where district_id=$tipe";

        $hasil = mysqli_query($konek, $sql);
        $no = 0;
        while ($data = mysqli_fetch_array($hasil)) {
            ?>
            <option value="<?php echo  $data['id']; ?>"><?php echo $data['name']; ?></option>
            <?php
        }
    }
    if (isset($_POST['kendaraan2'])) {
        $kendaraan = $_POST["kendaraan2"];

        $sql = "select * from regencies where province_id=$kendaraan";

        $hasil = mysqli_query($konek, $sql);
        $no = 0;
        while ($data = mysqli_fetch_array($hasil)) {
            ?>
            <option value="<?php echo  $data['id']; ?>"><?php echo $data['name']; ?></option>
            <?php
        }
    }

    if (isset($_POST['merk2'])) {
        $merk = $_POST["merk2"];

        $sql = "select * from districts where regency_id=$merk";

        $hasil = mysqli_query($konek, $sql);
        $no = 0;
        while ($data = mysqli_fetch_array($hasil)) {
            ?>
            <option value="<?php echo  $data['id']; ?>"><?php echo $data['name']; ?></option>
            <?php
        }
    }
    if (isset($_POST['tipe2'])) {
        $tipe = $_POST["tipe2"];

        $sql = "select * from villages where district_id=$tipe";

        $hasil = mysqli_query($konek, $sql);
        $no = 0;
        while ($data = mysqli_fetch_array($hasil)) {
            ?>
            <option value="<?php echo  $data['id']; ?>"><?php echo $data['name']; ?></option>
            <?php
        }
    }
    if (isset($_POST['btn_simpan'])) {

            //Include file koneksi, untuk koneksikan ke database
            include 'koneksi.php';
            //Cek apakah ada kiriman form dari method post
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $idPengajuan    = $_POST['idPengajuan'];
                $namaPengaju    = $_POST['namaPengaju'];
                $jk             = $_POST['jk'];
                $tglLahir       = $_POST['tglLahir'];
                $usia           = $_POST['usia'];
                $agama          = $_POST['agama'];
                $statusPernikahan = $_POST['statusPernikahan'];
                $noWa           = $_POST['noWa'];
                $pekerjaan      = $_POST['pekerjaan'];
                $fisik          = $_POST['fisik'];
                $penyakit       = $_POST['penyakit'];
                $kesulitan      = $_POST['kesulitan'];
                $alasan         = $_POST['alasan'];
                $ket            = $_POST['ket'];
                $pengaju        = $_POST['pengaju'];
                $kepalaKeluarga = $_POST['kepalaKeluarga'];
                $jenisKK        = $_POST['jenisKK'];
                $nik            = $_POST['nik'];
                $jumlahKK       = $_POST['jumlahKK'];
                $jumlahAnggota  = $_POST['jumlahAnggota'];
                $alamatK        = $_POST['alamatK'];
                $rtK            = $_POST['rtK'];
                $rwK            = $_POST['rwK'];
                $provinsiK      = $_POST['provinsiK'];
                $kabupatenK     = $_POST['kabupatenK'];
                $kecamatanK     = $_POST['kecamatanK'];
                $kelurahanK     = $_POST['kelurahanK'];
                $alamatD        = $_POST['alamatD'];
                $rtD            = $_POST['rtD'];
                $rwD            = $_POST['rwD'];
                $provinsiD      = $_POST['provinsiD'];
                $kabupatenD     = $_POST['kabupatenD'];
                $kecamatanD     = $_POST['kecamatanD'];
                $kelurahanD     = $_POST['kelurahanD'];
                $statusRumah    = implode(",", $_POST['statusRumah']);
                $wujud          = $_POST['wujud'];
                $jenisLantai    = implode(",", $_POST['jenisLantai']);
                $jenisTembok    = implode(",", $_POST['jenisTembok']);
                $sumberAir      = implode(",", $_POST['sumberAir']);
                $biayaAir       = $_POST['biayaAir'];
                $sumberListrik  = implode(",", $_POST['sumberListrik']);
                $biayaListrik   = $_POST['biayaListrik'];
                $statusAnak     = $_POST['statusAnak'];
                $makan          = $_POST['makan'];
                $pengeluaran    = $_POST['pengeluaran'];
                $sumberPemasukan = $_POST['sumberPemasukan'];
                $program        = implode(",", $_POST['program']);
                $alatListrik    = $_POST['alatListrik'];
                $hewan          = $_POST['hewan'];
                $tran           = $_POST['tran'];
                $tanah          = $_POST['tanah'];
                $usaha          = $_POST['usaha'];
                $tglPengajuan   = date('Ymd');
                $tglAjukan      = '';
                $status         = 'Proses';
                $catatan        = '-';
                $statusM        = 'Proses';
                $catatanM       = '-';
                $statusA        = 'Proses';
                $catatanA       = '-';
                $ttd            = '';
                


                $nama_file = $_FILES['gambar']['name'];
                $tmp_file = $_FILES['gambar']['tmp_name'];
                $nama_file1 = $_FILES['gambar1']['name'];
                $tmp_file1 = $_FILES['gambar1']['tmp_name'];
                $nama_file2 = $_FILES['gambar2']['name'];
                $tmp_file2 = $_FILES['gambar2']['tmp_name'];
                $nama_file3 = $_FILES['gambar3']['name'];
                $tmp_file3 = $_FILES['gambar3']['tmp_name'];
                $nama_file4 = $_FILES['gambar4']['name'];
                $tmp_file4 = $_FILES['gambar4']['tmp_name'];

                $path = "admin/gambar/".$nama_file;
                $path1 = "admin/gambar/".$nama_file1;
                $path2 = "admin/gambar/".$nama_file2;
                $path3 = "admin/gambar/".$nama_file3;
                $path4 = "admin/gambar/".$nama_file4;

                $ceknik    ="SELECT nik FROM pengajuan WHERE nik='$_POST[nik]'";
                $sql       =mysqli_query($konek, $ceknik);
        
                if($sql > 0) {
                    $_SESSION['pesan'] = "Oops! Duplikat input data ...";
                    header("location:index.php?pesan=gagal");
                }else{


                    if(move_uploaded_file($tmp_file, $path) && (move_uploaded_file($tmp_file1, $path1)) && (move_uploaded_file($tmp_file2, $path2)) && (move_uploaded_file($tmp_file3, $path3)) && (move_uploaded_file($tmp_file4, $path4))){ 
                    //query untuk memasukkan data ke dalam database
                                // $sql = mysqli_query($konek,"insert into gambar set nama='$nama_file', nama2='$nama_file1'");
                        $sql="INSERT INTO pengajuan (id, idPengajuan, namaPengaju, jk, tglLahir, usia, agama, statusPernikahan, noWa, pekerjaan, fisik, penyakit, kesulitan, alasan, ket, pengaju, kepalaKeluarga, jenisKK, nik, jumlahKK, jumlahAnggota, alamatK, rtK, rwK, provinsiK, kabupatenK, kecamatanK, kelurahanK, alamatD, rtD, rwD, provinsiD, kabupatenD,kecamatanD, kelurahanD, statusRumah, wujud, jenisLantai, jenisTembok, sumberAir, biayaAir, sumberListrik, biayaListrik, statusAnak, makan, pengeluaran, sumberPemasukan, program, alatListrik, hewan, tran, tanah, usaha, tglPengajuan, tglAjukan, status, catatan, statusM, catatanM, statusA, catatanA, ttd, nama, nama2, nama3, nama4, nama5) values (' ', '$idPengajuan', '$namaPengaju', '$jk', '$tglLahir', '$usia', '$agama', '$statusPernikahan', '$noWa', '$pekerjaan', '$fisik', '$penyakit', '$kesulitan', '$alasan', '$ket', '$pengaju', '$kepalaKeluarga', '$jenisKK', '$nik', '$jumlahKK', '$jumlahAnggota', '$alamatK', '$rtK', '$rwK', '$provinsiK', '$kabupatenK', '$kecamatanK', '$kelurahanK', '$alamatD', '$rtD', '$rwD', '$provinsiD', '$kabupatenD','$kecamatanD', '$kelurahanD', '$statusRumah', '$wujud', '$jenisLantai', '$jenisTembok', '$sumberAir', '$biayaAir', '$sumberListrik', '$biayaListrik', '$statusAnak', '$makan', '$pengeluaran', '$sumberPemasukan', '$program', '$alatListrik', '$hewan', '$tran', '$tanah', '$usaha', '$tglPengajuan', '$tglAjukan', '$status', '$catatan', '$statusM', '$catatanM', '$statusA', '$catatanA', '$ttd', '$nama_file', '$nama_file1', '$nama_file2', '$nama_file3', '$nama_file4')";
                    //jika insert data berhasil, maka akan dikembalikan ke halaman tampilgambar.php
                            $simpan_bank=mysqli_query($konek,$sql);

                            if ($simpan_bank) {
                                header("Location:dataPengajuanA.php");

                            }
                            else {
                                header("Location:tambahPengajuanA.php?add=gagal");
                                echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                                
                            }
                        
                        }
                    }
            }
}
                
?>