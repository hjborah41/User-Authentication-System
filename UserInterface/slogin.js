$(function() {

  $(document).on("click","#btnlogin",function(){

    var rn = $("#txtRollNo").val().trim();
    var pw = $("#txtPassword").val().trim();

    if(rn == "" || pw == "")
      $("#errorMsg").text("Invalid Input");
    else{
      $("#errorMsg").text("");

      $.ajax({
        url: "/UserAuthenticationSystem/Ajax_handler/slogin_ajax.php",
        type: "POST",
        dataType: "json",
        data: { rollno: rn, password: pw, action: "loginHandler" },
        beforeSend: function() {
          //alert("About to send an AJAX call");
        },
        success: function(x) {

          if(x.status == "OK")
            document.location.replace("/UserAuthenticationSystem/UserInterface/shome.php");
          else
            $("#errorMsg").text("INVALID");

        },
        error: function() {
          //alert("Error");
        },
      });

    }
  });

});
