<?php
include "koneksi.php";

session_start();

if (!isset($_SESSION['u_id'])) {
    header("Location: login.php");
    exit();
}

$sellerID = $_SESSION['u_id'];
if(isset($_POST['tambah'])){
    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $img_url = $_POST['img_url'];
    $query="INSERT INTO product (s_id, nama_produk, deskripsi, harga, img_url) VALUES('$sellerID', '$nama_produk', '$deskripsi', '$harga', $img_url')";
    $proses=mysqli_query($koneksi, $query);
      if ($proses) {
      echo "<script type='text/javascript'>
      alert ('Produk berhasil ditambahkan')
      </script>";
      include "beranda.php";
  }
  else{
	echo "<script type='text/javascript'>
			alert ('Produk gagal ditambahkan')
		</script>";
    }
}
mysqli_close($koneksi);
?>