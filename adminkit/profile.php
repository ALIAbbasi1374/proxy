<?php
$id = intval($_GET["id"]);
?>

<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>پروفایل</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- v4.0.0 -->
    <link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="dist/img/favicon-16x16.png">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/style.css">
    <link rel="stylesheet" href="dist/css/custom-style.css">
    <link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="dist/css/et-line-font/et-line-font.css">
    <link rel="stylesheet" href="dist/css/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="dist/css/simple-lineicon/simple-line-icons.css">
    <link rel="stylesheet" href="dist/css/rtl.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="dist/plugins/datatables/css/dataTables.bootstrap.min.css">

    <!-- php5 Shim and Respond.js IE8 support of php5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/php5shiv/3.7.3/php5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">

    <?php include "includes/header.php"; ?>
    <!-- Left side column. contains the logo and sidebar -->
    <?php include "includes/aside.php" ?>
    <!--<aside class="main-sidebar">
      <div class="sidebar">
        <div class="user-panel">
          <div class="image text-center"><img src="dist/img/img1.jpg" class="img-circle" alt="User Image"> </div>
          <div class="info">
            <p>Alexander Pierce</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a> </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">PERSONAL</li>
          <li class="treeview"> <a href="#"> <span>Dashboard</span> <i class="icon-home"></i> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
            <ul class="treeview-menu">
              <li><a href="index.php"><i class="fa fa-angle-left"></i> Modern</a></li>
              <li><a href="index-crm.php"><i class="fa fa-angle-left"></i> CRM</a></li>
              <li><a href="index-analytics.php"><i class="fa fa-angle-left"></i> Analytics</a></li>
              <li><a href="index-ecommerce.php"><i class="fa fa-angle-left"></i> Ecommerce</a></li>
              <li><a href="index-medical.php"><i class="fa fa-angle-left"></i> Medical</a></li>
            </ul>
          </li>
          <li class="active treeview"> <a href="#"> <i class="icon-grid"></i> <span>Apps</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
            <ul class="treeview-menu">
              <li><a href="apps-calendar.php"><i class="fa fa-angle-left"></i> Calendar</a></li>
              <li><a href="apps-support-ticket.php"><i class="fa fa-angle-left"></i> Support Ticket</a></li>
              <li><a href="apps-contacts.php"><i class="fa fa-angle-left"></i> Contact / Employee</a></li>
              <li><a href="apps-contact-grid.php"><i class="fa fa-angle-left"></i> Contact  Grid</a></li>
              <li class="active"><a href="apps-contact-details.php"><i class="fa fa-angle-left"></i> Contact Detail</a></li>
            </ul>
          </li>
          <li class="treeview"> <a href="#"> <span>Inbox</span> <i class="ti-email"></i> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
            <ul class="treeview-menu">
              <li><a href="apps-mailbox.php"><i class="fa fa-angle-left"></i> Mailbox</a></li>
              <li><a href="apps-mailbox-detail.php"><i class="fa fa-angle-left"></i> Mailbox Detail</a></li>
              <li><a href="apps-compose-mail.php"><i class="fa fa-angle-left"></i> Compose Mail</a></li>
            </ul>
          </li>
          <li class="treeview"> <a href="#"> <span>UI Elements</span> <i class="icon-frame"></i> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
            <ul class="treeview-menu">
              <li><a href="ui-cards.php" class="active"><i class="fa fa-angle-left"></i> Cards</a></li>
              <li><a href="ui-user-card.php"><i class="fa fa-angle-left"></i> User Cards</a></li>
              <li><a href="ui-tab.php"><i class="fa fa-angle-left"></i> Tab</a></li>
              <li><a href="ui-grid.php"><i class="fa fa-angle-left"></i> Grid</a></li>
              <li><a href="ui-buttons.php"><i class="fa fa-angle-left"></i> Buttons</a></li>
              <li><a href="ui-notification.php"><i class="fa fa-angle-left"></i> Notification</a></li>
              <li><a href="ui-progressbar.php"><i class="fa fa-angle-left"></i> Progressbar</a></li>
              <li><a href="ui-range-slider.php"><i class="fa fa-angle-left"></i> Range slider</a></li>
              <li><a href="ui-timeline.php"><i class="fa fa-angle-left"></i> Timeline</a></li>
              <li><a href="ui-horizontal-timeline.php"><i class="fa fa-angle-left"></i> Horizontal Timeline</a></li>
              <li><a href="ui-breadcrumb.php"><i class="fa fa-angle-left"></i> Breadcrumb</a></li>
              <li><a href="ui-typography.php"><i class="fa fa-angle-left"></i> Typography</a></li>
              <li><a href="ui-bootstrap-switch.php"><i class="fa fa-angle-left"></i> Bootstrap Switch</a></li>
              <li><a href="ui-tooltip-popover.php"><i class="fa fa-angle-left"></i> Tooltip &amp; Popover</a></li>
              <li><a href="ui-list-media.php"><i class="fa fa-angle-left"></i> List Media</a></li>
              <li><a href="ui-carousel.php"><i class="fa fa-angle-left"></i> Carousel</a></li>
            </ul>
          </li>
          <li class="header">FORMS, TABLE & WIDGETS</li>
          <li class="treeview"> <a href="#"> <span>Forms</span> <i class="icon-note"></i> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
            <ul class="treeview-menu">
              <li><a href="form-elements.php"><i class="fa fa-angle-left"></i> Form Elements</a></li>
              <li><a href="form-validation.php"><i class="fa fa-angle-left"></i> Form Validation</a></li>
              <li><a href="form-wizard.php"><i class="fa fa-angle-left"></i> Form Wizard</a></li>
              <li><a href="form-layouts.php"><i class="fa fa-angle-left"></i> Form Layouts</a></li>
              <li><a href="form-uploads.php"><i class="fa fa-angle-left"></i> Form File Upload</a></li>
              <li><a href="form-summernote.php"><i class="fa fa-angle-left"></i> Summernote</a></li>
            </ul>
          </li>
          <li class="treeview"> <a href="#"> <i class="fa fa-table"></i> <span>Tables</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
            <ul class="treeview-menu">
              <li><a href="table-basic.php"><i class="fa fa-angle-left"></i> Basic Tables</a></li>
              <li><a href="table-layout.php"><i class="fa fa-angle-left"></i> Table Layouts</a></li>
              <li><a href="table-data-table.php"><i class="fa fa-angle-left"></i> Data Tables</a></li>
              <li><a href="table-jsgrid.php"><i class="fa fa-angle-left"></i> Js Grid Table</a></li>
            </ul>
          </li>
          <li class="treeview"> <a href="#"> <i class="icon-layers"></i> <span>Widgets</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
            <ul class="treeview-menu">
              <li><a href="widget-data.php"><i class="fa fa-angle-left"></i> Data Widgets</a></li>
              <li><a href="widget-apps.php"><i class="fa fa-angle-left"></i> Apps Widgets</a></li>
            </ul>
          </li>
          <li class="header">EXTRA COMPONENTS</li>
          <li class="treeview"> <a href="#"><span>Charts</span> <i class="icon-chart"></i> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
            <ul class="treeview-menu">
              <li><a href="chart-morris.php"><i class="fa fa-angle-left"></i> Morris Chart</a></li>
              <li><a href="chart-chartist.php"><i class="fa fa-angle-left"></i> Chartis Chart</a></li>
              <li><a href="chart-knob.php"><i class="fa fa-angle-left"></i> Knob Chart</a></li>
              <li><a href="chart-chart-js.php"><i class="fa fa-angle-left"></i> Chartjs</a></li>
              <li><a href="chart-peity.php"><i class="fa fa-angle-left"></i> Peity Chart</a></li>
            </ul>
          </li>
          <li class="treeview"> <a href="#"> <span>Sample Pages</span> <i class="icon-docs"></i> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
            <ul class="treeview-menu">
              <li><a href="pages-blank.php"><i class="fa fa-angle-left"></i> Blank page</a></li>
              <li class="treeview"><a href="#"><i class="fa fa-angle-left"></i> Authentication <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                  <li><a href="pages-login.php"><i class="fa fa-angle-left"></i> Login 1</a></li>
                  <li><a href="pages-login-2.php"><i class="fa fa-angle-left"></i> Login 2</a></li>
                  <li><a href="pages-register.php"><i class="fa fa-angle-left"></i> Register</a></li>
                  <li><a href="pages-register2.php"><i class="fa fa-angle-left"></i> Register 2</a></li>
                  <li><a href="pages-lockscreen.php"><i class="fa fa-angle-left"></i> Lockscreen</a></li>
                  <li><a href="pages-recover-password.php"><i class="fa fa-angle-left"></i> Recover password</a></li>
                </ul>
              </li>
              <li><a href="pages-profile.php"><i class="fa fa-angle-left"></i> Profile page</a></li>
              <li><a href="pages-invoice.php"><i class="fa fa-angle-left"></i> Invoice</a></li>
              <li><a href="pages-treeview.php"><i class="fa fa-angle-left"></i> Treeview</a></li>
              <li><a href="pages-pricing.php"><i class="fa fa-angle-left"></i> Pricing</a></li>
              <li><a href="pages-gallery.php"><i class="fa fa-angle-left"></i> Gallery</a></li>
              <li><a href="pages-faq.php"><i class="fa fa-angle-left"></i> Faqs</a></li>
              <li><a href="pages-404.php"><i class="fa fa-angle-left"></i> 404 Error Page</a></li>
            </ul>
          </li>
          <li class="treeview"> <a href="#"> <span>Maps</span> <i class="icon-location-pin"></i> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
            <ul class="treeview-menu">
              <li><a href="map-google.php"><i class="fa fa-angle-left"></i> Google Maps</a></li>
              <li><a href="map-vector.php"><i class="fa fa-angle-left"></i> Vector Maps</a></li>
            </ul>
          </li>
          <li class="treeview"> <a href="#"> <span>Icons</span> <i class="icon-energy"></i> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
            <ul class="treeview-menu">
              <li><a href="icon-fontawesome.php"><i class="fa fa-angle-left"></i> Fontawesome Icons</a></li>
              <li><a href="icon-themify.php"><i class="fa fa-angle-left"></i> Themify Icons</a></li>
              <li><a href="icon-linea.php"><i class="fa fa-angle-left"></i> Linea Icons</a></li>
              <li><a href="icon-weather.php"><i class="fa fa-angle-left"></i> Weather Icons</a></li>
              <li><a href="icon-simple-lineicon.php"><i class="fa fa-angle-left"></i> Simple Lineicons</a></li>
              <li><a href="icon-flag.php"><i class="fa fa-angle-left"></i> Flag Icons</a></li>
            </ul>
          </li>
          <li class="treeview"> <a href="#"> <span>Multilevel</span> <i class="icon-action-redo"></i> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-angle-left"></i> Level One</a></li>
              <li class="treeview"> <a href="#"><i class="fa fa-angle-left"></i> Level One <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                  <li><a href="#"><i class="fa fa-angle-left"></i> Level Two</a></li>
                  <li class="treeview"> <a href="#" ><i class="fa fa-angle-left"></i> Level Two <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                    <ul class="treeview-menu">
                      <li><a href="#"><i class="fa fa-angle-left"></i> Level Three</a></li>
                      <li><a href="#"><i class="fa fa-angle-left"></i> Level Three</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="#"><i class="fa fa-angle-left"></i> Level One</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </aside>

  -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header sty-one">
            <h1>پروفایل</h1>
            <ol class="breadcrumb">
                <li><a href="#">خانه</a></li>
                <li><i class="fa fa-angle-left"></i>پروفایل</li>
            </ol>
        </div>

        <!-- Main content -->
        <div class="content">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card m-b-3">
                        <div class="card-body">
                            <div class="box-body">
                                <img class="profile-user-img img-responsive img-circle m-b-2"
                                     src="http://moneyq.ir/data/profiles/profile_default_2.png" alt="علی">
                                <h4 id="name" align="center"><b></b></h4>
                                <center>کد معرفی: <code>8c9dcf</code></center>
                                <center class="openUserCatModal">گروه: <span class="badge badge-primary">اتوماتیک</span>
                                    <span id="userCat" class="badge badge-primary">معمولی</span></center>
                                <br>
                                <center>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#changeHistory">نمایش تغییرات
                                    </button>
                                </center>
                                <br>
                                <center>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#tickets-add-modal">افزودن بلیط
                                    </button>
                                </center>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                    <div class="card m-b-3">
                        <div class="card-body">
                            <div class="box-body">
                                <!--
                                <div class="toggle btn btn-success btn-sm" data-toggle="toggle"
                                     style="width: 65.6px; height: 32.6px;">
                                    <input id="suspendSt" type="checkbox" data-toggle="toggle" data-on="فعال"
                                           data-off="بلاک" data-onstyle="success" data-offstyle="danger"
                                           data-size="small" checked="">
                                    <div class="toggle-group">
                                                <label class="btn btn-success btn-sm toggle-on">فعال</label>
                                                <label class="btn btn-danger btn-sm active toggle-off">بلاک</label>
                                                <span class="toggle-handle btn btn-default btn-sm"></span></div>
                                </div>

