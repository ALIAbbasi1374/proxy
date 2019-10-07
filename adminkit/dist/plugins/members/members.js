$.ajax({
    type: "GET",
    url: "https://panel.qday-app.com/panel/users",

    headers: {
        "Authorization": "Basic ZWhzYW46ZWhzYW4"
    },
    success: function (response) {
        $.each(response.data, function (i, e) {
            var q = `<tr>
          <td><span class="badge badge-success">${e.id}</span></td>
          <td>${e.name}</td>
          <td>${e.regDate}</td>
          <td><div align="center">
          <span dir="ltr" class="badge badge-success">${e.in}</span>
          <span dir="ltr" class="badge badge-danger">${e.out}</span>
      </div></td>
      
          <td><div dir="ltr">
          <a class="btn btn-primary btn-sm" href="profile.php?id=${e.id}">پروفایل</a>
      </div></td>
          
        </tr>`;

            $('table.table').append(q);

        });
    }

});
