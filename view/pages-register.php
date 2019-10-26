<?php 
if(!isset($_SESSION))
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>ثبت نام</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- v4.0.0-alpha.6 -->
<link rel="stylesheet" href="/view/dist/bootstrap/css/bootstrap.min.css">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Theme style -->
<link rel="stylesheet" href="/view/dist/css/style.css">
<link rel="stylesheet" href="/view/dist/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="/view/dist/css/et-line-font/et-line-font.css">
<link rel="stylesheet" href="/view/dist/css/themify-icons/themify-icons.css">


</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-box-body">
    <h3 class="login-box-msg">ثبت نام</h3>
    <div class="login-box-msg">
    <h3 class="login-box-msg text-bold " style="color:red;margin-top:15px">
    <?php if (isset($_SESSION["danger"])) echo $_SESSION["danger"] ?>
    </h3>
    </div>
    <form action="/webAPI/register" method="POST">
      <div class="form-group has-feedback">
        <input type="text" name="name" class="form-control sty1" placeholder="نام و نام خانوادگی">
      </div>
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control sty1" placeholder="ایمیل">
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control sty1" placeholder="رمز عبور">
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password_conf" class="form-control sty1" placeholder="تکرار رمز عبور">
      </div>
      <div>
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox">
               با شرایط موافق هستم  </label>
             </div>
        </div>
        <?php $_SESSION["danger"]=""; ?>
        <!-- /.col -->
        <div class="col-xs-4 m-t-1">
          <button type="submit" class="btn btn-primary btn-block btn-flat">ثبت نام</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <div class="m-t-2"><a href="\login" class="text-center">من قبلا ثبت نام کرده ام</a></div>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="/view/dist/js/jquery.min.js"></script>

<!-- v4.0.0-alpha.6 -->
<script src="/view/dist/bootstrap/js/bootstrap.min.js"></script>

<!-- template -->
<script src="/view/dist/js/niche.php"></script>
</body>

</html>