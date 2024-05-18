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
          <a class="nav-link " href="./store.php">المتجر</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="./Shkawa.php">الشكاوي</a>
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
<?php

include './config.php';
error_reporting(0);
$send=$_POST['send'];

    if(isset($send)) {
        $CusName=$_POST['CusName'];
        $CusTel=$_POST['CusTel'];
        $titel=$_POST['titel'];
        $Cus_comp=$_POST['Cus_comp'];
          $sql="INSERT INTO complaints (CusName,CusTel,titel,Cus_comp)VALUES('$CusName','$CusTel','$titel','$Cus_comp')";
          $result = mysqli_query($conn,$sql);
          echo '<div class="alert alert-success">'.'تم ارسال  الشكوي'.'</div>';
          header("Refresh:5; url=./index.php");    
      }
      ?>

<div class="card">
        <h1>    تقديم الشكاوي </h1>
        <form action="" method="post">
        <div class="form-group">
            <label for="username">اسم العميل</label>
            <input type="text" class="form-control" name="CusName"  required>
        </div>
        <div class="form-group">
            <label for="password">   رقم الهاتف</label> 
            <input type="tel" class="form-control" name="CusTel" required>
        </div>
        <div class="form-group">
            <label for="password"> عنوان الشكوي</label> 
            <input type="text" class="form-control" name="titel" required>
        </div>
<br>
  
        <div class="form-group">

           <textarea name="Cus_comp" id="" cols="40" rows="20" >

           </textarea>
           <br>
     <button type="submit" class="btn btn-primary" name="send">ارسال</button>
  </form>
    </div>
<script src="./js/bootstrap.js"></script>
<script src="https://kit.fontawesome.com/1b7e7e4c5a.js" crossorigin="anonymous"></script>

</body>
</html>