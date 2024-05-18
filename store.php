<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مترو ماركت</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./fonts/all.css">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="">
    <img src="https://metro-website-images.s3.eu-west-1.amazonaws.com/plugins/user/images/Logo.svg" alt="" srcset="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-5">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="./index.php">الرئيسية</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="./store.php">المتجر</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./Shkawa.php">الشكاوي</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./branches.php">الفروع</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./login.php">دخول إدارة مترو</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- عرض المنتجات -->
<main>
<?php

              include './config.php';
            $sql= "SELECT * FROM `products`";
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($result)){
        ?>
  <div class="card product">
  <img src="./imgProducts/<?=$row['Product_IMG']?>" class="card-img-top" alt="...">

<h3>
  <?=$row['Productname']?>
</h3>
<button class="btn btn-info"><?=$row['ProductPrice']?>
ج.م
</button>
  </div>
<?php
            }
?>
</main>
<!-- نهاية عرض المنتجات -->


<footer>
  <div class="block-fxm">
  <img src="https://metro-website-images.s3.eu-west-1.amazonaws.com/plugins/user/images/Logo.svg" alt="" srcset="">
  <a>
  جميع الحقوق محفوظة &copy;2024
  </a>  
</div>

</footer>
<script src="./js/bootstrap.js"></script>
<script src="https://kit.fontawesome.com/1b7e7e4c5a.js" crossorigin="anonymous"></script>

</body>
</html>