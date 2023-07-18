<?php 

include "koneksi.php";
session_start();

$username = $_POST['us'];
$password = md5($_POST['ps']);

$query = "SELECT * FROM users where username='$username' AND password='$password'";
$exceute = mysqli_query($koneksi, $query);
$proses = mysqli_fetch_assoc($exceute);

if ($proses) {
	$userID = $proses['u_id'];
    $_SESSION['user_id'] = $userID;
	$role = $proses['role'];
	$_SESSION['role'] = $role;
	include "beranda.php";
}
else{
	echo "<script type='text/javascript'>
			alert ('username dan password salah!');
		</script>";
}
mysqli_close($koneksi);
 ?>