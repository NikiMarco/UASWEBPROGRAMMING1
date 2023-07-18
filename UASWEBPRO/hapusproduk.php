<?php
include "koneksi.php";

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$sellerID = $_SESSION['user_id'];
$productID = $_GET['p_id'];

$query = "DELETE FROM product WHERE p_id = $productID AND s_id = $sellerID";
$result = mysqli_query($koneksi, $query);

if ($result) {
    header("Location: produkjual.php");
    exit();
} else {
    echo "<script type='text/javascript'>
			alert ('Gagal Menghapus Produk');
		</script>";
}
mysqli_close($koneksi);
?>
