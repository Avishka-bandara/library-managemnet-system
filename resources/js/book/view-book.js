import $ from 'jquery';
import "datatables.net";
import toastr from 'toastr';

const baseUrl = "http://127.0.0.1:8000/"
const dt_ajax_table = $(".datatables-ajax");

$(document).ready(function(){

    if (dt_ajax_table.length){
       const table=  dt_ajax_table.DataTable({
            processing: true,
            ajax:{
                url : baseUrl+ "api/get-books", 
                type: "GET",
                data: function(d){
                    d.book_name = $('#book_name').val();
                    d.book_isbn = $('#code').val();
                },
            },
            columns:[
                { data: null, title: ""},
                { data: "book_isbn", title: "Code"},
                { data: "book_name", title: "Book Name"},
                { data: "book_author", title: "Author"},
                { data: "book_publisher", title: "Publisher"},
                { data: "is_available", title: "Available"},
                { data: "quantity", title: "Quantity"},
                { data: "id", title: "Action"},
                
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
                    targets: 5,
                    orderable: false,
                    searchable: false,
                    render: function(data){
                        if(data === 1){
                            return(
                                `<span class="badge bg-success">Available</span>`
                            )
                        }
                        else if(data === -1){
                            return(
                            `<span class="badge bg-secondary">Removed</span>`
                        )
                        }
                        else{
                            return(
                                `<span class="badge bg-danger">Unavailable</span>`
                            )
                        }
                        
                    }
                  },
                  {
                    targets:- 1,
                    orderable: false,
                    searchable: false,
                    render: function(data){
                        return(`
                             <div class="d-inline-block">  
                                <a href= "book/edit-book/${data}" style="text-decoration: none;"  class="text-secondary">
                                    <i class="fa fa-eye d-flex px-2 text-md mb-0 "aria-hidden="true">  </i>  
                                </a>
                            </div>
                            `)
                    }

                  }

            ]
        });
         $('#book_name, #code').on('input', function () {
            table.ajax.reload();
                });
    }

});