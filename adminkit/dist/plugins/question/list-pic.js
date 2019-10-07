$.ajax({
    type: "GET",
    url: "https://panel.qday-app.com/panel/leaderbordListGpic",
    
    headers: {
      "Authorization": "Basic ZWhzYW46ZWhzYW4"
    },
    success: function (response) {
      $.each(response.data, function (i, e) {
        var q = `<tr>
                  <td>${e.id}</td>
                  <td>${e.currency}</td>
                  <th><button class="btn btn-sm btn-primary" onclick="edit(this, 6540)"><i class="fa fa-pencil"></i></button></th>
                  <th><button class="btn btn-sm btn-dark" onclick="delData(this, 6540)"><i class="fa fa-trash"></i></button></th>
                </tr>`;

        $('#example1 tbody').append(q);
        
      });
	}
      
    });
