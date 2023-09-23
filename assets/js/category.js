$(document).on("submit", "#categoryForm", function (e) {
  e.preventDefault();
  var name = $("#name").val();
  var status = $("#status").val();

  $.ajax({
    url: "http://localhost/tutorial/ajax_practice_app/app/manageCategory.php",
    type: "POST",
    data: { name: name, status: status, create_category: true },
    success: function (response) {
      response = JSON.parse(response);
      if (response.status) {
        window.location.href = response.redirect_url;
      }
    },
  });
});
