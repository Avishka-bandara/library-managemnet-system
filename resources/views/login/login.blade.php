

@extends('login.layout')

@section('title')
    Login
@endsection


@section('content')             
          
              <p class="mb-6">Please sign-in in to the System</p>
              <form id="formAuthentication" class="mb-6" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-6">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Enter your email"
                    value="{{ old('email') }}"
                    />
                    
                </div>
                <div class="mb-6 form-password-toggle">
                  <label class="form-label" for="password">Password</label>
                  <div class="input-group input-group-merge">
                    <input type="password" id="password"class="form-control"name="password"aria-describedby="password"required autocomplete="current-password" />
                    <span class="input-group-text cursor-pointer"><i class="icon-base bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="mb-8">
                  <div class="d-flex justify-content-between">
                    <div class="form-check mb-0">
                      <input class="form-check-input" type="checkbox" id="remember-me" />
                      <label class="form-check-label" for="remember-me"> Remember Me </label>
                    </div>
                    <a href="{{ route('password.request') }}">
                      <span>Forgot Password?</span>
                    </a>
                  </div>
                </div>
                <div class="mb-6">
                  <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
                </div>
              </form>

              <p class="text-center">
                <span>Do you have an account?</span>
                <a href="{{ route('register') }}">
                  <span>Register</span>
                </a>
              </p>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

@endsection


   



   



   
