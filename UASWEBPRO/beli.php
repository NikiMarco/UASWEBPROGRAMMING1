<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include "navbar.php";?>
<div class="container" style="width:500px; 
    padding: 20px;
    background-color: #ffffff;
    border-radius: 5px;">
  <?php include "detailbs.php"?>
  <form action="confirm.php" method="POST">
  <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">Quantity</label>
      <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Quantity" name="qn" required>
    </div>
    <div class="mb-3">
      <label for="formGroupExampleInput2" class="form-label">Alamat</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Alamat" name="alm" required>
    </div>
    <div class="mb-3">
      <label for="formGroupExampleInput3" class="form-label">No. Telp</label>
      <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="No. Telp" name="tlp" required>
    </div>
      <div class="col-12">
      <button type="submit" class="btn btn-primary">Konfirmasi</button>
</form>
</div>
</body>
</html>