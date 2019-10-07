<?php require_once "includes/connect.php"
?>



<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> صفحه نخست </title>
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
    
</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">

    <?php include "includes/header.php"; ?>
    <!-- Left side column. contains the logo and sidebar -->
    <?php include "includes/aside.php"; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header sty-one">
            <h1>مدرن</h1>
            <ol class="breadcrumb">
                <li><a href="#">صفحه نخست</a></li>
                <li><i class="fa fa-angle-left"></i>مدرن</li>
            </ol>
        </div>

        <!-- Main content -->
        <div class="content">
                  <div class="row mb-2">
            <div class="col-lg-3">
              <div>
                <div class="box box-widget widget-user-2">
                  <div class="widget-user-header bg-red">
                    <div class="widget-user-image"> <img src="dist/img/android-chrome-75x75.png" alt="User Avatar"> </div>
                    <h3 class="widget-user-username">آمار</h3>
                    <h5 class="widget-user-desc">اپلیکیشن</h5>
                  </div>
                  <div class="box-footer no-padding">
                    <ul class="nav nav-stacked">
                      <li><a>اعضا <span class="pull-left font-size badge bg-blue ajload" data-ajname="app_members">73</span></a></li>
                      <li><a>ویزیت امروز <span class="pull-left font-size badge bg-blue ajload" data-ajname="app_visits">21</span></a></li>
                      <li><a>ویزیت (ورژن جدید)  <span class="pull-left font-size badge bg-blue ajload" data-ajname="app_visitsV3">0</span></a></li>
                      <li><a>ویزیت یکتا امروز <span class="pull-left font-size badge bg-blue ajload" data-ajname="app_distinctMembers">13</span></a></li>
                      <li><a>ویزیت یکتا امروز(ورژن جدید)  <span class="pull-left font-size badge bg-blue ajload" data-ajname="app_distinctMembersV3">0</span></a></li>
                      <li><a>آنلاین یک ساعت <span class="pull-left font-size badge bg-blue ajload" data-ajname="app_onlineCount">4</span></a></li>
                      <li><a>مجموع نصب <span class="pull-left font-size badge bg-blue ajload" data-ajname="app_totalInstall">143</span></a></li>
                      <li><a>سوالات <span class="pull-left font-size badge bg-blue ajload" data-ajname="app_questions">20٫843</span></a></li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-lg-3">
              <div>
                <div class="box box-widget widget-user-2">
                  <div class="widget-user-header bg-green">
                    <div class="widget-user-image"> <img class="img-circle" src="dist/img/index_top_stats_income.png" alt="User Avatar"> </div>
                    <h3 class="widget-user-username">درآمد/هزینه</h3>
                    <h5 class="widget-user-desc">امروز</h5>
                  </div>
                  <div class="box-footer no-padding">
                    <ul class="nav nav-stacked">
                      <li><a>فروش سکه <span class="pull-left font-size badge bg-blue ajload" data-ajname="today_income_coin">0</span></a></li>
                      <li><a>فروش الماس <span class="pull-left font-size badge bg-blue ajload" data-ajname="today_income_jem">0</span></a></li>
                      <li><a>تمرین سکه‌دار <span class="pull-left font-size badge bg-blue ajload" data-ajname="today_income_tStar">0</span></a></li>
                      <li><a>نمایش ویدئو <span class="pull-left font-size badge bg-blue ajload" data-ajname="today_videos_all">490</span></a></li>
                      <li><a>خرید شارژ <span class="pull-left font-size badge bg-blue ajload" data-ajname="today_charge"><i class="fa fa-spinner fa-spin"></i></span></a></li>

                      <li><a>فروش حدس تصویر <span class="pull-left font-size badge bg-blue ajload" data-ajname="today_income_gamePic_S"><i class="fa fa-spinner fa-spin"></i></span></a></li>
                      <li><a>ویدیو حدس تصویر <span class="pull-left font-size badge bg-blue ajload" data-ajname="today_income_gamePic_V"><i class="fa fa-spinner fa-spin"></i></span></a></li>

                      <li><a>هزینه حدس تصویر <span class="pull-left font-size badge bg-red ajload" data-ajname="today_oucome_gamePic"><i class="fa fa-spinner fa-spin"></i></span></a></li>
                      <li><a>درآمد کل <span class="pull-left font-size badge bg-green ajload" data-ajname="today_income"><i class="fa fa-spinner fa-spin"></i></span></a></li>
                      <li><a>هزینه کل <span class="pull-left font-size badge bg-red ajload" data-ajname="today_oucome"><i class="fa fa-spinner fa-spin"></i></span></a></li>
                      <li><a>خالص <span class="pull-left font-size badge bg-yellow ajload ltr" data-ajname="today_total"><i class="fa fa-spinner fa-spin"></i></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-lg-3">
              <div>
                <div class="box box-widget widget-user-2">
                  <div class="widget-user-header bg-green">
                    <div class="widget-user-image"> <img class="img-circle" src="dist/img/index_top_stats_incomeAll.png" alt="User Avatar"> </div>
                    <h3 class="widget-user-username">درآمد/هزینه</h3>
                    <h5 class="widget-user-desc">کل</h5>
                  </div>
                  <div class="box-footer no-padding">
                    <ul class="nav nav-stacked">
                      <li><a>فروش سکه <span class="pull-left font-size badge bg-blue ajload" data-ajname="total_income_coin"><i class="fa fa-spinner fa-spin"></i></span></a></li>
                      <li><a>فروش الماس <span class="pull-left font-size badge bg-blue ajload" data-ajname="total_income_jem"><i class="fa fa-spinner fa-spin"></i></span></a></li>
                      <li><a>تمرین سکه‌دار <span class="pull-left font-size badge bg-blue ajload" data-ajname="total_income_tStar"><i class="fa fa-spinner fa-spin"></i></span></a></li>
                      <li><a>نمایش ویدئو <span class="pull-left font-size badge bg-blue ajload" data-ajname="total_videos_all"><i class="fa fa-spinner fa-spin"></i></span></a></li>
                      <li><a>خرید شارژ <span class="pull-left font-size badge bg-blue ajload" data-ajname="total_charge"><i class="fa fa-spinner fa-spin"></i></span></a></li>
                      <li><a>فروش حدس تصویر <span class="pull-left font-size badge bg-blue ajload" data-ajname="total_income_gamePic_S"><i class="fa fa-spinner fa-spin"></i></span></a></li>
                      <li><a>ویدیو حدس تصویر <span class="pull-left font-size badge bg-blue ajload" data-ajname="total_income_gamePic_V"><i class="fa fa-spinner fa-spin"></i></span></a></li>
                      <li><a>هزینه حدس تصویر <span class="pull-left font-size badge bg-red ajload" data-ajname="total_oucome_gamePic"><i class="fa fa-spinner fa-spin"></i></span></a></li>
                      <li><a>درآمد کل <span class="pull-left font-size badge bg-green ajload" data-ajname="total_income"><i class="fa fa-spinner fa-spin"></i></span></a></li>
                      <li><a>هزینه کل <span class="pull-left font-size badge bg-red ajload" data-ajname="total_oucome"><i class="fa fa-spinner fa-spin"></i></span></a></li>
                      <li><a>خالص <span class="pull-left font-size badge bg-yellow ajload ltr" data-ajname="total_total"><i class="fa fa-spinner fa-spin"></i></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-lg-3">
              <div>
                <div class="box box-widget widget-user-2">
                  <div class="widget-user-header bg-blue">
                    <div class="widget-user-image"> <img class="img-circle" src="dist/img/index_top_stats_video.png" alt="User Avatar"> </div>
                    <h3 class="widget-user-username">تبلیغات</h3>
                    <h5 class="widget-user-desc">امروز</h5>
                  </div>
                  <div class="box-footer no-padding">
                    <ul class="nav nav-stacked">
                      <li><a>تپسل <span class="pull-left font-size badge bg-blue ajload" data-ajname="video_tapsell"><i class="fa fa-spinner fa-spin"></i></span></a></li>
                      <li><a>سوال اول <span class="pull-left font-size badge bg-blue ajload" data-ajname="video_firstQ"><i class="fa fa-spinner fa-spin"></i></span></a></li>
                      <li><a>صفحه اصلی <span class="pull-left font-size badge bg-blue ajload" data-ajname="video_MainPage"><i class="fa fa-spinner fa-spin"></i></span></a></li>
                      <li><a>دیالوگ <span class="pull-left font-size badge bg-blue ajload" data-ajname="video_Dialog"><i class="fa fa-spinner fa-spin"></i></span></a></li>
                      <li><a>چالش روزانه <span class="pull-left font-size badge bg-blue ajload" data-ajname="video_dailyCh"><i class="fa fa-spinner fa-spin"></i></span></a></li>
                      <li><a>حدس تصویر <span class="pull-left font-size badge bg-blue ajload" data-ajname="video_game_pic"><i class="fa fa-spinner fa-spin"></i></span></a></li>
                      <li><a>گردونه <span class="pull-left font-size badge bg-blue ajload" data-ajname="video_Roll"><i class="fa fa-spinner fa-spin"></i></span></a></li>
                      <li><a>نوتیفیکیشن <span class="pull-left font-size badge bg-blue ajload" data-ajname="video_Notif"><i class="fa fa-spinner fa-spin"></i></span></a></li>
                      <li><a>اطلاعیه <span class="pull-left font-size badge bg-blue ajload" data-ajname="video_Inbox"><i class="fa fa-spinner fa-spin"></i></span></a></li>
                      <li><a>کل امروز <span class="pull-left font-size badge bg-green ajload" data-ajname="video_today"><i class="fa fa-spinner fa-spin"></i></span></a></li>
                      <li><a>کل <span class="pull-left font-size badge bg-green ajload" data-ajname="video_total"><i class="fa fa-spinner fa-spin"></i></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-sm-6 col-xs-12 m-b-3">
              <div class="card">
                <div class="card-body box-rounded box-gradient"> <span class="info-box-icon bg-transparent"><i class="icon-star text-white"></i></span>
                  <div class="info-box-content">
                    <h6 class="info-box-text text-white">تمرین سکه‌دار</h6>
                    <h1 class="text-white ajload" data-ajname="secondRow_tStar"><i class="fa fa-spinner fa-spin"></i></h1>
                    <span class="progress-description text-white ajload" data-ajname="secondRow_tStarDistinct"><i class="fa fa-spinner fa-spin"></i></span></div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12 m-b-3">
              <div class="card">
                <div class="card-body box-rounded box-gradient-4"> <span class="info-box-icon bg-transparent"><i class="ti-face-smile text-white"></i></span>
                  <div class="info-box-content">
                    <h6 class="info-box-text text-white">سوالات کاربران</h6>
                    <h1 class="text-white ajload" data-ajname="secondRow_userQAccepted"><i class="fa fa-spinner fa-spin"></i></h1>
                    <span class="progress-description text-white ajload" data-ajname="secondRow_userQPending"><i class="fa fa-spinner fa-spin"></i></span>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12 m-b-3">
              <div class="card">
                <div class="card-body box-rounded box-gradient-2"> <span class="info-box-icon bg-transparent"><i class="ti-cup text-white"></i></span>
                  <div class="info-box-content">
                    <h6 class="info-box-text text-white">چالش روزانه</h6>
                    <h1 class="text-white ajload" data-ajname="secondRow_currentDaily"><i class="fa fa-spinner fa-spin"></i></h1>
                    <span class="progress-description text-white ajload" data-ajname="secondRow_currentMarathon"><i class="fa fa-spinner fa-spin"></i></span></div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12 m-b-3">
              <div class="card">
                <div class="card-body box-rounded box-gradient-3"> <span class="info-box-icon bg-transparent"><i class="ti-money text-white"></i></span>
                  <div class="info-box-content">
                    <h6 class="info-box-text text-white">با کد معرف</h6>
                    <h1 class="text-white ajload" data-ajname="secondRow_refered"><i class="fa fa-spinner fa-spin"></i></h1>
                    <div class="progress bg-lightblue mb-3">
                      <div class="progress-bar bg-white ajload" data-ajname="secondRow_refered_percent" role="progressbar" style="height: 6px;" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="row ajHide">
            <div class="col-lg-12">
              <div class="info-box">
                <div class="col-12">
                  <div class="d-flex flex-wrap">
                    <div>
                      <h5>نمودار ویزیت غیر یکتا 15 روز اخیر</h5>
                    </div>
                  </div>
                </div>
                <div>
                  <canvas id="line-chart-appVisitAll" class="ajload" data-ajname="last_15_days_spe"></canvas>
                </div>
              </div>
            </div>
          </div>


          <div class="row ajHide">
            <div class="col-lg-12">
              <div class="info-box">
                <div class="col-12">
                  <div class="d-flex flex-wrap">
                    <div>
                      <h5>نمودار نصب </h5>
                    </div>
                  </div>
                </div>
                <div>
                  <canvas id="line-chart-appInstall" class="ajload" data-ajname="last_15_days_fin"></canvas>
                </div>
              </div>
            </div>
          </div>

         
          

          <div class="row ajHide" data-ajhide="last_15_days_install">
            <div class="col-lg-12">
              <div class="info-box">
                <div class="col-12">
                  <div class="d-flex flex-wrap">
                    <div>
                      <h5>آمار ثبت نام و ثبت نام با کد معرف 15 روز اخیر </h5>
                    </div>
                  </div>
                </div>
                <div>
                  <canvas id="line-chart" class="ajload" data-ajname="last_15_days_install"></canvas>
                </div>
              </div>
            </div>
          </div>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include "includes/footer.php" ?>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="dist/js/jquery.min.js"></script>

