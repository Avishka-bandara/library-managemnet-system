@extends('dashboard.layout')

@section('title')
    View Books
@endsection


@section('body-content')
    <h4 class="py-5 px-6 mb-4">
        @if (session('success'))
            <div class="alert alert-success text-white" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <span class="text-muted fw-light">Books /</span> View Books
        <hr>
    </h4>
    <div class="container py-4 d-flex flex-column justify-content-center">
        <form class="card p-3" method="POST" action="#">
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
                        <input type="text" class="form-control" style="box-shadow: none " id="code" name="code">
                    </div>
                </div>
            </div>
        </form>
        <div class="row mt-4 py-3">
            <div class="col-lg-12 col-md-8 mb-md-0 ">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7">code</th>
                                    <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">book
                                        name</th>
                                    <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">
                                        author</th>
                                    <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">
                                        catergory</th>
                                    <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">
                                        status</th>
                                    <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody>
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
                                        <button class="btn btn-success mb-0" style="pointer-events: none;">
                                            Available
                                        </button>
                                    </td>
                                    <td class="align-middle">
                                        <a href="{{ route('book.edit-book') }}" style="text-decoration: none;"
                                            class="text-secondary"><i class="fa fa-eye d-flex px-2 text-md mb-0 "
                                                aria-hidden="true"></i></a>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>
@endsection
