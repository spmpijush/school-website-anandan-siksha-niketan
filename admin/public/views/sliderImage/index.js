$(function () {

    $("#save_btn").on("click", function (e) {
        e.preventDefault();
        if ($("#file").val() == 0) {
            create();
        }
    });
});

function create() {

    // if ($("#file").attr("src").length == 0) {
    //     alert("Please enter the file");
    //     return false;
    // }
    // btnLoader("save_btn", true);

    data = getControlsData("ui-form", false);
    data['file'] = $("#file").attr("src");

    $.ajax({
        type: "POST",
        url: "sliderImage/create",
        data: JSON.stringify(data),
        dataType: "json",
        success: function (output) {
            if (total_data == 0)
                clearList();
            if (output.last_id == 0) {
                alert(output.res);
                return;
            }
            if (output.res == true) {
                btnLoader("save_btn", false);
                getList();
                $("#file").attr("src", "");
                $("#file-size-warning").empty();
                $("#ui-modal").modal("hide");
                resetControls("ui-form");
                alert("Data successfully saved.");
            }
        }
    });
}