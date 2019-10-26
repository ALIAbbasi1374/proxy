<?php
include __DIR__ . "/../includes/auth.php";
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> تنظیمات </title>
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
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/bootstrap.min.css"/>

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
                <li><i class="fa fa-angle-left"></i> تنظیمات  </li>
                <li><i class="fa fa-angle-left"></i> تنظیمات مدیریتی  </li>
            </ol>
        </div>
        <div class="content">
            <div class="card">
                <div class="card-body">
                <h5 class="text-black">تنظیمات مدیریتی</h5>
                    <div class="row pt-4">
                    </div>
                    <button id="btnSubmit" class="btn btn-success">ثبت</button>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>

    <?php include __DIR__ . "/../includes/footer.php"; ?>

</div>


<script src="/view/dist/js/jquery.min.js"></script>
<script src="/view/dist/bootstrap/js/bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>

<script>
var ConstantTable;
ConstantTable = $.ajax({
        type: "GET",
        headers: {
            "Authorization": "Basic ZWhzYW46ZWhzYW4"
        },
        url: "/webAPI/settings/constant",
        success: function (res) {
            $.each(res.data, function (i, el) {
                let q = `
          <div class="col-lg-6">
          <fieldset class="form-group">
              <label class="pt-3 text-black" >${el.description}</label>
              <textarea class="form-control" data-name="${el.name}" rows="1">${el.value}</textarea>
            </fieldset>
          </div> `;
                $('.card-body .row').append(q);
            });
        }
    });

    function getDatas() {
        let data = [];
        $.each($('.card-body .row textarea'), function (i, el) {
            data.push({
                name: $(el).data('name'),
                value: $(el).val()
            });
        });
        return data;
    }

    $('#btnSubmit').click(function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "/webAPI/settings/EditConstant",
            data: getDatas(),
            headers: {
                "Authorization": "Basic ZWhzYW46ZWhzYW4"
            },
            success: function (res) {
                if (res.success == true) {
                    alertify.set('notifier', 'position', 'top-center');
                    alertify.success('اطلاعات با موفقیت بروز شد');
                    ConstantTable.reload(null, false);
                }
            }
        });
    });
</script>

<script src="/view/dist/js/adminkit.js"></script>
<script src="/view/dist/plugins/functions/dashboard1.js"></script>

<script src="/view/dist/plugins/functions/jquery.peity.init.js"></script>
</body>

</html>