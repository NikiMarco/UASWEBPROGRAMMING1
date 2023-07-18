<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mp.css">
</head>
<body>
  <?php include "navbar.php"?>
  <div class="container" style="width:500px; 
    padding: 20px;
    background-color: #ffffff;
    border-radius: 5px;">
  <h3>Tambah Barang</h3>
  <form action="prosestambah.php" method="post">
    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">Nama Barang</label>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Produk" name="nama_produk" required>
    </div>
    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">Img Url</label>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Img Url" name="img_url" required>
    </div>
    <div class="mb-3">
      <label for="formGroupExampleInput2" class="form-label">Deskripsi</label>
      <textarea class="form-control" id="formGroupExampleInput2" placeholder="Deskripsi" name="deskripsi" required></textarea>
    </div>
    <div class="mb-3">
      <label for="formGroupExampleInput3" class="form-label">Harga Produk (Rp)</label>
      <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Harga Produk" name="harga" required>
    </div>
      <div class="col-12">
      <button type="submit" class="btn btn-primary">Tambah</button>
    </div>
  </form>
  </div>
</body>
</html>