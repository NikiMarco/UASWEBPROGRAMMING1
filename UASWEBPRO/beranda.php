<!DOCTYPE html>
<html>
<head>
  <title>Marketplace</title>
  <link rel="stylesheet" href="mp.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
  <?php include "navbar.php";?>
  <div class="container" style="width: 500px;">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://www.thoughtco.com/thmb/Us-4-juC71kAdEiDiPa4FMj2bzI=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-539884551-57faea2f5f9b586c357f6424.jpg" class="d-block w-100" alt="test1" style="height: 300px;">
        </div>
        <div class="carousel-item">
          <img src="https://hiltonheadappraisers.com/wp-content/uploads/antiques-word1.jpg" class="d-block w-100" alt="test2" style="height: 300px;">
        </div>
        <div class="carousel-item">
          <img src="https://thumbs.dreamstime.com/b/vintage-text-word-typography-style-illustration-beige-background-146108722.jpg" class="d-block w-100" alt="test3" style="height: 300px;">
        </div>
      </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    </div>
  </div>
  <?php include "koneksipr.php"?>
  <div class="container">
    <h2 style="color: white; background-color: gray; padding:5px; width:95%;">Produk Terbaru</h2>
    <div class="product-list">
      
    <?php foreach ($products as $product): ?>
      <div class="card text-center mb-3" style="width: 18rem; float:left; margin: 30px;">
        <img src="<?php echo $product['img_url']?>" class="card-img-top" alt="produk" style="width: 18rem; height:180px;">
          <div class="card-body">
            <h5 class="card-title"><?php echo $product['nama_produk']; ?></h5>
            <p class="card-text"><?php echo $product['harga']?></p>
            <a href="detailproduk.php?p_id=<?php echo $product['p_id']; ?>" class="btn btn-primary">Lihat Details</a>
            <a href="beli.php?p_id=<?php echo $product['p_id']; ?>" class="btn btn-primary">Beli</a>
      </div> 
    </div>
  <?php endforeach; ?>
    </div>
  </div>

  <footer>
    <p>Hak Cipta &copy; 2023 Marketplace</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>