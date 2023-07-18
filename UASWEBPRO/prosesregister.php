<?php 

include "koneksi.php";

$username = $_POST['us'];
$password = md5($_POST['ps']);
$role = $_POST['rl'];

$query = "INSERT INTO users (username, password, role) VALUES('$username', '$password', '$role')";
$exceute = mysqli_query($koneksi, $query);

if ($exceute) {
    echo "<script type='text/javascript'>
			alert ('Registrasi Berhasil!')
		</script>";
	include "login.php";
}
else{
	echo "<script type='text/javascript'>
			alert ('Registrasi Gagal!')
		</script>";
}
mysqli_close($koneksi);
?>