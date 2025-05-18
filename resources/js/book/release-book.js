import $, { ajax } from 'jquery';
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
getMembers();
getBooks();

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
            window.location.reload();
            toastr.success(response.message);
            // $('#release-book-form')[0].reset();
        },
        error: function(xhr){
            toastr.error('Error: ' + xhr.responseJSON.message); 
        }
    })

})


function getBooks(){
    $.ajax({
        url: baseurl + 'api/get-available-books',
        method: 'GET',
        success: function(response){
            let options = '<option value="" readonly>Select Book</option>';
            response.data.forEach(element => {
                options += `<option value="${element.book_isbn}">${element.book_name}</option>`;
            });
            $('#book_id').html(options);
        }
    })

}


function getMembers(){
    $.ajax({
        url: baseurl + 'api/get-active-members',
        method: 'GET',
        success: function(response){
            let options = '<option value="" readonly>Select Member</option>';
            response.data.forEach(member => {
                options += `<option value="${member.id}">${member.member_name}</option>`;
            });
             $('#member_id').html(options);
        }
    })
    
        
}







