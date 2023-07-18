<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><img src="<?php echo $product['img_url']?>" class="card-img-top" alt="produk" style="width: 16rem; height: 180px"></li>
    <li class="list-group-item"><h2><?php echo $product['nama_produk']; ?></h2></li>
    <li class="list-group-item"><p><?php echo $product['deskripsi']; ?></p></li>
    <li class="list-group-item">  <p>Harga: Rp<?php echo $product['harga']; ?></p></li>
  </ul>
</div>