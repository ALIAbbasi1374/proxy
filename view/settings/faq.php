<?php
include __DIR__ . "/../includes/auth.php";
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> سوالات متداول </title>
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
                <li><i class="fa fa-angle-left"></i> تنظیمات اپلیکیشن</li>
                <li><i class="fa fa-angle-left"></i> سوالات متداول</li>
            </ol>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <button class="btn btn-success fl-l" onclick="loadModal('new','','')" id="new-off-code">افزودن</button>
                            <h4 class="text-black inline">سوالات متداول</h4>
                            <br><br>
                            <div class="table-responsive mt-1">
                                <table class="table table-hover table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">عنوان</th>
                                        <th scope="col">متن</th>
                                        <th scope="col">حذف</th>
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


<?php include __DIR__ . "/../includes/footer.php"; ?>

</div>


<div class="modal fade" id="newItem" tabindex="-1" role="dialog" aria-labelledby="newItemLabel" aria-hidden="true"
     dir=rtl>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title" id="newItemLabel">آیتم جدید</h5>
            </div>
            <div class="modal-body">
                <form action="/webAPI/settings/faqAdd" method="POST">
                    <div class="form-group">
                        <label for="newQuestion">سوال</label>
                        <textarea class="form-control mt-1" name="question" id="newQuestion"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="newAnswer">پاسخ</label>
                        <textarea class="form-control mt-1" name="answer" id="newAnswer"></textarea>
                    </div>
                    <input name="id" id="faq_Id" value="new" hidden>
                    
                    <div class="modal-footer">
                        <button id="modalSaveButton" type="submit" class="btn btn-success">ثبت</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="deleteItem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <h5 class="text-black">حذف  سوال</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" dir="ltr">
                    <div class="form-group">
                        <label for="delete_Name" class="col-form-label text-black">آیا از حذف سوال خود اطمینان دارید ؟</label>
                    </div>
                    <input  id="delete_question_Id"  hidden>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">انصراف</button>
                <button type="submit" class="btn btn-danger" id="delete_question_btn">حذف</button>
            </div>
            </div>
        </div>
    </div>
</div>


<script src="/view/dist/js/jquery.min.js"></script>
<script src="/view/dist/bootstrap/js/bootstrap.min.js"></script>
<script src="/view/dist/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/view/dist/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
    var FaqTable;
    $(function () {
         FaqTable = $('table').DataTable({
            "bProcessing": true,
            "serverSide": true,
            "ajax": {
                url: `/webAPI/settings/faq`,
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


    function loadModal(id, question,answer) {
        let modal = $('#newItem')
        $(modal).find('#faq_Id').val(id)
        $(modal).find('#newQuestion').val(question)
        $(modal).find('#newAnswer').val(answer)
        $(modal).modal('show')

    }




    function deleteItem(id) {
        let modal = $('#deleteItem')
         $(modal).find('#delete_question_Id').val(id)
        $(modal).modal('show')

    }


    $('#delete_question_btn').click(function (e) {
        e.preventDefault();
        let url = '/webAPI/settings/deletefaq';
        $.ajax({
            type: "POST",
            url: url,
            data: {
                    id : $('#delete_question_Id').val(),
            },
            headers: {
                "Authorization": "Basic ZWhzYW46ZWhzYW4"
            },
            success: function (res) {
                if (res.success == true) {
                    FaqTable.ajax.reload(null, false);
                    $('#deleteItem').modal('hide')
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