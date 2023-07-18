<?php
include "koneksi.php";

$query = "SELECT * FROM product";
$result = mysqli_query($koneksi, $query);
$products = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }
}
mysqli_free_result($result);

?>
