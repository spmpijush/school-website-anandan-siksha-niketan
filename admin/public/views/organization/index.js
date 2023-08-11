$(function () {

    $.getJSON('organization/getData', function (o) {
        $.each(o, function (obj, val) {
            $(`#${obj}`).val(val);
        })
    });

    $("#save_data_btn").on('click', function (e) {
        // alert("click");
        e.preventDefault();

        let data = getControlsData('form');

        if ($("#company_name").val().length == 0) {
            $(document).Toasts('create', {
                title: 'Error',
                body: 'Company name field is mandatory',
                position: 'bottomRight',
                autohide: true,
                delay: 1500,
                class: 'bg-danger',
                icon: 'fas fa-close'
            });
            return false;
        }

        data = getControlsData("form", true);

        $.ajax({
            type: "POST",
            url: "organization/update",
            data: JSON.stringify(data),
            dataType: "json",
            success: function (data) {
                if (data.res == true) {

                    $(document).Toasts('create', {
                        title: 'Success',
                        body: 'Data updated',
                        position: 'bottomRight',
                        autohide: true,
                        delay: 5000,
                        class: 'bg-success',
                        icon: 'fas fa-check'
                    });
                }
            }
        });

    });
});