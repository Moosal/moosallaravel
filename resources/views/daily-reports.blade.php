<?php $page = 'daily-reports'; ?>
@extends('layout.mainlayout')

@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Daily Report
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Daily Report
        @endslot
    @endcomponent

    <!-- Content Starts -->
    <div class="row justify-content-center">
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body text-center">
                    <h3><b>101</b></h3>
                    <p>Total Employees</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body text-center">
                    <h3 class="text-success"><b>84</b></h3>
                    <p>Today Present</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body text-center">
                    <h3 class="text-danger"><b>12</b></h3>
                    <p>Today Absent</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body text-center">
                    <h3><b>5</b></h3>
                    <p>Today Left</p>
                </div>
            </div>
        </div>
    </div>
    @component('components.searchfilter')
    @endcomponent
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable">
                    <thead>
                        <tr>
                            <th>Employee</th>
                            <th>Date</th>
                            <th>Department</th>
                            <th class="text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}"></a>
                                    <a href="{{ url('profile') }}">John Doe <span>#0001</span></a>
                                </h2>
                            </td>
                            <td>20 Dec 2020</td>
                            <td>Design</td>
                            <td class="text-center">
                                <button class="btn btn-outline-info btn-sm">Week off</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"></a>
                                    <a href="{{ url('profile') }}">Richard Miles <span>#0002</span></a>
                                </h2>
                            </td>
                            <td>20 Dec 2020</td>
                            <td>Web Developer</td>
                            <td class="text-center">
                                <button class="btn btn-outline-danger btn-sm">Absent</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-10.jpg') }}"></a>
                                    <a href="{{ url('profile') }}">John Smith <span>#003</span></a>
                                </h2>
                            </td>
                            <td>20 Dec 2020</td>
                            <td>Android Developer</td>
                            <td class="text-center">
                                <button class="btn btn-outline-info btn-sm">Week off</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-05.jpg') }}"></a>
                                    <a href="{{ url('profile') }}">Mike Litorus <span>#004</span></a>
                                </h2>
                            </td>
                            <td>20 Dec 2020</td>
                            <td>IOS Developer</td>
                            <td class="text-center">
                                <button class="btn btn-outline-info btn-sm">Week off</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-11.jpg') }}"></a>
                                    <a href="{{ url('profile') }}">Wilmer Deluna <span>#005</span></a>
                                </h2>
                            </td>
                            <td>20 Dec 2020</td>
                            <td>Team Leader</td>
                            <td class="text-center">
                                <button class="btn btn-outline-info btn-sm">Week off</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- /Content End -->
@endsection
