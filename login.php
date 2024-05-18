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
          <a class="nav-link" href="./store.php">المتجر</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./Shkawa.php">الشكاوي</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./branches.php">الفروع</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="./login.php">دخول إدارة مترو</a>
        </li>
      </ul>
    </div>
  </div>
</nav>   
 <?php
    include './config.php';
    error_reporting(0);
    $login=$_POST['login'];
    if(isset($login)){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT * FROM `admin` WHERE username='$username' AND password= '$password'";
    $result = mysqli_query ($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    if($count > 0){
        session_start();
        $_SESSION['admin'] = $username;
     
  echo '<div class="alert alert-success">'.'تم التسجيل الدخول بنجاح'.'</div>';
  header("Refresh:3; url=./admin");

}else{
    echo '<div class="alert alert-danger">'.'  خطأ في اسم المستخدم او كلمة المرور'.'</div>';

    }
  }
    
?>

    <div class="card">
        <h1>تسجيل دخول الي لوحة التحكم</h1>
        <form action="" method= "post">
        <div class="form-group">
            <label for="username">اسم المستخدم</label>
            <input type="text" class="form-control" name="username">
        </div>
        <div class="form-group">
            <label for="password"> كلمة المرور</label>
            <input type="text" class="form-control" name="password">
        </div>
     <button type="submit" class="btn btn-primary" name="login">تسجيل الدخول</button>
    </div>
</form>
<script src="./js/bootstrap.js"></script>
</body>
</html>