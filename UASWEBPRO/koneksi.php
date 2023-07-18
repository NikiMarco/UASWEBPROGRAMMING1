<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_mp");
if (mysqli_connect_errno()) {
    echo "Koneksi gagal";
}
?>