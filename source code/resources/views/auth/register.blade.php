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
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Form Panel    -->
                    <div class="col-lg-6 bg-white">
                        <div class="form d-flex align-items-center">
                            <div class="content">
                                <form id="register-form" method="post" action="{{ route('register') }}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input id="register-username" type="text" class=" input-material form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>
                                        <label for="register-username" class="label-material">Name</label>
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input id="register-email" type="email" name="email" value="{{ old('email') }}" required class="input-material {{ $errors->has('email') ? ' is-invalid' : '' }}">
                                        <label for="register-email" class="label-material">Email Address      </label>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input id="register-passowrd" type="password" class=" input-material form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                        <label for="register-passowrd" class="label-material">password        </label>
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group terms-conditions">
                                        <input id="license" type="checkbox" class="checkbox-template">
                                        <label for="license">Agree the terms and policy</label>
                                    </div>
                                    <input id="register" type="submit" value="Register" class="btn btn-primary">
                                </form><small>Already have an account? </small><a href="{{route('login')}}" class="signup">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyrights text-center">
            <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a>
                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
            </p>
        </div>
    </div>
@endsection
