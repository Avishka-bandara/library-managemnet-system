@extends('dashboard.layout')

@section('title')
    View Books
@endsection


@section('body-content')

<ol class="breadcrumb  mb-0 pb-3 pt-1 px-6 me-sm-6 me-5">
    <li class="breadcrumb-item text-xxs fs-4">Book</li>
    <li class="breadcrumb-item text-lg text-dark active font-weight-bolder fs-4" aria-current="page">View Books</li>
</ol>
<div class="container py-4 d-flex flex-column justify-content-center">
        <form class="pb-5 " method="POST" action="#">
            <div class="row">
                <div class="col-md-5">
                    <div class=" input-group-outline my-3">
                        <label class="form-label">Book Name</label>
                        <input type="text" class="form-control" style="box-shadow: none " id="book_name" name="book_name">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class=" input-group-outline my-3">
                        <label class="form-label">Code</label>
                        <input type="text" class="form-control" style="box-shadow: none " id="code" name="code"> 
                    </div>
                </div>
            </div>
        </form>
        <div class="row mb-4">
            <div class="col-lg-10 col-md-8 mb-md-0 ">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7">code</th>
                                    <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">book name</th>
                                    <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">author</th>
                                    <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">catergory</th>
                                    <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">status</th>
                                    <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">Action</th>
                                </tr>
                            </thead>
                            <tbody >
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 text-md mb-0 "> Spotify                                   
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2 text-md mb-0 "> Spotify                                   
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2 text-md mb-0 "> Spotify                                   
                                        </div>
                                    </td>
                                    <td class="align-middle text-center">
                                        <div class="d-flex px-2 text-md mb-0 "> Spotify                                   
                                        </div>
                                    </td>

                                    <td class="align-middle">
                                        <button class="btn btn-success mb-0">
                                            Available
                                        </button>
                                    </td>
                                    <td class="align-middle">
                                        <a href="{{route('book.edit-book')}}" style="text-decoration: none;" class="text-secondary"><i class="fa fa-eye d-flex px-2 text-md mb-0 " aria-hidden="true"></i></a>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    

@endsection