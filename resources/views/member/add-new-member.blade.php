@extends('dashboard.layout')

@section('title')
    Add New Member
@endsection


@section('body-content')
<ol class="breadcrumb  mb-0 pb-3 pt-1 px-6 me-sm-6 me-5">
    <li class="breadcrumb-item text-xxs fs-4">Member</li>
    <li class="breadcrumb-item text-lg text-dark active font-weight-bolder fs-4" aria-current="page">Add New Member</li>
</ol>
<div class="container rounded shadow py-4 d-flex flex-column justify-content-center mt-6 p-5 " style="background-color: rgb(230, 239, 239)">
        <form action="#" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group-outline my-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" style="box-shadow: none " id="name" name="name" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class=" input-group-outline my-3">
                        <label class="form-label">Adress</label>
                        <input type="text" class="form-control"style="box-shadow: none " id="address" name="address" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group-outline  my-3">
                        <label class="form-label">Contact Number</label>
                        <input type="number" class="form-control" style="box-shadow: none "id="contact_number" name="contact_number" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class=" input-group-outline my-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control"style="box-shadow: none " id="email" name="email">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group-outline my-3">
                        <label class="form-label">Date Of Birth</label>
                        <input type="Date" class="form-control"style="box-shadow: none " id="dob" name="dob" required>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success mt-5" style="width: 12rem">Save</button>
        </form>
    </div>
@endsection
