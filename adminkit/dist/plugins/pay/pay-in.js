$.ajax({
    type: "GET",
    url: "https://panel.qday-app.com/panel/payment_in",
    
    headers: {
      "Authorization": "Basic ZWhzYW46ZWhzYW4"
    },
    success: function (response) {
      $.each(response.data, function (i, e) {
        var q = `<tr>
          <td>${e.userId}</td>
          <td><a class="btn btn-primary btn-sm" href="profile.php?id=${e.userId}" target="_blank">${e._members}</a></td>
          <td>${e.price}</td>
          <td>${e.timestamp}</td>
          <td>${e.success}</td>
          <td>${e.gate}</td>
          <td>${e.type}</td>
        </tr>`;

        $('table.table tbody').append(q);
        
      });
  }
      
    });
