<?php
$pay = new pay;
include __DIR__ . "/../includes/auth.php";

?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> <?= $userInfo['name'] ?> </title>
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
                <li><i class="fa fa-angle-left"></i> اعضای اپلیکیشن</li>
                <li><i class="fa fa-angle-left"></i> پروفایل</li>
            </ol>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card m-b-3">
                        <div class="card-body">
                            <div class="box-body">
                                <img class="profile-user-img img-responsive img-circle m-b-2"
                                     src="/view/dist/img/profile_default_2.png" alt="علی">
                                <h4 id="name" align="center"><b><?= $userInfo['name'] ?></b></h4>
                                <center>کد معرفی: <code><?= $userInfo['refCode'] ?></code></center>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                    <div class="card m-b-3">
                        <div class="card-body">
                            <div class="box-body">
                                <?php if (!empty($userInfo['_referedBy'])) : ?>
                                    <strong><i class="fa fa-user margin-r-5"></i> معرف</strong>
                                    <p class="text-muted" dir="ltr" align="left"><a class="btn btn-primary btn-sm"
                                                                                    href="/admin/members/<?= $userInfo['_referedBy'] ?>"
                                                                                    target="_blank"><?= $pay->getUser($userInfo['_referedBy']) ?></a>
                                    </p>
                                    <hr>
                                <?php endif; ?>
                                <strong><i class="fa fa-mobile margin-r-5"></i> ورژن</strong>
                                <p class="text-muted" dir="ltr" align="left"><span id="version"
                                                                                   class="badge badge-primary"><?= $userInfo['version'] ?></span>
                                </p>
                                <hr>
                                <strong><i class="fa fa-mobile margin-r-5"></i> موبایل</strong>
                                <p id="mobile" class="text-muted font-mono" dir="ltr"
                                   align="left"><?= $userInfo['mobile'] ?></p>
                                <p class="text-muted font-mono" dir="ltr" align="left"></p>
                                <hr>
                                <strong><i class="fa fa-credit-card margin-r-5"></i> شماره کارت</strong>
                                <p id="cardNum" class="text-muted font-mono" dir="ltr"
                                   align="left"><?= $userInfo['cardNum'] ?></p>

                                <p class="text-muted" dir="ltr" align="left"></p>
                                <hr>
                                <strong><i class="fa fa-calendar margin-r-5"></i> تاریخ عضویت</strong>
                                <p id="regDate" class="text-muted font-mono" dir="ltr"
                                   align="left"><?= $userInfo['regDate'] ?></p>
                                <hr>
                                <strong><i class="fa fa-circle-o margin-r-5"></i> سکه طلایی </strong>
                                <p id="goldenCount" class="text-muted font-mono" dir="ltr" align="left"><span
                                            class="badge badge-warning"><?= $golden ?></span></p>
                                <hr>
                                <strong><i class="fa fa-circle-o margin-r-5"></i> سکه نقره ای </strong>
                                <p id="gameWon" class="text-muted font-mono" dir="ltr" align="left"><span
                                            class="badge badge-secondary"><?= $silver ?></span></p>
                                <hr>
                                <strong><i class="fa fa-tv margin-r-5"></i> ویدئو</strong>
                                <p id="inVideo" class="text-muted font-mono" dir="ltr" align="left">0
                                </p>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">

                    <div class="card">
                        <div class="card-header" style="display: flex;">
                            <h5 class="text-black" align="right">تاریخچه</h5>
                            <div style="position: absolute; left:10px;">
                                <button class="btn btn-primary btn-sm toggle" style="display:inline;"><i
                                            class="fa fa-eye"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm" id="userHistoryTable">
                                    <thead>
                                    <tr>
                                        <th scope="col" width="10px">تاریخ</th>
                                        <th scope="col" style="width:100%">توضیحات</th>
                                    </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-3">
                        <div class="card-header" style="display: flex;">
                            <h5 id="statsBadgeH5" class="text-black" align="right">تاریخچه مسابقات</h5>
                            <div style="position: absolute; left:10px;">
                                <button class="btn btn-primary btn-sm toggle" style="display:inline;"><i
                                            class="fa fa-eye"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="gamesHistory" class="table dataTable">
                                    <thead>
                                    <tr>
                                        <th scope="col" width="10px">Session</th>
                                        <th scope="col" width="10px">مسابقه</th>
                                        <th scope="col" width="10px">جایزه دریافت شده</th>
                                        <th scope="col" width="10px">سوالات صحیح</th>
                                        <th scope="col" width="10px">راهنماها</th>
                                        <th scope="col" width="100px">تاریخ</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr></tr>
                                    <script>
                                        $('#statsBadgeH5').html(
                                            `${$('#statsBadgeH5').html()}
                          <span data-tippy-content="تمرین" class="badge T pfont">1</span>
                          <span data-tippy-content="برنز" class="badge B pfont">0</span>
                          <span data-tippy-content="نقره" class="badge S pfont">0</span>
                          <span data-tippy-content="طلا" class="badge G pfont">0</span>
                          <span data-tippy-content="الماس" class="badge D pfont">0</span>
                          <span data-tippy-content="پلکانی" class="badge D pfont">0</span>`
                                        );
                                    </script>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-3">
                        <div class="card-header" style="display: flex;">
                            <h5 class="text-black" align="right">تاریخچه سکه</h5>
                            <div style="position: absolute; left:10px;">
                                <button class="btn btn-success btn-sm toggle" onclick="loadModal('new','','')"
                                        id="modalCaller" style="display:inline;">
                                    افزودن سکه
                                </button>
                                <button class="btn btn-primary btn-sm toggle" style="display:inline;"><i
                                            class="fa fa-eye"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table dataTable" id="goldenHistory">
                                    <thead>
                                    <tr>
                                        <th scope="col" width="10px">مقدار</th>
                                        <th scope="col" width="10px">نوع</th>
                                        <th scope="col" width="10px">توضیحات</th>
                                        <th scope="col" width="100px">تاریخ</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
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
                                        <div class="col-sm-12">
                                            <table class="table dataTable no-footer" id="walletHistory" role="grid"
                                                   aria-describedby="DataTables_Table_2_info">
                                                <thead>
                                                <tr role="row">
                                                    <th scope="col" width="10px">Session</th>
                                                    <th scope="col" width="10px">مسابقه</th>
                                                    <th scope="col" width="10px">مبلغ</th>
                                                    <th scope="col" width="10px">توضیحات</th>
                                                    <th scope="col" width="100px">تاریخ</th>
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
                    </div>

                    <div class="card mt-3">
                        <div class="card-header" style="display: flex;">
                            <h5 class="text-black" align="right">درخواست‌های واریز</h5>
                            <div style="position: absolute; left:10px;">
                                <button class="btn btn-primary btn-sm toggle" style="display:inline;"><i
                                            class="fa fa-eye"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive mt-1">
                                <table class="table" id="payReqUser">
                                    <thead>
                                    <tr>
                                        <th scope="col" width="10px">#</th>
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
                                        <div class="col-sm-12">
                                            <table class="table dataTable no-footer" id="ReferedUsers" role="grid"
                                                   aria-describedby="DataTables_Table_4_info">
                                                <thead>
                                                <tr>
                                                    <th scope="col" width="10px">#</th>
                                                    <th scope="col" width="10px">نام</th>
                                                    <th scope="col" width="10px">ورژن</th>
                                                    <th scope="col" width="10px">تاریخ</th>
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

    <?php include __DIR__ . "/../includes/footer.php"; ?>