-->
                    
                                <!--
                                <div class="toggle btn btn-sm btn-success off" data-toggle="toggle"
                                     style="width: 86px; height: 32.6px;"><input id="fadeMan" type="checkbox"
                                                                                 data-toggle="toggle" data-on="دستی"
                                                                                 data-off="اتوماتیک"
                                                                                 data-onstyle="primary"
                                                                                 data-offstyle="success"
                                                                                 data-size="small">
                                    <div class="toggle-group"><label
                                                class="btn btn-primary btn-sm toggle-on">دستی</label><label
                                                class="btn btn-success btn-sm active toggle-off">اتوماتیک</label><span
                                                class="toggle-handle btn btn-default btn-sm"></span></div>
                                </div>

                                <div class="toggle btn btn-sm btn-success" data-toggle="toggle"
                                     style="width: 72.6667px; height: 32.6px;"><input id="fadeSt" type="checkbox"
                                                                                      data-toggle="toggle"
                                                                                      data-on="فعال" data-off="ترکیده"
                                                                                      data-onstyle="success"
                                                                                      data-offstyle="danger"
                                                                                      data-size="small" checked="">
                                    <div class="toggle-group"><label
                                                class="btn btn-success btn-sm toggle-on">فعال</label><label
                                                class="btn btn-danger btn-sm active toggle-off">ترکیده</label><span
                                                class="toggle-handle btn btn-default btn-sm"></span></div>
                                </div>

