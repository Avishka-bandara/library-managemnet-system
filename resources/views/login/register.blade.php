@extends('login.layout')

@section('title')
    Register
@endsection

@section('content')
    <p class="mb-6">Please sign-in in to the System</p>
    <form id="formAuthentication" class="mb-6" action="{{ route('register') }}" method="POST">
        @csrf
        
        <div class="mb-6">
            <label for="email" class="form-label">Email</label>
            <input type="email"class="form-control" id="email" name="email" placeholder="Enter your email"
                :value="__('Email')" />
        </div>
        <div class="mb-6">
            <label for="Username" class="form-label">Name</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Enter your name"
                :value="__('Name')" />
        </div>
        <div class="mb-6">
            <label for="contactNo" class="form-label">Contact number</label>
            <input type="text" class="form-control" id="contactNo" name="contactNo"
                placeholder="Enter your contact number" :value="__('contactNo')" />
        </div>
        <div class="mb-6 form-password-toggle">
            <label class="form-label" for="password">Password</label>
            <div class="input-group input-group-merge">
                <input type="password" id="password"class="form-control" name="password" aria-describedby="password" :value="__('Password')"
                   />
                <span class="input-group-text cursor-pointer"><i class="icon-base bx bx-hide"></i></span>
            </div>
        </div>
        <div class="mb-6 form-password-toggle">
            <label class="form-label" for="password_confirmation">Password</label>
            <div class="input-group input-group-merge">
                <input type="password" id="password_confirmation"class="form-control" name="password_confirmation"
                    aria-describedby="password" :value="__('Confirm Password')"/>
                <span class="input-group-text cursor-pointer"><i class="icon-base bx bx-hide"></i></span>
            </div>
        </div>
        <div class="mb-6">
            <button class="btn btn-primary d-grid w-100" type="submit">Register</button>
        </div>
    </form>
 
@endsection
