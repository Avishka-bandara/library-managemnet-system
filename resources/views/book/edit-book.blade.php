@extends('dashboard.layout')

@section('title')
    Edit Book
@endsection

@vite([
    'resources/assets/libs/toastr/toastr.js',
    'resources/assets/libs/toastr/toastr.css',
    'resources/css/app.css',  
    'resources/js/book/edit-book.js', 
    'resources/js/app.js',
    'resources/scss/app.scss'
])


@section('body-content')

<ol class="breadcrumb  mb-0 pb-3 pt-1 px-6 me-sm-6 me-5">
    <li class="breadcrumb-item text-xxs fs-4">Book</li>
    <li class="breadcrumb-item text-lg text-dark active font-weight-bolder fs-4" aria-current="page">Edit Book</li>
</ol>
<div class="container rounded shadow py-4 d-flex flex-column justify-content-center mt-6 p-5 "
    style="background-color: rgb(230, 239, 239)">
    <form action="#" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="input-group-outline my-3">
                    <label class="form-label fs-6">Code</label>
                    <input type="text" class="form-control" style="box-shadow: none " id="code" name="code" value="{{ $book->book_isbn }}"
                        required>
                </div>
            </div>
            <div class="col-md-6">
                <div class=" input-group-outline my-3">
                    <label class="form-label fs-6">Book Name</label>
                    <input type="text" class="form-control"style="box-shadow:none " id="book_name" name="book_name" value="{{ $book->book_name }}" 
                        required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="input-group-outline  my-3">
                    <label class="form-label fs-6">Author</label>
                    <input type="text" class="form-control" style="box-shadow: none "id="author" name="author" value="{{ $book->book_author }}"
                        required>
                </div>
            </div>
            <div class="col-md-6">
                <div class=" input-group-outline my-3">
                    <label class="form-label fs-6">Publisher</label>
                    <input type="text" class="form-control"style="box-shadow: none " id="publisher" name="publisher" value="{{ $book->book_publisher }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="input-group-outline">
                    <label class="form-label fs-6 my-3">Category</label>
                    <select class="form-select" id="category" name="category" style="box-shadow: none;">
                        <option selected disabled>Select Category</option>
                        <option value="Action">Action</option>
                        <option value="Another action">Another action</option>
                        <option value="Something else">Something else here</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="textarea  my-3">
                    <label class="form-label fs-6">Remarks</label>
                    <textarea class="form-control" style="box-shadow: none; aria-label:With textarea;" id="remarks" name="remarks"></textarea>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-success mt-5" style="width: 12rem">Update</button>
        <button type="button" id="btn-delete" class="btn btn-danger mt-5 " value="{{ $book->id }}" >Delete</button>
    </form>
</div>
@endsection