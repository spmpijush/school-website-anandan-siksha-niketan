$(function () {

	var win_h = $(window).height();
	$(".modal-body").css("height", (win_h - 180));
	$(".modal-body").css("min-height", (win_h - 180));
	$(".modal-body").css("overflow-y", "scroll");
	$(".modal-dialog").removeClass("modal-md");
	$(".modal-dialog").addClass("modal-xl");

	$("#modal-trigger-btn").on("click", function (e) {
		e.preventDefault();
		resetControls("ui-form");
		$(".modal-title").html("New slider image");
		$("#exampleModal").modal("show");
	});

	$(".modal-title").html("New slider image");

	headerData = [
		{ "head_name": "Image", "width": "7" },
		{ "head_name": "caption", "width": "2" },
		{ "head_name": "description", "width": "2" },
		{ "head_name": "", "width": "1" }
	];

	$("#file").on("change", function (e) {
		var filename = e.target.files[0].name;
		// console.log(filename);
		if (filename.length > 0) {

			var file = this.files[0];
			// console.log(file);
			if (file.type == "image/jpeg" || file.type == "image/png") {
				var filesize = (file.size / 1000).toFixed(2);
				var unit = 'kb';
				if (filesize > 5000) {
					filesize = (file.size / 1000).toFixed(2);
					unit = 'mb';
				}

				if (filesize > 5 && unit == 'mb') {
					alert("Maximum filesize for upload is 5 mb");
					$("#file").val('');
					$("#file-size-warning").empty();
					$("#file_base64").attr("src", "");
					return false;
				}

				if ((filesize >= 1 && unit == 'mb') || (filesize > 500 && unit == 'kb')) {
					$("#file-size-warning").html(
						"<div class='text-danger'> File size is too big, it will take some " +
						"time to upload when you click on save changes. </div>"
					);
				} else {
					$("#file-size-warning").empty();
				}

				var reader = new FileReader();
				reader.onload = function (e) {
					$("#file_base64").attr("src", e.target.result);
				}
				reader.readAsDataURL(file);

			} else {
				$("#file_base64").attr("src", "");
				$("#file-size-warning").empty();
				alert("This file format not supported for upload.");
			}
		}
	});

	getList();
});

function getList() {
	$.getJSON("sliderImageSetup/getList", function (o) {
		if (o.length == 0) {
			noData();
			return false;
		}
		clearList();
		appendHeader(headerData);
		$.each(o, function (i, rec) {
			appendData(i, rec);
		});
	});
}

function noData() {
	comp = '<div class="card text-center py-3 px-3">' +
		'No data entered till now!</div>';
	$("#item-list").append(comp);
}

function clearList() {
	$("#item-list").empty();
}

var total_data = 0;
function appendData(i, rec) {
	total_data++;
	comp = "<div class='card py-2 px-5 mb-1' id='data-list" + rec.id_slider_images + "'>";
	comp += "<div class='row'>";
	if (rec.file.length > 0) {
		comp += "<div class='col-md-7'>" +
			"<img src='../../website/public/" + rec.path + rec.file + "' class='' width='200px' height='120px'></div>";
	}
	else
		comp += "<div class='col-md-7'>N/A</div>";
	comp += "<div class='col-md-2'>" + rec.image_caption + "</div>";
	comp += "<div class='col-md-2'>" + rec.image_description + "</div>";
	comp += '<div class="col-1">';
	comp += '<i class="fa fa-trash-alt" id="remove' + i + '"></i>';
	comp += '</div>';
	comp += "</div>";
	comp += "</div>";
	$("#item-list").append(comp);

	$("#remove" + i).on("click", function () {
		remove(i, rec);
	});
}

function edit(i, rec, modal_title = "") {
	$(".modal-title").html(modal_title);
	$("#exampleModal").modal("show");
	$.each(rec, function (obj, val) {
		$("#" + obj).val(val);
	});
}


function remove(i, rec) {
	let conf = confirm("Are you sure you want to remove?");
	if (conf == true) {
		$.ajax({
			type: "POST",
			url: "sliderImageSetup/remove",
			data: JSON.stringify({ "id_slider_images": rec.id_slider_images }),
			dataType: "json",
			success: function (o) {
				total_data = total_data - 1;

				if (total_data == 0) {
					noData();
				}
				if (o.res == true) {
					$("#data-list" + rec.id_slider_images).remove();
				}
			}
		});
	}
}