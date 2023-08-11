$(function () {

    $("#modal-trigger-btn").hide();

    $("#change").on("click", function (e) {
        e.preventDefault();
        checkPassword();
    });

    $("form").on("submit", function () {
        checkPassword();
    });
});

function checkPassword() {
    var new_password = $("#new_password").val();
    var confirm_password = $("#confirm_password").val();
    if (new_password.length < 8) {
        alert("Password character length should be atleast 8 character long.");
        console.log(confirm_password);
        return false;
    }

    if (new_password == confirm_password) {
        changePassword(new_password);
    } else {
        alert("Passwords does't matched! please check and try again.");
    }
}

function changePassword(password = "") {
    if (password.length > 0) {
        $.post("changePassword/change",
            { password: password },
            function (o) {
                if (o.res == true) {
                    alert("Password changed successfully");
                    resetControls("change-password-form");
                }
            }, 'json');
    }
}