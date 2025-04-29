@extends('dashboard.layout')

@section('title')
    View Member
@endsection

@section('body-content')
<h4 class="py-5 px-6 mb-4">
    @if (session('success'))
    <div class="alert alert-success text-white" role="alert">
        {{ session('success') }}
    </div>
    @endif
    <span class="text-muted fw-light">Members /</span> View Members
    <hr>
</h4>
<div class="container py-4 d-flex flex-column justify-content-center">
        <form class=" card p-3 " method="POST" action="#">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class=" input-group-outline my-3">
                        <label class="form-label">Name</label>
                        <input type="email" class="form-control" style="box-shadow: none ">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class=" input-group-outline my-3">
                        <label class="form-label">National Identity Number</label>
                        <input type="text" class="form-control" style="box-shadow: none "> 
                    </div>
                </div>
            </div>
        </form>
        <div class="row mt-4 py-3 ">
            <div class="col-lg-12 col-md-8 mb-md-0 ">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7">Name</th>
                                    <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">
                                        contact number</th>
                                    <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">
                                        return date</th>
                                    <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">
                                        Status</th>
                                    <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">View
                                    </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2">
                                            <div>
                                                <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/logos/small-logos/logo-spotify.svg"
                                                    class="avatar avatar-sm rounded-circle me-2">
                                            </div>
                                            <div class="my-auto">
                                                <h6 class="mb-0 text-md">Spotify</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-md font-weight-normal mb-0">$2,500</p>
                                    </td>
                                    <td>
                                        <span class="badge badge-dot me-4">
                                            <i class="bg-info"></i>
                                            <span class="text-dark text-md">working</span>
                                        </span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <div class="d-flex align-items-center">
                                            <span class="me-2 text-md">60%</span>
                                        </div>
                                    </td>

                                    <td class="align-middle">
                                        <button class="btn btn-link text-secondary mb-0">
                                            <span class="material-symbols-rounded">
                                                more_vert
                                            </span>
                                        </button>
                                    </td>
                                </tr>



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
