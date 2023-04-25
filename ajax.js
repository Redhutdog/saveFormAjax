$("#submit").on('click', function(){
    $.ajax({
      type: 'POST',
      url: "server.php",
      data: $('#inputFormData').serialize(), 
      success: function(response) {
        $("#ajax-data").html(response);
      }
    });
});

$("#save").on('click', function(){
  $.ajax({
    type: 'POST',
    url: "server.php",
    async: false,
    data: $('#inputFormData').serialize(), 
    success: function(response) {
      $("#ajax-data").html(response);
    }
  });
});