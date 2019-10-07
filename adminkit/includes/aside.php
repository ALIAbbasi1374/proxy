<?php 
include "includes/connect.php";
include "includes/auth.php";
?>

<aside class="main-sidebar">
    <!-- sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel -->
      <?php if(!empty($_SESSION['login']) && !empty($_SESSION['password'])) : ?>
      <div class="user-panel">
        <div class="image text-center"><img src="data/img1.png" class="img-circle" alt="User Image"> </div>
        <div class="info">
          <p><?= $_SESSION['login'] ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> آنلاین</a> </div>
      </div>
      <?php endif ; ?>

      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
      
        <li class="header"><div class="text-center">
        <div class="info">
          <h5>مدیر کل</h5>
          <p>توسعه دهنده</p>
        </div>
      </div> </li>
        <!--<li class="active treeview"> <a href="#"> <i class="icon-home"></i><span> صفحه نخست </span>  <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.php"><i class="fa fa-angle-left"></i>مدرن </a></li>
            <li><a href="leage-today.php"><i class="fa fa-angle-left"></i> لیگ های صفحه اصلی</a></li>
            <li><a href="index-analytics.php"><i class="fa fa-angle-left"></i> تجزیه و تحلیل</a></li>
            <li><a href="index-ecommerce.php"><i class="fa fa-angle-left"></i>تجارت الکترونیک</a></li>
            <li><a href="index-medical.php"><i class="fa fa-angle-left"></i> پزشکی</a></li>س
          </ul>
          
        </li>
        -->

        <li class="active"><a href="index.php"><i class="fa "></i>صفحه نخست  </a></li>

        <li class="treeview"> <a href="#"> <i class="icon-people"></i> <span>  اعضای اپلیکیشن  </span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="members.php"><i class="fa fa-angle-left"></i> همه </a></li>
          </ul>
        </li>

        </li>
         <li class="treeview"> <a href="#">  <i class="icon-question"></i><span>  تصاویر </span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="list-pic.php"><i class="fa fa-angle-left"></i> حدس تصویر </a></li>
          </ul>
        </li>

        <li class="treeview"> <a href="#"> <i class="fa icon-bag"></i> <span>فروشگاه</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="shop-coin.php"><i class="fa fa-angle-left"></i>سکه</a></li>
            <!--<li><a href="table-data-table.php"><i class="fa fa-angle-left"></i>جداول داده</a></li>
            <li><a href="table-jsgrid.php"><i class="fa fa-angle-left"></i>جدول Js Grid</a></li>-->
          </ul>
        </li>

        <li class="treeview"> <a href="#"> <i class="fa-dollar"></i> <span>مالی</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="pay-out.php"><i class="fa fa-angle-left"></i> خروجی</a></li>
            <li><a href="pay-in.php"><i class="fa fa-angle-left"></i> ورودی</a></li>
          </ul>
        </li>

        <li class="treeview"> <a href="#">  <i class="icon-gift"></i><span> جایزه ها </span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="offCodes.php"><i class="fa fa-angle-left"></i> کدهای تخفیف  </a></li>
            <li><a href="redeem.php"><i class="fa fa-angle-left"></i> کدهای هدیه </a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#">  <i class="icon-user"></i><span>  احراز هویت </span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
                <li><a href="pages-login.php"><i class="fa fa-angle-left"></i> لاگین 1</a></li>
                <li><a href="pages-register.php"><i class="fa fa-angle-left"></i> ثبت نام 1</a></li>
          </ul>
        </li>
        
        <li class="treeview"> <a href="#">  <i class="icon-settings"></i> <span> تنظیمات اپلیکیشن </span><span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
            <ul class="treeview-menu">
            <li><a href="constant.php"><i class="fa fa-angle-left"></i> تنظیمات مدیریتی</a></li>
            <li><a href="rules.php"><i class="fa fa-angle-left"></i> قوانین اپ</a></li>
            <li><a href="question.php"><i class="fa fa-angle-left"></i> سوالات متداول</a></li>
            <!--<li><a href="icon-themify.php"><i class="fa fa-angle-left"></i> Themify Icons</a></li>
            <li><a href="icon-linea.php"><i class="fa fa-angle-left"></i> Linea Icons</a></li>
            <li><a href="icon-weather.php"><i class="fa fa-angle-left"></i> Weather Icons</a></li>
            <li><a href="icon-simple-lineicon.php"><i class="fa fa-angle-left"></i> Simple Lineicons</a></li>
            <li><a href="icon-flag.php"><i class="fa fa-angle-left"></i> Flag Icons</a></li>

            icon-eye
            
            -->
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.sidebar -->
  </aside>

