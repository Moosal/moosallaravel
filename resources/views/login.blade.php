<?php $page = 'login'; ?>
@extends('layout.mainlayout')
@section('content')

    <body class="account-page">

        <!-- Main Wrapper -->
        <div class="main-wrapper">
            <div class="account-content">
                <div class="container">

                    <!-- Account Logo -->
                    <div class="account-logo">
                        <a href="{{ url('dashboard') }}"><img src="{{ URL::asset('assets/img/logo2.png') }}"
                                alt="Dreamguy's Technologies"></a>
                    </div>
                    <!-- /Account Logo -->

                    <div class="account-box">
                        <div class="account-wrapper">
                            <h3 class="account-title">Login</h3>
                            <p class="account-subtitle">Access to our dashboard</p>


                            <!-- Account Form -->

                            <form method="POST" action="{{ route('login.custom') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="text" placeholder="Email" id="email" class="form-control"
                                        name="email" value="admin@dreamguys.co.in">
                                    <div class="text-danger pt-2">
                                        @error('0')
                                            {{ $message }}
                                        @enderror
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group Password-icon">
                                    <div class="row">
                                        <div class="col">
                                            <label>Password</label>
                                        </div>
                                        <div class="col-auto">
                                            <a class="text-muted" href="{{ url('forgot-password') }}">
                                                Forgot password?
                                            </a>
                                        </div>
                                    </div>
                                    <div class="position-relative">
                                        <input type="password" placeholder="Password" id="password"
                                            class="form-control pass-input" name="password" value="123456"><span
                                            class="fa fa-eye-slash toggle-password"></span>
                                        <div class="text-danger pt-2">
                                            @error('password')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group text-center">
                                    <button class="btn btn-primary account-btn" type="submit">Login</button>
                                </div>
                                <div class="account-footer">
                                    <p>Don't have an account yet? <a href="{{ url('registration') }}">Register</a></p>
                                </div>
                            </form>
                            <!-- /Account Form -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Wrapper -->
    @endsection
