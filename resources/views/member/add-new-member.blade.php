@extends('dashboard.layout')

@section('title')
    Add New Member
@endsection

@vite(['resources/js/member/add-new-member.js'])


@section('body-content')
    <h4 class="py-5 px-6 mb-4">
        @if (session('success'))
            <div class="alert alert-success text-white" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <span class="text-muted fw-light">Member /</span> Add New Member
        <hr>
    </h4>
    <div class="container card py-2 d-flex flex-column justify-content-center mt-6 p-3 ">
        <form action="{{ route('member.add-new-member-save') }}" method="POST" id="add-new-member">
            @csrf
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="input-group-outline my-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" style="box-shadow: none " id="name" name="name"
                            value="{{ old('name') }}"required>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class=" input-group-outline my-3">
                        <label class="form-label">National Identity Number </label>
                        <input type="text" class="form-control" style="box-shadow: none " id="nic" name="nic"
                            value="{{ old('nic') }}" required>
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
                            value="{{ old('address') }}" required>
                            
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class=" input-group-outline my-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" style="box-shadow: none " id="email" name="email"
                            value="{{ old('email') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class=" input-group-outline my-3">
                        <label class="form-label">Contact number</label>
                        <input type="text" class="form-control" style="box-shadow: none " id="contact_number"
                            name="contact_number" value="{{ old('contact_number') }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group-outline my-3">
                        <label class="form-label">Date Of Birth</label>
                        <input type="Date" class="form-control" style="box-shadow: none " id="dob" name="dob"
                            value="{{ old('dob') }}" required>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success mt-5" id="add-new-member" style="width: 12rem">Save</button>
        </form>
    </div>
@endsection
