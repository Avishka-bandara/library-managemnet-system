@extends('dashboard.layout')

@section('title')
    View Member
@endsection

@vite([
    'resources/js/member/view-member.js',
])

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
                        <table class="table align-items-center mb-0 datatables-ajax" id="datatable-ajax">
                            <thead>
                                <tr class="text-center">
                                    <th>Name</th>
                                    <th>contact number</th>
                                    <th>return date</th>
                                    <th>Status</th>
                                    <th>View</th>
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
