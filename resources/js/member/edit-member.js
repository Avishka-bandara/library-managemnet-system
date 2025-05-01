import toastr from "toastr";

import $ from "jquery";
import "datatables.net";

const baseUrl = "http://127.0.0.1:8000/";

$(document).on('click', '#delete-record', function(){
    let memberId = $(this).data('id');
    console.log(memberId);
    

    $.ajax({
        url: baseUrl + "api/delete-members/" + memberId,
        type: "POST",
        success: function(response){
            // toastr.success(response.message);
            window.location.href = baseUrl + "api/member";
        
        },
        error:function(xhr){
            toastr.warning(xhr.responseJSON.message || 'An error occurred.');
        }
    })
});



$(document).on('click', '#add-new-member', function(e){
    e.preventDefault();

    let memberId = $(this).data('id');

    // console.log(memberId);

    const formData = {
        
        name: $('#name').val(),
        email: $('#email').val(),
        contact_number: $('#contact_number').val(),
        address: $('#address').val(),
        dob: $('#dob').val(),

    }
    

    $.ajax({
        url: baseUrl + "api/update-member/" + memberId,
        type: "POST",
        data: formData,
        success: function(response){
            toastr.success(response.message);
           
        
        },
        error:function(xhr){
            toastr.warning('An error occurred.');
            console.log(xhr.responseJSON.message);
        }
    })
});