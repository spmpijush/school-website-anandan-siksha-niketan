$(function () {

    $("#save_btn").on("click", function (e) {
        e.preventDefault();
        if ($("#id_slider_images").val() == 0) {
            create();
        } else {
            update();
        }
    });
});

function create() {

    if ($("#file_base64").attr("src").length == 0) {
        alert("Please enter the file");
        return false;
    }
    // btnLoader("save_btn", true);

    data = getControlsData("ui-form", false);
    data['file_base64'] = $("#file_base64").attr("src");

    $.ajax({
        type: "POST",
        url: "sliderImageSetup/create",
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
                $("#file_base64").attr("src", "");
                $("#file-size-warning").empty();
                $("#ui-modal").modal("hide");
                resetControls("ui-form");
                alert("Data successfully saved.");
            }
        }
    });
}