<?php
include __DIR__ . "/../includes/auth.php";
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> درخواست های واریز </title>
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
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
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
                <li><i class="fa fa-angle-left"></i> مالی</li>
                <li><i class="fa fa-angle-left"></i> درخواست های واریز</li>
            </ol>
        </div>
        <div class="content">
            <div class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="text-black m-b-1">تمامی درخواست های واریز <span  class="badge badge-primary"></span></h4>
                                <br><br>
                                <div class="table-responsive mt-1">
                                    <table class="table table table-hover dataTable no-footer">
                                        <thead>
                                        <tr>
                                            <th scope="col" width="10px">#</th>
                                            <th scope="col" width="10px">نام<br>شماره کارت</th>
                                            <th scope="col" width="10px">مبلغ</th>
                                            <th scope="col" width="10px">تاریخ</th>
                                            <th scope="col" width="10px">وضعیت</th>
                                            <th scope="col" width="10px">نادیده گرفتن</th>
                                            <th scope="col" width="10px">کد رهگیری</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
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
</div>
<!-- /.content -->

<?php include __DIR__ . "/../includes/footer.php"; ?>

</div>

<div class="modal fade" id="loadModalPay" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <h5 class="text-black">تغییر وضعیت پرداخت</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" dir="ltr">
            <form >
            
                    <div class="form-group">
                        <label for="trackingCode_Name" class="col-form-label text-black"> :کد رهگیری را وارد کنید </label>
                        <input type="text" style="text-align:right" name="trackingCode"  id="trackingCode" class="form-control">
                    </div>
                    <div class="col-xs-8">
                                <div class="checkbox">
                                <label><input type="checkbox" checked >  پیام  </label>
                                </div>
                    </div>
                    <br>
                    <input  id="payment_Id"  hidden>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="dis_payment">پرداخت  نشده</button>
                <button type="button" class="btn btn-success" id="payment">پرداخت شده</button>
            </div>
            </div>
        </div>
    </div>
</div>




<script src="/view/dist/js/jquery.min.js"></script>
<script src="/view/dist/bootstrap/js/bootstrap.min.js"></script>
<script src="/view/dist/bootstrap/js/bootstrap2-toggle.min.js"></script>
<script src="/view/dist/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="/view/dist/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>
<script>
    var PayOutTable;
    $(function () {
        PayOutTable = $('table').DataTable({
            "bProcessing": true,
            "serverSide": true,
            "ajax": {
                url: `/webAPI/pay-out`,
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


    function loadModalPay(btn, id, isPaid,trackingCode){
        let modal = $('#loadModalPay')
        $(modal).find('#payment_Id').val(id)
        $(modal).find('#trackingCode').val(trackingCode)
        $(modal).modal('show')
      }


      
      
    function updateIgnore(btn, id, idIgnored){
          if(idIgnored==1){
            idIgnored=0;
          }else{
            idIgnored=1;
          }

          let url = '/webAPI/pay-out/updateIgnore';
        $.ajax({
            type: "POST",
            url: url,
            data: {
                id: id,
                idIgnored: idIgnored
            },
            headers: {
                "Authorization": "Basic ZWhzYW46ZWhzYW4"
            },
            success: function (res) {
                console.log(res)
                if (res.success == true) {
                    PayOutTable.ajax.reload(null, false);
                }
            }
        });
        
    }



    $('#payment').click(function (e) {
        e.preventDefault();
        let url = '/webAPI/pay/payment';
        $.ajax({
            type: "POST",
            url: url,
            data: {
                    id        : $('#payment_Id').val(),
                    isPaid      : 1,
                    trackingCode      : $('#trackingCode').val(),
            },
            headers: {
                "Authorization": "Basic ZWhzYW46ZWhzYW4"
            },
            success: function (res) {
                if (res.success == true) {
                    PayOutTable.ajax.reload(null, false);
                    $('#loadModalPay').modal('hide');
                    alertify.set('notifier', 'position', 'top-center');
                    alertify.success('اطلاعات با موفقیت بروز شد');
                }
            }
        });
    });


    $('#dis_payment').click(function (e) {
        e.preventDefault();
        let url = '/webAPI/pay/payment';
        $.ajax({
            type: "POST",
            url: url,
            data: {
                    id        : $('#payment_Id').val(),
                    isPaid      : 0,
                    trackingCode      : $('#trackingCode').val(),
            },
            headers: {
                "Authorization": "Basic ZWhzYW46ZWhzYW4"
            },
            success: function (res) {
                if (res.success == true) {
                    PayOutTable.ajax.reload(null, false);
                    $('#loadModalPay').modal('hide')
                    alertify.set('notifier', 'position', 'top-center');
                    alertify.success('اطلاعات با موفقیت بروز شد');
                }
            }
        });
    });



    function copyToClipboard(el) {
      var $temp = $("<textarea>");
      $("body").append($temp);
      $temp.val( $(el).data('val') ).select();
      document.execCommand("copy");
      $temp.remove();
      alertify.set('notifier', 'position', 'top-center');
      alertify.success('کپی شد!');
    }


</script>

<script src="/view/dist/js/adminkit.js"></script>
<script src="/view/dist/plugins/functions/dashboard1.js"></script>

<script src="/view/dist/plugins/functions/jquery.peity.init.js"></script>
</body>

</html>