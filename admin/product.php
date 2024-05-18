<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ادارة مترو ماركت</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./fonts/all.css">
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
<?php
      include '../config.php';
      error_reporting(0);
    $send=$_POST['send'];

      if(isset($send)) {
      $Productname=$_POST['Productname'];
      $ProductPrice=$_POST['ProductPrice'];
      $ProductQut=$_POST['ProductQut'];
      $ProductExpire=$_POST['ProductExpire'];
      $fileType = $_FILES["Product_IMG"]["type"];
      $fileName = $_FILES["Product_IMG"]["name"];
      $file = $_FILES["Product_IMG"]["tmp_name"];
      move_uploaded_file($file,"../imgProducts/".$fileName);
      $postion = $fileName;
        $sql="INSERT INTO products(Productname,ProductPrice,ProductQut,ProductExpire,Product_IMG)VALUES('$Productname','$ProductPrice','$ProductQut','$ProductExpire','$postion')";
        $result = mysqli_query($conn,$sql);
        echo '<div class="alert alert-success" style=top:52px;">'.'تم إضاقة البيانات بنجاح'.'</div>';
        header("Refresh:3; url=./index.php");    

    }
    ?>
<div class="card">
        <h1>    اضافه منتجات</h1>
        <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="username">اسم المنتج</label>
            <input type="text" class="form-control" name="Productname"  required>
        </div>
        <div class="form-group">
            <label for="password"> سعر المنتج </label> 
            <input type="text" class="form-control" name="ProductPrice" required>
        </div>
        <div class="form-group">
            <label for="password"> كمية المنتج </label> 
            <input type="text" class="form-control" name="ProductQut" required>
        </div>
        <div class="form-group">
            <label for="password">تاريخ الانتهاء الصلاحيه</label> 
            <input type="date" class="form-control" name="ProductExpire" required>
        
    </div>
        <div class="form-group">
        <label for="Product_IMG">صورة المنتج</label> 
            <input type="file" class="form-control" name="Product_IMG" required>
    </div>
     <button type="submit" class="btn btn-primary" name="send">تسجيل</button>
    </div>
</form>

<script src="./js/bootstrap.js"></script>

</body>
</html>