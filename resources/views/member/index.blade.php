@extends('dashboard.layout')

@section('title')
    View Member
@endsection

@section('body-content')
    <div class="container py-4 d-flex flex-column justify-content-center ">
        <ol class="breadcrumb bg-transparent mb-0 pb-3 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-xxs fs-5">Member</li>
            <li class="breadcrumb-item text-lg text-dark active font-weight-bolder fs-5" aria-current="page">View Member</li>
        </ol>
        <form class="pb-5 " method="POST" action="#">
            <div class="row">
                <div class="col-md-5">
                    <div class=" input-group-outline my-3">
                        <label class="form-label">Name</label>
                        <input type="email" class="form-control">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class=" input-group-outline my-3">
                        <label class="form-label">National Identity Number</label>
                        <input type="text" class="form-control"> <!-- Changed type from email to text -->
                    </div>
                </div>
            </div>
        </form>
        <div class="row mb-4 ">
            <div class="col-lg-10 col-md-6 mb-md-0 ">
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
