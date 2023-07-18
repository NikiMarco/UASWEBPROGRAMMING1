<?php
include "koneksi.php";
session_start();

if (!isset($_SESSION['user_id'])) {
    // User is not logged in, redirect to the login page or display an error message
    header("Location: login.php");
    exit();
}

$sellerID = $_SESSION['user_id'];

$query = "SELECT * FROM product WHERE s_id = $sellerID";
$result = mysqli_query($koneksi, $query);
include "navbar.php";
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="card text-center mb-3" style="width: 18rem; float:left; margin: 30px;">';
        echo '<img src="'. $row['img_url']. '" class="card-img-top" alt="produk" style="width: 18rem; height: 180px">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $row['nama_produk'] . '</h5>';
        echo '<p class="card-text">' . $row['deskripsi'] . '</p>';
        echo '<p class="card-text"> Harga: Rp' . $row['harga'] . '</p>';
        echo '<a href="edit.php?p_id=' . $row['p_id'] . '">Edit</a> | ';
        echo '<a href="hapusproduk.php?p_id=' . $row['p_id'] . '">Delete</a>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo 'No products found.';
}
mysqli_close($koneksi);
?>
