import $ from 'jquery';
// Make sure jQuery is loaded before this script in your HTML file
let baseurl ="http://127.0.0.1:8000/";

$(document).ready(function(){
    $('#name').on('change',function(){
        const memberId = $(this).val();

        if(!memberId) {
            $('#nic').val('');
            return;
        }

        $.ajax({
            url: baseurl + 'api/get-member-nic/' + memberId,
            method: 'GET',
            success: function(response){
                $('#nic').val(response.data);
                // console.log(response.data);
                
            },
            error: function(){
                toastr.error('Error fetching NIC');
                $('#nic').val('');
            }
        });
        
    });
});