-->
                                <hr>
                                <strong><i class="fa fa-user margin-r-5"></i> معرف</strong>
                                <p class="text-muted" dir="ltr" align="left"><a class="btn btn-primary btn-sm"
                                                                                href="/admin/members/26">punisher</a>
                                </p>
                                <hr>
                                <strong><i class="fa fa-mobile margin-r-5"></i> ورژن</strong>
                                <p class="text-muted" dir="ltr" align="left"><span id="version"
                                                                                   class="badge badge-primary"></span>
                                </p>
                                <hr>
                                <strong><i class="fa fa-mobile margin-r-5"></i> موبایل</strong>
                                <p id="mobile" class="text-muted font-mono" dir="ltr" align="left"></p>
                                <strong><i class="fa fa-envelope-o margin-r-5"></i> ایمیل</strong>
                                <p class="text-muted font-mono" dir="ltr" align="left"></p>
                                <hr>
                                <strong><i class="fa fa-credit-card margin-r-5"></i> شماره کارت</strong>
                                <p  id="cardNum" class="text-muted font-mono" dir="ltr" align="left"></p>
                    
                                <p class="text-muted" dir="ltr" align="left"></p>
                                <hr>
                                <strong><i class="fa fa-calendar margin-r-5"></i> تاریخ عضویت</strong>
                                <p   id="regDate" class="text-muted font-mono" dir="ltr" align="left">1398٫6٫29</p>
                                <hr>
                                <strong><i class="fa fa-circle-o margin-r-5"></i> تعداد طلایی</strong>
                                <p id="goldenCount" class="text-muted font-mono" dir="ltr" align="left">40</p>
                                <hr>
                                <strong><i class="fa fa-circle-o margin-r-5"></i>تعداد جون</strong>
                                <p id="gameWon" class="text-muted font-mono" dir="ltr" align="left">1</p>
                                <hr>
                                <strong><i class="fa fa-circle-o margin-r-5"></i>تعداد بلیط</strong>
                                <p id="ticketCount" class="text-muted font-mono" dir="ltr" align="left">1</p>
                                <hr>
                                <strong><i class="fa fa-tv margin-r-5"></i> دخل فیلم ها</strong>
                                <p id="inVideo" class="text-muted font-mono" dir="ltr" align="left">0
                                </p>
                                <hr>
                               <!-- <strong><i class="fa fa-money margin-r-5"></i> پول</strong>
                                <p class="text-muted" dir="ltr" align="left">موجودی فعلی: 0</p>
                                <p class="text-muted" dir="ltr" align="left">دریافتی کل: 0</p>
                                <button id="requestPayment-btn" class="btn btn-sm btn-success">ثبت درخواست واریز
                                </button>
                                <hr>
                                -->
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-9" >
                    <div class="card">
                        <div class="card-header" style="display: flex;">
                            <h5 class="text-black" align="right">تاریخچه</h5>
                            <div style="position: absolute; left:10px;">
                                <button class="btn btn-primary btn-sm toggle" style="display:inline;"><i
                                            class="fa fa-eye"></i></button>
                            </div>
                        </div>
                        <div class="card-body" style="display: none;">
                            <div class="table-responsive">
                                <div id="userHistoryTable_wrapper"  class="dataTables_wrapper dt-bootstrap no-footer">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="dataTables_length" id="userHistoryTable_length"><label>نمایش
                                                    <select name="userHistoryTable_length"
                                                            aria-controls="userHistoryTable"
                                                            class="form-control input-sm">
                                                        <option value="10">10</option>
                                                        <option value="20">20</option>
                                                        <option value="50">50</option>
                                                    </select> داده در هر صفحه</label></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div id="userHistoryTable_filter" class="dataTables_filter"><label>جستجو:
                                                    <input type="search" class="form-control input-sm" placeholder=""
                                                           aria-controls="userHistoryTable"></label></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-sm dataTable no-footer" id="userHistoryTable"
                                                   role="grid" aria-describedby="userHistoryTable_info"
                                                   >
                                                <thead>
                                                <tr role="row">
                                                    <th scope="col" tabindex="0"
                                                        aria-controls="userHistoryTable" rowspan="1" colspan="1"
                                                        style="width: 0px;"
                                                        aria-label="تاریخ: activate to sort column ascending"
                                                        width="10px">تاریخ
                                                    </th>
                                                    <th scope="col" style="width: 0px;" tabindex="0"
                                                        aria-controls="userHistoryTable" rowspan="1" colspan="1"
                                                        aria-label="توضیحات: activate to sort column ascending">توضیحات
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr role="row" class="odd">
                                                    <td>
                                                        <div dir="ltr">1398٫6٫29 15:32:00</div>
                                                    </td>
                                                    <td>پاسخ به سوال: <span
                                                                class="badge badge-danger">وستهام یونایتد</span></td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td>
                                                        <div dir="ltr">1398٫6٫29 15:31:49</div>
                                                    </td>
                                                    <td>مصرف <span class="badge badge-primary">شانس مجدد <span
                                                                    class="badge B pfont">برنز</span></span></td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td>
                                                        <div dir="ltr">1398٫6٫29 15:31:49</div>
                                                    </td>
                                                    <td>دریافت سوال: <span class="badge badge-primary">گودیسون پارک نام ورزشگاه کدام تیم است؟</span>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td>
                                                        <div dir="ltr">1398٫6٫29 15:31:49</div>
                                                    </td>
                                                    <td>دریافت <span class="badge badge-primary">شانس مجدد <span
                                                                    class="badge B pfont">برنز</span></span></td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td>
                                                        <div dir="ltr">1398٫6٫29 15:31:49</div>
                                                    </td>
                                                    <td>کسر سکه <span class="badge badge-danger">210</span> توضیحات:
                                                        <span class="badge badge-primary">شانس مجدد <span
                                                                    class="badge B pfont">برنز</span></span></td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td>
                                                        <div dir="ltr">1398٫6٫29 15:31:32</div>
                                                    </td>
                                                    <td>پاسخ به سوال: <span class="badge badge-success">لرستان</span>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td>
                                                        <div dir="ltr">1398٫6٫29 15:31:21</div>
                                                    </td>
                                                    <td>مصرف <span class="badge badge-primary">بلیط <span
                                                                    class="badge B pfont">برنز</span></span></td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td>
                                                        <div dir="ltr">1398٫6٫29 15:31:21</div>
                                                    </td>
                                                    <td>دریافت سوال: <span class="badge badge-primary">علیرضا بیرانوند اهل کجاست؟</span>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td>
                                                        <div dir="ltr">1398٫6٫29 15:31:21</div>
                                                    </td>
                                                    <td>دریافت <span class="badge badge-primary">بلیط <span
                                                                    class="badge B pfont">برنز</span></span></td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td>
                                                        <div dir="ltr">1398٫6٫29 15:31:21</div>
                                                    </td>
                                                    <td>شروع <span class="badge B">برنزی</span></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <div id="userHistoryTable_processing"
                                                 class="dataTables_processing panel panel-default"
                                                 style="display: none;">Processing...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="dataTables_info" id="userHistoryTable_info" role="status"
                                                 aria-live="polite">صفحه 1 از 3 (نتیجه جستجو در بین اطلاعات 10 کاربر)
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                 id="userHistoryTable_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button previous disabled"
                                                        id="userHistoryTable_previous"><a href="#"
                                                                                          aria-controls="userHistoryTable"
                                                                                          data-dt-idx="0" tabindex="0">قبلی</a>
                                                    </li>
                                                    <li class="paginate_button active"><a href="#"
                                                                                          aria-controls="userHistoryTable"
                                                                                          data-dt-idx="1"
                                                                                          tabindex="0">1</a></li>
                                                    <li class="paginate_button "><a href="#"
                                                                                    aria-controls="userHistoryTable"
                                                                                    data-dt-idx="2" tabindex="0">2</a>
                                                    </li>
                                                    <li class="paginate_button "><a href="#"
                                                                                    aria-controls="userHistoryTable"
                                                                                    data-dt-idx="3" tabindex="0">3</a>
                                                    </li>
                                                    <li class="paginate_button next" id="userHistoryTable_next"><a
                                                                href="#" aria-controls="userHistoryTable"
                                                                data-dt-idx="4" tabindex="0">بعدی</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-3">
                        <div class="card-header" style="display: flex;">
                            <h5 id="statsBadgeH5" class="text-black" align="right">تاریخچه مسابقات
                                <span data-tippy-content="تمرین" class="badge T pfont" tabindex="0">1</span>
                                <span data-tippy-content="برنز" class="badge B pfont" tabindex="0">1</span>
                                <span data-tippy-content="نقره" class="badge S pfont" tabindex="0">0</span>
                                <span data-tippy-content="طلا" class="badge G pfont" tabindex="0">0</span>
                                <span data-tippy-content="الماس" class="badge D pfont" tabindex="0">0</span>
                                <span data-tippy-content="پلکانی" class="badge D pfont" tabindex="0">0</span></h5>
                            <div style="position: absolute; left:10px;">
                                <button class="btn btn-primary btn-sm toggle" style="display:inline;"><i
                                            class="fa fa-eye"></i></button>
                            </div>
                        </div>
                        <div class="card-body" style="display: none;">
                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap no-footer">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="dataTables_length" id="DataTables_Table_0_length"><label>نمایش
                                                    <select name="DataTables_Table_0_length"
                                                            aria-controls="DataTables_Table_0"
                                                            class="form-control input-sm">
                                                        <option value="10">10</option>
                                                        <option value="20">20</option>
                                                        <option value="50">50</option>
                                                    </select> داده در هر صفحه</label></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>جستجو:
                                                    <input type="search" class="form-control input-sm" placeholder=""
                                                           aria-controls="DataTables_Table_0"></label></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table dataTable no-footer" id="DataTables_Table_0" role="grid"
                                                   aria-describedby="DataTables_Table_0_info">
                                                <thead>
                                                <tr role="row">
                                                    <th scope="col" class=" _desc" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                        style="width: 10px;" aria-sort="descending"
                                                        aria-label="Session: activate to sort column ascending"
                                                        width="10px">Session
                                                    </th>
                                                    <th scope="col" class=" " tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                        style="width: 10px;"
                                                        aria-label="مسابقه: activate to sort column ascending"
                                                        width="10px">مسابقه
                                                    </th>
                                                    <th scope="col" class=" " tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                        style="width: 10px;"
                                                        aria-label="جایزه دریافت شده: activate to sort column ascending"
                                                        width="10px">جایزه دریافت شده
                                                    </th>
                                                    <th scope="col" class=" " tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                        style="width: 10px;"
                                                        aria-label="سوالات صحیح: activate to sort column ascending"
                                                        width="10px">سوالات صحیح
                                                    </th>
                                                    <th scope="col" class=" " tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                        style="width: 10px;"
                                                        aria-label="راهنماها: activate to sort column ascending"
                                                        width="10px">راهنماها
                                                    </th>
                                                    <th scope="col" class=" " tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                        style="width: 100px;"
                                                        aria-label="تاریخ: activate to sort column ascending"
                                                        width="100px">تاریخ
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr role="row" class="odd">
                                                    <td data-order="386" class=" _1">386</td>
                                                    <td>
                                                        <span class="badge B">برنزی</span>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>1</td>
                                                    <td>
                                                        <span class="badge  badge-success">try</span>
                                                    </td>
                                                    <td dir="ltr">1398٫6٫29&nbsp;&nbsp;&nbsp;15:31:21</td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td data-order="385" class=" _1">385</td>
                                                    <td>
                                                        <span class="badge T">تمرین</span>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>0</td>
                                                    <td>
                                                    </td>
                                                    <td dir="ltr">1398٫6٫29&nbsp;&nbsp;&nbsp;15:31:09</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
                                                 aria-live="polite">صفحه 1 از 1
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                 id="DataTables_Table_0_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button previous disabled"
                                                        id="DataTables_Table_0_previous"><a href="#"
                                                                                            aria-controls="DataTables_Table_0"
                                                                                            data-dt-idx="0"
                                                                                            tabindex="0">قبلی</a></li>
                                                    <li class="paginate_button active"><a href="#"
                                                                                          aria-controls="DataTables_Table_0"
                                                                                          data-dt-idx="1"
                                                                                          tabindex="0">1</a></li>
                                                    <li class="paginate_button next disabled"
                                                        id="DataTables_Table_0_next"><a href="#"
                                                                                        aria-controls="DataTables_Table_0"
                                                                                        data-dt-idx="2" tabindex="0">بعدی</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-3">
                        <div class="card-header" style="display: flex;">
                            <h5 class="text-black" align="right">تاریخچه سکه</h5>
                            <div style="position: absolute; left:10px;">
                                <button class="btn btn-success btn-sm toggle" id="modalCaller" style="display:inline;">
                                    افزودن سکه
                                </button>
                                <button class="btn btn-primary btn-sm toggle" style="display:inline;"><i
                                            class="fa fa-eye"></i></button>
                            </div>
                        </div>
                        <div class="card-body" style="display: none;">
                            <div class="table-responsive">
                                <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap no-footer">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="dataTables_length" id="DataTables_Table_1_length"><label>نمایش
                                                    <select name="DataTables_Table_1_length"
                                                            aria-controls="DataTables_Table_1"
                                                            class="form-control input-sm">
                                                        <option value="10">10</option>
                                                        <option value="20">20</option>
                                                        <option value="50">50</option>
                                                    </select> داده در هر صفحه</label></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div id="DataTables_Table_1_filter" class="dataTables_filter"><label>جستجو:
                                                    <input type="search" class="form-control input-sm" placeholder=""
                                                           aria-controls="DataTables_Table_1"></label></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table dataTable no-footer" id="DataTables_Table_1" role="grid"
                                                   aria-describedby="DataTables_Table_1_info">
                                                <thead>
                                                <tr role="row">
                                                    <th scope="col" class=" _desc" tabindex="0"
                                                        aria-controls="DataTables_Table_1" rowspan="1" colspan="1"
                                                        style="width: 10px;" aria-sort="descending"
                                                        aria-label="مقدار: activate to sort column ascending"
                                                        width="10px">مقدار
                                                    </th>
                                                    <th scope="col" class=" " tabindex="0"
                                                        aria-controls="DataTables_Table_1" rowspan="1" colspan="1"
                                                        style="width: 10px;"
                                                        aria-label="نوع: activate to sort column ascending"
                                                        width="10px">نوع
                                                    </th>
                                                    <th scope="col" class=" " tabindex="0"
                                                        aria-controls="DataTables_Table_1" rowspan="1" colspan="1"
                                                        style="width: 10px;"
                                                        aria-label="توضیحات: activate to sort column ascending"
                                                        width="10px">توضیحات
                                                    </th>
                                                    <th scope="col" class=" " tabindex="0"
                                                        aria-controls="DataTables_Table_1" rowspan="1" colspan="1"
                                                        style="width: 100px;"
                                                        aria-label="تاریخ: activate to sort column ascending"
                                                        width="100px">تاریخ
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>


                                                <tr role="row" class="odd">
                                                    <td data-order="1804" class=" _1"><span
                                                                class="badge badge-danger" dir="ltr">-210</span></td>
                                                    <td>خرید شانس مجدد <span class="badge B pfont">برنز</span></td>
                                                    <td dir="ltr">-</td>
                                                    <td dir="ltr">1398٫6٫29&nbsp;&nbsp;&nbsp;15:31:49</td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td data-order="1803" class=" _1"><span
                                                                class="badge badge-danger" dir="ltr">-300</span></td>
                                                    <td>خرید بلیط <span class="badge B pfont">برنز</span></td>
                                                    <td dir="ltr">-</td>
                                                    <td dir="ltr">1398٫6٫29&nbsp;&nbsp;&nbsp;15:31:21</td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td data-order="1802" class=" _1"><span
                                                                class="badge badge-danger" dir="ltr">0</span></td>
                                                    <td><code>ticket-ticket-T</code></td>
                                                    <td dir="ltr">-</td>
                                                    <td dir="ltr">1398٫6٫29&nbsp;&nbsp;&nbsp;15:31:09</td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td data-order="1794" class=" _1"><span
                                                                class="badge badge-success" dir="ltr">250</span></td>
                                                    <td>استفاده از کد معرف</td>
                                                    <td dir="ltr">26</td>
                                                    <td dir="ltr">1398٫6٫29&nbsp;&nbsp;&nbsp;15:27:18</td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td data-order="1793" class=" _1"><span
                                                                class="badge badge-success" dir="ltr">300</span></td>
                                                    <td>سکه دریافتی ثبت‌نام</td>
                                                    <td dir="ltr">-</td>
                                                    <td dir="ltr">1398٫6٫29&nbsp;&nbsp;&nbsp;15:27:09</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="dataTables_info" id="DataTables_Table_1_info" role="status"
                                                 aria-live="polite">صفحه 1 از 1
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                 id="DataTables_Table_1_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button previous disabled"
                                                        id="DataTables_Table_1_previous"><a href="#"
                                                                                            aria-controls="DataTables_Table_1"
                                                                                            data-dt-idx="0"
                                                                                            tabindex="0">قبلی</a></li>
                                                    <li class="paginate_button active"><a href="#"
                                                                                          aria-controls="DataTables_Table_1"
                                                                                          data-dt-idx="1"
                                                                                          tabindex="0">1</a></li>
                                                    <li class="paginate_button next disabled"
                                                        id="DataTables_Table_1_next"><a href="#"
                                                                                        aria-controls="DataTables_Table_1"
                                                                                        data-dt-idx="2" tabindex="0">بعدی</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-3">
                        <div class="card-header" style="display: flex;">
                            <h5 class="text-black" align="right">تاریخچه الماس</h5>
                            <div style="position: absolute; left:10px;">
                                <button class="btn btn-success btn-sm toggle" id="Diamond-modalCaller"
                                        style="display:inline;">افزودن الماس
                                </button>
                                <button class="btn btn-primary btn-sm toggle" style="display:inline;"><i
                                            class="fa fa-eye"></i></button>
                            </div>
                        </div>
                        <div class="card-body" style="display: none;">
                            <div class="table-responsive">
                                <div id="userDiamondHistory_wrapper" class="dataTables_wrapper dt-bootstrap no-footer">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="dataTables_length" id="userDiamondHistory_length"><label>نمایش
                                                    <select name="userDiamondHistory_length"
                                                            aria-controls="userDiamondHistory"
                                                            class="form-control input-sm">
                                                        <option value="10">10</option>
                                                        <option value="20">20</option>
                                                        <option value="50">50</option>
                                                    </select> داده در هر صفحه</label></div>
                                        </div>
                                        <div class="col-sm-6"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-sm dataTable no-footer" id="userDiamondHistory"
                                                   style="width: 100%;" role="grid"
                                                   aria-describedby="userDiamondHistory_info">
                                                <thead>
                                                <tr role="row">
                                                    <th scope="col" class=" " tabindex="0"
                                                        aria-controls="userDiamondHistory" rowspan="1" colspan="1"
                                                        style="width: 0px;"
                                                        aria-label="مقدار: activate to sort column ascending"
                                                        width="10px">مقدار
                                                    </th>
                                                    <th scope="col" class=" " tabindex="0"
                                                        aria-controls="userDiamondHistory" rowspan="1" colspan="1"
                                                        style="width: 0px;"
                                                        aria-label="توضیحات: activate to sort column ascending">توضیحات
                                                    </th>
                                                    <th scope="col" class=" " tabindex="0"
                                                        aria-controls="userDiamondHistory" rowspan="1" colspan="1"
                                                        style="width: 0px;"
                                                        aria-label="تاریخ: activate to sort column ascending"
                                                        width="100px">تاریخ
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr role="row" class="odd">
                                                    <td><span class="badge badge-success" dir="ltr">1</span></td>
                                                    <td>
                                                        <div dir="ltr"><code>first-</code></div>
                                                    </td>
                                                    <td>
                                                        <div dir="ltr">1398٫6٫29 15:27:18</div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <div id="userDiamondHistory_processing"
                                                 class="dataTables_processing panel panel-default"
                                                 style="display: none;">Processing...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="dataTables_info" id="userDiamondHistory_info" role="status"
                                                 aria-live="polite">صفحه 1 از 1 (نتیجه جستجو در بین اطلاعات 10 کاربر)
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                 id="userDiamondHistory_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button previous disabled"
                                                        id="userDiamondHistory_previous"><a href="#"
                                                                                            aria-controls="userDiamondHistory"
                                                                                            data-dt-idx="0"
                                                                                            tabindex="0">قبلی</a></li>
                                                    <li class="paginate_button active"><a href="#"
                                                                                          aria-controls="userDiamondHistory"
                                                                                          data-dt-idx="1"
                                                                                          tabindex="0">1</a></li>
                                                    <li class="paginate_button next disabled"
                                                        id="userDiamondHistory_next"><a href="#"
                                                                                        aria-controls="userDiamondHistory"
                                                                                        data-dt-idx="2" tabindex="0">بعدی</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-3">
                        <div class="card-header" style="display: flex;">
                            <h5 class="text-black" align="right">تاریخچه پول</h5>
                            <div style="position: absolute; left:10px;">
                                <button class="btn btn-primary btn-sm toggle" style="display:inline;"><i
                                            class="fa fa-eye"></i></button>
                            </div>
                        </div>
                        <div class="card-body" style="display: none;">
                            <div class="table-responsive">
                                <div id="DataTables_Table_2_wrapper" class="dataTables_wrapper dt-bootstrap no-footer">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="dataTables_length" id="DataTables_Table_2_length"><label>نمایش
                                                    <select name="DataTables_Table_2_length"
                                                            aria-controls="DataTables_Table_2"
                                                            class="form-control input-sm">
                                                        <option value="10">10</option>
                                                        <option value="20">20</option>
                                                        <option value="50">50</option>
                                                    </select> داده در هر صفحه</label></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div id="DataTables_Table_2_filter" class="dataTables_filter"><label>جستجو:
                                                    <input type="search" class="form-control input-sm" placeholder=""
                                                           aria-controls="DataTables_Table_2"></label></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table dataTable no-footer" id="DataTables_Table_2" role="grid"
                                                   aria-describedby="DataTables_Table_2_info">
                                                <thead>
                                                <tr role="row">
                                                    <th scope="col" class=" _desc" tabindex="0"
                                                        aria-controls="DataTables_Table_2" rowspan="1" colspan="1"
                                                        style="width: 10px;" aria-sort="descending"
                                                        aria-label="Session: activate to sort column ascending"
                                                        width="10px">Session
                                                    </th>
                                                    <th scope="col" class=" " tabindex="0"
                                                        aria-controls="DataTables_Table_2" rowspan="1" colspan="1"
                                                        style="width: 10px;"
                                                        aria-label="مبلغ: activate to sort column ascending"
                                                        width="10px">مبلغ
                                                    </th>
                                                    <th scope="col" class=" " tabindex="0"
                                                        aria-controls="DataTables_Table_2" rowspan="1" colspan="1"
                                                        style="width: 10px;"
                                                        aria-label="توضیحات: activate to sort column ascending"
                                                        width="10px">توضیحات
                                                    </th>
                                                    <th scope="col" class=" " tabindex="0"
                                                        aria-controls="DataTables_Table_2" rowspan="1" colspan="1"
                                                        style="width: 100px;"
                                                        aria-label="تاریخ: activate to sort column ascending"
                                                        width="100px">تاریخ
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                        
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="dataTables_info" id="DataTables_Table_2_info" role="status"
                                                 aria-live="polite">داده‌ای موجود نیست!
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                 id="DataTables_Table_2_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button previous disabled"
                                                        id="DataTables_Table_2_previous"><a href="#"
                                                                                            aria-controls="DataTables_Table_2"
                                                                                            data-dt-idx="0"
                                                                                            tabindex="0">قبلی</a></li>
                                                    <li class="paginate_button next disabled"
                                                        id="DataTables_Table_2_next"><a href="#"
                                                                                        aria-controls="DataTables_Table_2"
                                                                                        data-dt-idx="1" tabindex="0">بعدی</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-3">
                        <div class="card-header" style="display: flex;">
                            <h5 class="text-black" align="right">درخواست‌های واریز</h5>
                            <div style="position: absolute; left:10px;">
                                <button class="btn btn-primary btn-sm toggle" style="display:inline;"><i
                                            class="fa fa-eye"></i></button>
                            </div>
                        </div>
                        <div class="card-body" style="display: none;">
                            <div class="table-responsive">
                                <div id="DataTables_Table_3_wrapper" class="dataTables_wrapper dt-bootstrap no-footer">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="dataTables_length" id="DataTables_Table_3_length"><label>نمایش
                                                    <select name="DataTables_Table_3_length"
                                                            aria-controls="DataTables_Table_3"
                                                            class="form-control input-sm">
                                                        <option value="10">10</option>
                                                        <option value="20">20</option>
                                                        <option value="50">50</option>
                                                    </select> داده در هر صفحه</label></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div id="DataTables_Table_3_filter" class="dataTables_filter"><label>جستجو:
                                                    <input type="search" class="form-control input-sm" placeholder=""
                                                           aria-controls="DataTables_Table_3"></label></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table dataTable no-footer" id="DataTables_Table_3" role="grid"
                                                   aria-describedby="DataTables_Table_3_info">
                                                <thead>
                                                <tr role="row">
                                                    <th scope="col" class=" _desc" tabindex="0"
                                                        aria-controls="DataTables_Table_3" rowspan="1" colspan="1"
                                                        style="width: 10px;" aria-sort="descending"
                                                        aria-label="#: activate to sort column ascending" width="10px">#
                                                    </th>
                                                    <th scope="col" class=" " tabindex="0"
                                                        aria-controls="DataTables_Table_3" rowspan="1" colspan="1"
                                                        style="width: 10px;"
                                                        aria-label="مبلغ: activate to sort column ascending"
                                                        width="10px">مبلغ
                                                    </th>
                                                    <th scope="col" class=" " tabindex="0"
                                                        aria-controls="DataTables_Table_3" rowspan="1" colspan="1"
                                                        style="width: 10px;"
                                                        aria-label="کد رهگیری: activate to sort column ascending"
                                                        width="10px">کد رهگیری
                                                    </th>
                                                    <th scope="col" class=" " tabindex="0"
                                                        aria-controls="DataTables_Table_3" rowspan="1" colspan="1"
                                                        style="width: 10px;"
                                                        aria-label="تاریخ: activate to sort column ascending"
                                                        width="10px">isPaid
                                                    </th>
                                                    <th scope="col" class=" " tabindex="0"
                                                        aria-controls="DataTables_Table_3" rowspan="1" colspan="1"
                                                        style="width: 10px;"
                                                        aria-label="تاریخ: activate to sort column ascending"
                                                        width="10px">ignored
                                                    </th>
                                                    <th scope="col" class=" " tabindex="0"
                                                        aria-controls="DataTables_Table_3" rowspan="1" colspan="1"
                                                        style="width: 10px;"
                                                        aria-label="تاریخ: activate to sort column ascending"
                                                        width="10px">reqDate
                                                    </th>
                                                    <th scope="col" class=" " tabindex="0"
                                                        aria-controls="DataTables_Table_3" rowspan="1" colspan="1"
                                                        style="width: 10px;"
                                                        aria-label="وضعیت: activate to sort column ascending"
                                                        width="10px">payDate
                                                    </th>
                                                  
                                                </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="dataTables_info" id="DataTables_Table_3_info" role="status"
                                                 aria-live="polite">داده‌ای موجود نیست!
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                 id="DataTables_Table_3_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button previous disabled"
                                                        id="DataTables_Table_3_previous"><a href="#"
                                                                                            aria-controls="DataTables_Table_3"
                                                                                            data-dt-idx="0"
                                                                                            tabindex="0">قبلی</a></li>
                                                    <li class="paginate_button next disabled"
                                                        id="DataTables_Table_3_next"><a href="#"
                                                                                        aria-controls="DataTables_Table_3"
                                                                                        data-dt-idx="1" tabindex="0">بعدی</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            عسث
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-header" style="display: flex;">
                            <h5 class="text-black" align="right">افراد معرفی شده <span
                                        class="badge badge-primary pfont">0</span></h5>
                            <div style="position: absolute; left:10px;">
                                <button class="btn btn-primary btn-sm toggle" style="display:inline;"><i
                                            class="fa fa-eye"></i></button>
                            </div>
                        </div>
                        <div class="card-body" style="display: none;">
                            <div class="table-responsive">
                                <div id="DataTables_Table_4_wrapper" class="dataTables_wrapper dt-bootstrap no-footer">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="dataTables_length" id="DataTables_Table_4_length"><label>نمایش
                                                    <select name="DataTables_Table_4_length"
                                                            aria-controls="DataTables_Table_4"
                                                            class="form-control input-sm">
                                                        <option value="10">10</option>
                                                        <option value="20">20</option>
                                                        <option value="50">50</option>
                                                    </select> داده در هر صفحه</label></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div id="DataTables_Table_4_filter" class="dataTables_filter"><label>جستجو:
                                                    <input type="search" class="form-control input-sm" placeholder=""
                                                           aria-controls="DataTables_Table_4"></label></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table dataTable no-footer" id="DataTables_Table_4" role="grid"
                                                   aria-describedby="DataTables_Table_4_info">
                                                <thead>
                                                <tr role="row">
                                                    <th scope="col" class=" _desc" tabindex="0"
                                                        aria-controls="DataTables_Table_4" rowspan="1" colspan="1"
                                                        style="width: 10px;" aria-sort="descending"
                                                        aria-label="#: activate to sort column ascending" width="10px">#
                                                    </th>
                                                    <th scope="col" class=" " tabindex="0"
                                                        aria-controls="DataTables_Table_4" rowspan="1" colspan="1"
                                                        style="width: 10px;"
                                                        aria-label="نام: activate to sort column ascending"
                                                        width="10px">نام
                                                    </th>
                                                    <th scope="col" class=" " tabindex="0"
                                                        aria-controls="DataTables_Table_4" rowspan="1" colspan="1"
                                                        style="width: 10px;"
                                                        aria-label="ورژن: activate to sort column ascending"
                                                        width="10px">ورژن
                                                    </th>
                                                    <th scope="col" class=" " tabindex="0"
                                                        aria-controls="DataTables_Table_4" rowspan="1" colspan="1"
                                                        style="width: 10px;"
                                                        aria-label="تاریخ: activate to sort column ascending"
                                                        width="10px">تاریخ
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="odd">
                                                    <td colspan="4" class="dataTables_empty" valign="top">یافت نشد!</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="dataTables_info" id="DataTables_Table_4_info" role="status"
                                                 aria-live="polite">داده‌ای موجود نیست!
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                 id="DataTables_Table_4_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button previous disabled"
                                                        id="DataTables_Table_4_previous"><a href="#"
                                                                                            aria-controls="DataTables_Table_4"
                                                                                            data-dt-idx="0"
                                                                                            tabindex="0">قبلی</a></li>
                                                    <li class="paginate_button next disabled"
                                                        id="DataTables_Table_4_next"><a href="#"
                                                                                        aria-controls="DataTables_Table_4"
                                                                                        data-dt-idx="1" tabindex="0">بعدی</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-header" style="display: flex;">
                            <h5 class="text-black" align="right">درخواست پشتیبانی</h5>
                            <div style="position: absolute; left:10px;">
                                <button class="btn btn-success btn-sm" id="seenMessage" style="display:inline;">سین
                                    زدن
                                </button>
                                <button class="btn btn-primary btn-sm toggle" style="display:inline;"><i
                                            class="fa fa-eye"></i></button>
                            </div>
                        </div>
                        <div class="card-body" style="display: none;">
                            <div class="box box-warning direct-chat direct-chat-warning">
                                <div class="box-body">
                                    <div class="direct-chat-messages"></div>
                                </div>
                                <div class="box-footer">
                                    <form action="#" method="post">
                                        <div class="input-group">
                                            <textarea id="support-text" placeholder="پاسخ..." class="form-control"
                                                      type="text" rows="5"></textarea>
                                            <span class="input-group-btn">
                          <button id="support-button" type="button" class="btn btn-warning btn-flat">ارسال</button>
                          </span>
                                        </div>
                                        <div class="row m-0 mt-1">
                                            <select class="form-control col-8" id="support-defMessage-selector">
                                                <option value="" disabled="" selected="">جواب‌های آماده</option>
                                                <option value="سلام دوست عزیز تعداد بلیت های ورود حدس تصویر بستگی به مرحله ای که هستین داره، مرحله 1تا9: 5بلیت 10تا19 : 4بلیت ، 20تا29 : 3بلیت دریافت میکنید.">
                                                    سلام دوست عزیز تعداد بلیت های ورود حدس تصویر بستگی به مرحله ای که
                                                    هستین داره، مرحله...
                                                </option>
                                                <option value="سوال 15 در هر پلنی رو اگه درست جواب بدید و نمایش خطا بده سکه یا جایزه ی اون مرحله ثبت میشه واستون. این مشکل در حال رفع هست.">
                                                    سوال 15 در هر پلنی رو اگه درست جواب بدید و نمایش خطا بده سکه یا
                                                    جایزه ی اون مرحله ثبت �...
                                                </option>
                                                <option value="دوست عزیز علت این هست که شماره کارتی ثبت نکردین لطفا یک شماره کارت ثبت کنید یا سقف برداشت که 20هزارتومن هست رو رعایت نکردید .">
                                                    دوست عزیز علت این هست که شماره کارتی ثبت نکردین لطفا یک شماره کارت
                                                    ثبت کنید یا سقف ب...
                                                </option>
                                                <option value="سلام لطف کنید این نسخه ای که دارین رو پاک کنید و آخرین ورژن رو نصب کنید، برای تماشای ویدئو با فیلترشکن اقدام کنید.">
                                                    سلام لطف کنید این نسخه ای که دارین رو پاک کنید و آخرین ورژن رو نصب
                                                    کنید، برای تماشای...
                                                </option>
                                                <option value="دوست عزیز ، از قوانین به صراحت ذکر شده است که ، استفاده از چند اکانت کاربری مجاز نمیباشد. لطفا پس از خروج از دیگر حساب ها ، به بازیتون ادامه بدین. لازم به ذکر است ، هوش برنده هیچ مسئولیتی در قبال مبالغ برنده شده ی شما تا این لحظه ندارد. لطفا مجددا تمام قوانین را مطالعه کنید. باتشکر">
                                                    دوست عزیز ، از قوانین به صراحت ذکر شده است که ، استفاده از چند اکانت
                                                    کاربری مجاز نمی...
                                                </option>
                                                <option value="هرگونه توهین و بی احترامی و هتک حرمت به دیگر کاربران و  پشتیبانی و ... باعث تعلیق حساب کاربری فرد خاطی میشود.">
                                                    هرگونه توهین و بی احترامی و هتک حرمت به دیگر کاربران و پشتیبانی و
                                                    ... باعث تعلیق حسا�...
                                                </option>
                                                <option value="سلام دوست عزیز .امتیازها برای انتخاب عکس پروفایل کاربرد داره، هرچه امتیاز شما بالاتر باشه میتونید عکس های پروفایل زیبا تری در سطح های مختلف انتخاب کنید . در پایان هر ماه اگر بالاترین امتیاز رو داشته باشید و جز 10نفر برتر باشید با امتیازتون پول برنده میشید.">
                                                    سلام دوست عزیز .امتیازها برای انتخاب عکس پروفایل کاربرد داره، هرچه
                                                    امتیاز شما بالا...
                                                </option>
                                                <option value="دوست عزیز احتمالا مشکل در اتصال اینترنت بوده برای مشکل در حدس تصویر در این چند روز دوباره امتحان کنید و اگر مشکل داشت اطلاع بدین.ممنون">
                                                    دوست عزیز احتمالا مشکل در اتصال اینترنت بوده برای مشکل در حدس تصویر
                                                    در این چند روز �...
                                                </option>
                                                <option value="سلام دوست عزیز به دلیل حجم بالای برندگان ما دوستان در لیست قرار میگیرن و حتما پرداخت میشه.">
                                                    سلام دوست عزیز به دلیل حجم بالای برندگان ما دوستان در لیست قرار
                                                    میگیرن و حتما پرداخ...
                                                </option>
                                                <option value="دوست عزیز با vpn امتحان کنید و اگر نشد سرویس دهنده تبلیغات، تبلیغی ارائه نداده و هر زمان تبلیغاتی داشته باشه حتما نمایش میده به این دلیل خطا میده">
                                                    دوست عزیز با vpn امتحان کنید و اگر نشد سرویس دهنده تبلیغات، تبلیغی
                                                    ارائه نداده و هر ز...
                                                </option>
                                                <option value="سلام وقتتون بخیر قسمت حدس تصویر مشکل داره فعلا بازی نکنید،  به محض برطرف شدن اطلاع رسانی میشه خدمتتون.">
                                                    سلام وقتتون بخیر قسمت حدس تصویر مشکل داره فعلا بازی نکنید، به محض
                                                    برطرف شدن اطلاع �...
                                                </option>
                                                <option value="ماراتن استقامت 300سکه بلیط ورودی باید بپردازید، به صورت نامحدود سوال میاد و هرچه تعداد سوالهایی که پاسخ صحیح میدید بیشتر باشه رکوردتون بالاتر میره، و اگر جز نفرات اول باشید تا پایان ماراتن برنده میشید.">
                                                    ماراتن استقامت 300سکه بلیط ورودی باید بپردازید، به صورت نامحدود سوال
                                                    میاد و هرچه تع�...
                                                </option>
                                                <option value="سوال 15 در هر پلنی رو اگه درست جواب بدید و نمایش خطا بده سکه یا جایزه ی اون مرحله ثبت میشه واستون. فقط خطا نمایش میده این مشکل در حال رفع هست.">
                                                    سوال 15 در هر پلنی رو اگه درست جواب بدید و نمایش خطا بده سکه یا
                                                    جایزه ی اون مرحله ثبت �...
                                                </option>
                                                <option value="دوست عزیز علت این هست که شماره کارتی ثبت نکردین لطفا یک شماره کارت ثبت کنید و بعد درخواست واریز بدید.">
                                                    دوست عزیز علت این هست که شماره کارتی ثبت نکردین لطفا یک شماره کارت
                                                    ثبت کنید و بعد در...
                                                </option>
                                                <option value="سلام  پرداخت ها 48ساعته انجام میشه ولی به دلیل مشکلی که برای سیستم پرداخت پیش اومده  به محض برطرف شدن واریزتون انجام میشه حتما.">
                                                    سلام پرداخت ها 48ساعته انجام میشه ولی به دلیل مشکلی که برای سیستم
                                                    پرداخت پیش اومده ...
                                                </option>
                                                <option value="سلام لطف کنید این نسخه ای که دارین رو پاک کنید و آخرین ورژن رو نصب کنید، برای تماشای ویدئو با فیلترشکن اقدام کنید.">
                                                    سلام لطف کنید این نسخه ای که دارین رو پاک کنید و آخرین ورژن رو نصب
                                                    کنید، برای تماشای...
                                                </option>
                                                <option value="سلام وقتتون بخیر تعداد بلیت رایگان حدس تصویر یک عدد هست، یک بلیت هم میتونید با دیدن ویدئو به دست بیارید.">
                                                    سلام وقتتون بخیر تعداد بلیت رایگان حدس تصویر یک عدد هست، یک بلیت هم
                                                    میتونید با دیدن...
                                                </option>
                                            </select>
                                            <select class="form-control col-4" id="support-operator-selector">
                                                <option value="" disabled="" selected="">نام اپراتور</option>
                                                <option value="با تشکر و احترام، الناز قاسمی">الناز قاسمی</option>
                                                <option value="با سپاس، مهلا احتشام">مهلا احتشام</option>
                                                <option value="روز خوبی داشته باشید، ندا ناجی">ندا ناجی</option>
                                                <option value="با سپاس، زهرا خندان">زهرا خندان</option>
                                                <option value="با تشکر و احترام، مهتاب جعفری">مهتاب جعفری</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Main row -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include "includes/footer.php" ?>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="dist/js/jquery.min.js"></script>

