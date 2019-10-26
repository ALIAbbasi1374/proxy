<?php 
include "auth.php";
?>

<?php  if(!empty($_SESSION['email']) && !empty($_SESSION['password'])) : ?>
<header class="main-header">
    <!-- Logo -->
    <a href="/" class="logo blue-bg">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><img src="/view/dist/img/logo-n.png" alt=""></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><img src="/view/dist/img/logo.png" alt=""></span> </a>
    <!-- Header Navbar -->
    <nav class="navbar blue-bg navbar-static-top">
      <!-- Sidebar toggle button-->
      <ul class="nav navbar-nav pull-left">
        <li><a class="sidebar-toggle" data-toggle="push-menu" href="#"></a> </li>
      </ul>
     
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
    
          
          <!-- User Account  -->
          <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="/view/data/admin2019-10-17.svg" class="user-image" alt="User Image"> <span class="hidden-xs"><?= $_SESSION['name'] ?></span> </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <div class="pull-left user-img"><img src="/view/data/admin2019-10-17.svg" class="img-responsive img-circle" alt="User"></div>
                <p class="text-center"><?= $_SESSION['name'] ?> <small><?php if(!empty($_SESSION['email'])) echo $_SESSION['email'];  ?></small> </p>
              </li>
              <li><a href="#"><i class="fa fa-key"></i>تغییر رمز عبور</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="/logout"><i class="fa fa-power-off"></i> خروج از حساب کاربری</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
<?php endif ?>