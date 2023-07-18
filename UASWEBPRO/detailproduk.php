<!DOCTYPE html>
<html>
<head>
  <title>Marketplace</title>
  <link rel="stylesheet" href="mp.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
  <?php include "navbar.php";
  ?>
  <div class="container" style="width:500px; 
    padding: 20px;
    background-color: #ffffff;
    border-radius: 5px;">
    <?php include "detailbs.php"; ?>
    <a class="btn btn-primary" href="beli.php?p_id=<?php echo $product['p_id']; ?>" role="button">Beli</a>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>