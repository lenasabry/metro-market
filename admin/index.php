<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ادارة مترو ماركت</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./fonts/all.css">

<?php
   session_start();
   error_reporting(0);
   $username= $_SESSION['admin'];
   if(!isset($username)){
   echo '<div class="alert alert-danger">'.' ليس لديك تصريح بالدخول'.'</div>';
   header("Refresh:3; url=./index.php");

  }else{

   


?>
</head>
<body>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">ادارة الماركت</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">الرئيسية <span class="sr-only"></span></a>
      </li>
   
      
  </div>
</nav>

<div class="controls">
<div class="d-grid gap-2 col-6 max-atou">
    <button class="btn btn-info" type= "button">
        <a href="./addemployee.php">
   اظافه موظفين
   </a>
    </button>

    <button class="btn btn-danger" type= "button">
        <a href="./viewsemployee.php">
   عرض موظفين
   </a>
    </button>

    <button class="btn btn-info" type= "button">
        <a href="./Suppliers.php">
        إضافة موردين 
   </a>
    </button>

    <button class="btn btn-danger" type= "button">
        <a href="./view supplier.php">
        عرض موردين 
   </a>
    </button>

    <button class="btn btn-info" type= "button">
        <a href="./product.php">
        إضافة منتجات
   </a>
    </button>

    <button class="btn btn-danger" type= "button">
        <a href="./view product.php">
        عرض منتجات
   </a>
    </button>
    <button class="btn btn-info" type= "button">
        <a href="./view shkwa.php">
        عرض الشكاوي
   </a>
    </button>







    <button class="btn btn primary" type= "button">عرض المنتجات</button>

</div>
</div>


<script src="./js/bootstrap.js"></script>
<?php
  }
?>
</body>
</html>