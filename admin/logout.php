<?php
include "koneksi.php";
    error_reporting(0);
    if($_SESSION['level']=="admin"){
       header("location:../login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<title>Logout</title>
</head>
<body>
<?php
	session_start();
	$des = session_destroy();
	if($des){ ?>
		<script>
            Swal.fire({
                title: 'LOGOUT',
                text: "Admin berhasil logout",
                icon: 'success',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "../index.php";
                }
            })
        </script>
	<?php } ?>
</body>
</html>