<!-- v4.0.0-alpha.6 -->
<script src="dist/bootstrap/js/bootstrap.min.js"></script>

<!-- template -->
<script src="dist/js/adminkit.js"></script>



<script src="dist/plugins/chartjs/chart.min.js"></script>

<script>

  var date = [];
  var value = [];

$.each(['appInstall','appRegisterRef','appRegister','appVisitAll','appVisitUniq'],function(i,e) {
  console.log(e)
});




$.ajax({
		type: "POST",
		url: `https://panel.qday-app.com/charts/appVisitAll`,
		headers: {
			"Authorization": "Basic ZWhzYW46ZWhzYW4"
		},
		success: function (response) {
			$.each(response.data, function (i, e) { 
				date.push( e.date );
				value.push( e.val );
      });
      
      var ctx = document.getElementById('line-chart-appVisitAll').getContext('2d');
			var chart = new Chart(ctx, {
				type: 'line',
				data: {
					labels:date,
					datasets: [{
						label: "نصب  ",
						backgroundColor: 'coral',
						borderColor: 'red',
						data:value,
						fill:true,
					},
				]
			},
			options: {
				responsive: true
			}
		});	

	}
}); 

	$.ajax({
		type: "POST",
		url: `https://panel.qday-app.com/charts/appInstall`,
		headers: {
			"Authorization": "Basic ZWhzYW46ZWhzYW4"
		},
		success: function (response) {
			$.each(response.data, function (i, e) { 
				date.push( e.date );
				value.push( e.val );
      });
      
      var ctx = document.getElementById('line-chart-appInstall').getContext('2d');
			var chart = new Chart(ctx, {
				type: 'line',
				data: {
					labels:date,
					datasets: [{
						label: "نصب  ",
						backgroundColor: 'darkghost',
						borderColor: 'blue',
						data:value,
						fill: false,
					},
				]
			},
			options: {
				responsive: true
			}
		});	

	}
}); 


