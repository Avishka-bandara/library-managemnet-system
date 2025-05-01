@extends('dashboard.layout')

@section('title')
    Edit Member
@endsection

@vite([
    'resources/js/member/edit-member.js',
    'resources/assets/libs/toastr/toastr.js',
    'resources/js/app.js',
    'resources/css/app.css',

])


@section('body-content')
<div class="container">
    <h4>
        @if (session('success'))
            <div class="alert alert-success text-white" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <span class="text-muted fw-light">Member /</span> Edit Member
        <hr>
    </h4>
    <div class="container card d-flex flex-column justify-content-center mt-6 p-3 ">
        <form data-id="{{$member->id}}" method="POST" id="add-new-member">
            @csrf
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="input-group-outline my-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" style="box-shadow: none " id="name" name="name"
                            value="{{$member->member_name}}"required>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class=" input-group-outline my-3">
                        <label class="form-label">National Identity Number </label>
                        <input type="text" class="form-control" style="box-shadow: none " id="nic" name="nic"
                            value="{{$member->nic}}" disabled>
                        @error('nic')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="input-group-outline  my-3">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" style="box-shadow: none "id="address" name="address"
                            value="{{$member->address}}" required>
                            
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class=" input-group-outline my-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" style="box-shadow: none " id="email" name="email"
                            value="{{$member->email}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class=" input-group-outline my-3">
                        <label class="form-label">Contact number</label>
                        <input type="text" class="form-control" style="box-shadow: none " id="contact_number"
                            name="contact_number" value="{{$member->contact_number}}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group-outline my-3">
                        <label class="form-label">Date Of Birth</label>
                        <input type="Date" class="form-control" style="box-shadow: none " id="dob" name="dob"
                            value="{{$member->dob}}" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">  
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="Active" name="active" value="1" @if($member->active) checked @endif>
                        <label class="form-check-label" for="Active">Active</label>
                      </div>                
                </div>
            </div>

            <button type="submit" class="btn btn-success mt-5" id="add-record" style="width: 10rem">update</button>
            <button type="submit" class="btn btn-danger mt-5" data-id="{{$member->id}}" id="delete-record">Remove</button>
        </form>
    </div>
</div>
@endsection
