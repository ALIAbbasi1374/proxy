<?php
 require_once "includes/connect.php"?>

<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Niche Admin - Powerful Bootstrap 4 Dashboard and Admin Template</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- v4.0.0-alpha.6 -->
<link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Theme style -->
<link rel="stylesheet" href="dist/css/style.css">
<link rel="stylesheet" href="dist/css/custom-style.css">
<link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="dist/css/et-line-font/et-line-font.css">
<link rel="stylesheet" href="dist/css/themify-icons/themify-icons.css">

<!-- php5 Shim and Respond.js IE8 support of php5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/php5shiv/3.7.3/php5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-box-body">
    <h4 class="login-box-msg">ورد به پنل مدیریت</h4>
    <div class="login-box-msg">
    <h3 class="login-box-msg text-bold " style="color:red;margin-top:15px">
    <?php if (isset($_SESSION["danger"])) echo $_SESSION["danger"] ?>
    </h3>
    </div>
    <form action="pages-db-login.php" method="post">
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control sty1" placeholder="ایمیل شما">
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control sty1" placeholder="رمز شما">
      </div>
      <div>
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox">
              Remember Me </label>
            <a href="pages-recover-password.php" class="pull-right"><i class="fa fa-lock"></i> رمز عبورم را فراموش کرده ام </a> </div>
        </div>

        <?php $_SESSION["danger"]=""; ?>

        <!-- /.col -->
        <div class="col-xs-4 m-t-1">
          <button type="submit" class="btn btn-primary btn-block btn-flat">ورود</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!--<div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
      Facebook</a> <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
      Google+</a> </div>
      -->
    <!-- /.social-auth-links -->

    <div class="m-t-2"><a href="pages-register.php" class="text-center">ثبت نام</a></div>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="dist/js/jquery.min.js"></script>

<!-- v4.0.0-alpha.6 -->
<script src="dist/bootstrap/js/bootstrap.min.js"></script>

<!-- template -->
<script src="dist/js/niche.php"></script>
</body>

</html>