import $ from 'jquery';
import toastr from 'toastr';
let baseUrl = "http://127.0.0.1:8000/";

$(document).on('click', '#btn-delete', function (e){
    e.preventDefault();
    let bookId = $(this).val();
    let remarks = $('#remarks').val();
    if(remarks == ''){
        toastr.error('Please enter remarks');
        return;
    }

    $.ajax({
        url: baseUrl + 'api/delete-book/' + bookId,
        method: 'POST',
        data:{
            bookId: bookId,
            remarks: remarks
        },
        success: function(response){
            toastr.success(response.message);
            window.location.href = baseUrl + 'api/book';
        },
        error: function(xhr, status, error){
            toastr.error(xhr.responseJSON.message);
        }


    })
    
})


