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
      $CusName=$_POST['CusName'];
      $CusTel=$_POST['teCusTell'];
      $titel=$_POST['titel'];
      $Cus_comp=$_POST['Cus_comp'];
        $sql="INSERT INTO complaints (CusName,CusTel,titel,Cus_comp)VALUES('$CusName','$CusTel','$address','$Cus_comp')";
        $result = mysqli_query($conn,$sql);
        echo '<div class="alert alert-success">'.'تم ارسال الشكوي بنجاح  '.'</div>';
        header("Refresh:3; url=./index.php");    
    }
    ?>
<table class="table table-border table-hover">
    <thead>
        <tr>
            <th> كودالعميل</th>
            <th>اسم العميل</th>
            <th>رقم الهاتف</th>
            <th>  عنوان الشكوي</th>
            <th> ما الشكوي</th>



        </tr>
    </thead>

    <tbody>
        <?php
              include '../config.php';
            $sql= "SELECT * FROM `complaints`";
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_assoc($result)){

        ?>
  <tr>
 <td><?=$row['id']?></td>
 <td><?=$row['CusName']?></td>
 <td><?=$row['CusTel']?></td>
 <td><?=$row['titel']?></td>
 <td><?=$row['Cus_comp']?></td>

  </tr>
  <?php
            }

  
  ?>
    </tbody>
</table>
<script src="./js/bootstrap.js"></script>

</body>
</html>