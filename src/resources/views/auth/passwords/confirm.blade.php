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
                                        <h4 class="mt-0 mb-3 mt-5">Let's Get Started Metrica</h4>
                                        <p class="text-muted mb-0">{{ __('Please confirm your password before continuing.') }}</p>
                                    </div> <!--end auth-logo-text-->

                    <form method="POST" class="form-horizontal auth-form my-4" action="{{ route('password.confirm') }}">
                        @csrf
                                        <div class="form-group">
                                            <label for="username">Password</label>
                                            <div class="input-group mb-3">
                                                <span class="auth-form-icon">
                                                    <i class="dripicons-user"></i>
                                                </span>
                                               <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                            </div>
                                        </div><!--end form-group-->

                                        <div class="form-group mb-0 row">
                                            <div class="col-12 mt-2">
                                                <button class="btn btn-gradient-primary btn-round btn-block waves-effect waves-light" type="submit">Confirm Password <i class="fas fa-sign-in-alt ml-1"></i></button>
                                            </div><!--end col-->
                                        </div> <!--end form-group-->
                                    </form><!--end form-->
                                </div><!--end /div-->

                                <div class="m-3 text-center text-muted">
                                     @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end auth-page-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <!-- End Log In page -->
@endsection
