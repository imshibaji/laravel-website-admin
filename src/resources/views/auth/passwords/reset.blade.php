@extends('admin::layouts.authLayout')
@section('content')
<!-- Log In page -->
        <div class="container">
            <div class="row vh-100 ">
                <div class="col-12 align-self-center">
                    <div class="auth-page">
                        <div class="card auth-card shadow-lg">
                            <div class="card-body">
                                <div class="px-3">
                                    <div class="auth-logo-box">
                                        <a href="/" class="logo logo-admin"><img src="{{ URL::asset('assets/images/logo-sm.png') }}" height="55" alt="logo" class="auth-logo"></a>
                                    </div><!--end auth-logo-box-->

                                    <div class="text-center auth-logo-text">
                                        <h4 class="mt-0 mb-3 mt-5">Reset Password</h4>
                                    </div> <!--end auth-logo-text-->

                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf

                                  <input type="hidden" name="token" value="{{ $token }}">
                                        <div class="form-group">
                                            <label for="username">Email</label>
                                            <div class="input-group mb-3">

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                            </div>
                                        </div><!--end form-group-->


                                 <div class="form-group">
                                            <label for="username">Password</label>
                                            <div class="input-group mb-3">
                                                <span class="auth-form-icon">
                                                    <i class="dripicons-user"></i>
                                                </span>
                               <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                            </div>
                                        </div><!--end form-group-->


                                         <div class="form-group">
                                            <label for="username">Confirm Password</label>
                                            <div class="input-group mb-3">
                                                <span class="auth-form-icon">
                                                    <i class="dripicons-user"></i>
                                                </span>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">


                                            </div>
                                        </div><!--end form-group-->

                                        <div class="form-group mb-0 row">
                                            <div class="col-12 mt-2">
                                                <button class="btn btn-gradient-primary btn-round btn-block waves-effect waves-light" type="submit">Reset Password <i class="fas fa-sign-in-alt ml-1"></i></button>
                                            </div><!--end col-->
                                        </div> <!--end form-group-->
                                    </form><!--end form-->
                                </div><!--end /div-->

                                <div class="m-3 text-center text-muted">
                                    <p class="">Don't have an account ?  <a href="{{ route('register') }}" class="text-primary ml-2">Free Register</a></p>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                        <div class="account-social text-center mt-4">
                            <h6 class="my-4">Or Login With</h6>
                            <ul class="list-inline mb-4">
                                <li class="list-inline-item">
                                    <a href="" class="">
                                        <i class="fab fa-facebook-f facebook"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="" class="">
                                        <i class="fab fa-twitter twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="" class="">
                                        <i class="fab fa-google google"></i>
                                    </a>
                                </li>
                            </ul>
                        </div><!--end account-social-->
                    </div><!--end auth-page-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <!-- End Log In page -->
@endsection
