import $ from 'jquery';
import toastr from 'toastr';
// Make sure jQuery is loaded before this script in your HTML file
let baseurl ="http://127.0.0.1:8000/";

$(document).ready(function(){
    $('#member_id').on('change',function(){
        const memberId = $(this).val();

        // if(!memberId) {
        //     $('#nic').val('');
        //     return;
        // }

        $.ajax({
            url: baseurl + 'api/get-member-nic/' + memberId,
            method: 'GET',
            success: function(response){
                $('#nic').val(response.data);
                // console.log(response.data);
                
            },
            // error: function(){
            //     toastr.error('Error fetching NIC');
            //     $('#nic').val('');
            // }
        });
        
    });
});


$(document).on('submit', '#release-book-form', function(e){
    e.preventDefault();
    let formData ={
        'book_id': $('#book_id').val(),
        'member_id': $('#member_id').val(),
        'nic': $('#nic').val(),
        'release_date': $('#release_date').val(),
        // 'return_date': $('#return_date').val(),
    };
    $.ajax({
        url: baseurl + 'api/release/release-new-book/save',
        method: 'POST',
        data: formData,
        success: function(response){
            toastr.success(response.message);
        },
        error: function(xhr){
            toastr.error('Error: ' + xhr.responseJSON.message); 
        }
    })

})







