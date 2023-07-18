<?php
include "koneksipr.php";
$productID = $_GET['p_id'];

$query = "SELECT * FROM product WHERE p_id = $productID";
$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) > 0) {
    $product = mysqli_fetch_assoc($result);
    include "produk.php";
}
    else {
        echo 'Product not found.';
    }
?>