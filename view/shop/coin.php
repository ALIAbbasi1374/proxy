<?php
include __DIR__ . "/../includes/auth.php";
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> فروشگاه سکه </title>
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
                <li><i class="fa fa-angle-left"></i> فروشگاه</li>
                <li><i class="fa fa-angle-left"></i> سکه</li>
            </ol>
        </div>
        <div class="content">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-black inline">تمامی موارد</h4>
                    <button onclick="loadModal('new','','0',0,0)" class="btn btn-success fl-l" id="new-off-code">
                        افزودن به فروشگاه
                    </button>
                    <div class="table-responsive">
                        <table id="example1" class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col" width="10px">#</th>
                                <th scope="col">عنوان</th>
                                <th scope="col">تعداد سکه</th>
                                <th scope="col">قیمت</th>
                                <th scope="col">قیمت الکی</th>
                                <th scope="col" width="10px">ویرایش</th>
                                <th scope="col" width="10px">نمایش</th>
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


<div class="modal fade" id="itemHander" tabindex="-1" role="dialog" aria-labelledby="itemHanderLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="itemHanderLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/webAPI/coinAdd" method="POST">
                    <input hidden id="shop-newID" value="0">
                    <div class="form-group">
                        <label for="name" class="col-form-label">عنوان:</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="quantity" class="col-form-label">تعداد سکه:</label>
                        <input class="form-control" name="quantity"  id="quantity" type="number">
                    </div>
                    <div class="form-group">
                        <label for="price" class="col-form-label">مبلغ پرداختی:</label>
                        <input class="form-control" name="price"  id="price" type="number">
                    </div>
                    <div class="form-group">
                        <label for="price" class="col-form-label">مبلغ پرداختی الکی:</label>
                        <input class="form-control" name="fullPrice"  id="fullPrice" type="number">
                    </div>

                    <input id="coin_Id" name="id" value="new" hidden>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">انصراف</button>
                        <button type="submit" class="btn btn-success" id="add_redeem_btn">ذخیره</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<script src="/view/dist/js/jquery.min.js"></script>
<script src="/view/dist/bootstrap/js/bootstrap.min.js"></script>
<script src="/view/dist/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/view/dist/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>
<script>
    var CoinTable;
    $(function () {
        CoinTable = $('#example1').DataTable({
            "bProcessing": true,
            "serverSide": true,
            "ajax": {
                url: `/webAPI/shop/coin`,
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


    function loadModal(id, name, quantity, price, fullPrice) {
        let modal = $('#itemHander')
        $(modal).find('#coin_Id').val(id)
        $(modal).find('#name').val(name)
        $(modal).find('#quantity').val(quantity)
        $(modal).find('#price').val(price)
        $(modal).find('#fullPrice').val(fullPrice)
        $(modal).modal('show')

    }


    
    function updateIgnore(btn, id, isVisible){
          if(isVisible==1){
            isVisible=0;
          }else{
            isVisible=1;
          }

          let url = '/webAPI/shop/updateIsVisible';
        $.ajax({
            type: "POST",
            url: url,
            data: {
                id: id,
                isVisible: isVisible
            },
            headers: {
                "Authorization": "Basic ZWhzYW46ZWhzYW4"
            },
            success: function (res) {
                console.log(res)
                if (res.success == true) {
                    CoinTable.ajax.reload(null, false);
                }
            }
        });
    }
</script>


<script src="/view/dist/js/adminkit.js"></script>
<script src="/view/dist/plugins/functions/dashboard1.js"></script>

<script src="/view/dist/plugins/functions/jquery.peity.init.js"></script>
</body>

</html>