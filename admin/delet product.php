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
<?php
    include '../config.php';
   error_reporting(0);
   $id=$_GET['id'];
    $yes=$_POST['yes'];
    $no=$_POST['no'];
    if(isset($yes)){
            $sql= "DELETE FROM `products` WHERE id='$id'";
        $result = mysqli_query($conn,$sql);
        echo'<div class="alert alert-success" style=top:52px;">'.'تم حدف البيانات بنجاح'.'</div>';
         header('refresh:3; url=./view product.php');

   }elseif(isset($no)){
    echo'<div class="alert alert-success">'.'تم الغاء الحدف  بنجاح'.'</div>';

    header('refresh:3; url=./veiw.php');
    }
?>
<div class="card">

  <div class="card-header">
    رسالة تنبيه!
  </div>
  <div class="card-body">
    <h5 class="card-title">هل تريد حدف البيانات</h5>
    <form action="" method="post" id="confirm">
    <button type="submit" class="btn btn-success" name="yes">نعم</button>
    <button type="submit" class="btn btn-danger" name="no">لا</button>


    </form>

    
  </div>
</div>


    </form>
</div>
  </div>  
</body>
</html>