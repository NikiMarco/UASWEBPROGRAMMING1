<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mp.css">
</head>
<body>
    <?php include "navbar.php";
    include "koneksipr.php";?>
    <div class ="container" style="width:500px; 
    padding: 20px;
    background-color: #ffffff;
    border-radius: 5px;">
    <form action="editproduk.php?p_id=<?php echo $productID; ?>" method="POST">
        <label>Nama Produk</label>
        <input type="text" name="np" value="<?php echo $product['nama_produk']; ?>" required><br>
        <label>Deskripsi</label>
        <input ty name="dkp" required><?php echo $product['deskripsi']; ?></textarea><br>
        <label>Harga (Rp)</label>
        <input type="number" name="hrg" value="<?php echo $product['harga']; ?>" required><br>
        <button type="submit">Update Produk</button>
    </form>
    </div>  
</body>
</html>