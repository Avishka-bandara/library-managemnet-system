import $ from "jquery";
import "datatables.net";

let dt;

const baseUrl = "http://127.0.0.1:8000/";
const dt_ajax_table = $(".datatables-ajax");


$(document).ready(function () {
    
    if (dt_ajax_table.length) {
        const table= dt_ajax_table.DataTable({
            processing: true,
            ajax: {
                url: baseUrl + "api/get-members",
                type: "GET",
                data: function (d) {
                    d.name = $('#name').val();
                    d.nic = $('#nic').val();
                },
            
                
            },
            columns: [
                { data: null, title: "" },
                { data: "member_name", title: "Name" },
                { data: "nic", title: "Nic" },
                { data: "address", title: "Address" },
                { data: "contact_number", title: "Contact Number" },
                { data: "email", title: "Email" },
                { data: "dob", title: "Dob" },
                {data: "is_active", title: "Status"},
                { data: "id", title: "Action"}        
            ],
            columnDefs:[
                {
                    targets: 0,
                    orderable: false,
                    searchable: false,
                    responsivePriority: 3,
                    render: function () {
                      return '<input type="checkbox" class="dt-checkboxes form-check-input">';
                    },
                    checkboxes: {
                      selectAllRender: '<input type="checkbox" class="form-check-input">'
                    }
                  },

                  {
                    targets: -1,
                    orderable: false,
                    searchable: false,
                    render: function (data) {
                        return (
                           ` <div class="d-inline-block">  
                                <a href= "/member/edit-member/${data}" style="text-decoration: none;"  class="text-secondary">
                                    <i class="fa fa-eye d-flex px-2 text-md mb-0 "aria-hidden="true">  </i>  
                                </a>
                            </div>`
                        );
                    },
                  },
                  {
                    targets: 7,
                    orderable: false,
                    searchable: false,
                    render: function (data) {
        
                        if(data == 1){
                            return `<span class="badge bg-success">Active</span>`;
                            
                    }
                    else{
                        return `<span class="badge bg-danger">Inactive</span>`;
                    }
                  },

                }

            ],
        });
        $('#name, #nic').on('input', function () {
            table.ajax.reload();
        });
    }
    
});
