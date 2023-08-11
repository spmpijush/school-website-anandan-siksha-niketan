$(function () {

    $.getJSON('personalinfoCv/getData', function (o) {
        $.each(o, function (obj, val) {
            $(`#${obj}`).val(val);
        })
    });

    $("#save_data_btn").on('click', function (e) {
        e.preventDefault();
        let data = getControlsData('form');
        data = getControlsData("form", true);

        $.ajax({
            type: "POST",
            url: "personalinfoCv/update",
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

    // ============= SHOW HIDE EDUCATION SECTION START ===============
    getEducationData();
    function getEducationData() {
        $("#education_data").empty();
        var education_data = 0;
        $.getJSON('personalinfoCv/getEducationData', function (o) {
            $.each(o, function (i, rec) {
                education_data++;
                education_data += '<tr>';
                education_data += '<th scope="row">' + rec['degree'] + '</th>';
                education_data += '<td>' + rec['board_university'] + '</td>';
                education_data += '<td>' + rec['insititute'] + '</td>';
                education_data += '<td>' + rec['subject'] + '</td>';
                education_data += '<td>' + rec['passing_year'] + '</td>';
                education_data += '<td>' + rec['percentage'] + '</td>';
                education_data += '<td><i id="edit' + i + '" class="fas fa-edit"></i></td>';
                education_data += '<td><i id="remove' + i + '" class="fas fa-trash-alt"></i></td>';
                education_data += '</tr>';

                $("#education_data").append(education_data);

                $("#edit" + i).on("click", function () {
                    // alert(i);
                    $("#show_hide_education").slideDown();
                    $.each(rec, function (obj, val) {
                        $("#" + obj).val(val);
                    });
                });
            })

        });

        $("#show_hide_education").slideUp();
    }

    $("#show_hide_education_button").click(function (e) {
        e.preventDefault();
        $("#show_hide_education").slideDown();
    });

    $("#education_save_data").click(function (e) {
        e.preventDefault();

        if ($("#degree").val() == "" || $("#board_university").val() == "" || $("#insititute").val() == "") {
            alert("Wrong");
        } else {
            $.post("personalinfoCv/saveEducationData",
                {
                    degree: $("#degree").val(),
                    board_university: $("#board_university").val(),
                    insititute: $("#insititute").val(),
                    passing_year: $("#passing_year").val(),
                    subject: $("#subject").val(),
                    percentage: $("#percentage").val(),
                }, function (o) {
                    // swal("Successfully Submitted!", "You clicked the button!", "success");
                }, 'json');
            $("#degree").val("");
            $("#board_university").val("");
            $("#insititute").val("");
            $("#passing_year").val("");
            $("#subject").val("");
            $("#percentage").val("");
            $("#show_hide_education").slideUp();
            getEducationData();
        }
    });
    // ============= SHOW HIDE EDUCATION SECTION END ===============


    // ============= WORK - EXPERIENCE START ===============
    getWorkExperienceData();
    function getWorkExperienceData() {
        $("#work_experience_data").empty();
        var work_experience_data = null;
        $.getJSON('personalinfoCv/getWorkExperienceData', function (o) {
            $.each(o, function (i, rec) {
                work_experience_data += '<tr>';
                work_experience_data += '<th scope="row">' + rec['company'] + '</th>';
                work_experience_data += '<td>' + rec['position'] + '</td>';
                work_experience_data += '<td>' + rec['start_date'] + ' - ' + rec['end_date'] + '</td>';
                work_experience_data += '<td>' + rec['description'] + '</td>';
                work_experience_data += '<td><i class="fas fa-edit"></i></td>';
                work_experience_data += '<td><i class="fas fa-trash-alt"></i></td>';
                work_experience_data += '</tr>';
            })
            $("#work_experience_data").append(work_experience_data);
        });
        $("#show_hide_education").slideUp();
    }

    $("#show_hide_work_experience_section").slideUp();
    $("#show_hide_work_experience_button").click(function (e) {
        e.preventDefault();
        $("#show_hide_work_experience_section").slideDown();
    });

    $("#work_experience_submit").click(function (e) {
        e.preventDefault();
        if ($("#company").val() == "" || $("#position").val() == "" || $("#start_date").val() == "") {
            alert("Wrong");
        } else {
            $.post("personalinfoCv/saveWorkExperienceData",
                {
                    company: $("#company").val(),
                    position: $("#position").val(),
                    start_date: $("#start_date").val(),
                    end_date: $("#end_date").val(),
                    description: $("#description").val(),
                }, function (o) {
                    // swal("Successfully Submitted!", "You clicked the button!", "success");
                }, 'json');
            $("#company").val("");
            $("#position").val("");
            $("#start_date").val("");
            $("#end_date").val("");
            $("#description").val("");
            $("#show_hide_work_experience_section").slideUp();
            getWorkExperienceData();
        }

    });
    // ============= WORK - EXPERIENCE END ===============


    // ============= SKILS SECTION START ===============
    getSkilsData();
    function getSkilsData() {
        $("#skils_data").empty();
        var skils_data = null;
        $.getJSON('personalinfoCv/getSkilsData', function (o) {
            $.each(o, function (i, rec) {
                skils_data += '<tr>';
                skils_data += '<th scope="row">' + rec['skils_name'] + '</th>';
                skils_data += '<td>' + rec['skils_percentage'] + '%</td>';
                skils_data += '<td><i class="fas fa-edit"></i></td>';
                skils_data += '<td><i class="fas fa-trash-alt"></i></td>';
                skils_data += '</tr>';
            })
            $("#skils_data").append(skils_data);
        });
        $("#show_hide_skils_section").slideUp();
    }

    $("#show_hide_skils_btn").click(function (e) {
        e.preventDefault();
        $("#show_hide_skils_section").slideDown();
    });

    $("#skils_submit").click(function (e) {
        e.preventDefault();
        if ($("#skils_name").val() == "" || $("#skils_percentage").val() == "") {
            alert("Wrong");
        } else {
            $.post("personalinfoCv/saveSkilsData",
                {
                    skils_name: $("#skils_name").val(),
                    skils_percentage: $("#skils_percentage").val(),
                }, function (o) {
                    // swal("Successfully Submitted!", "You clicked the button!", "success");
                }, 'json');
            $("#skils_name").val("");
            $("#skils_percentage").val("");
            $("#show_hide_skils_section").slideUp();
            getSkilsData();
        }

    });

    // ============= SKILS SECTION END ===============


    // ============= GALLERY SECTION START ===============
    getGalleryData();
    function getGalleryData() {
        // $("#gallery_data").empty();
        var gallery_data = "";
        $.getJSON('personalinfoCv/getGalleryData', function (o) {
            if (o.length >= 4) {
                $("#main_file_box").slideUp();
            } else {
                $("#main_file_box").slideDown();
            }
            $.each(o, function (i, rec) {
                gallery_data += '<div class="col-lg-3 col-md-4 col-12">';
                gallery_data += '<div class="text-center bg-white p-2 rounded-3">';
                gallery_data += '<img src="../../website/public/uploads/cv/' + rec['file'] + '" for="formFile" class="gallery_img" alt="...">';
                gallery_data += '<i class="fas fa-trash-alt mt-3"></i>';
                gallery_data += '</div>';
                gallery_data += '</div>';
            })
            $("#gallery_data").append(gallery_data);
        });
    }
    // ============= GALLERY SECTION END ===============
});