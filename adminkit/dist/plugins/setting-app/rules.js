$.ajax({
    type: "GET",
    url: "https://panel.qday-app.com/panel/rules",

    headers: {
        "Authorization": "Basic ZWhzYW46ZWhzYW4"
    },
    success: function (response) {
        $.each(response.data, function (i, e) {
            var q = `<tr>
          <td>${e.title}</td>
          <td>${e.text}</td>
          
        </tr>`;

            $('table.table').append(q);

        });
    }

});