<script>
    $.ajax({
        type: "POST",
        url: "https://panel.qday-app.com/panel/profile",
        contentType: "application/json; charset=utf-8",
        data: JSON.stringify({
            userId: <?= $id ?>
        }),
        headers: {
            "Authorization": "Basic ZWhzYW46ZWhzYW4"
        },
        success: function (response) {
            $.each(response.data.personalInfo, function (i, e) {

                $("#name").html(e.name);
                $("#mobile").html(e.mobile);
                $("#version").html(e.version);
                $("#regDate").html(e.regDate);
                $("#cardNum").html(e.cardNum);
                $("#ticketCount").html(e.ticketCount);
                $("#lifeCount").html(e.lifeCount);
                $("#goldenCount").html(e.goldenCount);
                $("#userCat").html(e.userCat);
            });

    
                $("#inCash").html(response.data.inCash);
                $("#inVideo").html(response.data.inVideo);
                $("#gameWon").html(response.data.gameStats.gameWon);
        

              
        }

    });


    $.ajax({
        type: "POST",
        url: "https://panel.qday-app.com/panel/walletHistory",
        contentType: "application/json; charset=utf-8",
        data: JSON.stringify({
            userId: <?= $id ?>
        }),
        headers: {
            "Authorization": "Basic ZWhzYW46ZWhzYW4"
        },
        success: function (response) {
            $.each(response.data.walletHistory, function (i, e) {

                
                var q = `<tr>
                  <td>${e.id}</td>
                  <td>${e.value}</td>
                  <td>${e.description}</td>
                  <td>${e.timestamp}</td>
                  </tr>`;

        $('#DataTables_Table_2').append(q);
             
            });
        }

    });

    $.ajax({
        type: "POST",
        url: "https://panel.qday-app.com/panel/paymentHistory",
        contentType: "application/json; charset=utf-8",
        data: JSON.stringify({
            
            userId: 2,
            sort:{
        sort: "desc",
        field: "_members"
                 }
        }),
        headers: {
            "Authorization": "Basic ZWhzYW46ZWhzYW4"
        },
        success: function (response) {
            $.each(response.data, function (i, e) {
       
    
                var q = `<tr>
                   <td>${e.id}</td>
                   <td>${e.val}</td>
                   <td>${e.trackingCode}</td>
                   <td>${e.isPaid}</td>
                   <td>${e.ignored}</td>
                   <td>${e.reqDate}</td>
                   <td>${e.payDate}</td>
                
                </tr>`;

        $('#DataTables_Table_3 tbody').append(q);
             

            });
        }

    });
    
