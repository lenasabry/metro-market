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
      $Product_IMG=$_POST['Product_IMG'];
        $sql="INSERT INTO employee (Productname,ProductPrice,ProductQut,ProductExpire,Product_IMG)VALUES('$Productname','$ProductPrice','$ProductQut','$ProductExpire','$Product_IMG')";
        $result = mysqli_query($conn,$sql);
        echo '<div class="alert alert-success">'.'تم إضاقة البيانات بنجاح'.'</div>';
        header("Refresh:3; url=./index.php");    
    }
    ?>
<table class="table table-border table-hover">
    <thead>
        <tr>
            <th>اسم المنتج</th> 
            <th>كود المنتج</th> 
            <th>سعر المنتج  </th>
            <th>  كمية المنتج </th>
            <th> تاريخ الانتهاء الصلاحيه</th>
            <th> صورة المنتج</th>
            <th>  تعديل</th>
            <th>  حذف</th>


        </tr>
    </thead>

    <tbody>
        <?php
              include '../config.php';
            $sql= "SELECT * FROM `products`   ";
            $result = mysqli_query($conn,$sql);
            $nu = 0;
            while($row = mysqli_fetch_assoc($result)){
                $nu++

        ?>
  <tr>
 <td><?=$nu?></td>
 <td><?=$row['Productname']?></td>
 <td><?=$row['ProductPrice']?></td>
 <td><?=$row['ProductQut']?></td>
 <td><?=$row['ProductExpire']?></td>
 <td>
<img src="../imgProducts/<?=$row['Product_IMG']?>
" width="80px">

</td>
<td>
    <button class="btn btn-success">
        <a href="edit product.php?id=<?=$row['id']?>">
            تعديل
        </a>
    </button>
    </td>
<td>
    <button class="btn btn-danger">
        <a href="delet product.php?id=<?=$row['id']?>">
        حذف
        </a>

    </button>
</td>
  </tr>
  <?php
            }

  
  ?>
    </tbody>
</table>
<script src="./js/bootstrap.js"></script>

</body>
</html>