<?php
include __DIR__ . "/../includes/auth.php";
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> کدهای هدیه </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- v4.0.0 -->
    <link rel="stylesheet" href="/view/dist/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/view/dist/bootstrap/css/bootstrap2-toggle.min.css">

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
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/themes/bootstrap.min.css"/>
    <style>
   .toggle.ios, .toggle-on.ios, .toggle-off.ios { border-radius: 20px; }
   .toggle.ios .toggle-handle { border-radius: 20px; }
</style>

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
                <li><i class="fa fa-angle-left"></i> جایزه ها</li>
                <li><i class="fa fa-angle-left"></i> کدهای هدیه </li>
            </ol>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-body">
                    <button onclick="loadModal('new','','',0,0,0,1)" class="btn btn-success fl-l" id="new-off-code">
                        افزودن
                    </button>
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
                                <th scope="col">ویرایش</th>
                            </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
                    </div>
                </div>
            </div>
            <!-- Main row -->
        </div>
    </div>
</div>
<!-- /.content -->


<?php include __DIR__ . "/../includes/footer.php"; ?>

</div>


<div class="modal fade" id="addredeem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
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
                        <label for="code" class="col-form-label">کد</label>
                        <input type="text" style="direction: rtl;" name="code" class="form-control" id="code" maxlength="6">
                    </div>
                    <div class="form-group">
                        <label for="percent" class="col-form-label">نوع</label>
                        <select class="form-control" style="direction: rtl;" name="type" id="type">
                             <option value="silver" selected>نقره‌ای</option>
                             <option value="golden" selected>طلایی</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="value" class="col-form-label">مقدار</label>
                            <input type="number" style="direction: rtl;" name="value" class="form-control" id="value" value="0">
                        </div>
                        <div class="form-group">
                            <label for="user_limit" class="col-form-label">محدودیت کاربر (0 به معنای نامحدود)</label>
                            <input type="number"  style="direction: rtl;" name="user_limit" class="form-control" id="user_limit" value="0">
                        </div>
                        <div class="form-group">
                            <label for="day_limit" class="col-form-label">محدودیت روز (0 به معنای نامحدود)</label>
                            <input type="number" style="direction: rtl;"  name="time_limit" class="form-control" id="time_limit" value="0">
                        </div>
                        <div class="form-group">
                            <input type="checkbox" data-width="100" data-style="ios" data-height="40" id="active_selector" data-toggle="toggle"
                                   data-on="فعال" data-off="غیر فعال" data-onstyle="success" data-offstyle="danger" checked>
                        </div>
                        <input id="redeem_Id" name="id" value="new" hidden>

                </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">انصراف</button>
                            <button type="button" class="btn btn-success" id="add_redeem_btn">ذخیره</button>
                        </div>
            </div>
           
        </div>
    </div>
</div>



<script src="/view/dist/js/jquery.min.js"></script>
<script src="/view/dist/bootstrap/js/bootstrap.min.js"></script>
<script src="/view/dist/bootstrap/js/bootstrap2-toggle.min.js"></script>
<script src="/view/dist/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/view/dist/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>
<script>
    var RedeemTable;
    $(function () {
        RedeemTable = $('table').DataTable({
            "bProcessing": true,
            "serverSide": true,
            "ajax": {
                url: `/webAPI/redeem`,
                type: 'POST'
            },
            'paging': true,
            'lengthChange': true,
            'lengthMenu': [10, 20, 50],
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



    function loadModal(id, code, type, value, user_limit, time_limit, active) {
        let modal = $('#addredeem')
        $(modal).find('#redeem_Id').val(id)
        $(modal).find('#code').val(code)
        $(modal).find('#type').val(type)
        $(modal).find('#value').val(value)
        $(modal).find('#user_limit').val(user_limit)
        $(modal).find('#time_limit').val(time_limit)
        $(modal).find('#active_selector').bootstrapToggle( active ==1 ? 'on':'off')
        $(modal).modal('show')

    }


    $('table').on( 'draw.dt', function () {
        $('.bootstraptoggle').bootstrapToggle()

        $( '.bootstraptoggle' ).change(function() {

                $.ajax({
                type: "POST",
                url: "/webAPI/toggle/redeem",
                    data: {
                            id     : $(this).data('id'),
                            active    : $(this).is(':checked') == true ? 1: 0,
                    },
                    headers: {
                        "Authorization": "Basic ZWhzYW46ZWhzYW4"
                    },
                    success: function (res) {
                        if (res.success == true) {
                            RedeemTable.ajax.reload(null, false);
                            alertify.set('notifier', 'position', 'top-center');
                            alertify.success('اطلاعات با موفقیت بروز شد');
                        }
                    }
                });

        });
    } );


    $('#add_redeem_btn').click(function (e) {
        e.preventDefault();
        let url = '/webAPI/redeemAdd';
        $.ajax({
            type: "POST",
            url: url,
            data: {
                    id        : $('#redeem_Id').val(),
                    code      : $('#code').val(),
                    type      : $('#type').val(),
                    value      : $('#value').val(),
                    user_limit      : $('#user_limit').val(),
                    time_limit      : $('#time_limit').val(),
                    active      : $('#active_selector').is(':checked') == true ? 1: 0,
            },
            headers: {
                "Authorization": "Basic ZWhzYW46ZWhzYW4"
            },
            success: function (res) {
                if (res.success == true) {
                    RedeemTable.ajax.reload(null, false);
                    $('#addredeem').modal('hide')
                    alertify.set('notifier', 'position', 'top-center');
                    alertify.success('اطلاعات با موفقیت بروز شد');
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