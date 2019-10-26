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
    <link rel="stylesheet" href="/view/dist/plugins/datatables/css/dataTables.bootstrap.min.css">

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
                <li><i class="fa fa-angle-left"></i> اعضای اپلیکیشن </li>
                <li><i class="fa fa-angle-left"></i> همه </li>
            </ol>
        </div>
        <div class="content">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-black inline">اعضا</h4>
                    <div class="table-responsive">
                        <table id="example1" class="table table-hover dataTable no-footer">
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
<script src="/view/dist/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/view/dist/plugins/datatables/dataTables.bootstrap.min.js"></script>

<script>
    var ajTable;
      $(function () {
        var ajTable = $('#example1').DataTable({
            "bProcessing": true,
            "serverSide": true,
            "ajax": {
                url: `/webAPI/members`,
                type: 'POST'
             },
            'paging': true,
            'lengthChange': true,
            'lengthMenu': [ 10,20,50 ],
            'searching': true,
            'ordering': true,
            "order": [],
            'info': true,
            'autoWidth': true,
            "language": {
                "lengthMenu": "نمایش _MENU_ داده در هر صفحه",
                "zeroRecords": "یافت نشد!",
                "info": "صفحه _PAGE_ از _PAGES_",
                "infoEmpty": "داده‌ای موجود نیست!",
                "search": "جستجو: ",
                "paginate": {
                    "first": "اول",
                    "last": "آخر",
                    "next": "بعدی",
                    "previous": "قبلی"
                },
                "infoFiltered": "(نتیجه جستجو در بین اطلاعات _MAX_ کاربر)"
            }
        });
      });
</script>



<script src="/view/dist/js/adminkit.js"></script>
<script src="/view/dist/plugins/functions/dashboard1.js"></script>
<script src="/view/dist/plugins/functions/jquery.peity.init.js"></script>
</body>

</html>



