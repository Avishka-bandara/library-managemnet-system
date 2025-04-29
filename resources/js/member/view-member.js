import $ from "jquery";

const baseUrl = "http://127.0.0.1:8000/";

$(document).ready(function () {
    // Example: Trigger on page load or button click
    $.ajax({
        url: baseUrl + "api/get-members",
        type: "GET",
        success: function (data) {
            console.log(data);            
        },
        error: function (xhr) {
            console.error(xhr.responseText);
        }
    });
});