</script>


<script>
    $('.col-lg-9 .card-body').hide();

    $('button.btn.btn-primary.btn-sm.toggle').click(function (e) {
        e.preventDefault();
        $(this).parent().parent().next().toggle();
    });

    $('.payRequests button.btn').click(function (e) {
        e.preventDefault();
        var btn = $(this);
        var id = $(this).data('id');
        var status = $(this).data('status');

        alertify.prompt(
            'تغییر وضعیت پرداخت',
            'کد رهگیری را وارد کنید:',
            $(this).parent().next().html(),
            function (evt, value) {
                $.ajax({
                    type: "POST",
                    url: "/siteAPI/transaction/pay",
                    data: {
                        id: id,
                        status: status,
                        trCode: value
                    },
                    success: function (response) {
                        $(btn).removeClass('btn-danger').addClass('btn-success').html('پرداخت شده').data('status', 1);
                        $(btn).parent().next().html(value);
                        if (status == 0)
                            alertify.success('پیامک برای کاربر ارسال شد');
                        alertify.success('اطلاعات با موفقیت بروز شد');
                    }
                });
            },
        ).set(
            'labels',
            {
                ok: 'پرداخت شده',
                cancel: 'پرداخت نشده'
            }
        ).set(
            {
                onshow: function () {
                    $('.ajs-button.ajs-ok').addClass('btn btn-success');
                    $('.ajs-button.ajs-cancel').addClass('btn btn-danger');
                }
            }
        ).set(
            {
                onfocus: function () {
                    $('.ajs-button.ajs-ok').addClass('btn btn-success');
                    $('.ajs-button.ajs-cancel').addClass('btn btn-danger');
                }
            }
        ).set('closable', false);
    });


