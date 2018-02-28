@extends('layouts.app')

@section('content')
    <div class="page login-page">
        <div class="container d-flex align-items-center">
            <div class="form-holder has-shadow">
                <div class="row">
                    <!-- Logo & Information Panel-->
                    <div class="col-lg-6">
                        <div class="info d-flex align-items-center">
                            <div class="content">
                                <div class="logo">
                                    <h1>Dashboard</h1>
                                </div>
                                <p>Login To Countinue..</p>
                            </div>
                        </div>
                    </div>
                    <!-- Form Panel    -->
                    <div class="col-lg-6 bg-white">
                        <div class="form d-flex align-items-center">
                            <div class="content">
                                <form id="login-form" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}
                                    @if ($errors->has('email'))
                                        <div class="alert alert-danger alert-dismissible fade show flash-alert" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <input id="login-username" type="email" name="email" value="{{ old('email') }}"  autofocus required="" class="input-material {{ $errors->has('email') ? ' is-invalid' : '' }}">
                                        <label for="login-username" class="label-material">Email</label>
                                    </div>
                                    <div class="form-group">
                                        <input id="login-password" type="password" name="password" required="" class="input-material {{ $errors->has('password') ? ' is-invalid' : '' }}">
                                        <label for="login-password" class="label-material">Password</label>
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <button id="login" type="submit" class="btn btn-primary">Login</button>
                                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                                    <div class="col-md-6 offset-md-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </form>
                                <a href="#" class="forgot-pass">Forgot Password?</a>
                                <br><small>Do not have an account? </small>
                                <a href="{{route('register')}}" class="signup">Signup</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyrights text-center">
            <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a>
                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
            </p>
        </div>
    </div>

@endsection

