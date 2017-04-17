// ajax.js file
$(function() {
$("#text_input").submit(function(){
    var values = $("text_input").serialize();
    //console.log(values);
    $.ajax({
      type: "POST",
      url: "signup_handler.php",
      data: values,
      success: function() {
        $("#first_name").val("");
        $("#last_name").val("");
        $("#email").val("");
        $("#password").val("");
      },
      error: function () {
        alert("FAILURE");
      }
    });
    return false;
  });

});