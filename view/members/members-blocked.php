<?php
include __DIR__ . "/../includes/auth.php";
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> اعضای اپلیکیشن </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- v4.0.0 -->
    <link rel="stylesheet" href="/view/dist/bootstrap/css/bootstrap.min.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/view/dist/img/favicon-16x16.png">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Theme style -->
    <link rel="stylesheet" href="/view/dist/css/style.css">
    <link rel="stylesheet" href="/view/dist/css/custom-style.css">
    <link rel="stylesheet" href="/view/dist/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/view/dist/css/et-line-font/et-line-font.css">
    <link rel="stylesheet" href="/view/dist/css/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="/view/dist/css/simple-lineicon/simple-line-icons.css">
    <link rel="stylesheet" href="/view/dist/css/rtl.min.css">

</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">

    <?php include __DIR__ . "/../includes/header.php"; ?>

    <?php include __DIR__ . "/../includes/aside.php"; ?>

    <div class="content-wrapper">

        <div class="content-header sty-one">
            <h1> پیکو پول </h1>
            <ol class="breadcrumb">
                <li><a href="#">صفحه نخست</a></li>
                <li><i class="fa fa-angle-left"></i>اعضای اپلیکیشن</li>
                <li><i class="fa fa-angle-left"></i>بلاک شده ها</li>
            </ol>
        </div>
        <div class="content">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-black inline">بلاک شده ها</h4>
                    <br><br>
                    <div class="table-responsive">
                        <table id="example1" class="table table-hover dataTable no-footer">

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="dataTables_length" id="example1_length"><label>نمایش <select
                                                    name="example1_length" aria-controls="example1"
                                                    class="form-control input-sm">
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="50">50</option>
                                            </select> داده در هر صفحه</label></div>
                                </div>
                                <div class="col-sm-6">
                                    <div id="example1_filter" class="dataTables_filter"><label>جستجو: <input
                                                    type="search" class="form-control input-sm" placeholder=""
                                                    aria-controls="example1"></label></div>
                                </div>
                            </div>
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">نام</th>
                                <th scope="col">شماره موبایل</th>
                                <th scope="col">تاریخ عضویت<br>نسخه اپ</th>
                                <th scope="col">سکه فعلی</th>
                                <th scope="col">پول فعلی<br>پول کلی</th>
                                <th scope="col">افراد معرفی شده</th>
                                <th scope="col">
                                    <span class="badge badge-success">دخل</span>/<span
                                            class="badge badge-danger">خرج</span>
                                </th>
                                <th scope="col">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>

    <?php include __DIR__ . "/../includes/footer.php"; ?>
</div>


<script src="/view/dist/js/jquery.min.js"></script>
<script src="/view/dist/bootstrap/js/bootstrap.min.js"></script>



<script src="/view/dist/js/adminkit.js"></script>
<script src="/view/dist/plugins/functions/dashboard1.js"></script>

<script src="/view/dist/plugins/functions/jquery.peity.init.js"></script>
</body>

</html>



