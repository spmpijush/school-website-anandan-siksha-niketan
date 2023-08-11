$(function () {
    
    $("#login").on("click", function (e) {
        e.preventDefault();

        if($("#user_id").val().length == 0) {
            alert("Please enter your user id!");
        } else if($("#password").val().length == 0) {
            alert("Please enter your password!");
        } else {
            // do login
            $.ajax({
                type: "POST",
                url: "login/getLogin",
                data: JSON.stringify({
                        user_id: $("#user_id").val(),
                        password: $("#password").val()
                    }),
                dataType: "json",
                success: function(o) {
                    if(o.exist == 1) {
                        window.location.replace("dashboard");
                    } else {
                        alert(o.msg);
                    }
                }
            });
        }
    });

});