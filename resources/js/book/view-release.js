import $ from "jquery";
import "datatables.net";

const baseUrl = "http://127.0.0.1:8000/";
const dt_ajax_table = $(".datatables-ajax");

$(document).ready(function () {
    if (dt_ajax_table.length) {
        const table = dt_ajax_table.DataTable({
            processing: true,
            ajax: {
                url: baseUrl + "api/view-releases",
                type: "GET",
                data: function (d) {
                    d.book_name = $("#book_name").val();
                    d.book_isbn = $("#code").val();
                },
                // error: function (xhr, error, thrown) {
                //     console.error("AJAX error:", error, thrown);
                //     console.log("Response:", xhr.responseText);
                // },
            },
            columns: [
                { data: null, title: "" },
                { data: "code", title: "Code" },
                { data: "book_name", title: "Book Name" },
                { data: "member_name", title: "Member Name" },
                { data: "released_date", title: "Released Date" },
                { data: "returned_date", title: "Return Date" }, 
                // { data: "", title: "Status"},
                { data: "id", title: "Action" },
            ],
            columnDefs: [
                {
                    targets: 0,
                    orderable: false,
                    searchable: false,
                    responsivePriority: 3,
                    render: function () {
                        return '<input type="checkbox" class="dt-checkboxes form-check-input">';
                    },
                    checkboxes: {
                        selectAllRender:
                            '<input type="checkbox" class="form-check-input">',
                    },
                },
                //   {
                //     targets: 6,
                //     orderable: false,
                //     searchable: false,
                //     render: function(data){
                //         return(
                //             `<div>
                //                 <span class="badge badge-success">Available</span>
                //                 </div>`
                //         )
                //     }
                //   },
                {
                    targets: -1,
                    orderable: false,
                    searchable: false,
                    render: function (data) {
                        return `
                             <div class="d-inline-block">  
                                <a href= "book/edit-book" style="text-decoration: none;"  class="text-secondary">
                                    <i class="fa fa-eye d-flex px-2 text-md mb-0 "aria-hidden="true">  </i>  
                                </a>
                            </div>
                            `;
                    },
                },
            ],
        });
        $("#book_name, #code").on("input", function () {            
            table.ajax.reload();
        });
    }
});