</script>

<script >


    function loadSupport(){
        $.ajax({
        type: "POST",
        url: "https://panel.qday-app.com/panel/chat/history",
        contentType: "application/json; charset=utf-8",
        data: JSON.stringify({
            userId: <?= $id ?>
        }),
        headers: {
            "Authorization": "Basic ZWhzYW46ZWhzYW4"
        },
        success: function (response) {
            $('.direct-chat-messages').empty();

            $.each(response.list, function (i, e) {
              if( e.answer==0 ){
                var report =``;
                if(e.report=='1')
                  report = ' report';
                var ap = `<div class="direct-chat-msg">
                            <div class="direct-chat-info clearfix">
                              <span class="direct-chat-name pull-left">کاربر</span>
                              <span class="pull-right badge badge-warning ml-2 report-support-message" data-id="<?= $id ?>"><i class="fa fa-flag"></i></span>
                              <span class="direct-chat-timestamp pull-right">${e.timestamp}</span>
                            </div>
                            <img class="direct-chat-img" src="http://moneyq.ir/data/profiles/profile_boy_010.png" alt="user image">
                            <div id="sup-<?= $id ?>" class="direct-chat-text${report}">${e.text}</div>
                          </div>`;
              }
              else{
                var ap = `<div class="direct-chat-msg right">
                          <div class="direct-chat-info clearfix">
                            <span class="direct-chat-name pull-right">پشتیبانی</span>`;
                            if(<?= $id ?> != '-1' )
                              ap += `<span class="pull-left badge badge-danger mr-2 del-support-message" data-id="<?= $id ?>"><i class="fa fa-trash"></i></span>`;
                            ap += `<span class="direct-chat-timestamp pull-left">${e.timestamp}</span>
                          </div>
                          <img class="direct-chat-img" src="dist/img/admin-logo.png" alt="user image">
                          <div class="direct-chat-text">${e.text}</div>
                        </div>`;
              }
        $('.direct-chat-messages').prepend(ap);
            });
        }
    });
    }
    loadSupport();

        $('#support-button').click(function (e) {
        e.preventDefault();
        if( $('#support-text').val()!='' ){
          $('#support-button').prop("disabled",true);
          $.ajax({
            type: "POST",
            contentType: "application/json; charset=utf-8",
            url: "https://panel.qday-app.com/webAPI/support/add",
              data: JSON.stringify({
                text: $('#support-text').val(),
                userID: <?= $id ?>
            }),
            headers: {
                "Authorization": "Basic ZWhzYW46ZWhzYW4"
            },
            success: function (response) {
                console.log(response)
              $('#support-button').prop("disabled",false);
              $('#support-text').val('');
              loadSupport();
            }
          });
        }
      });
      
    
    </script>

<!-- v4.0.0-alpha.6 -->
<script src="dist/bootstrap/js/bootstrap.min.js"></script>

<!-- template -->
<script src="dist/js/adminkit.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="dist/plugins/jquery-ui/jquery-ui.min.js"></script>

<!--<script >



</body>

</html>
