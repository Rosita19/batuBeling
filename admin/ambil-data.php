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

?>