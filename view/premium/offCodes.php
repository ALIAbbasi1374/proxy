<?php
include __DIR__ . "/../includes/auth.php";
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> کدهای تخفیف </title>
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
                <li><i class="fa fa-angle-left"></i> کدهای تخفیف </li>
            </ol>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                          <button class="btn btn-success fl-l" onclick="loadModal('new', '', 0, 0, 0, 1)" id="new-off-code">
                             افزودن
                          </button>
                            <div class="table-responsive mt-1">
                                <table id="example1" class="table table-hover table-bordered dataTable no-footer">
                                    <thead>
                                    <tr>
                                        <th scope="col" width="10px">#</th>
                                        <th scope="col" width="10px">کد</th>
                                        <th scope="col" width="10px">درصد</th>
                                        <th scope="col" width="10px">وضعیت</th>
                                        <th scope="col" width="10px">محدودیت کاربر</th>
                                        <th scope="col" width="10px">تعداد استفاده شده</th>
                                        <th scope="col" width="10px">محدودیت زمان</th>
                                        <th scope="col" width="10px">ویرایش</th>
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

<!-- /.content -->


<?php include __DIR__ . "/../includes/footer.php"; ?>

</div>

<div class="modal fade" id="addOffCode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" dir="ltr">
                <form >
                    <div class="form-group">
                        <label for="offCode_Name" class="col-form-label">کد</label>
                        <input type="text" name="name" style="direction: rtl;"   id="offCode_Name" class="form-control"  maxlength="4">
                    </div>
                    <div class="form-group">
                        <label for="percent" class="col-form-label">درصد</label>
                        <input type="number" style="direction: rtl;" name="perc" class="form-control" id="percent">
                    </div>
                    <div class="form-group">
                        <label for="user_limit" class="col-form-label">محدودیت کاربر (0 به معنای نامحدود)</label>
                        <input type="number" style="direction: rtl;" name="user_limit" class="form-control" id="user_limit">
                    </div>
                    <div class="form-group">
                            <label for="time_limit" class="col-form-label">محدودیت روز (0 به معنای نامحدود)</label>
                            <input type="number" style="direction: rtl;"  name="time_limit" class="form-control" id="time_limit" value="0">
                    </div>
                    <div class="form-group" >
                        <input class="bootstraptoggle"  type="checkbox" data-width="100"  data-style="ios"  data-height="40" id="active_selector" data-toggle="toggle"
                         data-on="فعال" data-off="غیر فعال" data-onstyle="success" data-offstyle="danger" checked>
                    </div>
                    <input name="id" id="offCode_Id" value="new" hidden>
                </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">انصراف</button>
                        <button type="button" class="btn btn-success" id="add_offCode_btn">ذخیره</button>
                    </div>
            </div>
            
            
           
        </div>
    </div>
</div>



<script src="/view/dist/js/jquery.min.js"></script>
<script src="/view/dist/bootstrap/js/bootstrap2-toggle.min.js"></script>
<script src="/view/dist/bootstrap/js/bootstrap.min.js"></script>
<script src="/view/dist/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/view/dist/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>
<script>
    var offCodesTable;
    $(function () {
        offCodesTable = $('table').DataTable({
            "bProcessing": true,
            "serverSide": true,
            "ajax": {
                url: `/webAPI/offCodes`,
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

    
    $('table').on( 'draw.dt', function () {

        $('.bootstraptoggle').bootstrapToggle()

        $( '.bootstraptoggle' ).change(function() {

                $.ajax({
                type: "POST",
                url: "/webAPI/toggle/offCode",
                    data: {
                             id     : $(this).data('id'),
                            active    : $(this).is(':checked') == true ? 1: 0,
                    },
                    headers: {
                        "Authorization": "Basic ZWhzYW46ZWhzYW4"
                    },
                    success: function (res) {
                        if (res.success == true) {
                             offCodesTable.ajax.reload(null, false);
                             alertify.set('notifier', 'position', 'top-center');
                             alertify.success('اطلاعات با موفقیت بروز شد');
                        }
                    }
                });

        });

        
    } );
    

    function loadModal(id, name, perc, user_limit,time_limit, active) {
        let modal = $('#addOffCode')
        $(modal).find('#offCode_Id').val(id)
        $(modal).find('#offCode_Name').val(name)
        $(modal).find('#percent').val(perc)
        $(modal).find('#user_limit').val(user_limit)
        $(modal).find('#time_limit').val(time_limit)
        $(modal).find('#active_selector').bootstrapToggle( active ==1 ? 'on':'off')
        $(modal).modal('show')

    }
 

 
    $('#add_offCode_btn').click(function (e) {
        e.preventDefault();
        let url = '/webAPI/offCodesAdd';
        $.ajax({
            type: "POST",
            url: url,
            data: {
                    id        : $('#offCode_Id').val(),
                    name      : $('#offCode_Name').val(),
                    perc      : $('#percent').val(),
                    user_limit      : $('#user_limit').val(),
                    time_limit      : $('#time_limit').val(),
                    active      : $('#active_selector').is(':checked') == true ? 1: 0,
            },
            headers: {
                "Authorization": "Basic ZWhzYW46ZWhzYW4"
            },
            success: function (res) {
                if (res.success == true) {
                    offCodesTable.ajax.reload(null, false);
                    $('#addOffCode').modal('hide')
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