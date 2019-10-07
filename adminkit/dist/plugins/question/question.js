$.ajax({
    type: "GET",
    url: "https://panel.qday-app.com/panel/faq",
    
    headers: {
      "Authorization": "Basic ZWhzYW46ZWhzYW4"
    },
    success: function (response) {
      $.each(response.data, function (i, e) {
        var q = `
          <tr>
          <th >${e.question}</th>
          <td >${e.answer}</td>
          </tr>`;

        $('#example1 tbody').append(q);
        
      });
	}
      
    });
