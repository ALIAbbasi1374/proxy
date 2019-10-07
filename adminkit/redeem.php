<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>کدهای هدیه</title>
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

<!-- php5 Shim and Respond.js IE8 support of php5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/php5shiv/3.7.3/php5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

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
        <li class="treeview"> <a href="#"> <span>Dashboard</span> <i class="icon-home"></i> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="index.php"><i class="fa fa-angle-left"></i> Modern</a></li>
            <li><a href="index-crm.php"><i class="fa fa-angle-left"></i> CRM</a></li>
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
        <li class="active treeview"> <a href="#"> <span>UI Elements</span> <i class="icon-frame"></i> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
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
            <li class="active"><a href="ui-list-media.php"><i class="fa fa-angle-left"></i> List Media</a></li>
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
      <h1>List Media</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i> List Media</li>
      </ol>
    </div>

    <!-- Main content -->
    <div class="content">
    <div class="card">
          <div class="card-body">
          <button onclick="loadModal('new','','',0,0,0,0)" class="btn btn-success fl-l" id="new-off-code">افزودن</button>
          <div class="table-responsive">
            <table id="example1" class="table table-hover table-bordered">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">کد</th>
                  <th scope="col">نوع</th>
                  <th scope="col">مقدار</th>
                  <th scope="col">وضعیت</th>
                  <th scope="col">محدودیت کاربر</th>
                  <th scope="col">تعداد استفاده شده</th>
                  <th scope="col">محدودیت زمان</th>
                  <th scope="col">تاریخ</th>
                  <th scope="col">ویرایش</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
          <!-- <button class="btn btn-success" id="saveBtn">ذخیره</button> -->
        </div>
        </div>
      <!-- Main row -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">Version 1.0</div>
    Copyright © 2018 Yourdomian. All rights reserved.</footer>
</div>
<!-- ./wrapper -->

<div class="modal fade" id="addredeem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">کد هدیه</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" dir="ltr">
              <form>
                <div class="form-group">
                  <label for="redeem_code" class="col-form-label">کد</label>
                  <input type="text" class="form-control" id="redeem_code" maxlength="6">
                </div>
                <div class="form-group">
                  <label for="percent" class="col-form-label">نوع</label>
                  <select class="form-control" id="redeem_type">
                  <option value="life" selected>جون</option>
                    <option value="ticket" selected>بلیط</option>
                    <option value="golden" selected>طلایی</option>
                  </select>
                </div>
          <div class="form-group">
                <div class="form-group">
                  <label for="action_sub" class="col-form-label">مقدار</label>
                  <input type="number" class="form-control" id="action_sub" value="0">
                </div>
                <div class="form-group">
                  <label for="user_limit" class="col-form-label">محدودیت کاربر (0 به معنای نامحدود)</label>
                  <input type="number" class="form-control" id="user_limit" value="0">
                </div>
                <div class="form-group">
                  <label for="day_limit" class="col-form-label">محدودیت روز (0 به معنای نامحدود)</label>
                  <input type="number" class="form-control" id="day_limit" value="0">
                </div>
                <div class="form-group">
                  <input type="checkbox" data-width="100" data-height="40" id="active" data-toggle="toggle" data-on="فعال" data-off="غیر فعال" data-onstyle="success" data-offstyle="danger" checked>
                </div>
                <input id="redeem_Id" value="new" hidden>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-dismiss="modal">انصراف</button>
              <button type="button" class="btn btn-success" id="add_redeem_btn">ذخیره</button>
            </div>
          </div>
        </div>
      </div>

<!-- jQuery 3 -->
<script src="dist/js/jquery.min.js"></script>

<!-- v4.0.0-alpha.6 -->
<script src="dist/bootstrap/js/bootstrap.min.js"></script>


<script >

   $.ajax({
        type: "GET",
        url: "https://panel.qday-app.com/panel/redeemCodesList",

        headers: {
            "Authorization": "Basic ZWhzYW46ZWhzYW4"
        },
        success: function (response) {
            $.each(response.data, function (i, e) {
                var q = `
                   <tr>
                    <th>${e.id}</th>
                    <td><pre>${e.code}</pre></td>
                    <td><pre>${e.action}</pre></td>
                    <td><pre>${e.action_sub}</pre></td>
                    <td>
                      <div class="toggle btn  off btn-sm" data-toggle="toggle" style="width: 82.5px; height: 32.6px;"><input class="toggleActive"  type="checkbox" data-toggle="toggle" data-on="فعال" data-off="غیرفعال" data-onstyle="success" data-offstyle="danger" data-size="small"></div>
                    </td>
                    <td><code>${e.user_limit}</code></td>
                    <td><code>${e.action_sub}</code></td>
                    <td><pre>${e.time_limit}</pre></td>
                    <td><pre>${e.timestamp}</pre></td>
                    <td><button onclick="loadModal(${e.id},'${e.code}','${e.action}', ${e.action_sub}, ${e.user_limit},${e.time_limit}, ${e.active})" class="btn btn-sm btn-primary edit-loader" ><i class="fa fa-pencil"></i></button></td>
                   </tr>
          `;
                $('#example1 tbody').append(q);
            });
        }

    });


    function loadModal(id, code, action, action_sub,user_limit,time_limit, active){
    let modal = $('#addredeem')
    $(modal).find('#redeem_Id').val(id)
    $(modal).find('#redeem_code').val(code)
    $(modal).find('#redeem_type').val(action)
    $(modal).find('#action_sub').val(action_sub)
    $(modal).find('#user_limit').val(user_limit)
    $(modal).find('#day_limit').val(time_limit)
    $(modal).find('#active').val(active)
    $(modal).modal('show')

    }
   

   
  $('#add_redeem_btn').click(function (e) { 
    e.preventDefault();
    let url = 'https://panel.qday-app.com/panel/';
    if($('#redeem_Id').val()=='new'){
      url += 'redeemCodesAdd';
    }else{
      url += 'redeemCodesEdit';
    }
    $.ajax({
        type: "POST",
        url: url,
        contentType: "application/json; charset=utf-8",
        data: JSON.stringify({
          code: $('.modal #redeem_code').val(),
          action:$('.modal #redeem_type').val(),
          action_sub: $('.modal #action_sub').val(),
          user_limit:$('.modal #user_limit').val(),
          active:$('.modal #active').val()
        }),
        headers: {
        "Authorization": "Basic ZWhzYW46ZWhzYW4"
      },
        success: function (response) {
           location.reload(true);
        }
      });
  
  }); 


</script>

<!-- template -->
<script src="dist/js/adminkit.js"></script>
</body>

</html>
