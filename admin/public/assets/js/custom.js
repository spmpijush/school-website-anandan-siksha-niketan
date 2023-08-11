function getControlsData(form_id, hidden = false) {
    data = {};

    if (hidden == true)
        data_type = "input[type=text], input[type=number], input[type=time], select, textarea, input[type=hidden]";
    else
        data_type = "input[type=text], input[type=number], input[type=time], select, textarea";

    var elements = document.querySelectorAll("#" + form_id + " " + data_type)

    for (var i = 0, element; element = elements[i++];) {
        data[element.name] = element.value;
    }
    return data;
}

function resetControls(form_id) {
    var elements = document.querySelectorAll("#" + form_id + " input[type=text], input[type=password], input[type=number], select, textarea, hidden")
    for (var i = 0, element; element = elements[i++];) {
        if (element.type == "hidden")
            element.value = 0;
        else
            element.value = "";
    }
}

function appendOption(val, show, id) {
    var html = "";
    html = '<option value="' + val + '">' + show + '</option>';
    $("#" + id).append(html);
}

// $('#loading-modal').modal({
// show:false,
// });	

$('#loading-modal').on('hide.bs.modal', function (e) {
    if (inProgess == true)
        return false;
});

function loadStart() {
    inProgess = true;
    // $('#loading-modal').modal('show');
}

function loadStop() {
    inProgess = false;
    // $('#loading-modal').modal('hide');
}

function divTableHeader(obj) {
    comp = '<div class="card bg-dark py-2 px-5 mb-1">';
    comp += '<div class="row">';
    $.each(obj, function (i, rec) {
        comp += '<div class="' + rec.class + '">' + rec.col_name + '</div>';
    });
    comp += '</div>';
    comp += '</div>';
    $("#item-list").html(comp);
}

function appendHeader(data) {
    comp = "<div class='card py-2 px-5 mb-1'>";
    comp += "<div class='row'>";
    for (var i = 0; i < data.length; i++) {
        comp += "<div class='col-md-" + data[i].width + "'>" +
            data[i].head_name + "</div>";
    }
    comp += "</div>";
    comp += "</div>";
    $("#item-list").append(comp);
}

function btnLoader(btnid = "", load = true) {
    if (load == true) {
        $("#" + btnid).attr("disabled", true);
        btn_text = $("#" + btnid).html();
        $("#" + btnid).html("<i class='fa fa-spinner fa-pulse'></i> Saving..");
        return false;
    }

    if (load == false) {
        $("#" + btnid).attr("disabled", false);
        $("#" + btnid).html(btn_text);
        return false;
    }
}

function appendTableHeader(data) {
    comp = "<tr>";
    for (var i = 0; i < data.length; i++) {
        comp += "<th>" + data[i].head_name + "</th>";
    }
    comp += "</tr>";
    $("#item-list").append(comp);
}


// NAV SECTION JS 
/*==================== SHOW NAVBAR ====================*/
const showMenu = (headerToggle, navbarId) => {
    const toggleBtn = document.getElementById(headerToggle),
        nav = document.getElementById(navbarId)

    // Validate that variables exist
    if (headerToggle && navbarId) {
        toggleBtn.addEventListener('click', () => {
            // We add the show-menu class to the div tag with the nav__menu class
            nav.classList.toggle('show-menu')
            // change icon
            toggleBtn.classList.toggle('bx-x')
        })
    }
}
showMenu('header-toggle', 'navbar')

/*==================== LINK ACTIVE ====================*/
const linkColor = document.querySelectorAll('.nav__link')

function colorLink() {
    linkColor.forEach(l => l.classList.remove('active'))
    this.classList.add('active')
}

linkColor.forEach(l => l.addEventListener('click', colorLink))