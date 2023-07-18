<?php
include "koneksi.php";

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$sellerID = $_SESSION['user_id'];
$productID = $_GET['p_id'];

$query = "SELECT * FROM product WHERE p_id = $productID AND s_id = $sellerID";
$result = mysqli_query($koneksi, $query);
$product = mysqli_fetch_assoc($result);

if (!$product) {
    echo "<script type='text/javascript'>
			alert ('Terjadi Kesalahan');
		</script>";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $namaproduk = $_POST['np'];
    $deskripsi = $_POST['dkp'];
    $harga = $_POST['hrg'];

    $query = "UPDATE products SET nama_produk = '$namaproduk', deskripsi = '$deskripsi', harga = '$harga' 
              WHERE p_id = $productID";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: produkjual.php");
        exit();
    } else {
        echo "<script type='text/javascript'>
			alert ('Terjadi Kesalahan');
		</script>";
        echo 'Error updating the product.';
    }
}
mysqli_close($connection);
?>
