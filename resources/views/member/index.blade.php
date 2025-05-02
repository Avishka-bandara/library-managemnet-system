@extends('dashboard.layout')

@section('title')
    View Member
@endsection

@vite([
    'resources/css/app.css', 
    'resources/js/member/view-member.js', 
    'resources/js/app.js'
])

@section('body-content')
    <div class="container">
        <h4>
            @if (session('success'))
                <div class="alert alert-success text-white">
                    {{ session('success') }}hello
                </div>
            @endif
            <span class="text-muted fw-light">Members /</span> View Members
            <hr>
        </h4>
        <div class="container py-4 d-flex flex-column justify-content-center">
            <form class=" card pb-4 " method="GET" action="#" id="submit-btn">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class=" input-group-outline my-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" style="box-shadow: none " name="name"
                                id="name">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class=" input-group-outline my-3">
                            <label class="form-label">National Identity Number</label>
                            <input type="text" class="form-control" style="box-shadow: none" name="nic"
                                id="nic">
                        </div>
                    </div>
                    {{-- <div class="col-md-5">
                    <div class=" input-group-outline my-3">
                        <input class="btn btn-success"type="submit" value="Search" id="submit-btn">
                    </div>
                </div> --}}
                </div>
            </form>
            <div class="row mt-4 py-3 ">
                <div class="col-lg-12 col-md-8 mb-md-0 ">

                    <div class="table-responsive">
                        <table class="table mb-0 datatables-ajax border" id="datatables-ajax">
                            <thead>
                                <tr class="text-center">
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Nic</th>
                                    <th>Address</th>
                                    <th>Contact Number</th>
                                    <th>Email</th>
                                    <th>Dob</th>
                                    <th>Status</th>
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
