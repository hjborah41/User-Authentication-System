$(function() {

    $.ajax({
        url: "/UserAuthenticationSystem/Ajax_handler/shome_ajax.php",
        type: "POST",
        dataType: "json",
        data: {action: "handler"},
        beforeSend: function () {
            //alert("About to send an AJAX call");
        },
        success: function (x) {

            if (x.status == "OK") {
                $("#msg").html("<html><h1>Login Successful!!</h1></html>");
                $("#btnback").text("BACK");
            }
            else {
                $("#msg").html("<html><h1>Login Unsuccessful!!</h1></html>");
                $("#btnback").text("TRY AGAIN");
            }

        },
        error: function () {
            //alert("Error");
        },
    });

    $(document).on("click","#btnback", function() {
        
        document.location.replace("/UserAuthenticationSystem/UserInterface/slogin.php");

    });

});