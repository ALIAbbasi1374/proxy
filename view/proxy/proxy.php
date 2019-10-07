<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
<link rel="stylesheet" href="../../adminkit/dist/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../adminkit/dist/css/style.css">

    <title>نمایش پروکسی های فعال </title>
</head>
<body style="background-color: #0e0e0e">

<div class="content">
<h3 class="text-center text-blue">نمایش پروکسی های فعال </h3>
    <div class="card" style="background-color: #2f2f2f" >
          <div class="card-body">
           <div class="table-responsive">
             <table id="example1" class="table table-hover table-bordered">
               <thead>
                 <tr style="color: white">
                   <th scope="col">وضعیت</th>
                   <th scope="col">پروکسی</th>
                   
                 </tr>
               </thead>
               <tbody></tbody>
             </table>
          </div>
    
        </div>
    </div>
  
</div>


<script src="../../adminkit/dist/js/jquery.min.js"></script>


<script src="../../adminkit/dist/bootstrap/js/bootstrap.min.js"></script>

<script>
$.ajax({
        type: "GET",
        url: "http://localhost/proxy/address",
        headers: {
            "Authorization": "Basic ZWhzYW46ZWhzYW4"
        },
        success: function (response) {
            $.each(response, function (i, e) {
                var q = `
                   <tr>
                    <th style="color: green">فعال</th>
                    <th><a href="${e}">${e}</a></th>
                    
                   </tr>
                     `;
                $('#example1 tbody').append(q);
            });
        }

  });
</script>

</body>
</html>