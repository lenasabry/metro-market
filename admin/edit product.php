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
    $id=$_GET['id'];

      if(isset($send)) {
      $Productname=$_POST['Productname'];
      $ProductPrice=$_POST['ProductPrice'];
      $ProductQut=$_POST['ProductQut'];
      $ProductExpire=$_POST['ProductExpire'];
    
      $sql="UPDATE products SET Productname='$Productname',ProductPrice='$ProductPrice',ProductQut='$ProductQut',ProductExpire='$ProductExpire' WHERE id='$id'";
        $result = mysqli_query($conn,$sql);
        echo '<div class="alert alert-success" style=top:52px;">'.'تم تعديل البيانات بنجاح'.'</div>';
        header("Refresh:3; url=./view product.php");    

    }
    ?>
    <?php
    include '../config.php';
  $sql= "SELECT * FROM `products` WHERE id='$id' ";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);

?>


<div class="card">
        <h1>    تعديل منتجات</h1>
        <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
        <label for="username"> كود المنتج</label>
        <input type="text" class="form-control" name="Productname" value="<?=$row['id']?>" readonly required>
    </div>
        <div class="form-group">
            <label for="username">اسم المنتج</label>
            <input type="text" class="form-control" name="Productname" value="<?=$row['Productname'] ?>"  required>
        </div>
        <div class="form-group">
            <label for="password"> سعر المنتج </label> 
            <input type="text" class="form-control" name="ProductPrice"value="<?=$row['ProductPrice'] ?>" required>
        </div>
        <div class="form-group">
            <label for="password"> كمية المنتج </label> 
            <input type="text" class="form-control" name="ProductQut" value="<?=$row['ProductQut'] ?>" required>
        </div>
        <div class="form-group">
            <label for="password">تاريخ الانتهاء الصلاحيه</label> 
            <input type="date" class="form-control" name="ProductExpire"  value="<?=$row['ProductExpire'] ?>" required>
        
    </div>
    <br>
     <button type="submit" class="btn btn-primary" name="send">تعديل</button>
    </div>
</form>

<script src="./js/bootstrap.js"></script>

</body>
</html>