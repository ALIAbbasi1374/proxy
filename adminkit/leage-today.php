<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>لیگ های صفحه اصلی</title>
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

<!-- Chartist CSS -->
<link rel="stylesheet" href="dist/plugins/chartist-js/chartist.min.css">
<link rel="stylesheet" href="dist/plugins/chartist-js/chartist-plugin-tooltip.css">

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

  <!--
  <aside class="main-sidebar">
    <div class="sidebar">
      <div class="user-panel">
        <div class="image text-center"><img src="dist/img/img1.jpg" class="img-circle" alt="User Image"> </div>
        <div class="info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a> </div>
      </div>

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">PERSONAL</li>
        <li class="active treeview"> <a href="#"> <span>Dashboard</span> <i class="icon-home"></i> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="index.php"><i class="fa fa-angle-left"></i> Modern</a></li>
            <li class="active"><a href="index-crm.php"><i class="fa fa-angle-left"></i> CRM</a></li>
            <li><a href="index-analytics.php"><i class="fa fa-angle-left"></i> Analytics</a></li>
            <li><a href="index-ecommerce.php"><i class="fa fa-angle-left"></i> Ecommerce</a></li>
            <li><a href="index-medical.php"><i class="fa fa-angle-left"></i> Medical</a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#"> <i class="icon-grid"></i> <span>Apps</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="apps-calendar.php"><i class="fa fa-angle-left"></i> Calendar</a></li>
            <li><a href="apps-support-ticket.php"><i class="fa fa-angle-left"></i> Support Ticket</a></li>
            <li><a href="apps-contacts.php"><i class="fa fa-angle-left"></i> Contact / Employee</a></li>
            <li><a href="apps-contact-grid.php"><i class="fa fa-angle-left"></i> Contact  Grid</a></li>
            <li><a href="apps-contact-details.php"><i class="fa fa-angle-left"></i> Contact Detail</a></li>
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
      <h1>لیگ های صفحه اصلی</h1>
      <ol class="breadcrumb">
        <li><a href="#">خانه</a></li>
        <li><i class="fa fa-angle-left"></i>لیگ های صفحه اصلی</li>
      </ol>
    </div>

    <!-- Main content -->
    <div class="content">
      <div class="row">
      <table class="table table-hover">
       <thead>
          <tr>
            <th>#</th>
            <th>_cat</th>
            <th>prize</th>
            <th>won</th>
            <th>bot</th>
            <th>gameCount</th>
            <th>playerCount</th>
            <th>useLife</th>
          </tr>
      </thead>
      </table>
      
      </div>
      <!-- /.row -->

      <!-- /.row -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">Version 1.0</div>
    Copyright © 2018 Yourdomian. All rights reserved.</footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="dist/js/jquery.min.js"></script>
<script >

</script>

<!-- v4.0.0-alpha.6 -->
<script src="dist/bootstrap/js/bootstrap.min.js"></script>
<script src="dist/plugins/leage-today/leage-today.js"></script>

<!-- template -->
<script src="dist/js/adminkit.js"></script>

<!-- Chart Peity JavaScript -->
<script src="dist/plugins/peity/jquery.peity.min.js"></script>
<script src="dist/plugins/functions/jquery.peity.init.js"></script>

<!-- Chartist JavaScript -->
<script src="dist/plugins/chartist-js/chartist.min.js"></script>
<script src="dist/plugins/chartist-js/chartist-plugin-tooltip.js"></script>
<script src="dist/plugins/functions/chartist-init.js"></script>
</body>

</html>