$.ajax({
		type: "POST",
		url: `https://panel.qday-app.com/charts/appRegister`,
		headers: {
			"Authorization": "Basic ZWhzYW46ZWhzYW4"
		},
		success: function (response) {
			$.each(response.data, function (i, e) { 
				date.push( e.date );
				value.push( e.val );
      });
      
      var ctx = document.getElementById('line-chart').getContext('2d');
			var chart = new Chart(ctx, {
				type: 'line',
				data: {
					labels:date,
					datasets: [{
						label: "ثبت نام ",
						backgroundColor: 'darkghost',
						borderColor: 'yellow',
						data:value,
						fill: false,
          },
          {
						label: " ثبت نام با کد معرف ",
						backgroundColor: 'darkghost',
						borderColor: 'green',
						data:['33','234','248','217','202','253','146','69','217','171','150','149','168','103','77'],
						fill: false,
					}
				]
			},
			options: {
				responsive: true
			}
		});	

	}
});




</script>



<!-- Morris JavaScript -->
<script src="dist/plugins/raphael/raphael-min.js"></script>
<script src="dist/plugins/morris/morris.js"></script>
<script src="dist/plugins/functions/dashboard1.js"></script>

<!-- Chart Peity JavaScript -->
<script src="dist/plugins/peity/jquery.peity.min.js"></script>
<script src="dist/plugins/functions/jquery.peity.init.js"></script>
</body>

</html>
