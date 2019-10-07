$.ajax({
    type: "GET",
    url: "https://panel.qday-app.com/panel/leage_today",

    headers: {
        "Authorization": "Basic ZWhzYW46ZWhzYW4"
    },
    success: function (response) {
        $.each(response.data, function (i, e) {
            var q = `<tr>
          <td>${e.id}</td>
          <td>${e._cat}</td>
          <td>${e.prize}</td>
          <td>${e.won}</td>
          <td>${e.bot}</td>
          <td>${e.gameCount}</td>
          <td>${e.playerCount}</td>
          <td>${e.useLife}</td>
          
        </tr>`;

            $('table.table').append(q);

        });
    }

});
