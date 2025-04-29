@extends('dashboard.layout')

@section('title')
    Add New Book
@endsection

@vite([ 
    'resources/js/member/add-new-member.js',
    'resources/assets/libs/toastr/toastr.js',

])
@vite([
    'resources/assets/libs/toastr/toastr.css',
])

@section('body-content')
<h4 class="py-5 px-6 mb-4">
    @if (session('success'))
        <div class="alert alert-success text-white" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <span class="text-muted fw-light">Book /</span> Add New Book
    <hr>
</h4>
    <div class="container card py-4 d-flex flex-column justify-content-center mt-6 p-5 "
        >
        <form action="#" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group-outline my-3">
                        <label class="form-label fs-6">Code</label>
                        <input type="text" class="form-control" style="box-shadow: none " id="code" name="code"
                            required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class=" input-group-outline my-3">
                        <label class="form-label fs-6">Book Name</label>
                        <input type="text" class="form-control"style="box-shadow: none " id="book_name" name="book_name"
                            required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group-outline  my-3">
                        <label class="form-label fs-6">Author</label>
                        <input type="number" class="form-control" style="box-shadow: none "id="author" name="author"
                            required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class=" input-group-outline my-3">
                        <label class="form-label fs-6">Publisher</label>
                        <input type="email" class="form-control"style="box-shadow: none " id="publisher" name="publisher">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4 ">
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
            </div>

            <button type="submit" class="btn btn-success mt-5" style="width: 12rem">Save</button>
        </form>
    </div>
@endsection
