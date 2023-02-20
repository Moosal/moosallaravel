<?php $page = 'forgot-password'; ?>
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
                            <h3 class="account-title">Forgot Password?</h3>
                            <p class="account-subtitle">Enter your email to get a password reset link</p>

                            <!-- Account Form -->
                            <form>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn btn-primary account-btn" type="submit">Reset Password</button>
                                </div>
                                <div class="account-footer">
                                    <p>Remember your password? <a href="{{ url('login') }}">Login</a></p>
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
