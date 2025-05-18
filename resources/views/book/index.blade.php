@extends('dashboard.layout')

@section('title')
    View Books
@endsection


@vite([
    'resources/assets/libs/toastr/toastr.js',
    'resources/css/app.css',  
    'resources/js/book/view-book.js', 
    'resources/js/app.js',
    'resources/scss/app.scss'
    
])


@section('body-content')
    <div class="container">
        <h4>
            @if (session('success'))
                <div class="alert alert-success text-white">
                    {{ session('success') }}
                </div>
            @endif
            <span class="text-muted fw-light">Books /</span> View Books
            <hr>
        </h4>
        <div class="container py-4 d-flex flex-column justify-content-center">
            <form class="card p-4" method="POST" action="#">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class=" input-group-outline my-3">
                            <label class="form-label">Book Name</label>
                            <input type="text" class="form-control" style="box-shadow: none " id="book_name"
                                name="book_name">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class=" input-group-outline my-3">
                            <label class="form-label">Code</label>
                            <input type="text" class="form-control" style="box-shadow: none " id="code"
                                name="code">
                        </div>
                    </div>
                </div>
            </form>
            <div class="row mt-4 py-3">
                <div class="card">
                    <div class="card-datatable text-nowrap table-responsive">
                        <table class="datatables-ajax table" id="datatables-ajax">
                            <thead>
                                <tr class="text-center">
                                    <th>Id</th>
                                    <th>Code</th>
                                    <th>Book Name</th>
                                    <th>Author</th>
                                    <th>Publisher</th>
                                    <th>Available</th>
                                    <th>Quantity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
