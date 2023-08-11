$(function () {

    $("<div>", {
        class: "row",
        id: "r1"
    }).appendTo("#ui-form");

    $("<div>", {
        class: "col-md-12",
        id: "r1c12"
    }).appendTo("#r1");

    $("<div>", {
        class: "form-group",
        id: "r1c12f1"
    }).appendTo("#r1c12");


    // form
    // sl management
    $("<input>", {
        type: "hidden",
        id: "id_slider_images",
        name: "id_slider_images"
    }).appendTo("#r1c12f1");

    // Name
    $("<label>", {
        text: "Image caption"
    }).appendTo("#r1c12f1");

    $("<input>", {
        type: "text",
        id: "image_caption",
        name: "image_caption",
        class: "form-control"
    }).appendTo("#r1c12f1");

    // Designation
    $("<label>", {
        text: "Image description"
    }).appendTo("#r1c12f1");

    $("<input>", {
        type: "text",
        id: "image_description",
        name: "image_description",
        class: "form-control"
    }).appendTo("#r1c12f1");

    // file
    $("<label>", {
        text: "Image (Image size should be near 800x450px)"
    }).appendTo("#r1c12f1");

    $("<input>", {
        type: "file",
        id: "file",
        class: "form-control",
        accept: ".jpg, .JPG, .jpeg, .png, .PNG",
    }).appendTo("#r1c12f1");

    $("<img />", {
        id: "file_base64",
        src: ""
    }).appendTo("#r1c12f1");

    $("<label>", {
        text: "(Only .jpg, .png file allowed to upload)"
    }).appendTo("#r1c12f1");

    $("<label>", {
        id: "file-size-warning"
    }).appendTo("#r1c12f1");
});