</div>


<div class="modal fade" id="addCoinModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">افزودن سکه</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="addCoinVal" class="col-form-label">مقدار سکه</label>
                        <input type="number" class="form-control" name="addCoinVal" id="addCoinVal">
                    </div>
                    <div class="form-group">
                        <label for="percent" class="col-form-label">نوع</label>
                        <select class="form-control" name="type" id="type">
                            <option value="silver" selected>نقره‌ای</option>
                            <option value="golden" selected>طلایی</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="addCoinDesc" class="col-form-label">توضیحات</label>
                        <input type="text" class="form-control" name="addCoinDesc" id="addCoinDesc">
                    </div>

                    <input name="id" id="addCoin_Id" value="new" hidden>
                </form>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">انصراف</button>
                    <button type="button" class="btn btn-success" id="addCoinSubmit">ذخیره</button>
                </div>
            </div>

        </div>
    </div>
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
                        <label for="trackingCode_Name" class="col-form-label text-black">کد رهگیری را وارد کنید :</label>
                        <input type="text" name="trackingCode"  id="trackingCode" class="form-control">
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
<script src="/view/dist/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/view/dist/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="/view/dist/bootstrap/js/bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>
<script>
    $('.col-lg-9 .card-body').hide();

    $('button.btn.btn-primary.btn-sm.toggle').click(function (e) {
        e.preventDefault();
        $(this).parent().parent().next().toggle();
    });


    function loadModal(id, value, type, origin) {
        let modal = $('#addCoinModal')
        $(modal).find('#addCoin_Id').val(id)
        $(modal).find('#addCoinVal').val(value)
        $(modal).find('#type').val(type)
        $(modal).find('#addCoinDesc').val(origin)
        $(modal).modal('show')

    }


    var gamesHistoryTable;
    $(function () {
        gamesHistoryTable = $('#gamesHistory').DataTable({
            "bProcessing": true,
            "serverSide": true,
            "ajax": {
                url: `/webAPI/profile/gamesHistory/<?= $userInfo['id'] ?>`,
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


    var payReqUserTable;
    $(function () {
        payReqUserTable = $('#payReqUser').DataTable({
            "bProcessing": true,
            "serverSide": true,
            "ajax": {
                url: `/webAPI/profile/pay-req-user/<?= $userInfo['id'] ?>`,
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


    var goldenHistoryTable;
    $(function () {
        goldenHistoryTable = $('#goldenHistory').DataTable({
            "bProcessing": true,
            "serverSide": true,
            "ajax": {
                url: `/webAPI/profile/goldenHistory/<?= $userInfo['id'] ?>`,
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


    var walletHistoryTable;
    $(function () {
        walletHistoryTable = $('#walletHistory').DataTable({
            "bProcessing": true,
            "serverSide": true,
            "ajax": {
                url: `/webAPI/profile/walletHistory/<?= $userInfo['id'] ?>`,
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


    var ReferedUsersTable;
    $(function () {
        ReferedUsersTable = $('#ReferedUsers').DataTable({
            "bProcessing": true,
            "serverSide": true,
            "ajax": {
                url: `/webAPI/profile/ReferedUsers/<?= $userInfo['id'] ?>`,
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

    
    
    $('#addCoinSubmit').click(function (e) {
        e.preventDefault();
        let url = '/webAPI/profile/goldenHistoryAdd';
        $.ajax({
            type: "POST",
            url: url,
            data: {
                userID: <?= $userInfo['id'] ?>,
                value: $('#addCoinVal').val(),
                type: $('#type').val(),
                origin: $('#addCoinDesc').val(),
            },
            headers: {
                "Authorization": "Basic ZWhzYW46ZWhzYW4"
            },
            success: function (res) {
                console.log(res)
                if (res.success == true) {
                    goldenHistoryTable.ajax.reload(null, false);
                    $('#addCoinModal').modal('hide')
                }
            }
        });

    });


    function loadSupport() {
        $.ajax({
            type: "POST",
            url: "/webAPI/profile/chat/supportMessages",
            data: {
                userID: <?= $userInfo['id'] ?>
            },
            headers: {
                "Authorization": "Basic ZWhzYW46ZWhzYW4"
            },
            success: function (response) {
                $('.direct-chat-messages').empty();

                $.each(response.list, function (i, e) {
                    if (e.answer == 0) {
                        var report = ``;
                        if (e.report == '1')
                            report = ' report';
                        var ap = `<div class="direct-chat-msg">
                            <div class="direct-chat-info clearfix">
                              <span class="direct-chat-name pull-left">کاربر</span>
                              <span class="pull-right badge badge-warning ml-2 report-support-message" data-id="<?= $userInfo['id'] ?>"><i class="fa fa-flag"></i></span>
                              <span class="direct-chat-timestamp pull-right">${e.timestamp}</span>
                            </div>
                              <img class="direct-chat-img" src="http://moneyq.ir/data/profiles/profile_boy_010.png" alt="user image">
                              <div id="sup-<?= $userInfo['id'] ?>" class="direct-chat-text${report}">${e.text}</div>
                            </div>`;
                    }
                    else {
                        var ap = `<div class="direct-chat-msg right">
                          <div class="direct-chat-info clearfix">
                            <span class="direct-chat-name pull-right">پشتیبانی</span>`;
                        if (<?= $userInfo['id'] ?> !=
                        '-1'
                    )
                        ap += `<span class="pull-left badge badge-danger mr-2 del-support-message" data-id="<?= $id ?>"><i class="fa fa-trash"></i></span>`;
                        ap += `<span class="direct-chat-timestamp pull-left">${e.timestamp}</span>
                          </div>
                            <img class="direct-chat-img" src="/view/dist/img/admin-logo.png" alt="user image">
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
        if ($('#support-text').val() != '') {
            $('#support-button').prop("disabled", true);
            $.ajax({
                type: "POST",
                url: "/webAPI/profile/chat/supportMessagesAdd",
                data: {
                    userID: <?= $userInfo['id'] ?>,
                    text: $('#support-text').val()

                },
                headers: {
                    "Authorization": "Basic ZWhzYW46ZWhzYW4"
                },
                success: function (response) {
                    console.log(response)
                    $('#support-button').prop("disabled", false);
                    $('#support-text').val('');
                    loadSupport();
                }
            });
        }
    });


    function updateIgnore(btn, id, idIgnored){
          if(idIgnored==1){
            idIgnored=0;
          }else{
            idIgnored=1;
          }
          let url = '/webAPI/profile/updateIgnore';
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
                if (res.success == true) {
                    payReqUserTable.ajax.reload(null, false);
                }
            }
        });
        
    }



    function loadModalPay(btn, id, isPaid,trackingCode){
        let modal = $('#loadModalPay')
        $(modal).find('#payment_Id').val(id)
        $(modal).find('#trackingCode').val(trackingCode)
        $(modal).modal('show')
      }


      


    
    
    
    
    $('#payment').click(function (e) {
        e.preventDefault();
        let url = '/webAPI/profile/payment';
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
                    payReqUserTable.ajax.reload(null, false);
                    $('#loadModalPay').modal('hide')
                    alertify.set('notifier', 'position', 'top-center');
                    alertify.success('اطلاعات با موفقیت بروز شد');
                }
            }
        });
    });


    $('#dis_payment').click(function (e) {
        e.preventDefault();
        let url = '/webAPI/profile/payment';
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
                    payReqUserTable.ajax.reload(null, false);
                    $('#loadModalPay').modal('hide')
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