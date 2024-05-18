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
      $name=$_POST['name'];
      $tel=$_POST['tel'];
      $address=$_POST['address'];
      $company=$_POST['company'];
        $sql="INSERT INTO suppliers (name,tel,address,company)VALUES('$name','$tel','$address','$company')";
        $result = mysqli_query($conn,$sql);
        echo '<div class="alert alert-success">'.'تم إضاقة البيانات بنجاح'.'</div>';
        header("Refresh:3; url=./index.php");    
    }
    ?>
<div class="card">
        <h1>    اضافه موردين</h1>
        <form action="" method="post">
        <div class="form-group">
            <label for="username">اسم المورد</label>
            <input type="text" class="form-control" name="name"  required>
        </div>
        <div class="form-group">
            <label for="password"> رقم الهاتف</label> 
            <input type="tel" class="form-control" name="tel" required>
        </div>
        <div class="form-group">
            <label for="password"> اسم الشركة</label> 
            <input type="text" class="form-control" name="company" required>
        </div>
        <div class="form-group">
            <label for="password">العنوان</label> 
            <input type="text" class="form-control" name="address" required>
        </div>
     <button type="submit" class="btn btn-primary" name="send">تسجيل</button>
    </div>
</form>

<script src="./js/bootstrap.js"></script>

</body>
</html>